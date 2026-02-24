<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query();

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $jobs = $query->orderBy('id', 'DESC')->paginate(10);
        return view('backend.dashboard.job', compact('jobs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'hindititle' => 'required',
            'document' => 'required|mimes:doc,pdf,docx'
        ]);

        DB::beginTransaction();

        try {
            $fileNewName = null;

            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);
                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('includes/images/jobs'), $fileNewName);
            }

            Job::create([
                'title' => $request->title,
                'hindititle' => $request->hindititle,
                'document' => $fileNewName,
                'added_by'     => Auth::user()->name,
                'added_date'   => now(),
                'updated_by'   => Auth::user()->name,
                'updated_date' => now(),
                'status' => 2
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.job.index')
                ->with('success', 'Job uploaded successfully.');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function statusChange(Request $request)
    {
        $job = Job::find($request->id);

        if ($job) {
            $job->update([
                'status' => $request->job_status
            ]);

            return redirect()
                ->route('dashboard.job.index')
                ->with('success', 'Status Changed.');
        }

        return redirect()
                ->route('dashboard.job.index')
                ->with('error', 'Something went wrong.');
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);

        return view('backend.dashboard.jobedit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'hindititle' => 'required',
            'document' => 'nullable|mimes:doc,pdf,docx|max:20480'
        ]);

        DB::beginTransaction();

        try {
            $job = Job::findOrFail($id);

            $fileNewName = $job->document;

            if ($request->hasFile('document')) {
                $oldPath = public_path('includes/images/jobs/' . $job->document);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                $file = $request->file('document');
                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);

                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('includes/images/jobs'), $fileNewName);
            }

            $job->update([
                'title' => $request->title,
                'hindititle' => $request->hindititle,
                'document' => $fileNewName,
                'updated_by' => Auth::user()->name,
                'updated_date' => now(),
                'status' => 2
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.job.index')
                ->with('success', 'Job Updated Successfully');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Something went wrong.');
        }
    }

    public function delete($id)
    {
        $job = Job::findOrFail($id);

        if ($job->document && file_exists(public_path('includes/images/jobs/' . $job->document))) {
            unlink(public_path('includes/images/jobs/' . $job->document));
        }

        $job->delete();

        return redirect()
            ->route('dashboard.job.index')
            ->with('success', 'Job deleted permanently.');
    }
}

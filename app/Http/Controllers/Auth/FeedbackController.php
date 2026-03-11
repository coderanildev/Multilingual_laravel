<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FeedbackController extends Controller
{

    public function index(Request $request)
    {
        $query = Feedback::query();

        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('subject', 'like', '%' . $request->search . '%');
        }

        $feedbacks = $query->orderBy('id', 'DESC')->paginate(10);

        return view('backend.dashboard.feedback', compact('feedbacks'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'organisation' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'subject' => 'required',
            'feedback' => 'required',
            'attachment' => 'nullable|mimes:jpg,jpeg,png,pdf,doc,docx|max:20480'
        ]);

        DB::beginTransaction();

        try {

            $fileNewName = null;

            if ($request->hasFile('attachment')) {

                $file = $request->file('attachment');

                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);

                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('includes/images/feedback'), $fileNewName);
            }

            Feedback::create([
                'name' => $request->name,
                'email' => $request->email,
                'organisation' => $request->organisation,
                'department' => $request->department,
                'designation' => $request->designation,
                'subject' => $request->subject,
                'feedback' => $request->feedback,
                'attachment' => $fileNewName,
                'ipaddress' => $request->ip(),
                'datetime' => now()
            ]);

            DB::commit();

            return redirect()
                ->route('feedback.index')
                ->with('success', 'Feedback submitted successfully.');

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Something went wrong.');
        }
    }



    public function statusChange(Request $request)
    {
        $item = Feedback::find($request->id);

        if ($item) {

            $item->update([
                'status' => $request->feedback_status
            ]);

            return redirect()
                ->route('feedback.index')
                ->with('success', 'Status Changed.');
        }

        return redirect()
            ->route('feedback.index')
            ->with('error', 'Something went wrong.');
    }



    public function edit($id)
    {
        $item = Feedback::findOrFail($id);

        return view('backend.dashboard.feedbackedit', compact('item'));
    }



    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'organisation' => 'required',
            'department' => 'required',
            'designation' => 'required',
            'subject' => 'required',
            'feedback' => 'required',
            'attachment' => 'nullable|mimes:jpg,jpeg,png,pdf,doc,docx|max:20480'
        ]);

        DB::beginTransaction();

        try {

            $item = Feedback::findOrFail($id);

            $fileNewName = $item->attachment;

            if ($request->hasFile('attachment')) {

                $oldPath = public_path('includes/images/feedback/' . $item->attachment);

                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                $file = $request->file('attachment');

                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);

                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('includes/images/feedback'), $fileNewName);
            }

            $item->update([
                'name' => $request->name,
                'email' => $request->email,
                'organisation' => $request->organisation,
                'department' => $request->department,
                'designation' => $request->designation,
                'subject' => $request->subject,
                'feedback' => $request->feedback,
                'attachment' => $fileNewName,
                'ipaddress' => $request->ip(),
                'datetime' => now()
            ]);

            DB::commit();

            return redirect()
                ->route('feedback.index')
                ->with('success', 'Feedback Updated Successfully');

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Something went wrong.');
        }
    }



    public function destroy($id)
    {
        $item = Feedback::findOrFail($id);

        if ($item->attachment && file_exists(public_path('includes/images/feedback/' . $item->attachment))) {

            unlink(public_path('includes/images/feedback/' . $item->attachment));
        }

        $item->delete();

        return redirect()
            ->route('feedback.index')
            ->with('success', 'Feedback deleted permanently.');
    }

    public function view($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('backend.dashboard.feedback_view', compact('feedback'));
    }

}
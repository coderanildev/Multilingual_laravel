<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newnotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class NewnotificationController extends Controller
{
    public function index(Request $request)
    {
        $query = Newnotification::query();

        if ($request->search) {
            $query->where('title_english', 'like', '%' . $request->search . '%')
                  ->orWhere('title_hindi', 'like', '%' . $request->search . '%');
        }

        $newnotifications = $query->orderBy('id', 'DESC')->paginate(10);
        return view('backend.dashboard.newnotification', compact('newnotifications'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_hindi' => 'required',
            'title_english' => 'required',
            'category' => 'required',
            'document' => 'required|mimes:jpg,jpeg,png,gif,pdf,doc,docx'
        ]);

        DB::beginTransaction();

        try {
            $fileNewName = null;

            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);
                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('includes/images/notificationsnew'), $fileNewName);
            }

            Newnotification::create([
                'title_hindi' => $request->title_hindi,
                'title_english' => $request->title_english,
                'category' => $request->category,
                'document' => $fileNewName,
                'added_by'     => Auth::user()->name,
                'added_date'   => now(),
                'updated_by'   => Auth::user()->name,
                'updated_date' => now(),
                'status' => 2
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.newnotification.index')
                ->with('success', 'Notification uploaded successfully.');

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
        $item = Newnotification::find($request->id);

        if ($item) {
            $item->update(['status' => $request->newnotification_status]);

            return redirect()
                ->route('dashboard.newnotification.index')
                ->with('success', 'Status Changed.');
        }

        return redirect()
                ->route('dashboard.newnotification.index')
                ->with('error', 'Something went wrong.');
    }

    public function edit($id)
    {
        $item = Newnotification::findOrFail($id);
        return view('backend.dashboard.newnotificationedit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title_hindi' => 'required',
            'title_english' => 'required',
            'category' => 'required',
            'document' => 'nullable|mimes:jpg,jpeg,png,gif,pdf,doc,docx|max:20480'
        ]);

        DB::beginTransaction();

        try {
            $item = Newnotification::findOrFail($id);
            $fileNewName = $item->document;

            if ($request->hasFile('document')) {
                $oldPath = public_path('includes/images/notificationsnew/' . $item->document);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                $file = $request->file('document');
                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);

                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('includes/images/notificationsnew'), $fileNewName);
            }

            $item->update([
                'title_hindi' => $request->title_hindi,
                'title_english' => $request->title_english,
                'category' => $request->category,
                'document' => $fileNewName,
                'updated_by' => Auth::user()->name,
                'updated_date' => now(),
                'status' => 2
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.newnotification.index')
                ->with('success', 'Notification Updated Successfully');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Something went wrong.');
        }
    }

    public function delete($id)
    {
        $item = Newnotification::findOrFail($id);

        if ($item->document && file_exists(public_path('includes/images/notificationsnew/' . $item->document))) {
            unlink(public_path('includes/images/notificationsnew/' . $item->document));
        }

        $item->delete();

        return redirect()
            ->route('dashboard.newnotification.index')
            ->with('success', 'Notification deleted permanently.');
    }
}

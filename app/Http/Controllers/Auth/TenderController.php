<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TenderController extends Controller
{
    /* ===============================
        LIST ALL TENDERS
    =============================== */
    public function index(Request $request)
    {
        $query = Tender::query();

        // Search
        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Pagination (10 per page)
        $tenders = $query->orderBy('id', 'DESC')->paginate(10);
        return view('backend.dashboard.tender', compact('tenders'));
    }

    /* ===============================
        STORE NEW TENDER
    =============================== */
   public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'hindititle' => 'required',
            'last_date' => 'required',
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
                $file->move(public_path('includes/images/tenders'), $fileNewName);
            }

            Tender::create([
                'title' => $request->title,
                'hindititle' => $request->hindititle,
                'last_date' => $request->last_date,
                'document' => $fileNewName,
                'added_by'     => Auth::user()->name,
                'added_date'   => now(),
                'updated_by'   => Auth::user()->name,
                'updated_date' => now(),
                'status' => 2
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.tender.index')
                ->with('success', 'Tender uploaded successfully.');

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }

    /* ===============================
        CHANGE STATUS (AJAX)
    =============================== */
    public function statusChange(Request $request)
    {
        $tender = Tender::find($request->id);

        if ($tender) {
            $tender->update([
                'status' => $request->tender_status
            ]);
            
            return redirect()
                ->route('dashboard.tender.index')
                ->with('success', 'Status Changed.');
        }

        return redirect()
                ->route('dashboard.tender.index')
                ->with('error', 'Something went wrong.');

    }

    /* ===============================
        EDIT PAGE
    =============================== */
    public function edit($id)
    {
        $tender = Tender::findOrFail($id);

        return view('backend.dashboard.tenderedit', compact('tender'));
    }

    /* ===============================
        UPDATE TENDER
    =============================== */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'hindititle' => 'required',
            'last_date' => 'required',
            'document' => 'nullable|mimes:doc,pdf,docx|max:20480'
        ]);

        DB::beginTransaction();

        try {

            $tender = Tender::findOrFail($id);

            $fileNewName = $tender->document;

            if ($request->hasFile('document')) {

                // Delete old file
                $oldPath = public_path('includes/images/tenders/' . $tender->document);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                $file = $request->file('document');
                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);

                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('includes/images/tenders'), $fileNewName);
            }

            $tender->update([
                'title' => $request->title,
                'hindititle' => $request->hindititle,
                'last_date' => $request->last_date,
                'document' => $fileNewName,
                'updated_by' => Auth::user()->name,
                'updated_date' => now(),
                'status' => 2
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.tender.index')
                ->with('success', 'Tender Updated Successfully');

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
        $tender = Tender::findOrFail($id);

        // Optional: delete file from folder
        if ($tender->document && file_exists(public_path('includes/images/tenders/' . $tender->document))) {
            unlink(public_path('includes/images/tenders/' . $tender->document));
        }

        $tender->delete(); // 🔥 permanent delete

        return redirect()
            ->route('dashboard.tender.index')
            ->with('success', 'Tender deleted permanently.');
    }
    
}
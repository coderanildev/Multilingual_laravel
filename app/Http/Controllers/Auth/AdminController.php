<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\KtLabel;
use App\Models\KtLangSubLabel;



class AdminController extends Controller
{
    public function language(Request $request)
    {
        $query = KtLabel::orderBy('kt_label_id', 'DESC');

        // Search filter
        if ($request->filled('search')) {
            $query->where('kt_label_name', 'like', '%' . $request->search . '%');
        }

        // Pagination
        $labels = $query->paginate(10);

        return view('dashboard.language', compact('labels'));
    }



   public function storeLanguage(Request $request)
    {
        $request->validate([
            'kt_label_name' => 'required|unique:kt_label,kt_label_name',
            'kt_label_value' => 'required',
            'kt_label_value_hindi' => 'required',
            'kt_field_type' => 'required',
        ]);

        DB::beginTransaction();

        try {

            // Insert into kt_label
            $label = KtLabel::create([
                'kt_label_name'  => trim($request->kt_label_name),
                'kt_label_value' => trim($request->kt_label_value),
                'kt_field_type'  => trim($request->kt_field_type),
            ]);

            // Insert into kt_lang_sub_label
            KtLangSubLabel::create([
                'kt_label_id'     => $label->kt_label_id,
                'kt_lang_id'      => 1,
                'kt_sub_lang_name'=> trim($request->kt_label_value_hindi),
                'kt_lang_type'    => 'Hindi',
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.language')
                ->with('success', 'Label added successfully.');

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()
                ->route('dashboard.language')
                ->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function deleteLanguage($id)
    {
        $label = KtLabel::findOrFail($id);
        $label->delete();

        return redirect()
            ->route('dashboard.language')
            ->with('success', 'Label deleted successfully.');
    }

    public function languageEdit($id = "")
    {
        if ($id == "") {
            return redirect()->route('dashboard.language');
        }

        $label = KtLabel::where('kt_label_id', $id)->first();
        $subLabel = KtLangSubLabel::where('kt_label_id', $id)->first();

        return view('dashboard.language_edit', compact('label', 'subLabel'));
    }


    public function editLanguage(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'label_name' => 'required',
            'label_value_english' => 'required',
            'label_value_hindi' => 'required',
            'controller_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first(),
                'category' => 'validation error'
            ]);
        }

        $id = $request->kt_label_id;

        // Update kt_label table
        KtLabel::where('kt_label_id', $id)->update([
            'kt_label_value' => trim($request->label_value_english),
            'kt_field_type' => trim($request->controller_name),
        ]);

        // Update Hindi table
        KtLangSubLabel::where('kt_label_id', $id)->update([
            'kt_sub_lang_name' => trim($request->label_value_hindi),
        ]);

         return redirect()
            ->route('dashboard.language')
            ->with('success', 'Label edited successfully.');
    }


    


}

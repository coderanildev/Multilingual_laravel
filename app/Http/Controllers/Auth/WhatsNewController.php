<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhatsNew;

class WhatsNewController extends Controller
{
    public function index(Request $request)
    {
        $query = WhatsNew::query();

        // Search
        if ($request->search) {
            $query->where('content_english', 'like', '%' . $request->search . '%')
                  ->orWhere('content_hindi', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%');
        }

        $whatsnews = $query->orderBy('id', 'DESC')->paginate(10);

        return view('backend.dashboard.whatsnew', compact('whatsnews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'content_hindi' => 'required',
            'content_english' => 'required',
        ]);

        WhatsNew::create([
            'category' => $request->category,
            'content_hindi' => $request->content_hindi,
            'content_english' => $request->content_english,
            'added_by' => auth()->user()->name,
            'updated_by' => auth()->user()->name,
            'added_date' => now(),
            'status' => 1,
        ]);

        return redirect()->back()->with('success', 'Content added successfully.');
    }

    public function statusChange(Request $request)
    {
        $news = WhatsNew::findOrFail($request->id);
        $news->status = $request->status;
        $news->updated_by = auth()->user()->name;
        $news->save();
        
        return redirect()->route('dashboard.whatsnew.index')
            ->with('success', 'Status Changed Successfully');

    }

    public function destroy($id)
    {
        $news = WhatsNew::findOrFail($id);
        $news->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function edit($id)
    {
        $news = WhatsNew::findOrFail($id);
        return view('backend.dashboard.whatsnewedit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'content_english' => 'required',
            'content_hindi' => 'required',
        ]);

        $news = WhatsNew::findOrFail($id);

        $news->update([
            'category'        => $request->category,
            'content_english' => $request->content_english,
            'content_hindi'   => $request->content_hindi,
            'updated_by'      => auth()->user()->name ?? 'Admin',
            'updated_date'    => now(),
        ]);

        return redirect()->route('dashboard.whatsnew.index')
                        ->with('success', 'Record Updated Successfully');
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $query = Slider::query();

        if ($request->search) {
            $query->where('small_title', 'like', '%' . $request->search . '%')
                  ->orWhere('main_title', 'like', '%' . $request->search . '%');
        }

        $sliders = $query->orderBy('order_by', 'asc')->paginate(10);
        return view('backend.dashboard.slider', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:20480',
        ]);

        DB::beginTransaction();

        try {
            $fileNewName = null;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);
                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('includes/images/sliders'), $fileNewName);
            }

            Slider::create([
                'small_title' => $request->small_title,
                'main_title' => $request->main_title,
                'description' => $request->description,
                'button1_text' => $request->button1_text,
                'button1_link' => $request->button1_link,
                'button2_text' => $request->button2_text,
                'button2_link' => $request->button2_link,
                'image' => $fileNewName,
                'status' => $request->status ?? 0,
                'order_by' => $request->order_by,
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.slider.index')
                ->with('success', 'Slider item created successfully.');

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
        $item = Slider::find($request->id);

        if ($item) {
            $item->update(['status' => $request->slider_status]);

            return redirect()
                ->route('dashboard.slider.index')
                ->with('success', 'Status Changed.');
        }

        return redirect()
                ->route('dashboard.slider.index')
                ->with('error', 'Something went wrong.');
    }

    public function edit($id)
    {
        $item = Slider::findOrFail($id);
        return view('backend.dashboard.slideredit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:20480',
        ]);

        DB::beginTransaction();

        try {
            $item = Slider::findOrFail($id);
            $fileNewName = $item->image;

            if ($request->hasFile('image')) {
                $oldPath = public_path('includes/images/sliders/' . $item->image);
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }

                $file = $request->file('image');
                $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $fileNameWithoutExt = str_replace(' ', '-', $fileNameWithoutExt);

                $fileNewName = $fileNameWithoutExt . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('includes/images/sliders'), $fileNewName);
            }

            $item->update([
                'small_title' => $request->small_title,
                'main_title' => $request->main_title,
                'description' => $request->description,
                'button1_text' => $request->button1_text,
                'button1_link' => $request->button1_link,
                'button2_text' => $request->button2_text,
                'button2_link' => $request->button2_link,
                'image' => $fileNewName,
                'status' => $request->status ?? $item->status,
                'order_by' => $request->order_by,
            ]);

            DB::commit();

            return redirect()
                ->route('dashboard.slider.index')
                ->with('success', 'Slider item updated successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', 'Something went wrong.');
        }
    }

    public function delete($id)
    {
        $item = Slider::findOrFail($id);

        if ($item->image && file_exists(public_path('includes/images/sliders/' . $item->image))) {
            unlink(public_path('includes/images/sliders/' . $item->image));
        }

        $item->delete();

        return redirect()
            ->route('dashboard.slider.index')
            ->with('success', 'Slider item deleted permanently.');
    }
}

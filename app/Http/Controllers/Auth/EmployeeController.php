<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeeDesignation;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;    
use App\Models\EmployeeLevel;

class EmployeeController extends Controller
{

    // ==============================
    // LIST EMPLOYEES
    // ==============================
    public function index(Request $request)
    {

        $query = Employee::with(['levelOfEmployee', 'designationOfEmployee'])
                    ->orderBy('id', 'desc');


        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $employees = $query->paginate(10)->withQueryString();

        return view('backend.dashboard.employeeslist', compact('employees'));
    }

    // ==============================
    // CREATE PAGE
    // ==============================
    public function create()
    {
        $designations = EmployeeDesignation::where('status',1)->get();
        $levels = EmployeeLevel::where('status',1)->get();

        return view('backend.dashboard.employeescreate', compact('designations','levels'));
    }

    // ==============================
    // STORE
    // ==============================
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:employees,email',
     
        'password' => 'required|min:6',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $slug = Str::slug($request->name);
    $imageName = 'default.png';

    // ✅ Handle Image Upload
    if ($request->hasFile('image')) {

        $file = $request->file('image');

        $imageName = $slug . '-' . time() . '.' . $file->getClientOriginalExtension();

        $file->move(
            public_path('includes/images/employees'),
            $imageName
        );
    }

    Employee::create([
        'name' => $request->name,
        'slug' => $slug,
        'photo' => $imageName,
        'designation' => $request->designation_id,
        'desination_value' => $request->designation_id,
        'level' => $request->level_id,
        'qualification' => $request->qualification,
        'area_of_interest' => $request->area_of_interest,
        'phone_no' => $request->phone_no,
        'email' => $request->email,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'details' => $request->details,
        'status' => 1,
        'resume' => $request->name,
        'employee_type' => 0,
        'periority' => 0,
        'added_date' => now(),
        'updated_date' => now(),
        'added_by' => auth()->user()->name ?? 'Admin',
        'updated_by' => auth()->user()->name ?? 'Admin'
    ]);

    return redirect()->route('dashboard.employees.index')
        ->with('success', 'Employee Added Successfully');
}

    // ==============================
    // EDIT
    // ==============================
    public function edit($id)
    { 
        $employee = Employee::with(['levelOfEmployee', 'designationOfEmployee'])
                    ->findOrFail($id);
        $designations = EmployeeDesignation::where('status',1)->get();
        $levels = EmployeeLevel::where('status',1)->get();

        return view('backend.dashboard.employeesedit', compact('employee','designations','levels'));
    }

    // ==============================
    // view employee details
    // ==============================
    public function view($id)
    {
        $employee = Employee::with(['levelOfEmployee', 'designationOfEmployee'])
                    ->findOrFail($id);
        
        return view('backend.dashboard.employeeview', compact('employee'));
    }

    // ==============================
    // UPDATE
    // ==============================
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
          
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $slug = Str::slug($request->name);

        // Keep old image by default
        $imageName = $employee->photo;

        /*
        |--------------------------------------------------------------------------
        | 1️⃣ Handle Normal Image Upload
        |--------------------------------------------------------------------------
        */
        if ($request->hasFile('image')) {

            // Delete old image if not default
            if ($employee->photo != 'default.png' &&
                File::exists(public_path('includes/images/employees/' . $employee->photo))) {

                File::delete(public_path('includes/images/employees/' . $employee->photo));
            }

            $file = $request->file('image');
            $imageName = $slug . '-' . time() . '.' . $file->getClientOriginalExtension();

            $file->move(
                public_path('includes/images/employees'),
                $imageName
            );
        }

        /*
        |--------------------------------------------------------------------------
        | 2️⃣ Handle Cropped Image (Optional)
        |--------------------------------------------------------------------------
        */
        elseif ($request->croped_image &&
            File::exists(public_path('includes/images/employees/cropedimage/' . $request->croped_image))) {

            if ($employee->photo != 'default.png' &&
                File::exists(public_path('includes/images/employees/' . $employee->photo))) {

                File::delete(public_path('includes/images/employees/' . $employee->photo));
            }

            $imageName = $slug . '-' . time() . '.jpg';

            File::copy(
                public_path('includes/images/employees/cropedimage/' . $request->croped_image),
                public_path('includes/images/employees/' . $imageName)
            );
        }

        /*
        |--------------------------------------------------------------------------
        | 3️⃣ Update Employee
        |--------------------------------------------------------------------------
        */
        $employee->update([
            'name' => $request->name,
            'slug' => $slug,
            'photo' => $imageName,
            'designation' => $request->designation_id,   // ✅ correct column
            'desination_value' => $request->designation_id,
            'level' => $request->level_id,               // ✅ correct column
            'qualification' => $request->qualification,
            'area_of_interest' => $request->area_of_interest,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'username' => $request->username,
            'details' => $request->details,
            'resume' => $request->name,
            'employee_type' => 0,
            'periority' => 0,
            'updated_date' => now(),
            'updated_by' => auth()->user()->name ?? 'Admin'
        ]);

        return redirect()->route('dashboard.employees.index')
            ->with('success', 'Employee Updated Successfully');
    }

    // ==============================
    // CROP IMAGE (AJAX)
    // ==============================
    public function cropImage(Request $request)
    {
        if($request->image){

            $image = $request->image;

            list($type, $image) = explode(';', $image);
            list(, $image) = explode(',', $image);

            $image = base64_decode($image);

            $imageName = time().'.jpg';

            File::put(
                public_path('includes/images/employees/cropedimage/'.$imageName),
                $image
            );

            return response()->json([
                'message' => 'Success',
                'image_name' => $imageName
            ]);
        }

        return response()->json([
            'message' => 'Error'
        ]);
    }

    // ==============================
    // DELETE CROPPED IMAGE
    // ==============================
    public function deleteCropImage(Request $request)
    {
        if($request->prev_img){

            $path = public_path('includes/images/employees/cropedimage/'.$request->prev_img);

            if(File::exists($path)){
                File::delete($path);
            }

            return response()->json(['message'=>'Deleted']);
        }

        return response()->json(['message'=>'Error']);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        // Delete image if exists and not default
        if ($employee->photo && $employee->photo != 'default.png') {

            $imagePath = public_path('includes/images/employees/' . $employee->photo);

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Delete employee record
        $employee->delete();

        return redirect()->route('dashboard.employees.index')
                ->with('success', 'Employee Deleted Successfully');
    }
}
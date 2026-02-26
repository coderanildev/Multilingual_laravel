@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Add Employee</title>
<div class="col-12 col-xl-12">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2 class="h5 mb-4">Add New Employee</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('dashboard.employees.store') }}" enctype="multipart/form-data" id="employee-entry-form">
                @csrf

                <div class="form-group row">
                    <div class="col-sm-12">
                        <label>Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control" />
                    </div>
               
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                        <div id="uploaded_image"></div>
                        <input type="hidden" name="croped_image" id="croped_image" class="form-control" />
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-6">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name" />
                    </div>
                
                    <div class="col-sm-6">
                        <select name="designation_id" class="form-control">
                            <option value="">Select Designation</option>
                            @foreach($designations as $designation)
                                <option value="{{ $designation->id }}" {{ old('designation_id') == $designation->id ? 'selected' : '' }}>{{ $designation->designation }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-6">
                        <select name="level_id" class="form-control">
                            <option value="">Select Level</option>
                            @foreach($levels as $level)
                                <option value="{{ $level->id }}" {{ old('level_id') == $level->id ? 'selected' : '' }}>{{ $level->name }}</option>
                            @endforeach
                        </select>
                    </div>
               
                    <div class="col-sm-6">
                        <input type="text" name="phone_no" value="{{ old('phone_no') }}" class="form-control" placeholder="Enter Phone No" />
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-6">
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Email ID" />
                    </div>
             
                    <div class="col-sm-6">
                        <input type="text" name="username" value="{{ old('username') }}" class="form-control" placeholder="Enter user name" />
                    </div>
                
                    <div class="col-sm-6 mt-3">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" />
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-12">
                        <label>Qualification</label>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="qualification" style="width: 100%;height: 200px;" id="qualification">{{ old('qualification') }}</textarea>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-12">
                        <label>Area of Interest</label>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="area_of_interest" style="width: 100%;height: 200px;" id="area_of_interest">{{ old('area_of_interest') }}</textarea>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-12">
                        <label>Details</label>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="details" style="width: 100%;height: 500px;" id="details">{{ old('details') }}</textarea>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-sm-12">
                        <input name="submit" value="Submit" type="submit" class="form-control btn btn-info">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- image crop modals (copied from existing snippet) --}}
<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 150%;">
            <div class="modal-header">
                <h4 class="modal-title">Crop Image</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div id="image_demo"></div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-success crop_image">Crop & Upload Image</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="uploadimageModal1" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 150%;">
            <div class="modal-header">
                <h4 class="modal-title">Crop Image</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div id="image_demo1"></div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-success crop_image1">Crop & Upload Image</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- CKEditor initialization --}}
<script>
    (function() {
        var qualification = CKEDITOR.replace('qualification', {
            height: 320,
        });
        qualification.on('change',function(){
            $('#qualification').each(function () {
               var $textarea = $(this);
               $textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
            });
        });

        var area_of_interest = CKEDITOR.replace('area_of_interest', {
            height: 200,
        });
        area_of_interest.on('change',function(){
            $('#area_of_interest').each(function () {
               var $textarea = $(this);
               $textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
            });
        });

        var details = CKEDITOR.replace('details', {
            height: 200,
        });
        details.on('change',function(){
            $('#details').each(function () {
               var $textarea = $(this);
               $textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
            });
        });
    }());
</script>

@endsection
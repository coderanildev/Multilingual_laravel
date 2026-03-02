@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Edit Slider Item</title>

<div class="col-12 col-xl-12">

    <div class="card shadow mb-4">
        <div class="card-body">

            <h2 class="h5 mb-4">Edit Slider Item</h2>
            @if(session('success'))
                <div class="alert alert-success"> {{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger"> {{ $errors->first() }} </div>
            @endif

            <form method="POST" action="{{ route('dashboard.slider.update', $item->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Small Title</label>
                        <input type="text" name="small_title" value="{{ old('small_title', $item->small_title) }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Main Title</label>
                        <input type="text" name="main_title" value="{{ old('main_title', $item->main_title) }}" class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description', $item->description) }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 1 Text</label>
                        <input type="text" name="button1_text" value="{{ old('button1_text', $item->button1_text) }}" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 1 Link</label>
                        <input type="url" name="button1_link" value="{{ old('button1_link', $item->button1_link) }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 2 Text</label>
                        <input type="text" name="button2_text" value="{{ old('button2_text', $item->button2_text) }}" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 2 Link</label>
                        <input type="url" name="button2_link" value="{{ old('button2_link', $item->button2_link) }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Order</label>
                        <input type="number" name="order_by" value="{{ old('order_by', $item->order_by) }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ old('status', $item->status) == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $item->status) == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Upload New Image</label>
                        <input type="file" name="image" class="form-control">
                        @if($item->image)
                            <small class="text-muted d-block mt-2">
                                Current:
                                <a href="{{ asset('includes/images/sliders/'.$item->image) }}" target="_blank">
                                    {{ $item->image }}
                                </a>
                            </small>
                        @endif
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="{{ route('dashboard.slider.index') }}" class="btn btn-secondary"> Cancel </a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection

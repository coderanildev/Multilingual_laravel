@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Slider Management</title>

<div class="col-12 col-xl-12">

    <div class="card shadow mb-4">
        <div class="card-body">

            <h2 class="h5 mb-4">Add Slider Item</h2>
            @if(session('success'))
                <div class="alert alert-success"> {{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger"> {{ $errors->first() }} </div>
            @endif

            <form method="POST" action="{{ route('dashboard.slider.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Small Title</label>
                        <input type="text" name="small_title" value="{{ old('small_title') }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Main Title</label>
                        <input type="text" name="main_title" value="{{ old('main_title') }}" class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 1 Text</label>
                        <input type="text" name="button1_text" value="{{ old('button1_text') }}" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 1 Link</label>
                        <input type="url" name="button1_link" value="{{ old('button1_link') }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 2 Text</label>
                        <input type="text" name="button2_text" value="{{ old('button2_text') }}" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Button 2 Link</label>
                        <input type="url" name="button2_link" value="{{ old('button2_link') }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Order</label>
                        <input type="number" name="order_by" value="{{ old('order_by') }}" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        
           <div class="table-settings my-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form method="GET" action="{{ route('dashboard.slider.index') }}">
                            <div class="input-group">
                                <button type="submit" class="input-group-text bg-primary text-white border-0">
                                    <i class="fas fa-search"></i>
                                </button>

                                <input type="text" 
                                    name="search" 
                                    value="{{ request('search') }}" 
                                    class="form-control" 
                                    placeholder="Search Slider Title">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-items-center mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Small Title</th>
                            <th>Main Title</th>
                            <th>Order</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($sliders as $index => $value)
                            <tr>
                                <td>{{ $sliders->firstItem() + $index }}</td>

                                <td class="title-col">
                                    {{ \Illuminate\Support\Str::limit($value->small_title, 50) }}
                                </td>

                                <td class="title-col">
                                    {{ \Illuminate\Support\Str::limit($value->main_title, 80) }}
                                </td>

                                <td>{{ $value->order_by }}</td>

                                <td>
                                    @if($value->image)
                                        <a href="{{ asset('includes/images/sliders/'.$value->image) }}" target="_blank">
                                            <img src="{{ asset('includes/images/sliders/'.$value->image) }}"
                                                alt="Slider Image"
                                                width="80"
                                                height="50"
                                                style="object-fit: cover; border-radius:5px;">
                                        </a>
                                    @endif
                                </td>

                                <td class="text-center">
                                    @if($value->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Inactive</span>
                                    @endif
                                </td>

                                <td class="action-buttons">

                                    {{-- Activate / Deactivate --}}
                                    @if($value->status == 0)
                                        <form method="POST" action="{{ route('dashboard.slider.status') }}" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $value->id }}">
                                            <input type="hidden" name="slider_status" value="1">
                                            <button type="submit" class="btn btn-sm btn-success mb-1">
                                                Activate
                                            </button>
                                        </form>
                                    @else
                                        <form method="POST" action="{{ route('dashboard.slider.status') }}" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $value->id }}">
                                            <input type="hidden" name="slider_status" value="0">
                                            <button type="submit" class="btn btn-sm btn-secondary mb-1">
                                                Deactivate
                                            </button>
                                        </form>
                                    @endif

                                    {{-- Edit --}}
                                    <a href="{{ route('dashboard.slider.edit', $value->id) }}"
                                    class="btn btn-warning text-white mb-1 px-2 py-1 btn-xs"
                                    title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- Delete --}}
                                    <form method="POST"
                                        action="{{ route('dashboard.slider.delete', $value->id) }}"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this slider?');">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger text-white mb-1 px-2 py-1 btn-xs"
                                                title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">
                                    No Slider Data Found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>
                    Showing <b>{{ $sliders->count() }}</b> of <b>{{ $sliders->total() }}</b> entries
                </div>
                <div>
                    {{ $sliders->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </div>
    </div>

</div>

@endsection

@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Language</title>

<div class="col-12 col-xl-12">
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Add Language Label</h2>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('dashboard.language.store') }}">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Label Name</label>
                    <input type="text" name="kt_label_name" class="form-control"
                        placeholder="Label Name" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Controller Name</label>
                    <input type="text" name="kt_field_type" class="form-control"
                        placeholder="Controller Name" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Label Value (English)</label>
                    <textarea name="kt_label_value" class="form-control"
                        rows="3" placeholder="Label value in English"></textarea>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Label Value (Hindi)</label>
                    <textarea name="kt_label_value_hindi" class="form-control"
                        rows="3" placeholder="Label value in Hindi"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>


    {{-- Table Section --}}
   <div class="card card-body border-0 shadow table-wrapper table-responsive">

    <!-- Search Bar -->
    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-6 col-lg-4">
                <form method="GET" action="{{ route('dashboard.language') }}">
                    <div class="input-group">
                        <button type="submit" class="input-group-text bg-primary text-white border-0"><i class="fas fa-search"></i></button>
                        <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search Label Name">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Table -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="width:5%">#</th>
                <th style="width:20%">Label Name</th>
                <th style="width:40%">Label Value</th>
                <th style="width:20%">Controller</th>
                <th style="width:15%">Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse($labels as $index => $label)
                <tr>
                    <td>
                        <span class="fw-bold">
                            {{ $labels->firstItem() + $index }}
                        </span>
                    </td>

                    <td class="fw-bold">
                        {{ $label->kt_label_name }}
                    </td>

                    <td style="white-space: normal;">
                        {{ Str::limit($label->kt_label_value, 100) }}
                    </td>

                    <td>
                        <span class="badge bg-primary">
                            {{ $label->kt_field_type }}
                        </span>
                    </td>

                    <td>
                        <div class="btn-group">
                            <div>
                                <a class="dropdown-item"
                                   href="{{ route('dashboard.language.edit', $label->kt_label_id) }}">
                                    <i class="fas fa-edit me-2"></i> Edit
                                </a>

                                <form action="{{ route('dashboard.language.delete', $label->kt_label_id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item text-danger" disabled>
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        No records found
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
        <div>
            Showing <b>{{ $labels->count() }}</b>
            of <b>{{ $labels->total() }}</b> entries
        </div>

        <div>
         {{ $labels->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>

</div>


</div>

@endsection

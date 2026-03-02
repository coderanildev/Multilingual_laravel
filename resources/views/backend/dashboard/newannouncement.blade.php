@extends('backend.layouts.app')

@section('content')
<title>Dashboard - New Announcements</title>

<div class="col-12 col-xl-12">

    <div class="card shadow mb-4">
        <div class="card-body">

            <h2 class="h5 mb-4">Add Announcement</h2>
            @if(session('success'))
                <div class="alert alert-success"> {{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger"> {{ $errors->first() }} </div>
            @endif

            <form method="POST" action="{{ route('dashboard.newannouncement.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">English Title</label>
                        <input type="text"  name="title_english"  value="{{ old('title_english') }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Hindi Title</label>
                        <input type="text" name="title_hindi" value="{{ old('title_hindi') }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="OM">OM</option>
                            <option value="Circular">Circular</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Upload Document</label>
                        <input type="file" name="document" class="form-control" required>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="table-settings my-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form method="GET" action="{{ route('dashboard.newannouncement.index') }}">
                            <div class="input-group">
                                <button type="submit" class="input-group-text bg-primary text-white border-0">
                                    <i class="fas fa-search"></i>
                                </button>

                                <input type="text"
                                    name="search"
                                    value="{{ request('search') }}"
                                    class="form-control"
                                    placeholder="Search Announcement Title">
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
                            <th>English Title</th>
                            <th>Hindi Title</th>
                            <th>Category</th>
                            <th>Document</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($newannouncements as $index => $value)
                            <tr>
                                <td>{{ $newannouncements->firstItem() + $index }}</td>

                                <td class="title-col">
                                    {{ \Illuminate\Support\Str::limit($value->title_english, 80) }}
                                </td>

                                <td class="title-col">
                                    {{ \Illuminate\Support\Str::limit($value->title_hindi, 80) }}
                                </td>

                                <td>{{ $value->category }}</td>

                                <td>
                                    @if($value->document)
                                        <a href="{{ asset('includes/images/announcementsnew/'.$value->document) }}" target="_blank">
                                            {{ \Illuminate\Support\Str::limit($value->document, 20) }}
                                        </a>
                                    @endif
                                </td>

                                <td class="text-center">
                                    @if($value->status == 1)
                                        <span class="badge bg-success">New</span>
                                    @else
                                        <span class="badge bg-info">Old</span>
                                    @endif
                                </td>

                                <td class="action-buttons">

                                    {{-- Status Toggle --}}
                                    @if($value->status == 2)
                                        <form method="POST"
                                            action="{{ route('dashboard.newannouncement.status') }}"
                                            class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $value->id }}">
                                            <input type="hidden" name="newannouncement_status" value="1">
                                            <button type="submit"
                                                    class="btn btn-sm btn-info text-white mb-1">
                                                Move to New
                                            </button>
                                        </form>
                                    @else
                                        <form method="POST"
                                            action="{{ route('dashboard.newannouncement.status') }}"
                                            class="d-inline">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $value->id }}">
                                            <input type="hidden" name="newannouncement_status" value="2">
                                            <button type="submit"
                                                    class="btn btn-sm btn-success text-white mb-1">
                                                Archive
                                            </button>
                                        </form>
                                    @endif

                                    {{-- Edit --}}
                                    <a href="{{ route('dashboard.newannouncement.edit', $value->id) }}"
                                    class="btn btn-warning text-white mb-1 px-2 py-1 btn-xs"
                                    title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    {{-- Delete --}}
                                    <form method="POST"
                                        action="{{ route('dashboard.newannouncement.delete', $value->id) }}"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this announcement?');">
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
                                    No Announcement Data Found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>
                    Showing <b>{{ $newannouncements->count() }}</b> of <b>{{ $newannouncements->total() }}</b> entries
                </div>
                <div>
                    {{ $newannouncements->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>

        </div>
    </div>

</div>

@endsection

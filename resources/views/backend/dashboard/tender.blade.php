@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Tender</title>

<style>
    /* Prevent table breaking layout */
    .table-responsive {
        overflow-x: auto;
    }

    .table th,
    .table td {
        vertical-align: middle;
        white-space: nowrap;
    }

    .table td.title-col {
        max-width: 220px;
        white-space: normal;
        word-break: break-word;
    }

    .table td.document-col {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .action-buttons form {
        display: inline-block;
        margin-bottom: 3px;
    }
</style>

<div class="col-12 col-xl-12">

    {{-- =========================
        ADD TENDER FORM
    ========================== --}}
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2 class="h5 mb-4">Add Tender</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST"
                  action="{{ route('dashboard.tender.store') }}"
                  enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Hindi Title</label>
                        <input type="text" name="hindititle" class="form-control" placeholder="Hindi title" required>
                    </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label">Last Date</label>
                        <input type="text" name="last_date" class="form-control" required>
                    </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label">Upload Document</label>
                        <input type="file" name="document" class="form-control" required>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>


    {{-- =========================
        TENDER TABLE
    ========================== --}}
    <div class="card shadow">

        <div class="card-body">

            {{-- SEARCH --}}
            <div class="table-settings mb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form method="GET" action="{{ route('dashboard.tender.index') }}">
                            <div class="input-group">
                                <button type="submit"
                                        class="input-group-text bg-primary text-white border-0">
                                    <i class="fas fa-search"></i>
                                </button>

                                <input type="text"
                                       name="search"
                                       value="{{ request('search') }}"
                                       class="form-control"
                                       placeholder="Search Tender Title">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- TABLE --}}
            <div class="table-responsive">
                <table class="table table-hover align-items-center mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th >Title</th>
                            <th>Hindi Title</th>
                            <th>Last Date</th>
                            <th>Document</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($tenders as $index => $tender)
                            <tr>

                                <td>
                                    {{ $tenders->firstItem() + $index }}
                                </td>

                                <td class="title-col">
                                    {{ \Illuminate\Support\Str::limit($tender->title, 500) }}
                                </td>

                                <td class="title-col">
                                    {{ \Illuminate\Support\Str::limit($tender->hindititle, 500) }}
                                </td>

                                <td>
                                     {{ \Illuminate\Support\Str::limit($tender->last_date, 20) }}
                                </td>

                                <td class="document-col">
                                    <a href="{{ asset('includes/images/tenders/'.$tender->document) }}"
                                       target="_blank">
                                        {{ \Illuminate\Support\Str::limit($tender->document, 20) }}
                                    </a>
                                </td>

                                <td class="text-center">
                                    @if($tender->status == 2)
                                        <span class="badge bg-success">New</span>
                                    @elseif($tender->status == 1)
                                        <span class="badge bg-info">Old</span>
                                    @elseif($tender->status == 0)
                                        <span class="badge bg-danger">Deleted</span>
                                    @endif
                                </td>

                                <td class="action-buttons">

                                    @if($tender->status == 2)
                                        <form method="POST"
                                              action="{{ route('dashboard.tender.status') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $tender->id }}">
                                            <input type="hidden" name="tender_status" value="1">
                                            <button class="btn btn-sm btn-success text-white">
                                                Archive
                                            </button>
                                        </form>
                                    @endif

                                    @if($tender->status == 1)
                                        <form method="POST"
                                              action="{{ route('dashboard.tender.status') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $tender->id }}">
                                            <input type="hidden" name="tender_status" value="2">
                                            <button class="btn btn-sm btn-info text-white">
                                                Move to New
                                            </button>
                                        </form>
                                    @endif

                                    @if($tender->status != 0)
                                        <form method="POST"
                                            action="{{ route('dashboard.tender.delete', $tender->id) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this tender?');">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger text-white mb-1 px-2 py-1 btn-xs"
                                                    title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    @endif

                                    <a href="{{ route('dashboard.tender.edit', $tender->id) }}" class="btn btn-warning text-white mb-1 px-2 py-1 btn-xs"
                                            title="Edit">
                                            <i class="fas fa-edit"></i>
                                    </a>

                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    No Data Found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>

        {{-- PAGINATION --}}
        <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">

            <div>
                Showing <b>{{ $tenders->count() }}</b>
                of <b>{{ $tenders->total() }}</b> entries
            </div>

            <div>
                {{ $tenders->withQueryString()->links('pagination::bootstrap-5') }}
            </div>

        </div>

    </div>

</div>

@endsection
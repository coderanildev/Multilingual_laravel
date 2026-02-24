@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Job</title>

<style>
    .table-responsive { overflow-x: auto; }
    .table th, .table td { vertical-align: middle; white-space: nowrap; }
    .table td.title-col { max-width: 220px; white-space: normal; word-break: break-word; }
    .table td.document-col { max-width: 200px; overflow: hidden; text-overflow: ellipsis; }
    .action-buttons form { display: inline-block; margin-bottom: 3px; }
</style>

<div class="col-12 col-xl-12">

    <div class="card shadow mb-4">
        <div class="card-body">
            <h2 class="h5 mb-4">Add Job</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('dashboard.job.store') }}" enctype="multipart/form-data">
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
                        <label class="form-label">Upload Document</label>
                        <input type="file" name="document" class="form-control" required>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <div class="table-settings mb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form method="GET" action="{{ route('dashboard.job.index') }}">
                            <div class="input-group">
                                <button type="submit" class="input-group-text bg-primary text-white border-0">
                                    <i class="fas fa-search"></i>
                                </button>

                                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search Job Title">
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
                            <th>Title</th>
                            <th>Hindi Title</th>
                            <th>Document</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($jobs as $index => $job)
                            <tr>
                                <td>{{ $jobs->firstItem() + $index }}</td>

                                <td class="title-col">{{ \Illuminate\Support\Str::limit($job->title, 500) }}</td>

                                <td class="title-col">{{ \Illuminate\Support\Str::limit($job->hindititle, 500) }}</td>

                                <td class="document-col">
                                    <a href="{{ asset('includes/images/jobs/'.$job->document) }}" target="_blank">
                                        {{ \Illuminate\Support\Str::limit($job->document, 20) }}
                                    </a>
                                </td>

                                <td class="text-center">
                                    @if($job->status == 2)
                                        <span class="badge bg-success">New</span>
                                    @elseif($job->status == 1)
                                        <span class="badge bg-info">Old</span>
                                    @elseif($job->status == 0)
                                        <span class="badge bg-danger">Deleted</span>
                                    @endif
                                </td>

                                <td class="action-buttons">

                                    @if($job->status == 2)
                                        <form method="POST" action="{{ route('dashboard.job.status') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $job->id }}">
                                            <input type="hidden" name="job_status" value="1">
                                            <button class="btn btn-sm btn-success">Archive</button>
                                        </form>
                                    @endif

                                    @if($job->status == 1)
                                        <form method="POST" action="{{ route('dashboard.job.status') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $job->id }}">
                                            <input type="hidden" name="job_status" value="2">
                                            <button class="btn btn-sm btn-info">Move to New</button>
                                        </form>
                                    @endif

                                    @if($job->status != 0)
                                        <form method="POST" action="{{ route('dashboard.job.delete', $job->id) }}" onsubmit="return confirm('Are you sure you want to delete this job?');">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" style="border:none; background:none; color:red;">
                                                <i class="fas fa-trash-alt" style="font-size:18px;"></i>
                                            </button>
                                        </form>
                                    @endif

                                    <a href="{{ route('dashboard.job.edit', $job->id) }}">
                                         <i class="fas fa-edit me-2" style="font-size:18px;"></i>
                                    </a>

                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>

        <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">
            <div>
                Showing <b>{{ $jobs->count() }}</b>
                of <b>{{ $jobs->total() }}</b> entries
            </div>

            <div>
                {{ $jobs->withQueryString()->links('pagination::bootstrap-5') }}
            </div>

        </div>

    </div>

</div>

@endsection

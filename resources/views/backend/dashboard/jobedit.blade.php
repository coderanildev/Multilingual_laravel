@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Edit Job</title>

<div class="col-12 col-xl-12">

    <div class="card shadow mb-4">
        <div class="card-body">

            <h2 class="h5 mb-4">Edit Job</h2>
            @if(session('success'))
                <div class="alert alert-success"> {{ session('success') }}</div>
            @endif


            @if($errors->any())
                <div class="alert alert-danger"> {{ $errors->first() }} </div>
            @endif

            <form method="POST" action="{{ route('dashboard.job.update', $job->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="row">

                      <div class="col-md-6 mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" value="{{ old('title', $job->title) }}" class="form-control" required>
                    </div>

                      <div class="col-md-6 mb-3">
                        <label class="form-label">Hindi title</label>
                        <input type="text"  name="hindititle"  value="{{ old('hindititle', $job->hindititle) }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Upload New Document</label>
                        <input type="file" name="document" class="form-control">
                        @if($job->document)
                            <small class="text-muted d-block mt-2">
                                Current:
                                <a href="{{ asset('includes/images/jobs/'.$job->document) }}"  target="_blank">
                                    {{ $job->document }}
                                </a>
                            </small>
                        @endif
                    </div>

                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="{{ route('dashboard.job.index') }}" class="btn btn-secondary"> Cancel </a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection

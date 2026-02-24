@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Edit Notification</title>

<div class="col-12 col-xl-12">

    <div class="card shadow mb-4">
        <div class="card-body">

            <h2 class="h5 mb-4">Edit Notification</h2>
            @if(session('success'))
                <div class="alert alert-success"> {{ session('success') }}</div>
            @endif


            @if($errors->any())
                <div class="alert alert-danger"> {{ $errors->first() }} </div>
            @endif

            <form method="POST" action="{{ route('dashboard.newnotification.update', $item->id) }}" enctype="multipart/form-data">
                @csrf

                <div class="row">



                    <div class="col-md-6 mb-3">
                        <label class="form-label">English Title</label>
                        <input type="text"  name="title_english"  value="{{ old('title_english', $item->title_english) }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Hindi Title</label>
                        <input type="text" name="title_hindi" value="{{ old('title_hindi', $item->title_hindi) }}" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="OM" {{ $item->category == 'OM' ? 'selected' : '' }}>OM</option>
                            <option value="Circular" {{ $item->category == 'Circular' ? 'selected' : '' }}>Circular</option>
                            <option value="Other" {{ $item->category == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Upload New Document</label>
                        <input type="file" name="document" class="form-control">
                        @if($item->document)
                            <small class="text-muted d-block mt-2">
                                Current:
                                <a href="{{ asset('includes/images/notificationsnew/'.$item->document) }}"  target="_blank">
                                    {{ $item->document }}
                                </a>
                            </small>
                        @endif
                    </div>

                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="{{ route('dashboard.newnotification.index') }}" class="btn btn-secondary"> Cancel </a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection

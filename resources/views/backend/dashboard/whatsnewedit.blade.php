@extends('backend.layouts.app')

@section('content')
<title>Edit - Whats New</title>



<div class="col-12 col-xl-12">

<div class="card shadow mb-4">
<div class="card-body">
<h2 class="h5 mb-4">Edit Whats New</h2>

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

<form method="POST" action="{{ route('dashboard.whatsnew.update', $news->id) }}">
@csrf

<div class="row">

<div class="col-md-12 mb-3">
<label class="form-label">Category</label>
<select name="category" class="form-control" required>
<option value="">Select Category</option>
<option {{ $news->category == 'Career' ? 'selected' : '' }}>Career</option>
<option {{ $news->category == 'Tender' ? 'selected' : '' }}>Tender</option>
<option {{ $news->category == 'Notification' ? 'selected' : '' }}>Notification</option>
<option {{ $news->category == 'Workshop' ? 'selected' : '' }}>Workshop</option>
<option {{ $news->category == 'Seminar' ? 'selected' : '' }}>Seminar</option>
<option {{ $news->category == 'Lecture' ? 'selected' : '' }}>Lecture</option>
<option {{ $news->category == 'Event' ? 'selected' : '' }}>Event</option>
<option {{ $news->category == 'Other' ? 'selected' : '' }}>Other</option>
</select>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Content (English)</label>
<textarea name="content_english" id="content_english" class="form-control" rows="5">
{!! $news->content_english !!}
</textarea>
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Content (Hindi)</label>
<textarea name="content_hindi" id="content_hindi" class="form-control" rows="5">
{!! $news->content_hindi !!}
</textarea>
</div>

</div>

<button type="submit" class="btn btn-primary">
Update
</button>

<a href="{{ route('dashboard.whatsnew.index') }}" class="btn btn-secondary">
Cancel
</a>

</form>
</div>
</div>

</div>

<script>
CKEDITOR.replace('content_hindi');
CKEDITOR.replace('content_english');
</script>

@endsection
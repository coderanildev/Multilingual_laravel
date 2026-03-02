@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Whats New</title>

<style>
    .table-responsive {
        overflow-x: auto;
    }

    .table th,
    .table td {
        vertical-align: middle;
        white-space: nowrap;
    }

    .table td.content-col {
        max-width: 300px;
        white-space: normal;
        word-break: break-word;
    }

    .action-buttons form {
        display: inline-block;
        margin-bottom: 3px;
    }
</style>

<div class="col-12 col-xl-12">

    {{-- =========================
        ADD WHATS NEW FORM
    ========================== --}}
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2 class="h5 mb-4">Add Whats New</h2>

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

            <form method="POST" action="{{ route('dashboard.whatsnew.store') }}">
                @csrf

                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="">Select Category</option>
                            <option>Career</option>
                            <option>Tender</option>
                            <option>Notification</option>
                            <option>Workshop</option>
                            <option>Seminar</option>
                            <option>Lecture</option>
                            <option>Event</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Content (English)</label>
                        <textarea name="content_english" id="content_english" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Content (Hindi)</label>
                        <textarea name="content_hindi"  id="content_hindi"  class="form-control"  rows="5" required></textarea>
                    </div>
                    
                </div>

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

            </form>
        </div>
    </div>


    {{-- =========================
        WHATS NEW TABLE
    ========================== --}}
    <div class="card shadow">

        <div class="card-body">

            {{-- SEARCH --}}
            <div class="table-settings mb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form method="GET" action="{{ route('dashboard.whatsnew.index') }}">
                            <div class="input-group">
                                <button type="submit"
                                        class="input-group-text bg-primary text-white border-0">
                                    <i class="fas fa-search"></i>
                                </button>

                                <input type="text"
                                       name="search"
                                       value="{{ request('search') }}"
                                       class="form-control"
                                       placeholder="Search Category or Content">
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
                            <th>English</th>
                            <th>Hindi</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($whatsnews as $index => $news)
                            <tr>

                                <td>
                                    {{ $whatsnews->firstItem() + $index }}
                                </td>
                                
                                <td class="content-col">
                                    {!! \Illuminate\Support\Str::limit($news->content_english, 500) !!}
                                </td>

                                <td class="content-col">
                                    {!! \Illuminate\Support\Str::limit($news->content_hindi, 500) !!}
                                </td>

                                <td>
                                    {{ $news->category }}
                                </td>

                                <td class="text-center">
                                    @if($news->status == 3)
                                        <span class="badge bg-success">New</span>
                                    @elseif($news->status == 1)
                                        <span class="badge bg-info">Old</span>
                                    @elseif($news->status == 0)
                                        <span class="badge bg-danger">Deleted</span>
                                    @endif
                                </td>

                                <td class="action-buttons">

                                    @if($news->status == 3)
                                        <form method="POST" action="{{ route('dashboard.whatsnew.status') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $news->id }}">
                                            <input type="hidden" name="status" value="1">
                                            <button class="btn btn-sm btn-success text-white">
                                                Archive
                                            </button>
                                        </form>
                                    @endif

                                    @if($news->status == 1)
                                        <form method="POST" action="{{ route('dashboard.whatsnew.status') }}">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $news->id }}">
                                            <input type="hidden" name="status" value="3">
                                            <button class="btn btn-sm btn-info text-white">
                                                Move to New
                                            </button>
                                        </form>
                                    @endif
                                    <a href="{{ route('dashboard.whatsnew.edit', $news->id) }}" class="btn btn-warning text-white mb-1 px-2 py-1 btn-xs"
                                            title="Edit">
                                            <i class="fas fa-edit"></i>
                                    </a>
                                    @if($news->status != 0)
                                        <form method="POST"
                                              action="{{ route('dashboard.whatsnew.delete', $news->id) }}"
                                              onsubmit="return confirm('Are you sure you want to delete this record?');">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger text-white mb-1 px-2 py-1 btn-xs"
                                                    title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    @endif



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
                Showing <b>{{ $whatsnews->count() }}</b>
                of <b>{{ $whatsnews->total() }}</b> entries
            </div>

            <div>
                {{ $whatsnews->withQueryString()->links('pagination::bootstrap-5') }}
            </div>

        </div>

    </div>

</div>

<script>
	CKEDITOR.replace( 'content_hindi' );
	var editor_hindi = CKEDITOR.instances["content_hindi"];

	editor_hindi.on( 'change', function( evt ) {
		$('#content_hindi').each(function () {
			var $textarea = $(this);
			$textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
		});
	});

	CKEDITOR.replace( 'content_english' );
	var editor_english = CKEDITOR.instances["content_english"];

	editor_english.on( 'change', function( evt ) {
		$('#content_english').each(function () {
			var $textarea = $(this);
			$textarea.val(CKEDITOR.instances[$textarea.attr('name')].getData());
		});
	});
</script>

@endsection
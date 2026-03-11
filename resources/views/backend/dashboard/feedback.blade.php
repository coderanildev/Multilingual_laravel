@extends('backend.layouts.app')

@section('content')
<title>Dashboard - Feedback</title>

<style>
    .table-responsive { overflow-x: auto; }
    .table th, .table td { vertical-align: middle; white-space: nowrap; }
    .table td.feedback-col { max-width: 250px; white-space: normal; word-break: break-word; }
    .table td.document-col { max-width: 200px; overflow: hidden; text-overflow: ellipsis; }
    .action-buttons form { display: inline-block; margin-bottom: 3px; }
</style>

<div class="col-12 col-xl-12">

    <div class="card shadow">

        <div class="card-body">

            <h2 class="h5 mb-4">Feedback List</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- SEARCH --}}
            <div class="table-settings mb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form method="GET" action="{{ route('dashboard.feedback.index') }}">
                            <div class="input-group">

                                <button type="submit" class="input-group-text bg-primary text-white border-0">
                                    <i class="fas fa-search"></i>
                                </button>

                                <input type="text"
                                       name="search"
                                       value="{{ request('search') }}"
                                       class="form-control"
                                       placeholder="Search name, email, subject">

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Organisation</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Subject</th>
                            <th>Feedback</th>
                            <th>Attachment</th>
                            <th>Date</th>
                            <th>IP</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($feedbacks as $index => $value)

                            <tr>

                                <td>{{ $feedbacks->firstItem() + $index }}</td>

                                <td>{{ $value->name }}</td>

                                <td>{{ $value->email }}</td>

                                <td>{{ $value->organisation }}</td>

                                <td>{{ $value->department }}</td>

                                <td>{{ $value->designation }}</td>

                                <td>{{ \Illuminate\Support\Str::limit($value->subject, 40) }}</td>

                                <td class="feedback-col">
                                    {{ \Illuminate\Support\Str::limit($value->feedback, 100) }}
                                </td>

                                <td class="document-col">

                                    @if($value->attachment)

                                        <a href="{{ asset('includes/images/feedback/'.$value->attachment) }}" target="_blank">
                                            {{ \Illuminate\Support\Str::limit($value->attachment, 20) }}
                                        </a>

                                    @else

                                        <span class="text-muted">No File</span>

                                    @endif

                                </td>

                                <td>{{ date('d M Y H:i', strtotime($value->datetime)) }}</td>

                                <td>{{ $value->ipaddress }}</td>

                                <td class="action-buttons">
                                    <button type="button"
                                                class="btn btn-info text-white mb-1 px-2 py-1 btn-xs viewFeedbackBtn"
                                                data-id="{{ $value->id }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewFeedbackModal"
                                                title="View">
                                            <i class="fas fa-eye"></i>
                                    </button>
                                    {{-- DELETE --}}
                                    <form method="POST"
                                          action="{{ route('dashboard.feedback.delete', $value->id) }}"
                                          onsubmit="return confirm('Are you sure you want to delete this feedback?');">

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
                                <td colspan="12" class="text-center text-muted py-4">
                                    No Feedback Found
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

                                <!-- Single View Modal -->
                <div class="modal fade" id="viewFeedbackModal" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">Feedback Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body" id="feedbackDetailsContent">
                                <div class="text-center p-4">
                                    <div class="spinner-border text-primary"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- PAGINATION --}}
        <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">

            <div>
                Showing <b>{{ $feedbacks->count() }}</b>
                of <b>{{ $feedbacks->total() }}</b> entries
            </div>

            <div>
                {{ $feedbacks->withQueryString()->links('pagination::bootstrap-5') }}
            </div>

        </div>

    </div>

</div>

<script>
$(document).on('click', '.viewFeedbackBtn', function () {

    var feedbackId = $(this).data('id');
    $('#viewFeedbackModal').modal('show');

    $('#feedbackDetailsContent').html(`
        <div class="text-center p-4">
            <div class="spinner-border text-primary"></div>
        </div>
    `);

    $.ajax({
        url: "/dashboard/feedback/view/" + feedbackId,
        type: "GET",
        success: function (response) {
            $('#feedbackDetailsContent').html(response);
        },
        error: function () {
            $('#feedbackDetailsContent').html(
                '<div class="text-danger text-center">Failed to load data</div>'
            );
        }
    });

});
</script>

@endsection
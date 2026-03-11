<div class="container-fluid">

    <div class="row">

        {{-- LEFT SIDE ICON --}}
        <div class="col-md-4 text-center mb-3">

            <div class="border rounded p-4 bg-light">
                <i class="fas fa-user-circle fa-6x text-secondary"></i>

                <h5 class="mt-3">{{ $feedback->name }}</h5>

                <div class="text-muted">
                    {{ $feedback->designation }}
                </div>
            </div>

        </div>

        {{-- RIGHT SIDE BASIC INFO --}}
        <div class="col-md-8">

            <h5 class="mb-3">Feedback Information</h5>

            <table class="table table-sm table-bordered">

                <tr>
                    <th width="35%">Email</th>
                    <td>{{ $feedback->email }}</td>
                </tr>

                <tr>
                    <th>Organisation</th>
                    <td>{{ $feedback->organisation }}</td>
                </tr>

                <tr>
                    <th>Department</th>
                    <td>{{ $feedback->department }}</td>
                </tr>

                <tr>
                    <th>Designation</th>
                    <td>{{ $feedback->designation }}</td>
                </tr>

                <tr>
                    <th>Subject</th>
                    <td>{{ $feedback->subject }}</td>
                </tr>

                <tr>
                    <th>Date</th>
                    <td>{{ date('d M Y H:i', strtotime($feedback->datetime)) }}</td>
                </tr>

                <tr>
                    <th>IP Address</th>
                    <td>{{ $feedback->ipaddress }}</td>
                </tr>

                @if($feedback->attachment)
                <tr>
                    <th>Attachment</th>
                    <td>
                        <a href="{{ asset('includes/images/feedback/'.$feedback->attachment) }}"
                           target="_blank"
                           class="btn btn-sm btn-primary">
                           <i class="fas fa-file-download"></i> View File
                        </a>
                    </td>
                </tr>
                @endif

            </table>

        </div>

    </div>

    <hr>

    {{-- FEEDBACK MESSAGE --}}
    <div class="mb-3">

        <h6 class="fw-bold">Feedback Message</h6>

        <div class="border p-3 rounded bg-light" style="max-height:400px; overflow-y:auto;">

            {!! nl2br(e($feedback->feedback)) !!}

        </div>

    </div>

</div>
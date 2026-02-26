<div class="container-fluid">

    <div class="row">

        {{-- LEFT SIDE PHOTO --}}
        <div class="col-md-4 text-center mb-3">
            @if($employee->photo)
                <img src="{{ asset('includes/images/employees/'.$employee->photo) }}"
                     class="img-fluid rounded shadow"
                     style="max-height:220px;">
            @else
                <div class="text-muted">No Image</div>
            @endif
        </div>

        {{-- RIGHT SIDE BASIC INFO --}}
        <div class="col-md-8">

            <h5 class="mb-3">{{ $employee->name }}</h5>

            <table class="table table-sm table-bordered">

                <tr>
                    <th width="35%">Designation</th>
                    <td>{{ $employee->designationOfEmployee->designation ?? 'N/A' }}</td>
                </tr>

                <tr>
                    <th>Level</th>
                    <td>{{ $employee->levelOfEmployee->name ?? 'N/A' }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>
                        @foreach(explode(',', $employee->email) as $email)
                            {{ trim($email) }} <br>
                        @endforeach
                    </td>
                </tr>

                <tr>
                    <th>Phone</th>
                    <td>
                        @foreach(explode(',', $employee->phone_no) as $index => $phone)
                            <div>
                                <strong>{{ $index == 0 ? 'Office' : 'Mobile' }}:</strong>
                                {{ trim($phone) }}
                            </div>
                        @endforeach
                    </td>
                </tr>

                <tr>
                    <th>Username</th>
                    <td>{{ $employee->username }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if($employee->status == 1)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Added By</th>
                    <td>{{ $employee->added_by }}</td>
                </tr>

                <tr>
                    <th>Added Date</th>
                    <td>{{ $employee->added_date }}</td>
                </tr>

            </table>

        </div>

    </div>

    <hr>

    {{-- QUALIFICATION --}}
    <div class="mb-3">
        <h6 class="fw-bold">Qualification</h6>
        <div class="border p-2 rounded bg-light">
            {!! $employee->qualification !!}
        </div>
    </div>

    {{-- AREA OF INTEREST --}}
    <div class="mb-3">
        <h6 class="fw-bold">Area of Interest</h6>
        <div class="border p-2 rounded bg-light">
            {!! $employee->area_of_interest !!}
        </div>
    </div>

    {{-- DETAILS --}}
    <div class="mb-3">
        <h6 class="fw-bold">Full Details</h6>
        <div class="border p-3 rounded bg-light" style="max-height:1000px; overflow-y:auto;">
            {!! $employee->details !!}
        </div>
    </div>

</div>
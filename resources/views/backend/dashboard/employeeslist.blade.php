@extends('backend.layouts.app')

@section('content')

<title>Dashboard - Employees List</title>

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
        max-width: 250px;
        white-space: normal;
        word-break: break-word;
    }

    .action-buttons form {
        display: inline-block;
        margin-bottom: 3px;
    }

    .no-data-icon {
        font-size: 40px;
        color: #d1d5db;
    }
</style>

<div class="col-12">

    <div class="card shadow">
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
        <div class="card-body">

            {{-- SEARCH + ADD BUTTON --}}
            <div class="table-settings mb-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                        <form method="GET" action="{{ route('dashboard.employees.index') }}">
                            <div class="input-group">
                                <button type="submit"
                                        class="input-group-text bg-primary text-white border-0">
                                    <i class="fas fa-search"></i>
                                </button>

                                <input type="text"
                                       name="search"
                                       value="{{ request('search') }}"
                                       class="form-control"
                                       placeholder="Search Employee Name">
                            </div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('dashboard.employees.create') }}" class="btn btn-success">
                            <i class="fas fa-plus-circle"></i> Add New Employee
                        </a>
                    </div>
                </div>
            </div>

            {{-- TABLE --}}
            <div class="table-responsive">
                <table class="table table-hover align-items-center mb-0">

                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Level</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        @if($employees->count() > 0)

                            @foreach($employees as $index => $employee)

                                <tr>

                                    <td>
                                        {{ $employees->firstItem() + $index }}
                                    </td>

                                    <td>
                                        @if($employee->photo)
                                            <img src="{{ asset('includes/images/employees/'.$employee->photo) }}"
                                                 width="50"
                                                 height="50"
                                                 style="object-fit:cover; border-radius:5px;">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>

                                    <td>{{ $employee->name }}</td>

                                    <td>
                                       
                                     
                                            {!! \Illuminate\Support\Str::limit($employee->designationOfEmployee->designation ?? 'N/A' , 10) !!}
                                        
                                    </td>

                                    <td>
                                        {{ $employee->levelOfEmployee->name ?? 'N/A' }}
                                    </td>

                                    <td>
                                        @php
                                            $emails = explode(',', $employee->email);
                                        @endphp

                                        @foreach($emails as $email)
                                            {{ trim($email) }} <br>
                                        @endforeach
                                    </td>

                                    <td>
                                        @php
                                            $phones = explode(',', $employee->phone_no);
                                        @endphp

                                        @foreach($phones as $index => $phone)
                                            @if($index == 0)
                                                Office: {{ trim($phone) }} <br>
                                            @elseif($index == 1)
                                                Mobile: {{ trim($phone) }} <br>
                                            @else
                                                {{ trim($phone) }} <br>
                                            @endif
                                        @endforeach
                                    </td>

                                    <td class="action-buttons">
                                        <button type="button"
                                                class="btn btn-info text-white mb-1 px-2 py-1 btn-xs viewEmployeeBtn"
                                                data-id="{{ $employee->id }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewEmployeeModal"
                                                title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <a href="{{ route('dashboard.employees.edit', $employee->id) }}"
                                            class="btn btn-warning text-white mb-1 px-2 py-1 btn-xs"
                                            title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form method="POST"
                                            action="{{ route('dashboard.employees.delete', $employee->id) }}"
                                            class="d-inline"
                                            onsubmit="return confirm('Are you sure?');">
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

                            @endforeach

                        @else

                            <tr>
                                <td colspan="8" class="text-center py-5">
                                    <div>
                                        <i class="fas fa-folder-open no-data-icon mb-3"></i>
                                        <p class="text-muted fw-semibold mb-0">
                                            No Employee Found
                                        </p>
                                    </div>
                                </td>
                            </tr>

                        @endif

                    </tbody>

                </table>

                <!-- Single View Modal -->
                <div class="modal fade" id="viewEmployeeModal" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title">Employee Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body" id="employeeDetailsContent">
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
        @if($employees->count() > 0)
            <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">

                <div>
                    Showing
                    <b>{{ $employees->firstItem() }}</b>
                    to
                    <b>{{ $employees->lastItem() }}</b>
                    of
                    <b>{{ $employees->total() }}</b>
                    entries
                </div>

                <div>
                    {{ $employees->withQueryString()->links('pagination::bootstrap-5') }}
                </div>

            </div>
        @endif

    </div>

</div>


<script>
$(document).on('click', '.viewEmployeeBtn', function () {
   
    var employeeId = $(this).data('id');

    $('#viewEmployeeModal').modal('show');
    $('#employeeDetailsContent').html(`
        <div class="text-center p-4">
            <div class="spinner-border text-primary"></div>
        </div>
    `);
   

    $.ajax({
        url: "/dashboard/employees/view/" + employeeId,
        type: "GET",
        success: function (response) {
            $('#employeeDetailsContent').html(response);
        },
        error: function () {
            $('#employeeDetailsContent').html(
                '<div class="text-danger text-center">Failed to load data</div>'
            );
        }
    });

});
</script>

@endsection
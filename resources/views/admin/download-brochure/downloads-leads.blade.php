@extends('layouts.main')
@section('admindashboard')

<div class="">
    <section class="content-header">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- Your existing header content -->
                        </div>
                        <div class="card-body">
                            <form class="enquiry-form" action="{{ route('leadsDashboard.delete.multiple') }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mb-3">Delete Selected</button>

                                <table id="enquire_table" class="table table-responsive table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select_all"></th>
                                            <th>SLw</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Date & Time</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $key = 1; // Initialize the serial number variable
                                        @endphp
                                        @foreach ($leads as $lead)
                                        <tr>
                                            <td><input type="checkbox" name="lead_ids[]" value="{{ $lead->id }}"></td>
                                            <td>{{ $key++ }}</td>
                                            <td>{{ $lead->name }}</td>
                                            <td>{{ $lead->email }}</td>
                                            <td>{{ $lead->phone }}</td>
                                            <td>{{ $lead->created_at }}</td>
                                            <td>
                                                <a href="{{ route('downloadleadsview', $lead->id) }}" class="btn btn-success">View</a>
                                            </td>
                                            {{-- <td>
                                                <form action="{{ route('leadsDashboard.delete', $lead->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle the form submission with confirmation
        document.querySelector('.enquiry-form').addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you really want to delete these leads?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete them!'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                } else {
                    toastr.error('Deletion Cancelled');
                }
            })
        });

        // Handle the select all checkbox functionality
        document.getElementById('select_all').addEventListener('click', function() {
            let checkboxes = document.getElementsByName('lead_ids[]');
            for (let checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        });
    });
</script>
@endpush

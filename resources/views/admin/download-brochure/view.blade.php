@extends('layouts.main')
@section('admindashboard')
@section('content')
<div class="container">
    <h2>Lead Details</h2>
    <p><strong>Name:</strong> {{ $lead->name }}</p>
    <p><strong>Email:</strong> {{ $lead->email }}</p>
    <p><strong>Phone:</strong> {{ $lead->phone }}</p>
    <p><strong>PDF File:</strong> {{ $lead->pdf_file }}</p>
    <p><strong>Created At:</strong> {{ $lead->created_at }}</p>
</div>
@endsection


@extends('layouts.main')
@section('admindashboard')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card-header">
                        INFORMATION
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Name:</td>

                                    <td>{{ $lead->name }}</td>
                                </tr>

                                <tr>
                                    <td>Phone Number:</td>

                                    <td>{{ $lead->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Email ID:</td>

                                    <td>{{ $lead->email }}</td>
                                </tr>
                                <tr>
                                    <td>E-book:</td>

                                    <td>{{ $lead->pdf_file }}</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

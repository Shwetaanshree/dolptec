@extends('layouts.main')
@section('admindashboard')
     <!-- Begin Page Content -->
     <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1><br>
    <h3>Welcome back, Admin!</h3>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
    <a href="{{ route('enquireslist') }}" class="collapse-item {{ request()->is('enquireslist') ? 'active' : '' }}">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Enquires leads</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('enquires')->where('status', 1)->count()}}</h3></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
</a>
    </div>


    
        <!-- Earnings (Monthly) Card Example -->
      
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <a href="{{ route('downloadsDashboard') }}" class="collapse-item {{ request()->is('downloads-dashboard') ? 'active' : '' }}">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Download Brouchure Leads
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        {{ DB::table('pdf_downloads')->count() }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        
    
    

</div>


<div class="row">
    <!-- Phone Clicks Card -->
    <div class="col-xl-6 col-md-6 mb-4">
        <a href="#" class="collapse-item">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Phone Clicks
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Click::where('type', 'phone')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-phone fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Email Clicks Card -->
    <div class="col-xl-6 col-md-6 mb-4">
        <a href="#" class="collapse-item">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Email Clicks
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Click::where('type', 'email')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- /.container-fluid -->
@endsection

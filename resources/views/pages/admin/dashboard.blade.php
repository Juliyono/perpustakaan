@extends('layouts.admin.main')
@section('title', 'Admin Dashboard')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            </div>
        </div>
        <div class="row">

             <!-- Card Total Buku -->
             <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Buku</h4>
                        </div>
                        <div class="card-body">
                            {{ $bukus }}
                        </div>
                    </div>
                </div>
            </div>

             <!-- Card Total Member -->
             <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Member</h4>
                        </div>
                        <div class="card-body">
                            {{ $members }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>
@endsection

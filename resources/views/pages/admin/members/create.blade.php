@extends('layouts.admin.main')
@section('title', 'Admin Tambah Member')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Member</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('members.index') }}">Member</a>
                </div>
                <div class="breadcrumb-item">Tambah Member</div>
            </div>
        </div>
        
        <a href="{{ route('members.index') }}" class="btn btn-icon icon-left btn-warning">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <div class="card mt-4">
            <form action="{{ route('members.store') }}" class="needs-validation" novalidate="" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama Member</label>
                                <input id="nama" type="text" class="form-control" name="nama" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="email">Email Member</label>
                                <input id="email" type="email" class="form-control" name="email" required="">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-plus"></i> Tambah Member
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

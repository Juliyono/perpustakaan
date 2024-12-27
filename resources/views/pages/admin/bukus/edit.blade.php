@extends('layouts.admin.main')
@section('title', 'Admin Edit Buku')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Buku</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('bukus.index') }}">Buku</a>
                </div>
                <div class="breadcrumb-item">Edit Buku</div>
            </div>
        </div>
        
        <a href="{{ route('bukus.index') }}" class="btn btn-icon icon-left btn-warning">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <div class="card mt-4">
            <form action="{{ route('bukus.update', $buku->id) }}" class="needs-validation" novalidate="" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="penulis">Penulis Buku</label>
                                <input id="penulis" type="text" class="form-control" name="penulis" required="" value="{{ $buku->penulis }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                                <label for="judul">Judul Buku</label>
                                <input id="judul" type="text" class="form-control" name="judul" required="" value="{{ $buku->judul }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kategori">Kategori Buku</label>
                                <input id="kategori" type="text" class="form-control" name="kategori" required="" value="{{ $buku->kategori }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                <input id="tahun_terbit" type="number" class="form-control" name="tahun_terbit" required="" value="{{ $buku->tahun_terbit }}">
                                <div class="invalid-feedback">
                                    Kolom ini harus diisi!
                                </div>
                            </div>
                        </div>
                        
                    
                    <button type="submit" class="btn btn-icon icon-left btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

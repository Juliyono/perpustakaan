@extends('layouts.admin.main')
@section('title', 'Admin Detail Buku')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Buku</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('bukus.index') }}">Buku</a>
                </div>
                <div class="breadcrumb-item">Detail Buku</div>
            </div>
        </div>
        
        <a href="{{ route('bukus.index') }}" class="btn btn-icon icon-left btn-warning mb-4">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <div class="row mt-2">
            <div class="col-12 col-md-8 col-lg-8 m-auto">
                <article class="article article-style-c shadow-lg p-4 rounded bg-light">
                    <div class="article-details">
                        <!-- Title & Category -->
                        <div class="article-title mb-3">
                            <h2 class="text-dark font-weight-bold">{{ $buku->judul }}</h2>
                            <div class="article-category text-muted mb-2">
                                <i class="fas fa-bookmark"></i>
                                <a href="#" class="ml-2">{{ $buku->kategori }}</a>
                            </div>
                        </div>
                        
                        <!-- Author & Year -->
                        <div class="mb-3">
                            <div class="article-category text-muted mb-2">
                                <i class="fas fa-user"></i>
                                <a href="#" class="ml-2">{{ $buku->penulis }}</a>
                            </div>
                            <div class="article-category text-muted">
                                <i class="fas fa-calendar-alt"></i>
                                <a href="#" class="ml-2">Tahun Terbit: {{ $buku->tahun_terbit }}</a>
                            </div>
                        </div>

                        <!-- Date Created -->
                        <div class="article-category text-muted">
                            <i class="fas fa-clock"></i>
                            <a href="#" class="ml-2">Ditambahkan pada: {{ $buku->created_at->format('d M Y') }}</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection

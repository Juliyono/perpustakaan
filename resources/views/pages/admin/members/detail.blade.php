@extends('layouts.admin.main')
@section('title', 'Admin Detail Member')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Member</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item active">
                    <a href="{{ route('members.index') }}">Member</a>
                </div>
                <div class="breadcrumb-item">Detail Member</div>
            </div>
        </div>
        
        <a href="{{ route('members.index') }}" class="btn btn-icon icon-left btn-warning mb-4">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
        
        <div class="row mt-2">
            <div class="col-12 col-md-8 col-lg-8 m-auto">
                <article class="article article-style-c shadow-lg p-4 rounded bg-light">
                    <div class="article-details">
                        <!-- Name -->
                        <div class="article-title mb-3">
                            <h2 class="text-dark font-weight-bold">{{ $member->nama }}</h2>
                        </div>
                        
                        <!-- Email -->
                        <div class="mb-3">
                            <div class="article-category text-muted mb-2">
                                <i class="fas fa-envelope"></i>
                                <a href="#" class="ml-2">{{ $member->email }}</a>
                            </div>
                        </div>

                        <!-- Date Joined -->
                        <div class="article-category text-muted">
                            <i class="fas fa-calendar-alt"></i>
                            <a href="#" class="ml-2">Bergabung pada: {{ $member->created_at->format('d M Y') }}</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</div>
@endsection

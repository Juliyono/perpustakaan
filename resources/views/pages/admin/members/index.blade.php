@extends('layouts.admin.main')
@section('title', 'Admin Member')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Member</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Member</div>
            </div>
        </div>

        <!-- Tambah Member Button -->
        <a href="{{ route('members.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="fas fa-plus"></i> Member
        </a>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @php $no = 0; @endphp
                    @forelse ($members as $member)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $member->nama }}</td>
                        <td>{{ $member->email }}</td>
                        <td>
                            <a href="{{ route('members.detail', $member->id) }}" class="badge badge-info">Detail</a> 
                            <a href="{{ route('members.edit', $member->id) }}" class="badge badge-warning">Edit</a>
                            <a href="{{ route('members.delete', $member->id) }}" class="badge badge-danger" data-confirm-delete="true">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Data Member Kosong</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

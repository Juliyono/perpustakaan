@extends('layouts.admin.main')
@section('title', 'Admin Buku')
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Buku</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Buku</div>
            </div>
        </div>

        <!-- Form Pencarian dan Filter Buku -->
        <div class="d-flex justify-content-between mb-3">
            <form action="{{ route('bukus.index') }}" method="GET" class="d-flex">
                <select name="kategori" class="form-control mr-2">
                    <option value="">Pilih Kategori</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori }}" {{ request('kategori') == $kategori ? 'selected' : '' }}>
                            {{ $kategori }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary mr-2">Filter</button>
                <a href="{{ route('bukus.index') }}" class="btn btn-secondary">Reset</a>
            </form>

            <form action="{{ route('bukus.index') }}" method="GET" class="d-flex">
                <input type="text" name="cari" class="form-control mr-2" placeholder="Cari Buku..." value="{{ request('cari') }}">
                <button type="submit" class="btn btn-primary mr-2">Cari</button>
                <a href="{{ route('bukus.index') }}" class="btn btn-secondary">Reset</a>
            </form>
        </div>

        <!-- Tambah Buku Button -->
        <a href="{{ route('bukus.create') }}" class="btn btn-icon icon-left btn-primary">
            <i class="fas fa-plus"></i> Buku
        </a>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Tahun Terbit</th>
                        <th>Action</th>
                    </tr>
                    @php $no = 0; @endphp
                    @forelse ($bukus as $item)
                    <tr>
                        <td>{{ $no+= 1 }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->tahun_terbit }}</td>
                        <td>
                            <a href="{{ route('bukus.detail', $item->id) }}" class="badge badge-info">Detail</a>
                            <a href="{{ route('bukus.edit', $item->id) }}" class="badge badge-warning">Edit</a>
                            <a href="{{ route('bukus.delete', $item->id) }}" class="badge badge-danger" data-confirm-delete="true">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Buku Kosong</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

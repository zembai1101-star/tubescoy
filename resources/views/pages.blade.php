@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0"><i class="fas fa-file-alt mr-2"></i>Halaman Statis</h1>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Kelola Halaman Utama Blog</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nama Halaman</th>
                            <th>Slug URL</th>
                            <th>Terakhir Diubah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tentang Kami (About Us)</td>
                            <td><code>/about</code></td>
                            <td>05/06/2026</td>
                            <td><button class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</button></td>
                        </tr>
                        <tr>
                            <td>Kontak (Contact Us)</td>
                            <td><code>/contact</code></td>
                            <td>05/06/2026</td>
                            <td><button class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
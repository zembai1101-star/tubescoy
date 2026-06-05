@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0"><i class="fas fa-images mr-2"></i>Galeri Media</h1>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-success btn-sm"><i class="fas fa-uploadmr-1"></i> Upload Foto Baru</button>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-center text-muted py-5">
                        <i class="fas fa-folder-open fa-3x mb-3"></i>
                        <p>Belum ada gambar yang diunggah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
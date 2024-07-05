@extends('Admin.pages.partials.main')

@section('adminKonten')
<div class="card-header clearfix">
    <a href="{{ route('postingan.index') }}" class="btn btn-secondary float-start"><< Kembali</a>
    <h4 class="card-title float-end">Form Tambah Project</h4>
</div>

<div class="card-body">
    <form action="{{ route('postingan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Gambar</label>
            <input type="file" name="gambar" id="" class="form-control form-control-sm" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Judul</label>
            <input type="text" name="judul" id="" class="form-control form-control-sm" value="{{ old('judul') }}" placeholder="Judul...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Link</label>
            <input type="text" name="link" id="" class="form-control form-control-sm" value="{{ old('link') }}" placeholder="Link...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Deskripsi Project</label>
            <textarea name="isi" class="form-control form-control-sm" id="summernote" rows="5">{{ old('isi') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
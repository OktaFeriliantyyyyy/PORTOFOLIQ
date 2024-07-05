@extends('Admin.pages.partials.main')

@section('adminKonten')
    <div class="card-header clearfix">
        <a href="{{ route('postingan.index') }}" class="btn btn-secondary float-start">
            << Kembali</a>
                <h4 class="card-title float-end">Form Edit Project</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('postingan.update', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <div class="col-sm-1">
                    @if ($data->gambar)
                        <div class="mb-3">
                            <img src="{{ url('foto/postingan') . '/' . $data->gambar }}" style="max-width: 50px; max-height:50px;">
                        </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <label for="" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="" class="form-control form-control-sm" value="">
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Judul</label>
                <input type="text" name="judul" id="" class="form-control"
                    value="{{ old('judul', $data->judul) }}" placeholder="Judul...">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Link</label>
                <input type="text" name="link" id="" class="form-control form-control-sm"
                    value="{{ old('link', $data->link) }}" placeholder="Link...">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Isi</label>
                <textarea name="isi" class="form-control" id="summernote" rows="5">{{ old('isi', $data->isi) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

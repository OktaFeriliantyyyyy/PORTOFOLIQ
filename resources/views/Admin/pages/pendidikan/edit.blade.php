@extends('Admin.pages.partials.main')

@section('adminKonten')
<div class="card-header clearfix">
    <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary float-start"><< Kembali</a>
    <h4 class="card-title float-end">Form Edit Pendidikan</h4>
</div>

<div class="card-body">
    <form action="{{ route('pendidikan.update', $data->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Universitas</label>
            <input type="text" name="judul" id="" class="form-control" value="{{ old('judul', $data->judul) }}" placeholder="Universitas...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Fakultas</label>
            <input type="text" name="info1" id="info1" class="form-control" value="{{ old('info1', $data->info1) }}" placeholder="Nama Fakultas...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nama Prodi</label>
            <input type="text" name="info2" id="info2" class="form-control" value="{{ old('info2', $data->info2) }}" placeholder="Nama Prodi...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Isi</label>
            <textarea name="isi" id="isi" class="form-control">{{ old('isi',$data->isi) }}</textarea>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto">
                    <input type="date" name="tgl_mulai" class="form-control form-control-sm" placeholder="dd/mm/yy" value="{{ $data->tgl_mulai }}">
                </div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto">
                    <input type="date" name="tgl_akhir" class="form-control form-control-sm" placeholder="dd/mm/yy" value="{{ $data->tgl_akhir }}">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
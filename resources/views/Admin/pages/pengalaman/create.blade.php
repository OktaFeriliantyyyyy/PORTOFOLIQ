@extends('Admin.pages.partials.main')

@section('adminKonten')
<div class="card-header clearfix">
    <a href="{{ route('pengalaman.index') }}" class="btn btn-secondary float-start"><< Kembali</a>
    <h4 class="card-title float-end">Form Tambah Pengalaman</h4>
</div>

<div class="card-body">
    <form action="{{ route('pengalaman.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Posisi</label>
            <input type="text" name="judul" id="" class="form-control" value="{{ old('judul') }}" placeholder="Posisi...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Perusahaan</label>
            <input type="text" name="info1" id="info1" class="form-control" value="{{ old('info1') }}" placeholder="Nama Perusahaan...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Alamat Perusahaan</label>
            <input type="text" name="info2" id="info2" class="form-control" value="{{ old('info2') }}" placeholder="Alamat Perusahaan...">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Isi</label>
           <textarea name="isi" id="isi" class="form-control"></textarea>
        </div>


        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto">
                    <input type="date" name="tgl_mulai" class="form-control form-control-sm" placeholder="dd/mm/yy">
                </div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto">
                    <input type="date" name="tgl_akhir" class="form-control form-control-sm" placeholder="dd/mm/yy">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
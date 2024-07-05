@extends('Admin.pages.partials.main')

@section('adminKonten')
    <div class="card-header clearfix">
        <a href="{{ route('skill.index') }}" class="btn btn-secondary float-start">
            << Kembali</a>
                <h4 class="card-title float-end">Form Tambah Skill</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('skill.update', $data->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="" class="form-label">Tipe</label>
                <select class="form-select" name="tipe" aria-label="Default select example">
                    {{-- <option value="" {{ $data->tipe === null ? 'selected' : '' }}>Silahkan Pilih Tipe Skill</option> --}}
                    <option value="soft_skill" {{ $data->tipe === 'soft_skill' ? 'selected' : '' }}>Soft Skill</option>
                    <option value="programming" {{ $data->tipe === 'programming' ? 'selected' : '' }}>Programming</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Skill</label>
                <input type="text" name="skill" id="" class="form-control" value="{{ old('skill', $data->skill) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

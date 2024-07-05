@extends('Admin.pages.partials.main')

@section('adminKonten')
    
    <div class="card">

        <div class="card-header clearfix">
            <h4 class="card-title float-start">Pendidikan</h4>
            <a href="{{ route('pendidikan.create') }}" class="btn btn-primary float-end">+ Pendidikan</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th>Universitas</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th class="col-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1
                        @endphp
                        @foreach ($data as $item) 
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->info1 }}</td>
                            <td>{{ $item->info2 }}</td>
                            <td>{{ $item->tgl_mulai_indo }}</td>
                            <td>{{ $item->tgl_akhir_indo }}</td>
                            <td>
                                <a href="{{ route('pendidikan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pendidikan.destroy', $item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>

    </div>

@endsection
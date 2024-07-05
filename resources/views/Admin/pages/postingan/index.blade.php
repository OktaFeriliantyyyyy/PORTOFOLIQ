@extends('Admin.pages.partials.main')

@section('adminKonten')

<div class="card">

    <div class="card-header clearfix">
        <h4 class="card-title float-start">Project</h4>
        <a href="{{ route('postingan.create') }}" class="btn btn-primary float-end">+ Project</a>
    </div>

    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th class="col-3">Judul</th>
                            <th class="col-3">Action</th>
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
                            <td>
                                <a href="{{ route('postingan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('postingan.destroy', $item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data?')">
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
@extends('Admin.pages.partials.main')

@section('adminKonten')
    <div class="card">

        <div class="card-header clearfix">
            <h4 class="card-title float-start">Skill</h4>
            <a href="{{ route('skill.create') }}" class="btn btn-primary float-end">+ Skill</a>
        </div>

        <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <div class="table-responsive">
                        <h6>Soft Skill</h6>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-3">Skill</th>
                                    <th class="col-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data_softSkill as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->skill }}</td>
                                        <td>
                                            <a href="{{ route('skill.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('skill.destroy', $item->id) }}" method="post"
                                                class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data?')">
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

                <div class="col-md-6">
                    <div class="table-responsive">
                        <h6>Skill Programming</h6>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-3">Skill</th>
                                    <th class="col-3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data_programming as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->skill }}</td>
                                        <td>
                                            <a href="{{ route('skill.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('skill.destroy', $item->id) }}" method="post"
                                                class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data?')">
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
        </div>

    </div>
@endsection

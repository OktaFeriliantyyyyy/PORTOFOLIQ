@if ($errors->any())
    <div class="alert alert-danger mx-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('Sukses'))
    <div class="alert alert-success mx-3">
        {{ session('Sukses') }}
    </div>
@endif
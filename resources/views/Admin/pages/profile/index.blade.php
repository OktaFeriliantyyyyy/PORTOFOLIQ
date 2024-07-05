@extends('Admin.pages.partials.main')

@section('adminKonten')
<div class="card-body">
    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row justify-content-between">
            <div class="col-5">
                <h3 class="card-title">Profile</h3>
                
                @if (getMetaValue('_foto'))
                    <img src="{{ asset('foto/profile'). "/" .getMetaValue('_foto') }}" style="max-width:100px; max-height:100px;">
                @endif

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="_foto" id="_foto" class="form-control form-control-sm">
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="_nama" id="_nama" class="form-control form-control-sm" value="{{ getMetaValue('_nama') }}">
                </div>


                <div class="mb-3">
                    <label for="nama" class="form-label">Tentang Saya</label>
                    <textarea name="_aboutMe" class="form-control">{{ getMetaValue('_aboutMe') }}</textarea>
                </div>

                <h3>Resume</h3>
                <div class="mb-3">
                    <label for="Resume" class="form-label">Resume</label>
                    <input type="text" name="_resume" id="_resume" class="form-control form-control-sm" value="{{ getMetaValue('_resume') }}">
                </div>

                <!-- Tambahkan Input Baru untuk Header -->
                <h3>Header Settings</h3>
                <div class="mb-3">
                    <label for="badgeText" class="form-label">Badge Text</label>
                    <input type="text" name="badgeText" id="badgeText" class="form-control form-control-sm" value="{{ getMetaValue('badgeText') }}">
                </div>

                <div class="mb-3">
                    <label for="headerSubtitle" class="form-label">Header Subtitle</label>
                    <input type="text" name="headerSubtitle" id="headerSubtitle" class="form-control form-control-sm" value="{{ getMetaValue('headerSubtitle') }}">
                </div>

                <div class="mb-3">
                    <label for="headerTitle" class="form-label">Header Title</label>
                    <input type="text" name="headerTitle" id="headerTitle" class="form-control form-control-sm" value="{{ getMetaValue('headerTitle') }}">
                </div>

            </div>
            <div class="col-5">
                <h3>Media Sosial</h3>
                
                <div class="mb-3">
                    <label for="_facebook" class="form-label">Facebook</label>
                    <input type="text" name="_facebook" id="_facebook" class="form-control form-control-sm" value="{{ getMetaValue('_facebook') }}">
                </div>

                <div class="mb-3">
                    <label for="_instagram" class="form-label">Instagram</label>
                    <input type="text" name="_instagram" id="_instagram" class="form-control form-control-sm" value="{{ getMetaValue('_instagram') }}">
                </div>

                <div class="mb-3">
                    <label for="_youtube" class="form-label">Youtube</label>
                    <input type="text" name="_youtube" id="_youtube" class="form-control form-control-sm" value="{{ getMetaValue('_youtube') }}">
                </div>

                <div class="mb-3">
                    <label for="_github" class="form-label">Github</label>
                    <input type="text" name="_github" id="_github" class="form-control form-control-sm" value="{{ getMetaValue('_github') }}">
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

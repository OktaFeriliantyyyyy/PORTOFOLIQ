<footer class="py-3 mt-auto" style="background-color: #e3f2fd;">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="d-flex justify-content-center fs-3 gap-4">
                    <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_youtube') }}"><i class="bi bi-youtube"></i></a>
                    <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_instagram') }}"><i class="bi bi-instagram"></i></a>
                    <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_github') }}"><i class="bi bi-github"></i></a>
                    <a class="text-gradient" target="_blank" href="{{ GetMetaValue('_facebook') }}"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="small m-0">Copyright &copy; {{ GetMetaValue('_nama') }}</div>
            </div>
        </div>
    </div>
</footer>

@include('TampilanUser.partials.komponen.ModalContact')

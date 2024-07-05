@extends('TampilanUser.partials.main')

@section('konten')
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary btn-sm px-4 py-3" target="_blank" href="{{ getMetaValue('_resume') }}">
                            <div class="d-inline-block bi bi-download me-2"></div>
                             Resume
                        </a>
                    </div>
                    <!-- Experience Card 1-->
                    @foreach ($pengalaman as $item)
                        
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="text-primary h5 fw-bolder mb-2 text-center">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</div>
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="small fw-bolder">{{ $item->judul }}</div>
                                            <div class="small text-muted">{{ $item->info1 }}</div>
                                            <div class="small text-muted">{{ $item->info2 }}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>{{ $item->isi }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
 
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    @foreach ($pendidikan as $item)
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="text-secondary text-center h5 fw-bolder mb-2">{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</div>
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="mb-2">
                                            <div class="small fw-bolder">{{ $item->judul }}</div>
                                            <div class="small text-muted">{{ $item->info1 }}</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">{{ $item->info2 }}</div>
                                            {{-- <div class="small text-muted">Web Development</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>{{ $item->isi }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-tools"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Soft
                                            Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    @foreach ($softSkill as $item)
                                    <div class="col my-3 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $item->skill }}</div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                        <i class="bi bi-code-slash"></i>
                                    </div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Programming Skill</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    @foreach ($programmingSkill as $item)
                                    <div class="col my-3 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $item->skill }}</div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

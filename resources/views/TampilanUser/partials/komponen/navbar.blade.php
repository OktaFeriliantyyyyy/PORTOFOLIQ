<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; padding: 1rem;">
    <div class="container px-5">
        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">{{ GetMetaValue('_nama') }}</span></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder text-center">
                <li class="nav-item"><a class="nav-link {{ ($title == 'Home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title == 'Resume') ? 'active' : '' }}" href="{{ route('resume') }}">Resume</a></li>
                <li class="nav-item"><a class="nav-link {{ ($title == 'Project') ? 'active' : '' }}" href="{{ route('project') }}">Projects</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="">Contact</a></li> --}}
            </ul>
        </div>
        <div class="col-auto">
            <a class="btn btn-outline-primary btn-sm ms-auto" href="{{ route('login.index') }}">Login</a>
        </div>
    </div>
</nav>
<nav aria-label="breadcrumb" class="desktop-breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="{{ ($title == 'Home') ? 'aktif' : '' }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('resume') }}" class="{{ ($title == 'Resume') ? 'aktif' : '' }}">Resume</a></li>
        <li class="breadcrumb-item"><a href="{{ route('project') }}" class="{{ ($title == 'Project') ? 'aktif' : '' }}">Project</a></li>
    </ol>
</nav>

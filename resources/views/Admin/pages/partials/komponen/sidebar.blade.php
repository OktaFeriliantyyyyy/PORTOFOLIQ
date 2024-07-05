<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <span>CMS-PORTO</span>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ ($title == 'Pendidikan') ? 'active' : '' }}">
                    <a href="{{ route('pendidikan.index') }}" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Pendidikan</span>
                    </a>
                </li>

                <li class="sidebar-item {{ ($title == 'Pengalaman') ? 'active' : '' }}">
                    <a href="{{ route('pengalaman.index') }}" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Pengalaman</span>
                    </a>
                </li>

                <li class="sidebar-item {{ ($title == 'Profile') ? 'active' : '' }}">
                    <a href="{{ route('profile.index') }}" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li class="sidebar-item {{ ($title == 'Postingan') ? 'active' : '' }}">
                    <a href="{{ route('postingan.index') }}" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Project</span>
                    </a>
                </li>

                <li class="sidebar-item {{ ($title == 'Skill') ? 'active' : '' }}">
                    <a href="{{ route('skill.index') }}" class='sidebar-link'>
                        <i class="bi bi-pentagon-fill"></i>
                        <span>Skill</span>
                    </a>
</li>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

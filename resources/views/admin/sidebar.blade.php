<!-- Navbar Mobile -->
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
        <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Logo" />
        <img class="navbar-brand-light" src="{{ asset('assets-admin/img/brand/dark.svg') }}" alt="Logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Sidebar -->
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">

        <ul class="nav flex-column pt-3 pt-md-0">

            <!-- Brand -->
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="{{ asset('assets-admin/img/brand/light.svg') }}" height="20" width="20">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
                </a>
            </li>

            <!-- Dashboard -->
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>

            <!-- Pelanggan -->
            <li class="nav-item {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                <a href="{{ route('pelanggan.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0"/>
                        </svg>
                    </span>
                    <span class="sidebar-text">Pelanggan</span>
                </a>
            </li>

            <!-- User -->
            <li class="nav-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 7a3 3 0 11-6 0 3 3 0 016 0zM2 17a6 6 0 0112 0H2z" />
                        </svg>
                    </span>
                    <span class="sidebar-text">User</span>
                </a>
            </li>

            <!-- Divider -->
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

            <!-- Logout -->
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link text-start text-white">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 4.5A1.5 1.5 0 014.5 3h6A1.5 1.5 0 0112 4.5v2a1 1 0 11-2 0v-2h-6v11h6v-2a1 1 0 112 0v2A1.5 1.5 0 0110.5 18h-6A1.5 1.5 0 013 16.5v-12z"/>
                            </svg>
                        </span>
                        <span class="sidebar-text">Logout</span>
                    </button>
                </form>
            </li>

        </ul>
    </div>
</nav>

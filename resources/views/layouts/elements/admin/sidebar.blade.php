<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a href="{{ route('home') }}" class="d-flex justify-content-center p-2">
        <img style="max-height: 70px;" class="my-2 img-fluid" src="{{ asset("assets/img/logo.svg")}}" alt="" >
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route("admin.index") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Admin
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route("admin.settings.index") }}">
            <i class="fas fa-cogs"></i>
            <span>Settings</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route("admin.staff.index") }}">
            <i class="fas fa-user-plus"></i>
            <span>Staff / Partenaires</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    
    <div class="sidebar-heading">
        Gestion
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route("admin.users.index") }}">
            <i class="fas fa-users"></i>
            <span>Utilisateurs</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route("admin.booking.index") }}">
            <i class="fas fa-ticket-alt"></i>
            <span>Réservations</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route("admin.movies.index") }}">
            <i class="fas fa-video"></i>
            <span>Court-métrages</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
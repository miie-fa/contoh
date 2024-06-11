<nav class="flex-row p-0 navbar col-lg-12 col-12 fixed-top d-flex">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="mr-5 navbar-brand brand-logo" href="index.html"><img src="{{ asset('images/logo.svg') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('images/logo-mini.svg') }}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                {{-- <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search"><i class="icon-search"></i></span>
                    </div>
                    <input type="text" class="border form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div> --}}
                <section class="container">
                    <form class="search" method="post" action="#0">
                    <input id="navbar-search-input" type="search" name="q" placeholder="Search..." autocomplete="off">
                    <ul id="search-results" class="search-ac">

                    </ul>
                    </form>
                </section>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mx-0 icon-bell"></i>
                <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="float-left mb-0 font-weight-normal dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                    <i class="mx-0 ti-info-alt"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="mb-0 font-weight-light small-text text-muted">
                    Just now
                    </p>
                </div>
                </a>
                <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                    <i class="mx-0 ti-settings"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="mb-0 font-weight-light small-text text-muted">
                    Private message
                    </p>
                </div>
                </a>
                <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                    <i class="mx-0 ti-user"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="mb-0 font-weight-light small-text text-muted">
                    2 days ago
                    </p>
                </div>
                </a>
            </div>
            </li>
            <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img class="img-navbar" src="{{ asset('images/faces/face28.jpg') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
                </a>
                <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
                </a>
            </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
                <i class="icon-ellipsis"></i>
            </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>

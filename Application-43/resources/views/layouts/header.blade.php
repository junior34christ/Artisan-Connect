<div class="header">

    <div class="header-left active">
        <a href="index.html" class="logo">
            <img src="{{ URL::to('assets/img/photo.png') }}" alt="">
        </a>
        <a href="index.html" class="logo-small">
            <img src="{{ URL::to('assets/img/Sans-titre-1.png') }}" alt="">
        </a>
        <a id="toggle_btn" href="javascript:void(0);">
        </a>
    </div>

    <a id="mobile_btn" class="mobile_btn" href="#sidebar">
        <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </a>

    <ul class="nav user-menu">

        <li class="nav-item">
            <div class="top-nav-search">
                <a href="javascript:void(0);" class="responsive-search">
                    <i class="fa fa-search"></i>
                </a>
                <form action="#">
                    <div class="searchinputs">
                        <input type="text" placeholder="Search Here ...">
                        <div class="search-addon">
                            <span><img src="{{ URL::to('assets/img/icons/closes.svg') }}" alt="img"></span>
                        </div>
                    </div>
                    <a class="btn" id="searchdiv"><img src="{{ URL::to('assets/img/icons/search.svg') }}"
                            alt="img"></a>
                </form>
            </div>
        </li>


        <li class="nav-item dropdown has-arrow flag-nav">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                <img src="{{ URL::to('assets/img/flags/us1.png') }}" alt="" height="20">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ URL::to('assets/img/flags/us.png') }}" alt="us" height="16"> English
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ URL::to('assets/img/flags/fr.png') }}" alt="fr" height="16"> French
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ URL::to('assets/img/flags/es.png') }}" alt="es" height="16"> Spanish
                </a>
                <a href="javascript:void(0);" class="dropdown-item">
                    <img src="{{ URL::to('assets/img/flags/de.png') }}" alt="de" height="16"> German
                </a>
            </div>
        </li>


        <li class="nav-item dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <img src="{{ URL::to('assets/img/icons/notification-bing.svg') }}" alt="img"> <span
                    class="badge rounded-pill">1</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Tout éffacer </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="{{ route('notifications.index') }}">
                                <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                        <img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added
                                            new task <span class="noti-title">Patient appointment booking</span>
                                        </p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="{{ url('/messagerie') }}">Voir toute les Notifications</a>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown has-arrow main-drop">
            <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                <img src="{{ Auth::user()->profile_image ? URL::to('storage/' . Auth::user()->profile_image) : URL::to('assets/img/icons/user-solid.svg') }}" alt="Img">
                <span class="status {{ Auth::user()->is_online ? 'online' : 'offline' }}"></span>
            </a>
            <div class="dropdown-menu menu-drop-user">
                <div class="profilename">
                    <div class="profileset">
                        <span class="user-img">
                            <img src="{{ Auth::user()->profile_image ? URL::to('storage/' . Auth::user()->profile_image) : URL::to('assets/img/icons/user-solid.svg') }}" alt="Img">
                            <span class="status {{ Auth::user()->is_online ? 'online' : 'offline' }}"></span>
                        </span>
                        <div class="profilesets">
                            @if (Auth::check())
                                <h6>{{ Auth::user()->first_name }}</h6>
                                <h5>{{ Auth::user()->role }}</h5>
                            @else
                                <h6>Guest</h6>
                                <h5>Not Logged In</h5>
                            @endif
                        </div>

                    </div>
                    <hr class="m-0">
                    <a class="dropdown-item" href="{{ route('dashboard.profile') }}"> <i class="me-2"
                            data-feather="user"></i> Mon
                        Profil</a>
                    <a class="dropdown-item" href="{{ route('settings.generalsettings') }}"><i class="me-2"
                            data-feather="settings"></i>Paramètres</a>
                    <hr class="m-0">
                    <a class="dropdown-item logout pb-0" href="{{ route('logout') }}"><img
                            src="{{ URL::to('assets/img/icons/log-out.svg') }}" class="me-2"
                            alt="img">Déconnexion</a>
                </div>
            </div>
        </li>
    </ul>


    <div class="dropdown mobile-user-menu">
        <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route('dashboard.profile') }}">Mon Profil</a>
            <a class="dropdown-item" href="{{ route('settings.generalsettings') }}">Paramètre</a>
            <a class="dropdown-item" href="{{ route('logout') }}">Déconnexion</a>
        </div>
    </div>

</div>

<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                            data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                            data-feather="mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon"
                            data-feather="calendar"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link bookmark-star">
                        <i class="ficon text-warning" data-feather="star"></i>
                    </a>
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                            data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i>
                        English</a>
                    <a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i>
                        French</a>
                    <a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i>
                        German</a>
                    <a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i>
                        Portuguese</a>
                </div>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a>
            </li>
            <li class="nav-item nav-search">
                <a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                        data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-cart me-25">
                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                    <i class="ficon" data-feather="shopping-cart"></i>
                    <span class="badge rounded-pill bg-primary badge-up cart-item-count">6</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <!-- Content of dropdown cart menu -->
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-notification me-25">
                <a class="nav-link" href="#" data-bs-toggle="dropdown">
                    <i class="ficon" data-feather="bell"></i>
                    <span class="badge rounded-pill bg-danger badge-up">5</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <!-- Content of dropdown notification menu -->
                </ul>
            </li>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">John Doe</span><span class="user-status">Admin</span>
                    </div>
                    <span class="avatar">
                        <img class="round" src="{{ asset('app-assets/images/portrait/small/avatar-s-11.jpg') }}"
                            alt="avatar" height="40" width="40">
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i>
                        Profile</a>
                    <a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i> Inbox</a>
                    <a class="dropdown-item" href="app-todo.html"><i class="me-50" data-feather="check-square"></i>
                        Task</a>
                    <a class="dropdown-item" href="app-chat.html"><i class="me-50" data-feather="message-square"></i>
                        Chats</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="page-account-settings.html"><i class="me-50"
                            data-feather="settings"></i> Settings</a>
                    <a class="dropdown-item" href="page-pricing.html"><i class="me-50" data-feather="credit-card"></i>
                        Pricing</a>
                    <a class="dropdown-item" href="page-faq.html"><i class="me-50" data-feather="help-circle"></i>
                        FAQ</a>
                    <a class="dropdown-item" href="{{route('logout')}}"><i class="me-50" data-feather="power"></i>
                        Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<ul class="main-search-list-defaultlist d-none">
    <!-- Content of search list -->
</ul>

<ul class="main-search-list-defaultlist-other-list d-none">
    <!-- Content of other search list -->
</ul>
{{-- Inicio do menu --}}
<header id="header"
    class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html" aria-label="Front">
            <img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo" src="assets/svg/logos-light/logo.svg" alt="Logo"
                data-hs-theme-appearance="dark">
            <img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.svg" alt="Logo"
                data-hs-theme-appearance="default">
            <img class="navbar-brand-logo-mini" src="assets/svg/logos-light/logo-short.svg" alt="Logo"
                data-hs-theme-appearance="dark">
        </a>
        <!-- End Logo -->

        <div class="navbar-nav-wrap-content-start">
            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            <!-- End Navbar Vertical Toggle -->

            <!-- Search Form -->
            <div class="dropdown ms-2">
                <!-- Input Group -->
                <div class="d-none d-lg-block">
                    <div
                        class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                        <div class="input-group-prepend input-group-text">
                            <i class="bi-search"></i>
                        </div>

                        <input type="search" class="js-form-search form-control" placeholder="Search in front"
                            aria-label="Search in front"
                            data-hs-form-search-options='{
                 "clearIcon": "#clearSearchResultsIcon",
                 "dropMenuElement": "#searchDropdownMenu",
                 "dropMenuOffset": 20,
                 "toggleIconOnFocus": true,
                 "activeClass": "focus"
               }'>
                        <a class="input-group-append input-group-text" href="javascript:;">
                            <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
                        </a>
                    </div>
                </div>

                <button
                    class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none"
                    type="button"
                    data-hs-form-search-options='{
                 "clearIcon": "#clearSearchResultsIcon",
                 "dropMenuElement": "#searchDropdownMenu",
                 "dropMenuOffset": 20,
                 "toggleIconOnFocus": true,
                 "activeClass": "focus"
               }'>
                    <i class="bi-search"></i>
                </button>
                <!-- End Input Group -->

                <!-- Card Search Content -->
                <div id="searchDropdownMenu"
                    class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
                    <div class="card">
                        <!-- Body -->
                        <div class="card-body-height">
                            <div class="d-lg-none">
                                <div class="input-group input-group-merge navbar-input-group mb-5">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-search"></i>
                                    </div>

                                    <input type="search" class="form-control" placeholder="Search in front"
                                        aria-label="Search in front">
                                    <a class="input-group-append input-group-text" href="javascript:;">
                                        <i class="bi-x-lg"></i>
                                    </a>
                                </div>
                            </div>

                            <span class="dropdown-header">Recent searches</span>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a class="btn btn-soft-dark btn-xs rounded-pill" href="index.html">
                                    Gulp <i class="bi-search ms-1"></i>
                                </a>
                                <a class="btn btn-soft-dark btn-xs rounded-pill" href="index.html">
                                    Notification panel <i class="bi-search ms-1"></i>
                                </a>
                            </div>

                            <div class="dropdown-divider"></div>

                            <span class="dropdown-header">Tutorials</span>

                            <a class="dropdown-item" href="index.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="icon icon-soft-dark icon-xs icon-circle">
                                            <i class="bi-sliders"></i>
                                        </span>
                                    </div>

                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <span>How to set up Gulp?</span>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item" href="index.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <span class="icon icon-soft-dark icon-xs icon-circle">
                                            <i class="bi-paint-bucket"></i>
                                        </span>
                                    </div>

                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <span>How to change theme color?</span>
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <span class="dropdown-header">Members</span>

                            <a class="dropdown-item" href="index.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img10.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip"
                                                data-placement="top" title="Top endorsed"></i></span>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item" href="index.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="avatar avatar-xs avatar-circle" src="assets/img/160x160/img3.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <span>David Harrison</span>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item" href="index.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                                            <span class="avatar-initials">A</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate ms-2">
                                        <span>Anne Richard</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Body -->

                        <!-- Footer -->
                        <a class="card-footer text-center" href="index.html">
                            See all results <i class="bi-chevron-right small"></i>
                        </a>
                        <!-- End Footer -->
                    </div>
                </div>
                <!-- End Card Search Content -->

            </div>

            <!-- End Search Form -->
        </div>

        <div class="navbar-nav-wrap-content-end">
            <!-- Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Notification -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                            id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-auto-close="outside" data-bs-dropdown-animation>
                            <i class="bi-bell"></i>
                            <span class="btn-status btn-sm-status btn-status-danger"></span>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                            <div class="card">
                                <!-- Header -->
                                <div class="card-header card-header-content-between">
                                    <h4 class="card-title mb-0">Notifications</h4>

                                    <!-- Unfold -->
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle"
                                            id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi-three-dots-vertical"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless"
                                            aria-labelledby="navbarNotificationsDropdownSettings">
                                            <span class="dropdown-header">Settings</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi-archive dropdown-item-icon"></i> Archive all
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi-gift dropdown-item-icon"></i> What's new?
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <span class="dropdown-header">Feedback</span>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Unfold -->
                                </div>
                                <!-- End Header -->

                                <!-- Nav -->
                                <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#notificationNavOne"
                                            id="notificationNavOne-tab" data-bs-toggle="tab"
                                            data-bs-target="#notificationNavOne" role="tab"
                                            aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab"
                                            data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab"
                                            aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                                    </li>
                                </ul>
                                <!-- End Nav -->

                                <!-- Body -->
                                <div class="card-body-height">
                                    <!-- Tab Content -->
                                    <div class="tab-content" id="notificationTabContent">
                                        <div class="tab-pane fade show active" id="notificationNavOne"
                                            role="tabpanel" aria-labelledby="notificationNavOne-tab">
                                            <!-- List Group -->
                                            <ul class="list-group list-group-flush navbar-card-list-group">
                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck1"
                                                                        checked>
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck1"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <img class="avatar avatar-sm avatar-circle"
                                                                    src="assets/img/160x160/img3.jpg"
                                                                    alt="Image Description">
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Brian Warner</h5>
                                                            <p class="text-body fs-5">changed an issue from "In
                                                                Progress" to <span
                                                                    class="badge bg-success">Review</span></p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">2hr</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck2"
                                                                        checked>
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck2"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div
                                                                    class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                                                    <span class="avatar-initials">K</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Klara Hampton</h5>
                                                            <p class="text-body fs-5">mentioned you in a comment</p>
                                                            <blockquote class="blockquote blockquote-sm">
                                                                Nice work, love! You really nailed it. Keep it up!
                                                            </blockquote>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">10hr</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck3"
                                                                        checked>
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck3"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div class="avatar avatar-sm avatar-circle">
                                                                    <img class="avatar-img"
                                                                        src="assets/img/160x160/img10.jpg"
                                                                        alt="Image Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Ruby Walter</h5>
                                                            <p class="text-body fs-5">joined the Slack group HS Team
                                                            </p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">3dy</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck4">
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck4"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div class="avatar avatar-sm avatar-circle">
                                                                    <img class="avatar-img"
                                                                        src="assets/svg/brands/google-icon.svg"
                                                                        alt="Image Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">from Google</h5>
                                                            <p class="text-body fs-5">Start using forms to capture the
                                                                information of prospects
                                                                visiting your Google website</p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">17dy</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck5">
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck5"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div class="avatar avatar-sm avatar-circle">
                                                                    <img class="avatar-img"
                                                                        src="assets/img/160x160/img7.jpg"
                                                                        alt="Image Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Sara Villar</h5>
                                                            <p class="text-body fs-5">completed <i
                                                                    class="bi-journal-bookmark-fill text-primary"></i>
                                                                FD-7 task</p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">2mn</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->
                                            </ul>
                                            <!-- End List Group -->
                                        </div>

                                        <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel"
                                            aria-labelledby="notificationNavTwo-tab">
                                            <!-- List Group -->
                                            <ul class="list-group list-group-flush navbar-card-list-group">
                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck6">
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck6"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div
                                                                    class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                                                    <span class="avatar-initials">A</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Anne Richard</h5>
                                                            <p class="text-body fs-5">accepted your invitation to join
                                                                Notion</p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">1dy</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck7">
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck7"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div class="avatar avatar-sm avatar-circle">
                                                                    <img class="avatar-img"
                                                                        src="assets/img/160x160/img5.jpg"
                                                                        alt="Image Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Finch Hoot</h5>
                                                            <p class="text-body fs-5">left Slack group HS projects</p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">1dy</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck8">
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck8"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div
                                                                    class="avatar avatar-sm avatar-dark avatar-circle">
                                                                    <span class="avatar-initials">HS</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Htmlstream</h5>
                                                            <p class="text-body fs-5">you earned a "Top endorsed" <i
                                                                    class="bi-patch-check-fill text-primary"></i> badge
                                                            </p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">6dy</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck9">
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck9"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div class="avatar avatar-sm avatar-circle">
                                                                    <img class="avatar-img"
                                                                        src="assets/img/160x160/img8.jpg"
                                                                        alt="Image Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Linda Bates</h5>
                                                            <p class="text-body fs-5">Accepted your connection</p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">17dy</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->

                                                <!-- Item -->
                                                <li class="list-group-item form-check-select">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="d-flex align-items-center">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="notificationCheck10">
                                                                    <label class="form-check-label"
                                                                        for="notificationCheck10"></label>
                                                                    <span class="form-check-stretched-bg"></span>
                                                                </div>
                                                                <div
                                                                    class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                                                    <span class="avatar-initials">L</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Col -->

                                                        <div class="col ms-n2">
                                                            <h5 class="mb-1">Lewis Clarke</h5>
                                                            <p class="text-body fs-5">completed <i
                                                                    class="bi-journal-bookmark-fill text-primary"></i>
                                                                FD-134 task</p>
                                                        </div>
                                                        <!-- End Col -->

                                                        <small class="col-auto text-muted text-cap">2mts</small>
                                                        <!-- End Col -->
                                                    </div>
                                                    <!-- End Row -->

                                                    <a class="stretched-link" href="#"></a>
                                                </li>
                                                <!-- End Item -->
                                            </ul>
                                            <!-- End List Group -->
                                        </div>
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                                <!-- End Body -->

                                <!-- Card Footer -->
                                <a class="card-footer text-center" href="#">
                                    View all notifications <i class="bi-chevron-right"></i>
                                </a>
                                <!-- End Card Footer -->
                            </div>
                        </div>
                    </div>
                    <!-- End Notification -->
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Apps -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle"
                            id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                            data-bs-dropdown-animation>
                            <i class="bi-app-indicator"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless"
                            aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                            <div class="card">
                                <!-- Header -->
                                <div class="card-header">
                                    <h4 class="card-title">Web apps &amp; services</h4>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body card-body-height">
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs avatar-4x3"
                                                    src="assets/svg/brands/atlassian-icon.svg"
                                                    alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-3">
                                                <h5 class="mb-0">Atlassian</h5>
                                                <p class="card-text text-body">Security and control across Cloud</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs avatar-4x3"
                                                    src="assets/svg/brands/slack-icon.svg" alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-3">
                                                <h5 class="mb-0">Slack <span
                                                        class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span>
                                                </h5>
                                                <p class="card-text text-body">Email collaboration software</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs avatar-4x3"
                                                    src="assets/svg/brands/google-webdev-icon.svg"
                                                    alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-3">
                                                <h5 class="mb-0">Google webdev</h5>
                                                <p class="card-text text-body">Work involved in developing a website
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs avatar-4x3"
                                                    src="assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-3">
                                                <h5 class="mb-0">Frontapp</h5>
                                                <p class="card-text text-body">The inbox for teams</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <img class="avatar avatar-xs avatar-4x3"
                                                    src="assets/svg/illustrations/review-rating-shield.svg"
                                                    alt="Image Description">
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-3">
                                                <h5 class="mb-0">HS Support</h5>
                                                <p class="card-text text-body">Customer service and support</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar avatar-sm avatar-soft-dark">
                                                    <span class="avatar-initials"><i class="bi-grid"></i></span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-3">
                                                <h5 class="mb-0">More Front products</h5>
                                                <p class="card-text text-body">Check out more HS products</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Body -->

                                <!-- Footer -->
                                <a class="card-footer text-center" href="#">
                                    View all apps <i class="bi-chevron-right"></i>
                                </a>
                                <!-- End Footer -->
                            </div>
                        </div>
                    </div>
                    <!-- End Apps -->
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Activity -->
                    <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream"
                        aria-controls="offcanvasActivityStream">
                        <i class="bi-x-diamond"></i>
                    </button>
                    <!-- Activity -->
                </li>

                <li class="nav-item">
                    <!-- Account -->
                    <div class="dropdown">
                        <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                            data-bs-dropdown-animation>
                            <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="assets/img/160x160/img6.jpg" alt="Image Description">
                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                            aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                            <div class="dropdown-item-text">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="assets/img/160x160/img6.jpg"
                                            alt="Image Description">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">Mark Williams</h5>
                                        <p class="card-text text-body">mark@site.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-divider"></div>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle"
                                    href="javascript:;" id="navSubmenuPagesAccountDropdown1"
                                    data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu"
                                    aria-labelledby="navSubmenuPagesAccountDropdown1">
                                    <a class="dropdown-item" href="#">
                                        <span class="legend-indicator bg-success me-1"></span> Available
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="legend-indicator bg-danger me-1"></span> Busy
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <span class="legend-indicator bg-warning me-1"></span> Away
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"> Reset status
                                    </a>
                                </div>
                            </div>
                            <!-- End Dropdown -->

                            <a class="dropdown-item" href="#">Profile &amp; account</a>
                            <a class="dropdown-item" href="#">Settings</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-sm avatar-dark avatar-circle">
                                            <span class="avatar-initials">HS</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="mb-0">Htmlstream <span
                                                class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span>
                                        </h5>
                                        <span class="card-text">hs.example.com</span>
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle"
                                    href="javascript:;" id="navSubmenuPagesAccountDropdown2"
                                    data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu"
                                    aria-labelledby="navSubmenuPagesAccountDropdown2">
                                    <a class="dropdown-item" href="#">
                                        Invite people
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Analytics
                                        <i class="bi-box-arrow-in-up-right"></i>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Customize Front
                                        <i class="bi-box-arrow-in-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- End Dropdown -->

                            <a class="dropdown-item" href="#">Manage team</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">Sign out</a>
                        </div>
                    </div>
                    <!-- End Account -->
                </li>
            </ul>
            <!-- End Navbar -->
        </div>
    </div>
</header>

<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<!-- Navbar Vertical -->

<aside
    class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
            <!-- Logo -->

            <a class="navbar-brand" href="index.html" aria-label="Front">
                <img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo"
                    data-hs-theme-appearance="default">
                <img class="navbar-brand-logo" src="assets/svg/logos-light/logo.svg" alt="Logo"
                    data-hs-theme-appearance="dark">
                <img class="navbar-brand-logo-mini" src="assets/svg/logos/logo-short.svg" alt="Logo"
                    data-hs-theme-appearance="default">
                <img class="navbar-brand-logo-mini" src="assets/svg/logos-light/logo-short.svg" alt="Logo"
                    data-hs-theme-appearance="dark">
            </a>

            <!-- End Logo -->

            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            <!-- End Navbar Vertical Toggle -->

            <!-- Content -->
            <div class="navbar-vertical-content">
                <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                    <!-- Collapse -->
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuDashboards" role="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards"
                            aria-expanded="false" aria-controls="navbarVerticalMenuDashboards">
                            <i class="bi-house-door nav-icon"></i>
                            <span class="nav-link-title">Dashboards</span>
                        </a>

                        <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse "
                            data-bs-parent="#navbarVerticalMenu">
                            <a class="nav-link " href="index.html">Default</a>
                            <a class="nav-link " href="dashboard-alternative.html">Alternative</a>
                        </div>
                    </div>
                    <!-- End Collapse -->

                    <span class="dropdown-header mt-4">Pages</span>
                    <small class="bi-three-dots nav-subtitle-replacer"></small>

                    <!-- Collapse -->
                    <div class="navbar-nav nav-compact">

                    </div>
                    <div id="navbarVerticalMenuPagesMenu">
                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUsersMenu"
                                role="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded="false"
                                aria-controls="navbarVerticalMenuPagesUsersMenu">
                                <i class="bi-people nav-icon"></i>
                                <span class="nav-link-title">Users</span>
                            </a>

                            <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse "
                                data-bs-parent="#navbarVerticalMenuPagesMenu">
                                <a class="nav-link " href="users.html">Overview</a>
                                <a class="nav-link " href="users-leaderboard.html">Leaderboard</a>
                                <a class="nav-link " href="users-add-user.html">Add User <span
                                        class="badge bg-info rounded-pill ms-1">Hot</span></a>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUserProfileMenu"
                                role="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarVerticalMenuPagesUserProfileMenu" aria-expanded="false"
                                aria-controls="navbarVerticalMenuPagesUserProfileMenu">
                                <i class="bi-person nav-icon"></i>
                                <span class="nav-link-title">User Profile <span
                                        class="badge bg-primary rounded-pill ms-1">5</span></span>
                            </a>

                            <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse "
                                data-bs-parent="#navbarVerticalMenuPagesMenu">
                                <a class="nav-link " href="user-profile.html">Profile</a>
                                <a class="nav-link " href="user-profile-teams.html">Teams</a>
                                <a class="nav-link " href="user-profile-projects.html">Projects</a>
                                <a class="nav-link " href="user-profile-connections.html">Connections</a>
                                <a class="nav-link " href="user-profile-my-profile.html">My Profile</a>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesAccountMenu"
                                role="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarVerticalMenuPagesAccountMenu" aria-expanded="false"
                                aria-controls="navbarVerticalMenuPagesAccountMenu">
                                <i class="bi-person-badge nav-icon"></i>
                                <span class="nav-link-title">Account</span>
                            </a>

                            <div id="navbarVerticalMenuPagesAccountMenu" class="nav-collapse collapse "
                                data-bs-parent="#navbarVerticalMenuPagesMenu">
                                <a class="nav-link " href="account-settings.html">Settings</a>
                                <a class="nav-link " href="account-billing.html">Billing</a>
                                <a class="nav-link " href="account-invoice.html">Invoice</a>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesEcommerceMenu"
                                role="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarVerticalMenuPagesEcommerceMenu" aria-expanded="false"
                                aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                                <i class="bi-basket nav-icon"></i>
                                <span class="nav-link-title">E-commerce</span>
                            </a>

                            <div id="navbarVerticalMenuPagesEcommerceMenu" class="nav-collapse collapse "
                                data-bs-parent="#navbarVerticalMenuPagesMenu">
                                <a class="nav-link " href="ecommerce.html">Overview</a>

                                <div id="navbarVerticalMenuPagesMenuEcommerce">
                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle"
                                            href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuPagesEcommerceProductsMenu">
                                            Products
                                        </a>

                                        <div id="navbarVerticalMenuPagesEcommerceProductsMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                                            <a class="nav-link " href="ecommerce-products.html">Products</a>
                                            <a class="nav-link " href="ecommerce-product-details.html">Product
                                                Details</a>
                                            <a class="nav-link " href="ecommerce-add-product.html">Add Product</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle"
                                            href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                                            Orders
                                        </a>

                                        <div id="navbarVerticalMenuPagesEcommerceOrdersMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                                            <a class="nav-link " href="ecommerce-orders.html">Orders</a>
                                            <a class="nav-link " href="ecommerce-order-details.html">Order Details</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle"
                                            href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                                            Customers
                                        </a>

                                        <div id="navbarVerticalMenuPagesEcommerceCustomersMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                                            <a class="nav-link " href="ecommerce-customers.html">Customers</a>
                                            <a class="nav-link " href="ecommerce-customer-details.html">Customer
                                                Details</a>
                                            <a class="nav-link " href="ecommerce-add-customers.html">Add Customers</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->
                                </div>

                                <a class="nav-link " href="ecommerce-referrals.html">Referrals</a>
                                <a class="nav-link " href="ecommerce-manage-reviews.html">Manage Reviews</a>
                                <a class="nav-link " href="ecommerce-checkout.html">Checkout</a>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectsMenu"
                                role="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarVerticalMenuPagesProjectsMenu" aria-expanded="false"
                                aria-controls="navbarVerticalMenuPagesProjectsMenu">
                                <i class="bi-stickies nav-icon"></i>
                                <span class="nav-link-title">Projects</span>
                            </a>

                            <div id="navbarVerticalMenuPagesProjectsMenu" class="nav-collapse collapse "
                                data-bs-parent="#navbarVerticalMenuPagesMenu">
                                <a class="nav-link " href="projects.html">Overview</a>
                                <a class="nav-link " href="projects-timeline.html">Timeline</a>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectMenu"
                                role="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarVerticalMenuPagesProjectMenu" aria-expanded="false"
                                aria-controls="navbarVerticalMenuPagesProjectMenu">
                                <i class="bi-briefcase nav-icon"></i>
                                <span class="nav-link-title">Project</span>
                            </a>

                            <div id="navbarVerticalMenuPagesProjectMenu" class="nav-collapse collapse "
                                data-bs-parent="#navbarVerticalMenuPagesMenu">
                                <a class="nav-link " href="project.html">Overview</a>
                                <a class="nav-link " href="project-files.html">Files</a>
                                <a class="nav-link " href="project-activity.html">Activity</a>
                                <a class="nav-link " href="project-teams.html">Teams</a>
                                <a class="nav-link " href="project-settings.html">Settings</a>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle  collapsed" href="#" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication"
                                aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication">
                                <i class="bi-shield-lock nav-icon"></i>
                                <span class="nav-link-title">Authentication</span>
                            </a>

                            <div id="navbarVerticalMenuAuthentication" class="nav-collapse collapse "
                                data-bs-parent="#navbarVerticalMenu">
                                <div id="navbarVerticalMenuAuthenticationMenu">
                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle "
                                            href="#navbarVerticalMenuAuthenticationLoginMenu" role="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuAuthenticationLoginMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuAuthenticationLoginMenu">
                                            Log In
                                        </a>

                                        <div id="navbarVerticalMenuAuthenticationLoginMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                                            <a class="nav-link " href="authentication-login-basic.html">Basic</a>
                                            <a class="nav-link " href="authentication-login-cover.html">Cover</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle "
                                            href="#navbarVerticalMenuAuthenticationSignupMenu" role="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuAuthenticationSignupMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuAuthenticationSignupMenu">
                                            Sign Up
                                        </a>

                                        <div id="navbarVerticalMenuAuthenticationSignupMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                                            <a class="nav-link " href="authentication-signup-basic.html">Basic</a>
                                            <a class="nav-link " href="authentication-signup-cover.html">Cover</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle "
                                            href="#navbarVerticalMenuAuthenticationResetPasswordMenu" role="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuAuthenticationResetPasswordMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuAuthenticationResetPasswordMenu">
                                            Reset Password
                                        </a>

                                        <div id="navbarVerticalMenuAuthenticationResetPasswordMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                                            <a class="nav-link "
                                                href="authentication-reset-password-basic.html">Basic</a>
                                            <a class="nav-link "
                                                href="authentication-reset-password-cover.html">Cover</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle "
                                            href="#navbarVerticalMenuAuthenticationEmailVerificationMenu"
                                            role="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuAuthenticationEmailVerificationMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuAuthenticationEmailVerificationMenu">
                                            Email Verification
                                        </a>

                                        <div id="navbarVerticalMenuAuthenticationEmailVerificationMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                                            <a class="nav-link "
                                                href="authentication-email-verification-basic.html">Basic</a>
                                            <a class="nav-link "
                                                href="authentication-email-verification-cover.html">Cover</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle "
                                            href="#navbarVerticalMenuAuthentication2StepVerificationMenu"
                                            role="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarVerticalMenuAuthentication2StepVerificationMenu"
                                            aria-expanded="false"
                                            aria-controls="navbarVerticalMenuAuthentication2StepVerificationMenu">
                                            2-step Verification
                                        </a>

                                        <div id="navbarVerticalMenuAuthentication2StepVerificationMenu"
                                            class="nav-collapse collapse "
                                            data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                                            <a class="nav-link "
                                                href="authentication-2-step-verification-basic.html">Basic</a>
                                            <a class="nav-link "
                                                href="authentication-2-step-verification-cover.html">Cover</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <a class="nav-link" href="javascript:;" data-bs-toggle="modal"
                                        data-bs-target="#welcomeMessageModal">Welcome Message</a>
                                    <a class="nav-link " href="error-404.html">Error 404</a>
                                    <a class="nav-link " href="error-500.html">Error 500</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <div class="nav-item">
                            <a class="nav-link active" href="api-keys.html" data-placement="left">
                                <i class="bi-key nav-icon"></i>
                                <span class="nav-link-title">API Keys</span>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link " href="welcome-page.html" data-placement="left">
                                <i class="bi-eye nav-icon"></i>
                                <span class="nav-link-title">Welcome Page</span>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link " href="landing.html" data-placement="left">
                                <i class="bi-box-seam nav-icon"></i>
                                <span class="nav-link-title">Landing Page <span
                                        class="badge bg-info rounded-pill ms-1">New</span></span>
                            </a>
                        </div>
                    </div>
                    <!-- End Collapse -->

                    <span class="dropdown-header mt-4">Apps</span>
                    <small class="bi-three-dots nav-subtitle-replacer"></small>

                    <div class="nav-item">
                        <a class="nav-link " href="apps-kanban.html" data-placement="left">
                            <i class="bi-kanban nav-icon"></i>
                            <span class="nav-link-title">Kanban</span>
                        </a>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link " href="apps-calendar.html" data-placement="left">
                            <i class="bi-calendar-week nav-icon"></i>
                            <span class="nav-link-title">Calendar</span>
                        </a>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link " href="apps-invoice-generator.html" data-placement="left">
                            <i class="bi-receipt nav-icon"></i>
                            <span class="nav-link-title">Invoice Generator</span>
                        </a>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link " href="apps-file-manager.html" data-placement="left">
                            <i class="bi-folder2-open nav-icon"></i>
                            <span class="nav-link-title">File Manager</span>
                        </a>
                    </div>

                    <span class="dropdown-header mt-4">Layouts</span>
                    <small class="bi-three-dots nav-subtitle-replacer"></small>

                    <div class="nav-item">
                        <a class="nav-link " href="layouts/index.html" data-placement="left">
                            <i class="bi-grid-1x2 nav-icon"></i>
                            <span class="nav-link-title">Layouts</span>
                        </a>
                    </div>

                    <span class="dropdown-header mt-4">Documentation</span>
                    <small class="bi-three-dots nav-subtitle-replacer"></small>

                    <div class="nav-item">
                        <a class="nav-link " href="documentation/index.html" data-placement="left">
                            <i class="bi-book nav-icon"></i>
                            <span class="nav-link-title">Documentation <span
                                    class="badge bg-primary rounded-pill ms-1">v2.1.1</span></span>
                        </a>
                    </div>

                    <div class="nav-item">
                        <a class="nav-link " href="documentation/typography.html" data-placement="left">
                            <i class="bi-layers nav-icon"></i>
                            <span class="nav-link-title">Components</span>
                        </a>
                    </div>
                </div>

            </div>
            <!-- End Content -->

            <!-- Footer -->
            <div class="navbar-vertical-footer">
                <ul class="navbar-vertical-footer-list">
                    <li class="navbar-vertical-footer-list-item">
                        <!-- Style Switcher -->
                        <div class="dropdown dropup">
                            <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-dropdown-animation>

                            </button>

                            <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless"
                                aria-labelledby="selectThemeDropdown">
                                <a class="dropdown-item" href="#" data-icon="bi-moon-stars"
                                    data-value="auto">
                                    <i class="bi-moon-stars me-2"></i>
                                    <span class="text-truncate" title="Auto (system default)">Auto (system
                                        default)</span>
                                </a>
                                <a class="dropdown-item" href="#" data-icon="bi-brightness-high"
                                    data-value="default">
                                    <i class="bi-brightness-high me-2"></i>
                                    <span class="text-truncate" title="Default (light mode)">Default (light
                                        mode)</span>
                                </a>
                                <a class="dropdown-item active" href="#" data-icon="bi-moon"
                                    data-value="dark">
                                    <i class="bi-moon me-2"></i>
                                    <span class="text-truncate" title="Dark">Dark</span>
                                </a>
                            </div>
                        </div>

                        <!-- End Style Switcher -->
                    </li>

                    <li class="navbar-vertical-footer-list-item">
                        <!-- Other Links -->
                        <div class="dropdown dropup">
                            <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-dropdown-animation>
                                <i class="bi-info-circle"></i>
                            </button>

                            <div class="dropdown-menu navbar-dropdown-menu-borderless"
                                aria-labelledby="otherLinksDropdown">
                                <span class="dropdown-header">Help</span>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-journals dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp;
                                        tutorials</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-command dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-alt dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-gift dropdown-item-icon"></i>
                                    <span class="text-truncate" title="What's new?">What's new?</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-header">Contacts</span>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-chat-left-dots dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Contact support">Contact support</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Other Links -->
                    </li>

                    <li class="navbar-vertical-footer-list-item">
                        <!-- Language -->
                        <div class="dropdown dropup">
                            <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-dropdown-animation>
                                <img class="avatar avatar-xss avatar-circle"
                                    src="assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                            </button>

                            <div class="dropdown-menu navbar-dropdown-menu-borderless"
                                aria-labelledby="selectLanguageDropdown">
                                <span class="dropdown-header">Select language</span>
                                <a class="dropdown-item" href="#">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                                    <span class="text-truncate" title="English">English (US)</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                                    <span class="text-truncate" title="English">English (UK)</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                                    <span class="text-truncate" title="Deutsch">Deutsch</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                                    <span class="text-truncate" title="Dansk">Dansk</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                                    <span class="text-truncate" title="Italiano">Italiano</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <img class="avatar avatar-xss avatar-circle me-2"
                                        src="assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                                    <span class="text-truncate" title="中文 (繁體)">中文 (繁體)</span>
                                </a>
                            </div>
                        </div>

                        <!-- End Language -->
                    </li>
                </ul>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</aside>


<main id="content" role="main" class="main">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a>
                            </li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Account</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">API Keys</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">API Keys</h1>
                </div>
                <!-- End Col -->

                <div class="col-sm-auto">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#createAKIKeyModal">
                        <i class="bi-plus me-1"></i> Create key
                    </button>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <small class="text-cap">Projects</small>
                        <span class="js-counter d-block display-3 text-dark mb-2">150</span>

                        <div class="row col-divider">
                            <div class="col text-end">
                                <span class="d-block fw-semibold text-success">
                                    <i class="bi-graph-up"></i> 12%
                                </span>
                                <span class="d-block">change</span>
                            </div>

                            <div class="col text-start">
                                <span class="d-block fw-semibold text-dark">5</span>
                                <span class="d-block">last week</span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-md-6 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <small class="text-cap"><span class="legend-indicator bg-success"></span> Successful
                            conversions</small>
                        <span class="js-counter d-block display-3 text-dark mb-2">25</span>

                        <div class="row col-divider">
                            <div class="col text-end">
                                <span class="d-block fw-semibold text-success">
                                    <i class="bi-graph-up"></i> 5.6%
                                </span>
                                <span class="d-block">change</span>
                            </div>

                            <div class="col text-start">
                                <span class="d-block fw-semibold text-dark">7</span>
                                <span class="d-block">last week</span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-md-6 col-lg-4 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card">
                    <div class="card-body text-center">
                        <small class="text-cap"><span class="legend-indicator bg-danger"></span> Failed
                            conversions</small>
                        <span class="js-counter d-block display-3 text-dark mb-2">4</span>

                        <div class="row col-divider">
                            <div class="col text-end">
                                <span class="d-block fw-semibold text-danger">
                                    <i class="bi-graph-down"></i> 2.3%
                                </span>
                                <span class="d-block">change</span>
                            </div>

                            <div class="col text-start">
                                <span class="d-block fw-semibold text-dark">1</span>
                                <span class="d-block">last week</span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
                <div class="mb-2 mb-sm-0">
                    <h4 class="card-header-title">API Keys</h4>
                    <p class="card-text fs-5">Keys you have generated to connect with third-party clients or access
                        the <a class="link" href="#">Front API.</a></p>
                </div>

                <div class="d-grid d-sm-flex justify-content-sm-between align-items-sm-center gap-2">
                    <!-- Datatable Info -->
                    <div id="datatableCounterInfo" style="display: none;">
                        <div class="d-flex align-items-center">
                            <span class="fs-6 me-3">
                                <span id="datatableCounter">0</span>
                                Selected
                            </span>
                            <a class="btn btn-outline-danger btn-sm" href="javascript:;"><i class="bi-trash"></i>
                                Delete</a>
                        </div>
                    </div>
                    <!-- End Datatable Info -->

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100"
                            id="usersExportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-download me-2"></i> Export
                        </button>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="usersExportDropdown">
                            <span class="dropdown-header">Select option:</span>
                            <a id="export-copy" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="assets/svg/illustrations/copy-icon.svg" alt="Image Description">
                                Copy
                            </a>
                            <a id="export-print" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="assets/svg/illustrations/print-icon.svg" alt="Image Description">
                                Print
                            </a>
                            <div class="dropdown-divider"></div>
                            <span class="dropdown-header">Download options</span>
                            <a id="export-excel" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="assets/svg/brands/excel-icon.svg" alt="Image Description">
                                Excel
                            </a>
                            <a id="export-csv" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2"
                                    src="assets/svg/components/placeholder-csv-format.svg" alt="Image Description">
                                .CSV
                            </a>
                            <a id="export-pdf" class="dropdown-item" href="javascript:;">
                                <img class="avatar avatar-xss avatar-4x3 me-2" src="assets/svg/brands/pdf-icon.svg"
                                    alt="Image Description">
                                PDF
                            </a>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                 "columnDefs": [{
                    "targets": [0, 1, 2, 3, 6],
                    "orderable": false
                  }],
                 "order": [],
                 "info": {
                   "totalQty": "#datatableWithPaginationInfoTotalQty"
                 },
                 "search": "#datatableSearch",
                 "entries": "#datatableEntries",
                 "pageLength": 6,
                 "isResponsive": false,
                 "isShowPaging": false,
                 "pagination": "datatablePagination"
               }'>
                    <thead class="thead-light">
                        <tr>
                            <th class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="datatableCheckAll">
                                    <label class="form-check-label" for="datatableCheckAll"></label>
                                </div>
                            </th>
                            <th class="table-column-ps-0">Name</th>
                            <th>Created by</th>
                            <th>API Key</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="apiKeyCheck1">
                                    <label class="form-check-label" for="apiKeyCheck1"></label>
                                </div>
                            </td>
                            <td class="table-column-ps-0">Streamlab</td>
                            <td>
                                <a class="d-flex align-items-center text-dark" href="#">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-circle">
                                            <img class="avatar-img" src="assets/img/160x160/img9.jpg"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="text-inherit">Christina Bersh</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="input-group input-group-sm input-group-merge table-input-group">
                                    <input id="apiKeyCode1" type="text" class="form-control" readonly
                                        value="GFKBH23BR2H3R29HO2N3">
                                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;"
                                        data-bs-toggle="tooltip" title="Copy to clipboard"
                                        data-hs-clipboard-options='{
                      "type": "tooltip",
                      "successText": "Copied!",
                      "contentTarget": "#apiKeyCode1",
                      "classChangeTarget": "#apiKeyCodeIcon1",
                      "defaultClass": "bi-clipboard",
                      "successClass": "bi-check"
                     }'>
                                        <i id="apiKeyCodeIcon1" class="bi-clipboard"></i>
                                    </a>
                                </div>
                            </td>
                            <td><span class="legend-indicator bg-success"></span> Successful</td>
                            <td>March 11, 2020</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-white btn-sm" id="apiKeyDropdown1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="bi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="apiKeyDropdown1">
                                        <a class="dropdown-item" href="#">Rename</a>
                                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#createAKIKeyModal">Regenerate Key</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="apiKeyCheck2">
                                    <label class="form-check-label" for="apiKeyCheck2"></label>
                                </div>
                            </td>
                            <td class="table-column-ps-0">Node</td>
                            <td>
                                <a class="d-flex align-items-center text-dark" href="#">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-circle">
                                            <img class="avatar-img" src="assets/img/160x160/img7.jpg"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="text-inherit">David Harrison</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="input-group input-group-sm input-group-merge table-input-group">
                                    <input id="apiKeyCode2" type="text" class="form-control" readonly
                                        value="FIN2Y98NE0XH1N39X1N8F">
                                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;"
                                        data-bs-toggle="tooltip" title="Copy to clipboard"
                                        data-hs-clipboard-options='{
                      "type": "tooltip",
                      "successText": "Copied!",
                      "contentTarget": "#apiKeyCode2",
                      "classChangeTarget": "#apiKeyCodeIcon2",
                      "defaultClass": "bi-clipboard",
                      "successClass": "bi-check"
                     }'>
                                        <i id="apiKeyCodeIcon2" class="bi-clipboard"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <span class="legend-indicator bg-warning"></span> Warning
                                <i class="tio-info-outlined bi-sm ms-1"></i>
                            </td>
                            <td>January 07, 2020</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-white btn-sm" id="apiKeyDropdown2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="bi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="apiKeyDropdown2">
                                        <a class="dropdown-item" href="#">Rename</a>
                                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#createAKIKeyModal">Regenerate Key</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="apiKeyCheck3">
                                    <label class="form-check-label" for="apiKeyCheck3"></label>
                                </div>
                            </td>
                            <td class="table-column-ps-0">FrontMail</td>
                            <td>
                                <a class="d-flex align-items-center text-dark" href="#">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-soft-primary avatar-circle">
                                            <span class="avatar-initials">A</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="text-inherit">Anne Richard</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="input-group input-group-sm input-group-merge table-input-group">
                                    <input id="apiKeyCode3" type="text" class="form-control" readonly
                                        value="X291ZNO1Z29BE12YZ1Z12">
                                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;"
                                        data-bs-toggle="tooltip" title="Copy to clipboard"
                                        data-hs-clipboard-options='{
                      "type": "tooltip",
                      "successText": "Copied!",
                      "contentTarget": "#apiKeyCode3",
                      "classChangeTarget": "#apiKeyCodeIcon3",
                      "defaultClass": "bi-clipboard",
                      "successClass": "bi-check"
                     }'>
                                        <i id="apiKeyCodeIcon3" class="bi-clipboard"></i>
                                    </a>
                                </div>
                            </td>
                            <td><span class="legend-indicator bg-success"></span> Successful</td>
                            <td>February 20, 2020</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-white btn-sm" id="apiKeyDropdown3"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="bi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="apiKeyDropdown3">
                                        <a class="dropdown-item" href="#">Rename</a>
                                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#createAKIKeyModal">Regenerate Key</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="apiKeyCheck4">
                                    <label class="form-check-label" for="apiKeyCheck4"></label>
                                </div>
                            </td>
                            <td class="table-column-ps-0">MobileAPI</td>
                            <td>
                                <a class="d-flex align-items-center text-dark" href="#">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-circle">
                                            <img class="avatar-img" src="assets/img/160x160/img4.jpg"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="text-inherit">Sam Kart</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="input-group input-group-sm input-group-merge table-input-group">
                                    <input id="apiKeyCode4" type="text" class="form-control" readonly
                                        value="2N08C523X192YX1B231912">
                                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;"
                                        data-bs-toggle="tooltip" title="Copy to clipboard"
                                        data-hs-clipboard-options='{
                      "type": "tooltip",
                      "successText": "Copied!",
                      "contentTarget": "#apiKeyCode4",
                      "classChangeTarget": "#apiKeyCodeIcon4",
                      "defaultClass": "bi-clipboard",
                      "successClass": "bi-check"
                     }'>
                                        <i id="apiKeyCodeIcon4" class="bi-clipboard"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <span class="legend-indicator bg-danger"></span> Failed
                                <i class="tio-info-outlined bi-sm ms-1"></i>
                            </td>
                            <td>October 29, 2019</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-white btn-sm" id="apiKeyDropdown4"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="bi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="apiKeyDropdown4">
                                        <a class="dropdown-item" href="#">Rename</a>
                                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#createAKIKeyModal">Regenerate Key</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="apiKeyCheck5">
                                    <label class="form-check-label" for="apiKeyCheck5"></label>
                                </div>
                            </td>
                            <td class="table-column-ps-0">RachelsKey</td>
                            <td>
                                <a class="d-flex align-items-center text-dark" href="#">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-soft-dark avatar-circle">
                                            <span class="avatar-initials">R</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="text-inherit">Rachel Doe</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="input-group input-group-sm input-group-merge table-input-group">
                                    <input id="apiKeyCode5" type="text" class="form-control" readonly
                                        value="GANA9ASD2XN931AFDQUI1">
                                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;"
                                        data-bs-toggle="tooltip" title="Copy to clipboard"
                                        data-hs-clipboard-options='{
                      "type": "tooltip",
                      "successText": "Copied!",
                      "contentTarget": "#apiKeyCode5",
                      "classChangeTarget": "#apiKeyCodeIcon5",
                      "defaultClass": "bi-clipboard",
                      "successClass": "bi-check"
                     }'>
                                        <i id="apiKeyCodeIcon5" class="bi-clipboard"></i>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <span class="legend-indicator bg-danger"></span> Failed
                                <i class="tio-info-outlined bi-sm ms-1"></i>
                            </td>
                            <td>June 01, 2019</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-white btn-sm" id="apiKeyDropdown5"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="bi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="apiKeyDropdown5">
                                        <a class="dropdown-item" href="#">Rename</a>
                                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#createAKIKeyModal">Regenerate Key</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column-pe-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="apiKeyCheck6">
                                    <label class="form-check-label" for="apiKeyCheck6"></label>
                                </div>
                            </td>
                            <td class="table-column-ps-0">Gulp</td>
                            <td>
                                <a class="d-flex align-items-center text-dark" href="#">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs avatar-soft-danger avatar-circle">
                                            <span class="avatar-initials">B</span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="text-inherit">Brian Halligan</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <div class="input-group input-group-sm input-group-merge table-input-group">
                                    <input id="apiKeyCode6" type="text" class="form-control" readonly
                                        value="LO2H1278EDBK12D12I127G">
                                    <a class="js-clipboard input-group-append input-group-text" href="javascript:;"
                                        data-bs-toggle="tooltip" title="Copy to clipboard"
                                        data-hs-clipboard-options='{
                      "type": "tooltip",
                      "successText": "Copied!",
                      "contentTarget": "#apiKeyCode6",
                      "classChangeTarget": "#apiKeyCodeIcon6",
                      "defaultClass": "bi-clipboard",
                      "successClass": "bi-check"
                     }'>
                                        <i id="apiKeyCodeIcon6" class="bi-clipboard"></i>
                                    </a>
                                </div>
                            </td>
                            <td><span class="legend-indicator bg-success"></span> Successful</td>
                            <td>May 15, 2019</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-white btn-sm" id="apiKeyDropdown6"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        More <i class="bi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="apiKeyDropdown6">
                                        <a class="dropdown-item" href="#">Rename</a>
                                        <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal"
                                            data-bs-target="#createAKIKeyModal">Regenerate Key</a>
                                        <a class="dropdown-item" href="#">Disable</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="me-2">Showing:</span>

                            <!-- Select -->
                            <div class="tom-select-custom">
                                <select id="datatableEntries"
                                    class="js-select form-select form-select-borderless w-auto" autocomplete="off"
                                    data-hs-tom-select-options='{
                          "searchInDropdown": false,
                          "hideSearch": true
                        }'>
                                    <option value="4">4</option>
                                    <option value="6" selected>6</option>
                                    <option value="8" disabled>8</option>
                                    <option value="12" disabled>12</option>
                                </select>
                            </div>
                            <!-- End Select -->

                            <span class="text-secondary me-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End Content -->
</main>

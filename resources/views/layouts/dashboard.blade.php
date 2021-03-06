<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- <meta name="csrf-token" content="L03BpgD0RBX3ETwtMcnq4QSeQflFqxLj4jHTqufs"> -->
    @csrf
    <link rel="icon" href="https://thememakker.com/templates/oreo/hospital/laravel/public/favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <title>Dashboard - Salus Trust</title>
    <meta name="description" content="Oero Laravel">
    <meta name="author" content="Salus Trust">

    <link rel="stylesheet" href="/back/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/back/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="/back/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="/back/css/main.css">
    <link rel="stylesheet" href="/back/css/color_skins.css">
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="https://thememakker.com/templates/oreo/hospital/laravel/public/assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <nav class="navbar p-l-5 p-r-5">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="index.html"><img src="https://thememakker.com/templates/oreo/hospital/laravel/public/assets/images/logo.svg" width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
                </div>
            </li>
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li class="d-none d-lg-inline-block"><a href="https://thememakker.com/templates/oreo/hospital/laravel/public/doctor/events" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
            <li class="d-none d-lg-inline-block"><a href="https://thememakker.com/templates/oreo/hospital/laravel/public/app/inbox" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
            <li><a href="https://thememakker.com/templates/oreo/hospital/laravel/public/app/contact-list" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
                <ul class="dropdown-menu pullDown">
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="/back/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <span class="time">30min ago</span></span>
                                            <span class="message">There are many variations of passages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="/back/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <span class="time">31min ago</span></span>
                                            <span class="message">There are many variations of passages of Lorem Ipsum</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="/back/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Isabella <span class="time">35min ago</span></span>
                                            <span class="message">There are many variations of passages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="/back/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander <span class="time">35min ago</span></span>
                                            <span class="message">Contrary to popular belief, Lorem Ipsum random</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object" src="/back/images/xs/avatar6.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Grayson <span class="time">1hr ago</span></span>
                                            <span class="message">There are many variations of passages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
                </ul>
            </li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
            <div class="notify">
                <span class="heartbit"></span>
                <span class="point"></span>
            </div>
            </a>
                <ul class="dropdown-menu pullDown">
                    <li class="header">Project</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="progress-container progress-primary">
                                        <span class="progress-badge">Neurology</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li>
                                                <img src="/back/images/xs/avatar2.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar3.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar4.jpg" alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="progress-container progress-info">
                                        <span class="progress-badge">Gynecology</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                <span class="progress-value">45%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li>
                                                <img src="/back/images/xs/avatar10.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar9.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar8.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar7.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar6.jpg" alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="progress-container progress-warning">
                                        <span class="progress-badge">Cardio Monitoring</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                                <span class="progress-value">29%</span>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled team-info">
                                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                                            <li>
                                                <img src="/back/images/xs/avatar5.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar2.jpg" alt="Avatar">
                                            </li>
                                            <li>
                                                <img src="/back/images/xs/avatar7.jpg" alt="Avatar">
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="javascript:void(0);">View All</a></li>
                </ul>
            </li>
            <li class="d-none d-md-inline-block">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
                </div>
            </li>
            <li class="float-right">
                <a href="https://thememakker.com/templates/oreo/hospital/laravel/public/authentication/login" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
                <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            </li>
        </ul>
    </nav>

    @yield('content')

</body>

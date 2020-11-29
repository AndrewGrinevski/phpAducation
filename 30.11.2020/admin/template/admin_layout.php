<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>themelock.com - Chain Responsive Bootstrap3 Admin</title>

    <link href="/admin_assets/template/css/style.default.css" rel="stylesheet">
    <link href="/admin_assets/template/css/morris.css" rel="stylesheet">
    <link href="/admin_assets/template/css/select2.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/admin_assets/template/js/html5shiv.js"></script>
    <script src="/admin_assets/template/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<header>
    <div class="headerwrapper">
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="/admin_assets/template/images/logo.png" alt=""/>
            </a>
            <div class="pull-right">
                <a href="" class="menu-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div><!-- header-left -->

        <div class="header-right">

            <div class="pull-right">

                <form class="form form-search" action="search-results.html">
                    <input type="search" class="form-control" placeholder="Search"/>
                </form>

                <div class="btn-group btn-group-list btn-group-notification">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge">5</span>
                    </button>
                    <div class="dropdown-menu pull-right">
                        <a href="" class="link-right"><i class="fa fa-search"></i></a>
                        <h5>Notification</h5>
                        <ul class="media-list dropdown-list">
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user1.png" alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong> likes a photo of you
                                    <small class="date"><i class="fa fa-thumbs-up"></i> 15 minutes ago</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user2.png" alt="">
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 04, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user3.png" alt="">
                                <div class="media-body">
                                    <strong>Venro Leonga</strong> likes a photo of you
                                    <small class="date"><i class="fa fa-thumbs-up"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user4.png" alt="">
                                <div class="media-body">
                                    <strong>Nanterey Reslaba</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user1.png" alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong> shared a photo of you in your <strong>Mobile
                                        Uploads</strong> album.
                                    <small class="date"><i class="fa fa-calendar"></i> July 02, 2014</small>
                                </div>
                            </li>
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="" class="link">See All Notifications</a>
                        </div>
                    </div><!-- dropdown-menu -->
                </div><!-- btn-group -->

                <div class="btn-group btn-group-list btn-group-messages">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge">2</span>
                    </button>
                    <div class="dropdown-menu pull-right">
                        <a href="" class="link-right"><i class="fa fa-plus"></i></a>
                        <h5>New Messages</h5>
                        <ul class="media-list dropdown-list">
                            <li class="media">
                                <span class="badge badge-success">New</span>
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user1.png" alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <p>Hi! How are you?...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> 15 minutes ago</small>
                                </div>
                            </li>
                            <li class="media">
                                <span class="badge badge-success">New</span>
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user2.png" alt="">
                                <div class="media-body">
                                    <strong>Weno Carasbong</strong>
                                    <p>Lorem ipsum dolor sit amet...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 04, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user3.png" alt="">
                                <div class="media-body">
                                    <strong>Venro Leonga</strong>
                                    <p>Do you have the time to listen to me...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user4.png" alt="">
                                <div class="media-body">
                                    <strong>Nanterey Reslaba</strong>
                                    <p>It might seem crazy what I'm about to say...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 03, 2014</small>
                                </div>
                            </li>
                            <li class="media">
                                <img class="img-circle pull-left noti-thumb"
                                     src="/admin_assets/template/images/photos/user1.png" alt="">
                                <div class="media-body">
                                    <strong>Nusja Nawancali</strong>
                                    <p>Hey I just met you and this is crazy...</p>
                                    <small class="date"><i class="fa fa-clock-o"></i> July 02, 2014</small>
                                </div>
                            </li>
                        </ul>
                        <div class="dropdown-footer text-center">
                            <a href="" class="link">See All Messages</a>
                        </div>
                    </div><!-- dropdown-menu -->
                </div><!-- btn-group -->

                <div class="btn-group btn-group-option">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Activity Log</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                    </ul>
                </div><!-- btn-group -->

            </div><!-- pull-right -->

        </div><!-- header-right -->

    </div><!-- headerwrapper -->
</header>

<section>
    <div class="mainwrapper">
        <div class="leftpanel">
            <div class="media profile-left">
                <a class="pull-left profile-thumb" href="profile.html">
                    <img class="img-circle" src="/admin_assets/template/images/photos/profile.png" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Andrew Grinewski</h4>
                    <small class="text-muted">Admin</small>
                </div>
            </div><!-- media -->

            <h5 class="leftpanel-title">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/admin/?action=dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </li>

                <li class="parent"><a href="/admin/?action=add_page"><i class="fa fa-edit"></i> <span>Forms</span></a>
                    <ul class="children">
                        <li><a href="/admin/?action=add_page">Add page</a></li>
                        <li><a href="/admin/?action=list_page">List page</a></li>
                        <li><a href="/admin/?action=edit_page">Edit page(
                                in project)</a></li>
                        <li><a href="/admin/?action=delete_page">Delete page (
                                in project)</a></li>
                    </ul>
                </li>

            </ul>

        </div><!-- leftpanel -->

        <?php require_once $fullPath ?>

    </div><!-- mainwrapper -->

</section>


<script src="/admin_assets/template/js/jquery-1.11.1.min.js"></script>
<script src="/admin_assets/template/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/admin_assets/template/js/bootstrap.min.js"></script>
<script src="/admin_assets/template/js/modernizr.min.js"></script>
<script src="/admin_assets/template/js/pace.min.js"></script>
<script src="/admin_assets/template/js/retina.min.js"></script>
<script src="/admin_assets/template/js/jquery.cookies.js"></script>

<script src="/admin_assets/template/js/flot/jquery.flot.min.js"></script>
<script src="/admin_assets/template/js/flot/jquery.flot.resize.min.js"></script>
<script src="/admin_assets/template/js/flot/jquery.flot.spline.min.js"></script>
<script src="/admin_assets/template/js/jquery.sparkline.min.js"></script>
<script src="/admin_assets/template/js/morris.min.js"></script>
<script src="/admin_assets/template/js/raphael-2.1.0.min.js"></script>
<script src="/admin_assets/template/js/bootstrap-wizard.min.js"></script>
<script src="/admin_assets/template/js/select2.min.js"></script>

<script src="/admin_assets/template/js/custom.js"></script>
<script src="/admin_assets/template/js/dashboard.js"></script>

</body>
</html>

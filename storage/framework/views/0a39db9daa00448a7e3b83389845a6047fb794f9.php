<html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8"/>
    <title>Mosaned | Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/uniform/css/uniform.default.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="<?php echo e(asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/morris/morris.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/fullcalendar/fullcalendar.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo e(asset('assets/global/css/components.min.css')); ?>" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="<?php echo e(asset('assets/global/css/plugins.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo e(asset('assets/layouts/layout4/css/layout.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/layouts/layout4/css/themes/light.min.css')); ?>" rel="stylesheet" type="text/css"
          id="style_color"/>
    <link href="<?php echo e(asset('assets/layouts/layout4/css/custom.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/bootstrap-toastr/toastr.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')); ?>"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')); ?>"
          rel="stylesheet" type="text/css"/>

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="index.html">
                <img src="" alt="logo" class="logo-default"/> </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions">
            <?php /*<div class="btn-group">*/ ?>
            <?php /*<button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
            <?php /*<span class="hidden-sm hidden-xs">Actions&nbsp;</span>*/ ?>
            <?php /*<i class="fa fa-angle-down"></i>*/ ?>
            <?php /*</button>*/ ?>
            <?php /*<ul class="dropdown-menu" role="menu">*/ ?>
            <?php /*<li>*/ ?>
            <?php /*<a href="javascript:;">*/ ?>
            <?php /*<i class="icon-docs"></i> New Post </a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li>*/ ?>
            <?php /*<a href="javascript:;">*/ ?>
            <?php /*<i class="icon-tag"></i> New Comment </a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li>*/ ?>
            <?php /*<a href="javascript:;">*/ ?>
            <?php /*<i class="icon-share"></i> Share </a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li class="divider"> </li>*/ ?>
            <?php /*<li>*/ ?>
            <?php /*<a href="javascript:;">*/ ?>
            <?php /*<i class="icon-flag"></i> Comments*/ ?>
            <?php /*<span class="badge badge-success">4</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*<li>*/ ?>
            <?php /*<a href="javascript:;">*/ ?>
            <?php /*<i class="icon-users"></i> Feedbacks*/ ?>
            <?php /*<span class="badge badge-danger">2</span>*/ ?>
            <?php /*</a>*/ ?>
            <?php /*</li>*/ ?>
            <?php /*</ul>*/ ?>
            <?php /*</div>*/ ?>
        </div>
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->
            <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
        <?php /*<form class="search-form" action="page_general_search_2.html" method="GET">*/ ?>
        <?php /*<div class="input-group">*/ ?>
        <?php /*<input type="text" class="form-control input-sm" placeholder="Search..." name="query">*/ ?>
        <?php /*<span class="input-group-btn">*/ ?>
        <?php /*<a href="javascript:;" class="btn submit">*/ ?>
        <?php /*<i class="icon-magnifier"></i>*/ ?>
        <?php /*</a>*/ ?>
        <?php /*</span>*/ ?>
        <?php /*</div>*/ ?>
        <?php /*</form>*/ ?>
        <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <?php /*<li class="dropdown dropdown-extended dropdown-notification dropdown-dark"*/ ?>
                <?php /*id="header_notification_bar">*/ ?>
                <?php /*<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"*/ ?>
                <?php /*data-close-others="true">*/ ?>
                <?php /*<i class="icon-bell"></i>*/ ?>
                <?php /*<span class="badge badge-success"> 7 </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*<ul class="dropdown-menu">*/ ?>
                <?php /*<li class="external">*/ ?>
                <?php /*<h3>*/ ?>
                <?php /*<span class="bold">12 pending</span> notifications</h3>*/ ?>
                <?php /*<a href="page_user_profile_1.html">view all</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<ul class="dropdown-menu-list scroller" style="height: 250px;"*/ ?>
                <?php /*data-handle-color="#637283">*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">just now</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-success">*/ ?>
                <?php /*<i class="fa fa-plus"></i>*/ ?>
                <?php /*</span> New user registered. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">3 mins</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-danger">*/ ?>
                <?php /*<i class="fa fa-bolt"></i>*/ ?>
                <?php /*</span> Server #12 overloaded. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">10 mins</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-warning">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</span> Server #2 not responding. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">14 hrs</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</span> Application error. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">2 days</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-danger">*/ ?>
                <?php /*<i class="fa fa-bolt"></i>*/ ?>
                <?php /*</span> Database overloaded 68%. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">3 days</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-danger">*/ ?>
                <?php /*<i class="fa fa-bolt"></i>*/ ?>
                <?php /*</span> A user IP blocked. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">4 days</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-warning">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</span> Storage Server #4 not responding dfdfdfd. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">5 days</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</span> System Error. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="time">9 days</span>*/ ?>
                <?php /*<span class="details">*/ ?>
                <?php /*<span class="label label-sm label-icon label-danger">*/ ?>
                <?php /*<i class="fa fa-bolt"></i>*/ ?>
                <?php /*</span> Storage server failed. </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <!-- END NOTIFICATION DROPDOWN -->
                    <li class="separator hide"></li>
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <?php /*<li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">*/ ?>
                <?php /*<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"*/ ?>
                <?php /*data-close-others="true">*/ ?>
                <?php /*<i class="icon-envelope-open"></i>*/ ?>
                <?php /*<span class="badge badge-danger"> 4 </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*<ul class="dropdown-menu">*/ ?>
                <?php /*<li class="external">*/ ?>
                <?php /*<h3>You have*/ ?>
                <?php /*<span class="bold">7 New</span> Messages</h3>*/ ?>
                <?php /*<a href="app_inbox.html">view all</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<ul class="dropdown-menu-list scroller" style="height: 275px;"*/ ?>
                <?php /*data-handle-color="#637283">*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="#">*/ ?>
                <?php /*<span class="photo">*/ ?>
                <?php /*<img src="../assets/layouts/layout3/img/avatar2.jpg"*/ ?>
                <?php /*class="img-circle" alt=""> </span>*/ ?>
                <?php /*<span class="subject">*/ ?>
                <?php /*<span class="from"> Lisa Wong </span>*/ ?>
                <?php /*<span class="time">Just Now </span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="#">*/ ?>
                <?php /*<span class="photo">*/ ?>
                <?php /*<img src="../assets/layouts/layout3/img/avatar3.jpg"*/ ?>
                <?php /*class="img-circle" alt=""> </span>*/ ?>
                <?php /*<span class="subject">*/ ?>
                <?php /*<span class="from"> Richard Doe </span>*/ ?>
                <?php /*<span class="time">16 mins </span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="#">*/ ?>
                <?php /*<span class="photo">*/ ?>
                <?php /*<img src="../assets/layouts/layout3/img/avatar1.jpg"*/ ?>
                <?php /*class="img-circle" alt=""> </span>*/ ?>
                <?php /*<span class="subject">*/ ?>
                <?php /*<span class="from"> Bob Nilson </span>*/ ?>
                <?php /*<span class="time">2 hrs </span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="#">*/ ?>
                <?php /*<span class="photo">*/ ?>
                <?php /*<img src="../assets/layouts/layout3/img/avatar2.jpg"*/ ?>
                <?php /*class="img-circle" alt=""> </span>*/ ?>
                <?php /*<span class="subject">*/ ?>
                <?php /*<span class="from"> Lisa Wong </span>*/ ?>
                <?php /*<span class="time">40 mins </span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="#">*/ ?>
                <?php /*<span class="photo">*/ ?>
                <?php /*<img src="../assets/layouts/layout3/img/avatar3.jpg"*/ ?>
                <?php /*class="img-circle" alt=""> </span>*/ ?>
                <?php /*<span class="subject">*/ ?>
                <?php /*<span class="from"> Richard Doe </span>*/ ?>
                <?php /*<span class="time">46 mins </span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <!-- END INBOX DROPDOWN -->
                    <li class="separator hide"></li>
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                <?php /*<li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">*/ ?>
                <?php /*<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"*/ ?>
                <?php /*data-close-others="true">*/ ?>
                <?php /*<i class="icon-calendar"></i>*/ ?>
                <?php /*<span class="badge badge-primary"> 3 </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*<ul class="dropdown-menu extended tasks">*/ ?>
                <?php /*<li class="external">*/ ?>
                <?php /*<h3>You have*/ ?>
                <?php /*<span class="bold">12 pending</span> tasks</h3>*/ ?>
                <?php /*<a href="?p=page_todo_2">view all</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<ul class="dropdown-menu-list scroller" style="height: 275px;"*/ ?>
                <?php /*data-handle-color="#637283">*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="task">*/ ?>
                <?php /*<span class="desc">New release v1.2 </span>*/ ?>
                <?php /*<span class="percent">30%</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="progress">*/ ?>
                <?php /*<span style="width: 40%;"*/ ?>
                <?php /*class="progress-bar progress-bar-success"*/ ?>
                <?php /*aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">*/ ?>
                <?php /*<span class="sr-only">40% Complete</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="task">*/ ?>
                <?php /*<span class="desc">Application deployment</span>*/ ?>
                <?php /*<span class="percent">65%</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="progress">*/ ?>
                <?php /*<span style="width: 65%;"*/ ?>
                <?php /*class="progress-bar progress-bar-danger"*/ ?>
                <?php /*aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">*/ ?>
                <?php /*<span class="sr-only">65% Complete</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="task">*/ ?>
                <?php /*<span class="desc">Mobile app release</span>*/ ?>
                <?php /*<span class="percent">98%</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="progress">*/ ?>
                <?php /*<span style="width: 98%;"*/ ?>
                <?php /*class="progress-bar progress-bar-success"*/ ?>
                <?php /*aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">*/ ?>
                <?php /*<span class="sr-only">98% Complete</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="task">*/ ?>
                <?php /*<span class="desc">Database migration</span>*/ ?>
                <?php /*<span class="percent">10%</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="progress">*/ ?>
                <?php /*<span style="width: 10%;"*/ ?>
                <?php /*class="progress-bar progress-bar-warning"*/ ?>
                <?php /*aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">*/ ?>
                <?php /*<span class="sr-only">10% Complete</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="task">*/ ?>
                <?php /*<span class="desc">Web server upgrade</span>*/ ?>
                <?php /*<span class="percent">58%</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="progress">*/ ?>
                <?php /*<span style="width: 58%;" class="progress-bar progress-bar-info"*/ ?>
                <?php /*aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">*/ ?>
                <?php /*<span class="sr-only">58% Complete</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="task">*/ ?>
                <?php /*<span class="desc">Mobile development</span>*/ ?>
                <?php /*<span class="percent">85%</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="progress">*/ ?>
                <?php /*<span style="width: 85%;"*/ ?>
                <?php /*class="progress-bar progress-bar-success"*/ ?>
                <?php /*aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">*/ ?>
                <?php /*<span class="sr-only">85% Complete</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<span class="task">*/ ?>
                <?php /*<span class="desc">New UI release</span>*/ ?>
                <?php /*<span class="percent">38%</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*<span class="progress progress-striped">*/ ?>
                <?php /*<span style="width: 38%;"*/ ?>
                <?php /*class="progress-bar progress-bar-important"*/ ?>
                <?php /*aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">*/ ?>
                <?php /*<span class="sr-only">38% Complete</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</li>*/ ?>
                <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <span class="username username-hide-on-mobile"> Admin </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" src="../assets/layouts/layout4/img/avatar9.jpg"/> </a>
                        <?php /*<ul class="dropdown-menu dropdown-menu-default">*/ ?>
                        <?php /*<li>*/ ?>
                        <?php /*<a href="page_user_profile_1.html">*/ ?>
                        <?php /*<i class="icon-user"></i> My Profile </a>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li>*/ ?>
                        <?php /*<a href="app_calendar.html">*/ ?>
                        <?php /*<i class="icon-calendar"></i> My Calendar </a>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li>*/ ?>
                        <?php /*<a href="app_inbox.html">*/ ?>
                        <?php /*<i class="icon-envelope-open"></i> My Inbox*/ ?>
                        <?php /*<span class="badge badge-danger"> 3 </span>*/ ?>
                        <?php /*</a>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li>*/ ?>
                        <?php /*<a href="app_todo_2.html">*/ ?>
                        <?php /*<i class="icon-rocket"></i> My Tasks*/ ?>
                        <?php /*<span class="badge badge-success"> 7 </span>*/ ?>
                        <?php /*</a>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li class="divider"></li>*/ ?>
                        <?php /*<li>*/ ?>
                        <?php /*<a href="page_user_lock_1.html">*/ ?>
                        <?php /*<i class="icon-lock"></i> Lock Screen </a>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*<li>*/ ?>
                        <?php /*<a href="page_user_login_1.html">*/ ?>
                        <?php /*<i class="icon-key"></i> Log Out </a>*/ ?>
                        <?php /*</li>*/ ?>
                        <?php /*</ul>*/ ?>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <?php /*<li class="dropdown dropdown-extended quick-sidebar-toggler">*/ ?>
                <?php /*<span class="sr-only">Toggle Quick Sidebar</span>*/ ?>
                <?php /*<i class="icon-logout"></i>*/ ?>
                <?php /*</li>*/ ?>
                <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start active open">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <?php /*<ul class="sub-menu">*/ ?>
                    <?php /*<li class="nav-item start active open">*/ ?>
                    <?php /*<a href="index.html" class="nav-link ">*/ ?>
                    <?php /*<i class="icon-bar-chart"></i>*/ ?>
                    <?php /*<span class="title">Dashboard 1</span>*/ ?>
                    <?php /*<span class="selected"></span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li class="nav-item start ">*/ ?>
                    <?php /*<a href="dashboard_2.html" class="nav-link ">*/ ?>
                    <?php /*<i class="icon-bulb"></i>*/ ?>
                    <?php /*<span class="title">Dashboard 2</span>*/ ?>
                    <?php /*<span class="badge badge-success">1</span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li class="nav-item start ">*/ ?>
                    <?php /*<a href="dashboard_3.html" class="nav-link ">*/ ?>
                    <?php /*<i class="icon-graph"></i>*/ ?>
                    <?php /*<span class="title">Dashboard 3</span>*/ ?>
                    <?php /*<span class="badge badge-danger">5</span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Mosaned</h3>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">العقارات</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="<?php echo e(url('/aqars')); ?>" class="nav-link ">
                                <span class="title"> التحكم فى الاعلانات</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="ui_general.html" class="nav-link ">
                                <span class="title">الاعلانات المميزة</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-puzzle"></i>
                        <span class="title">الاعضاء</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="components_ion_sliders.html" class="nav-link ">
                                <span class="title"> التحكم فى الاعضاء </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-settings"></i>
                        <span class="title">الدول والمدن والمناطق </span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item  ">
                            <a href="form_controls.html" class="nav-link ">
                                <span class="title">الدول </span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_controls_md.html" class="nav-link ">
                                        <span class="title"> المدن
                                           </span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="form_validation.html" class="nav-link ">
                                <span class="title">المناطق </span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="heading">
                    <h3 class="uppercase"></h3>
                </li>

                <li class="heading">
                    <h3 class="uppercase"></h3>
                </li>

            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Dashboard
                        <small>dashboard & statistics</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height green"
                         data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>&nbsp;
                        <span class="thin uppercase hidden-xs"></span>&nbsp;
                        <i class="fa fa-angle-down"></i>
                    </div>
                    <!-- BEGIN THEME PANEL -->
                    <div class="btn-group btn-theme-panel">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-settings"></i>
                        </a>
                        <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <h3>THEME</h3>
                                    <ul class="theme-colors">
                                        <li class="theme-color theme-color-default" data-theme="default">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Dark Header</span>
                                        </li>
                                        <li class="theme-color theme-color-light active" data-theme="light">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Light Header</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                    <h3>LAYOUT</h3>
                                    <ul class="theme-settings">
                                        <li> Theme Style
                                            <select class="layout-style-option form-control input-small input-sm">
                                                <option value="square">Square corners</option>
                                                <option value="rounded" selected="selected">Rounded corners</option>
                                            </select>
                                        </li>
                                        <li> Layout
                                            <select class="layout-option form-control input-small input-sm">
                                                <option value="fluid" selected="selected">Fluid</option>
                                                <option value="boxed">Boxed</option>
                                            </select>
                                        </li>
                                        <li> Header
                                            <select class="page-header-option form-control input-small input-sm">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </li>
                                        <li> Top Dropdowns
                                            <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                <option value="light">Light</option>
                                                <option value="dark" selected="selected">Dark</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Mode
                                            <select class="sidebar-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Menu
                                            <select class="sidebar-menu-option form-control input-small input-sm">
                                                <option value="accordion" selected="selected">Accordion</option>
                                                <option value="hover">Hover</option>
                                            </select>
                                        </li>
                                        <li> Sidebar Position
                                            <select class="sidebar-pos-option form-control input-small input-sm">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </li>
                                        <li> Footer
                                            <select class="page-footer-option form-control input-small input-sm">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                </div>
                <!-- END PAGE TOOLBAR -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span class="active">Dashboard</span>
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN PORTLET-->
                <?php /*<div class="portlet light bordered">*/ ?>
                <?php /*<div class="portlet-title">*/ ?>
                <?php /*<div class="caption">*/ ?>
                <?php /*<i class="icon-bar-chart font-green"></i>*/ ?>
                <?php /*<span class="caption-subject font-green bold uppercase">Site Visits</span>*/ ?>
                <?php /*<span class="caption-helper">weekly stats...</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="actions">*/ ?>
                <?php /*<div class="btn-group btn-group-devided" data-toggle="buttons">*/ ?>
                <?php /*<label class="btn red btn-outline btn-circle btn-sm active">*/ ?>
                <?php /*<input type="radio" name="options" class="toggle" id="option1">New</label>*/ ?>
                <?php /*<label class="btn red btn-outline btn-circle btn-sm">*/ ?>
                <?php /*<input type="radio" name="options" class="toggle" id="option2">Returning</label>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="portlet-body">*/ ?>
                <?php /*<div id="site_statistics_loading">*/ ?>
                <?php /*<img src="../assets/global/img/loading.gif" alt="loading" /> </div>*/ ?>
                <?php /*<div id="site_statistics_content" class="display-none">*/ ?>
                <?php /*<div id="site_statistics" class="chart"> </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <!-- END PORTLET-->
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN PORTLET-->
                <?php /*<div class="portlet light bordered">*/ ?>
                <?php /*<div class="portlet-title">*/ ?>
                <?php /*<div class="caption">*/ ?>
                <?php /*<i class="icon-share font-red-sunglo hide"></i>*/ ?>
                <?php /*<span class="caption-subject font-red-sunglo bold uppercase">Revenue</span>*/ ?>
                <?php /*<span class="caption-helper">monthly stats...</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="actions">*/ ?>
                <?php /*<div class="btn-group">*/ ?>
                <?php /*<a href="" class="btn dark btn-outline btn-circle btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter Range*/ ?>
                <?php /*<span class="fa fa-angle-down"> </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;"> Q1 2014*/ ?>
                <?php /*<span class="label label-sm label-default"> past </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;"> Q2 2014*/ ?>
                <?php /*<span class="label label-sm label-default"> past </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="active">*/ ?>
                <?php /*<a href="javascript:;"> Q3 2014*/ ?>
                <?php /*<span class="label label-sm label-success"> current </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;"> Q4 2014*/ ?>
                <?php /*<span class="label label-sm label-warning"> upcoming </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="portlet-body">*/ ?>
                <?php /*<div id="site_activities_loading">*/ ?>
                <?php /*<img src="../assets/global/img/loading.gif" alt="loading" /> </div>*/ ?>
                <?php /*<div id="site_activities_content" class="display-none">*/ ?>
                <?php /*<div id="site_activities" style="height: 228px;"> </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div style="margin: 20px 0 10px 30px">*/ ?>
                <?php /*<div class="row">*/ ?>
                <?php /*<div class="col-md-3 col-sm-3 col-xs-6 text-stat">*/ ?>
                <?php /*<span class="label label-sm label-success"> Revenue: </span>*/ ?>
                <?php /*<h3>$13,234</h3>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col-md-3 col-sm-3 col-xs-6 text-stat">*/ ?>
                <?php /*<span class="label label-sm label-info"> Tax: </span>*/ ?>
                <?php /*<h3>$134,900</h3>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col-md-3 col-sm-3 col-xs-6 text-stat">*/ ?>
                <?php /*<span class="label label-sm label-danger"> Shipment: </span>*/ ?>
                <?php /*<h3>$1,134</h3>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col-md-3 col-sm-3 col-xs-6 text-stat">*/ ?>
                <?php /*<span class="label label-sm label-warning"> Orders: </span>*/ ?>
                <?php /*<h3>235090</h3>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <!-- END PORTLET-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <?php /*<div class="portlet light bordered">*/ ?>
                    <?php /*<div class="portlet-title">*/ ?>
                    <?php /*<div class="caption">*/ ?>
                    <?php /*<i class="icon-share font-blue"></i>*/ ?>
                    <?php /*<span class="caption-subject font-blue bold uppercase">Recent Activities</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="actions">*/ ?>
                    <?php /*<div class="btn-group">*/ ?>
                    <?php /*<a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">*/ ?>
                    <?php /*<label>*/ ?>
                    <?php /*<input type="checkbox" /> Finance</label>*/ ?>
                    <?php /*<label>*/ ?>
                    <?php /*<input type="checkbox" checked="" /> Membership</label>*/ ?>
                    <?php /*<label>*/ ?>
                    <?php /*<input type="checkbox" /> Customer Support</label>*/ ?>
                    <?php /*<label>*/ ?>
                    <?php /*<input type="checkbox" checked="" /> HR</label>*/ ?>
                    <?php /*<label>*/ ?>
                    <?php /*<input type="checkbox" /> System</label>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="portlet-body">*/ ?>
                    <?php /*<div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">*/ ?>
                    <?php /*<ul class="feeds">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-info">*/ ?>
                    <?php /*<i class="fa fa-check"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> You have 4 pending tasks.*/ ?>
                    <?php /*<span class="label label-sm label-warning "> Take action*/ ?>
                    <?php /*<i class="fa fa-share"></i>*/ ?>
                    <?php /*</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> Just now </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-success">*/ ?>
                    <?php /*<i class="fa fa-bar-chart-o"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> Finance Report for year 2013 has been released. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 20 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-danger">*/ ?>
                    <?php /*<i class="fa fa-user"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 24 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-info">*/ ?>
                    <?php /*<i class="fa fa-shopping-cart"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> New order received with*/ ?>
                    <?php /*<span class="label label-sm label-success"> Reference Number: DR23923 </span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 30 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-success">*/ ?>
                    <?php /*<i class="fa fa-user"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 24 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-default">*/ ?>
                    <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> Web server hardware needs to be upgraded.*/ ?>
                    <?php /*<span class="label label-sm label-default "> Overdue </span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 2 hours </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-default">*/ ?>
                    <?php /*<i class="fa fa-briefcase"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> IPO Report for year 2013 has been released. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 20 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-info">*/ ?>
                    <?php /*<i class="fa fa-check"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> You have 4 pending tasks.*/ ?>
                    <?php /*<span class="label label-sm label-warning "> Take action*/ ?>
                    <?php /*<i class="fa fa-share"></i>*/ ?>
                    <?php /*</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> Just now </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-danger">*/ ?>
                    <?php /*<i class="fa fa-bar-chart-o"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> Finance Report for year 2013 has been released. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 20 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-default">*/ ?>
                    <?php /*<i class="fa fa-user"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 24 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-info">*/ ?>
                    <?php /*<i class="fa fa-shopping-cart"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> New order received with*/ ?>
                    <?php /*<span class="label label-sm label-success"> Reference Number: DR23923 </span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 30 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-success">*/ ?>
                    <?php /*<i class="fa fa-user"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 24 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-warning">*/ ?>
                    <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> Web server hardware needs to be upgraded.*/ ?>
                    <?php /*<span class="label label-sm label-default "> Overdue </span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 2 hours </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<div class="col1">*/ ?>
                    <?php /*<div class="cont">*/ ?>
                    <?php /*<div class="cont-col1">*/ ?>
                    <?php /*<div class="label label-sm label-info">*/ ?>
                    <?php /*<i class="fa fa-briefcase"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="cont-col2">*/ ?>
                    <?php /*<div class="desc"> IPO Report for year 2013 has been released. </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="col2">*/ ?>
                    <?php /*<div class="date"> 20 mins </div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="scroller-footer">*/ ?>
                    <?php /*<div class="btn-arrow-link pull-right">*/ ?>
                    <?php /*<a href="javascript:;">See All Records</a>*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                </div>
                <div class="col-md-6 col-sm-6">
                    <?php /*<div class="portlet light tasks-widget bordered">*/ ?>
                    <?php /*<div class="portlet-title">*/ ?>
                    <?php /*<div class="caption">*/ ?>
                    <?php /*<i class="icon-share font-green-haze hide"></i>*/ ?>
                    <?php /*<span class="caption-subject font-green bold uppercase">Tasks</span>*/ ?>
                    <?php /*<span class="caption-helper">tasks summary...</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="actions">*/ ?>
                    <?php /*<div class="btn-group">*/ ?>
                    <?php /*<a class="btn green btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> More*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;"> All Project </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li class="divider"> </li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;"> AirAsia </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;"> Cruise </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;"> HSBC </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li class="divider"> </li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;"> Pending*/ ?>
                    <?php /*<span class="badge badge-danger"> 4 </span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;"> Completed*/ ?>
                    <?php /*<span class="badge badge-success"> 12 </span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;"> Overdue*/ ?>
                    <?php /*<span class="badge badge-warning"> 9 </span>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="portlet-body">*/ ?>
                    <?php /*<div class="task-content">*/ ?>
                    <?php /*<div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">*/ ?>
                    <?php /*<!-- START TASK LIST -->*/ ?>
                    <?php /*<ul class="task-list">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> Present 2013 Year IPO Statistics at Board Meeting </span>*/ ?>
                    <?php /*<span class="label label-sm label-success">Company</span>*/ ?>
                    <?php /*<span class="task-bell">*/ ?>
                    <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                    <?php /*</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> Hold An Interview for Marketing Manager Position </span>*/ ?>
                    <?php /*<span class="label label-sm label-danger">Marketing</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> AirAsia Intranet System Project Internal Meeting </span>*/ ?>
                    <?php /*<span class="label label-sm label-success">AirAsia</span>*/ ?>
                    <?php /*<span class="task-bell">*/ ?>
                    <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                    <?php /*</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> Technical Management Meeting </span>*/ ?>
                    <?php /*<span class="label label-sm label-warning">Company</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> Kick-off Company CRM Mobile App Development </span>*/ ?>
                    <?php /*<span class="label label-sm label-info">Internal Products</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> Prepare Commercial Offer For SmartVision Website Rewamp </span>*/ ?>
                    <?php /*<span class="label label-sm label-danger">SmartVision</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> Sign-Off The Comercial Agreement With AutoSmart </span>*/ ?>
                    <?php /*<span class="label label-sm label-default">AutoSmart</span>*/ ?>
                    <?php /*<span class="task-bell">*/ ?>
                    <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                    <?php /*</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group dropup">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> Company Staff Meeting </span>*/ ?>
                    <?php /*<span class="label label-sm label-success">Cruise</span>*/ ?>
                    <?php /*<span class="task-bell">*/ ?>
                    <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                    <?php /*</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group dropup">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li class="last-line">*/ ?>
                    <?php /*<div class="task-checkbox">*/ ?>
                    <?php /*<input type="checkbox" class="liChild" value="" /> </div>*/ ?>
                    <?php /*<div class="task-title">*/ ?>
                    <?php /*<span class="task-title-sp"> KeenThemes Investment Discussion </span>*/ ?>
                    <?php /*<span class="label label-sm label-warning">KeenThemes </span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-config">*/ ?>
                    <?php /*<div class="task-config-btn btn-group dropup">*/ ?>
                    <?php /*<a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">*/ ?>
                    <?php /*<i class="fa fa-cog"></i>*/ ?>
                    <?php /*<i class="fa fa-angle-down"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-check"></i> Complete </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-pencil"></i> Edit </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*<li>*/ ?>
                    <?php /*<a href="javascript:;">*/ ?>
                    <?php /*<i class="fa fa-trash-o"></i> Cancel </a>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</li>*/ ?>
                    <?php /*</ul>*/ ?>
                    <?php /*<!-- END START TASK LIST -->*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="task-footer">*/ ?>
                    <?php /*<div class="btn-arrow-link pull-right">*/ ?>
                    <?php /*<a href="javascript:;">See All Records</a>*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <?php /*<div class="portlet light bordered">*/ ?>
                    <?php /*<div class="portlet-title">*/ ?>
                    <?php /*<div class="caption">*/ ?>
                    <?php /*<i class="icon-cursor font-purple"></i>*/ ?>
                    <?php /*<span class="caption-subject font-purple bold uppercase">General Stats</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="actions">*/ ?>
                    <?php /*<a href="javascript:;" class="btn btn-sm btn-circle red easy-pie-chart-reload">*/ ?>
                    <?php /*<i class="fa fa-repeat"></i> Reload </a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="portlet-body">*/ ?>
                    <?php /*<div class="row">*/ ?>
                    <?php /*<div class="col-md-4">*/ ?>
                    <?php /*<div class="easy-pie-chart">*/ ?>
                    <?php /*<div class="number transactions" data-percent="55">*/ ?>
                    <?php /*<span>+55</span>% </div>*/ ?>
                    <?php /*<a class="title" href="javascript:;"> Transactions*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="margin-bottom-10 visible-sm"> </div>*/ ?>
                    <?php /*<div class="col-md-4">*/ ?>
                    <?php /*<div class="easy-pie-chart">*/ ?>
                    <?php /*<div class="number visits" data-percent="85">*/ ?>
                    <?php /*<span>+85</span>% </div>*/ ?>
                    <?php /*<a class="title" href="javascript:;"> New Visits*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="margin-bottom-10 visible-sm"> </div>*/ ?>
                    <?php /*<div class="col-md-4">*/ ?>
                    <?php /*<div class="easy-pie-chart">*/ ?>
                    <?php /*<div class="number bounce" data-percent="46">*/ ?>
                    <?php /*<span>-46</span>% </div>*/ ?>
                    <?php /*<a class="title" href="javascript:;"> Bounce*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                </div>
                <div class="col-md-6 col-sm-6">
                    <?php /*<div class="portlet light bordered">*/ ?>
                    <?php /*<div class="portlet-title">*/ ?>
                    <?php /*<div class="caption">*/ ?>
                    <?php /*<i class="icon-equalizer font-yellow"></i>*/ ?>
                    <?php /*<span class="caption-subject font-yellow bold uppercase">Server Stats</span>*/ ?>
                    <?php /*<span class="caption-helper">monthly stats...</span>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="tools">*/ ?>
                    <?php /*<a href="" class="collapse"> </a>*/ ?>
                    <?php /*<a href="#portlet-config" data-toggle="modal" class="config"> </a>*/ ?>
                    <?php /*<a href="" class="reload"> </a>*/ ?>
                    <?php /*<a href="" class="remove"> </a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="portlet-body">*/ ?>
                    <?php /*<div class="row">*/ ?>
                    <?php /*<div class="col-md-4">*/ ?>
                    <?php /*<div class="sparkline-chart">*/ ?>
                    <?php /*<div class="number" id="sparkline_bar5"></div>*/ ?>
                    <?php /*<a class="title" href="javascript:;"> Network*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="margin-bottom-10 visible-sm"> </div>*/ ?>
                    <?php /*<div class="col-md-4">*/ ?>
                    <?php /*<div class="sparkline-chart">*/ ?>
                    <?php /*<div class="number" id="sparkline_bar6"></div>*/ ?>
                    <?php /*<a class="title" href="javascript:;"> CPU Load*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*<div class="margin-bottom-10 visible-sm"> </div>*/ ?>
                    <?php /*<div class="col-md-4">*/ ?>
                    <?php /*<div class="sparkline-chart">*/ ?>
                    <?php /*<div class="number" id="sparkline_line"></div>*/ ?>
                    <?php /*<a class="title" href="javascript:;"> Load Rate*/ ?>
                    <?php /*<i class="icon-arrow-right"></i>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN REGIONAL STATS PORTLET-->
                <?php /*<div class="portlet light bordered">*/ ?>
                <?php /*<div class="portlet-title">*/ ?>
                <?php /*<div class="caption">*/ ?>
                <?php /*<i class="icon-share font-red-sunglo"></i>*/ ?>
                <?php /*<span class="caption-subject font-red-sunglo bold uppercase">Regional Stats</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="actions">*/ ?>
                <?php /*<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">*/ ?>
                <?php /*<i class="icon-cloud-upload"></i>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">*/ ?>
                <?php /*<i class="icon-wrench"></i>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>*/ ?>
                <?php /*<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">*/ ?>
                <?php /*<i class="icon-trash"></i>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="portlet-body">*/ ?>
                <?php /*<div id="region_statistics_loading">*/ ?>
                <?php /*<img src="../assets/global/img/loading.gif" alt="loading" /> </div>*/ ?>
                <?php /*<div id="region_statistics_content" class="display-none">*/ ?>
                <?php /*<div class="btn-toolbar margin-bottom-10">*/ ?>
                <?php /*<div class="btn-group btn-group-circle" data-toggle="buttons">*/ ?>
                <?php /*<a href="" class="btn grey-salsa btn-sm active"> Users </a>*/ ?>
                <?php /*<a href="" class="btn grey-salsa btn-sm"> Orders </a>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="btn-group pull-right">*/ ?>
                <?php /*<a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Select Region*/ ?>
                <?php /*<span class="fa fa-angle-down"> </span>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*<ul class="dropdown-menu pull-right">*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;" id="regional_stat_world"> World </a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;" id="regional_stat_usa"> USA </a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;" id="regional_stat_europe"> Europe </a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;" id="regional_stat_russia"> Russia </a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;" id="regional_stat_germany"> Germany </a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div id="vmap_world" class="vmaps display-none"> </div>*/ ?>
                <?php /*<div id="vmap_usa" class="vmaps display-none"> </div>*/ ?>
                <?php /*<div id="vmap_europe" class="vmaps display-none"> </div>*/ ?>
                <?php /*<div id="vmap_russia" class="vmaps display-none"> </div>*/ ?>
                <?php /*<div id="vmap_germany" class="vmaps display-none"> </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <!-- END REGIONAL STATS PORTLET-->
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN PORTLET-->
                <?php /*<div class="portlet light bordered">*/ ?>
                <?php /*<div class="portlet-title tabbable-line">*/ ?>
                <?php /*<div class="caption">*/ ?>
                <?php /*<i class="icon-globe font-green-sharp"></i>*/ ?>
                <?php /*<span class="caption-subject font-green-sharp bold uppercase">Feeds</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<ul class="nav nav-tabs">*/ ?>
                <?php /*<li class="active">*/ ?>
                <?php /*<a href="#tab_1_1" class="active" data-toggle="tab"> System </a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="#tab_1_2" data-toggle="tab"> Activities </a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="portlet-body">*/ ?>
                <?php /*<!--BEGIN TABS-->*/ ?>
                <?php /*<div class="tab-content">*/ ?>
                <?php /*<div class="tab-pane active" id="tab_1_1">*/ ?>
                <?php /*<div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">*/ ?>
                <?php /*<ul class="feeds">*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> You have 4 pending tasks.*/ ?>
                <?php /*<span class="label label-sm label-info"> Take action*/ ?>
                <?php /*<i class="fa fa-share"></i>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New version v1.4 just lunched! </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 20 mins </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-danger">*/ ?>
                <?php /*<i class="fa fa-bolt"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> Database server #12 overloaded. Please fix the issue. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 24 mins </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 30 mins </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 40 mins </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-warning">*/ ?>
                <?php /*<i class="fa fa-plus"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 1.5 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> Web server hardware needs to be upgraded.*/ ?>
                <?php /*<span class="label label-sm label-default "> Overdue </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 2 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-default">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 3 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-warning">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 5 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 18 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-default">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 21 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 22 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-default">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 21 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 22 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-default">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 21 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 22 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-default">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 21 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-info">*/ ?>
                <?php /*<i class="fa fa-bullhorn"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received. Please take care of it. </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 22 hours </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="tab-pane" id="tab_1_2">*/ ?>
                <?php /*<div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">*/ ?>
                <?php /*<ul class="feeds">*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New order received </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 10 mins </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-danger">*/ ?>
                <?php /*<i class="fa fa-bolt"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> Order #24DOP4 has been rejected.*/ ?>
                <?php /*<span class="label label-sm label-danger "> Take action*/ ?>
                <?php /*<i class="fa fa-share"></i>*/ ?>
                <?php /*</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> 24 mins </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li>*/ ?>
                <?php /*<a href="javascript:;">*/ ?>
                <?php /*<div class="col1">*/ ?>
                <?php /*<div class="cont">*/ ?>
                <?php /*<div class="cont-col1">*/ ?>
                <?php /*<div class="label label-sm label-success">*/ ?>
                <?php /*<i class="fa fa-bell-o"></i>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="cont-col2">*/ ?>
                <?php /*<div class="desc"> New user registered </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="col2">*/ ?>
                <?php /*<div class="date"> Just now </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<!--END TABS-->*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <!-- END PORTLET-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN PORTLET-->
                <?php /*<div class="portlet light calendar bordered">*/ ?>
                <?php /*<div class="portlet-title ">*/ ?>
                <?php /*<div class="caption">*/ ?>
                <?php /*<i class="icon-calendar font-green-sharp"></i>*/ ?>
                <?php /*<span class="caption-subject font-green-sharp bold uppercase">Feeds</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="portlet-body">*/ ?>
                <?php /*<div id="calendar"> </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <!-- END PORTLET-->
                </div>
                <div class="col-md-6 col-sm-6">
                    <!-- BEGIN PORTLET-->
                <?php /*<div class="portlet light bordered">*/ ?>
                <?php /*<div class="portlet-title">*/ ?>
                <?php /*<div class="caption">*/ ?>
                <?php /*<i class="icon-bubble font-red-sunglo"></i>*/ ?>
                <?php /*<span class="caption-subject font-red-sunglo bold uppercase">Chats</span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="actions">*/ ?>
                <?php /*<div class="portlet-input input-inline">*/ ?>
                <?php /*<div class="input-icon right">*/ ?>
                <?php /*<i class="icon-magnifier"></i>*/ ?>
                <?php /*<input type="text" class="form-control input-circle" placeholder="search..."> </div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="portlet-body" id="chats">*/ ?>
                <?php /*<div class="scroller" style="height: 525px;" data-always-visible="1" data-rail-visible1="1">*/ ?>
                <?php /*<ul class="chats">*/ ?>
                <?php /*<li class="out">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Lisa Wong </a>*/ ?>
                <?php /*<span class="datetime"> at 20:11 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="out">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Lisa Wong </a>*/ ?>
                <?php /*<span class="datetime"> at 20:11 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="in">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Bob Nilson </a>*/ ?>
                <?php /*<span class="datetime"> at 20:30 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="in">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Bob Nilson </a>*/ ?>
                <?php /*<span class="datetime"> at 20:30 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="out">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Richard Doe </a>*/ ?>
                <?php /*<span class="datetime"> at 20:33 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="in">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Richard Doe </a>*/ ?>
                <?php /*<span class="datetime"> at 20:35 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="out">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Bob Nilson </a>*/ ?>
                <?php /*<span class="datetime"> at 20:40 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="in">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Richard Doe </a>*/ ?>
                <?php /*<span class="datetime"> at 20:40 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*<li class="out">*/ ?>
                <?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar1.jpg" />*/ ?>
                <?php /*<div class="message">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="javascript:;" class="name"> Bob Nilson </a>*/ ?>
                <?php /*<span class="datetime"> at 20:54 </span>*/ ?>
                <?php /*<span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet. </span>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</li>*/ ?>
                <?php /*</ul>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<div class="chat-form">*/ ?>
                <?php /*<div class="input-cont">*/ ?>
                <?php /*<input class="form-control" type="text" placeholder="Type a message here..." /> </div>*/ ?>
                <?php /*<div class="btn-cont">*/ ?>
                <?php /*<span class="arrow"> </span>*/ ?>
                <?php /*<a href="" class="btn blue icn-only">*/ ?>
                <?php /*<i class="fa fa-check icon-white"></i>*/ ?>
                <?php /*</a>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <!-- END PORTLET-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
        <i class="icon-login"></i>
    </a>
<?php /*<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">*/ ?>
<?php /*<div class="page-quick-sidebar">*/ ?>
<?php /*<ul class="nav nav-tabs">*/ ?>
<?php /*<li class="active">*/ ?>
<?php /*<a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users*/ ?>
<?php /*<span class="badge badge-danger">2</span>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts*/ ?>
<?php /*<span class="badge badge-success">7</span>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="dropdown">*/ ?>
<?php /*<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More*/ ?>
<?php /*<i class="fa fa-angle-down"></i>*/ ?>
<?php /*</a>*/ ?>
<?php /*<ul class="dropdown-menu pull-right">*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/ ?>
<?php /*<i class="icon-bell"></i> Alerts </a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/ ?>
<?php /*<i class="icon-info"></i> Notifications </a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/ ?>
<?php /*<i class="icon-speech"></i> Activities </a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="divider"></li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">*/ ?>
<?php /*<i class="icon-settings"></i> Settings </a>*/ ?>
<?php /*</li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*</li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*<div class="tab-content">*/ ?>
<?php /*<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">*/ ?>
<?php /*<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">*/ ?>
<?php /*<h3 class="list-heading">Staff</h3>*/ ?>
<?php /*<ul class="media-list list-items">*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<div class="media-status">*/ ?>
<?php /*<span class="badge badge-success">8</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Bob Nilson</h4>*/ ?>
<?php /*<div class="media-heading-sub"> Project Manager </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Nick Larson</h4>*/ ?>
<?php /*<div class="media-heading-sub"> Art Director </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<div class="media-status">*/ ?>
<?php /*<span class="badge badge-danger">3</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Deon Hubert</h4>*/ ?>
<?php /*<div class="media-heading-sub"> CTO </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Ella Wong</h4>*/ ?>
<?php /*<div class="media-heading-sub"> CEO </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*<h3 class="list-heading">Customers</h3>*/ ?>
<?php /*<ul class="media-list list-items">*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<div class="media-status">*/ ?>
<?php /*<span class="badge badge-warning">2</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Lara Kunis</h4>*/ ?>
<?php /*<div class="media-heading-sub"> CEO, Loop Inc </div>*/ ?>
<?php /*<div class="media-heading-small"> Last seen 03:10 AM </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<div class="media-status">*/ ?>
<?php /*<span class="label label-sm label-success">new</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Ernie Kyllonen</h4>*/ ?>
<?php /*<div class="media-heading-sub"> Project Manager,*/ ?>
<?php /*<br> SmartBizz PTL </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Lisa Stone</h4>*/ ?>
<?php /*<div class="media-heading-sub"> CTO, Keort Inc </div>*/ ?>
<?php /*<div class="media-heading-small"> Last seen 13:10 PM </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<div class="media-status">*/ ?>
<?php /*<span class="badge badge-success">7</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Deon Portalatin</h4>*/ ?>
<?php /*<div class="media-heading-sub"> CFO, H&D LTD </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Irina Savikova</h4>*/ ?>
<?php /*<div class="media-heading-sub"> CEO, Tizda Motors Inc </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li class="media">*/ ?>
<?php /*<div class="media-status">*/ ?>
<?php /*<span class="badge badge-danger">4</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*<img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">*/ ?>
<?php /*<div class="media-body">*/ ?>
<?php /*<h4 class="media-heading">Maria Gomez</h4>*/ ?>
<?php /*<div class="media-heading-sub"> Manager, Infomatic Inc </div>*/ ?>
<?php /*<div class="media-heading-small"> Last seen 03:10 AM </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="page-quick-sidebar-item">*/ ?>
<?php /*<div class="page-quick-sidebar-chat-user">*/ ?>
<?php /*<div class="page-quick-sidebar-nav">*/ ?>
<?php /*<a href="javascript:;" class="page-quick-sidebar-back-to-list">*/ ?>
<?php /*<i class="icon-arrow-left"></i>Back</a>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="page-quick-sidebar-chat-user-messages">*/ ?>
<?php /*<div class="post out">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Bob Nilson</a>*/ ?>
<?php /*<span class="datetime">20:15</span>*/ ?>
<?php /*<span class="body"> When could you send me the report ? </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post in">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Ella Wong</a>*/ ?>
<?php /*<span class="datetime">20:15</span>*/ ?>
<?php /*<span class="body"> Its almost done. I will be sending it shortly </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post out">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Bob Nilson</a>*/ ?>
<?php /*<span class="datetime">20:15</span>*/ ?>
<?php /*<span class="body"> Alright. Thanks! :) </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post in">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Ella Wong</a>*/ ?>
<?php /*<span class="datetime">20:16</span>*/ ?>
<?php /*<span class="body"> You are most welcome. Sorry for the delay. </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post out">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Bob Nilson</a>*/ ?>
<?php /*<span class="datetime">20:17</span>*/ ?>
<?php /*<span class="body"> No probs. Just take your time :) </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post in">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Ella Wong</a>*/ ?>
<?php /*<span class="datetime">20:40</span>*/ ?>
<?php /*<span class="body"> Alright. I just emailed it to you. </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post out">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Bob Nilson</a>*/ ?>
<?php /*<span class="datetime">20:17</span>*/ ?>
<?php /*<span class="body"> Great! Thanks. Will check it right away. </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post in">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Ella Wong</a>*/ ?>
<?php /*<span class="datetime">20:40</span>*/ ?>
<?php /*<span class="body"> Please let me know if you have any comment. </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="post out">*/ ?>
<?php /*<img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />*/ ?>
<?php /*<div class="message">*/ ?>
<?php /*<span class="arrow"></span>*/ ?>
<?php /*<a href="javascript:;" class="name">Bob Nilson</a>*/ ?>
<?php /*<span class="datetime">20:17</span>*/ ?>
<?php /*<span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="page-quick-sidebar-chat-user-form">*/ ?>
<?php /*<div class="input-group">*/ ?>
<?php /*<input type="text" class="form-control" placeholder="Type a message here...">*/ ?>
<?php /*<div class="input-group-btn">*/ ?>
<?php /*<button type="button" class="btn green">*/ ?>
<?php /*<i class="icon-paper-clip"></i>*/ ?>
<?php /*</button>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">*/ ?>
<?php /*<div class="page-quick-sidebar-alerts-list">*/ ?>
<?php /*<h3 class="list-heading">General</h3>*/ ?>
<?php /*<ul class="feeds list-items">*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-info">*/ ?>
<?php /*<i class="fa fa-check"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> You have 4 pending tasks.*/ ?>
<?php /*<span class="label label-sm label-warning "> Take action*/ ?>
<?php /*<i class="fa fa-share"></i>*/ ?>
<?php /*</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> Just now </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;">*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-success">*/ ?>
<?php /*<i class="fa fa-bar-chart-o"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> Finance Report for year 2013 has been released. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 20 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-danger">*/ ?>
<?php /*<i class="fa fa-user"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 24 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-info">*/ ?>
<?php /*<i class="fa fa-shopping-cart"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> New order received with*/ ?>
<?php /*<span class="label label-sm label-success"> Reference Number: DR23923 </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 30 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-success">*/ ?>
<?php /*<i class="fa fa-user"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 24 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-info">*/ ?>
<?php /*<i class="fa fa-bell-o"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> Web server hardware needs to be upgraded.*/ ?>
<?php /*<span class="label label-sm label-warning"> Overdue </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 2 hours </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;">*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-default">*/ ?>
<?php /*<i class="fa fa-briefcase"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> IPO Report for year 2013 has been released. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 20 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*<h3 class="list-heading">System</h3>*/ ?>
<?php /*<ul class="feeds list-items">*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-info">*/ ?>
<?php /*<i class="fa fa-check"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> You have 4 pending tasks.*/ ?>
<?php /*<span class="label label-sm label-warning "> Take action*/ ?>
<?php /*<i class="fa fa-share"></i>*/ ?>
<?php /*</span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> Just now </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;">*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-danger">*/ ?>
<?php /*<i class="fa fa-bar-chart-o"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> Finance Report for year 2013 has been released. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 20 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-default">*/ ?>
<?php /*<i class="fa fa-user"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 24 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-info">*/ ?>
<?php /*<i class="fa fa-shopping-cart"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> New order received with*/ ?>
<?php /*<span class="label label-sm label-success"> Reference Number: DR23923 </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 30 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-success">*/ ?>
<?php /*<i class="fa fa-user"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> You have 5 pending membership that requires a quick review. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 24 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-warning">*/ ?>
<?php /*<i class="fa fa-bell-o"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> Web server hardware needs to be upgraded.*/ ?>
<?php /*<span class="label label-sm label-default "> Overdue </span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 2 hours </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li>*/ ?>
<?php /*<a href="javascript:;">*/ ?>
<?php /*<div class="col1">*/ ?>
<?php /*<div class="cont">*/ ?>
<?php /*<div class="cont-col1">*/ ?>
<?php /*<div class="label label-sm label-info">*/ ?>
<?php /*<i class="fa fa-briefcase"></i>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="cont-col2">*/ ?>
<?php /*<div class="desc"> IPO Report for year 2013 has been released. </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col2">*/ ?>
<?php /*<div class="date"> 20 mins </div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</a>*/ ?>
<?php /*</li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">*/ ?>
<?php /*<div class="page-quick-sidebar-settings-list">*/ ?>
<?php /*<h3 class="list-heading">General Settings</h3>*/ ?>
<?php /*<ul class="list-items borderless">*/ ?>
<?php /*<li> Enable Notifications*/ ?>
<?php /*<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/ ?>
<?php /*<li> Allow Tracking*/ ?>
<?php /*<input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/ ?>
<?php /*<li> Log Errors*/ ?>
<?php /*<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/ ?>
<?php /*<li> Auto Sumbit Issues*/ ?>
<?php /*<input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/ ?>
<?php /*<li> Enable SMS Alerts*/ ?>
<?php /*<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*<h3 class="list-heading">System Settings</h3>*/ ?>
<?php /*<ul class="list-items borderless">*/ ?>
<?php /*<li> Security Level*/ ?>
<?php /*<select class="form-control input-inline input-sm input-small">*/ ?>
<?php /*<option value="1">Normal</option>*/ ?>
<?php /*<option value="2" selected>Medium</option>*/ ?>
<?php /*<option value="e">High</option>*/ ?>
<?php /*</select>*/ ?>
<?php /*</li>*/ ?>
<?php /*<li> Failed Email Attempts*/ ?>
<?php /*<input class="form-control input-inline input-sm input-small" value="5" /> </li>*/ ?>
<?php /*<li> Secondary SMTP Port*/ ?>
<?php /*<input class="form-control input-inline input-sm input-small" value="3560" /> </li>*/ ?>
<?php /*<li> Notify On System Error*/ ?>
<?php /*<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/ ?>
<?php /*<li> Notify On SMTP Error*/ ?>
<?php /*<input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*<div class="inner-content">*/ ?>
<?php /*<button class="btn btn-success">*/ ?>
<?php /*<i class="icon-settings"></i> Save Changes</button>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <center>
        <div class="page-footer-inner"> 2017 &copy; AlexApps.

            <?php /*<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>*/ ?>
        </div>
    </center>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="<?php echo e(asset('assets/global/plugins/respond.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/plugins/excanvas.min.js')); ?>></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo e(asset('assets/global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<!--data table plugin -->
<script src="<?php echo e(asset('assets/global/scripts/datatable.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/datatables/datatables.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"
        type="text/javascript"></script>
<!--data table plugin -->
<script src="<?php echo e(asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/uniform/jquery.uniform.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(asset('assets/global/plugins/moment.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/morris/morris.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/morris/raphael-min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/counterup/jquery.waypoints.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/counterup/jquery.counterup.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amcharts/amcharts.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amcharts/serial.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amcharts/pie.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amcharts/radar.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amcharts/themes/light.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/ammap/ammap.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/amcharts/amstockcharts/amstock.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/fullcalendar/fullcalendar.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/flot/jquery.flot.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/flot/jquery.flot.resize.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/flot/jquery.flot.categories.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('assets/global/plugins/jquery.sparkline.min.js')); ?>" type="text/javascript"></script>
<?php /*<script src="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')); ?>" type="text/javascript"></script>*/ ?>
<?php /*<script src="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')); ?>"*/ ?>
<?php /*type="text/javascript"></script>*/ ?>
<?php /*<script src="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')); ?>"*/ ?>
<?php /*type="text/javascript"></script>*/ ?>
<?php /*<script src="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')); ?>"*/ ?>
<?php /*type="text/javascript"></script>*/ ?>
<?php /*<script src="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')); ?>"*/ ?>
<?php /*type="text/javascript"></script>*/ ?>
<?php /*<script src="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')); ?>" type="text/javascript"></script>*/ ?>
<?php /*<script src="<?php echo e(asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')); ?>"*/ ?>
<?php /*type="text/javascript"></script>*/ ?>
<script src="<?php echo e(asset('assets/global/plugins/bootstrap-toastr/toastr.min.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo e(asset('assets/global/scripts/app.min.js')); ?>" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo e(asset('assets/pages/scripts/dashboard.min.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo e(asset('assets/layouts/layout4/scripts/layout.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/layouts/layout4/scripts/demo.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/layouts/global/scripts/quick-sidebar.min.js')); ?>" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->


<?php /*pages*/ ?>
<script src="<?php echo e(asset('dist/adminjs/aqar.js')); ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html class="" lang="zxx">

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specbits | Job - Portal</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('public/admin/assets/img/favicon.png') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/plugins/bootstrap/css/bootstrap-select.min.css') }}">
    <link href="{{ asset('public/admin/assets/plugins/icons/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/admin/assets/plugins/bootstrap/css/bootstrap-wysihtml5.css') }}">
    <link href="{{ asset('public/admin/assets/plugins/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/plugins/bootstrap/css/bootsnav.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/plugins/nice-select/css/nice-select.css') }}">
    <link href="{{ asset('public/admin/assets/plugins/date-dropper/datedropper.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/plugins/aos-master/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/css/responsive.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet">
</head>

<body class="utf_skin_area">
    <div class="page_preloader"></div>
    <!-- ======================= Start Navigation ===================== -->
    <nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i
                        class="fa fa-bars"></i> </button>
                <a class="navbar-brand" href="{{ url('/') }}"> <img
                        src="{{ asset('public/admin/assets/img/logo-light.png') }}" class="logo logo-display"
                        alt=""> <img src="{{ asset('public/admin/assets/img/logo.png') }}"
                        class="logo logo-scrolled" alt=""> </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown active"> <a href="{{ url('/admin') }}">Dashboard</a> </li>
                    <li class="dropdown"><a href="{{ url('/admin/add-job') }}">Add Job</a></li> 
                    <li class="dropdown"><a href="{{ url('/admin/manage-job') }}">Manage Jobs</a></li>
                    <li class="dropdown"><a href="{{ url('/admin/create-company') }}">Create Company</a></li>
                    <li class="dropdown"><a href="{{ url('/admin/manage-resume') }}">Manage Resume</a></li>
                     
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown sign-up">
                        <a class="dropdown-toggle btn-signup red-btn" data-toggle="dropdown"
                            href="{{ url('/signup') }}">
                            <img src="{{ asset('public/admin/assets/img/user-profile.png') }}"
                                class="img-responsive img-circle" alt="">Alden Smith
                        </a>
                        <ul class="dropdown-menu animated fadeOutUp">
                            <li><a href="{{ url('/admin/add-job') }}">Add Jobs</a></li>
                            <li><a href="{{ url('/admin/create-company') }}">Create Company</a></li>
                            <li><a href="{{ url('/admin/create-resume') }}">Create Resume</a></li>
                            <li><a href="{{ url('/signup') }}">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======================= End Navigation ===================== -->

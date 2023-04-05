<!DOCTYPE html>
<html class="" lang="zxx">
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Specbits | Job - Portal</title>

<!-- Favicon Icon -->
<link rel="shortcut icon" href="{{ asset('public/web/assets/img/favicon.png')}}" />

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('public/web/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('public/web/assets/plugins/bootstrap/css/bootstrap-select.min.css')}}">
<link href="{{ asset('public/web/assets/plugins/icons/css/icons.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('public/web/assets/plugins/bootstrap/css/bootstrap-wysihtml5.css')}}">
<link href="{{ asset('public/web/assets/plugins/animate/animate.css')}}" rel="stylesheet">
<link href="{{ asset('public/web/assets/plugins/bootstrap/css/bootsnav.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/web/assets/plugins/nice-select/css/nice-select.css')}}">
<link href="{{ asset('public/web/assets/plugins/date-dropper/datedropper.css')}}" rel="stylesheet">
<link href="{{ asset('public/web/assets/plugins/aos-master/aos.css')}}" rel="stylesheet">
<link href="{{ asset('public/web/assets/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('public/web/assets/css/responsive.css')}}" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&amp;display=swap" rel="stylesheet"> 
</head>
<body class="utf_skin_area">
<div class="page_preloader"></div>
<!-- ======================= Start Navigation ===================== -->
<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
  <div class="container"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('public/web/assets/img/logo-light.png')}}" class="logo logo-display" alt=""> <img src="{{ asset('public/web/assets/img/logo.png')}}" class="logo logo-scrolled" alt=""> </a> 
	</div>
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="dropdown active"> <a href="{{ url('/') }}">Home</a> </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employer</a>
          <ul class="dropdown-menu animated fadeOutUp">
            <li><a href="{{ url('/employer') }}">Employer</a></li>
            <li><a href="{{ url('/employer-detail') }}">Employer Detail</a></li>
            <li><a href="{{ url('/admin/create-company') }}">Create Company</a></li>
            <li><a href="{{ url('/admin/manage-resume') }}">Manage Resume</a></li>
            <li><a href="{{ url('/admin/add-job') }}">Add Job</a></li>
            <li><a href="{{ url('/resume-detail') }}">Resume Detail</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidate</a>
          <ul class="dropdown-menu animated fadeOutUp">
            <li><a href="{{ url('/candidate') }}">Candidate</a></li>
            <li><a href="{{ url('/browse-job') }}">Browse Jobs</a></li>
            <li><a href="{{ url('/admin/manage-job') }}">Manage Jobs</a></li>
            <li><a href="{{ url('/browse-category') }}">Browse Categories</a></li>
          </ul>
        </li>
        
        <li class="dropdown"> <a href="{{ url('/contact') }}">Contact</a> </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="br-right"><a class="btn-signup red-btn" href="javascript:void(0)" data-toggle="modal" data-target="#signin"><i class="login-icon ti-plus"></i>Create Job</a></li>
        {{-- <li class="sign-up"><a class="btn-signup red-btn" href="{{ url('/signup') }}"><span class="ti-briefcase"></span>Register</a></li> --}}
      </ul>
    </div>
  </div>
</nav>
<!-- ======================= End Navigation ===================== --> 
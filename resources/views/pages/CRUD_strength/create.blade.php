<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Why Choose Us</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dashboardAssets/assets/img/favicon.ico')}}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('dashboardAssets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboardAssets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboardAssets/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
</head>
<body class="" data-spy="scroll" data-target="#navSection" data-offset="100">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>
            <ul class="navbar-item flex-row navbar-dropdown search-ul">

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('dashboardAssets/assets/img/90x90.jpg')}}" alt="admin-profile" class="img-fluid">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{asset('dashboardAssets/assets/img/90x90.jpg')}}" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>Siam</h5>

                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            {{----------------------------- Navbar ----------------------------}}
            <nav id="compactSidebar">
                <ul class="navbar-nav theme-brand flex-row">
                    <li class="nav-item theme-logo">
                        <a href="{{route('admin.dashboard')}}">
                            <img src="{{asset('dashboardAssets/assets/img/90x90.jpg')}}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                </ul>
                <ul class="menu-categories">

                    {{--------------------------------------- Dashboard ----------------------------------------}}
                    <li class="menu">
                        <a href="#dashboard" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/dashboard.png')}}" alt="">
                                </div>
                                <span>Dashboard</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------------- Dashboard ----------------------------------------}}



                    {{------------------------------------ About Us ---------------------------------------}}
                    <li class="menu">
                        <a href="#aboutus" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/aboutus.png')}}" alt="">
                                </div>
                                <span>About Us</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{------------------------------------ About Us ---------------------------------------}}






                    {{--------------------------------------------- SWOT --------------------------------------}}
                    <li class="menu">
                        <a href="#swot" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/swot.png')}}" alt="">
                                </div>
                                <span>SWOT</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------------------- SWOT --------------------------------------}}





                    {{------------------------------------ Approaches ---------------------------------}}
                    <li class="menu">
                        <a href="#OurApproaches" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/approach.png')}}" alt="">
                                </div>
                                <span>Approaches</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{------------------------------------ Approaches ---------------------------------}}







                    {{---------------------------------- Creative Works ---------------------------------}}
                    <li class="menu">
                        <a href="#creativeWork" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/idea.png')}}" alt="">
                                </div>
                                <span>Creative</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{---------------------------------- Creative Works ---------------------------------}}






                    {{----------------------------------- Clients --------------------------------------}}
                    <li class="menu">
                        <a href="#clients" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/clients.png')}}" alt="">
                                </div>
                                <span>Clients</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Clients --------------------------------------}}





                    {{----------------------------------- Category --------------------------------------}}
                    <li class="menu">
                        <a href="#ServicesCategory" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/category.png')}}" alt="">
                                </div>
                                <span>Category</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Category --------------------------------------}}






                    {{----------------------------------- Sector Services Overview(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#ServiceOverview" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/overview.png')}}" alt="">
                                </div>
                                <span>Overview</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Sector Services Overview(Dynamic) --------------------------------------}}





                    {{----------------------------------- Sector Services(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorServices" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/services.png')}}" alt="">
                                </div>
                                <span> Services </span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{----------------------------------- Sector Services(Dynamic) --------------------------------------}}






                    {{----------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#sector_technologies_details" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/technology.png')}}" alt="">
                                </div>
                                <span>Stack Details</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}







                    {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorCreativeWorks" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/creative.png')}}" alt="">
                                </div>
                                <span>Creative Works</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}






                    {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#pricing" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/dollar.png')}}" alt="">
                                </div>
                                <span>Pricing</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}

                </ul>
            </nav>
            {{----------------------------- Navbar ----------------------------}}


            {{----------------------------- Navbar Route ----------------------------}}
            <div id="compact_submenuSidebar" class="submenu-sidebar">

                {{--------------------------------- Dashboard Homepage --------------------------------------}}
                <div class="submenu" id="dashboard">
                    <ul class="submenu-list" data-parent-element="#dashboard">
                        <li>
                            <a href="{{route('admin.dashboard')}}"> Homepage </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Dashboard Homepage --------------------------------------}}






                {{--------------------------------- AboutUs Route --------------------------------------}}
                <div class="submenu" id="aboutus">
                    <ul class="submenu-list" data-parent-element="#aboutus">
                        <li>
                            <a href="{{route('about.create')}}"> <img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('about.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- AboutUs Route --------------------------------------}}




                {{--------------------------------- Swot Route --------------------------------------}}
                <div class="submenu" id="swot">
                    <ul class="submenu-list" data-parent-element="#swot">
                        <li>
                            <a href="{{route('strength.create')}}">
                                <img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('strength.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Swot Route --------------------------------------}}





                {{--------------------------------- Our Approaches --------------------------------------}}
                <div class="submenu" id="OurApproaches">
                    <ul class="submenu-list" data-parent-element="#OurApproaches">
                        <li>
                            <a href="{{route('OurApproaches.create')}}"> <img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('OurApproaches.list')}}"> <img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Our Approaches --------------------------------------}}






                {{--------------------------------- Creative Works --------------------------------------}}
                <div class="submenu" id="creativeWork">
                    <ul class="submenu-list" data-parent-element="#creativeWork">
                        <li>
                            <a href="{{route('creative_work.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('creative_work.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>




                {{--------------------------------- our Clients --------------------------------------}}
                <div class="submenu" id="clients">
                    <ul class="submenu-list" data-parent-element="#clients">
                        <li>
                            <a href="{{route('ourClients.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('ourClients.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- our Clients --------------------------------------}}






                {{--------------------------------- Category --------------------------------------}}
                <div class="submenu" id="ServicesCategory">
                    <ul class="submenu-list" data-parent-element="#ServicesCategory">
                        <li>
                            <a href="{{route('ServicesCategory.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('ServicesCategory.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Category --------------------------------------}}




                {{--------------------------------- Sector Service Overview(Dynamic) --------------------------------------}}
                <div class="submenu" id="ServiceOverview">
                    <ul class="submenu-list" data-parent-element="#ServiceOverview">
                        <li>
                            <a href="{{route('ServiceOverviewDetails.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('ServiceOverviewDetails.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Service Overview(Dynamic) --------------------------------------}}






                {{--------------------------------- Sector Services(Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorServices">
                    <ul class="submenu-list" data-parent-element="#SectorServices">
                        <li>
                            <a href="{{route('SectorServices.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('SectorServices.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Services(Dynamic) --------------------------------------}}




                {{--------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}
                <div class="submenu" id="sector_technologies_details">
                    <ul class="submenu-list" data-parent-element="#sector_technologies_details">
                        <li>
                            <a href="{{route('sector_technologies_details.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('sector_technologies_details.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Stack Details(Dynamic) --------------------------------------}}





                {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorCreativeWorks">
                    <ul class="submenu-list" data-parent-element="#SectorCreativeWorks">
                        <li>
                            <a href="{{route('SectorCreativeWorks.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('SectorCreativeWorks.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Creative Works(Dynamic) --------------------------------------}}






                {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}
                <div class="submenu" id="pricing">
                    <ul class="submenu-list" data-parent-element="#pricing">
                        <li>
                            <a href="{{route('PricingPlan.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('PricingPlan.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Pricing(Dynamic) --------------------------------------}}

            </div>
            {{----------------------------- Navbar Route ----------------------------}}

        </div>
        <!--  END SIDEBAR  -->


        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Strength/ Why Choose Us</a></li>

                            </ol>
                        </nav>
                    </div>

                    {{-- Instruction Modal --}}
                    <div class="row">
                        <div id="modalOptionalSizes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-lg">Instructions</button>
                                    </div>

                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Read The Guidelines</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="modal-text">In this Section we will write why people choose our company.It will show in the about-us page. Below You can see in which section does it affect in our website.</p>
                                                    <img src="{{asset('dashboardAssets/assets/img/strength.PNG')}}" style=" display:block; margin-left:auto; margin-right:auto; width:300px" alt="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Instruction Modal --}}


                    {{----------------------- Form Start --------------------}}
                    <div class="row">
                        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <form action="{{route('strength.store')}}" enctype="multipart/form-data" method="POST">
                                        @csrf

                                        {{----------------------- Strength Title --------------------}}
                                        <div class="form-group row mb-4">
                                            <label for="strength_title" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Strength Title</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="text" class="form-control" name="strength_title" placeholder="Write Your Company's Strength Title">
                                            </div>
                                        </div>
                                        {{----------------------- Strength Title --------------------}}



                                        {{----------------------- Strength Description --------------------}}
                                        <div class="form-group row mb-4">
                                            <label for="strength_description" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Strength Description</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <textarea name="strength_description" id="" class="form-control" cols="30" rows="10" placeholder="Write Some Description on that strength title"></textarea>
                                            </div>
                                        </div>
                                        {{----------------------- Strength Description --------------------}}




                                        {{----------------------- Submit Button --------------------}}
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" name="submit" class="btn btn-lg btn-primary mt-3">Submit</button>
                                            </div>
                                        </div>
                                        {{----------------------- Submit Button --------------------}}



                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{----------------------- Form End --------------------}}


                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('dashboardAssets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboardAssets/assets/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });

    </script>
    <script src="{{asset('dashboardAssets/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('dashboardAssets/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('dashboardAssets/assets/js/scrollspyNav.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Dynamic Categories Pricing</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dashboard_assets/assets/img/favicon.ico')}}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('dashboardAssets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboardAssets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/elements/alert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboardAssets/plugins/bootstrap-select/bootstrap-select.min.css')}}">
    <!-- END GLOBAL MANDATORY STYLES -->
    {{-- <link href="{{asset('dashboard_assets/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" /> --}}
    <link href="{{asset('dashboardAssets/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
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
                        <img src="{{asset('dashboard_assets/assets/img/90x90.jpg')}}" alt="admin-profile" class="img-fluid">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{asset('dashboard_assets/assets/img/90x90.jpg')}}" class="img-fluid mr-2" alt="avatar">
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

            {{--------------------------------- Navbar -----------------------------------}}
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
                        <a href="#uiKit" data-active="false" class="menu-toggle">
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





                    {{----------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorTechnologiesWeWillUse" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/technology.png')}}" alt="">
                                </div>
                                <span>Stack Name</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}



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
                        <a href="#pricing" data-active="true" class="menu-toggle">
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





                    {{--------------------------------- Sector Our Clients(Dynamic) --------------------------------------}}
                    <li class="menu">
                        <a href="#SectorOurclients" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/clients.png')}}" alt="">
                                </div>
                                <span>Sector Clients</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Sector Our Clients(Dynamic) --------------------------------------}}


                    {{--------------------------------- Case Study Details --------------------------------------}}
                    <li class="menu">
                        <a href="#CaseStudy" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/case-study.png')}}" alt="">
                                </div>
                                <span>Case Study</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Case Study Details --------------------------------------}}




                    {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}
                    <li class="menu">
                        <a href="#caseStudyAboutProjectStackImages" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/programing.png')}}" alt="">
                                </div>
                                <span>Project Stacks</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}



                    {{--------------------------------- Case Study Single Project Image Slider --------------------------------------}}
                    <li class="menu">
                        <a href="#caseStudyslider" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/sliders.png')}}" alt="">
                                </div>
                                <span>CaseStudy Sliders</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Case Study Single Project Image Slider --------------------------------------}}


                    {{--------------------------------- Contact Informations --------------------------------------}}
                    <li class="menu">
                        <a href="#contact-information" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/telephone.png')}}" alt="">
                                </div>
                                <span>Contact</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Contact Informations --------------------------------------}}



                    {{--------------------------------- Project Proposal Informations --------------------------------------}}
                    <li class="menu">
                        <a href="#projectProposal-information" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <img src="{{asset('dashboardAssets/assets/img/deals.png')}}" alt="">
                                </div>
                                <span>Proposal</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </li>
                    {{--------------------------------- Project Proposal Informations --------------------------------------}}


                </ul>
            </nav>
            {{--------------------------------- Navbar -----------------------------------}}


            {{--------------------------------- Navbar Route -----------------------------------}}
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
                <div class="submenu" id="uiKit">
                    <ul class="submenu-list" data-parent-element="#uiKit">
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




                {{--------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorTechnologiesWeWillUse">
                    <ul class="submenu-list" data-parent-element="#SectorTechnologiesWeWillUse">
                        <li>
                            <a href="{{route('SectorTechnologiesWeWillUse.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('SectorTechnologiesWeWillUse.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Stack Name(Dynamic) --------------------------------------}}



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



                {{--------------------------------- Sector Our Clients (Dynamic) --------------------------------------}}
                <div class="submenu" id="SectorOurclients">
                    <ul class="submenu-list" data-parent-element="#SectorOurclients">
                        <li>
                            <a href="{{route('sectorClients.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('sectorClients.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Sector Our Clients (Dynamic) --------------------------------------}}



                {{--------------------------------- Case Study Details --------------------------------------}}
                <div class="submenu" id="CaseStudy">
                    <ul class="submenu-list" data-parent-element="#CaseStudy">
                        <li>
                            <a href="{{route('CaseStudy.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('CaseStudy.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Case Study Details --------------------------------------}}




                {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}
                <div class="submenu" id="caseStudyAboutProjectStackImages">
                    <ul class="submenu-list" data-parent-element="#caseStudyAboutProjectStackImages">
                        <li>
                            <a href="{{route('caseStudyAboutProjectStackImages.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('caseStudyAboutProjectStackImages.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Case Study Single Project Stacks --------------------------------------}}



                {{--------------------------------- Case Study Single Project Sliders --------------------------------------}}
                <div class="submenu" id="caseStudyslider">
                    <ul class="submenu-list" data-parent-element="#caseStudyslider">
                        <li>
                            <a href="{{route('caseStudyslider.create')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Create </a>
                        </li>
                        <li>
                            <a href="{{route('caseStudyslider.list')}}"><img src="{{asset('dashboardAssets/assets/img/list.png')}}" alt=""> Show All </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Case Study Single Project Sliders --------------------------------------}}


                {{--------------------------------- Contact informations --------------------------------------}}
                <div class="submenu" id="contact-information">
                    <ul class="submenu-list" data-parent-element="#contact-information">
                        <li>
                            <a href="{{route('contact.list')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Show </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Contact informations --------------------------------------}}


                {{--------------------------------- Project Proposal informations --------------------------------------}}
                <div class="submenu" id="projectProposal-information">
                    <ul class="submenu-list" data-parent-element="#projectProposal-information">
                        <li>
                            <a href="{{route('ProjectProposalDetails.list')}}"><img src="{{asset('dashboardAssets/assets/img/pen.png')}}" alt=""> Show </a>
                        </li>
                    </ul>
                </div>
                {{--------------------------------- Project Proposal informations --------------------------------------}}




            </div>
            {{--------------------------------- Navbar Route -----------------------------------}}

        </div>
        <!--  END SIDEBAR  -->



        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">
                    <div class="page-header">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Basic Plan Package</h4>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div id="modalOptionalSizes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <div class="text-center">
                                        <!-- Lage modal -->
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
                                                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @if ($pricingPlan== null) --}}
                    <div class="row">
                        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <form action="{{route('PricingPlan.store')}}" method="POST">
                                        @csrf
                                        {{method_field('PUT')}}

                                        <div class="form-group row mb-4">
                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-12 col-form-label">Category</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <div class="statbox widget box box-shadow">
                                                    <div class="widget-content widget-content-area">
                                                        <select class="selectpicker" name="category_id" data-live-search="true" data-width="100%">
                                                            <option class="disabled">--Select Option--</option>
                                                            @foreach ($categorylist as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <h4>Plan Name</h4>
                                            <input type="text" class="form-control" name="planName" id="planName" aria-describedby="planName" placeholder="Plan Name">
                                            <small id="planName" class="form-text text-muted">Write Your package name in the Input Field.</small>
                                        </div>
                                        <div class="form-group mb-3">
                                            <h4>Small Description</h4>
                                            <input type="text" class="form-control" name="small_description" id="small_description" aria-describedby="small_description" placeholder="Small Description">
                                            <small id="small_description" class="form-text text-muted">Write Your Small Description about basic plan package in the Input Field.</small>
                                        </div>

                                        <div class="form-group mb-3">
                                            <h4>Service Price</h4>
                                            <input type="text" class="form-control" name="basic_plan_price" id="basic_plan_price" aria-describedby="basic_plan_price" placeholder="Basic Plan Price">
                                            <small id="basic_plan_price" class="form-text text-muted">Write Your basic plan price in the Input Field.</small>
                                        </div>

                                        <div class="form-group mb-3">
                                            <h4>Services Names</h4>
                                            <textarea id="my-editor" name="services_name" class="form-control"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-3 btn-lg">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @else

                    <div class="widget-content widget-content-area">
                        <div class="alert alert-arrow-left alert-icon-left alert-light-primary mb-4" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg></button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <strong>Warning!</strong> You have already inserted Total Achievements. Now you can only edit them.
                        </div>
                    </div>

                    @endif --}}
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="//cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images'
            , filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token='
            , filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
            , filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };

        CKEDITOR.replace('my-editor', options);

    </script>

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
    <script src="{{asset('dashboardAssets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>

</body>
</html>

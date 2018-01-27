<!DOCTYPE html>
<html lang="en" class="loading">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard - Asad Protfolio</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('app-assets/img/ico/apple-icon-60.html') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('app-assets/img/ico/apple-icon-76.html') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('app-assets/img/ico/apple-icon-120.html') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('app-assets/img/ico/apple-icon-152.html') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('app-assets/img/ico/favicon.ico') }}">
    <link rel="shortcut icon" type="image/png" href="{{ url('app-assets/img/ico/favicon-32.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/chartist.min.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/app.css') }}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>
<body data-col="2-columns" class=" 2-columns ">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <div data-active-color="white" data-background-color="man-of-steel" data-image="{{ url('app-assets/img/sidebar-bg/01.jpg') }}" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
            <div class="logo clearfix"><a href="index-2.html" class="logo-text float-left">
                    <div class="logo-img"><img src="{{ url('app-assets/img/logo.png') }}"/></div><span class="text align-middle">ASAD</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="ft-toggle-right toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
            <div class="nav-container">
                <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                    <li class="has-sub nav-item"><a href="#"><i class="ft-home"></i><span data-i18n="" class="menu-title">Dashboard</span><span class="tag badge badge-pill badge-danger float-right mr-1 mt-1">2</span></a>
                        <ul class="menu-content">
                            <li class="active"><a href="dashboard1.html" class="menu-item">Dashboard1</a>
                            </li>
                            <li><a href="dashboard2.html" class="menu-item">Dashboard2</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="color-palette.html"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Color Palette</span></a>
                    </li>
                    <li class=" nav-item"><a href="inbox.html"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Inbox</span></a>
                    </li>
                    <li class=" nav-item"><a href="chat.html"><i class="ft-message-square"></i><span data-i18n="" class="menu-title">Chat</span></a>
                    </li>
                    <li class=" nav-item"><a href="taskboard.html"><i class="ft-file-text"></i><span data-i18n="" class="menu-title">Task Board</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-aperture"></i><span data-i18n="" class="menu-title">UI Kit</span></a>
                        <ul class="menu-content">
                            <li><a href="grids.html" class="menu-item">Grid</a>
                            </li>
                            <li><a href="typography.html" class="menu-item">Typography</a>
                            </li>
                            <li><a href="syntax-highlighter.html" class="menu-item">Syntax Highlighter</a>
                            </li>
                            <li><a href="helper-classes.html" class="menu-item">Helper Classes</a>
                            </li>
                            <li><a href="text-utilities.html" class="menu-item">Text Utilities</a>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Icons</a>
                                <ul class="menu-content">
                                    <li><a href="feather.html" class="menu-item">Feather Icon</a>
                                    </li>
                                    <li><a href="font-awesome.html" class="menu-item">Font Awesome Icon</a>
                                    </li>
                                    <li><a href="simple-line.html" class="menu-item">Simple Line Icon</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-box"></i><span data-i18n="" class="menu-title">Components</span></a>
                        <ul class="menu-content">
                            <li class="has-sub"><a href="#" class="menu-item">Bootstrap</a>
                                <ul class="menu-content">
                                    <li><a href="components-lists.html" class="menu-item">List</a>
                                    </li>
                                    <li><a href="components-buttons.html" class="menu-item">Buttons</a>
                                    </li>
                                    <li><a href="components-alerts.html" class="menu-item">Alerts</a>
                                    </li>
                                    <li><a href="components-badges.html" class="menu-item">Badges</a>
                                    </li>
                                    <li><a href="components-dropdowns.html" class="menu-item">Dropdowns</a>
                                    </li>
                                    <li><a href="components-media-objects.html" class="menu-item">Media Objects</a>
                                    </li>
                                    <li><a href="components-pagination.html" class="menu-item">Pagination</a>
                                    </li>
                                    <li><a href="components-progress.html" class="menu-item">Progress Bars</a>
                                    </li>
                                    <li><a href="components-modals.html" class="menu-item">Modals</a>
                                    </li>
                                    <li><a href="components-collapse.html" class="menu-item">Collapse</a>
                                    </li>
                                    <li><a href="components-accordion.html" class="menu-item">Accordion</a>
                                    </li>
                                    <li><a href="components-carousel.html" class="menu-item">Carousel</a>
                                    </li>
                                    <li><a href="components-datepicker.html" class="menu-item">Datepicker</a>
                                    </li>
                                    <li><a href="components-popover.html" class="menu-item">Popover</a>
                                    </li>
                                    <li><a href="components-tabs.html" class="menu-item">Tabs</a>
                                    </li>
                                    <li><a href="components-tooltip.html" class="menu-item">Tooltip</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Extra</a>
                                <ul class="menu-content">
                                    <li><a href="sweet-alerts.html" class="menu-item">Sweet Alert</a>
                                    </li>
                                    <li><a href="toastr.html" class="menu-item">Toastr</a>
                                    </li>
                                    <li><a href="nouislider.html" class="menu-item">NoUI Slider</a>
                                    </li>
                                    <li><a href="upload.html" class="menu-item">Upload</a>
                                    </li>
                                    <li><a href="editor.html" class="menu-item">Editor</a>
                                    </li>
                                    <li><a href="dragndrop.html" class="menu-item">Drag and Drop</a>
                                    </li>
                                    <li><a href="tour.html" class="menu-item">Tour</a>
                                    </li>
                                    <li><a href="image-cropper.html" class="menu-item">Image Cropper</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-edit"></i><span data-i18n="" class="menu-title">Forms</span></a>
                        <ul class="menu-content">
                            <li class="has-sub"><a href="#" class="menu-item">Elements</a>
                                <ul class="menu-content">
                                    <li><a href="inputs.html" class="menu-item">Inputs</a>
                                    </li>
                                    <li><a href="input-groups.html" class="menu-item">Input Groups</a>
                                    </li>
                                    <li><a href="input-grid.html" class="menu-item">Input Grid</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#" class="menu-item">Layouts</a>
                                <ul class="menu-content">
                                    <li><a href="basic-forms.html" class="menu-item">Basic Forms</a>
                                    </li>
                                    <li><a href="horizontal-forms.html" class="menu-item">Horizontal Forms</a>
                                    </li>
                                    <li><a href="hidden-labels.html" class="menu-item">Hidden Labels</a>
                                    </li>
                                    <li><a href="form-actions.html" class="menu-item">Form Actions</a>
                                    </li>
                                    <li><a href="bordered-forms.html" class="menu-item">Bordered Forms</a>
                                    </li>
                                    <li><a href="striped-rows.html" class="menu-item">Striped Rows</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="validation-forms.html" class="menu-item">Validation</a>
                            </li>
                            <li><a href="wizard-forms.html" class="menu-item">Wizard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-grid"></i><span data-i18n="" class="menu-title">Tables</span></a>
                        <ul class="menu-content">
                            <li><a href="regular-table.html" class="menu-item">Regular</a>
                            </li>
                            <li><a href="extended-table.html" class="menu-item">Extended</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Data Tables</span></a>
                        <ul class="menu-content">
                            <li><a href="dt-basic-initialization.html" class="menu-item">Basic Initialisation</a>
                            </li>
                            <li><a href="dt-advanced-initialization.html" class="menu-item">Advanced initialisation</a>
                            </li>
                            <li><a href="dt-styling.html" class="menu-item">Styling</a>
                            </li>
                            <li><a href="dt-data-sources.html" class="menu-item">Data Sources</a>
                            </li>
                            <li><a href="dt-api.html" class="menu-item">API</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Cards</span></a>
                        <ul class="menu-content">
                            <li><a href="basic-cards.html" class="menu-item">Basic Cards</a>
                            </li>
                            <li><a href="advanced-cards.html" class="menu-item">Advanced Cards</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-layers"></i><span data-i18n="" class="menu-title">Maps</span></a>
                        <ul class="menu-content">
                            <li><a href="google-map.html" class="menu-item">Google Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span data-i18n="" class="menu-title">Charts</span></a>
                        <ul class="menu-content">
                            <li><a href="chartjs.html" class="menu-item">ChartJs</a>
                            </li>
                            <li><a href="chartist.html" class="menu-item">Chartist</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="calendar.html"><i class="ft-calendar"></i><span data-i18n="" class="menu-title">Calendar</span></a>
                    </li>
                    <li class="has-sub nav-item"><a href="#"><i class="ft-copy"></i><span data-i18n="" class="menu-title">Pages</span></a>
                        <ul class="menu-content">
                            <li><a href="forgot-password-page.html" class="menu-item">Forgot Password</a>
                            </li>
                            <li><a href="horizontal-timeline-page.html" class="menu-item">Horizontal Timeline</a>
                            </li>
                            <li><a href="vertical-timeline-page.html" class="menu-item">Vertical Timeline</a>
                            </li>
                            <li><a href="login-page.html" class="menu-item">Login</a>
                            </li>
                            <li><a href="register-page.html" class="menu-item">Register</a>
                            </li>
                            <li><a href="user-profile-page.html" class="menu-item">User Profile</a>
                            </li>
                            <li><a href="lock-screen-page.html" class="menu-item">Lock Screen</a>
                            </li>
                            <li><a href="invoice-page.html" class="menu-item">Invoice</a>
                            </li>
                            <li><a href="error-page.html" class="menu-item">Error</a>
                            </li>
                            <li><a href="coming-soon-page.html" class="menu-item">Coming Soon</a>
                            </li>
                            <li><a href="maintenance-page.html" class="menu-item">Maintenance</a>
                            </li>
                            <li><a href="gallery-page.html" class="menu-item">Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item">
                        <a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/documentation"><i class="ft-book"></i><span data-i18n="" class="menu-title">Documentation</span></a>
                    </li>
                    <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="ft-life-buoy"></i><span data-i18n="" class="menu-title">Support</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="main-panel">

        <!-- Navbar (Header) Starts-->
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <form role="search" class="navbar-form navbar-right mt-1">
                        <div class="position-relative has-icon-right">
                            <input type="text" placeholder="Search" class="form-control round"/>
                            <div class="form-control-position"><i class="ft-search"></i></div>
                        </div>
                    </form>
                </div>
                <div class="navbar-container">
                    <div id="navbarSupportedContent" class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item mr-2"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">fullscreen</p></a></li>
                            <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-flag font-medium-3 blue-grey darken-4"></i><span class="selected-language d-none"></span></a>
                                <div class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item py-1"><img src="app-assets/img/flags/us.png" class="langimg"/><span> English</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="app-assets/img/flags/es.png" class="langimg"/><span> Spanish</span></a><a href="javascript:;" class="dropdown-item py-1"><img src="app-assets/img/flags/br.png" class="langimg"/><span> Portuguese</span></a><a href="javascript:;" class="dropdown-item"><img src="app-assets/img/flags/de.png" class="langimg"/><span> French</span></a></div>
                            </li>
                            <li class="dropdown nav-item"><a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-bell font-medium-3 blue-grey darken-4"></i><span class="notification badge badge-pill badge-danger">4</span>
                                    <p class="d-none">Notifications</p></a>
                                <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                                    <div class="noti-list"><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span></span></a><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell warning float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 warning">New User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametitaque in </span></span></a><a class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4"><i class="ft-bell danger float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 danger">New Order Received</span><span class="noti-text">Lorem ipsum dolor sit ametest?</span></span></a><a class="dropdown-item noti-container py-3"><i class="ft-bell success float-left d-block font-large-1 mt-1 mr-2"></i><span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 success">New User Registered</span><span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span></span></a></div><a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Read All Notifications</a>
                                </div>
                            </li>
                            <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-user font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">User Settings</p></a>
                                <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right"><a href="javascript:;" class="dropdown-item py-1"><i class="ft-settings mr-2"></i><span>Settings</span></a><a href="javascript:;" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>Edit Profile</span></a><a href="javascript:;" class="dropdown-item py-1"><i class="ft-mail mr-2"></i><span>My Inbox</span></a>
                                    <div class="dropdown-divider"></div><a href="javascript:;" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle"><i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
                                    <p class="d-none">Notifications Sidebar</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar (Header) Ends-->


<!-- END Notification Sidebar-->
<!-- Theme customizer Starts-->
<div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-sm-none d-md-block"><a class="customizer-close"><i class="ft-x font-medium-3"></i></a><a id="customizer-toggle-icon" class="customizer-toggle bg-danger"><i class="ft-settings font-medium-4 fa fa-spin white align-middle"></i></a>
    <div data-ps-id="df6a5ce4-a175-9172-4402-dabd98fc9c0a" class="customizer-content p-3 ps-container ps-theme-dark">
        <h4 class="text-uppercase mb-0 text-bold-400">Theme Customizer</h4>
        <p>Customize & Preview in Real Time</p>
        <hr>
        <!-- Sidebar Options Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Color Options</h6>
        <div class="cz-bg-color">
            <div class="row p-1">
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
            </div>
            <div class="row p-1">
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
                <div class="col"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
            </div>
        </div>
        <!-- Sidebar Options Ends-->
        <hr>
        <!-- Sidebar BG Image Starts-->
        <h6 class="text-center text-bold-500 mb-3 text-uppercase">Sidebar Bg Image</h6>
        <div class="cz-bg-image row">
            <div class="col mb-3"><img src="{{ url('app-assets/img/sidebar-bg/01.jpg') }}" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="{{ url('app-assets/img/sidebar-bg/02.jpg') }}" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="{{ url('app-assets/img/sidebar-bg/03.jpg') }}" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="{{ url('app-assets/img/sidebar-bg/04.jpg') }}" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="{{ url('app-assets/img/sidebar-bg/05.jpg') }}" width="90" class="rounded"></div>
            <div class="col mb-3"><img src="{{ url('app-assets/img/sidebar-bg/06.jpg') }}" width="90" class="rounded"></div>
        </div>
        <!-- Sidebar BG Image Ends-->
        <hr>
        <!-- Sidebar BG Image Toggle Starts-->
        <div class="togglebutton">
            <div class="switch"><span>Sidebar Bg Image</span>
                <div class="float-right">
                    <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input type="checkbox" checked="" class="custom-control-input cz-bg-image-display"><span class="custom-control-indicator"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- Sidebar BG Image Toggle Ends-->
        <hr>
        <!-- Compact Menu Starts-->
        <div class="togglebutton">
            <div class="switch"><span>Compact Menu</span>
                <div class="float-right">
                    <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                        <input id="cz-compact-menu" type="checkbox" class="custom-control-input cz-compact-menu"><span class="custom-control-indicator"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- Compact Menu Ends-->
        <hr>
        <!-- Sidebar Width Starts-->
        <div>
            <label for="cz-sidebar-width">Sidebar Width</label>
            <select id="cz-sidebar-width" class="custom-select cz-sidebar-width float-right">
                <option value="small">Small</option>
                <option value="medium" selected="">Medium</option>
                <option value="large">Large</option>
            </select>
        </div>
        <!-- Sidebar Width Ends-->
    </div>
</div>
<!-- Theme customizer Ends-->
<!-- BEGIN VENDOR JS-->
<script src="{{ url('app-assets/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/vendors/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/vendors/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/vendors/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/vendors/js/prism.min.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/vendors/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/vendors/js/screenfull.min.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/vendors/js/pace/pace.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ url('app-assets/vendors/js/chartist.min.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN APEX JS-->
<script src="{{ url('app-assets/js/app-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/js/notification-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ url('app-assets/js/customizer.js') }}" type="text/javascript"></script>
<!-- END APEX JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ url('app-assets/js/dashboard1.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>

<!-- Mirrored from pixinvent.com/apex-angular-4-bootstrap-admin-template/html-demo-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2018 08:15:50 GMT -->
</html>
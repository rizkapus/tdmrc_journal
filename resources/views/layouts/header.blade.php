
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/chartist-js/chartist-plugin-tooltip.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/intro.css">
    <!-- END: Page Level CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple">
                <div class="nav-wrapper">                    
                    <ul class="navbar-list right">                       
                        <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>                      
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="/images/user/1.jpg" alt="avatar" width="150" height="50"><i></i></span></a></li>
                    </ul>
                    <ul class="navbar-list">  
                        <img src="images/logo/logotdmrc.png" style="width:200px; height:55px; padding-left:50px; padding-top: 13px;"></>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1">{{ $user->name }}</a></li>                      
                        <li><a class="grey-text text-darken-1" href="/adminProfile"><i class="material-icons">person_outline</i> Profile</a></li>                      
                        <li><a class="grey-text text-darken-1" href="{{ url('logout')}}"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded ">
        <div class="brand-sidebar white">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><span class="logo-text hide-on-med-and-down"><img src="/images/logo/logotdmrc.png" alt="materialize logo" /></span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow " id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
            <li class="active bold"><a class=" " href="/"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a> 
            </li>    

             @if($user->level == 1)     
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span class="menu-title">E-Journal</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/listJournal"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>
                        <li><a href="/uploadJournal"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">description</i><span class="menu-title">SK</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/listSk"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>
                        <li><a href="/uploadSk"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">drafts</i><span class="menu-title" data-i18n="Surat">Surat</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">file_download</i><span data-i18n="Second level child">Surat Masuk</span></a>
                            <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSurat"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>
                                        <li><a href="/uploadSurat"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                        </li>
                                    </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">file_upload</i><span data-i18n="Second level child">Surat Keluar</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                    <li><a href="/listSurat"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                    </li>
                                    <li><a href="/uploadSurat"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">person</i><span class="menu-title">User</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/userList"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>                        
                    </ul>
                </div>
            </li>
           

            @elseif($user->level == 2)
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span class="menu-title">E-Journal</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/listJournal"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>
                        <li><a href="/uploadJournal"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">description</i><span class="menu-title">SK</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/listSk"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>
                        <li><a href="/uploadSk"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">drafts</i><span class="menu-title" data-i18n="Surat">Surat</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">file_download</i><span data-i18n="Second level child">Surat Masuk</span></a>
                            <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSurat"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>
                                        <li><a href="/uploadSurat"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                        </li>
                                    </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">file_upload</i><span data-i18n="Second level child">Surat Keluar</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                    <li><a href="/listSurat"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                    </li>
                                    <li><a href="/uploadSurat"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            @elseif($user->level == 3)
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span class="menu-title">E-Journal</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/listJournal"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>
                        <li><a href="/uploadJournal"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">description</i><span class="menu-title">SK</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/listSk"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>
                        <li><a href="/uploadSk"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">drafts</i><span class="menu-title" data-i18n="Surat">Surat</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">file_download</i><span data-i18n="Second level child">Surat Masuk</span></a>
                            <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSurat"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>                               
                                    </ul>
                            </div>
                        </li>                       
                    </ul>
                </div>
            </li>
            
            @elseif($user->level == 4)
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span class="menu-title">E-Journal</span></a>
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        <li><a href="/listJournal"><i class="material-icons">radio_button_unchecked</i><span>List</span></a>
                        </li>
                        <li><a href="/uploadJournal"><i class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                        </li>
                    </ul>
                </div>
            </li>

            @endif

    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <div class="section">                    
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN VENDOR JS-->
    <script src="/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/vendors/chartjs/chart.min.js"></script>
    <script src="/vendors/chartist-js/chartist.min.js"></script>
    <script src="/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
    <script src="/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
    <script src="/vendors/select2/select2.full.min.js"></script>

    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="/js/plugins.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/js/scripts/dashboard-modern.js"></script>
    <script src="/js/scripts/intro.js"></script>
    <script src="/js/scripts/form-select2.js"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>TDMRC Office</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/chartist-js/chartist-plugin-tooltip.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/intro.css">
    <link rel="shortcut icon" href="/images/logo/usk.png">
    <link rel="icon" type="image/png" href="/images/logo/usk.png">
</head>


<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns"
    data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">
    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple">
                <div class="nav-wrapper">
                    <ul class="navbar-list right">
                        <li class="hide-on-med-and-down"><a
                                class="waves-effect waves-block waves-light toggle-fullscreen"
                                href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#"
                                data-target="slide-out-right"><i class="material-icons">headset_mic</i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                                data-target="profile-dropdown"><span class="avatar-status avatar-online"><img
                                        src="/images/user/1.png" alt="avatar" width="150"
                                        height="50"><i></i></span></a></li>

                    </ul>
                    <ul class="navbar-list">
                        <img src="images/logo/logotdmrc.png"
                            style="width:200px; height:55px; padding-left:50px; padding-top: 13px;"></>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1">{{ $user->name }}</a></li>
                        <li><a class="grey-text text-darken-1" href="/userProfile"><i
                                    class="material-icons">person_outline</i> Profile</a></li>
                        <li><a class="grey-text text-darken-1" href="{{ url('logout') }}"><i
                                    class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" id="search"
                                    placeholder="Explore Materialize" data-search="template-list">
                                <label class="label-icon" for="search"><i
                                        class="material-icons search-sm-icon">search</i></label><i
                                    class="material-icons search-sm-close">close</i>
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
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><span
                        class="logo-text hide-on-med-and-down"><img src="/images/logo/logotdmrc.png"
                            alt="materialize logo" /></span></a><a class="navbar-toggler" href="#"><i
                        class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow "
            id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
            <li class="active bold"><a class=" " href="/"><i
                        class="material-icons">settings_input_svideo</i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span></a>
            </li>

            @if ($user->role_id == 1)
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span
                            class="menu-title">E-Journal</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/listJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/uploadJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">description</i><span
                            class="menu-title">SK</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/listSk"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/uploadSk"><i
                                        class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">drafts</i><span class="menu-title"
                            data-i18n="Surat">Surat</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                        class="material-icons">file_download</i><span
                                        data-i18n="Second level child">Surat Masuk</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSuratMasuk"><i
                                                    class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>
                                        <li><a href="/uploadSuratMasuk"><i
                                                    class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                        class="material-icons">file_upload</i><span
                                        data-i18n="Second level child">Surat Keluar</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSuratKeluar"><i
                                                    class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>
                                        <li><a href="/uploadSuratKeluar"><i
                                                    class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">person</i><span
                            class="menu-title">User</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/userList"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/addUser"><i class="material-icons">radio_button_unchecked</i><span>Add
                                        User</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @elseif($user->role_id == 2)
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span
                            class="menu-title">E-Journal</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/listJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/uploadJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">description</i><span
                            class="menu-title">SK</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/listSk"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/uploadSk"><i
                                        class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">drafts</i><span class="menu-title"
                            data-i18n="Surat">Surat</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                        class="material-icons">file_download</i><span
                                        data-i18n="Second level child">Surat Masuk</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSuratMasuk"><i
                                                    class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>
                                        <li><a href="/uploadSuratMasuk"><i
                                                    class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                        class="material-icons">file_upload</i><span
                                        data-i18n="Second level child">Surat Keluar</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSuratKeluarAdmin"><i
                                                    class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>
                                        <li><a href="/uploadSuratKeluar"><i
                                                    class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            @elseif($user->role_id == 3)
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span
                            class="menu-title">E-Journal</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/listJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/uploadJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">description</i><span
                            class="menu-title">SK</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/listSk"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/uploadSk"><i
                                        class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">drafts</i><span class="menu-title"
                            data-i18n="Surat">Surat</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                        class="material-icons">file_download</i><span
                                        data-i18n="Second level child">Surat Masuk</span></a>
                                <div class="collapsible-body">
                                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                        <li><a href="/listSuratMasukDirector"><i
                                                    class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i
                                class="material-icons">file_upload</i><span
                                data-i18n="Second level child">Surat Keluar</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                <li><a href="/listSuratKeluar"><i
                                            class="material-icons">radio_button_unchecked</i><span>List</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                        </ul>
                    </div>
                </li>
            @elseif($user->role_id == 4)
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan "
                        href="JavaScript:void(0)"><i class="material-icons">folder_open</i><span
                            class="menu-title">E-Journal</span></a>
                    <div class="collapsible-body">
                        <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                            <li><a href="/listJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>List</span></a>
                            </li>
                            <li><a href="/uploadJournal"><i
                                        class="material-icons">radio_button_unchecked</i><span>Upload</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

    </aside>
    <!-- END: SideNav-->

    <aside id="right-sidebar-nav">
        <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
            <div class="row">
                <div class="slide-out-right-title">
                    <div class="col s12 border-bottom-1 pb-0 pt-1">
                        <div class="row">
                            <div class="col s2 pr-0 center">
                                <i class="material-icons vertical-text-middle"><a href="#"
                                        class="sidenav-close">clear</a></i>
                            </div>
                            <div class="col s10 pl-0">
                                <ul class="tabs">
                                    <li class="tab col s4 p-0">
                                        <a href="#messages" class="active">
                                            <span>Operator</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-out-right-body row pl-3">
                    <div id="messages" class="col s12 pb-0">
                        <div class="collection border-none mb-0">
                            <input class="header-search-input mt-4 mb-2" type="text" name="Search"
                                placeholder="Search" />
                            <ul class="collection right-sidebar-chat p-0 mb-0">
                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="/images/user/boy.png" alt="avatar" />
                                        <i></i>
                                    </span>
                                    <div class="user-content">
                                        <h6 class="line-height-0">M. Shabri Rabbani</h6>
                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">No.HP:</p>
                                    </div>
                                    <span class="secondary-content medium-small">Dev</span>
                                </li>
                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="/images/user/boy.png" alt="avatar" />
                                        <i></i>
                                    </span>
                                    <div class="user-content">
                                        <h6 class="line-height-0">Rizka Puspitasari</h6>
                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">No.HP:</p>
                                    </div>
                                    <span class="secondary-content medium-small">Dev</span>
                                </li>
                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="/images/user/girl.png" alt="avatar" />
                                        <i></i>
                                    </span>
                                    <div class="user-content">
                                        <h6 class="line-height-0">Razali Amna</h6>
                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">No.HP:</p>
                                    </div>
                                    <span class="secondary-content medium-small">Admin</span>
                                </li>
                                <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                                    data-target="slide-out-chat">
                                    <span class="avatar-status avatar-online avatar-50"><img
                                            src="/images/user/boy.png" alt="avatar" />
                                        <i></i>
                                    </span>
                                    <div class="user-content">
                                        <h6 class="line-height-0">Eka Oktavianus</h6>
                                        <p class="medium-small blue-grey-text text-lighten-3 pt-3">No.HP:</p>
                                    </div>
                                    <span class="secondary-content medium-small">Admin</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Out Chat -->
        <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
            <li class="center-align pt-2 pb-2 sidenav-close chat-head">
                <a href="#!"><i class="material-icons mr-0">chevron_left</i>Operator</a>
            </li>
            <li class="chat-body">
                <ul class="collection">
                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"><img src="/images/user/boy.png"
                                alt="avatar" />
                        </span>
                        <div class="user-content speech-bubble">
                            <p class="medium-small">hello!</p>
                        </div>
                    </li>
                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                        data-target="slide-out-chat">
                        <div class="user-content speech-bubble-right">
                            <p class="medium-small">How can we help? We're here for you!</p>
                        </div>
                    </li>
                    <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                        <span class="avatar-status avatar-online avatar-50"><img src="/images/user/boy.png"
                                alt="avatar" />
                        </span>
                        <div class="user-content speech-bubble">
                            <p class="medium-small">I found a problem on this website</p>
                        </div>
                    </li>
                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                        data-target="slide-out-chat">
                        <div class="user-content speech-bubble-right">
                            <p class="medium-small">If you find a technical problem please contact our developer.</p>
                        </div>
                    </li>

                    {{-- <li class="collection-item display-grid width-100 center-align">
                        <p>8:20 a.m.</p>
                    </li> --}}

                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                        data-target="slide-out-chat">
                        <div class="user-content speech-bubble-right">
                            <p class="medium-small">If you find a problem about this website please contact our admin
                            </p>
                        </div>
                    </li>

                    <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0"
                        data-target="slide-out-chat">
                        <div class="user-content speech-bubble-right">
                            <p class="medium-small">Thank you.</p>
                        </div>
                    </li>


                    {{-- <li class="collection-item display-grid width-100 center-align">
                        <p>9:00 a.m.</p>
                    </li> --}}

            </li>
        </ul>
        </li>
        <li class="center-align chat-footer">
            <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
                <div class="input-field">
                    <input id="icon_prefix" type="text" class="search" />
                    <label for="icon_prefix">Type here..</label>
                    <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
                </div>
            </form>
        </li>
        </ul>
    </aside>

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
        @include('sweetalert::alert')
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

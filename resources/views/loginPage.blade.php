<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Journal TDMRC</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/login.css">
    <link rel="shortcut icon" href="/images/logo/usk.png">
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">

                
                        <form class="login-form" action="{{url('login/proses')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-2"><center>Sign In into your account</center></h5>
                                </div>
                            </div>

                            @error('username')
                                    <div class="alert alert-danger"><center>{{$message}}</center></div>
                                @enderror
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="username" type="text" placeholder="Username" name="username" class="@error('username') is-invalid @enderror" required autofocus>
                                </div>
                            </div>

                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <button  class="btn waves-effect waves-light border-round gradient-45deg-indigo-purple col s12">Login</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>

    <script src="/js/vendors.min.js"></script>   
    <script src="/js/plugins.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/custom/custom-script.js"></script>
   
</body>

</html>
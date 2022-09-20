<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile | TDMRC Office</title>
    <link rel="stylesheet" type="text/css" href="/vendors/vendors.min.css">
    <link rel="stylesheet" href="/vendors/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="/vendors/select2/select2-materialize.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="/css/themes/vertical-menu-nav-dark-template/style.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/page-users.css">
    <link rel="stylesheet" type="text/css" href="/css/custom/custom.css">

</head>
<body>
    @include('layouts/header')
    <!-- BEGIN: Page Main-->
    <div id="">
        <div class="">      
            <div class="">
                <div class="container">
                    <div class="section users-view">
                        <div class="card">                         
                            <div class="card-content">
                                <h4 class="card-title">Form Update Profile</h4> 
                                <div class="row">
                                    <div class="">
                                        <form action="/updateUserProfile/{{$data->id}}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" id="username" name="username" value="{{$data->username}}">
                                                    <label >Username</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="name" name="name" type="text" value="{{$data->name}}">
                                                    <label >Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input id="email" type="email" name="email" value="{{$data->email}}">
                                                    <label >email</label>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                               
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br><br><br>
                    </div>
                    </div>             
     @include('layouts/footer')
</body>
</html>
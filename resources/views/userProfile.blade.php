<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <div class="card-panel">
                            <div class="row">
                                <div class="col s12 m7">
                                    <div class="display-flex media">
                                        <a href="#" class="avatar">
                                            <img src="/images/user/1.png" alt="users view avatar" class="z-depth-4 circle" height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading">
                                                <span class="users-view-name">{{ auth()->user()->name }}</span> 
                                            </h6>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">                                                                        
                                    <a href="/editUserProfile/{{auth()->user()->id}}" class="btn-small indigo">Edit</a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                
                                <div class="row">
                                    <div class="">
                                        <table class="striped">
                                            <tbody>
                                              
                                       
                                                <tr>
                                                    <td>Name :</td>
                                                    <td class="users-view-name">{{ auth()->user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Username :</td>
                                                    <td class="users-view-username">{{ auth()->user()->username }}</td>
                                                </tr>                                            
                                                <tr>
                                                    <td>E-mail :</td>
                                                    <td class="users-view-email">{{ auth()->user()->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Role :</td>
                                                    <td>{{ auth()->user()->role_id }}</td>
                                                </tr>
             
                                               
                                            </tbody>
                                        </table>
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
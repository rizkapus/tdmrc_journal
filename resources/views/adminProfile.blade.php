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
        <div class="row">      
            <div class="col s12">
                <div class="container">
                    <!-- users view start -->
                    <div class="section users-view">
                        <!-- users view media object start -->
                        <div class="card-panel">
                            <div class="row">
                                <div class="col s12 m7">
                                    <div class="display-flex media">
                                        <a href="#" class="avatar">
                                            <img src="/images/avatar/avatar-15.png" alt="users view avatar" class="z-depth-4 circle" height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="media-heading">
                                                <span class="users-view-name">Dean Stanley </span> 
                                            </h6>
                                            <span>ID:</span>
                                            <span class="users-view-id">305</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m5 quick-action-btns display-flex justify-content-end align-items-center pt-2">                                    
                                    <a href="" class="btn-small btn-light-indigo">Profile</a>
                                    <a href="/editProfile" class="btn-small indigo">Edit</a>
                                </div>
                            </div>
                        </div>
                        <!-- users view media object ends -->
                        <!-- users view card data start -->
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m4">
                                        <table class="striped">
                                            <tbody>
                                                <tr>
                                                    <td>Registered:</td>
                                                    <td>01/01/2019</td>
                                                </tr>
                                                <tr>
                                                    <td>Latest Activity:</td>
                                                    <td class="users-view-latest-activity">30/04/2019</td>
                                                </tr>
                                                <tr>
                                                    <td>Verified:</td>
                                                    <td class="users-view-verified">Yes</td>
                                                </tr>
                                                <tr>
                                                    <td>Role:</td>
                                                    <td class="users-view-role">Staff</td>
                                                </tr>
                                                <tr>
                                                    <td>Status:</td>
                                                    <td><span class=" users-view-status chip green lighten-5 green-text">Active</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                        <!-- users view card data ends -->
                        <!-- users view card details start -->
                        <div class="card">
                            <div class="card-content">
                                
                                <div class="row">
                                    <div class="col s12">
                                        <table class="striped">
                                            <tbody>
                                                <tr>
                                                    <td>Username:</td>
                                                    <td class="users-view-username">dean3004</td>
                                                </tr>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td class="users-view-name">Dean Stanley</td>
                                                </tr>
                                                <tr>
                                                    <td>E-mail:</td>
                                                    <td class="users-view-email">deanstanley@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Comapny:</td>
                                                    <td>XYZ Corp. Ltd.</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- users view card details ends -->

                    </div>
                    <!-- users view ends -->

     @include('layouts/footer')


    <script src="/js/vendors.min.js"></script>
    <script src="/vendors/select2/select2.full.min.js"></script>
    <script src="/vendors/jquery-validation/jquery.validate.min.js"> </script>
    <script src="/js/plugins.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/custom/custom-script.js"></script>
    <script src="/js/scripts/page-users.js"></script>
</body>
</html>
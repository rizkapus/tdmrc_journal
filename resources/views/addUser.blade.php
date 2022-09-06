<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layouts/header')

    <!-- BEGIN: Page Main-->
    <div id="">
        <div class="row">
            <div class="breadcrumbs-inline" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>User</span></h5>
                            <ol class="breadcrumbs mb-0">                      
                                <li class="breadcrumb-item"><a href="#">User</a>
                                </li>
                                <li class="breadcrumb-item active">Add User
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- users list start -->
                    <div class="row">
                        <div class="">
                            <div id="basic-form" class="card card card-default scrollspy">
                                <div class="card-content">
                                    <h4 class="card-title">Add User</h4>
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" id="fn">
                                                <label for="fn">Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" id="fn">
                                                <label for="fn">Username</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email">
                                                <label for="email">Email</label>                                              
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                         <div class="input-field col s12"> 
                                            <h6>Role</h6>                                                       
                                            <select class="input-field">                                                                               
                                                <option disabled selected>Pilih Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="director">Director</option>
                                                <option value="author">Author</option>                                            
                                            </select>
                                        </div>                                      
                                        
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn green waves-effect waves-light right" type="submit" name="action">Create User
                                                        <i class="material-icons right">person_add</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- users list ends -->
                    </div>
        </div>
    </div>

    @include('layouts/footer')
</body>
</html>
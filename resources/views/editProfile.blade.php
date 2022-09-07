<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile User</title>
</head>
<body>
    @include('layouts/header')

    <!-- BEGIN: Page Main-->
    <div id="">
        <div class="">
            
            <div class="col s12">
                <div class="container">
                    <!-- users edit start -->
                    <div class="section users-edit">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="" id="account">
                                        <!-- users edit media object start -->
                                        <div class="media display-flex align-items-center mb-2">
                                            <a class="mr-2" href="#">
                                                <img src="/images/user/1.jpg" alt="users avatar" class="z-depth-4 circle" height="64" width="64">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="media-heading mt-0">Avatar</h5>
                                                <div class="user-edit-btns display-flex">
                                                    <a href="#" class="btn-small indigo">Change</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form id="accountForm">
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <div class="row">
                                                        <div class="col s12 input-field">
                                                            <input id="username" name="username" type="text" class="validate" value="dean3004" data-error=".errorTxt1">
                                                            <label for="username">Username</label>
                                                            <small class="errorTxt1"></small>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="name" name="name" type="text" class="validate" value="Dean Stanley" data-error=".errorTxt2">
                                                            <label for="name">Name</label>
                                                            <small class="errorTxt2"></small>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="email" name="email" type="email" class="validate" value="deanstanley@gmail.com" data-error=".errorTxt3">
                                                            <label for="email">E-mail</label>
                                                            <small class="errorTxt3"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s12 m6">
                                                    <div class="row">
                                                        <div class="col s12 input-field">
                                                            <select>
                                                                <option>User</option>
                                                                <option>Staff</option>
                                                            </select>
                                                            <label>Role</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <select>
                                                                <option>Active</option>
                                                                <option>Banned</option>
                                                                <option>Close</option>
                                                            </select>
                                                            <label>Status</label>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="company" name="company" type="text" class="validate">
                                                            <label for="company">Company</label>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="col s12 display-flex justify-content-end mt-3">
                                                    <button type="submit" class="btn indigo">
                                                        Save changes</button>
                                                    <button type="button" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                    
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- users edit ends -->
            </div>
            <br>
            <br>
            <br>
    @include('layouts/footer')
</body>
</html>


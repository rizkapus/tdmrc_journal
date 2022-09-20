<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile User | TDMRC Office</title>
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
                                        <div class="media display-flex align-items-center mb-2">                                                                                   
                                            <div class="media-body">
                                                <h5 class="media-heading mt-0" value="sdd">Edit User</h5>                                           
                                            </div>
                                        </div>
                 
                                        <form action="/updateProfile/{{$data->id}}" method="POST">
                                            @csrf
                                            <div class="">
                                                <div class=" ">
                                                    <div class="">
                                                        <div class="col s12 input-field">
                                                            <input id="username" name="username" type="text"  value="{{$data->username}}">
                                                            <label for="username">Username</label>                                                       
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input id="name" name="name" type="text"  value="{{$data->name}}">
                                                            <label for="name" >Name</label>
                                                            
                                                        </div>                                                     
                                                        <div class="col s12 input-field">
                                                            <input id="email" name="email" type="email" class="validate" value="{{$data->email}}" >
                                                            <label for="email">E-mail</label>                                                            
                                                        </div>
                                                        <div class="">
                                                            <div class="col s12 input-field">
                                                                <select>
                                                                    <option selected>{{$data->role->role}}</option>
                                                                    <option value="2">Admin</option>
                                                                    <option value="3">Director</option>
                                                                    <option value="4">Author</option>
                                                                </select>
                                                                <label>Role</label>
                                                            </div>
                                                    </div>
                                                </div>                                                
                                                    <div class="col s12 display-flex justify-content-end mt-3">
                                                        <button type="submit" class="btn indigo" onclick="return confirm('ubah data ini?')">
                                                            Save changes</button>
                                                        <button type="button" class="btn btn-light">Cancel</button>

                                                    </div>
                                        </form>
                                    </div>         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <br>
            <br>
            <br>
    @include('layouts/footer')
</body>
</html>


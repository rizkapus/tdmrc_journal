<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="shortcut icon" href="/images/logo/usk.png">
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
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>User List</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="#">User</a>
                                </li>
                                <li class="breadcrumb-item active">Users List
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <!-- users list start -->
                    <section class="users-list-wrapper section">
                        <div class="users-list-filter">
                            <div class="card-panel">
                                <div class="row">
                                    <form>
                                        <div class="col s12 m6 l7">
                                            <label for="users-list-verified">Role</label>
                                            <div class="input-field">
                                                <select class="form-control" id="search" name="search">
                                                    <option disabled selected></option>
                                                    <option value="1">superadmin</option>
                                                    <option value="2">admin</option>
                                                    <option value="3">director</option>
                                                    <option value="4">author</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col s12 m6 l3 display-flex align-items-center show-btn">
                                            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="users-list-table">
                            <div class="card">
                                <div class="card-content">
                                    <!-- datatable start -->
                                    <div class="responsive-table">
                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Name</th>
                                                    <th>E-mail</th>                                                 
                                                    <th>Role</th>                                                   
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no=1;
                                                @endphp
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td></td>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$item['username']}}</td>
                                                    <td>{{$item['name']}}</td>
                                                    <td>{{$item['email']}}</td>                                                 
                                                    <td>{{$item->role->role}}</td>
                                                    <td>                                                        
                                                        <a href="/editProfile/{{$item->id}}"  class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                                        <a href="/delete/{{$item->id}}" type="submit" class="btn-floating btn-small waves-effect waves-light red" 
                                                            onclick="return confirm('hapus data ini?')"><i class="material-icons">delete</i></a>                                                         
                                                    </td>                              
                                                </tr>
                                                @endforeach                          
                                            </tbody>
                                        </table>
                                    </div> 
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    </div>
        </div>
    </div>
   
    @include('layouts/footer')
</body>

</html>

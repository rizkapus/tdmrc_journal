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
                                        <div class="col s12 m6 l3">
                                            <label for="users-list-verified">Verified</label>
                                            <div class="input-field">
                                                <select class="form-control" id="users-list-verified">
                                                    <option value="">Any</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l3">
                                            <label for="users-list-role">Role</label>
                                            <div class="input-field">
                                                <select class="form-control" id="users-list-role">
                                                    <option value="">Any</option>
                                                    <option value="User">User</option>
                                                    <option value="Staff">Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l3">
                                            <label for="users-list-status">Status</label>
                                            <div class="input-field">
                                                <select class="form-control" id="users-list-status">
                                                    <option value="">Any</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Close">Close</option>
                                                    <option value="Banned">Banned</option>
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
                                                    <th>id</th>
                                                    <th>username</th>
                                                    <th>name</th>
                                                    <th>last activity</th>
                                                    <th>verified</th>
                                                    <th>role</th>
                                                    <th>status</th>
                                                    <th>edit</th>
                                                    <th>view</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>300</td>
                                                    <td><a href="">dean3004</a>
                                                    </td>
                                                    <td>Dean Stanley</td>
                                                    <td>30/04/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="chip green lighten-5">
                                                            <span class="green-text">Active</span>
                                                        </span>
                                                    </td>
                                                    <td><a href=""><i class="material-icons">edit</i></a></td>
                                                    <td><a href=""><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>300</td>
                                                    <td><a href="">dean3004</a>
                                                    </td>
                                                    <td>Dean Stanley</td>
                                                    <td>30/04/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="chip green lighten-5">
                                                            <span class="green-text">Active</span>
                                                        </span>
                                                    </td>
                                                    <td><a href=""><i class="material-icons">edit</i></a></td>
                                                    <td><a href=""><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>300</td>
                                                    <td><a href="">dean3004</a>
                                                    </td>
                                                    <td>Dean Stanley</td>
                                                    <td>30/04/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="chip green lighten-5">
                                                            <span class="green-text">Active</span>
                                                        </span>
                                                    </td>
                                                    <td><a href=""><i class="material-icons">edit</i></a></td>
                                                    <td><a href=""><i class="material-icons">remove_red_eye</i></a></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- users list ends -->
                    </div>
        </div>
    </div>

    @include('layouts/footer')
</body>
</html>
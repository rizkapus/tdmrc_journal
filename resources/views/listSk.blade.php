<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/data-tables/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/data-tables.css">
</head>
<body>
    @include('layouts/header')

     <!-- BEGIN: Page Main-->
     <div id="">
        <div class="row">
            <div class="breadcrumbs-inline " id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>List SK</span></h5>
                            <ol class="breadcrumbs mb-0">                   
                                <li class="breadcrumb-item"><a href="#">SK</a>
                                </li>
                                <li class="breadcrumb-item active">list SK
                                </li>
                            </ol>
                        </div>
                        
                    </div>
                </div>

                <!--Table-->
                <div class="col s12">              
                    <div class="section section-data-tables">
                        <!-- Page Length Options -->
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">List Journal</h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal Terbit</th>
                                                            <th>Author</th>
                                                            <th>File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>aaaaaa</td>
                                                            <td>1/1/2022</td>
                                                            <td>asdasdas</td>
                                                            <td>file</td>
                                                            <td>
                                                                <a class="btn-floating btn-small waves-effect waves-light"><i class="material-icons">remove_red_eye</i></a>
                                                                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>bbbbbbb</td>
                                                            <td>2/2/2022</td>
                                                            <td>lalalalala</td>
                                                            <td>file</td>
                                                            <td>
                                                                <a class="btn-floating btn-small waves-effect waves-light"><i class="material-icons">remove_red_eye</i></a>
                                                                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>cccccccc</td>
                                                            <td>3/3/2022</td>
                                                            <td>sasasasas</td>
                                                            <td>file</td>
                                                            <td>
                                                                <a class="btn-floating btn-small waves-effect waves-light"><i class="material-icons">remove_red_eye</i></a>
                                                                <a class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal Terbit</th>
                                                            <th>Author</th>
                                                            <th>File</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>              


    @include('layouts/footer')
    <script src="/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendors/data-tables/js/dataTables.select.min.js"></script>
    <script src="/js/scripts/data-tables.js"></script>
</body>
</html>
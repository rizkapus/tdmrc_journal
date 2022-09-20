<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Journal | TDMRC Office</title>
    <link rel="stylesheet" type="text/css" href="/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/data-tables/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="/css/pages/data-tables.css">
    <link rel="shortcut icon" href="/images/logo/usk.png">
</head>
<body>
    @include('layouts/header')
     <!-- BEGIN: Page Main-->
     <div id="">
        <div class="row">
            <div class="breadcrumbs-inline " id="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>List Journal</span></h5>
                            <ol class="breadcrumbs mb-0">                   
                                <li class="breadcrumb-item"><a href="#">E-Journal</a>
                                </li>
                                <li class="breadcrumb-item active">List
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l12">
                    <div id="form-with-validation" class="card card card-default scrollspy">
                        <div class="card-content">
                            <h4 class="card-title">Filter</h4>
                            <form>
                                <div class="row">
                                    <div class="input-field col m4 s6">
                                        <select class="select2 browser-default">
                                            <option value="" disabled selected>Pilih Author</option>
                                            <option value="romboid">Romboid</option>
                                            <option value="trapeze">Trapeze</option>
                                            <option value="triangle">Triangle</option>
                                            <option value="polygon">Polygon</option>
                                        </select>
                                    </div>
                                    <div class="input-field col m4 s6">
                                        <select class="select2 browser-default">
                                            <option value="" disabled selected>Pilih Tahun</option>
                                            <option value="romboid">Romboid</option>
                                            <option value="trapeze">Trapeze</option>
                                            <option value="triangle">Triangle</option>
                                            <option value="polygon">Polygon</option>
                                        </select>
                                    </div>
                                    <div class="input-field col m4 s12">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action">
                                                <i class="material-icons left">send</i> Pilih</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Table-->
                <div class="col s12">              
                    <div class="section section-data-tables">
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
                                                        @foreach ($dataJournal as $item)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$item->nama}}</td>
                                                            <td>{{$item->tanggal_terbit}}</td>
                                                            <td>{{$item->author}}</td>
                                                            <td>
                                                                 <a href="{{asset('files/journal/'.$item->file)}}" target="_blank" >lihat file</a>   
                                                            </td>
                                                            <td>                                                                
                                                                <a href="/editJournal/{{$item->id}}" class="btn-floating btn-small waves-effect waves-light green"><i class="material-icons">edit</i></a>
                                                                <a href="/deleteJournal/{{$item->id}}" type="submit" class="btn-floating btn-small waves-effect waves-light red" 
                                                                    onclick="return confirm('hapus data ini?')"><i class="material-icons">delete</i></a>
                                                            </td>
                                                        </tr>
                                                        
                                                        @endforeach
                                                        
                                                        
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
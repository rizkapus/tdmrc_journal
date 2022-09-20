<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Sk | TDMRC Office</title>
    <link rel="shortcut icon" href="/images/logo/usk.png">
</head>

<body>
    @include('layouts/header')
    <!-- Main page -->
    <div id="">
        <div class="row">
            <div class="breadcrumbs-inline " id="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Upload
                                    SK</span></h5>
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="#">SK</a>
                                </li>
                                <li class="breadcrumb-item active">Upload
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- table -->
            <div class="col s12 ">
                <div id="placeholder" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title">Form Upload SK</h4>
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <select class="select2 browser-default" id="jenis_sk" name="jenis_sk">
                                        <option disabled selected>Pilih Jenis SK</option>
                                        <option value="kegiatan">Kegiatan</option>
                                        <option value="pangkat">Pangkat</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="" id="nama" name="nama" type="text">
                                    <label for="name2">Title</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="" id="tanggal_terbit" name="tanggal_terbit" type="date">
                                    <label for="name2">Tahun</label>
                                </div>
                            </div>
                            <!--file-upload-->
                            <div id="file-upload" class="section">
                                <div class="input-field col">
                                    <p>File</p>   
                                    <br>                                 
                                    <input placeholder="" id="file" name="file" type="file">                                  
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit"
                                        name="action">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @include('layouts/footer')
</body>

</html>

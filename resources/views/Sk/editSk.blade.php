<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sk | TDMRC Office</title>
    <link rel="shortcut icon" href="/images/logo/usk.png">
</head>

<body>
    @include('layouts/header')
    <!-- Main page -->
    <div id="">
        <div class="row">         
            <!-- table -->
            <div class="col s12 ">
                <div id="placeholder" class="card card card-default scrollspy">
                    <div class="card-content">
                        <h4 class="card-title">Form Edit SK</h4>
                        <form action="/updateSk/{{$dt->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <p>Jenis SK</p>
                                    <select class="select2 browser-default" id="jenis_sk" name="jenis_sk" >
                                        <option value="{{$dt->jenis_sk}}">{{$dt->jenis_sk}}</option>
                                        <option value="kegiatan">Kegiatan</option>
                                        <option value="pangkat">Pangkat</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="" id="nama" name="nama" type="text" value="{{$dt->nama}}">
                                    <label for="name2">Title</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="" id="tanggal_terbit" name="tanggal_terbit" type="date" value="{{$dt->tanggal_terbit}}">
                                    <label for="name2">Tahun</label>
                                </div>
                            </div>
                            <!--file-upload-->
                            <div id="file-upload" class="section">
                                <div class="input-field col">
                                    <p>File</p> 
                                    <p>{{$dt->file}}</p> 
                                    <br>                                 
                                    <input placeholder="" id="file" name="file" type="file" value="{{$dt->file}}">                                  
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

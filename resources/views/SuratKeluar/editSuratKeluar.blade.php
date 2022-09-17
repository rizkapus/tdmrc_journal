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
                <!--Main Page-->
                    <div id="">
                        <div class="row">
                            <div class="breadcrumbs-inline " id="breadcrumbs-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col s10 m6 l6 breadcrumbs-left">
                                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Upload Surat</span></h5>
                                            <ol class="breadcrumbs mb-0">                   
                                                <li class="breadcrumb-item"><a href="#">Surat</a>
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
                                        <h4 class="card-title">Form Upload Surat</h4>
                                        <form action="/updateSuratKeluar/{{$dt->id}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="" id="no_surat" name="no_surat" type="text" value="{{$dt->no_surat}}">
                                                    <label for="name2">No Surat</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="" id="pengirim" name="pengirim" type="text" value="{{$dt->penerima}}">
                                                    <label for="name2">Penerima</label>
                                                </div>
                                            </div>                                  
                                           
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="" id="tanggal_surat" name="tanggal_surat" type="date" value="{{$dt->tanggal_surat}}">
                                                    <label for="name2">Tanggal Surat</label>
                                                </div>
                                            </div> 
                                            
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="" id="pengolah" name="pengolah" type="text" value="{{$dt->pengolah}}">
                                                    <label for="name2">Pengolah</label>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input placeholder="" id="disposisi" name="disposisi" type="text" value="{{$dt->disposisi}}">
                                                    <label for="name2">Disposisi</label>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <p>Verifikasi</p>
                                                    <select class="input-field" name="verified" id="verified">             
                                                        <option disabled selected>{{$dt->verified}}</option>
                                                        <option value="1">Sudah Diverifikasi</option>
                                                        <option value="0">Belum Diverifikasi</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <!--file-upload-->
                                            <div id="file-upload" class="section">
                                                <div class="row section">
                                                    <div class="col s12 m4 l3">
                                                        <p>File</p>
                                                        <p>{{$dt->file}}</p>
                                                        <br>
                                                    </div>
                                                    <div class="col s12 m8 l9">
                                                        <input type="file" id="file" name="file" class="dropify" />
                                                    </div>
                                                </div>                                                                
                                            </div>                                            
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
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
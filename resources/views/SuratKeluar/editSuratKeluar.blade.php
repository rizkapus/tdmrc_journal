<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Surat Keluar | TDMRC Office</title>
    <link rel="shortcut icon" href="/images/logo/usk.png">
</head>
<body>
    @include('layouts/header')
                <!--Main Page-->
                    <div id="">
                        <div class="row">                            
                             <!-- table -->
                            <div class="col s12 ">
                                <div id="placeholder" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h4 class="card-title">Form Edit Surat</h4>
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
                                                    <input placeholder="" id="penerima" name="penerima" type="text" value="{{$dt->penerima}}">
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

                                            @if ($user->role_id == 1 || $user->role_id == 3)
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <p>Verifikasi</p>
                                                    <select class="input-field" name="verified" id="verified">             
                                                        <option value="{{$dt->verified}}" >{{$dt->verified  == 1 ? 'sudah verifikasi' : 'belum verifikasi'}}</option>
                                                        <option value="1">Sudah Diverifikasi</option>
                                                        <option value="0">Belum Diverifikasi</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            @endif
                                            
                                            <!--file-upload-->
                                            <div id="file-upload" class="section">
                                                <div class="row section">
                                                    <div class="col s12 m4 l3">
                                                        <p>File</p>
                                                        <p>{{$dt->file}}</p>
                                                        <br>
                                                    </div>
                                                    <div class="col s12 m8 l9">
                                                        <input type="file" id="file" name="file" class="dropify" value="{{$dt->file}}"/>
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
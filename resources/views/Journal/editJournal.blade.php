<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Journal</title>

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
                        <h4 class="card-title">Form Edit Journal</h4>
                        <form action="/updateJournal/{{$dt->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select class="input-field" id="author" name="author" >  

                                            <option disabled selected>Pilih Author</option>
                                            <option value="Syamsidik">Syamsidik</option>
                                            <option value="Muksin">Muksin</option>
                                            <option value="Ella Meilianda">Ella Meilianda</option>
                                            <option value="Yunita Idris">Yunita Idris</option>
                                            <option value="Rina Suryani Oktari">Rina Suryani Oktari</option>
                                            <option value="Saumi Syahreza">Saumi Syahreza</option>
                                            <option value="Alfi Rahman">Alfi Rahman</option>
                                            <option value="Ichsan">Ichsan</option>
                                            <option value="Ibnu Rusydy">Ibnu Rusydy</option>
                                            <option value="Intan Dewi Kumala">Intan Dewi Kumala</option>
                                            <option value="Haekal Arief Haridhi">Haekal Arief Haridhi</option>
                                            <option value="Rizanna Rosemany">Rizanna Rosemany</option>
                                            <option value="Juliana Fisaini">Juliana Fisaini</option>
                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="" id="nama" name="nama" type="text" value="{{$dt->nama}}">
                                    <label for="name2">Title</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 ">
                                    <input placeholder="" id="tanggal_terbit" name="tanggal_terbit" type="date" value="{{$dt->tanggal_terbit}}">
                                    <label for="name2">Tahun</label>
                                </div>
                            </div>
                            <!--file-upload-->
                            <div class="row">
                                <div class="input-field col">
                                    <p>File</p>
                                    <p>{{$dt->file}}</p>  
                                    <br>                                 
                                    <input placeholder="" id="file" name="file" type="file">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn cyan waves-effect waves-light right" type="submit"
                                        name="action">Edit Data
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

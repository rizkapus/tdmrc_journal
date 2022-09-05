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
                        <form>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select class="select2 browser-default">
                                        <option value="" disabled selected>Pilih Jenis SK</option>
                                        <option value="romboid">Romboid</option>
                                        <option value="trapeze">Trapeze</option>
                                        <option value="triangle">Triangle</option>
                                        <option value="polygon">Polygon</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="" id="name2" type="text">
                                    <label for="name2">Title</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="" id="name2" type="text">
                                    <label for="name2">Tahun</label>
                                </div>
                            </div>
                            <!--file-upload-->
                            <div id="file-upload" class="section">
                                <div class="row section">
                                    <div class="col s12 m4 l3">
                                        <p>Upload file</p>
                                    </div>
                                    <div class="col s12 m8 l9">
                                        <input type="file" id="input-file-now" class="dropify"
                                            data-default-file="" />
                                    </div>
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

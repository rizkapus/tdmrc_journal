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
                        <!--card stats start-->
                         <div id="card-stats" class="pt-0">
                            <div class="row">
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">people</i>
                                                    <p>Total Pengunjung</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text">0</h5>
                                                    <p class="no-margin">orang</p>
                                                    <p>Hari ini</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">markunread_mailbox</i>
                                                    <p>Total Surat Masuk</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text">0</h5>
                                                    <p class="no-margin">Surat</p>
                                                    <p>Hari ini</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">email</i>
                                                    <p>Total Surat Keluar</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text">0</h5>
                                                    <p class="no-margin">Surat</p>
                                                    <p>Hari ini</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6 xl3">
                                    <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                                        <div class="padding-4">
                                            <div class="row">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">library_books</i>
                                                    <p>Total Journal Berafiliasi</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0 white-text">0</h5>
                                                    <p class="no-margin">Journal</p>
                                                    <p>dalam 5 tahun</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card stats end-->

                        <!--yearly & weekly revenue chart start-->
                        <div id="sales-chart">
                            <div class="row">
                                <div class="col s12 ">
                                    <div id="revenue-chart" class="card animate fadeUp">
                                        <div class="card-content">
                                            <h4 class="header mt-0">
                                                REVENUE FOR 2020
                                                <span class="purple-text small text-darken-1 ml-1">
                                                    <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                                                <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a>
                                            </h4>
                                            <div class="row">
                                                <div class="col s12">
                                                    <div class="yearly-revenue-chart">
                                                        <canvas id="thisYearRevenue" class="firstShadow" height="150"></canvas>
                                                        <canvas id="lastYearRevenue" height="150"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--yearly & weekly revenue chart end-->


    @include('layouts/footer')
    <script src="/js/scripts/dashboard-ecommerce.js"></script>
</body>
</html>
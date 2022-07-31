<?php
?>
<html>
    <head>
        <title>Portal Data Pengukuran</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./logo-polinema.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

        <style>
            h3 {
                margin-top: 50px;
            }
            .navbar, .container_main, .footer-info {
                /*color: #3e2723!important;*/
            }
            .navbar {
                padding: 20px 200px!important;
            }
            .container_main {
                padding: 0 200px;
                margin: 0 auto!important;
            }
            .container_value {
                margin: 30px auto;
            }
            .second_row {
                margin-top: 1em!important;
            }
            .second_row .card {
                width: 100% !important;
            }
            .footer-info {
                padding: 50px 200px;
                background-color: #f5f5f5;
            }
            @media screen and (max-width: 768px) {
                .navbar {
                    padding: 30px!important;
                }
                .container_main {
                    padding: 10px!important;
                }
                .card {
                    margin-bottom: 30px;
                }
                .footer-info {
                    padding: 50px 30px;
                }
                .footer-info img {
                    margin-bottom: 30px;
                }
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" style="width: 100%!important;" href="#">Portal Data Pengukuran</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Credit</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container_main container-fluid">
            <div class="container-fluid container_value">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="dataAGraph">
                                    <!-- Data A Brief -->
                                </div>
                                <canvas id="chart1" style="width:100%"></canvas>
                            </div>
                            <div class="card-footer">
                                Live Graph Salinity
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="ajaxpopulate"></div>
                                <canvas id="chart2" style="width:100%"></canvas>
                            </div>
                            <div class="card-footer">
                                Live Camera 2
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row second_row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <!--<img src="..." class="card-img-top" alt="...">-->
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor Salinity</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor A</h6>
                                <div id="dataABrief">
                                    <!-- Data A Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor Salinity</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor B</h6>
                                <div id="dataBBrief">
                                    <!-- Data B Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalB">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor Suhu</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor A</h6>
                                <div id="dataCBrief">
                                    <!-- Data C Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalC">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row second_row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor Suhu</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor B</h6>
                                <div id="dataDBrief">
                                    <!-- Data D Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalD">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor pH</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor A</h6>
                                <div id="dataEBrief">
                                    <!-- Data E Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalE">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor pH</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor B</h6>
                                <div id="dataFBrief">
                                    <!-- Data F Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalF">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row second_row">
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor UV</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor A</h6>
                                <div id="dataGBrief">
                                    <!-- Data G Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalG">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Sensor UV</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Sensor B</h6>
                                <div id="dataHBrief">
                                    <!-- Data H Brief -->
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalH">
                                    Lihat History Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Sensor DHT22</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-muted">Sensor A</h5>
                            <table class="table" id="dataA">
                                <!-- data sensor A -->
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Sensor DHT22</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-muted">Sensor B</h5>
                            <table class="table" id="dataB">
                                <!-- data sensor B -->
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalC" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Sensor DHT22</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5 class="text-muted">Sensor C</h5>
                            <table class="table" id="dataC">
                                <!-- data sensor C -->
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Sensor pH</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-muted">Sensor A</h5>
                        <table class="table" id="dataD">
                            <!-- data sensor D -->
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Sensor pH</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-muted">Sensor B</h5>
                        <table class="table" id="dataE">
                            <!-- data sensor E -->
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalF" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Sensor pH</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-muted">Sensor C</h5>
                        <table class="table" id="dataF">
                            <!-- data sensor F -->
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalG" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Sensor Soil Moisture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-muted">Sensor A</h5>
                        <table class="table" id="dataG">
                            <!-- data sensor G -->
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Sensor Soil Moisture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-muted">Sensor B</h5>
                        <table class="table" id="dataH">
                            <!-- data sensor H -->
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalI" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Sensor Soil Moisture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-muted">Sensor C</h5>
                        <table class="table" id="dataI">
                            <!-- data sensor I -->
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="footer-info container-fluid" id="footer">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <img height="100px" src="./logo-polinema.png">
                </div>
                <div class="col-sm-12 col-md-9">
                    <h4>Rancang Bangun Sistem Kontrol Penentu Kualitas Mutu Sawi Asin Menggunakan Logika Fuzzy</h4>
                    Dikembangkan oleh Muchammad Noorfahmi Arrasyid
                </div>
            </div>
        </div>



        <script>
            /*var xValues = [100,200,300,400,500,600,700,800,900,1000];
            var datasetA = testing;

            new Chart("chart1", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        data: datasetA,
                        borderColor: "red",
                        fill: false
                    }, {
                        data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                        borderColor: "green",
                        fill: false
                    }, {
                        data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                        borderColor: "blue",
                        fill: false
                    }]
                },
                options: {
                    legend: {display: false}
                }
            });*/

        </script>
        <script src="./function.js"></script>
        <script src="./graph.js"></script>
    </body>
</html>

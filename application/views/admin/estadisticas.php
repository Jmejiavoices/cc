<!doctype html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Estadisticas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url(); ?>pages/css/pages.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.2/chart.js"></script>
    <?php
    if (!empty($css)) {
        foreach ($css as $val) {
            echo $val;
        }
    }
    ?>
    <script>
        var BASE_URL = '<?php echo base_url(); ?>'
    </script>

</head>

<body>
    <nav class="page-sidebar" data-pages="sidebar">

        <!-- BEGIN SIDEBAR MENU HEADER-->
        <div class="sidebar-overlay-slide from-top" id="appMenu">
            <div class="row">
                <div class="col-xs-6 m-t-20 no-padding">
                    <a href="<?php echo base_url('admin/dashboard/logout') ?>" class="p-l-10 detailed"><img src="<?php echo base_url(); ?>assets/img/login/logout.png" width="10%" alt="socail">
                        Cerrar Sesión
                    </a>
                </div>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown sidebar-overlay-slide from-top" role="menu">

                    <a href="<?php echo base_url('admin/dashboard/logout') ?>" class="clearfix bg-master-lighter dropdown-item">
                        <span class="pull-left">Cerrar Sesion</span>
                        <span class="pull-right"><i class="pg-power"></i></span>
                    </a>

                </div>
            </div>
        </div>
        <div class="sidebar-header">
            <img src="<?php echo base_url(); ?>assets/img/logo/127.0.0.1-blanco.png" alt="logo" class="brand" data-src="<?php echo base_url(); ?>assets/img/logo/127.0.0.1-blanco_2x.png" data-src-retina="<?php echo base_url(); ?>assets/img/logo/127.0.0.1-blanco.png" width="78" height="22">
            <div class="sidebar-header-controls">
                <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i></button>
                <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i></button>
            </div>
        </div>
        <!-- END SIDEBAR MENU HEADER-->
        <!-- START SIDEBAR MENU -->
        <div class="sidebar-menu">
            <!-- BEGIN SIDEBAR MENU ITEMS-->
            <ul class="menu-items">
                <li class="m-t-30 ">
                    <a href="http://localhost/cc/admin/dashboard" class="detailed">
                        <span class="title">Clientes</span>
                        <span class="details">CRUD</span>
                    </a>
                    <span class="icon-thumbnail"><i class="fa fa-users"></i></span>
                </li>
                <li class="">
                    <a href="http://localhost/cc/admin/estadisticas" class="detailed">
                        <span class="title">Estadisticas</span>
                        <span class="details">Clientes Registrados</span>
                    </a>
                    <span class="bg-success icon-thumbnail"><i class="fa fa-dashboard"></i></span>
                </li>
            </ul>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- END SIDEBAR MENU -->
    </nav>
    <!-- START HEADER -->
    <div class="page-container ">
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
            </a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline   ">
                    <img src="<?php echo base_url(); ?>assets/img/127.0.0.1.png" alt="logo" data-src="<?php echo base_url(); ?>assets/img/127.0.0.1.png" data-src-retina="<?php echo base_url(); ?>assets/img/127.0.0.1.png" width="78" height="22">
                </div>


            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                    <span class="semi-bold">Bienvenido </span> <span class="text-master"></span>

                </div>
                <div class="dropdown pull-right d-lg-block d-none">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline">
                            <img src="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" alt="" data-src="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" data-src-retina="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" width="32" height="32"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">

                        <a href="<?php echo base_url('admin/estadisticas/logout') ?>" class="clearfix bg-master-lighter dropdown-item">
                            <span class="pull-left">Cerrar Sesion</span>
                            <span class="pull-right"><i class="pg-power"></i></span>
                        </a>

                    </div>
                </div>
                <!-- END User Info-->

            </div>
        </div>
        <!-- END HEADER -->
        <!--  <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="inner"> -->
        <!-- START BREADCRUMB -->
        <!--         <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Estadísticas</li>
                    </ol>  -->
        <!-- END BREADCRUMB -->
        <!--        </div>
            </div>
    </div> -->

    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->


        <div class=" container-fluid   container-fixed-lg card">
            <!-- START card -->
            <div class="card-transparent" >
                <div class="card-header">
                    <div class="card-title">Correos Registrados.
                    </div>
                </div>
                <div class="card-body d-flex flex-wrap padding-10 sm-padding-10">
                    <div class="col-lg-4 no-padding">
                        <div class="p-r-30">
                            <h3>Usuarios | Tipo de dominios.</h3>
                            <br>
                            <p>
                            </p>
                            <br>
                            <div class="inline">
                                <p class="small hint-text">
                                    <!--  <br> <a href="http://omnipotent.net/jquery.sparkline/#s-about">View the official
										documentation</a>  -->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-transparent">
                            <div class="card-header  ">
                                <div class="card-controls">
                                    <ul>
                                        <li><a href="#" class="card-collapse" data-toggle="collapse"><i class="pg-arrow_maximize"></i></a>
                                        </li>
                                        <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="pg-refresh_new"></i></a>
                                        </li>
                                        <li><a href="#" class="card-close" data-toggle="close"><i class="pg-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <canvas id="myChartd" width="200" height="150" style="display: inline-block; width: 200px; height: 150px; vertical-align: top;"></canvas>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <canvas id="myChartb" width="656" height="200" style="display: inline-block; width: 656px; height: 200px; vertical-align: top;"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END card -->
            </div>
            <!-- END CONTAINER FLUID -->
        </div>




        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->

        <div class=" container-fluid  container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <p class="small no-margin pull-left sm-pull-reset">
                    <span class="hint-text">Copyright &copy; 2022 </span>
                    <span class="font-montserrat">Voices</span>.
                    <span class="hint-text">Todos los derecos resevados. </span>
                    <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terminos de uso</a> <span class="muted">|</span> <a href="#" class="m-l-10">Políticas de privacidad</a></span>
                </p>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
    </div>







    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/highcharts/code/highcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/highcharts/code/modules/exporting.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/highcharts/code/modules/export-data.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/scripts.js?cd=<?php echo date('YmdHis'); ?>" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <?php
    if (!empty($js)) {
        foreach ($js as $val) {
            echo $val;
        }
    }
    ?>
    <script src="<?php echo base_url(); ?>pages/js/pages.js"></script>
    <?php
    if (is_array($js_page) && !empty($js_page)) {
        foreach ($js_page as $val) {
            echo $val;
        }
    } else if (!empty($js_page)) {
        echo $js_page;
    }
    ?>
</body>







<script>
    var ctx = document.getElementById("myChartd").getContext("2d");
    var myChartd = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ['gmail.com', 'outlook.com', 'yahoo.com', 'voices.com.mx'],
            datasets: [{
                label: 'Num datos',
                data: [10, 9, 15, 30, ],
                backgroundColor: [
                    'rgb(66, 134, 244',
                    'rgb(74, 135, 72',
                    'rgb(229, 89, 50',
                    'rgb(255, 195, 0',

                ]

            }]


        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });







    var ctx = document.getElementById("myChartb").getContext("2d");
    var myChartb = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ['gmail.com', 'outlook.com', 'yahoo.com', 'voices.com.mx'],
            datasets: [{
                label: 'Num datos',
                data: [10, 9, 15, 30, ],
                backgroundColor: [
                    'rgb(66, 134, 244',
                    'rgb(74, 135, 72',
                    'rgb(229, 89, 50',
                    'rgb(255, 195, 0',

                ]

            }]


        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</html>
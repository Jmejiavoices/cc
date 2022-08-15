<!doctype html>
<html lang="es">

<head>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Alta Usuarios</title>
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
        <div class="sidebar-header">
            <img src="<?php echo base_url(); ?>assets/img/127.0.0.1-blanco.png" alt="logo" class="brand" data-src="<?php echo base_url(); ?>assets/img/127.0.0.1-blanco.png" data-src-retina="<?php echo base_url(); ?>assets/img/127.0.0.1-blanco.png" width="78" height="22">
            <div class="sidebar-header-controls">
                <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
                </button>
                <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fa-dot-circle"></i>
                </button>
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
                    <span class="icon-thumbnail"><i class="fa fa-dashboard"></i></span>
                </li>
                <li class="">
                    <a href="http://localhost/cc/admin/altas" class="detailed">
                        <span class="title">Altas Usuarios</span>
                        <span class="details">Login</span>
                    </a>
                    <span class="bg-success icon-thumbnail"><i class="pg-note"></i></span>
                </li>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                <li class="m-t-30">
                    <a href="<?php echo base_url('admin/dashboard/logout') ?>" class="detailed">
                        <span class="pull-left">Cerrar Sesion</span>
                        <span class="pull-right"><i class="pg-power"></i></span>
                    </a>
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
                            <img src="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" alt="" data-src="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" data-src-retina="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" width="32" height="32"> </span>
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


        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper ">
            <!-- START PAGE CONTENT -->


            <div class="modal-content card card-default first">
                <form action="javascript:;" id="form_create_bl" class="ropzone no-margin dz-clickable" data-parsley-validate method="post">
                    <div class="modal-body">
                        <div id="div_errors_create_blacklist"></div>
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group form-group-default card-title">
                                    <label>Carga datos masivos</label>
                                    <input name="file_new" id="file_new" type="file" accept=".csv" required="true" class="form-control col-sm-12" placeholder="Nombre archivo" data-parsley-error-message="Ingresa base del blacklist" data-parsley-errors-container="#div_errors_create_blacklist">

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-cons btn-primary" id="submit" name="submit">Cargar</button><br><br>
                        <div class="row">
                            <div class="col-sm-12 text-left">


                            </div>

                            <label><small>Cinco columnas, con encabezados, en formato CSV, ejemplo:</small></label>

                        </div>
                        <img class="img-fluid" style="height: 150px;" src="<?php echo base_url(); ?>assets/img/blacklist/bl_image_sms.png">
                    </div>
                    <div class="col-md-7">

                        <div class="padding-10 sm-padding-5">

                            <div class="card card-default">

                                <div class="card-body">
                                    <span style=" text-transform: uppercase;
                                                        font-weight: 500;
                                                        font-family: 'Montserrat';
                                                        font-size: 10.5px;
                                                        letter-spacing: 0.06em;            
                                                        color: rgba(44, 44, 44, 0.35);">Tabla de Datos</span>
                                    <form id="form_numberColum" data-parsley-validate="" novalidate="">
                                        <div class="row">
                                            <div class="">
                                                <div class="table-responsive">
                                                    <table class="table table-striped dataTable no-footer dtr-inline collapsed display" id="tbl-data">

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table table-striped dataTable no-footer dtr-inline collapsed display" id="tbl-data">

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-left">


                    </div>

                </form>

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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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




</html>
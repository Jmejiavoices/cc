<!doctype html>
<html lang="es">

<head>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Registro Usuarios</title>
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
    <!-- INICIA MENU -->
    <nav class="page-sidebar" data-pages="sidebar">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <img src="<?php echo base_url(); ?>assets/img/logo/127.0.0.1-blanco.png" alt="logo" class="brand" data-src="<?php echo base_url(); ?>assets/img/logo/127.0.0.1-blanco_2x.png" data-src-retina="<?php echo base_url(); ?>assets/img/logo/127.0.0.1-blanco.png" width="78" height="22">
                <div class="sidebar-header-controls">
                    <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
                    </button>
                    <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
                    </button>
                </div>
            </div>
            <!-- BEGIN SIDEBAR MENU ITEMS-->
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
            <ul class="menu-items">
                <li class="m-t-30 ">
                    <a href="http://localhost/cc/admin/dashboard" class="detailed">
                        <span class="title">Clientes</span>
                        <span class="details">CRUD</span>
                    </a>
                    <span class="bg-success icon-thumbnail"><i class="fa fa-users"></i></span>
                </li>
                <li class="">
                    <a href="http://localhost/cc/admin/estadisticas" class="detailed">
                        <span class="title">Estadisticas</span>
                        <span class="details">Clientes Registrados</span>
                    </a>
                    <span class="icon-thumbnail"><i class="fa fa-dashboard"></i></span>
                </li>
            </ul>

            <div class="clearfix"></div>
        </div>
    </nav>
    <!-- TERMINA MENU -->
    <!-- INICIA HEADER -->
    <div class="page-container ">
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
            </a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline   ">
                    <img src="<?php echo base_url(); ?>assets/img/logo/127.0.0.1.png" alt="logo" data-src="<?php echo base_url(); ?>assets/img/logo/127.0.0.1_2x.png" data-src-retina="<?php echo base_url(); ?>assets/img/logo/127.0.0.1.png" width="110" height="25" style="margin-right: -15px;">
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
                            <img src="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" alt="" data-src="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" data-src-retina="<?php echo base_url(); ?>assets/img/profiles/avatardemo_small2x.jpg" width="32" height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="<?php echo base_url('admin/dashboard/logout') ?>" class="clearfix bg-master-lighter dropdown-item">
                            <span class="pull-left">Cerrar Sesion</span>
                            <span class="pull-right"><i class="pg-power"></i></span>
                        </a>
                    </div>
                </div>
                <!-- END User Info-->
            </div>
        </div>
        <!-- TERMINA HEADER -->
        <!-- EMPIEZA CONTENIDO DE PAGINA -->
        <div class="page-content-wrapper ">
            <div class="content sm-gutter">
                <div class="container-fluid padding-10 sm-padding-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Usuarios</div>
                        </div>
                        <div class="card-body">
                            <div id="table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-md-12 p-b-15 text-right">
                                        <div class="dt-buttons btn-group">
                                            <button class="btn btn-secondary btn-default" tabindex="0" aria-controls="records" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span><i class="fa fa-plus" title="Agregar"></i></span></button>
                                            <button class="btn btn-secondary btn-default" tabindex="0" aria-controls="records" type="button"><span><i class="fa fa-refresh" title="Actualizar"></i></span></button>
                                            <button class="btn btn-secondary btn-default" tabindex="0" aria-controls="records" type="button" data-bs-toggle="modal" data-bs-target="#modal_carga"><span><i class="fa fa-list" title="Agregar"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">


                                </div>
                                <div class="table-scrollable">
                                    <table class="table table-striped dataTable no-footer dtr-inline collapsed display dataTables_wrapper dt-bootstrap4 no-footer" id="records">

                                        <thead>

                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Materno</th>
                                                <th>Edad</th>
                                                <th>Email</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ALTA MODAL -->
            <div class="modal fade stick-up" id="exampleModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header clearfix">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                            </button>
                            <h4 class="p-b-5"><span class="semi-bold">Nuevo</span> Cliente</h4>

                        </div>
                        <div class="modal-body">
                            <div id="div_errors_create_blacklist"></div>
                            <form method="post" id="form" action="javascript:;" data-parsley-validate>
                                <div class="form-group">
                                    <label for="">Nombre*</label>
                                    <input type="text" id="name" class="form-control parsley-error" placeholder="Nombre(s)" required="true" data-parsley-error-message="Ingresa nombre Completo" data-parsley-errors-container="#div_errors_create_blacklist">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellido Paterno*</label>
                                    <input type="text" id="ap" class="form-control" placeholder="Apellido Paterno" required="true" data-parsley-error-message="Ingresa nombre Completo" data-parsley-errors-container="#div_errors_create_blacklist">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellido Materno*</label>
                                    <input type="text" id="am" class="form-control" placeholder="Apellido Materno" required="true" data-parsley-error-message="Ingresa nombre Completo" data-parsley-errors-container="#div_errors_create_blacklist">
                                </div>
                                <div class="form-group">
                                    <label for="">Edad*</label>
                                    <input type="text" id="edad" maxlength="3" minlength="1" class="form-control" placeholder="Edad" required="true" data-parsley-error-message="Ingresa nombre Completo" data-parsley-errors-container="#div_errors_create_blacklist">
                                </div>
                                <div class="form-group">
                                    <label for="">Correo*</label>
                                    <input type="email" id="email" class="form-control" placeholder="Correo Electrónico" required="true" data-parsley-error-message="Ingresa nombre Completo" data-parsley-errors-container="#div_errors_create_blacklist" autofocus>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                            <button type="button" class="btn btn-primary" id="add">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CARGA MASIVA MODAL -->
            <div class="modal fade stick-up" id="modal_carga" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header clearfix ">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                            </button>
                            <h4 class="p-b-5"><span class="semi-bold">Carga clientes</span> Masiva</h4>
                        </div>
                        <form action="javascript:;" id="form_create_bl" data-parsley-validate>
                            <div class="modal-body">
                                <div id="div_errors_create_blacklist"></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-group-default">
                                            <label>Base</label>
                                            <input name="file_new" id="file_new" type="file" accept=".csv" required="true" data-parsley-error-message="Ingresa base del blacklist" data-parsley-errors-container="#div_errors_create_blacklist">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <label><small>5 Columnas, Con encabezados, En formato CSV, ejemplo:</small></label>
                                        <img class="img-fluid" style="height: 80px;" src="<?php echo base_url(); ?>assets/img/cargam/cargam.png">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-cons btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-cons btn-primary" id="submite" name="submite" value="submite">Agregar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- UPDATE MODAL-->
            <div class="modal fade stick-up" id="edit_modal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header clearfix">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                            </button>
                            <h4 class="p-b-5"><span class="semi-bold">Actualiza tus</span> Datos</h4>
                        </div>
                        <div class="modal-body">
                            <form action="javascript:;" method="post" id="edit_form" data-parsley-validate>
                                <input type="hidden" id="edit_record_id" name="edit_record_id" value="">
                                <div class="form-group">
                                    <label for="">Nombre*</label>
                                    <input type="text" id="edit_name" class="form-control" data-parsley-trigger="change" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellido Paterno*</label>
                                    <input type="text" id="edit_ap" class="form-control" data-parsley-trigger="change" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Apellido Materno*</label>
                                    <input type="text" id="edit_am" class="form-control" data-parsley-trigger="change" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Edad*</label>
                                    <input type="text" id="edit_edad" class="form-control" data-parsley-trigger="change" required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Correo*</label>
                                    <input type="email" id="edit_email" class="form-control" data-parsley-trigger="change" required="Ncesita correo">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="update">Guardar Cambios</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INICIA COPYRIGHT -->
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
        </div>
    </div>
    <!-- TERMINA CONTENIDO DE PAGINA -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/dashboard.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js?cd=<?php echo date('YmdHis'); ?>" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <!-- FUNCIONES FECTH, INSERTAR, EDITAR, ELIMINAR DE BASE DE DATOS -->
    <script>
        $(document).on("click", "#add", function(e) {
            e.preventDefault();
            var name = $("#name").val();
            var ap = $("#ap").val();
            var am = $("#am").val();
            var edad = $("#edad").val();
            var email = $("#email").val();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
            })
            if (name == "" || ap == "" || am == "" || edad == "" || email == "") {
                swalWithBootstrapButtons.fire(
                    '¡LLena todos los campos!',
                    ' :(',
                    'error'
                );
            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>insert",
                    type: "post",
                    dataType: "json",
                    data: {
                        name: name,
                        ap: ap,
                        am: am,
                        edad: edad,
                        email: email,
                    },
                    success: function(data) {
                        if (data.responce == "success") {
                            $('#exampleModal').modal('hide');
                            $('#records').DataTable().destroy();
                            fetch();
                            swalWithBootstrapButtons.fire(
                                '¡Cliente Agregado!',
                                'Good Job :)',
                                'success'
                            );
                        } else {
                            swalWithBootstrapButtons.fire(
                                '¡Cliente no Agregado!',
                                'Verifica los datos :(',
                                'error'
                            );
                        }
                    }
                });
                $("#form")[0].reset();
            }
        });

        //FUNCION FETCH MUESTRA REGISTRO EN TABLA//
        function fetch() {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
            })
            $.ajax({
                url: "<?php echo base_url(); ?>fetch",
                type: "post",
                dataType: "json",
                success: function(data) {
                    if (data.responce == "success") {
                        var i = "1";

                        $('#records').DataTable({
                            "data": data.posts,
                            dom: "<'row'<'col-md-6 col-sm-12 p-l-30'l><'col-md-6 col-sm-12'f><'col-sm-12'tr>>" +
                                "<'row'<'col-sm-12 col-md-4'i><'ol-sm-12 col-md-4'p>>",
                            buttons: [
                                'copy', 'csv', 'excel',
                            ],
                            "columns": [{
                                    "render": function() {
                                        return a = i++;
                                    }
                                },
                                {
                                    "data": "name"
                                },
                                {
                                    "data": "ap"
                                },
                                {
                                    "data": "am"
                                },
                                {
                                    "data": "edad"
                                },
                                {
                                    "data": "email"
                                },
                                {

                                    "render": function(data, type, row, meta, buttons) {
                                        var a = `
										<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="javascript:;" onclick="Users.update('update','417')" value="${row.id}" id="edit">Editar</a>
                                        <a class="dropdown-item" href="javascript:;" onclick="Users.update('update','417')" value="${row.id}" id="del">Eliminar</a>
                                        </div>
	                                         `;
                                        return a;
                                    }
                                }
                            ]
                        });
                    } else {
                        swalWithBootstrapButtons.fire({
                            title: '¡No hay Clientes Registrados!',
                            text: "Agrega Nuevo Cliente",
                            icon: 'warning',
                            confirmButtonText: 'Si, Agregar',
                        }).then((result) => {
                            $('#exampleModal').modal('show');
                        })
                    }
                }
            });
        }
        fetch();
        // TERMINA FUNCION FETCH MUESTRA REGISTRO EN TABLA//

        //FUNCION ELIMINAR REGISTRO//
        $(document).on("click", "#del", function(e) {
            e.preventDefault();

            var del_id = $(this).attr("value");

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: '¿Quiere eliminar al Cliente?',
                text: "¡No se podrá recuperar después!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'No, ¡Cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {


                    $.ajax({
                        url: "<?php echo base_url(); ?>delete",
                        type: "post",
                        dataType: "json",
                        data: {
                            del_id: del_id

                        },
                        success: function(data) {
                            if (data.responce == "success") {
                                $('#records').DataTable().destroy();
                                fetch();
                                swalWithBootstrapButtons.fire(
                                    '¡Cliente Eliminado!',
                                    'Good Job :)',
                                    'success'

                                );
                            } else

                                console.log(data);

                        }
                    });


                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {

                }
            })










        });
        //TERMINA FUNCION ELIMINAR REGISTRO//

        //FUNCION EDITAR REGISTRO//
        $(document).on("click", "#edit", function(e) {
            e.preventDefault();

            var edit_id = $(this).attr("value");
            $.ajax({
                url: "<?php echo base_url(); ?>edit",
                type: "post",
                dataType: "json",
                data: {
                    edit_id: edit_id

                },
                success: function(data) {
                    if (data.responce == "success") {
                        $('#edit_modal').modal('show');
                        $("#edit_record_id").val(data.post.id)
                        $("#edit_name").val(data.post.name)
                        $("#edit_ap").val(data.post.ap)
                        $("#edit_am").val(data.post.am)
                        $("#edit_edad").val(data.post.edad)
                        $("#edit_email").val(data.post.email)
                    } else {
                        toastr["error"](data.message);

                    }

                    console.log(data);

                }
            });

        });
        //TERMINA FUNCION EDITAR REGISTRO//


        //FUNCION ACTUALIZAR REGISTRO EN BASE DE DATOS//
        $(document).on("click", "#update", function(e) {
            e.preventDefault();
            var edit_record_id = $("#edit_record_id").val();
            var edit_name = $("#edit_name").val();
            var edit_ap = $("#edit_ap").val();
            var edit_am = $("#edit_am").val();
            var edit_edad = $("#edit_edad").val();
            var edit_email = $("#edit_email").val();

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
            })


            if (edit_record_id == "" || edit_name == "" || edit_ap == "" || edit_am == "" || edit_edad == "" || edit_email == "") {

                swalWithBootstrapButtons.fire(
                    'Todos los campos deben',
                    'estar llenos :(',
                    'error'
                );

            } else {
                $.ajax({
                    url: "<?php echo base_url(); ?>update",
                    type: "post",
                    dataType: "json",
                    data: {

                        edit_record_id: edit_record_id,
                        edit_name: edit_name,
                        edit_ap: edit_ap,
                        edit_am: edit_am,
                        edit_edad: edit_edad,
                        edit_email: edit_email


                    },
                    success: function(data) {
                        if (data.responce == "success") {
                            $('#edit_modal').modal('hide');
                            $('#records').DataTable().destroy();
                            fetch();

                            swalWithBootstrapButtons.fire(
                                '¡Registro Actualizado!',
                                'con éxito',
                                'success'

                            );
                        } else {
                            swalWithBootstrapButtons.fire(
                                '¡No se puede Actualizar tu Registro!',
                                'verifica tus datos :(',
                                'error'

                            );
                        }
                    }
                });



                //funcion para actualizar datos en DB//


            }


        });
        //TERMINA FUNCION ACTUALIZAR REGISTRO EN BASE DE DATOS//
    </script>
    <!-- TERMINA FUNCIONES DATOS FECTH, INSERTAR, EDITAR, ELIMINAR DE BASE DE DATOS -->

</body>

</html>
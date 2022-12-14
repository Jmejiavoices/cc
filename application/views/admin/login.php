<!DOCTYPE html>
<html>

<!-- inicio del header -->

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>CRUD</title>
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
  <script type="text/javascript">
    window.onload = function() {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
  </script>
</head>
<!-- fin del header -->






<body class="fixed-header ">
  <div class="login-wrapper ">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic">
      <!-- START Background Pic-->
      <img src="<?php echo base_url(); ?>assets/img/login/127.0.0.1.png" data-src="<?php echo base_url(); ?>assets/img/login/127.0.0.1.png" data-src-retina="<?php echo base_url(); ?>assets/img/login/127.0.0.1.png" alt="" class="lazy">
      <!-- END Background Pic-->
      <!-- START Background Caption-->
      <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
        <h2 class="semi-bold text-white">
          "No importa lo lento que vayas mientras que no pares"</h2>
        <p class="small">
          Copyright ??2022 Voices.
        </p>
      </div>
      <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->
    
    <div class="login-container bg-white">
      <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
        <img src="<?php echo base_url(); ?>assets/img/login/logo-voices_2x.png" alt="logo" data-src="<?php echo base_url(); ?>assets/img/login/logo-voices_2x.png" data-src-retina="<?php echo base_url(); ?>assets/img/login/logo-voices_2x.png" width="100%" height="100%">
        <p class="p-t-35">Inicia Sesi??n</p>
        <!-- START Login Form -->
        
        <form id="form-login" class="p-t-15" role="form" action="<?php echo site_url('admin/login/verify')?>" method="post">
          <!-- START Form Control-->
          <div class="form-group form-group-default">
            <label>Usuario</label>
            <div class="controls">
              <input type="text" name="username" id="username" placeholder="Usuario" class="form-control" required>
            </div>
          </div>
          <!-- END Form Control-->
          <!-- START Form Control-->
          <div class="form-group form-group-default">
            <label>Contrase??a</label>
            <div class="controls">
              <input type="password" class="form-control" name="password" id="password" placeholder="*********" required>
            </div>
          </div>
          <!-- START Form Control-->
        <!--  <div class="row">
            <div class="col-md-6 no-padding sm-p-l-10">

            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-end">
              <a href="#" class="text-info small">Recuperar Contrase??a</a>
            </div>
          </div> -->
          <!-- END Form Control-->

          <input class="btn btn-primary btn-cons m-t-10" type="submit" name="submit" value="Inicia Sesi??n "></input>
        </form>
        
        <!--END Login Form-->
        <div class="sm-pull-bottom">
          <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
            <div class="col-sm-9 no-padding m-t-10">
              <p>
                <small>
                  <?php echo $this->lang->line('iniciodesesion_necesitas_ayuda'); ?>&nbsp;&nbsp;&nbsp;
                  <a href="mailto:ayuda@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-info">ayuda@<?php echo $_SERVER['HTTP_HOST']; ?></a>
                  <?php if (in_array($_SERVER['HTTP_HOST'], array('127.0.0.1', 'desarrollo.sms-voices.com.mx', 'sms-voices.com.mx', 'beta.sms-voices.com.mx'))) : ?>
                    &nbsp;&nbsp;<a href="docs/TyC.pdf" class="text-info" target="_BLANK"></a>
                  <?php endif; ?>
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Login Right Container-->
  </div>








  <!-- BEGIN VENDOR JS -->
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
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>pages/js/pages.min.js"></script>
  <!-- END VENDOR JS -->





  <!-- Funcion de Login -->
  <script>
    $(function() {
      $('#form-login').validate()
    })
  </script>
  <!--final de la Funcion de Login -->

</body>

</html>
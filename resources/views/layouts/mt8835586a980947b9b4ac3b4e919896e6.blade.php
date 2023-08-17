<!DOCTYPE html>
<html lang="<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $title }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/css/stylelogin.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
@section('styles')
    @show</head>
<body class="hold-transition login-page" style="background: url(https://riss2018.blob.core.windows.net/2018/Logotipos%20sistema/065fcbe3-d54f-469e-8a0b-44e43f2308ac_bacground4.png) no-repeat center center">
<div class="login-box">
     <div class="login-logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->      
        <span class="logo-mini">        
          <img src="<?php echo URL::to("/") ?>/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6/segalmex/pages/examples/../../dist/img/Logo.png" style="width: 100%;margin-top:-31px;"></span> 
    </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <div class="col-12 user-img">
    <img src="<?php echo URL::to("/") ?>/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6/segalmex/pages/examples/../../dist/img/usuario.png" class="img-responsive img-circle">
    </div>
        <div>@section('DZLOGEO')
    @show</div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
@section('scripts')
    @show</body>
</html>

<!DOCTYPE html>
<html lang="<?php echo Lang::get('resourceff2b12513d1a44948a7e7fbabde0697a.msgLanguageIdentifier'); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $title }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.css" rel="stylesheet" type="text/css">

  
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <div class="logo">@section('titsystem')
    @show</div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
        <!-- mini logo for sidebar mini 50x50 pixels -->      
        <span class="logo-mini" style="margin-left: 60px;line-height: 60px;"><img src="<?php echo URL::to("/") ?>/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6/segalmex/dist/img/Logo_Segalmex.png"></span> 
    
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">@section('dzMenuUser')
    @show</ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">@section('dzMenuNavigation')
    @show</ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
      <h1>@section('dzTitleEncabezadoPagina')
    @show</h1>
     <ol class="breadcrumb">
        <li class="active">@section('nuevoregistro')
    @show</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          

         
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          
          <!-- /.box -->

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
             
                    <div class="row">
                      
                        <div class="col-lg-12">
                          <div>@section('formbusqueda')
    @show</div>
                          <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        
                        <!-- /.col-lg-6 -->
                      </div>


             
              <!-- tools box -->
              
              <!-- /. tools -->
            </div>
            <div class="box-body">@section('dzContenidoPag')
    @show</div>
            
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">@section('footer')
    @show</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">@section('RecentActivity')
    @show</aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/raphael/raphael.min.js"></script>
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/moment/min/moment.min.js"></script>
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/js/demo.js"></script>
<!-- AdminLTE icons  -->
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/js/fontawesome.js"></script>
<script src="{{ URL::asset('/') }}/Content/ae640ef2cb6c4bbdbdd11ef6f38d14b6//segalmex/dist/js/solid.js"></script>
@section('scripts')
    @show</body>
</html>

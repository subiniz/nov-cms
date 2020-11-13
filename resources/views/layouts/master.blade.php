<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("css/AdminLTE.min.css") }}>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href={{ asset("css/skins/_all-skins.min.css") }}>
  <!-- Morris chart -->
  <link rel="stylesheet" href={{ asset("css/morris.css") }}>
  <!-- jvectormap -->
  <link rel="stylesheet" href={{ asset("css/jquery-jvectormap.css") }}>
  <!-- Date Picker -->
  <link rel="stylesheet" href={{ asset("css/bootstrap-datepicker.min.css") }}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{ asset("css/daterangepicker.css") }}>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href={{ asset("css/bootstrap3-wysihtml5.min.css") }}>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('includes.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('includes.sidebar')
  
    <!-- Content Wrapper. Contains page content -->
    @yield('content') <!-- Whatever we put inside the section(content), those codes will be used here -->

    <!-- /.content-wrapper -->
  @include('includes.footer')
</div>
<!-- jQuery 3 -->
<script src={{ asset("js/jquery.min.js") }}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset("js/jquery-ui.min.js") }}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src={{ asset("js/bootstrap.min.js") }}></script>
<!-- Morris.js charts -->
<script src={{ asset("js/raphael.min.js") }}></script>
<script src={{ asset("js/morris.min.js") }}></script>
<!-- Sparkline -->
<script src={{ asset("js/jquery.sparkline.min.js") }}></script>
<!-- jvectormap -->
<script src={{ asset("js/jquery-jvectormap-1.2.2.min.js") }}></script>
<script src={{ asset("js/jquery-jvectormap-world-mill-en.js") }}></script>
<!-- jQuery Knob Chart -->
<script src={{ asset("js/jquery.knob.min.js") }}></script>
<!-- daterangepicker -->
<script src={{ asset("js/moment.min.js") }}></script>
<script src={{ asset("js/daterangepicker.js") }}></script>
<!-- datepicker -->
<script src={{ asset("js/bootstrap-datepicker.min.js") }}></script>
<!-- Bootstrap WYSIHTML5 -->
<script src={{ asset("js/bootstrap3-wysihtml5.all.min.js") }}></script>
<!-- Slimscroll -->
<script src={{ asset("js/jquery.slimscroll.min.js") }}></script>
<!-- FastClick -->
<script src={{ asset("js/fastclick.js") }}></script>
<!-- AdminLTE App -->
<script src={{ asset("js/adminlte.min.js") }}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{ asset("js/pages/dashboard.js") }}></script>
<!-- AdminLTE for demo purposes -->
<script src={{ asset("js/demo.js") }}></script>
</body>
</html>

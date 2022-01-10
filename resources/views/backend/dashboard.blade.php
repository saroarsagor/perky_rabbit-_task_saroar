

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- <link rel="shortcut icon" href="{{ asset('images/logo/favicon.png') }}" /> -->
  <title>Admin - @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Leaflentpub">
    <meta name="keywords" content="
    Leaflentpub">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href="{{asset('backend/')}}/plugins/jqvmap/jqvmap.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
   

   <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend/')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

<!-- <link rel="stylesheet" media="screen" type="text/css" href="{{asset('public/colorpicker/css/colorpicker.css')}}" /> -->

<!-- <link rel="stylesheet" href="{{asset('frontend/')}}/css/royal-preload.css" />
 -->

 <!-- END: Custom CSS-->
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<!-- textarea -->
 <!-- <script src="http://localhost/textboxio/textboxio.js"></script> -->

<!--  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->

<!-- dynamic color side menu top header -->
<style type="text/css">
 

    #loading2{
    position: fixed;
    width: 100%;
    height: 100vh;
    background:; 
    z-index: 99999;
  }


    #loading3{
    width: 180px;
    height: 180px;
    background-color: white;
    margin: 0 auto;
     border-radius: 10%;
     text-align: center;
     margin-top: 200px;
     z-index: 99999;
  }
  #loading3 img{
    width: 60%;
    margin-top: 40px;
  }



.hdrCnt ol li a{color: black;}


</style>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  <!-- Navbar -->
    @include('backend.includes.header')
 
  <!-- Main Sidebar Container -->
    @include('backend.includes.sidebar')
 

 <div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
   @yield('content')
</div>

  <!-- footer start -->
  @include('backend.includes.footer')

</div>


<!-- jQuery -->
<script src="{{asset('backend/')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('backend/')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('backend/')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<!-- <script src="{{asset('backend/')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('backend/')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{asset('backend/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('backend/')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('backend/')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('backend/')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('backend/')}}/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/')}}/dist/js/demo.js"></script>




<!-- DataTables -->
<script src="{{asset('backend/')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend/')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend/')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




<script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=onks3g1c990hqdqbcyph8jlno75fq3ld1lzxh91x46xq4ob1"></script>

<!-- <script type="text/javascript" src="{{asset('colorpicker/js/colorpicker.js')}}"></script> -->

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}



<script>
  $(document).ready(function(){
        
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>



</body>
</html>

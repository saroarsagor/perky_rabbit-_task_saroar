<!DOCTYPE html>
<html lang="zxx">
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Leafletpub - @yield('title')</title>
    <!-- Stylesheet -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="{{ asset('frontend/css/vendor.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}">
    <link href="{{asset('admin/plugins/bootoast/src/bootoast.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     <!-- END: Custom CSS-->
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">



    @yield('style')


    <style>
        .footer_logo{margin-left:-40px;}
        .footer_logo img{margin-top:-10px;}
        .widget {margin-bottom: 5px!important;}

        .media img{padding: 10px 0;width:80%;}
        .logo-img img{padding-top: 50px;}

     

        @media screen and (max-width: 768px){
            .footer_logo{margin-left:0px;}
            .logo-img img{padding-top: 0px;padding: 20px 0;font-size:60px}
        }
    </style>

</head>
<body>
 
    <!-- navbar start -->
  @include('frontend.includes.header')
    <!-- navbar end -->

    @yield('content')

   

     @include('frontend.includes.footer')


    <!-- all plugins here -->
    <script src="{{ asset('frontend/js/vendor.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- main js  -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>

    <script src="{{asset('admin/plugins/bootoast/dist/bootoast.min.js')}}"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
  {!! Toastr::message() !!}
   





</body>
</html>
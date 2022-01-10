
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">

    <link rel="stylesheet" href="{{asset('public/frontend/')}}/assets/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/assets/css/main.css">
	
	<style type="text/css">
      
		
		</style>

</head>


<body>
   
    <p><b>Name: </b> {{$user_name}}</p>
    <p><b>Email: </b> {{$user_email}}</p>
    <p><b>Number: </b> {{$user_number}}</p>
    <p><b>Country: </b> {{$user_country}}</p>
    <br>
    <h4>{{$manuscript_title_cnt}}</h4>
    <p>{{$manuscript_cnt}}</p>

    <!-- JS here -->
    <script src="{{asset('public/frontend/')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('public/frontend/')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('public/frontend/')}}/assets/js/bootstrap.min.js"></script>
   
</body>
</html>
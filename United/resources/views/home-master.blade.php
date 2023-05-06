<!doctype html>
<html lang="{{ app()->getLocale() }}">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>United</title>


		<link rel="stylesheet" type="text/css" href="{{url('public/css/test.css')}}">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<!--  main link bootstrap css -->
		<link rel="stylesheet" type="text/css" href="{{url('public/css/bootstrap.min.css')}}">
		<!--font awesome-icon-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	


		<!-- style -->
		
<link rel="stylesheet" type="text/css" href="{{url('public/css/header.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/home.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/Clients.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/footer.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/team.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/askquotes.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/services.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/photo.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/videos.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/photo-dynamic.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/infra.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('public/css/Whyus.css')}}">
		
		



	</head>
	<body>
		
		@include('partials.header')
		
		@yield('content')
		@include('partials.footer')
		



		<script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
	

        

<script type="text/javascript" src="{{url('public/js/js.js')}}"></script>

	</body>



    <script src="{{ url('public/js/lightbox-plus-jquery.min.js')}}"></script>
</html>
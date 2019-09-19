<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
     <!-- Site Metas -->
    
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content=""> 
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ secure_asset('images/apple-touch-icon.png') }}">

    <title>Ribbonate</title>
	

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
	<link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    
	<link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/colors.css') }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/versions.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/custom.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
	<script src="{{ secure_asset('js/jquery-1.13.min.js') }}"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body class="seo_version">
    <div id="app">
		
	<!-- END LOADER -->
		
	<header class="header header_style_01">	
		@include('inc.navbar')
	</header>
			@include('inc.messages')
            @yield('content')
    <!-- end #home -->
	
	@include('inc.footer')
	
	</div>
	
    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>-->
	<script src="{{ secure_asset('js/all.js') }}"></script>
	
    <!-- ALL PLUGINS -->
    <script src="{{ secure_asset('js/custom.js') }}"></script>
	<!--<script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>-->

</body>
</html>

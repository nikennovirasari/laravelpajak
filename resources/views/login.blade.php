<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title', 'Login') | Sistem Pembayaran Pajak Bumi Bangunan</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	 <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('component/bootstrap/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="{{url('/')}}" class="logo">
				<span class="logo-mini">Home</span>
				<span class="logo-lg">Home</span>
			</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						
					</ul>
					<ul class="dropdown-menu">
						
					</ul>
					<ul class="dropdown-menu">
						
					</ul>
					<ul class="dropdown-menu">
						
					</ul>
					
				</div>
			</nav>
		</header>

	<section class="content">
		<div class="clearfix"></div>
			<div class="col-md-4 col-md-offset-4">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong>Login</strong>
						</div>
						{!! Form::open(['url'=>'login','class'=>'form-horizontal'])!!}
						<div class="form-group">
							<label class="col-sm-4 control-label">Username</label>
							<div class="col-sm-8">
								{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"])!!}
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label">Password</label>
							<div class="col-sm-8">
								{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"])!!}
							</div>
						</div>
						<div style="width: 100%;text-align:right;">
							<button class="btn btn-primary"><i class="fa fa-lock"></i> Masuk</button>
							<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
						</div>
						{!! Form::close()!!}
					</div>
			</div>
	</section>





	<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="main-footer">
        	<strong>NikenAnisa &copy; 2016</strong>
    	</footer>
	</nav>
	<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		$(function(){
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>
</body>
</html>



		
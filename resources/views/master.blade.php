<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title', 'Halaman Utama') | Pajak Bumi Bangunan</title>
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
				
        <span class="logo-mini">PAJAK</span>
				<span class="logo-lg">PAJAK</span>
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

		<aside class="main-sidebar">
			<section class="sidebar">
				<!-- Form Search -->
				 <form action="#" method="get" class="sidebar-form">
            		<div class="input-group">
              			<input type="text" name="q" class="form-control" placeholder="Cari...">
              			<span class="input-group-btn">
                			<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              			</span>
            		</div>
        		</form>
        		<ul class="sidebar-menu">
        			
        			<li class="header">MENU</li>
        			<li class="treeview">
              			<a href="{{'master1'}}">
                			<i class="fa fa-pie-chart"></i>
                			<span>Wajib Pajak</span>
                			<i class="fa fa-angle-left pull-right"></i>
              			</a>
              			<ul class="treeview-menu">
				            <li class=""><a href="{{url('wajibpajak')}}"><i class="fa fa-circle-o"></i> Data Anda</a></li>
				            <li><a href="{{url('pembayaran')}}"><i class="fa fa-circle-o"></i> Data Pembayaran</a></li>
              			</ul>
            		</li>
            		<li class="treeview">
              			<a href="{{'master2'}}">
                			<i class="fa fa-pie-chart"></i>
                			<span>Petugas</span>
                			<i class="fa fa-angle-left pull-right"></i>
              			</a>
              			<ul class="treeview-menu">
				            <li><a href="{{url('user')}}"><i class="fa fa-circle-o"></i> Data User</a></li>
				            <li><a href="{{url('wajibpajak')}}"><i class="fa fa-circle-o"></i> Data Wajib Pajak</a></li>
				            <li><a href="{{url('bangunan')}}"><i class="fa fa-circle-o"></i> Data Bangunan</a></li>
				            <li><a href="{{url('tanah')}}"><i class="fa fa-circle-o"></i> Data Tanah</a></li>
              			</ul>
            		</li>
            

        			<li class="header">Navigasi</li>
        			<li class="treeview-menu">
        				<i class="fa fa-angle-left pull-right"></i>
        				<li>
								<a href="{{url('login')}}">Login</a>
							</li>
        			</li>
        			<li class="treeview-menu">
        				<i class="fa fa-angle-left pull-right"></i>
        				<li>
								<a href="{{url('logout')}}">Logout</a>
							</li>
        			</li>


        		</ul>
			</section>
		</aside>
	

	</div>

                <div class="col-md-50" id="iad2">
              <div class="col-md-12 animated fadeIn" id="isicontent">
             
                <div class="text-center">
                  
                
                  <img src="component4/pajak/pajakk.jpg" width="905px" height="505px">
                </div>
              </div>
            </div>
          

	
  <div class="clearfix"></div>
  <div class="container">
    @if(Session::has('informasi'))

      <section class='content-wrapper'>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box box-info">
                <div class="box-header with-border">                              
        
    <div class="alert alert-info">
    <strong>Informasi : </strong>
    {{ Session::get('informasi')}}
  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    @if (count($errors) > 0)
                                       
      <section class='content-wrapper'>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box box-info">
                <div class="box-header with-border">

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
        @endforeach
      </ul>
    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    @endif
      @endif
    
      @yield('container')
  </div>
	





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
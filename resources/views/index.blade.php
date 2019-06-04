<!DOCTYPE html>
<html>
<head>
    <title>Test File</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>

@if ($errors->any())
<div id="wrap">
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if(Session::has('resetPassword') && Session::get('resetPassword') == 1)
	@include('modal/resetPasswordModal')
@endif
@if(Auth::guest())
	@include('modal/userAuthenticationModal')
@endif

@if(Auth::check() && Auth::user()->status === 0)
	@include('modal/verifyEmailModal')
@endif
@include('header')

<!-- main div start -->
		<div class="main">

			<!-- BREADCRUMB -->
			<div id="breadcrumb" class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
						<!-- <h3 class="breadcrumb-header">Page breadcrub goes here</h3> -->
							<ul class="breadcrumb-tree">
								<li><a href="#">Home</a></li>
								<li class="active">page</li>
							</ul>
						</div>
					</div>
					<!-- /row -->
					@yield('content')
				</div>
				<!-- /container -->
			</div>
			<!-- /BREADCRUMB -->
			<!-- SECTION -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION -->

<!-- main end -->
</div>
<!-- end wrap -->
</div>
@include('footer')
<script src="js/manifest.js"></script>
<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>
</html>
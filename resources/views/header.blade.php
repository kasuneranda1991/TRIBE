<!-- HEADER -->
		<!-- wrap start -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-2">
							<div class="header-logo">
								<a href="/home" class="logo">
									<img src="{{ asset('img/logo.png') }}" width="120" alt="logo">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-7">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="What are you looking for?">
									<button class="search-btn"><i class="fa fa-search"></i></button>
								</form>
							</div>
							<!-- <a href="#" class="">SELL ON <img src="./img/logo.png" width="40" alt="logo"></a> -->
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									@if(Auth::check())
									<div class="btn-group" role="group" aria-label="Basic example">
										@if(Auth::user()->role === 'super_admin')
											  <a href="/super_admin" class="btn btn-outline" style="color: white;">S.Admin</a>
										@elseif(Auth::user()->role === 'seller')
											  <a href="/seller" class="btn btn-outline" style="color: white;">Seller</a>
										@elseif(Auth::user()->role === 'admin')
											  <a href="/admin" class="btn btn-outline" style="color: white;">Admin</a>									
										@endif
										<a href="/logout-user" class="btn btn-outline" style="color: white;">logout</a>
									</div>
									@else
										<a href="#" class="btn btn-outline" data-toggle="modal" data-target="#exampleModal">SIGN IN</a>
										<a href="#" class="btn btn-normal" data-toggle="modal" data-target="#signup">REGISTER</a>
									@endif
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="https://via.placeholder.com/140" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
												<img src="https://via.placeholder.com/140" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="btn cart-btns btn-block">
											<a href="#">View Cart</a>
											<!-- <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a> -->
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				
				<div class="row">
						<div class="col-md-10">
							<!-- responsive-nav -->
							<div id="responsive-nav">
								<!-- NAV -->
								<ul class="main-nav nav navbar-nav">
									<li class="active"><a href="#">EAT</a></li>
									<li><a href="#">FASHION</a></li>
									<li><a href="#">JEWELRY & ACCESSORIES</a></li>
									<li><a href="#">HOME & LIVING</a></li>
									<li><a href="#">BEAUTY</a></li>
									<li><a href="#">ARTS, CRAFTS & COLLECTIBLES</a></li>
									<li><a href="#">CUSTOMIZED GIFTS</a></li>
								</ul>
								<!-- /NAV -->
							</div>
							<!-- /responsive-nav -->
						</div>
						<div class="col-md-2 fa-icons fa-right">
								<i class="fa fa-facebook-official" aria-hidden="true"></i> 
								<i class="fa fa-instagram" aria-hidden="true"></i>
								<i class="fa fa-linkedin-square" aria-hidden="true"></i> 
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
							</div>
		 		</div>
			
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

<!-- wrap end -->
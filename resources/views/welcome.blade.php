<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard | E-Shopper</title>
    <link href="client/css/bootstrap.min.css" rel="stylesheet">
    <link href="client/css/font-awesome.min.css" rel="stylesheet">
    <link href="client/css/prettyPhoto.css" rel="stylesheet">
    <link href="client/css/price-range.css" rel="stylesheet">
    <link href="client/css/animate.css" rel="stylesheet">
	<link href="client/css/main.css" rel="stylesheet">
	<link href="client/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="client/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="client/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="client/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="client/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="client/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> thongnhat@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="client/images/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Đăng nhập</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Xe đạp trẻ em</a></li>
										<li><a href="product-details.html">Xe đạp người lớn</a></li> 
										<li><a href="checkout.html">Xe đạp nam</a></li> 
										<li><a href="cart.html">Xe đạp nữ</a></li> 
										<li><a href="login.html">Xe đạp thể thao</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Giới thiệu<i class="fa fa-angle-down"></i></a></li> 
								<li><a href="404.html">Tin tức</a></li>
								<li><a href="contact-us.html">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm kiếm"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="client/images/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="client/images/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/dashboard/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/dashboard/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/dashboard/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/dashboard/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Chuyên mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#kidbike">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Xe đạp trẻ em
										</a>
									</h4>
								</div>
								<div id="kidbike" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Xe đạp cho bé trai </a></li>
											<li><a href="#">Xe đạp cho bé nữ </a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Xe đạp người lớn</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Xe đạp nam</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Xe đạp nữ</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Xe đạp thể thao</a></h4>
								</div>
							</div>
							
						</div><!--/category-products-->
			
						<div class="price-range"><!--price-range-->
							<h2>Mức giá</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="20" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">0tr VNĐ</b> <b class="pull-right">20tr VNĐ</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="client/images/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
					
				@yield('content')

					
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span></span>Xe Đạp Thống Nhất</h2>
							<p>Xe Đạp Thống Nhất chuyên cung cấp các sản phẩm Xe đạp trẻ em, 
                                người lớn, mini, Xe đạp Nam, Xe đạp Nữ ,Xe đạp địa hình, Xe đạp đường phố, Xe đạp thể thao</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/dashboard/iframe1.png" alt="" />
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/dashboard/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/dashboard/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/dashboard/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/dashboard/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Giúp đỡ online</a></li>
								<li><a href="#">Liên hệ chúng tôi</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Mua sắm nhanh</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Xe đạp trẻ em</a></li>
								<li><a href="#">Xe đạp người lớn</a></li>
								<li><a href="#">Xe đạp nam</a></li>
								<li><a href="#">Xe đạp nữ</a></li>
								<li><a href="#">Xe đạp thể thao</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chính sách thanh toán</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Chính sách hoàn trả</a></li>
								<li><a href="#">Chính sách vận chuyển</a></li>
								<li><a href="#">Chính sách thanh toán</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Về chúng tôi</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#"></a></li>
								<li><a href="#">Địa chỉ đại lý</a></li>
								<li><a href="#">Giờ hoạt động</a></li>
								<li><a href="#">Bản quyền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Xe Đạp Thống Nhất</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Địa chỉ email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhận thông tin cập nhật mới nhất <br />dành cho bạn...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 Thong Nhat Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">Nhat</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="client/js/jquery.js"></script>
	<script src="client/js/bootstrap.min.js"></script>
	<script src="client/js/jquery.scrollUp.min.js"></script>
	<script src="client/js/price-range.js"></script>
    <script src="client/js/jquery.prettyPhoto.js"></script>
    <script src="client/js/main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <meta http-equiv="content-language" content="en"/>
    <meta name="description" content="@yield('site_description')"/>
    <meta name="keywords" content="@yield('site_keywords')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="@yield('favicon')" type="image/x-icon"/>
    <link rel="canonical" href="{{ url()->current() }}"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('site_description')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="annammobile.com" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="{{ Helper::showImage($socialImage) }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('site_description')" />
    <meta name="twitter:title" content="@yield('title')" />        
    <meta name="twitter:image" content="{{ Helper::showImage($socialImage) }}" />
	<meta name="robots" content="noindex,nofollow" />
	<!-- <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon"> -->
	<!-- ===== Style CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
	<!-- ===== Responsive CSS ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css') }}">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,700,800,300&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&amp;amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">


	<!-- ===== Responsive CSS ===== -->
  	<!-- <link href="{{ URL::asset('assets/responsive.css') }}" rel="stylesheet"> -->

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='{{ URL::asset('assets/animations-ie-fix.css') }}' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="wrapper">

		<header class="header-bar">
			<div class="container">
				<div class="row"></div>
			</div>
		</header><!-- /header -->

		<main class="main">
			<div class="container">
				<div class="block block_header_wrap">
					<header class="header-des">
						<div class="block block_header_top row">
							<div class="block_logo col-md-2 col-sm-2">
								<a href="index.html" title="">
									<img src="{{ URL::asset('assets/images/logo.png') }}" alt="Logo">
								</a>
							</div><!-- /block_logo -->
							<div class="block_search col-md-6 col-sm-6">
								<div class="block_search_inner">
									<p class="block_call_support">HOTLINE<a href="tel:+84977385385">0977.385.385</a></p>
									<form name="frm_search" action="" class="frm-search">
										<div class="control clearfix">
											<button type="submit">
												<i class="fa fa-search"></i>
											</button>
											<input type="text" name="" placeholder="Bạn cần tìm sản phẩm gì ?" autocomplete="off">
											<div id="block_suggestions"></div>
										</div>
									</form>
									<a href="#" onclick="return false" class="cart-link" data-toggle="modal" data-target="#scart_popup">
										<i class="fa fa-shopping-cart"></i>Giỏ hàng<span class="order_total_quantity">1</span>
									</a>
								</div>
							</div><!-- /block_search -->
							<div class="block_face col-md-4 col-sm-4">
								<div class="block_face_inner">
									<div class="fb-page" data-href="https://www.facebook.com/facebook" data-width="360" data-height="72" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
								</div>
							</div><!-- /block_face -->
						</div><!-- /block_header_top -->
						<nav id="mainNav" class="navbar navbar-default navbar-custom fixed">
				        	<!-- Brand and toggle get grouped for better mobile display -->
					        <div class="navbar-header">
					            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					              <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
					            </button><!-- /navbar-toggle -->
					            <div class="block_cart_mobile">
					            	<a href="#" onclick="return false" data-toggle="modal" data-target="#scart_popup"><span class="order_total_quantity">1</span></a>
					            </div><!-- /block_cart_mobile -->
					            <div class="block_logo_mobile">
									<a href="index.html"><img src="{{ URL::asset('assets/images/logo_white.png') }}" alt=""></a>
								</div><!-- /block_logo_mobile -->
								<div class="block_call_mobile">
									<a href="tel:+84981200888" class="mb-phone"><i class="fa fa-phone"></i></a>
								</div><!-- /block_call_mibile -->
								<div class="block_search_mobile">
									<div class="block_content">
										<i class="fa fa-search fa_search_show"></i>
										<div class="block_search_inner">
											<form name="frm_search" action="" class="frm-search">
												<div class="control clearfix">
													<button type="submit"><i class="fa fa-search"></i></button>
													<input type="text" name="" placeholder="Bạn cần tìm sản phẩm gì ?" autocomplete="off">
												</div>
											</form>
										</div>
									</div>
								</div><!-- /block_search_mobile -->
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-left">
									<li class="level0 menu-icon">
										<a href="index.html" title="">
											<i class="fa fa-home"></i>
											Trang Chủ
										</a>
									</li><!-- level0 -->
									<li class="level0">
										<a href="device_old.html" title="">
											<i class="fa fa-history"> </i>
											Máy cũ giá rẻ
										</a>
									</li><!-- level0 -->
									<li class="level0 parent">
										<a href="product.html" title="">
											<i class="fa fa-mobile"> </i>
											ĐIỆN THOẠI
										</a>
										<ul class="level0 submenu">
											<li class="level1">
												<a href="product_cate.html" title="">
												Mobiado
												<span class="number-prod">29</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Apple
												<span class="number-prod">11</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Sony
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Samsung
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Nokia
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Microsoft
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												HTC
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												BlackBerry
												<span class="number-prod">8</span>
												</a>
											</li>
										</ul>
									</li><!-- level0 -->
									<li class="level0 parent">
										<a href="product.html">
											<i class="fa fa-tablet"> </i>
											Máy Tính Bảng
										</a>
										<ul class="level0 submenu">
											<li class="level1">
												<a href="product_cate.html" title="">
												Mobiado
												<span class="number-prod">29</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Apple
												<span class="number-prod">11</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Sony
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Samsung
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Nokia
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												Microsoft
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												HTC
												<span class="number-prod">8</span>
												</a>
											</li>
											<li class="level1">
												<a href="product_cate.html" title="">
												BlackBerry
												<span class="number-prod">8</span>
												</a>
											</li>
										</ul>
									</li><!-- level0 -->
									<li class="level0 parent">
										<a href="product.html" title="">
											<i class="fa fa-laptop"></i>
											Laptop
										</a>
										<ul class="level0 submenu">
											<li class="level1 parent">
												<a href="product_cate.html" title="">Loa Di Động</a>
												<ul class="level1 submenu">
													<li><a href="product_cate.html" title="">Portables</a></li>
													<li><a href="product_cate.html" title="">Wireless &amp; Docks</a></li>
													<li><a href="product_cate.html" title="">Computer Speakers</a></li>
													<li><a href="product_cate.html" title="">BO PLAY</a></li>
													<li><a href="product_cate.html" title="">BOSE</a></li>
													<li><a href="product_cate.html" title="">B&amp;W</a></li>
												</ul>
											</li><!-- level1 -->
											<li class="level1 parent">
												<a href="#" title="">Tai Nghe</a>
												<ul class="level1 submenu">
													<li><a href="product_cate.html" title="">IN EAR</a></li>
													<li><a href="product_cate.html" title="">ON EAR</a></li>
													<li><a href="product_cate.html" title="">OVER EAR</a></li>
													<li><a href="product_cate.html" title="">Bluetooth</a></li>
													<li><a href="product_cate.html" title="">Wireless for music</a></li>
												</ul>
											</li><!-- level1 -->
											<li class="level1 parent">
												<a href="#" title="">Dàn Hi-Fi mini &amp; Soundbars</a>
												<ul class="level1 submenu">
													<li><a href="product_cate.html" title="">Dàn Hi-Fi mini</a></li>
													<li><a href="product_cate.html" title="">Soundbars</a></li>
													<li><a href="product_cate.html" title="">JBL</a></li>
												</ul>
											</li><!-- level1 -->
											<li class="level1 parent">
												<a href="#" title="">Máy nghe nhạc, ghi âm</a>
												<ul class="level1 submenu">
													<li><a href="product_cate.html" title="">Máy nghe nhạc</a></li>
													<li><a href="product_cate.html" title="">Máy ghi âm</a></li>
												</ul>
											</li><!-- level1 -->
											<li class="level1"><a href="#" title="">HeadAmp &amp; DAC</a>
											</li><!-- level1 -->
											<li class="level1"><a href="#" title="">Wireless audio adapter</a>
											</li><!-- level1 -->
											<li class="level1"><a href="#" title="">Cable âm thanh</a>
											</li><!-- level1 -->
										</ul>
									</li><!-- level0 -->
									<li class="level0 parent">
										<a href="product.html" title="">
											<i class="fa fa-code-fork"></i>
											Phụ kiện
										</a>
										<ul class="level0 submenu">
											<li class="level1 parent"><a href="product_cate.html" title="">Bao da / Ốp lưng</a>
												<ul class="level1 submenu">
													<li><a href="product_cate.html" title="">Bao Da</a></li>
													<li><a href="product_cate.html" title="">Flip Cover / Book Cover</a></li>
													<li><a href="product_cate.html" title="">Ốp Lưng</a></li>
													<li><a href="product_cate.html" title="">Khung Viền</a></li>
												</ul>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Pin / Pin dự phòng</a>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Cable, Adapter, đầu đọc thẻ</a>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Phụ kiện máy tính, MacBook</a>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Sạc, đế sạc, ổ cắm điện</a>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Phụ kiện tivi</a>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Miếng dán màn hình</a>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Phụ kiện xe hơi</a>
											</li><!-- level1 -->
											<li class="level1"><a href="product_cate.html" title="">Phụ kiện khác</a>
											</li><!-- level1 -->
										</ul>
									</li><!-- level0 -->
									<li class="level0">
										<a href="news.html" title="">
											<i class="fa fa-rss-square"></i>
											TIN TỨC
										</a>
									</li><!-- level0 -->
									<li class="level0 menu_cart">
										<a href="#" onclick="return false" class="cart-link" data-toggle="modal" data-target="#scart_popup">
											<i class="fa fa-shopping-cart"></i>Giỏ hàng<span class="order_total_quantity">1</span>
										</a>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
				    	</nav><!-- mainNav -->
					</header><!-- header -->
				</div><!-- /block_header_wrap -->
				<!-- <div class="block_service row">
		    		<div class="col-md-4 col-sm-4 col-xs-12 service_regis">
						<a href="#"><i class="fa fa-users"></i>
							<div class="desc">
								<h4>Đăng ký thành viên MAI NGUYÊN</h4>
								<p>Nhận ngay voucher 400.000 Đ</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 service_pay">
						<a href="#"><i class="service_icon service_icon_payment"></i>
							<div class="desc">
								<h4>Thanh toán dễ dàng</h4>
								<p>Nhận hàng - thu tiền mặt hay thẻ VISA, Master</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 service_ship">
						<a href="#"><i class="service_icon service_icon_delivery"></i>
							<div class="desc">
								<h4>Giao hàng nhanh và miễn phí</h4>
								<p>Toàn quốc, có thể đổi trả</p>
							</div>
						</a>
					</div>
		    	</div> --><!-- /block_service -->
				<div class="block block_hero">
		    		<div class="row">
		    			<div class="col-md-9 col-sm-12 col-xs-12 block_slide">
		    				<ul class="owl-carousel owl-style2 dotsData" data-nav="true" data-margin="0" data-items='1' data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
								<li class="item" data-dot="1"><a href="#" title=""><img src="{{ URL::asset('assets/images/slide/1.jpg') }}" alt=""></a></li>
								<li class="item" data-dot="2"><a href="#" title=""><img src="{{ URL::asset('assets/images/slide/2.jpg') }}" alt=""></a></li>
								<li class="item" data-dot="3"><a href="#" title=""><img src="{{ URL::asset('assets/images/slide/3.jpg') }}" alt=""></a></li>
								<li class="item" data-dot="4"><a href="#" title=""><img src="{{ URL::asset('assets/images/slide/4.jpg') }}" alt=""></a></li>
								<li class="item" data-dot="5"><a href="#" title=""><img src="{{ URL::asset('assets/images/slide/5.jpg') }}" alt=""></a></li>
							</ul>
		    			</div><!-- /block_slide -->
		    			<div class="block_news_hot col-md-3 col-sm-3 col-xs-12">
		    				<h3 class="block_title">
		    					<a href="news.html" title="Xem thêm">
		    						Tin công nghệ
		    						<span>xem thêm...</span>
		    						<i style="background-image: url('{{ URL::asset('assets/images/ico-chicken.png') }}')" class="ic-event"></i>
		    					</a>
		    				</h3>
		    				<div class="block_content">
		    					<ul class="list">
		    						<li>
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/1.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
									<li>
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/2.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
									<li>
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/3.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
									<li>
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/4.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
									<li class="visible-xs-block">
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/5.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
									<li class="visible-xs-block">
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/6.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
									<li class="visible-xs-block">
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/7.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
									<li class="visible-xs-block">
										<a href="#">
											<figure>
												<img src="{{ URL::asset('assets/images/news_hot/8.jpg') }}" alt="Apple đang làm giàu cho Samsung">
												<span><i class="fa fa-plus"></i></span>
											</figure>
											<h4>Apple đang làm giàu cho Samsung</h4>
											<span>08/07/2017</span>
										</a>
									</li>
		    					</ul>
		    				</div>
		    			</div><!-- /block_news_hot -->
		    		</div>
		    	</div><!-- /block_hero -->
		    	<div class="block block_newshot">
		    		<div class="block_content row">
		    			<div class="col-md-6 col-sm-6 col-xs-12 item">
		    				<div class="block_inner">
		    					<a href="" title="" target="_self">
			    					<div class="inner">
										<h3>MUA NGAY S8 VÀ S8+ TẠI MAI NGUYÊN</h3>
										<span>HOÀN TIỀN 2TR hoặc TẶNG SẠC KHÔNG DÂY 1,45TR</span>
										<i class="fa fa-angle-right"></i>
									</div>
			    				</a>
			    				<figure>
									<div class="frame"><span>&nbsp;</span></div>
									<img src="{{ URL::asset('assets/images/news_hot/DATGACH-S8.jpg') }}" alt="HOÀN TIỀN 2TR hoặc TẶNG SẠC KHÔNG DÂY 1,45TR">
								</figure>
		    				</div>
		    			</div><!-- /item -->
		    			<div class="col-md-6 col-sm-6 col-xs-12 item">
		    				<div class="block_inner">
			    				<a href="" title="" target="_self">
			    					<div class="inner">
										<h3>CHUYÊN TRANG PHỤ KIỆN</h3>
										<span>VÀ HỆ SINH THÁI GALAXY S8 | S8+</span>
										<i class="fa fa-angle-right"></i>
									</div>
			    				</a>
			    				<figure>
									<div class="frame"><span>&nbsp;</span></div>
									<img src="{{ URL::asset('assets/images/news_hot/s8_accessories_big2.jpg') }}" alt="VÀ HỆ SINH THÁI GALAXY S8 | S8+">
								</figure>
		    				</div>
		    			</div><!-- /item -->
		    		</div>
		    	</div><!-- /block_newshot -->
		    	<div class="block block_product">
	    			<h3 class="block_title">
	    				<span>Vừa có hàng</span>
	    			</h3>
	    			<div class="block_content row">
	    				<ul class="list">
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/day-deo-Gear-S3-do.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
											<span class="new">NEW</span>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/capnhat-galaxytabs3-12.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
											<span class="sale_off">GIẢM 50%</span>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-mini-4-wifi-128gb-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-wifi-128gb-2017-300-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/JBL_FLIP4_GROUP.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/day-deo-Gear-S3-do.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
											<span class="new">NEW</span>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/capnhat-galaxytabs3-12.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-mini-4-wifi-128gb-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-wifi-128gb-2017-300-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/JBL_FLIP4_GROUP.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    				</ul>
	    			</div>
		    	</div><!-- /block_product -->
		    	<div class="block block_product">
	    			<h3 class="block_title">
	    				<span>TAI NGHE CAO CẤP, MỚI VỀ</span>
	    			</h3>
	    			<div class="block_content row">
	    				<ul class="list">
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/day-deo-Gear-S3-do.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
											<span class="new">NEW</span>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/capnhat-galaxytabs3-12.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-mini-4-wifi-128gb-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-wifi-128gb-2017-300-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/JBL_FLIP4_GROUP.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/day-deo-Gear-S3-do.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
											<span class="new">NEW</span>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/capnhat-galaxytabs3-12.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-mini-4-wifi-128gb-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-wifi-128gb-2017-300-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/JBL_FLIP4_GROUP.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    				</ul>
	    			</div>
		    	</div><!-- /block_product -->
		    	<div class="block block_product">
	    			<h3 class="block_title block_title_img">
	    				<span>Âm thanh cá nhân</span>
	    				<p>
							<a href="/am-thanh">Xem thêm<b class="red"> +974</b> sản phẩm cá tính</a>
						</p>
	    			</h3>
	    			<div class="block_content row">
	    				<ul class="list">
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/day-deo-Gear-S3-do.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
											<span class="new">NEW</span>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/capnhat-galaxytabs3-12.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-mini-4-wifi-128gb-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-wifi-128gb-2017-300-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/JBL_FLIP4_GROUP.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/day-deo-Gear-S3-do.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
											<span class="new">NEW</span>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/capnhat-galaxytabs3-12.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-mini-4-wifi-128gb-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/ipad-wifi-128gb-2017-300-300x300.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    					<li class="col-sm-5ths col-xs-6 product_item">
	    						<div class="item">
	    							<a href="detail.html" title="">
	    								<div class="product_img">
	    									<img src="{{ URL::asset('assets/images/product/JBL_FLIP4_GROUP.jpg') }}" alt="">
	    								</div>
	    								<div class="product_info">
	    									<h3 class="product_name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</h3>
	    									<div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
	    								</div>
	    								<div class="product_detail">
	    									<p class="name">Dây đeo đồng hồ Silicon Samsung Gear S3 Frontier/Classic</p>
							                <div class="product_price">
												<span class="product_price_new">650.000đ</span>
												<span class="product_price_old">280.000đ</span>
											</div>
						                    <p>Màn hình: 9.7", Retina</p>
						                    <p>HDH: IOS 10, CPU: 2 nhân</p>
						                    <p>RAM: 2 GB, ROM: 128 GB</p>
						                    <p>Camera: 8 MP và 1.2 MP</p>
						                    <p>Kết Nối: Wifi</p>
						                    <p>Pin: 32.4 Wh</p>
	    								</div>
	    							</a>
	    						</div>
	    					</li><!-- /product_item -->
	    				</ul>
	    			</div>
		    	</div><!-- /block_product -->
			</div>
		</main><!-- /main -->

		<footer class="footer">
			<div class="footer_top">
				<div class="container">
					<ul class="row block_bottom_menu">
	                    <li><a href="/">Trang chủ</a></li>
	                    <li><a href="/sitemap.html">Sơ đồ web</a></li>
	                    <li><a href="/quy-dinh-su-dung.html">Quy định sử dụng</a></li>          
	                    <li><a href="/kiem-tra-thong-tin-bao-hanh.html">Chính sách bảo hành</a></li>
	                    <li><a href="/gioi-thieu.html">Giới thiệu</a></li>
	                    <li><a href="/lien-he.html">Liên hệ</a></li>
	                    <li><a href="/huong-dan-dat-hang.html">Hướng dẫn đặt hàng</a></li>
	                    <li><a href="/tuyen-dung.html">Tuyển dụng</a></li>
	                    <li><a href="/quy-dinh-su-dung.html">Chính sách bảo mật</a></li>
					</ul><!-- /block_bottom_menu -->
				</div>
			</div><!-- /footer_top -->
			<div class="footer_bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12 block_copy">
							<a href="#" class="logo"><img src="{{ URL::asset('assets/images/logo_white.png') }}" alt=""></a>
							<div class="copyright">
                                <p>Công ty TNHH Công nghệ Di động An Nam - Q.1, TP.HCM</p>
                                <p>Email: contact@annam.vn</p>
                                <p>Chịu trách nhiệm quản lý nội dung: Hoàng Ngọc XX</p>
                                <p>Giấy phép số xx/GP-ICP-STTTT</p>
                                <p>Copyrights © 2012 Annam.vn. All Rights Reserved</p>
                            </div>
						</div><!-- /block_copy -->
						<div class="col-md-2 col-sm-3 col-xs-4 block_pay">
							<div class="block_payment"> 
                                <p>CHẤP NHẬN THANH TOÁN</p>
                            	<i class="fa fa-cc-visa"></i>
                            	<i class="fa fa-cc-mastercard"></i>
                            </div>
						</div><!-- /block_pay -->
						<div class="col-md-2 col-sm-3 col-xs-4 block_indus">
							<a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=5895" target="_blank" class="block_industry">
                            	<img src="{{ URL::asset('assets/images/logo-bocongthuong.png') }}" alt="TMĐT">
                            </a>
						</div>
					</div>
				</div>
			</div><!-- /footer_bottom -->
		</footer><!-- /footer -->

		<a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
      		<i class="fa fa-angle-up" aria-hidden="true"></i>
    	</a><!-- Return To Top -->

    	<!-- Modal -->
		<div class="modal fade" id="scart_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" id="myModalLabel">
					<i class="fa fa-shopping-cart"></i> GIỎ HÀNG CỦA TÔI
					<span>(Đang có <strong class="order_total_quantity">0</strong> sản phẩm)</span>
					<span><a href="javascript:;" class="empty_cart"><i class="fa fa-remove"></i>Làm trống giỏ hàng</a></span>
				</h2>
				</div>
					<div class="modal-body">
						<div class="shopcart-ct">
							<div class="cart-box row">
								<div class="col-md-8">
									<form action="#" method="POST" id="frm_order_items">
										<div class="table cart-tbl">
											<div class="table-row thead">
												<div class="table-cell no-col">&nbsp;</div>
												<div class="table-cell product-col">Sản phẩm</div>
												<div class="table-cell price-col t-r">Đơn giá (đ)</div>
												<div class="table-cell numb-col t-c">Số lượng</div>
												<div class="table-cell total-col t-r">Thành tiền (đ)</div>
											</div><!-- /table-row -->
											<div class="tr-wrap">
												<div class="table-row clearfix">
													<div class="table-cell no-col"><span>1</span></div><!-- /table-cell no-col -->
													<div class="table-cell product-col">
														<figure class="img-prod">
															<img alt="Sony High-Power Home Audio System MHC-V50D" src="{{ URL::asset('assets/images/cart/iPhone-7Plus_RoseGold.jpg') }}">
														</figure>
														<a href="#" target="_blank" title="Apple iPhone 7 Plus 32GB">Apple iPhone 7 Plus 32GB</a>
														<p class="p-color">
														<label>Màu </label>
														<select class="js-example-templating" data-width="165px">
															<option value="rosegold">Rose Gold</option>
															<option value="black">Black</option>
															<option value="silver">Silver</option>
															<option value="gold">Gold</option>
														</select>
														</p>
													</div><!-- /table-cell product-col -->
													<div class="table-cell price-col t-r">21.190.000</div><!-- /table-cell price-col t-r -->
													<div class="table-cell numb-col t-c">
														<select name="" size="1" class="change_quantity">
															<option value="0">0</option>
															<option value="1" selected="">1</option>
															<option value="2">2</option>
														</select> 
													</div><!-- /table-cell numb-col t-c -->
													<div class="table-cell total-col t-r">21.190.000</div><!-- /table-cell total-col t-r -->
												</div>
												<p class="upd-cart-line t-r">
								                    <a href="javascript:;" class="updateCart">
								                        <i class="fa fa-undo"></i>Cập nhật giỏ hàng
								                    </a>
								                </p>
											</div><!-- /tr-wrap -->
										</div><!-- /table cart-tbl -->
										<p>* Thời gian phục vụ online từ 8:00 đến 19:00 (Từ Thứ Hai đến Chủ Nhật, ngày Lễ nghỉ)</p>
									</form>
								</div>
								<div class="col-md-4">
									<div class="checkout-box-col">
										<table class="total-tbl f-r">
											<tbody>
												<tr>
									                <td>Tổng tiền hàng:</td>
									                <td class="t-r">21.190.000 đ&nbsp;</td>
									            </tr>
									            <tr>
									                <td>Phí vận chuyển:</td>
									                <td class="t-r">
									                    <span class="ship_fee">0</span> đ
									                    <br>
									                </td>
									            </tr>
									            <tr>
									                <td>Phí bảo hiểm vc:</td>
									                <td class="t-r">
									                    <span class="ship_insurance"></span> đ
									                    <br>
									                    <a href="#" target="_blank"><i class="fa fa-info-circle"></i>Cách tính phí</a>
									                </td>
									            </tr>
									            <tr class="all-total">
									                <td>Tổng số tiền:</td>
									                <td class="totalmn t-r">21.190.000 đ</td>
									            </tr>
									            <tr>
									                <td colspan="2" class="t-r">
									                    Đã bao gồm VAT
									                    <input type="hidden" name="total_money" id="total_money" value="21190000">
									                    <input type="hidden" name="total_weight" id="total_weight" value="0">
									                    <input type="hidden" name="ship_length" id="ship_length" value="0">
									                    <input type="hidden" name="ship_width" id="ship_width" value="0">
									                    <input type="hidden" name="ship_height" id="ship_height" value="0">
									                    <input type="hidden" name="ship_default_from_district" id="ship_default_from_district" value="66">
									                    <input type="hidden" name="ship_cost" id="ship_cost" value="0">
									                    <input type="hidden" name="ship_cost_for_customer" id="ship_cost_for_customer" value="0">
									                    <input type="hidden" name="ship_insurance" id="ship_insurance" value="0">
									                    <input type="hidden" name="ship_high_value" id="ship_high_value" value="1:1:21190000">
									                    <input type="hidden" name="status" id="status" value="order">
									                </td>
									            </tr>                    
									        </tbody>
										</table>
										<div class="f-r chck-out-btn">
								            <a href="pre_checkout.html" class="checkout-btn">THANH TOÁN</a>
								            <a href="javascript:;" class="keep-buying">Hoặc tiếp tục mua hàng</a>
								        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /wrapper -->

	<!-- ===== JS ===== -->
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
	<!-- ===== JS Bootstrap ===== -->
	<script src="{{ URL::asset('assets/lib/bootstrap/bootstrap.min.js') }}"></script>
	<!-- ===== Plugins ===== -->
	<script src="{{ URL::asset('assets/js/plugins.min.js') }}"></script>
	<!-- carousel -->
	<script src="{{ URL::asset('assets/lib/carousel/owl.carousel.min.js') }}"></script>
	<!-- sticky -->
    <script src="{{ URL::asset('assets/lib/sticky/jquery.sticky.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ URL::asset('assets/lib/select2/js/select2.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{ URL::asset('assets/lib/slick/slick.min.js') }}"></script>
	<!-- Js Common -->
	<script src="{{ URL::asset('assets/js/common.js') }}"></script>
	<script src="{{ URL::asset('assets/js/home.js') }}"></script>

	<script type="text/javascript">
		function formatState (state) {
			if (!state.id) { return state.text; }
			var $state = $(
				'<span><img src="images/cart/color/' + state.element.value.toLowerCase() + '.jpg" class="img-flag" /> ' + state.text + '</span>'
			);
			return $state;
		};
		$(".js-example-templating").select2({
			templateResult: formatState
		});
	</script>
</body>
</html>
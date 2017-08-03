<!DOCTYPE html>
<html lang="vi">
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <meta http-equiv="content-language" content="en"/>
    <meta name="description" content="<?php echo $__env->yieldContent('site_description'); ?>"/>
    <meta name="keywords" content="<?php echo $__env->yieldContent('site_keywords'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="<?php echo $__env->yieldContent('favicon'); ?>" type="image/x-icon"/>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:site_name" content="annammobile.com" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>" />        
    <meta name="twitter:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
	<meta name="robots" content="noindex,nofollow" />
	<!-- <link rel="shortcut icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>" type="image/x-icon"> -->
	<!-- ===== Style CSS ===== -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/style.css')); ?>">
	<!-- ===== Responsive CSS ===== -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/responsive.css')); ?>">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,700,800,300&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700&amp;amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">


	<!-- ===== Responsive CSS ===== -->
  	<!-- <link href="<?php echo e(URL::asset('assets/responsive.css')); ?>" rel="stylesheet"> -->

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='<?php echo e(URL::asset('assets/animations-ie-fix.css')); ?>' rel='stylesheet'>
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
				<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
				<?php echo $__env->yieldContent('content'); ?>
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
							<a href="#" class="logo"><img src="<?php echo e(URL::asset('assets/images/logo_white.png')); ?>" alt=""></a>
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
                            	<img src="<?php echo e(URL::asset('assets/images/logo-bocongthuong.png')); ?>" alt="TMĐT">
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
															<img alt="Sony High-Power Home Audio System MHC-V50D" src="<?php echo e(URL::asset('assets/images/cart/iPhone-7Plus_RoseGold.jpg')); ?>">
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
	<script src="<?php echo e(URL::asset('assets/js/jquery.min.js')); ?>"></script>
	<!-- ===== JS Bootstrap ===== -->
	<script src="<?php echo e(URL::asset('assets/lib/bootstrap/bootstrap.min.js')); ?>"></script>
	<!-- ===== Plugins ===== -->
	<script src="<?php echo e(URL::asset('assets/js/plugins.min.js')); ?>"></script>
	<!-- carousel -->
	<script src="<?php echo e(URL::asset('assets/lib/carousel/owl.carousel.min.js')); ?>"></script>
	<!-- sticky -->
    <script src="<?php echo e(URL::asset('assets/lib/sticky/jquery.sticky.js')); ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo e(URL::asset('assets/lib/select2/js/select2.min.js')); ?>"></script>
    <!-- Slick -->
    <script src="<?php echo e(URL::asset('assets/lib/slick/slick.min.js')); ?>"></script>
	<!-- Js Common -->
	<script src="<?php echo e(URL::asset('assets/js/common.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('assets/js/home.js')); ?>"></script>

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
<!-- Begin Color Scheme
============================================ -->
<?php 
require_once ('scssphp/scss.inc.php');
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
 $themeCssName='';  
 $ColorScheme = '#ea3a3c';
 $themeColor = strtolower($ColorScheme);
		
$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
$scss->addImportPath('sass');
$scss->setVariables(array(
	'$linkColor' => $themeColor,
	'$dir' => 'ltr',
));

$string_css     = $scss->compile('@import "home2.scss"');
$header2_css    = $scss->compile('@import "header/header2.scss"');
$footer2_css    = $scss->compile('@import "footer/footer2.scss"');
$responsive_css     = $scss->compile('@import "responsive.scss"');

file_put_contents('css/home2.css', $string_css);
file_put_contents('css/header/header2.css', $header2_css);
file_put_contents('css/footer/footer2.css', $footer2_css);
file_put_contents('css/responsive.css', $responsive_css);

/*if(isset($ColorScheme)){
	$themeCssName = 'theme-' . str_replace("#", "", $ColorScheme) . '.css';
	if(isset($_POST['submitbtn'])){ 
	}

}*/

/*if(isset($_POST['submit-reset'])){
	clear_css_cache('css');
	unset($_POST);
}

function clear_css_cache($type){
	$files = glob('css/theme-*.'.$type);
	if ($files) {
	  foreach ($files as $file) {
		if (file_exists($file)) unlink($file);
		}
	}
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic page needs
		 ============================================ -->
	<title>TopDeal</title>
	<meta charset="utf-8">
	<meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
	<meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
	<meta name="author" content="Magentech">
	<meta name="robots" content="index, follow" />
	<!-- Mobile specific metas
		 ============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Favicon
		 ============================================ -->
	<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png" />
	<!-- Libs CSS
		 ============================================ -->
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="js/minicolors/miniColors.css" rel="stylesheet">
	<link href="js/slick-slider/slick.css" rel="stylesheet">
	<!-- Theme CSS
		 ============================================ -->
	<link href="css/themecss/so_searchpro.css" rel="stylesheet">
	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
	<link href="css/footer/footer2.css" rel="stylesheet">
	<link href="css/header/header2.css" rel="stylesheet">
	<link id="color_scheme" href="css/home2.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/quickview/quickview.css" rel="stylesheet">
	<!-- Google web fonts
		 ============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>   
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i' rel='stylesheet' type='text/css'>      
	<style type="text/css">
		body {
			font-family: Roboto, sans-serif;
		}
	</style>
</head>

<body class="common-home ltr layout-2">
	<div id="wrapper" class="wrapper-fluid banners-effect-11">
		<!-- Header Container  -->
		<header id="header" class=" typeheader-2">
			<!-- Header Top -->
			<div class="header-bonus hidden-compact" >
		
				<div class="module no-margin">
					<div class="socustom_html">
						<div class="coupon-code" style="display: block;">
						[ SPECIAL DEAL ]  Sale Off 75% All iPhone 4 In All Store - Coupon Code NY2017
						</div>
					</div>
					<div class="topbar-close"><span class="button">button</span>
					</div>
				</div>
			</div>
			<div class="header-top hidden-compact">
				<div class="container">
					<div class="row">
						<div class="header-top-left  col-lg-6  col-sm-7 col-md-6 hidden-xs">
							<div class="list-contact">
								<div class="contact-html clearfix"> 
									<span class="email">Marketing@topdeal.com</span>
									<span class="add">Manhattan St, Amarillo, US</span>
								</div>
							</div> 
						</div>
						<div class="header-top-right collapsed-block col-lg-6 col-sm-5 col-md-6 col-xs-12 ">
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="account hidden" id="my_account">
										<a href="#" title="My Account" class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span>My Account</span> <span class="fa fa-angle-down"></span></a>
										<ul class="dropdown-menu ">

											<li><a href="#">My Account</a></li>
											<li><a href="#">Order History</a></li>
											<li><a href="#">Transactions</a></li>
											<li><a href="#">Downloads</a></li>
											<li class="checkout"><a href="#" class="btn-link" title="Checkout "><span >Checkout </span></a></li>

										</ul>
									</li>
									<li class="login">

										<a class="link-lg" href="#">Register </a> /
										<a class="link-lg" href="#">Login </a>
									</li>
									<!-- LANGUAGE CURENTY -->
									<li>
										<div class="pull-left">
											<form action="#" method="post" enctype="multipart/form-data" id="form-language">
												<div class="btn-group">
													<button class="btn-link dropdown-toggle" data-toggle="dropdown">

														<img src="image/catalog/flags/gb.png" alt="English" title="English">
														<span class="hidden-xs hidden-sm hidden-md">English</span>&nbsp;<i class="fa fa-angle-down"></i>

													</button>

													<ul class="dropdown-menu">
														<li>
															<button class="btn-block language-select" type="button" name="ar-ar"><img src="image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic</button>
														</li>
														<li>
															<button class="btn-block language-select" type="button" name="en-gb"><img src="image/catalog/flags/gb.png" alt="English" title="English" /> English</button>
														</li>
													</ul>
												</div>
												<input type="hidden" name="code" value="" />
												<input type="hidden" name="redirect" value="#" />
											</form>
										</div>
									</li>
									<li class="currency">
										<div class="pull-left">
											<form action="#" method="post" enctype="multipart/form-data" id="form-currency">
												<div class="btn-group">
													<button class="btn-link dropdown-toggle" data-toggle="dropdown">

														$<span class="hidden-xs"> US Dollar</span>

														<i class="fa fa-angle-down"></i>
													</button>
													<ul class="dropdown-menu">
														<li>
															<button class="currency-select btn-block" type="button" name="EUR">€ Euro</button>
														</li>
														<li>
															<button class="currency-select btn-block" type="button" name="GBP">£ Pound Sterling</button>
														</li>
														<li>
															<button class="currency-select btn-block" type="button" name="USD">$ US Dollar</button>
														</li>
													</ul>
												</div>
												<input type="hidden" name="code" value="" />
												<input type="hidden" name="redirect" value="#" />
											</form>
										</div>
									</li>
								</ul>
							</div>
						</div>          
						
					</div>
				</div>
			</div>
			<!-- //Header Top -->
			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- LOGO -->
						<div class="navbar-logo col-lg-3 col-md-12 col-xs-12">
								<a href="#"><img src="image/catalog/demo/logo/logo-2.png" title="Yourstore - Layout 2" alt="Yourstore - Layout 2" /></a>
						</div>

						<div class="header-center-right col-lg-6 col-md-7 col-sm-7 col-xs-9">
						<!-- BOX CONTENT MENU -->
							<div class="header_search">

								<div id="sosearchpro" class="sosearchpro-wrapper so-search ">

									<form method="GET" action="index.php">
										<div id="search0" class="search input-group form-group">

											<div class="select_category filter_type  icon-select">
												<select class="no-border" name="category_id">
													<option value="0">All Categories </option>

													<option value="82 ">Book Stationery </option>

													<option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Girls New </option>

													<option value="56">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kitchen </option>

													<option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl mens </option>

													<option value="38 ">Laptop &amp; Notebook </option>

													<option value="52 ">Spa &amp; Massage </option>

													<option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>

													<option value="53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necklaces </option>

													<option value="54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl Jewelry </option>

													<option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Slider 925 </option>

													<option value="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phones &amp; PDAs </option>

													<option value="59 ">Sport &amp; Entertaiment </option>

													<option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camping &amp; Hiking </option>

													<option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cusen mariot </option>

													<option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engite nanet </option>

													<option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fashion </option>

													<option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men </option>

													<option value="60 ">Travel &amp; Vacation </option>

													<option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Best Tours </option>

													<option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cruises </option>

													<option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Destinations </option>

													<option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel &amp; Resort </option>

													<option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Infocus </option>

													<option value="18 ">Laptops &amp; Notebooks </option>

													<option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Macs </option>

													<option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Windows </option>

													<option value="34 ">Food &amp; Restaurant </option>

													<option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>

													<option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>

													<option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>

													<option value="49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>

													<option value="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>

													<option value="51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web Cameras </option>

													<option value="39 ">Shop Collection </option>

													<option value="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>

													<option value="41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>

													<option value="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>

													<option value="58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>

													<option value="17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>

													<option value="57">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>

													<option value="35 ">Fashion &amp; Accessories </option>

													<option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dress Ladies </option>

													<option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jean </option>

													<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men Fashion </option>

													<option value="88">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T-shirt </option>

													<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trending </option>

													<option value="37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Western Wear </option>

													<option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Women Fashion </option>

													<option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bags </option>

													<option value="33 ">Digital &amp; Electronics </option>

													<option value="83">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell Computers </option>

													<option value="84">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Accessories </option>

													<option value="85">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Headsets </option>

													<option value="86">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desna Jacket </option>

													<option value="87">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electronics </option>

													<option value="89">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Headphone </option>

													<option value="90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laptops </option>

													<option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobiles </option>

													<option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sound </option>

													<option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; USB &amp; HDD </option>

													<option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VGA and CPU </option>

													<option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video &amp; Camera </option>

													<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video You </option>

													<option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wireless Speakers </option>

													<option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camera New </option>

													<option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Case </option>

													<option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell &amp; Cable </option>

													<option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobile &amp; Table </option>

													<option value="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bluetooth Speakers </option>

												</select>
											</div>

											<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
											<span class="input-group-btn">
													<button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i><span class="hidden">Search</span></button>
											</span>
										</div>

										<input type="hidden" name="route" value="product/search" />
									</form>
								</div>

							</div>
						</div>

						<div class="header-cart-phone col-lg-3 col-md-5 col-sm-5 col-xs-3">
							<div class="bt-head header-phone">
								<div class="call-us hidden-sm-down">
									<div class="icon"></div>
									<div class="text">
										<p class="text">Free Call Us</p>
										<p class="phone">(+123) 456 7890</p>
									</div>
								</div>
							</div>
							<div class="bt-head header-cart">
								<div id="cart" class="btn-shopping-cart">

									<a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
										<div class="shopcart">
											<span class="handle pull-left"></span>
											<div class="cart-info">
												<h2 class="title-cart">Shopping cart</h2>
												<h2 class="title-cart2 hidden">My Cart</h2>
												<span class="total-shopping-cart cart-total-full">
													<span class="items_cart">0 </span>
													<span class="items_cart2">item(s)</span>
													<span class="items_carts"> - $0.00</span>
												</span>
											</div>
										</div>
									</a>

									<ul class="dropdown-menu pull-right shoppingcart-box">
										<li>
											<p class="text-center empty">Your shopping cart is empty!</p>
										</li>
									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header center -->
			<!-- Header bottom-->
			<div class="header-bottom hidden-compact">
				<div class="container">
					<div class="header-bottom-inner">
						<div class="row">
							<div class="header-bottom-left menu-vertical col-md-3 col-sm-6 col-xs-7">
								<div class="megamenu-style-dev">
									<div class="responsive">
										<div class="so-vertical-menu no-gutter">
											<nav class="navbar-default">
												<div class=" container-megamenu  container   vertical  ">
													<div id="menuHeading">
														<div class="megamenuToogle-wrapper">
															<div class="megamenuToogle-pattern">
																<div class="container">
																	<div><span></span><span></span><span></span></div>
																	<span class="title-mega">
															   All Categories  
															   </span>
																</div>
															</div>
														</div>
													</div>
													<div class="navbar-header">
														<span class="title-navbar hidden-lg hidden-md">  All Categories  </span>
														<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</button>
													</div>
													<div class="vertical-wrapper">
														<span id="remove-verticalmenu" class="fa fa-times"></span>
														<div class="megamenu-pattern">
															<div class="container">
																<ul class="megamenu" data-transition="slide" data-animationtime="300">
																	<li class="item-vertical  style1">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><i class="icon icon1"></i><img src="image/catalog/demo/menu/icon/icon-6.png" alt="">Hot Deal</strong>
																  </span>
																		</a>
																	</li>
																	<li class="item-vertical  vertical-style2 with-sub-menu hover">
																		<p class='close-menu'></p>
																		<a class="clearfix">
																			<span>
																  <strong><i class="icon  icon2"></i><img src="image/catalog/demo/menu/icon/icon-1.png" alt="">Electronics</strong>
																  </span>
																			<b class='fa fa-caret-right'></b>
																		</a>
																		<div class="sub-menu" style="width:890px">
																			<div class="content">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="html item-1">
																							<div class="row">
																								<div class="col-lg-7 col-md-7 col-sm-8">
																									<div class="item-3 col-lg-6 col-md-6 icon-1">
																										<a href="#" title="Mobile &amp; Table">Mobile &amp; Table</a>
																										<ul>
																											<li>
																												<a href="#" title="Laptops &amp; Tablets">Laptops &amp; Tablets</a>
																											</li>
																											<li>
																												<a href="#" title="Computer Accessories">Computer Accessories</a>
																											</li>
																										</ul>
																									</div>
																									<div class="item-3 col-lg-6 col-md-6 cat-child icon-2 parent">
																										<a href="#" title="Sound">Sound</a>
																										<ul>
																											<li class="">
																												<a href="#" title="Bluetooth Speakers">Bluetooth Speakers</a>
																											</li>
																											<li class="">
																												<a href="#" title="Wireless Speakers">Wireless Speakers</a>
																											</li>
																										</ul>
																									</div>
																									<div class="item-3 col-lg-6 col-md-6 cat-child icon-3 parent">
																										<a href="#" title="Headphone">Headphone</a>
																										<ul>
																											<li class="">
																												<a href="#" title="VGA and CPU">VGA and CPU</a>
																											</li>
																											<li class="">
																												<a href="#" title="Desna Jacket">Desna Jacket</a>
																											</li>
																										</ul>
																									</div>
																									<div class="item-3 col-lg-6 col-md-6 cat-child icon-4 parent">
																										<a href="#" title="Video &amp; Camera">Video &amp; Camera</a>
																										<ul>
																											<li class="">
																												<a href="#" title="Camera New">Camera New</a>
																											</li>
																											<li class="">
																												<a href="#" title="Video You">Video You</a>
																											</li>
																										</ul>
																									</div>
																									<div class="item-3 col-lg-6 col-md-6 cat-child icon-5 parent">
																										<a href="#" title="Mobile &amp; Table">USB &amp; HDD</a>
																										<ul>
																											<li class="">
																												<a href="#" title="Usb Computer">USB Computer</a>
																											</li>
																											<li class="">
																												<a href="#" title="HDD Computer">HDD Computer</a>
																											</li>
																										</ul>
																									</div>
																									<div class="item-3 col-lg-6 col-md-6 icon-6">
																										<a href="#" title="Cell &amp; Cable">Cell &amp; Cable</a>
																										<ul>
																											<li class="">
																												<a href="#" title="Cell Computers">Cell Computers</a>
																											</li>
																											<li class="">
																												<a href="#" title="Cable Com">Cable Com</a>
																											</li>
																										</ul>
																									</div>
																									<div class="item-3 col-lg-6 col-md-6 icon-7">
																										<a href="#" title="Cell &amp; Cable">Laptop</a>
																										<ul>
																											<li class="">
																												<a href="#" title="Computer Headsets">Computer Headsets</a>
																											</li>
																											<li class="">
																												<a href="#" title="Headphone Earpads">Headphone Earpads</a>
																											</li>
																										</ul>
																									</div>
																									<div class="item-3 col-lg-6 col-md-6 cat-child icon-8 parent">
																										<a href="#" title="Case">Case</a>
																										<ul>
																											<li class="">
																												<a href="#" title="Case Computer">Case Computer</a>
																											</li>
																											<li class="">
																												<a href="#" title="Vafar Comfaoe">Vafar Comfaoe</a>
																											</li>
																										</ul>
																									</div>
																								</div>
																								<div class="img-banner col-lg-5 col-md-5 col-sm-4">
																									<a href="#"><img src="image/catalog/demo/menu/img-static-megamenu-h.jpg" alt="banner"></a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="item-vertical  vertical-style3 with-sub-menu hover">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><i class="icon  icon3"></i><img src="image/catalog/demo/menu/icon/icon-2.png" alt="">Travel &amp; Vacation</strong>
																  </span>
																			<b class='fa fa-caret-right'></b>
																		</a>
																		<div class="sub-menu" style="width:495px">
																			<div class="content">
																				<div class="row">
																					<div class="col-sm-5">
																						<div class="html item-1">
																							<div class="label-vertical">
																								<div><a href="#"><span class="color1">Hot!</span>Best Sellers </a></div>
																								<div><a href="#"><span class="color2">New!</span>New Arrivals </a> </div>
																								<div><a href="#"><span class="color3">Sale!</span>Special Offers </a></div>
																							</div>
																							<ul>
																								<li class=""><a href="#">Hotel &amp; Resort</a></li>
																								<li class=""><a href="#" title="Best Tours">Best Tours</a></li>
																								<li class=""><a href="#" title="Vacation Rentanls">Vacation Rentanls</a></li>
																								<li class=""><a href="#" title="Infocus">Infocus</a></li>
																								<li class=""><a href="#" title="Restaurants">Restaurants</a></li>
																								<li class=""><a href="#" title="Travel Trekking">Travel Trekking</a></li>
																								<li class=""><a href="#" title="Destinations">Destinations</a></li>
																								<li class=""><a href="#" title="Cruises">Cruises</a></li>
																								<li class=""><a href="#" title="Water Parks">Water Parks</a></li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-sm-7">
																						<div class="html ">
																							<div class="row img-banner">
																								<a href="#"><img src="image/catalog/demo/menu/ver-img-1.jpg" alt="banner"></a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="item-vertical ">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><i class="icon  icon4"></i><img src="image/catalog/demo/menu/icon/icon-3.png" alt="">Book Stationery</strong>
																  </span>
																		</a>
																	</li>
																	<li class="item-vertical   item-style3 with-sub-menu hover">
																		<p class='close-menu'></p>
																		<a class="clearfix">
																			<span>
																  <strong><i class="icon  icon5"></i><img src="image/catalog/demo/menu/icon/icon-4.png" alt="">Fashion</strong>
																  </span>
																			<b class='fa fa-caret-right'></b>
																		</a>
																		<div class="sub-menu" style="width:650px">
																			<div class="content">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-4 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Digital &amp; Electronics</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Girls New</a></li>
																													<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																													<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																													<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																													<li><a href="h#" onclick="window.location = '#';">Book Stationery</a></li>
																													<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																													<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																								<div class="col-sm-4 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																													<li><a href="#" onclick="window.location = '#';">Girls New</a></li>
																													<li><a href="#" onclick="window.location = 'h#';">Pearl Jewelry</a></li>
																													<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																													<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																													<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																													<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																								<div class="col-sm-4 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Western Wear</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Video You</a></li>
																													<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																													<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																													<li><a href="#" onclick="window.location = '#';">Jean</a></li>
																													<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																													<li><a href="#" onclick="window.location = '#';">Laptop &amp; Notebook</a></li>
																													<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="border"></div>
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="link banner-full">
																							<img src="image/catalog/demo/menu/menu_bg2.jpg" alt="" style="width: 100%;">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="item-vertical ">
																		<p class='close-menu'></p>
																		<a class="clearfix">
																			<span>
																  <strong><i class="icon  icon6"></i><img src="image/catalog/demo/menu/icon/icon-5.png" alt="">Sport &amp; Entertaiment</strong>
																  </span>
																		</a>
																	</li>
																	<li class="item-vertical  css-menu with-sub-menu hover">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><i class="icon  icon8"></i><img src="image/catalog/demo/menu/icon/icon-8.png" alt="">Spa &amp; Massage</strong>
																  </span>
																			<b class='fa fa-caret-right'></b>
																		</a>
																		<div class="sub-menu" style="width:250px">
																			<div class="content">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-12 hover-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Book Stationery<b class="fa fa-angle-right"></b></a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																													<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																													<li><a href="#" onclick="window.location = '#   ';">Jean</a></li>
																													<li><a href="#" onclick="window.location = '#';">Case</a></li>
																												</ul>
																											</li>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Book Stationery<b class="fa fa-angle-right"></b></a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Girls New</a></li>
																													<li>
																														<a href="#" onclick="window.location = '#';">Pearl mens<b class="fa fa-angle-right"></b></a>
																														<ul>
																															<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																														</ul>
																													</li>
																													<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																													<li>
																														<a href="#" onclick="window.location = '#';">Trending<b class="fa fa-angle-right"></b></a>
																														<ul>
																															<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																														</ul>
																													</li>
																												</ul>
																											</li>
																											<li><a href="#" onclick="window.location = '#';" class="main-menu">Kitchen</a></li>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Book Stationery<b class="fa fa-angle-right"></b></a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																													<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																													<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																													<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																												</ul>
																											</li>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Case<b class="fa fa-angle-right"></b></a>
																												<ul>
																													<li>
																														<a href="#" onclick="window.location = '#';">Bluetooth Speakers<b class="fa fa-angle-right"></b></a>
																														<ul>
																															<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																															<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																															<li><a href="#" onclick="window.location = '#';">Women Fashion</a></li>
																														</ul>
																													</li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="item-vertical ">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><i class="icon  icon9"></i><img src="image/catalog/demo/menu/icon/icon-9.png" alt="">Real House</strong>
																  </span>
																		</a>
																	</li>
																	<li class="item-vertical ">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><img src="image/catalog/demo/menu/icon/icon-6.png" alt="">Mom &amp; Baby</strong>
																  </span>
																		</a>
																	</li>
																	<li class="item-vertical ">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><img src="image/catalog/demo/menu/icon/icon-7.png" alt="">Food &amp; Restaurant</strong>
																  </span>
																		</a>
																	</li>
																	<li class="item-vertical ">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<span>
																  <strong><img src="image/catalog/demo/menu/icon/icon-9.png" alt="">Jewelry &amp; Watches</strong>
																  </span>
																			<span class="labelho"></span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</nav>
										</div>
									</div>
									
								</div>
							</div>
							<div class="header-bottom-right col-md-9 col-sm-6 col-xs-5">
								<div class="header-menu">
									<div class="megamenu-style-dev megamenu-dev">
										<div class="responsive">
											<nav class="navbar-default">
												<div class=" container-megamenu   horizontal ">
													<div class="navbar-header">
														<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</button>
													</div>
													<div class="megamenu-wrapper">
														<span id="remove-megamenu" class="fa fa-times"></span>
														<div class="megamenu-pattern">
															<div class="container">
																<ul class="megamenu" data-transition="slide" data-animationtime="500">
																	<li class="full-width menu-home with-sub-menu hover">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<strong>
																  Home
																  </strong>
																			<b class='caret'></b>
																		</a>
																		<div class="sub-menu" style="width: 630px">
																			<div class="content">
																				<div class="row">
																					<div class="col-sm-12">
																						<div class="html ">
																							<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
																								<a href="index.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
																									<img src="image/catalog/demo/menu/feature/layout1.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
																									<p>Home Page 1</p>
																								</a>
																							</div>
																							<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
																								<a href="home2.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
																									<img src="image/catalog/demo/menu/feature/layout2.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
																									<p>Home Page 2 </p>
																								</a>
																							</div>
																							<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
																								<a href="home3.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
																									<img src="image/catalog/demo/menu/feature/layout3.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
																									<p>Home Page 3 </p>
																								</a>
																							</div>
																							<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
																								<a href="#" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
																									<img src="image/catalog/demo/menu/feature/layout4.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
																									<p>Home Page 4 </p>
																								</a>
																							</div>
																							<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
																								<a href="home5.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
																									<img src="image/catalog/demo/menu/feature/layout5.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
																									<p>Home Page 5 </p>
																								</a>
																							</div>
																							<div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center; margin-bottom: 20px;min-height: 140px;">
																								<a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
																									<img src="image/catalog/demo/menu/feature/layout6.jpg" alt="layout" style="margin: 0 0 10px; border: 1px solid #ddd;display: inline-block">
																									<p>Home Page 6 </p>
																								</a>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="full-width option2 with-sub-menu hover">
												   <p class="close-menu"></p>
												   <a class="clearfix">
												   <strong>
												   Features
												   </strong>
												   <span class="labelopencart"></span>
												   <b class="caret"></b>
												   </a>
												   <div class="sub-menu" style="width: 100%;">
													  <div class="content" >
														 <div class="row">
															<div class="col-sm-12">
															   <div class="html ">
																  <div class="row">
																	<div class="col-md-3">
																	  <div class="column">
																		<a href="#" class="title-submenu">Listing pages</a>
																		<div>
																		  <ul class="row-list">
																			<li><a href="category.html">Category Page 1 </a></li>
																			<li><a href="category-v2.html">Category Page 2</a></li>
																			<li><a href="category-v3.html">Category Page 3</a></li>
																		  </ul>
																		  
																		</div>
																	  </div>
																	</div>
																	<div class="col-md-3">
																	  <div class="column">
																		<a href="#" class="title-submenu">Product pages</a>
																		<div>
																		  <ul class="row-list">
																			<li><a href="product.html">Image size - small</a></li>
																			<li><a href="product-v2.html">Image size - medium</a></li>
																			<li><a href="product-v3.html">Image size - big</a></li>
																		  </ul>
																		</div>
																	  </div>
																	</div>
																	<div class="col-md-3">
																	  <div class="column">
																		<a href="#" class="title-submenu">Shopping pages</a>
																		<div>
																		  <ul class="row-list">
																			<li><a href="cart.html">Shopping Cart Page</a></li>
																			<li><a href="checkout.html">Checkout Page</a></li>
																			<li><a href="compare.html">Compare Page</a></li>
																			<li><a href="wishlist.html">Wishlist Page</a></li>
																		  
																		  </ul>
																		</div>
																	  </div>
																	</div>
																	<div class="col-md-3">
																	  <div class="column">
																		<a href="#" class="title-submenu">My Account pages</a>
																		<div>
																		  <ul class="row-list">
																			<li><a href="login.html">Login Page</a></li>
																			<li><a href="register.html">Register Page</a></li>
																			<li><a href="my-account.html">My Account</a></li>
																			<li><a href="order-history.html">Order History</a></li>
																			<li><a href="order-information.html">Order Information</a></li>
																			<li><a href="return.html">Product Returns</a></li>
																			<li><a href="gift-voucher.html">Gift Voucher</a></li>
																		  </ul>
																		</div>
																	  </div>
																	</div>
																  </div>
															   </div>
															</div>
														 </div>
													  </div>
												   </div>
												</li>
																	<li class="item-style1 content-full with-sub-menu hover">
																		<p class='close-menu'></p>
																		<a class="clearfix">
																			<strong>
																  Colections
																  </strong>
																			<span class="labelNew"></span>
																			<b class='caret'></b>
																		</a>
																		<div class="sub-menu" style="width: 100%">
																			<div class="content">
																				<div class="row">
																					<div class="col-sm-3">
																						<div class="link ">
																							<img src="image/catalog/demo/menu/menu-img1.jpg" alt="" style="width: 100%;">
																						</div>
																					</div>
																					<div class="col-sm-3">
																						<div class="link ">
																							<img src="image/catalog/demo/menu/menu-img2.jpg" alt="" style="width: 100%;">
																						</div>
																					</div>
																					<div class="col-sm-3">
																						<div class="link ">
																							<img src="image/catalog/demo/menu/menu-img3.jpg" alt="" style="width: 100%;">
																						</div>
																					</div>
																					<div class="col-sm-3">
																						<div class="link ">
																							<img src="image/catalog/demo/menu/menu-img4.jpg" alt="" style="width: 100%;">
																						</div>
																					</div>
																				</div>
																				<div class="border"></div>
																				<div class="row">
																					<div class="col-sm-3">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-12 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#">Food &amp; Restaurant</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																													<li><a href="#" onclick="window.location = '#';">Women Fashion</a></li>
																													<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																													<li><a href="#" onclick="window.location = '#';">Fashion</a></li>
																													<li><a href="#" onclick="window.location = '#';">Trending</a></li>
																													<li><a href="#" onclick="window.location = '#';">Macs</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="col-sm-3">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-12 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#">Fashion &amp; Accessories</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
																													<li><a href="#" onclick="window.location = '#';">Destinations</a></li>
																													<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																													<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																													<li><a href="#" onclick="window.location = '#';">Camera New</a></li>
																													<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="col-sm-3">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-12 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#">Sport &amp; Entertaiment</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																													<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																													<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																													<li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
																													<li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
																													<li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="col-sm-3">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-12 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																													<li><a href="#" onclick="window.location = '#';">Windows</a></li>
																													<li><a href="#" onclick="window.location = '#';">Pearl mens</a></li>
																													<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
																													<li><a href="#" onclick="window.location = 'h#';">Spa &amp; Massage</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class=" item-style2 content-full feafute with-sub-menu hover">
																		<p class='close-menu'></p>
																		<a class="clearfix">
																			<strong>
																  Accessories
																  </strong>
																			<b class='caret'></b>
																		</a>
																		<div class="sub-menu" style="width: 100%">
																			<div class="content">
																				<div class="row">
																					<div class="col-sm-8">
																						<div class="categories ">
																							<div class="row">
																								<div class="col-sm-4 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Digital &amp; Electronics</a></li>
																													<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																													<li><a href="#" onclick="window.location = '#';">Cell &amp; Cable</a></li>
																													<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
																													<li><a href="#" onclick="window.location = '#';">Sport &amp; Entertaiment</a></li>
																												</ul>
																											</li>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Pearl mens</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Web Cameras</a></li>
																													<li><a href="#" onclick="window.location = '#';">Windows</a></li>
																													<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																													<li><a href="#" onclick="window.location = '#';">Knage unget</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																								<div class="col-sm-4 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Jean</a></li>
																													<li><a href="#" onclick="window.location = '#';">Latenge mange</a></li>
																													<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																													<li><a href="#" onclick="window.location = '#';">Trending</a></li>
																													<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																												</ul>
																											</li>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Mobile &amp; Table</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Case</a></li>
																													<li><a href="#" onclick="window.location = '#';">Laptop &amp; Notebook</a></li>
																													<li><a href="#" onclick="window.location = '#';">Laptops &amp; Notebooks</a></li>
																													<li><a href="#" onclick="window.location = '#';">Dress Ladies</a></li>
																													<li><a href="#" onclick="window.location = '#';">Kitchen</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																								<div class="col-sm-4 static-menu">
																									<div class="menu">
																										<ul>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Cell &amp; Cable</a>
																												<ul>
																													<li><a href="#" onclick="window.location = '#';">Bluetooth Speakers</a></li>
																													<li><a href="#" onclick="window.location = '#';">Fashion &amp; Accessories</a></li>
																													<li><a href="#" onclick="window.location = '#';">Qunge genga</a></li>
																													<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																													<li><a href="#" onclick="window.location = '#';">Punge nenune</a></li>
																												</ul>
																											</li>
																											<li>
																												<a href="#" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
																												<ul>
																													<li><a href="h#" onclick="window.location = '#';">Fashion</a></li>
																													<li><a href="#" onclick="window.location = '#';">Bags</a></li>
																													<li><a href="#" onclick="window.location = '#';">Necklaces</a></li>
																													<li><a href="#" onclick="window.location = '#';">Tange manue</a></li>
																													<li><a href="#" onclick="window.location = '#';">Men Fashion</a></li>
																												</ul>
																											</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="col-sm-4">
																						<div class="product best-sellers-menu">
																							<div class="image">
																								<a href="#" onclick="window.location = '#'"><img src="image/catalog/demo/product/fashion/24.png" alt=""></a>
																							</div>
																							<div class="name"><a href="#" onclick="window.location = '#'">Est Officia Including Shoes Beautiful Pieces Canaz</a></div>
																							<div class="price">
																								$80.00
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="style-page with-sub-menu hover">
																		<p class="close-menu"></p>
																		<a class="clearfix">
																		<strong>
																		Pages
																		</strong>
																		<b class="caret"></b>
																		</a>
																		<div class="sub-menu" style="width: 40%;">
																		   <div class="content" >
																			  <div class="row">
																			   <div class="col-md-6">
																				 <ul class="row-list">
																				   <li><a class="subcategory_item" href="faq.html">FAQ</a></li>
																				   
																				   <li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
																				   <li><a class="subcategory_item" href="contact.html">Contact us</a></li>
																				   <li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																				 </ul>
																			   </div>
																			   <div class="col-md-6">
																				 <ul class="row-list">
																				   <li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																				   <li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																				   <li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																				   <li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																				 </ul>
																			   </div>
																			 </div>
																		   </div>
																		</div>
																	 </li>
																	<li class="">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<strong>
																  Blog
																  </strong>
																		</a>
																	</li>
																	<li class="hidden">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<strong>
																  <img src="image/catalog/demo/menu/hot-block.png" alt="">Buy This Theme!
																  </strong>
																		</a>
																	</li>
																	<li class="hidden">
																		<p class='close-menu'></p>
																		<a href="#" class="clearfix">
																			<strong>
																  Today Deals
																  </strong>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</nav>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div id="content">
		   <div class="so-page-builder">
			  <section class="section_1_h2 section-color">
			   <div class="container page-builder-ltr">
				  <div class="row row-style row_klsd">
					 <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_2w6x  col-style">
						<div class="module sohomepage-slider so-homeslider-ltr  ">
						   <div class="modcontent">
							  <div id="sohomepage-slider1">
								 <div class="so-homeslider yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
									<div class="item">
									   <a href=" #   " title="slide 1 - 1" target="_self">
									   <img class="responsive" src="image/catalog/demo/slider/home2/sample-1.jpg" alt="slide 1 - 1">
									   </a>
									   <div class="sohomeslider-description">
									   </div>
									</div>
									<div class="item">
									   <a href=" #   " title="slide 1 - 2" target="_self">
									   <img class="responsive" src="image/catalog/demo/slider/home2/sample-2.jpg" alt="slide 1 - 2">
									   </a>
									   <div class="sohomeslider-description">
									   </div>
									</div>
									<div class="item">
									   <a href=" #   " title="slide 1 - 3" target="_self">
									   <img class="responsive" src="image/catalog/demo/slider/home2/sample-3.jpg" alt="slide 1 - 3">
									   </a>
									   <div class="sohomeslider-description">
									   </div>
									</div>
								 </div>
								 
							  </div>
						   </div>
						   <!--/.modcontent-->
						</div>
						<div class="banner-layout-2 bt-1 clearfix">
						   <div class="banners">
							  <a href="#" title="Banner 1">       
							  <img src="image/catalog/demo/banners/home2/banner01.jpg" alt="Static Image">
							  </a> 
						   </div>
						   <div class="banners">
							  <a href="#" title="Banner 2">       
							  <img src="image/catalog/demo/banners/home2/banner02.jpg" alt="Static Image">
							  </a> 
						   </div>
						   <div class="banners">
							  <a href="#" title="Banner 3">       
							  <img src="image/catalog/demo/banners/home2/banner03.jpg" alt="Static Image">
							  </a> 
						   </div>
						</div>
					 </div>

					 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_mwks col-style">
						<div class="module so-deals-ltr home2_deals">
						   <h3 class="modtitle font-ct">Flash Deal </h3>
						   <div class="modcontent">
							  <div id="so_deals_0397" class="so-deal products-list grid modcontent clearfix preset00-1 preset01-1 preset02-2 preset03-2 preset04-1  button-type1  style2">
								 <div class="extraslider-inner product-layout" data-effect="none">
									<div class="item">
									   <div class="product-thumb product-item-container transition">
										  <div class="left-block">
											 <div class="product-image-container so-quickview">
												<div class="box-label">
												   <span class="label-product label-sale">-20%</span>
												</div>
												<a href="product.html" target="_self">
												<img src="image/catalog/demo/product/electronic/1-268x268.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" class="img-responsive">
												</a>
												<a class="lt-image hidden" 
												   href="product.html" target="_self"
												   title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
												</a>
											 </div>
										  </div>
										  <div class="right-block">
											 <div class="caption">
												<div class="rating">
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
												<div class="price">
												   <span class="price-new">$80.00</span>
												   <span class="price-old">$100.00</span>
												</div>
												<div class="item-time">
												   <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
												   <div class="item-timer product_time_1"></div>
												</div>
											 </div>
											 <div class="button-group2">
												<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
											 </div>
										  </div>
									   </div>
									</div>
									<div class="item">
									   <div class="product-thumb product-item-container transition">
										  <div class="left-block">
											 <div class="product-image-container so-quickview">
												<div class="box-label">
												   <span class="label-product label-sale">-20%</span>
												</div>
												<a href="product.html" target="_self">
												<img src="image/catalog/demo/product/electronic/11-268x268.jpg" alt="Charger  Compact Portable with Premium" class="img-responsive">
												</a>
												<a class="lt-image hidden" 
												   href="product.html" target="_self"
												   title="Charger  Compact Portable with Premium">
												</a>
											 </div>
										  </div>
										  <div class="right-block">
											 <div class="caption">
												<div class="rating">
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
												</div>
												<h4><a href="product.html" target="_self" title="Charger  Compact Portable with Premium"> Charger  Compact Portable with Premium</a></h4>
												<div class="price">
												   <span class="price-new">$80.00</span>
												   <span class="price-old">$100.00</span>
												</div>
												<div class="item-time">
												   <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
												   <div class="item-timer product_time_11"></div>
												</div>
											 </div>
											 <div class="button-group2">
												<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
											 </div>
										  </div>
									   </div>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>

					 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6p0e  block block_1">
						<div class="hashtags clearfix">
						   <h3 class="title_block">Hashtags</h3>
						   <ul class="clearfix"><li class="item col-md-2 col-sm-4 col-xs-4">
						   <div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/tag-1.jpg" alt="Static Image"></a></div>
						   <div class="item-content">
						   <h4><a href="#">#Menfashion</a></h4>
						   </div>
						   </li>
						   <li class="item col-md-2 col-sm-4 col-xs-4">
						   <div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/tag-2.jpg" alt="Static Image"></a></div>
						   <div class="item-content">
						   <h4><a href="#">#Macbook</a></h4>
						   </div>
						   </li>
						   <li class="item col-md-2 col-sm-4 col-xs-4">
						   <div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/tag-3.jpg" alt="Static Image"></a></div>
						   <div class="item-content">
						   <h4><a href="#">#Kiddresses</a></h4>
						   </div>
						   </li>
						   <li class="item item2 col-md-2 col-sm-4 col-xs-4">
						   <div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/tag-4.jpg" alt="Static Image"></a></div>
						   <div class="item-content">
						   <h4><a href="#">#Cosmetics</a></h4>
						   </div>
						   </li>
						   <li class="item item2 col-md-2 col-sm-4 col-xs-4">
						   <div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/tag-5.jpg" alt="Static Image"></a></div>
						   <div class="item-content">
						   <h4><a href="#">#Shoes</a></h4>
						   </div>
						   </li>
						   <li class="item item2 col-md-2 col-sm-4 col-xs-4">
						   <div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/tag-6.jpg" alt="Static Image"></a></div>
						   <div class="item-content">
						   <h4><a href="#">#Women Fahion</a></h4>
						   </div>
						   </li>
						   </ul><div class="more"><a href="#"> View All </a></div>
						</div>
					 </div>


				  </div>
			   </div>
				 
			  </section>
			  <section class="section_2_h2">
				 <div class="container page-builder-ltr">
				   <div class="row row-style row_ksdi">
					  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_22at  block block_2">
						<div class="module so-deals-ltr home2_deals_style2">
						  <h3 class="modtitle font-ct">Weekly Deal</h3>
						  <div class="modcontent">
							<div id="so_deals_0398" class="so-deal slick-vertical so-deals-slick deals-slider-preload">
							  <div class="so-deals-slider-loading"></div>
							  <div class="deals-nav"></div>
							  <div class="deals-content">
								<div class="ds-items-detail">
								  <div class="item active">
									<div class="product-thumb transition">
									  <div class="image">
										<div class="box-label">
										  <span class="label-product label-sale">-20%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/1-370x370.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" class="img-responsive">
										</a>
									  </div>
									  <div class="caption">
										<div class="item-time font-ct">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_30"></div>
										</div>
										<h4><a href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" > Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
										<div class="price">
										  <span class="price-new">$80.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<p class="des">【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shap..</p>
										<div class="button-group">
										  <button class="bt-cart addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
										  <button class="bt wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
										  <button class="bt compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
										</div>
									  </div>
									</div>
								  </div>
								  <div class="item">
									<div class="product-thumb transition">
									  <div class="image">
										<div class="box-label">
										  <span class="label-product label-sale">-20%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/11-370x370.jpg" alt="Charger  Compact Portable with Premium" class="img-responsive">
										</a>
									  </div>
									  <div class="caption">
										<div class="item-time font-ct">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_30"></div>
										</div>
										<h4><a href="product.html" target="_self" title=" Charger  Compact Portable with Premium" > Charger  Compact Portable with Premium</a></h4>
										<div class="price">
										  <span class="price-new">$80.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<p class="des">【Neckband Designed】: Around-the-Neck Wearing Style With Body-contoured Fit. Made of ultra-light shap..</p>
										<div class="button-group">
										  <button class="bt-cart addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
										  <button class="bt wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
										  <button class="bt compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
										</div>
									  </div>
									</div>
								  </div>
								  <div class="item ">
									<div class="product-thumb transition">
										<div class="image">
											<div class="box-label">
												<span class="label-product label-sale">-2%</span>
											</div>
											<a href="product.html" target="_self">
											<img src="image/catalog/demo/product/electronic/23-370x370.jpg" alt="Computer Science saepe eveniet ut et volu redae" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="item-time font-ct">
												<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
												<div class="item-timer product_time_58"></div>
											</div>
											<h4><a href="product.html" target="_self" title="Computer Science saepe eveniet ut et volu redae" >Computer Science saepe eveniet ut et volu redae</a></h4>
											<div class="price">
												<span class="price-new">$98.00</span>
												<span class="price-old">$100.00</span>
											</div>
											<p class="des">
												Born to be worn.
												Clip on the worlds most wearable music player and take up to 240 songs wit..
											</p>
											<div class="button-group">
												<button class="bt-cart addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
												<button class="bt wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
												<button class="bt compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
											</div>
										</div>
									</div>
								</div>
								<div class="item ">
									<div class="product-thumb transition">
										<div class="image">
											<div class="box-label">
												<span class="label-product label-sale">-20%</span>
											</div>
											<a href="product.html" target="_self">
											<img src="image/catalog/demo/product/electronic/26-370x370.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" class="img-responsive">
											</a>
										</div>
										<div class="caption">
											<div class="item-time font-ct">
												<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
												<div class="item-timer product_time_105"></div>
											</div>
											<h4><a href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" >Lorem Ipsum dolor at vero eos et iusto odi  with Premium</a></h4>
											<div class="price">
												<span class="price-new">$80.00</span>
												<span class="price-old">$100.00</span>
											</div>
											<p class="des">
												The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed sp..
											</p>
											<div class="button-group">
												<button class="bt-cart addToCart btn-button" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30);"> <span>Add to Cart</span></button>
												<button class="bt wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
												<button class="bt compare btn-button" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
											</div>
										</div>
									</div>
								</div>
								</div>
								<div class="ds-items">
								   <div class="ds-item cf active">
									  <div class="ds-item-inner">
										 <div class="ds-image-thumb">
											<img src="image/catalog/demo/product/electronic/1-77x77.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" class="img-responsive">
										 </div>
									  </div>
								   </div>
								   <div class="ds-item cf ">
									  <div class="ds-item-inner">
										 <div class="ds-image-thumb">
											<img src="image/catalog/demo/product/electronic/11-77x77.jpg" alt="Charger  Compact Portable with Premium" class="img-responsive">
										 </div>
									  </div>
								   </div>
								   <div class="ds-item cf ">
										<div class="ds-item-inner">
											<div class="ds-image-thumb">
												<img src="image/catalog/demo/product/electronic/23-77x77.jpg" alt="Computer Science saepe eveniet ut et volu redae" class="img-responsive">
											</div>
										</div>
									</div>
									<div class="ds-item cf ">
										<div class="ds-item-inner">
											<div class="ds-image-thumb">
												<img src="image/catalog/demo/product/electronic/26-77x77.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" class="img-responsive">
											</div>
										</div>
									</div>
								 
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_ksh4  block block_3 hidden-sm ">
						<div class="banner-layout-2 bn-2 clearfix">
						  <div class="banners">
							<div>
							  <a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/banner04.jpg" alt="Static Image"></a>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_8djr  block block_4">
						<div class="trending clearfix">
						  <div class="text col-md-2 col-sm-3 col-xs-4">
						  <h3 class="title-block"><span>Trending</span> Search</h3>
						  </div>

						  <div class="item col-md-10 col-sm-9 col-xs-8">
							<ul class="out-content contentslider" data-rtl="no" data-loop="no" data-autoplay="yes" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="6" data-items_column1="5" data-items_column2="4" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
							  <li class="item">
								<div class="item-content">
								  <h4><a href="#">Men Fahion</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-1.jpg" alt="Static Image"></a></div>
							  </li>
							  <li class="item item-2">
								<div class="item-content">
								  <h4><a href="#">Iphone 7</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-2.jpg" alt="Static Image"></a></div>
							  </li>
							  <li class="item item-3">
								<div class="item-content">
								  <h4><a href="#">Women Shoes</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-3.jpg" alt="Static Image"></a></div>
							  </li>
							  <li class="item item-3">
								<div class="item-content">
								  <h4><a href="#">Kid Dress</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-4.jpg" alt="Static Image"></a></div>
							  </li>
							  <li class="item item-3">
								<div class="item-content">
								  <h4><a href="#">Jean</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-5.jpg" alt="Static Image"></a></div>
							  </li>
							  <li class="item item-3">
								<div class="item-content">
								  <h4><a href="#">Women Shoes</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-6.jpg" alt="Static Image"></a></div>
							  </li>
							  <li class="item item-3">
								<div class="item-content">
								  <h4><a href="#">Watches</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-3.jpg" alt="Static Image"></a></div>
							  </li>
							  <li class="item item-3">
								<div class="item-content">
								  <h4><a href="#">Jean</a></h4>
								</div>
								<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/home-image-1-5.jpg" alt="Static Image"></a></div>
							  </li>
							</ul>
						  </div>
						</div>
					  </div>
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_0413  block block_5">
						<div class="banner-layout-2 bt-3 clearfix">
						  <div class="banner-1   banners">
							<div>
							<a href="#" title="Banner 1">     
							  <img src="image/catalog/demo/banners/home2/banner05.jpg" alt="Static Image">
							</a>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_sno0  block block_6">
						<div class="module so-extraslider-ltr home2_extra">
						<h3 class="modtitle">Ending Soon</h3>
						<div class="modcontent">
						  <div id="so_extra_slider_0372" class="so-extraslider buttom-type1 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type1">
							<div class="box-banner">
							  <div class="banners">
								<a title="Static Image" href="#"><img src="image/catalog/demo/banners/home2/banner11.jpg" alt="Static Image"></a>    
							  </div>
							</div>
							<!-- Begin extraslider-inner -->
							<div class="extraslider-inner products-list grid" data-effect="none">
							  <div class="item ">
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
										<img src="image/catalog/demo/product/electronic/25-222x222.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
										</a>
									  </div>
									  <div class="box-label">
										<span class="label-product label-sale">-82% </span>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) "  >
										  Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="old-price product-price">$50.00 </span>&nbsp;&nbsp;
										  <span class="price-old">$279.99 </span>&nbsp;
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title="Compact Portable Charger (Power Bank) with Premium">
										<img src="image/catalog/demo/product/electronic/19-222x222.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
										</a>
									  </div>
									  <div class="box-label">
										<span class="label-product label-sale">-70% </span>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium "  >
										  Compact Portable Charger (Power Bank) with Premium 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="old-price product-price">$60.00 </span>&nbsp;&nbsp;
										  <span class="price-old">$199.99 </span>&nbsp;
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
							  </div>
							  <div class="item ">
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title="Portable  Compact Charger (External Battery) t45">
										<img src="image/catalog/demo/product/electronic/4-222x222.jpg" alt="Portable  Compact Charger (External Battery) t45">
										</a>
									  </div>
									  <div class="box-label">
										<span class="label-product label-sale">-40% </span>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45 "  >
										  Portable  Compact Charger (External Battery) t45 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="old-price product-price">$60.00 </span>&nbsp;&nbsp;
										  <span class="price-old">$100.00 </span>&nbsp;
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
										<img src="image/catalog/demo/product/electronic/1-222x222.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
										</a>
									  </div>
									  <div class="box-label">
										<span class="label-product label-sale">-20% </span>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus "  >
										  Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
										  <span class="price-old">$100.00 </span>&nbsp;
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
							  </div>
							  <div class="item ">
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title="Charger  Compact Portable with Premium">
										<img src="image/catalog/demo/product/electronic/11-222x222.jpg" alt="Charger  Compact Portable with Premium">
										</a>
									  </div>
									  <div class="box-label">
										<span class="label-product label-sale">-20% </span>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title="Charger  Compact Portable with Premium "  >
										  Charger  Compact Portable with Premium 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
										  <span class="price-old">$100.00 </span>&nbsp;
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('51');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('51');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title="Compact Portable Charger (External Battery)">
										<img src="image/catalog/demo/product/electronic/13-222x222.jpg" alt="Compact Portable Charger (External Battery)">
										</a>
									  </div>
									  <div class="box-label">
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title="Compact Portable Charger (External Battery) "  >
										  Compact Portable Charger (External Battery) 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="price product-price">
										  $80.00 
										  </span>
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('103');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('103');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('103');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
							  </div>
							  <div class="item ">
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title="Compact Portable Charger (External Battery) T22">
										<img src="image/catalog/demo/product/electronic/21-222x222.jpg" alt="Compact Portable Charger (External Battery) T22">
										</a>
									  </div>
									  <div class="box-label">
										<span class="label-product label-sale">-20% </span>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title="Compact Portable Charger (External Battery) T22 "  >
										  Compact Portable Charger (External Battery) T22 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
										  <span class="price-old">$100.00 </span>&nbsp;
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('88');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('88');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('88');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
								<div class="item-wrap product-layout style1 ">
								  <div class="product-item-container">
									<div class="left-block ">
									  <div class="product-image-container so-quickview">
										<a class="lt-image" 
										  href="product.html" target="_self"
										  title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
										<img src="image/catalog/demo/product/electronic/26-222x222.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
										</a>
									  </div>
									  <div class="box-label">
										<span class="label-product label-sale">-20% </span>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<h4 class="font-ct">
										  <a href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium "  >
										  Lorem Ipsum dolor at vero eos et iusto odi  with Premium 
										  </a>
										</h4>
										<div  class="content_price price font-ct">
										  <span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
										  <span class="price-old">$100.00 </span>&nbsp;
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('105');"> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('105');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('105');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <!-- End item-wrap-inner -->
								</div>
								<!-- End item-wrap -->
							  </div>
							</div>
						  </div>
						</div>
						</div>
					  </div>
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ks4m  block block_7">
						<div class="banner-layout-2 bt-4 clearfix">
						  <div class="group-1 group">
							<div class="banner-6 banners">
							  <div>
								<a href="#" title="Banner 2">     
								<img src="image/catalog/demo/banners/home2/banner06.jpg" alt="Static Image">
								</a>        
							  </div>
							</div>
							<div class="banner-7 banners">
							  <div>
								<a href="#" title="Banner 2">     
								<img src="image/catalog/demo/banners/home2/banner07.jpg" alt="Static Image">
								</a>        
							  </div>
							</div>
						  </div>
						  <div class="group-2 group">
							<div class="banner-8 banners">
							  <div>
								<a href="#" title="Banner 2">     
								<img src="image/catalog/demo/banners/home2/banner08.jpg" alt="Static Image">
								</a>        
							  </div>
							</div>
						  </div>
						  <div class="group-3 group">
							<div class="banner-9 banners">
							  <div>
								<a href="#" title="Banner 2">     
								<img src="image/catalog/demo/banners/home2/banner09.jpg" alt="Static Image">
								</a>        
							  </div>
							</div>
							<div class="banner-10 banners">
							  <div>
								<a href="#" title="Banner 2">     
								<img src="image/catalog/demo/banners/home2/banner10.jpg" alt="Static Image">
								</a>        
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6dkl  block block_8">
						<div class="module so-deals-ltr home2_deals_style3">
						  <h3 class="modtitle font-ct">Recommend</h3>
						  <div class="modcontent">
							<div id="so_deals_0399" class="so-deal products-list grid modcontent clearfix preset00-2 preset01-2 preset02-2 preset03-2 preset04-1  button-type1  style2">
							  <div class="extraslider-inner product-layout" data-effect="none">
								<div class="item">
								  <div class="product-thumb product-item-container transition">
									<div class="left-block">
									  <div class="product-image-container so-quickview">
										<div class="box-label">
										  <span class="label-product label-sale">-20%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/1-270x270.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" class="img-responsive">
										</a>
										<a class="lt-image hidden" 
										  href="product.html" target="_self"
										  title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
										</a>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<div class="rating">
										  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
										</div>
										<h4><a href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
										<div class="price">
										  <span class="price-new">$80.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<div class="item-time">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_30"></div>
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <div class="product-thumb product-item-container transition">
									<div class="left-block">
									  <div class="product-image-container so-quickview">
										<div class="box-label">
										  <span class="label-product label-sale">-20%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/11-270x270.jpg" alt="Charger  Compact Portable with Premium" class="img-responsive">
										</a>
										<a class="lt-image hidden" 
										  href="product.html" target="_self"
										  title="Charger  Compact Portable with Premium">
										</a>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<div class="rating">
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										</div>
										<h4><a href="product.html" target="_self" title="Charger  Compact Portable with Premium">Charger  Compact Portable with Premium</a></h4>
										<div class="price">
										  <span class="price-new">$80.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<div class="item-time">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_51"></div>
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('51');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('51');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								</div>
								<div class="item">
								  <div class="product-thumb product-item-container transition">
									<div class="left-block">
									  <div class="product-image-container so-quickview">
										<div class="box-label">
										  <span class="label-product label-sale">-2%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/23-270x270.jpg" alt="Computer Science saepe eveniet ut et volu redae" class="img-responsive">
										</a>
										<a class="lt-image hidden" 
										  href="product.html" target="_self"
										  title="Computer Science saepe eveniet ut et volu redae">
										</a>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<div class="rating">
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										</div>
										<h4><a href="product.html" target="_self" title="Computer Science saepe eveniet ut et volu redae">Computer Science saepe eveniet ut et volu redae</a></h4>
										<div class="price">
										  <span class="price-new">$98.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<div class="item-time">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_58"></div>
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('58');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('58');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('58');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <div class="product-thumb product-item-container transition">
									<div class="left-block">
									  <div class="product-image-container so-quickview">
										<div class="box-label">
										  <span class="label-product label-sale">-20%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/26-270x270.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" class="img-responsive">
										</a>
										<a class="lt-image hidden" 
										  href="product.html105" target="_self"
										  title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
										</a>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<div class="rating">
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										</div>
										<h4><a href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">Lorem Ipsum dolor at vero eos et iusto odi  with Premium</a></h4>
										<div class="price">
										  <span class="price-new">$80.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<div class="item-time">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_105"></div>
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('105');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('105');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('105');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								</div>
								<div class="item">
								  <div class="product-thumb product-item-container transition">
									<div class="left-block">
									  <div class="product-image-container so-quickview">
										<div class="box-label">
										  <span class="label-product label-sale">-20%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/6-270x270.jpg" alt="Mammo Diablo except to obtain some advan from" class="img-responsive">
										</a>
										<a class="lt-image hidden" 
										  href="product.html" target="_self"
										  title="Mammo Diablo except to obtain some advan from">
										</a>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<div class="rating">
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										</div>
										<h4><a href="product.html" target="_self" title="Mammo Diablo except to obtain some advan from">Mammo Diablo except to obtain some advan from</a></h4>
										<div class="price">
										  <span class="price-new">$80.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<div class="item-time">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_110"></div>
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('110');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('110');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('110');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								  <div class="product-thumb product-item-container transition">
									<div class="left-block">
									  <div class="product-image-container so-quickview">
										<div class="box-label">
										  <span class="label-product label-sale">-11%</span>
										</div>
										<a href="product.html" target="_self">
										<img src="image/catalog/demo/product/electronic/29-270x270.jpg" alt="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)" class="img-responsive">
										</a>
										<a class="lt-image hidden" 
										  href="product.html" target="_self"
										  title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">
										</a>
									  </div>
									</div>
									<div class="right-block">
									  <div class="caption">
										<div class="rating">
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
										</div>
										<h4><a href="product.html" target="_self" title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">Seneo PA046 Fast Charger  Wireless Sleep-Friendly)</a></h4>
										<div class="price">
										  <span class="price-new">$89.00</span>
										  <span class="price-old">$100.00</span>
										</div>
										<div class="item-time">
										  <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
										  <div class="item-timer product_time_86"></div>
										</div>
									  </div>
									  <div class="button-group2">
										<button class="bt-cart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('86');"><i class="hidden hidden-sm hidden-md fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
										<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('86');"><i class="fa fa-heart"></i></button>
										<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('86');"><i class="fa fa-exchange"></i></button>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_s94e  block block_9">
						<div id="content_slider_mfn4" class="yt-content-slider owl2-theme yt-content-slider-style-default arrow-default top-brand" data-transitionin="fadeIn" data-transitionout="fadeOut" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="6"data-items_column0="6" data-items_column1="5" data-items_column2="4"  data-items_column3="3" data-items_column4="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
						  <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-1.jpg" alt="title_brand-1" /></div>
						  <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-2.jpg" alt="title_brand-2" /></div>
						  <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-3.jpg" alt="title_brand-3" /></div>
						  <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-4.jpg" alt="title_brand-4" /></div>
						  <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-5.jpg" alt="title_brand-5" /></div>
						  <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-6.jpg" alt="title_brand-6" /></div>
						  <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-3.jpg" alt="title_brand-3" /></div>
						</div>
					  </div>
					  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_kh23  block block_10">
						<div class="module so-listing-tabs-ltr home2_listingtab">
						  <div class="head-title font-ct">
							<h3 class="modtitle">New Deals</h3>
						  </div>
						  <div class="modcontent">
							<div id="so_listing_tabs_363" class="so-listing-tabs first-load module">
							  <div class="ltabs-wrap">
								<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-margin="0">
								  <!--Begin Tabs-->
								  <div class="ltabs-tabs-wrap">
									 <span class="ltabs-tab-selected"></span>
									 <span class="ltabs-tab-arrow">▼</span>
									 <div class="item-sub-cat">
										<ul class="ltabs-tabs cf">
										   <li class="ltabs-tab" data-category-id="11" data-active-content=".items-category-11"> <span class="ltabs-tab-label">All Product</span> </li>
										   <li class="ltabs-tab tab-sel" data-category-id="12" data-active-content=".items-category-12"> <span class="ltabs-tab-label">Digital & Electronics</span> </li>
										   <li class="ltabs-tab " data-category-id="13" data-active-content=".items-category-13"> <span class="ltabs-tab-label">Fashion & Accessories</span> </li>
										   <li class="ltabs-tab " data-category-id="14" data-active-content=".items-category-14"> <span class="ltabs-tab-label">Travel & Vacation</span> </li>
										</ul>
									 </div>
								  </div>
								  <!-- End Tabs-->
								</div>
								<div class="wap-listing-tabs ltabs-items-container products-list grid">
								  <div class="ltabs-items ltabs-items-selected items-category-12" data-total="8">
									<div class="ltabs-items-inner ltabs-slider">
									  <div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
												<img src="image/catalog/demo/product/electronic/1-270x270.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
												</a>

											  </div>
											  <div class="box-label">
												<span class="label-product label-sale">-20%</span>
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" target="_self">
												  Magnetic Air Vent Phone Holder for iPhone 7 / 7 P..
												  </a>
												</h4>
												<div class="price">
												  <span class="price-new">$80.00</span>
												  <span class="price-old">$100.00</span>
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('30');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Bluetooth Headphones, Wireless  (10 Hours Play)">
												<img src="image/catalog/demo/product/electronic/10-270x270.jpg" alt="Bluetooth Headphones, Wireless  (10 Hours Play)">
												</a>
											  </div>
											  <div class="box-label">
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Bluetooth Headphones, Wireless  (10 Hours Play)" target="_self">
												  Bluetooth Headphones, Wireless  (10 Hours Play)
												  </a>
												</h4>
												<div class="price">
												  $2,000.00
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('45');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('45');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									  <div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Charger  Compact Portable with Premium">
												<img src="image/catalog/demo/product/electronic/11-270x270.jpg" alt="Charger  Compact Portable with Premium">
												</a>
											  </div>
											  <div class="box-label">
												<span class="label-product label-sale">-20%</span>
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Charger  Compact Portable with Premium" target="_self">
												  Charger  Compact Portable with Premium
												  </a>
												</h4>
												<div class="price">
												  <span class="price-new">$80.00</span>
												  <span class="price-old">$100.00</span>
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('51');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('51');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Compact (External Battery Power Bank) with Premium">
												<img src="image/catalog/demo/product/electronic/12-270x270.jpg" alt="Compact (External Battery Power Bank) with Premium">
												</a>
											  </div>
											  <div class="box-label">
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Compact (External Battery Power Bank) with Premium" target="_self">
												  Compact (External Battery Power Bank) with Premium
												  </a>
												</h4>
												<div class="price">
												  $100.00
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('111');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('111');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('111');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									  <div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Compact Portable Charger (External Battery)">
												<img src="image/catalog/demo/product/electronic/13-270x270.jpg" alt="Compact Portable Charger (External Battery)">
												</a>
											  </div>
											  <div class="box-label">
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Compact Portable Charger (External Battery)" target="_self">
												  Compact Portable Charger (External Battery)
												  </a>
												</h4>
												<div class="price">
												  $80.00
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('103');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('103');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('103');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Compact Portable Charger (External Battery) T21">
												<img src="image/catalog/demo/product/electronic/14-270x270.jpg" alt="Compact Portable Charger (External Battery) T21">
												</a>
											  </div>
											  <div class="box-label">
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Compact Portable Charger (External Battery) T21" target="_self">
												  Compact Portable Charger (External Battery) T21
												  </a>
												</h4>
												<div class="price">
												  $100.00
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('75');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('75');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('75');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									  <div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Compact Portable Charger (External Battery) T22">
												<img src="image/catalog/demo/product/electronic/21-270x270.jpg" alt="Compact Portable Charger (External Battery) T22">
												</a>
											  </div>
											  <div class="box-label">
												<span class="label-product label-sale">-20%</span>
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Compact Portable Charger (External Battery) T22" target="_self">
												  Compact Portable Charger (External Battery) T22
												  </a>
												</h4>
												<div class="price">
												  <span class="price-new">$80.00</span>
												  <span class="price-old">$100.00</span>
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('88');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('88');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('88');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Compact Portable Charger (External Battery) T23">
												<img src="image/catalog/demo/product/electronic/17-270x270.jpg" alt="Compact Portable Charger (External Battery) T23">
												</a>
											  </div>
											  <div class="box-label">
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Compact Portable Charger (External Battery) T23" target="_self">
												  Compact Portable Charger (External Battery) T23
												  </a>
												</h4>
												<div class="price">
												  $1,000.00
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('68');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('68');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('68');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									  <div class="ltabs-item ">
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Compact Portable Charger External">
												<img src="image/catalog/demo/product/electronic/22-270x270.jpg" alt="Compact Portable Charger External">
												</a>
											  </div>
											  <div class="box-label">
												<span class="label-product label-sale">-20%</span>
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Compact Portable Charger External" target="_self">
												  Compact Portable Charger External
												  </a>
												</h4>
												<div class="price">
												  <span class="price-new">$800.00</span>
												  <span class="price-old">$1,000.00</span>
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('61');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('61');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
										<div class="item-inner product-thumb transition product-layout">
										  <div class="product-item-container">
											<div class="left-block">
											  <div class="image product-image-container so-quickview ">
												<a class="lt-image" 
												  href="product.html" target="_self"
												  title="Computer Science saepe eveniet ut et volu redae">
												<img src="image/catalog/demo/product/electronic/23-270x270.jpg" alt="Computer Science saepe eveniet ut et volu redae">
												</a>
											  </div>
											  <div class="box-label">
												<span class="label-product label-sale">-2%</span>
											  </div>
											</div>
											<div class="right-block">
											  <div class="caption">
												<div class="rating">
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4>
												  <a href="product.html" 
													title="Computer Science saepe eveniet ut et volu redae" target="_self">
												  Computer Science saepe eveniet ut et volu redae
												  </a>
												</h4>
												<div class="price">
												  <span class="price-new">$98.00</span>
												  <span class="price-old">$100.00</span>
												</div>
											  </div>
											  <div class="button-group2">
												<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('58');"> <span>Add to cart</span></button>
												<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('58');"><i class="fa fa-heart"></i></button>
												<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('58');"><i class="fa fa-exchange"></i></button>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  <div class="ltabs-items items-category-11 grid" data-total="18">
									 <div class="ltabs-loading"></div>
								  </div>
								  <div class="ltabs-items  items-category-13 grid" data-total="18">
									 <div class="ltabs-loading"></div>
								  </div>
								  <div class="ltabs-items  items-category-14 grid" data-total="18">
									 <div class="ltabs-loading"></div>
								  </div>
								</div>
							  </div>
							</div>
							
						  </div>
						</div>
					  </div>
				   </div>
				 </div>
			  </section>
		   </div>

		</div>
		<!-- //Main Container -->
		<!-- Footer Container -->
		<footer class="footer-container typefooter-2">
		  <div class="footer-has-toggle collapse" id="collapse-footer"  >
			<div class="so-page-builder">
			  <section class="section_1  section-color ">
				<div class="container page-builder-ltr">
				  <div class="row row_m1ch  row-style  row-color ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_itqc  col-style">
					  <div class="clearfix bonus-menus">
						<ul class="row">
						  <li class="item free col-md-3">
							<div class="icon">
							  <img src="image/catalog/demo/banners/home2/icon-1.png" alt="Static Image">
							</div>
							<div class="text">
							  <h5><a href="#">Free shipping</a></h5>
							  <p>Free shipping oder $100</p>
							</div>
						  </li>
						  <li class="item secure col-md-3">
							<div class="icon">
							  <img src="image/catalog/demo/banners/home2/icon-2.png" alt="Static Image">
							</div>
							<div class="text">
							  <h5><a href="#">Secure Payment</a></h5>
							  <p>We value your security</p>
							</div>
						  </li>
						  <li class="item support col-md-3">
							<div class="icon">
							  <img src="image/catalog/demo/banners/home2/icon-3.png" alt="Static Image">
							</div>
							<div class="text">
							  <h5><a href="#">Online support</a></h5>
							  <p>We have support 24/7</p>
							</div>
						  </li>
						  <li class="item payment col-md-3">
							<div class="icon">
							  <img src="image/catalog/demo/banners/home2/icon-4.png" alt="Static Image">
							</div>
							<div class="text">
							  <h5><a href="#">Payment on Delivery</a></h5>
							  <p>Cash on delivery option</p>
							</div>
						  </li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
			  </section>
			  <section class="section_2  section-color ">
				<div class="container page-builder-ltr">
				  <div class="row row_34bo  row-style ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_9jik  col-style">
					  <div class="module news-letter">
						<div class="so-custom newsletter" style="width:100%     ; background-color: #f0f0f0 ; ">
						  <div class="btn-group title-block">
							<div class="popup-title page-heading">
							  <i class="fa fa-paper-plane-o"></i> Sign up to Newsletter
							</div>
							<div class="newsletter_promo">And receive <span>$29</span>coupon for first shopping</div>
						  </div>
						  <div class="modcontent block_content">
							<form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
							  <div class="input-group form-group required">
								<div class="input-box">
								  <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
								</div>
								<div class="input-group-btn subcribe">
								  <button class="btn btn-primary" type="submit" onclick="return subscribe_newsletter();" name="submit">
								  <i class="fa fa-envelope hidden"></i>
								  <span>Subscribe</span>
								  </button>
								</div>
							  </div>
							</form>
						  </div>
						  <!--/.modcontent-->
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </section>
			  <section class="section_3 ">
				<div class="container page-builder-ltr">
				  <div class="row row_bh6y  row-style ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_mehx  col-style">
					  <div class="row row_q34c  border ">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_5j8y col-style">
						  <div class="contactinfo">
							<h4 class="title-footer">Our Contact</h4>
							<p>They key is to have every key, the key to open every door. We don’t see them we will</p>
							<div class="content-footer">
							  <div class="address">
								<label><i class="fa fa-map-marker" aria-hidden="true"></i></label>
								<span>100 S Manhattan St, Amarillo, TX 79104, North America</span>
							  </div>
							  <div class="phone">
								<label><i class="fa fa-phone" aria-hidden="true"></i></label>
								<span>( +123 )4 567 890  -  ( +123 )4 567 899</span>
							  </div>
							  <div class="email">
								<label><i class="fa fa-envelope"></i></label>
								<a href="#">Marketing@magentech.com</a>
							  </div>
							</div>
						  </div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_oz7e col-style">
						  <div class="footer-links">
							<h4 class="title-footer">
							  Information
							</h4>
							<ul class="links">
							  <li>
								<a title="About US" href="about-us.html">About US</a>
							  </li>
							  <li>
								<a title="Contact us" href="contact.html">Contact us</a>
							  </li>
							  <li>
								<a title="Warranty And Services" href="warranty">Warranty And Services</a>
							  </li>
							  <li>
								<a title="Support 24/7 Page" href="support.html">Support 24/7 Page</a>
							  </li>
							  <li>
								<a title="Terms And Conditions" href="#">Terms And Conditions</a>
							  </li>
							  <li>
								<a href="#"> CSR Policy</a>
							  </li>
							</ul>
						  </div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_l99d col-style">
						  <div class="footer-links">
							<h4 class="title-footer">
							  My Account
							</h4>
							<ul class="links">
							  <li>
								<a title="My Account" href="my-account">My Account</a>
							  </li>
							  <li>
								<a title="Account Downloads" href="#">Account Downloads</a>
							  </li>
							  <li>
								<a title="Checkout" href="checkout">Checkout</a>
							  </li>
							  <li>
								<a href="#"> Wishlist</a>
							  </li>
							  <li>
								<a title="Order History" href="order-history">Order History</a>
							  </li>
							  <li>
								<a title="Your Transactions" href="#">Your Transactions</a>
							  </li>
							</ul>
						  </div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_lv09 col-style">
						  <div class="module so-latest-blog footer_lastestblog footer-links  preset01-4 preset02-4 preset03-3 preset04-2 preset05-1">
							<h4 class="title-footer"><span>Lastest From Blog</span></h4>
							<div class="modcontent">
							  <div id="so_latest_blog_736" class="so-blog-external button-type2 button-type2">
								<div class="blog-external">
								<div class="blog-external-simple">
								  <div class="cat-wrap">
									<div class="media">
									  <div class="item">
										<div class="media-left">
										  <a href="#" target="_self">
										  <img src="image/catalog/demo/blog/8-65x50.jpg" alt="Aestibulum ipsum a ornare car" class="media-object"/>
										  </a>
										</div>
										<div class="media-body">
										  <h4 class="media-heading">
											<a href="#" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
										  </h4>
										  <div class="media-content">
											<div class="media-subcontent">
											  <span class="media-author"><span class="txt">By: </span><span class="author">ytcdemo</span></span>
											  <div class="media-date-added"><i class="fa fa-calendar"></i> October 17th, 2017</div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  <!-- <div class="clr1"></div> -->
								  <div class="cat-wrap">
									<div class="media">
									  <div class="item">
										<div class="media-left">
										  <a href="#" target="_self">
										  <img src="image/catalog/demo/blog/9-65x50.jpg" alt="Aestibulum ipsum a ornare lectus" class="media-object"/>
										  </a>
										</div>
										<div class="media-body">
										  <h4 class="media-heading">
											<a href="#" title="Aestibulum ipsum a ornare lectus" target="_self">Aestibulum ipsum a ornare lectus</a>
										  </h4>
										  <div class="media-content">
											<div class="media-subcontent">
											  <span class="media-author"><span class="txt">By: </span><span class="author">ytcdemo</span></span>
											  <div class="media-date-added"><i class="fa fa-calendar"></i> October 17th, 2017</div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  <!-- <div class="clr1 clr2"></div> -->
								  <div class="cat-wrap">
									<div class="media">
									  <div class="item">
										<div class="media-left">
										  <a href="#" target="_self">
										  <img src="image/catalog/demo/blog/5-65x50.jpg" alt="Baby Came Back! Missed Out? Grab Your" class="media-object"/>
										  </a>
										</div>
										<div class="media-body">
										  <h4 class="media-heading">
											<a href="#" title="Baby Came Back! Missed Out? Grab Your" target="_self">Baby Came Back! Missed Out? Grab Your</a>
										  </h4>
										  <div class="media-content">
											<div class="media-subcontent">
											  <span class="media-author"><span class="txt">By: </span><span class="author">None Author</span></span>
											  <div class="media-date-added"><i class="fa fa-calendar"></i> October 17th, 2017</div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  
								</div>
								<div class="blog-external-simple">
								  <div class="cat-wrap">
									<div class="media">
									  <div class="item">
										<div class="media-left">
										  <a href="#" target="_self">
										  <img src="image/catalog/demo/blog/8-65x50.jpg" alt="Aestibulum ipsum a ornare car" class="media-object"/>
										  </a>
										</div>
										<div class="media-body">
										  <h4 class="media-heading">
											<a href="#" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
										  </h4>
										  <div class="media-content">
											<div class="media-subcontent">
											  <span class="media-author"><span class="txt">By: </span><span class="author">ytcdemo</span></span>
											  <div class="media-date-added"><i class="fa fa-calendar"></i> October 17th, 2017</div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  <!-- <div class="clr1"></div> -->
								  <div class="cat-wrap">
									<div class="media">
									  <div class="item">
										<div class="media-left">
										  <a href="#" target="_self">
										  <img src="image/catalog/demo/blog/9-65x50.jpg" alt="Aestibulum ipsum a ornare lectus" class="media-object"/>
										  </a>
										</div>
										<div class="media-body">
										  <h4 class="media-heading">
											<a href="#" title="Aestibulum ipsum a ornare lectus" target="_self">Aestibulum ipsum a ornare lectus</a>
										  </h4>
										  <div class="media-content">
											<div class="media-subcontent">
											  <span class="media-author"><span class="txt">By: </span><span class="author">ytcdemo</span></span>
											  <div class="media-date-added"><i class="fa fa-calendar"></i> October 17th, 2017</div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  <!-- <div class="clr1 clr2"></div> -->
								  <div class="cat-wrap">
									<div class="media">
									  <div class="item">
										<div class="media-left">
										  <a href="#" target="_self">
										  <img src="image/catalog/demo/blog/5-65x50.jpg" alt="Baby Came Back! Missed Out? Grab Your" class="media-object"/>
										  </a>
										</div>
										<div class="media-body">
										  <h4 class="media-heading">
											<a href="#" title="Baby Came Back! Missed Out? Grab Your" target="_self">Baby Came Back! Missed Out? Grab Your</a>
										  </h4>
										  <div class="media-content">
											<div class="media-subcontent">
											  <span class="media-author"><span class="txt">By: </span><span class="author">None Author</span></span>
											  <div class="media-date-added"><i class="fa fa-calendar"></i> October 17th, 2017</div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
								  
								</div>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </section>
			  <section class="section_4 ">
				<div class="container page-builder-ltr">
				  <div class="row row_njct  row-style ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_7f0l  col-style">
					  <div class="border">
						<div class="row">
						  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 item-1">
							<div class="app-store spcustom_html">
							  <div>
								<a class="app-1" href="#">google store</a> 
								<a class="app-2" href="#">apple store</a>
								<a class="app-3" href="#">window store</a>
							  </div>
							</div>
						  </div>
						  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 item-2">
							<div class="footer-social">
							  <h3 class="block-title hidden">Follow us</h3>
							  <div class="socials">
								<a href="https://www.facebook.com/SmartAddons.page" class="facebook" target="_blank">
								  <i class="fa fa-facebook"></i>
								  <p>on</p>
								  <span class="name-social">Facebook</span>
								</a>
								<a href="https://twitter.com/smartaddons" class="twitter" target="_blank">
								  <i class="fa fa-twitter"></i>
								  <p>on</p>
								  <span class="name-social">Twitter</span>
								</a>
								<a href="https://plus.google.com/u/0/+SmartAddons-Joomla-Magento-WordPress/posts" class="google" target="_blank">
								  <i class="fa fa-google-plus"></i>
								  <p>on</p>
								  <span class="name-social">Google +</span>
								</a>
								<a href="#" class="dribbble" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
								<a href="#" class="instagram" target="_blank">
								  <i class="fa fa-instagram" aria-hidden="true"></i>
								  <p>on</p>
								  <span class="name-social">Instagram</span>
								</a>
								<a href="#" class="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>   <a href="#" class="linkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>   
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </section>
			  <section class="section_5 ">
				<div class="container page-builder-ltr">
				  <div class="row row_dj2h  row-style ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_pc5f  col-style">
					  <div class="custom_link">
						<div class="footer-toplinks">
						  <div class="links">
							<label>Mobiles:</label>
							<ul>
							  <li><a href="#">HTC Mobiles</a></li>
							  <li><a href="#">iPhones</a></li>
							  <li><a href="#">Gionee Mobiles</a></li>
							  <li><a href="#">LG Mobiles</a></li>
							  <li><a href="#">Karbonn Mobiles</a></li>
							  <li><a href="#">Vivo Mobiles</a></li>
							  <li><a href="#">Intex Mobiles</a></li>
							  <li><a href="#">Micromax Mobiles</a></li>
							  <li><a href="#">Asus Mobiles</a></li>
							  <li><a href="#">Samsung Mobiles</a></li>
							  <li><a href="#">Lenovo Mobiles</a></li>
							</ul>
						  </div>
						  <div class="links">
							<label>Tablets:</label>
							<ul>
							  <li><a href="#">Apple iPads</a></li>
							  <li><a href="#">Samsung Tablets</a></li>
							  <li><a href="#">Windows Tablets</a></li>
							  <li><a href="#">Calling Tablets</a></li>
							  <li><a href="#">Micromax Tablets</a></li>
							  <li><a href="#">Lenovo Tablets</a></li>
							  <li><a href="#">Asus Tablets</a></li>
							  <li><a href="#">iBall Tablets</a></li>
							  <li><a href="#">Swipe Tablets</a></li>
							</ul>
						  </div>
						  <div class="links">
							<label>TVs, Audio & Video:</label>
							<ul>
							  <li><a href="#">Televisions</a></li>
							  <li><a href="#">LED TVs</a></li>
							  <li><a href="#">Smart Televisions</a></li>
							  <li><a href="#">Speakers</a></li>
							  <li><a href="#">Headphones</a></li>
							  <li><a href="#">Earphones</a></li>
							  <li><a href="#">Samsung Televisions</a></li>
							  <li><a href="#">Micromax Televisions</a></li>
							  <li><a href="#">LG Televisions</a></li>
							</ul>
						  </div>
						  <div class="links">
							<label>Mobiles Accessories:</label>
							<ul>
							  <li><a href="#">Mobile Covers</a></li>
							  <li><a href="#">Power Banks</a></li>
							  <li><a href="#">Samsung Power Banks</a></li>
							  <li><a href="#">Ambrane Power Banks</a></li>
							  <li><a href="#">Intex Power Banks</a></li>
							  <li><a href="#">Sony Power Banks</a></li>
							  <li><a href="#">Lenovo Power Banks</a></li>
							  <li><a href="#">PNY Power Banks</a></li>
							</ul>
						  </div>
						  <div class="links">
							<label>Computers:</label>
							<ul>
							  <li><a href="#">Lenovo Laptops</a></li>
							  <li><a href="#">Acer Laptops</a></li>
							  <li><a href="#">Apple Macbooks</a></li>
							  <li><a href="#">Notebook</a></li>
							  <li><a href="#">Laptops</a></li>
							  <li><a href="#">External Hard Disks</a></li>
							  <li><a href="#">Dell Laptops</a></li>
							  <li><a href="#">HP Laptops</a></li>
							</ul>
						  </div>
						  <div class="links">
							<label>Camera:</label>
							<ul>
							  <li><a href="#">DSLR Cameras</a></li>
							  <li><a href="#">Canon Cameras</a></li>
							  <li><a href="#">Nikon Coolpix</a></li>
							  <li><a href="#">Nikon DSLR Cameras</a></li>
							  <li><a href="#">Sony Cameras</a></li>
							  <li><a href="#">Digital Cameras</a></li>
							  <li><a href="#">Panasonic Cameras</a></li>
							  <li><a href="#">Samsung Cameras</a></li>
							</ul>
						  </div>
						  <div class="links">
							<label>Watches:</label>
							<ul>
							  <li><a href="#">Men Watches</a></li>
							  <li><a href="#">Women Watches</a></li>
							  <li><a href="#">Casio Watches</a></li>
							  <li><a href="#">Titan Watches</a></li>
							  <li><a href="#">Fastrack Watches</a></li>
							  <li><a href="#">Fossil watches</a></li>
							  <li><a href="#">Casio Edifice</a></li>
							  <li><a href="#">Tissot Watches</a></li>
							</ul>
						  </div>
						  <div class="links">
							<label>Fashion:</label>
							<ul>
							  <li><a href="#">Sarees</a></li>
							  <li><a href="#">Silk sarees</a></li>
							  <li><a href="#">Salwar Suits</a></li>
							  <li><a href="#">Lehengas</a></li>
							  <li><a href="#">Biba</a></li>
							  <li><a href="#">Jewellery</a></li>
							  <li><a href="#">Rings</a></li>
							  <li><a href="#">Earrings</a></li>
							  <li><a href="#">Diamond Rings</a></li>
							  <li><a href="#">Loose Diamond</a></li>
							  <li><a href="#">Shoes / Boots </a></li>
							</ul>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </section>
			</div>
		  </div>
		  <div class="footer-toggle hidden-lg hidden-md">
			<a class="showmore collapsed" data-toggle="collapse" href="#collapse-footer" aria-expanded="false" aria-controls="collapse-footer">
			<span class="toggle-more"><i class="fa fa-angle-double-down"></i>Show More</span> 
			<span class="toggle-less"><i class="fa fa-angle-double-up"></i>Show less</span>            
			</a>     
		  </div>
		  <div class="footer-bottom ">
			<div class="container">
			  <div class="row">
				<div class="col-md-7  col-sm-7 copyright">
				  So TopDeal © 2016 - 2018. All Rights Reserved. Designed by <a href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
				</div>
				<div class="col-md-5 col-sm-5 paymen">
				  <img src="image/catalog/demo/payment/payments-1.png"  alt="imgpayment">
				</div>
			  </div>
			</div>
		  </div>
		</footer>
		<!-- //end Footer Container -->
	</div>
	<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
	<!-- End Color Scheme
		 ============================================ -->
	<!-- Include Libs & Plugins
		 ============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/slick-slider/slick.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
	<script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script>
	<!-- Theme files
		 ============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/homepage.js"></script>
	<script type="text/javascript" src="js/themejs/custom_h2.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
</body>

</html>
<!-- Begin Color Scheme
============================================ -->
<?php 
require_once ('scssphp/scss.inc.php');
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
 $themeCssName='';  
 $ColorScheme = '#ff5e00';
 $themeColor = strtolower($ColorScheme);
				
$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
$scss->addImportPath('sass');
$scss->setVariables(array(
		'$linkColor' => $themeColor,
		'$dir' => 'ltr',
));

$string_css     = $scss->compile('@import "theme.scss"');
$header1_css    = $scss->compile('@import "header/header1.scss"');
$footer1_css    = $scss->compile('@import "footer/footer1.scss"');
$responsive_css     = $scss->compile('@import "responsive.scss"');

file_put_contents('css/theme.css', $string_css);
file_put_contents('css/header/header1.css', $header1_css);
file_put_contents('css/footer/footer1.css', $footer1_css);
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
			<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
			<!-- Libs CSS
				 ============================================ -->
			<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
			<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
			<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
			<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
			<link href="css/themecss/lib.css" rel="stylesheet">
			<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
			<link href="js/minicolors/miniColors.css" rel="stylesheet">
			<!-- Theme CSS
				 ============================================ -->
			<link href="css/themecss/so_sociallogin.css" rel="stylesheet">
			<link href="css/themecss/so_searchpro.css" rel="stylesheet">
			<link href="css/themecss/so_megamenu.css" rel="stylesheet">
			<link href="css/themecss/so-categories.css" rel="stylesheet">
			<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
			<link href="css/themecss/so-category-slider.css" rel="stylesheet">
			<link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
			<link href="css/footer/footer1.css" rel="stylesheet">
			<link href="css/header/header1.css" rel="stylesheet">
			<link id="color_scheme" href="css/theme.css" rel="stylesheet">
			<link href="css/responsive.css" rel="stylesheet">
			<link href="css/quickview/quickview.css" rel="stylesheet">
			<!-- Google web fonts
				 ============================================ -->
			<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">
			<style type="text/css">
				 body{font-family: Roboto, sans-serif;}
			</style>
	 </head>
	 <body class="common-home res layout-1">
			<div id="wrapper" class="wrapper-fluid banners-effect-10">
				 <!-- Header Container  -->
				 <header id="header" class=" typeheader-1">
						<!-- Header Top -->
						<div class="header-top hidden-compact">
							 <div class="container">
									<div class="row">
										 <div class="col-lg-3 col-xs-6 header-logo ">
												<div class="navbar-logo">
													 <a href="#"><img src="image/catalog/demo/logo/logo-2.png" alt="Your Store" width="110" height="27" title="Your Store"></a>
												</div>
										 </div>
										 <div class="col-lg-7 header-sevices">
												<div class="module html--sevices ">
													 <div class="clearfix sevices-menu">
															<ul>
																 <li class="col-md-4 item home">
																		<div class="icon"></div>
																		<div class="text">
																			 <a>100 S Manhattan St, Amarillo,</a><a>
																			 </a>
																			 <p><a>TX 79104, North America</a></p>
																			 <a>
																			 </a>
																		</div>
																 </li>
																 <li class="col-md-4 item mail">
																		<div class="icon" > </div>
																		<div class="text">
																			 <a class="name" href="#">Sales@MagenTech.Com</a>
																			 <p>( +123 ) 456 7890</p>
																		</div>
																 </li>
																 <li class="col-md-4 item delivery">
																		<div class="icon"> </div>
																		<div class="text">
																			 <a class="name" href="#">Free Delivery</a>
																			 <p>On order over $89.00</p>
																		</div>
																 </li>
															</ul>
													 </div>
												</div>
										 </div>
										 <div class="col-lg-2 col-xs-6 header-cart">
												<div class="shopping_cart">
													 <div id="cart" class="btn-shopping-cart">
															<a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
																 <div class="shopcart">
																		<span class="handle pull-left"></span>
																		<div class="cart-info">
																			<h2 class="title-cart">Shopping cart</h2>
																			<h2 class="title-cart2 hidden">My Cart</h2>
																			<span class="total-shopping-cart cart-total-full">
																					<span class="items_cart">2 </span>
																					<span class="items_cart2">item(s)</span>
																					<span class="items_carts"> - $206.80</span>
																			</span>
																		</div>
																 </div>
															</a>
															<ul class="dropdown-menu pull-right shoppingcart-box">
																 <li class="content-item">
																		<table class="table table-striped" style="margin-bottom:10px;">
																				 <tbody>
																						 <tr>
																								 <td class="text-center size-img-cart">
																										 <a href="product.html"><img src="image/catalog/demo/product/travel/10-54x54.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail"></a>
																								 </td>
																								 <td class="text-left"><a href="product.html">Bougainvilleas on Lombard Street,  San Francisco, Tokyo</a>
																										 <br> - <small>Size M</small> </td>
																								 <td class="text-right">x1</td>
																								 <td class="text-right">$120.80</td>
																								 <td class="text-center">
																										 <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
																								 </td>
																						 </tr>
																				 </tbody>
																		</table>
																		<table class="table table-striped" style="margin-bottom:10px;">
																				 <tbody>
																						 <tr>
																								 <td class="text-center size-img-cart">
																										 <a href="product.html"><img src="image/catalog/demo/product/travel/2-54x54.jpg" alt="Canada Travel One or Two European Facials at  Studio" title="Canada Travel One or Two European Facials at  Studio" class="img-thumbnail"></a>
																								 </td>
																								 <td class="text-left"><a href="product.html">Canada Travel One or Two European Facials at  Studio</a>
																										 <br> - <small>Size M</small> </td>
																								 <td class="text-right">x1</td>
																								 <td class="text-right">$86.00</td>
																								 <td class="text-center">
																										 <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
																								 </td>
																						 </tr>
																				 </tbody>
																		</table>
																 </li>
																 <li>
																		<div class="checkout clearfix">
																			 <a href="cart.html" class="btn btn-view-cart inverse"> View Cart</a>
																			 <a href="checkout.html" class="btn btn-checkout pull-right">Checkout</a>
																		</div>
																 </li>
															</ul>
													 </div>   
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
										 <!-- Menuhome -->
										 <div class="col-lg-8 col-md-8 col-sm-1 col-xs-3 header-menu">
												<div class="megamenu-style-dev megamenu-dev">
													 <div class="responsive">
															<nav class="navbar-default">
																 <div class="container-megamenu horizontal">
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
																									 <p class="close-menu"></p>
																									 <a href="#" class="clearfix">
																									 <strong>
																									 Home
																									 </strong>
																									 <b class="caret"></b>
																									 </a>
																									 <div class="sub-menu" style=" display: none; right: auto;">
																											<div class="content" style="display: none; height: 400px;">
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
																																		 <a href="home4.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
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
																									 <a  class="clearfix">
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
																									 <p class="close-menu"></p>
																									 <a  class="clearfix">
																									 <strong>
																									 Colections
																									 </strong>
																									 <span class="labelNew"></span>
																									 <b class="caret"></b>
																									 </a>
																									 <div class="sub-menu" style="width: 100%; right: 0px;">
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
																																								 <a href="category-v3.html" onclick="window.location = '#';" class="main-menu">Food &amp; Restaurant</a>
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
																																								 <a href="#" onclick="window.location = '#';" class="main-menu">Fashion &amp; Accessories</a>
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
																																								 <a href="#" onclick="window.location = '#';" class="main-menu">Sport &amp; Entertaiment</a>
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
																																										<li><a href="#" onclick="window.location = '#';">Spa &amp; Massage</a></li>
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
																								<li class="item-style2 content-full feafute with-sub-menu hover">
																									 <p class="close-menu"></p>
																									 <a  class="clearfix">
																									 <strong>
																									 Accessories
																									 </strong>
																									 <b class="caret"></b>
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
																																										<li><a href="#" onclick="window.location = '#';">Fashion</a></li>
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
																																		 $98.00
																																	</div>
																															 </div>
																														</div>
																												 </div>
																											</div>
																									 </div>
																								</li>
																								<li class="style-page with-sub-menu hover">
																									 <p class="close-menu"></p>
																									 <a  class="clearfix">
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
																									 <p class="close-menu"></p>
																									 <a href="blog-page.html" class="clearfix">
																									 <strong>
																									 Blog
																									 </strong>
																									 </a>
																								</li>
																								<li class="deal-h5 hidden">
																									 <p class="close-menu"></p>
																									 <a href="#" class="clearfix">
																									 <strong>
																									 <img src="image/catalog/demo/menu/hot-block.png" alt="">Buy This Theme!
																									 </strong>
																									 </a>
																								</li>
																								<li class="deal-h5 hidden">
																									 <p class="close-menu"></p>
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
										 <!--Searchhome-->  
										 <div class="col-lg-4 col-md-4 col-sm-11 col-xs-9 header-search">
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
															<input type="hidden" name="route" value="product/search">
													 </form>
												</div>
										 </div>
									</div>
							 </div>
						</div>
						<!-- //Header center -->
						<div class="header-form hidden-compact">
							<div class="button-header current">
								<i class="fa fa-bars"></i>
							</div>
							<div class="dropdown-form toogle_content">
								<div class="pull-left">
									<form action="#" method="post" enctype="multipart/form-data" id="form-language">
										<div class="btn-group">
											<button class="btn-link dropdown-toggle" data-toggle="dropdown">
												<img src="image/catalog/flags/gb.png" alt="English" title="English">
												<span class="hidden-xs hidden-sm hidden-md">English</span>&nbsp;<i class="fa fa-angle-down"></i>
											</button>
											
										<ul class="dropdown-menu">
											<li>
												<button class="btn-block language-select" type="button" name="ar-ar"><img src="image/catalog/flags/ar.png" alt="Arabic" title="Arabic"> Arabic</button>
											</li>
											<li>
												<button class="btn-block language-select" type="button" name="en-gb"><img src="image/catalog/flags/gb.png" alt="English" title="English"> English</button>
											</li>
										</ul>
										</div>
										<input type="hidden" name="code" value="">
										<input type="hidden" name="redirect" value="index.html">
									</form>
								</div>
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
										<input type="hidden" name="code" value="">
										<input type="hidden" name="redirect" value="index.html">
									</form>
								</div>
								<span class="text">More</span>
								<ul class="dropdown-menu">
									<li class="wishlist"><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist" title="Wish List (2) "><span>Wish List (0) </span></a></li>
									<li class="checkout"><a href="cart.html" class="top-link-checkout" title="Checkout"><span>Checkout</span></a></li>
								</ul>
							</div>
							<div class="button-user">
								<div class="user-info asd">
									<a data-toggle="modal" data-target="#so_sociallogin" href="#">Login</a>
								</div>
							</div>
						</div>
				 </header>
				 <!-- //Header Container  -->

				<div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true" >
						<div class="modal-dialog block-popup-login">
								<a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
								<div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
								<div class="block-content">
										<div class=" col-reg registered-account">
												<div class="block-content">
														<form class="form form-login" action="#" method="post" id="login-form">
																<fieldset class="fieldset login" data-hasrequired="* Required Fields">
																		<div class="field email required email-input">
																				<div class="control">
																						<input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-Mail Address">
																				</div>
																		</div>
																		<div class="field password required pass-input">
																				<div class="control">
																						<input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password">
																				</div>
																		</div>

																		<div class=" form-group">
																				<label class="control-label">Login with your social account</label>
																				<div>

																						<a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>

																						<a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

																						<a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

																						<a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>

																				</div>
																		</div>

																		<div class="secondary ft-link-p"><a class="action remind" href="#"><span>Forgot Your Password?</span></a></div>
																		<div class="actions-toolbar">
																				<div class="primary">
																						<button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button>
																				</div>
																		</div>
																</fieldset>
														</form>
												</div>
										</div>
										<div class="col-reg login-customer">

												<h2>NEW HERE?</h2>
												<p class="note-reg">Registration is free and easy!</p>
												<ul class="list-log">
														<li>Faster checkout</li>
														<li>Save multiple shipping addresses</li>
														<li>View and track orders and more</li>
												</ul>
												<a class="btn-reg-popup" title="Register" href="#">Create an account</a>
										</div>
										<div style="clear:both;"></div>
								</div>
						</div>
				</div>
				 <!-- Main Container  -->
				 <div id="content">
						<div class="custom-scoll hidden-sm hidden-md hidden-xs">
				<div class="custom-html">
					<div class="scoll-cate list_diemneo">
						<ul id="nav-scroll">
							<li class="neo1"><a href="#box-link1"><span>Hot deal</span></a></li>
							<li class="neo2"><a href="#box-link2"><span>Spa</span></a></li>
							<li class="neo3"><a href="#box-link3"><span>Fashion</span></a></li>
							<li class="neo4"><a href="#box-link4"><span>Travel</span></a></li>
							<li class="neo5"><a href="#box-link5"><span>Digital</span></a></li>
						
						</ul>
					</div>
				</div>
			</div>
						<div class="so-page-builder">
							 <div class="container page-builder-ltr">
									<div class="row row_a90w  row-style ">
										 <!-- Menu left-->
										 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_vnxd  menu-left">
												<div class="row row_f8gy  ">
													 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_gafz col-style megamenu-style-dev megamenu-dev">
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
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-6.png" alt="">Hot Deal</strong>
																												 </span>
																												 </a>
																											</li>
																											<li class="item-vertical  vertical-style2 with-sub-menu hover">
																												 <p class="close-menu"></p>
																												 <a  class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-1.png" alt="">Electronics</strong>
																												 </span>
																												 <b class="fa fa-caret-right"></b>
																												 </a>
																												 <div class="sub-menu" data-subwidth="100">
																														<div class="content" >
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
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-2.png" alt="">Travel &amp; Vacation</strong>
																												 </span>
																												 <b class="fa fa-caret-right"></b>
																												 </a>
																												 <div class="sub-menu" data-subwidth="65"">
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
																																					 <li class=""><a href="#" title="Hotel &amp; Resort">Hotel &amp; Resort</a></li>
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
																											<li class="item-vertical">
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-3.png" alt="">Book Stationery</strong>
																												 </span>
																												 </a>
																											</li>
																											<li class="item-vertical   item-style3 with-sub-menu hover">
																												 <p class="close-menu"></p>
																												 <a  class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-4.png" alt="">Fashion</strong>
																												 </span>
																												 <b class="fa fa-caret-right"></b>
																												 </a>
																												 <div class="sub-menu" style="width: 650px;">
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
																																													<li><a href="#" onclick="window.location = '#';">Book Stationery</a></li>
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
																																													<li><a href="#" onclick="window.location = '#';">Pearl Jewelry</a></li>
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
																											<li class="item-vertical">
																												 <p class="close-menu"></p>
																												 <a  class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-5.png" alt="">Sport &amp; Entertaiment</strong>
																												 </span>
																												 </a>
																											</li>
																											<li class="item-vertical  css-menu with-sub-menu hover">
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-8.png" alt="">Spa &amp; Massage</strong>
																												 </span>
																												 <b class="fa fa-caret-right"></b>
																												 </a>
																												 <div class="sub-menu" style="width: 250px;">
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
																																													<li><a href="#" onclick="window.location = '#';">Jean</a></li>
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
																											<li class="item-vertical">
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-9.png" alt="">Real House</strong>
																												 </span>
																												 </a>
																											</li>
																											<li class="item-vertical">
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-6.png" alt="">Mom &amp; Baby</strong>
																												 </span>
																												 </a>
																											</li>
																											<li class="item-vertical">
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-7.png" alt="">Food &amp; Restaurant</strong>
																												 </span>
																												 </a>
																											</li>
																											<li class="item-vertical">
																												 <p class="close-menu"></p>
																												 <a href="#" class="clearfix">
																												 <span>
																												 <strong><img src="image/catalog/demo/menu/icon/icon-9.png" alt="">Jewelry &amp; Watches</strong>
																												 </span>
																												 <span class="labelho"></span>
																												 </a>
																											</li>
																											<li class="loadmore"><i class="fa fa-plus-square"></i><span class="more-view"> More Categories</span></li>
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
										 <!--- SLider right-->  
										 <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col_anla  slider-right">
												<div class="row row_ci4f  ">
													 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_dg1b block block_1">
															<div class="module sohomepage-slider so-homeslider-ltr  ">
																 <div class="modcontent">
																		<div id="sohomepage-slider1">
																			 <div class="so-homeslider yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
																					<div class="item">
																						 <a href=" #   " title="slide 1 - 1" target="_self">
																						 <img class="responsive" src="image/catalog/demo/slider/home1/slider.jpg" alt="slide 1 - 1">
																						 </a>
																						 <div class="sohomeslider-description">
																						 </div>
																					</div>
																					<div class="item">
																						 <a href=" #   " title="slide 1 - 2" target="_self">
																						 <img class="responsive" src="image/catalog/demo/slider/home1/slider-2.jpg" alt="slide 1 - 2">
																						 </a>
																						 <div class="sohomeslider-description">
																						 </div>
																					</div>
																					<div class="item">
																						 <a href=" #   " title="slide 1 - 3" target="_self">
																						 <img class="responsive" src="image/catalog/demo/slider/home1/slider-3.jpg" alt="slide 1 - 3">
																						 </a>
																						 <div class="sohomeslider-description">
																						 </div>
																					</div>
																			 </div>
																		</div>
																 </div>
															</div>
													 </div>
													 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hmsd block block_2">
															<div class="home1-banner-1 clearfix">
																 <div class="item-1 col-lg-6 col-md-6 col-sm-6 banners">
																		<div>
																			 <a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/bn-1.jpg" alt="Static Image"></a>
																		</div>
																 </div>
																 <div class="item-2 col-lg-6 col-md-6 col-sm-6 banners">
																		<div>
																			 <a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/bn-2.jpg" alt="Static Image"></a>
																		</div>
																 </div>
															</div>
													 </div>
												</div>
										 </div>
									</div>
							 </div>
							 <section id="box-link1" class="section-style">
									<div class="container page-builder-ltr">
										 <div class="row row-style row_a1">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_a1c  block block_3 title_neo1">
													 <div class="module so-deals-1tr home1_deals so-deals">
															<div class="head-title">
																 <h2 class="modtitle font-ct">
																		<span>Hot Deals</span>
																 </h2>
																 <div class="cs-item-timer">
																		<div class="Countdown-1"></div>
																 </div>
															</div>
															<div class="modcontent">
																 <div class="so-deal modcontent products-list grid clearfix clearfix preset00-3 preset01-3 preset02-2 preset03-2 preset04-1  button-type1  style2">
																		<div class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="3" data-items_column0="3" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
																			 <div class="item">
																					<div class="transition product-layout">
																						 <div class="product-item-container ">
																								<div class="left-block so-quickview">
																									 <div class="image">
																											<a href="product.html" target="_self">
																											<img src="image/catalog/demo/product/travel/10-370x370.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-responsive">
																											</a>
																											<div class="text-location"><span>Thailand</span></div>
																									 </div>
																									 <div class="box-label">
																											<span class="label-product label-sale">Sale</span>
																									 </div>
																									 <div class="button-group">
																											<div class="button-inner so-quickview">
																												 <a class="lt-image hidden" data-product="35" href="#" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">
																												 </a>
																												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"> <i class="fa fa-search"></i> </a>
																												 <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('35');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
																												 <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
																												 <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
																											</div>
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4><a href="product.html" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">Bougainvilleas on Lombard Street,  San Francisco, Tokyo</a></h4>
																											<div class="total-price clearfix">
																												 <div class="price price-left">
																														<span class="price-new">$108.80</span>
																														<span class="price-old">$122.00</span>
																												 </div>
																												 <div class="price-sale price-right">
																														<span class="discount">
																														-11%
																														<strong>OFF</strong>
																														</span>
																												 </div>
																											</div>
																									 </div>
																								</div>
																						 </div>
																					</div>
																			 </div>
																			 <div class="item">
																					<div class="transition product-layout">
																						 <div class="product-item-container ">
																								<div class="left-block so-quickview">
																									 <div class="image">
																											<a href="#" target="_self">
																												<img src="image/catalog/demo/product/travel/2-370x370.jpg" alt="Canada Travel One or Two European Facials at  Studio" class="img-responsive">
																											</a>
																											<div class="text-location"><span>Ha Lan</span></div>
																									 </div>
																									 <div class="box-label">
																											<span class="label-product label-sale">Sale</span>
																									 </div>
																									 <div class="button-group">
																											<div class="button-inner so-quickview">
																												 <a class="lt-image hidden" data-product="35" href="#" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">
																												 </a><a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
																												 <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('35');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
																												 <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
																												 <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
																											</div>
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4><a href="product.html" target="_self" title="Canada Travel One or Two European Facials at  Studio">Canada Travel One or Two European Facials at  Studio</a></h4>
																											<div class="total-price clearfix">
																												 <div class="price price-left">
																														<span class="price-new">$86.00</span>
																														<span class="price-old">$122.00</span>
																												 </div>
																												 <div class="price-sale price-right">
																														<span class="discount">
																														-30%
																														<strong>OFF</strong>
																														</span>
																												 </div>
																											</div>
																									 </div>
																								</div>
																						 </div>
																					</div>
																			 </div>
																			 <div class="item">
																					<div class="transition product-layout">
																						 <div class="product-item-container ">
																								<div class="left-block so-quickview">
																									 <div class="image">
																											<a href="product.html" target="_self">
																											<img src="image/catalog/demo/product/travel/5-370x370.jpg" alt="Chicago Tour Departure / Pattaya / Solimania..." class="img-responsive">
																											</a>
																											<div class="text-location"><span>Canada</span></div>
																									 </div>
																									 <div class="box-label">
																											<span class="label-product label-sale">Sale</span>
																									 </div>
																									 <div class="button-group">
																											<div class="button-inner so-quickview">
																												 <a class="lt-image hidden" data-product="35" href="#" target="_self" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo">
																												 </a><a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe"><i class="fa fa-search"></i></a>
																												 <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('35');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>
																												 <button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('35');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
																												 <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('35');" data-original-title="Add to Cart"> <span class="hidden">Add to Cart</span></button>
																											</div>
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4><a href="product.html" target="_self" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada">Chicago Tour Departure / Pattaya / Solimania...</a></h4>
																											<div class="total-price clearfix">
																												 <div class="price price-left">
																														<span class="price-new">$108.80</span>
																														<span class="price-old">$122.00</span>
																												 </div>
																												 <div class="price-sale price-right">
																														<span class="discount">
																														-11%
																														<strong>OFF</strong>
																														</span>
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
													 <div>
															<div class="home1-banner-2 clearfix">
																 <div class="item-1 col-lg-6 col-md-6 col-sm-6 banners">
																		<div>
																			 <a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/bn-3.jpg" alt="Static Image"></a>
																		</div>
																 </div>
																 <div class="item-2 col-lg-6 col-md-6 col-sm-6 banners">
																		<div>
																			 <a title="Static Image" href="#"><img src="image/catalog/demo/banners/home1/bn-4.jpg" alt="Static Image"></a>
																		</div>
																 </div>
															</div>
													 </div>
												</div>
										 </div>
									</div>
							 </section>
							 <section id="box-link2" class="section-style">
									<div class="container page-builder-ltr">
										 <div class="row row-style row_a2">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_1bi4  col-style block block_5 title_neo2">
													 <div class="module so-listing-tabs-ltr default-nav clearfix img-float label-1 home-lt1">
															<div class="head-title font-ct">
																 <h2 class="modtitle">Spa &amp; Massage</h2>
															</div>
															<div class="modcontent">
																 <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
																		<div class="ltabs-wrap">
																			 <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
																					<!--Begin Tabs-->
																					<div class="ltabs-tabs-wrap">
																						 <span class="ltabs-tab-selected"></span>
																						 <span class="ltabs-tab-arrow">▼</span>
																						 <div class="item-sub-cat">
																								<ul class="ltabs-tabs cf">
																									 <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
																									 <li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label">New Arrivals</span> </li>
																									 <li class="ltabs-tab " data-category-id="3" data-active-content=".items-category-3"> <span class="ltabs-tab-label">Most Rating</span> </li>
																								</ul>
																						 </div>
																					</div>
																					<!-- End Tabs-->
																			 </div>
										
																			 <div class="wap-listing-tabs ltabs-items-container products-list grid">
																					<!--Begin Items-->
																					<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
																						 <div class="ltabs-items-inner ltabs-slider">
																							<div class="ltabs-item">
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/1-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden" href="product.html" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/5-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="ltabs-item">
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/2-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/6-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="ltabs-item">
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/3-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/7-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="ltabs-item">
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/4-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden"  href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																								<div class="item-inner product-layout transition product-grid">
																									<div class="product-item-container">
																										<div class="left-block">
																										<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											<img src="image/catalog/demo/product/spa/11-270x270.jpg" alt="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa">
																											</a>
																										</div>
																										<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																										</div>
																										<div class="right-block">
																										<div class="caption">
																											<h4><a href="product.html" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa" target="_self">Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa</a></h4>
																											<div class="total-price clearfix">
																											<div class="price price-left"><span class="price-new">$86.00</span><span class="price-old">$98.00</span></div>
																											<div class="price-sale price-right"><span class="discount 123">-13%<strong>OFF</strong></span></div>
																											</div>
																										</div>
																										<div class="button-group">
																											<div class="button-inner so-quickview">
																											<a class="lt-image hidden"  href="product.html" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																											<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																											<i class="fa fa-search"></i>
																											</a>
																											<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																											<i class="fa fa-heart"></i>
																											</button>
																											<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																											<i class="fa fa-exchange"></i>
																											</button>
																											<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																											<span class="hidden">Add to cart</span>
																											</button>
																											</div>
																										</div>
																										</div>
																									</div>
																								</div>
																							</div>								
																							</div>
																					</div>
																					<div class="ltabs-items items-category-2 grid" data-total="16">
																						 <div class="ltabs-loading"></div>
																					</div>
																					<div class="ltabs-items  items-category-3 grid" data-total="16">
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
							 <section id="box-link3" class="section-style">
									<div class="container page-builder-ltr">
										 <div class="row row-style row_a3">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_nvxr  block block_6 title_neo3">
													 <div class="module so-listing-tabs-ltr home1-lt-style2 default-nav clearfix img-float home-lt1">
															<div class="head-title font-ct">
																 <h2 class="modtitle">Fashion &amp; Accessories</h2>
															</div>
															<div class="modcontent">
																 <div id="so_listing_tabs_2" class="so-listing-tabs first-load">
																		<div class="ltabs-wrap">
																			 <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
																					<div class="ltabs-tabs-wrap">
																						 <span class="ltabs-tab-selected">Best sellers</span>
																						 <span class="ltabs-tab-arrow">▼</span>
																						 <div class="item-sub-cat">
																								<ul class="ltabs-tabs cf">
																									 <li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
																											<span class="ltabs-tab-label">Best sellers</span>
																									 </li>
																									 <li class="ltabs-tab" data-category-id="5" data-active-content=".items-category-5">
																											<span class="ltabs-tab-label">New Arrivals</span>
																									 </li>
																									 <li class="ltabs-tab" data-category-id="6" data-active-content=".items-category-6">
																											<span class="ltabs-tab-label">Most Rating</span>
																									 </li>
																								</ul>
																						 </div>
																					</div>
																			 </div>
																			 <div class="wap-listing-tabs products-list grid">
																					<div class="item-cat-image banners">
																						 <div>
																								<a href="product.html" title="" target="_self">
																								<img class="categories-loadimage" title="" alt="" src="image/catalog/demo/banners/home1/md-banner-1.jpg">
																								</a>
																						 </div>
																					</div>
																					<div class="ltabs-items-container">
																						 <div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
																								<div class="ltabs-items-inner ltabs-slider ">
																									<div class="ltabs-item">
																									<div class="item-inner product-layout transition product-grid">
																										<div class="product-item-container">
																										<div class="left-block">
																											<div class="image product-image-container ">
																											<a class="lt-image"  href="#" target="_self" title="Amazing Yoga Sport Poses Most People Wouldn't Dream ">
																											<img src="image/catalog/demo/product/fashion/10-270x270.jpg" alt="Amazing Yoga Sport Poses Most People Wouldn't Dream ">
																											</a>
																											</div>
																											<div class="box-label">
																											<span class="label-product label-sale">Sale</span>
																											</div>
																										</div>
																										<div class="right-block">
																											<div class="caption">
																											<h4>
																												<a href="product.html" title="Amazing Yoga Sport Poses Most People Wouldn't Dream " target="_self">Amazing Yoga Sport Poses Most People Wouldn't Dre..</a>
																											</h4>
																											<div class="total-price clearfix">
																												<div class="price price-left">
																												<span class="price-new">$108.80</span>
																												<span class="price-old">$122.00</span>
																												</div>
																												<div class="price-sale price-right">
																												<span class="discount 123">-11%<strong>OFF</strong></span>
																												</div>
																											</div>
																											</div>
																											<div class="button-group">
																											<div class="button-inner so-quickview">
																												<a class="lt-image hidden" href="#" target="_self" title="Amazing Yoga Sport Poses Most People Wouldn't Dream "></a>
																												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																												<i class="fa fa-search"></i>
																												</a>
																												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																												<i class="fa fa-heart"></i>
																												</button>
																												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																												<i class="fa fa-exchange"></i>
																												</button>
																												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																												<span class="hidden">Add to cart</span>
																												</button>
																											</div>
																											</div>
																										</div>
																										</div>
																									</div>
																									<div class="item-inner product-layout transition product-grid">
																										<div class="product-item-container">
																										<div class="left-block">
																											<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz">
																											<img src="image/catalog/demo/product/fashion/15-270x270.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
																											</a>
																											</div>
																											<div class="box-label">
																											<span class="label-product label-sale">Sale</span>
																											</div>
																										</div>
																										<div class="right-block">
																											<div class="caption">
																											<h4>
																												<a href="product.html" title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">Est Officia Including Shoes Beautiful Pieces Canaz</a>
																											</h4>
																											<div class="total-price clearfix">
																												<div class="price price-left">
																												<span class="price-new">$62.00</span>
																												<span class="price-old">$337.99</span>
																												</div>
																												<div class="price-sale price-right">
																												<span class="discount 123">-82%<strong>OFF</strong></span>
																												</div>
																											</div>
																											</div>
																											<div class="button-group">
																											<div class="button-inner so-quickview">
																												<a class="lt-image hidden" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz"></a>
																												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																												<i class="fa fa-search"></i>
																												</a>
																												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																												<i class="fa fa-heart"></i>
																												</button>
																												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																												<i class="fa fa-exchange"></i>
																												</button>
																												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																												<span class="hidden">Add to cart</span>
																												</button>
																											</div>
																											</div>
																										</div>
																										</div>
																									</div>
																									</div>
																									<div class="ltabs-item">
																									<div class="item-inner product-layout transition product-grid">
																										<div class="product-item-container">
																										<div class="left-block">
																											<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe">
																											<img src="image/catalog/demo/product/fashion/2-270x270.jpg" alt="Girly Summer Outfit Ideas To Upgrade Your Wardrobe">
																											</a>
																											</div>
																										</div>
																										<div class="right-block">
																											<div class="caption">
																											<h4>
																												<a href="product.html" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe" target="_self">Girly Summer Outfit Ideas To Upgrade Your Wardrob..</a>
																											</h4>
																											<div class="total-price clearfix">
																												<div class="price price-left">
																												<span class="price-new">$128.80</span>
																												<span class="price-old"></span>
																												</div>
																											</div>
																											</div>
																											<div class="button-group">
																											<div class="button-inner so-quickview">
																												<a class="lt-image hidden" href="#" target="_self" title="Girly Summer Outfit Ideas To Upgrade Your Wardrobe"></a>
																												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																												<i class="fa fa-search"></i>
																												</a>
																												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																												<i class="fa fa-heart"></i>
																												</button>
																												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																												<i class="fa fa-exchange"></i>
																												</button>
																												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																												<span class="hidden">Add to cart</span>
																												</button>
																											</div>
																											</div>
																										</div>
																										</div>
																									</div>
																									<div class="item-inner product-layout transition product-grid">
																										<div class="product-item-container">
																										<div class="left-block">
																											<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer">
																											<img src="image/catalog/demo/product/fashion/4-270x270.jpg" alt="Cras idrisusiopsa quo voluptas nulla pariatur shoprer">
																											</a>
																											</div>
																										</div>
																										<div class="right-block">
																											<div class="caption">
																											<h4>
																												<a href="product.html" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer" target="_self">Cras idrisusiopsa quo voluptas nulla par...</a>
																											</h4>
																											<div class="total-price clearfix">
																												<div class="price price-left">
																												<span class="price-new">$242.00</span>
																												<span class="price-old"></span>
																												</div>
																											</div>
																											</div>
																											<div class="button-group">
																											<div class="button-inner so-quickview">
																												<a class="lt-image hidden" href="#" target="_self" title="Cras idrisusiopsa quo voluptas nulla pariatur shoprer"></a>
																												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																												<i class="fa fa-search"></i>
																												</a>
																												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																												<i class="fa fa-heart"></i>
																												</button>
																												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																												<i class="fa fa-exchange"></i>
																												</button>
																												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																												<span class="hidden">Add to cart</span>
																												</button>
																											</div>
																											</div>
																										</div>
																										</div>
																									</div>
																									</div>
																									<div class="ltabs-item">
																									<div class="item-inner product-layout transition product-grid">
																										<div class="product-item-container">
																										<div class="left-block">
																											<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Invisible Hidden Spy Earphone Micro Wireless">
																											<img src="image/catalog/demo/product/fashion/16-270x270.png" alt="Invisible Hidden Spy Earphone Micro Wireless">
																											</a>
																											</div>
																										</div>
																										<div class="right-block">
																											<div class="caption">
																											<h4>
																												<a href="product.html" title="Invisible Hidden Spy Earphone Micro Wireless" target="_self">Invisible Hidden Spy Earphone Micro Wireless</a>
																											</h4>
																											<div class="total-price clearfix">
																												<div class="price price-left">
																												<span class="price-new">$122.00</span>
																												<span class="price-old"></span>
																												</div>
																											</div>
																											</div>
																											<div class="button-group">
																											<div class="button-inner so-quickview">
																												<a class="lt-image hidden" href="#" target="_self" title="Invisible Hidden Spy Earphone Micro Wireless"></a>
																												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																												<i class="fa fa-search"></i>
																												</a>
																												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																												<i class="fa fa-heart"></i>
																												</button>
																												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																												<i class="fa fa-exchange"></i>
																												</button>
																												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																												<span class="hidden">Add to cart</span>
																												</button>
																											</div>
																											</div>
																										</div>
																										</div>
																									</div>
																									<div class="item-inner product-layout transition product-grid">
																										<div class="product-item-container">
																										<div class="left-block">
																											<div class="image product-image-container ">
																											<a class="lt-image" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz">
																											<img src="image/catalog/demo/product/fashion/24-270x270.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
																											</a>
																											</div>
																											<div class="box-label">
																											<span class="label-product label-sale">Sale</span>
																											</div>
																										</div>
																										<div class="right-block">
																											<div class="caption">
																											<h4>
																												<a href="product.html" title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">Est Officia Including Shoes Beautiful Pieces Canaz</a>
																											</h4>
																											<div class="total-price clearfix">
																												<div class="price price-left">
																												<span class="price-new">$98.00</span>
																												<span class="price-old">$122.00</span>
																												</div>
																												<div class="price-sale price-right">
																												<span class="discount 123">-20%<strong>OFF</strong></span>
																												</div>
																											</div>
																											</div>
																											<div class="button-group">
																											<div class="button-inner so-quickview">
																												<a class="lt-image hidden" href="#" target="_self" title="Est Officia Including Shoes Beautiful Pieces Canaz"></a>
																												<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																												<i class="fa fa-search"></i>
																												</a>
																												<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																												<i class="fa fa-heart"></i>
																												</button>
																												<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																												<i class="fa fa-exchange"></i>
																												</button>
																												<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																												<span class="hidden">Add to cart</span>
																												</button>
																											</div>
																											</div>
																										</div>
																										</div>
																									</div>
																									</div>
																								</div>
																							</div>
																						 <div class="ltabs-items  items-category-5 grid" data-total="16">
																								<div class="ltabs-loading">
																								</div>
																						 </div>
																						 <div class="ltabs-items  items-category-6 grid" data-total="16">
																								<div class="ltabs-loading">
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
							 <section id="box-link4" class="section-style">
									<div class="container page-builder-ltr">
										 <div class="row row-style row_a4">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_mfpr  block block_7 title_neo4">
													 <div class="module so-listing-tabs-ltr home1-lt-style3 default-nav clearfix img-float home-lt1">
															<div class="head-title font-ct">
																 <h2 class="modtitle">Travel & Vacation</h2>
															</div>
															<div class="modcontent">
																 <div id="so_listing_tabs_3" class="so-listing-tabs first-load">
																		<div class="ltabs-wrap">
																			 <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="3" data-md="3" data-sm="3" data-xs="2" data-margin="0">
																					<div class="ltabs-tabs-wrap">
																						 <span class="ltabs-tab-selected">Best sellers</span>
																						 <span class="ltabs-tab-arrow">▼</span>
																						 <div class="item-sub-cat">
																								<ul class="ltabs-tabs cf">
																									 <li class="ltabs-tab tab-sel" data-category-id="4" data-active-content=".items-category-4">
																											<span class="ltabs-tab-label">Best sellers</span>
																									 </li>
																									 <li class="ltabs-tab" data-category-id="7" data-active-content=".items-category-7">
																											<span class="ltabs-tab-label">New Arrivals</span>
																									 </li>
																									 <li class="ltabs-tab" data-category-id="8" data-active-content=".items-category-8">
																											<span class="ltabs-tab-label">Most Rating</span>
																									 </li>
																								</ul>
																						 </div>
																					</div>
																			 </div>
										<div class="wap-listing-tabs products-list grid">
											<div class="item-cat-image banners">
												<div>
													<a href="product.html" title="" target="_self">
													<img class="categories-loadimage" title="" alt="" src="image/catalog/demo/banners/home1/md-banner-2.jpg">
													</a>
												</div>
											</div>
											<div class="ltabs-items-container">
												<div class="ltabs-items ltabs-items-selected items-category-4" data-total="16">
													<div class="ltabs-items-inner ltabs-slider">
														<div class="ltabs-item">
															<div class="item-inner product-layout transition product-grid">
																<div class="product-item-container">
																<div class="left-block">
																	<div class="image product-image-container ">
																	<a class="lt-image" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
																	<img src="image/catalog/demo/product/travel/10-270x270.jpg" alt="Bougainvilleas On Lombard Street, San Francisco, Tokyo">
																	</a>
																	</div>
																	<div class="box-label">
																	<span class="label-product label-sale">Sale</span>
																	</div>
																</div>
																<div class="right-block">
																	<div class="caption">
																	<h4>
																		<a href="product.html" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo" target="_self">Bougainvilleas On Lombard Street, San Francisco, Tokyo</a>
																	</h4>
																	<div class="total-price clearfix">
																		<div class="price price-left">
																		<span class="price-new">$108.80</span>
																		<span class="price-old">$122.00</span>
																		</div>
																		<div class="price-sale price-right">
																		<span class="discount 123">-11%<strong>OFF</strong></span>
																		</div>
																	</div>
																	</div>
																	<div class="button-group">
																	<div class="button-inner so-quickview">
																		<a class="lt-image hidden" href="#" target="_self" title="Bougainvilleas On Lombard Street, San Francisco, Tokyo"></a>
																		<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																		<i class="fa fa-search"></i>
																		</a>
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																		<i class="fa fa-heart"></i>
																		</button>
																		<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																		<i class="fa fa-exchange"></i>
																		</button>
																		<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																		<span class="hidden">Add to cart</span>
																		</button>
																	</div>
																	</div>
																</div>
																</div>
															</div>
															<div class="item-inner product-layout transition product-grid">
																<div class="product-item-container">
																<div class="left-block">
																	<div class="image product-image-container ">
																	<a class="lt-image"  href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
																	<img src="image/catalog/demo/product/travel/8-270x270.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
																	</a>
																	</div>
																	<div class="box-label">
																	<span class="label-product label-sale">Sale</span>
																	</div>
																</div>
																<div class="right-block">
																	<div class="caption">
																	<h4>
																		<a href="product.html" title="Philipin Tour Group Manila/ Pattaya / Mactan " target="_self">Philipin Tour Group Manila/ Pattaya / Mactan </a>
																	</h4>
																	<div class="total-price clearfix">
																		<div class="price price-left">
																		<span class="price-new">$74.00</span>
																		<span class="price-old">$122.00</span>
																		</div>
																		<div class="price-sale price-right">
																		<span class="discount 123">-40%<strong>OFF</strong></span>
																		</div>
																	</div>
																	</div>
																	<div class="button-group">
																	<div class="button-inner so-quickview">
																		<a class="lt-image hidden"  href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan "></a>
																		<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																		<i class="fa fa-search"></i>
																		</a>
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																		<i class="fa fa-heart"></i>
																		</button>
																		<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																		<i class="fa fa-exchange"></i>
																		</button>
																		<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																		<span class="hidden">Add to cart</span>
																		</button>
																	</div>
																	</div>
																</div>
																</div>
															</div>
														</div>
														<div class="ltabs-item">
															<div class="item-inner product-layout transition product-grid">
																<div class="product-item-container">
																<div class="left-block">
																	<div class="image product-image-container ">
																	<a class="lt-image"  href="#" target="_self" title="Burger King Japan debuts Monster Baby, Double, Canada">
																	<img src="image/catalog/demo/product/travel/1-270x270.jpg" alt="Burger King Japan debuts Monster Baby, Double, Canada">
																	</a>
																	</div>
																</div>
																<div class="right-block">
																	<div class="caption">
																	<h4>
																		<a href="product.html" title="Burger King Japan debuts Monster Baby, Double, Canada" target="_self">Burger King Japan debuts Monster Baby, Double, Canada</a>
																	</h4>
																	<div class="total-price clearfix">
																		<div class="price price-left">
																		<span class="price-new">$1,202.00</span>
																		</div>
																	</div>
																	</div>
																	<div class="button-group">
																	<div class="button-inner so-quickview">
																		<a class="lt-image hidden"  href="#" target="_self" title="Burger King Japan debuts Monster Baby, Double, Canada"></a>
																		<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																		<i class="fa fa-search"></i>
																		</a>
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																		<i class="fa fa-heart"></i>
																		</button>
																		<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																		<i class="fa fa-exchange"></i>
																		</button>
																		<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																		<span class="hidden">Add to cart</span>
																		</button>
																	</div>
																	</div>
																</div>
																</div>
															</div>
															<div class="item-inner product-layout transition product-grid">
																<div class="product-item-container">
																<div class="left-block">
																	<div class="image product-image-container ">
																	<a class="lt-image"  href="#" target="_self" title="Thailand Group Departure / Pattaya / Bangkok">
																	<img src="image/catalog/demo/product/travel/15-270x270.jpg" alt="Thailand Group Departure / Pattaya / Bangkok">
																	</a>
																	</div>
																</div>
																<div class="right-block">
																	<div class="caption">
																	<h4>
																		<a href="product.html" title="Thailand Group Departure / Pattaya / Bangkok" target="_self">Thailand Group Departure / Pattaya / Bangkok</a>
																	</h4>
																	<div class="total-price clearfix">
																		<div class="price price-left">
																		<span class="price-new">$122.00</span>
																		</div>
																	</div>
																	</div>
																	<div class="button-group">
																	<div class="button-inner so-quickview">
																		<a class="lt-image hidden"  href="#" target="_self" title="Thailand Group Departure / Pattaya / Bangkok"></a>
																		<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																		<i class="fa fa-search"></i>
																		</a>
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																		<i class="fa fa-heart"></i>
																		</button>
																		<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																		<i class="fa fa-exchange"></i>
																		</button>
																		<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																		<span class="hidden">Add to cart</span>
																		</button>
																	</div>
																	</div>
																</div>
																</div>
															</div>
														</div>
														<div class="ltabs-item">
															<div class="item-inner product-layout transition product-grid">
																<div class="product-item-container">
																<div class="left-block">
																	<div class="image product-image-container ">
																	<a class="lt-image"  href="#" target="_self" title="Chicago Tour Departure / Pattaya / Solimania...">
																	<img src="image/catalog/demo/product/travel/5-270x270.jpg" alt="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada">
																	</a>
																	</div>
																	<div class="box-label">
																	<span class="label-product label-sale">Sale</span>
																	</div>
																</div>
																<div class="right-block">
																	<div class="caption">
																	<h4>
																		<a href="product.html" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada" target="_self">Chicago Tour Departure / Pattaya / Solimania...</a>
																	</h4>
																	<div class="total-price clearfix">
																		<div class="price price-left">
																		<span class="price-new">$108.80</span>
																		<span class="price-old">$122.00</span>
																		</div>
																		<div class="price-sale price-right">
																		<span class="discount 123">-11%<strong>OFF</strong></span>
																		</div>
																	</div>
																	</div>
																	<div class="button-group">
																	<div class="button-inner so-quickview">
																		<a class="lt-image hidden"  href="#" target="_self" title="Chicago Tour Departure / Pattaya / Solimania/ Tokyo/ Canada"></a>
																		<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																		<i class="fa fa-search"></i>
																		</a>
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																		<i class="fa fa-heart"></i>
																		</button>
																		<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																		<i class="fa fa-exchange"></i>
																		</button>
																		<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																		<span class="hidden">Add to cart</span>
																		</button>
																	</div>
																	</div>
																</div>
																</div>
															</div>
															<div class="item-inner product-layout transition product-grid">
																<div class="product-item-container">
																<div class="left-block">
																	<div class="image product-image-container ">
																	<a class="lt-image"  href="#" target="_self" title="Tokyo Temple on Elevated Area Under Blue Sky and White">
																	<img src="image/catalog/demo/product/travel/13-270x270.jpg" alt="Tokyo Temple on Elevated Area Under Blue Sky and White">
																	</a>
																	</div>
																</div>
																<div class="right-block">
																	<div class="caption">
																	<h4>
																		<a href="product.html" title="Tokyo Temple on Elevated Area Under Blue Sky and White" target="_self">Tokyo Temple on Elevated Area Under Blue Sky and White</a>
																	</h4>
																	<div class="total-price clearfix">
																		<div class="price price-left">
																		<span class="price-new">$122.00</span>
																		</div>
																	</div>
																	</div>
																	<div class="button-group">
																	<div class="button-inner so-quickview">
																		<a class="lt-image hidden"  href="#" target="_self" title="Tokyo Temple on Elevated Area Under Blue Sky and White"></a>
																		<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																		<i class="fa fa-search"></i>
																		</a>
																		<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('28');" data-original-title="Add to Wish List">
																		<i class="fa fa-heart"></i>
																		</button>
																		<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('28');" data-original-title="Compare this Product">
																		<i class="fa fa-exchange"></i>
																		</button>
																		<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('28');" data-original-title="Add to cart">
																		<span class="hidden">Add to cart</span>
																		</button>
																	</div>
																	</div>
																</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="ltabs-items  items-category-7 grid" data-total="16">
													<div class="ltabs-loading">
													</div>
												</div>
												<div class="ltabs-items  items-category-8 grid" data-total="16">
													<div class="ltabs-loading">
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
							 <!-- Digital & Electronics -->
							 <section id="box-link5" class="section-style">
									<div class="container page-builder-ltr">
										 <div class="row row-style row_a5">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iunl  block block_8 title_neo5">
													 <div class="module so-listing-tabs-ltr home1-lt-style4 default-nav clearfix img-float home-lt1">
															<div class="head-title font-ct">
																 <h2 class="modtitle">
																		<span>Digital & Electronics</span>
																 </h2>
															</div>
															<div class="modcontent">
																 <div id="so_listing_tabs_4" class="so-listing-tabs first-load">
																		<div class="ltabs-wrap">
																			 <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="3" data-xs="2" data-margin="0">
																					<!--Begin Tabs-->
																					<div class="ltabs-tabs-wrap">
																						 <span class="ltabs-tab-selected"></span>
																						 <span class="ltabs-tab-arrow">▼</span>
																						 <div class="item-sub-cat">
																								<ul class="ltabs-tabs cf">
																									 <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Best Seller</span> </li>
																									 <li class="ltabs-tab " data-category-id="9" data-active-content=".items-category-9"> <span class="ltabs-tab-label">New Arrivals</span> </li>
																									 <li class="ltabs-tab " data-category-id="10" data-active-content=".items-category-10"> <span class="ltabs-tab-label">Most Rating</span> </li>
																								</ul>
																						 </div>
																					</div>
																					<!-- End Tabs-->

																			 </div>
																			 <div class="wap-listing-tabs products-list grid">
																			 <div class="ltabs-items-container ">
																					<!--Begin Items-->
																					<div class="ltabs-items ltabs-items-selected items-category-1" data-total="16">
																						 <div class="ltabs-items-inner ltabs-slider">
																								<div class="ltabs-item">
																									 <div class="item-inner product-layout transition product-grid">
																											<div class="product-item-container">
																												 <div class="left-block">
																														<div class="image product-image-container ">
																															 <a class="lt-image" data-product="114" href="#" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
																															 <img src="image/catalog/demo/product/electronic/1-270x270.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
																															 </a>
																														</div>
																														<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																												 </div>
																												 <div class="right-block">
																														<div class="caption">
																															 <h4><a href="product.html" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" target="_self"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
																															 <div class="total-price clearfix">
																																	<div class="price price-left"><span class="price-new">$98.00</span><span class="price-old">$122.00</span></div>
																																	<div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
																															 </div>
																														</div>
																														<div class="button-group">
																															 <div class="button-inner so-quickview">
																																	<a class="lt-image hidden" data-product="114" href="#" target="_self" title="Anantara Dhigu Resort &amp;amp; Spa, Maldives Hair Spa"></a>
																																	<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																																	<i class="fa fa-search"></i>
																																	</a>
																																	<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																																	<i class="fa fa-heart"></i>
																																	</button>
																																	<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																																	<i class="fa fa-exchange"></i>
																																	</button>
																																	<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																																	<span class="hidden">Add to cart</span>
																																	</button>
																															 </div>
																														</div>
																												 </div>
																											</div>
																									 </div>
																								</div>
																								<div class="ltabs-item">
																									 <div class="item-inner product-layout transition product-grid">
																											<div class="product-item-container">
																												 <div class="left-block">
																														<div class="image product-image-container ">
																															 <a class="lt-image" data-product="114" href="#" target="_self" title="Compact (External Battery Power Bank) with Premium">
																															 <img src="image/catalog/demo/product/electronic/12-270x270.jpg" alt="Compact (External Battery Power Bank) with Premium">
																															 </a>
																														</div>
																												 </div>
																												 <div class="right-block">
																														<div class="caption">
																															 <h4><a href="product.html" title="Compact (External Battery Power Bank) with Premium" target="_self">Compact (External Battery Power Bank) with Premium</a></h4>
																															 <div class="total-price clearfix">
																																	<div class="price price-left"><span class="price-new">$122.00</span><span class="price-old"></span></div>
																															 </div>
																														</div>
																														<div class="button-group">
																															 <div class="button-inner so-quickview">
																																	<a class="lt-image hidden" data-product="114" href="#" target="_self" title="Compact (External Battery Power Bank) with Premium"></a>
																																	<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																																	<i class="fa fa-search"></i>
																																	</a>
																																	<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																																	<i class="fa fa-heart"></i>
																																	</button>
																																	<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																																	<i class="fa fa-exchange"></i>
																																	</button>
																																	<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																																	<span class="hidden">Add to cart</span>
																																	</button>
																															 </div>
																														</div>
																												 </div>
																											</div>
																									 </div>
																								</div>
																								<div class="ltabs-item">
																									 <div class="item-inner product-layout transition product-grid">
																											<div class="product-item-container">
																												 <div class="left-block">
																														<div class="image product-image-container ">
																															 <a class="lt-image" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery)">
																															 <img src="image/catalog/demo/product/electronic/13-270x270.jpg" alt="Compact Portable Charger (External Battery)">
																															 </a>
																														</div>
																												 </div>
																												 <div class="right-block">
																														<div class="caption">
																															 <h4><a href="product.html" title="Compact Portable Charger (External Battery)" target="_self">Compact Portable Charger (External Battery)</a></h4>
																															 <div class="total-price clearfix">
																																	<div class="price price-left"><span class="price-new">$98.00</span><span class="price-old"></span></div>
																															 </div>
																														</div>
																														<div class="button-group">
																															 <div class="button-inner so-quickview">
																																	<a class="lt-image hidden" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery)"></a>
																																	<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																																	<i class="fa fa-search"></i>
																																	</a>
																																	<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																																	<i class="fa fa-heart"></i>
																																	</button>
																																	<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																																	<i class="fa fa-exchange"></i>
																																	</button>
																																	<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																																	<span class="hidden">Add to cart</span>
																																	</button>
																															 </div>
																														</div>
																												 </div>
																											</div>
																									 </div>
																								</div>
																								<div class="ltabs-item">
																									 <div class="item-inner product-layout transition product-grid">
																											<div class="product-item-container">
																												 <div class="left-block">
																														<div class="image product-image-container ">
																															 <a class="lt-image" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery) T22">
																															 <img src="image/catalog/demo/product/electronic/21-270x270.jpg" alt="Compact Portable Charger (External Battery) T22">
																															 </a>
																														</div>
																														<div class="box-label"><span class="label-product label-sale">Sale</span></div>
																												 </div>
																												 <div class="right-block">
																														<div class="caption">
																															 <h4><a href="product.html" title="Compact Portable Charger (External Battery) T22" target="_self">Compact Portable Charger (External Battery) T22</a></h4>
																															 <div class="total-price clearfix">
																																	<div class="price price-left"><span class="price-new">$98.00</span><span class="price-old">$122.00</span></div>
																																	<div class="price-sale price-right"><span class="discount 123">-20%<strong>OFF</strong></span></div>
																															 </div>
																														</div>
																														<div class="button-group">
																															 <div class="button-inner so-quickview">
																																	<a class="lt-image hidden" data-product="114" href="#" target="_self" title="Compact Portable Charger (External Battery) T22"></a>
																																	<a class="btn-button btn-quickview quickview quickview_handler" href="quickview.html" title="Quick View" data-title="Quick View" data-fancybox-type="iframe">
																																	<i class="fa fa-search"></i>
																																	</a>
																																	<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('114');" data-original-title="Add to Wish List">
																																	<i class="fa fa-heart"></i>
																																	</button>
																																	<button class="compare btn-button" type="button" data-toggle="tooltip" title="" onclick="compare.add('114');" data-original-title="Compare this Product">
																																	<i class="fa fa-exchange"></i>
																																	</button>
																																	<button class="addToCart btn-button" type="button" data-toggle="tooltip" title="" onclick="cart.add('114');" data-original-title="Add to cart">
																																	<span class="hidden">Add to cart</span>
																																	</button>
																															 </div>
																														</div>
																												 </div>
																											</div>
																									 </div>
																								</div>
																								
																							 
																						</div>
																					</div>
																					<div class="ltabs-items items-category-9 grid" data-total="16">
																						 <div class="ltabs-loading"></div>
																					</div>
																					<div class="ltabs-items  items-category-10 grid" data-total="16">
																						 <div class="ltabs-loading"></div>
																					</div>
																					<div class="row clearfix banner-tab">
																						 <div class="col-lg-6 col-md-6 col-sm-6 banners">
																								<div>
																									 <a href="#"><img src="image/catalog/demo/banners/home1/bn-5.jpg" alt="Image Client"></a>
																								</div>
																						 </div>
																						 <div class="col-lg-6 col-md-6 col-sm-6 banners">
																								<div>
																									 <a href="#"><img src="image/catalog/demo/banners/home1/bn-6.jpg" alt="Image Client"></a>
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
							 <!--Extra-->
							 <div class="container page-builder-ltr">
									<div class="row row-style row_a6">
										 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_siw1  block block_9">
												<div class="moduletable module so-extraslider-ltr home1-extra clearfix">
													 <div class="head-title font-ct">
															<h2 class="modtitle">Sport &amp; Entertaiment</h2>
													 </div>
													 <div class="modcontent">
							<div id="so_extra_slider_sport" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
								<div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
									<div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
										<div class="item products-list grid">
											<div class="item-wrap product-layout style1 ">
												<div class="item-wrap-inner product-item-container">
													<div class="left-block">
														<div class="item-image">
															<div class="item-img-info product-image-container ">
																<a class="lt-image" data-product="55" href="#" target="_self" title="Men Collection Outfit Grid, Outfit and  Colored Sport ">
																	<img src="image/catalog/demo/product/sport/9-120x120.jpg" alt="Men Collection Outfit Grid, Outfit and  Colored Sport ">
																</a>
															</div>
														</div>
														<div class="box-label">
															<span class="label-product label-sale">Sale</span>
														</div>
													</div>
													<div class="right-block">
														<div class="caption">
															<h4 class="item-title">
																<a href="product.html" target="_self" title="Men Collection Outfit Grid, Outfit and  Colored Sport ">
																	Men Collection Outfit Grid, Outfit and  Colored Sport 
																 </a>
															</h4>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="total-price">
																	<div class="price price-left">
																		<span class="price product-price">
																			$74.20 
																		</span>
																		<span class="price-old">$122.00</span>
																	</div>
																	<div class="price-sale price-right">
																		<span class="discount">-40% 
																			<strong>OFF</strong>
																		</span>
																	</div>
																</div>
															</div>
															<!-- End item-content -->
														</div>
														<!-- End item-info -->
													</div>
												</div>
												<div class="item-wrap-inner product-item-container">
													<div class="left-block">
														<div class="item-image">
															<div class="item-img-info product-image-container ">
																<a class="lt-image" data-product="55" href="#" target="_self" title="Xumstick teachings  uttempor the actual of the great">
																	<img src="image/catalog/demo/product/sport/6-120x120.jpg" alt="Xumstick teachings  uttempor the actual of the great">
																</a>
															</div>
														</div>
														<div class="box-label">
														</div>
													</div>
													<div class="right-block">
														<div class="caption">
															<h4 class="item-title">
																<a href="product.html" target="_self" title="Xumstick teachings  uttempor the actual of the great">
																	Xumstick teachings uttempor the actual of...
																</a>
															</h4>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="total-price">
																	<div class="price price-left">
																		<span class="price product-price">
																							 $98.00 
																							 </span>
																		<span class="price-old">$122.00</span>
																	</div>
																	<div class="price-sale price-right">
																		<span class="discount">-20% 
																			<strong>OFF</strong>
																		</span>
																	</div>
																</div>
															</div>
															<!-- End item-content -->
														</div>
														<!-- End item-info -->
													</div>
												</div>
												<div class="item-wrap-inner product-item-container">
													<div class="left-block">
														<div class="item-image">
															<div class="item-img-info product-image-container ">
																<a class="lt-image" data-product="55" href="#" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
																	<img src="image/catalog/demo/product/sport/1-120x120.jpg" alt="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
																</a>
															</div>
														</div>
														<div class="box-label">
														</div>
													</div>
													<div class="right-block">
														<div class="caption">
															<h4 class="item-title">
																<a href="product.html" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze Dress orilamra">
																	Amy Byer Big Girls' Colorblock Trapeze Dre... 
																</a>
															</h4>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="total-price">
																	<div class="price price-left">
																		<span class="price product-price">
																			$122.00 
																		</span>
																	</div>
																	<div class="price-sale price-right">
																	</div>
																</div>
															</div>
															<!-- End item-content -->
														</div>
														<!-- End item-info -->
													</div>
												</div>
												<!-- End item-wrap-inner -->
											</div>
										</div>
										<div class="item products-list grid">
											<div class="item-wrap product-layout style1 ">
												<div class="item-wrap-inner product-item-container">
													<div class="left-block">
														<div class="item-image">
															<div class="item-img-info product-image-container ">
																<a class="lt-image" data-product="55" href="#" target="_self" title="Drumstick uttempor the actual teachings of the great">
																	<img src="image/catalog/demo/product/spa/12-120x120.jpg" alt="Drumstick uttempor the actual teachings of the great">
																</a>
															</div>
														</div>
														<div class="box-label">
														</div>
													</div>
													<div class="right-block">
														<div class="caption">
															<h4 class="item-title">
																<a href="product.html" target="_self" title="Drumstick uttempor the actual teachings of the great">
																	Drumstick uttempor the actual teachings of the great
																</a>
															</h4>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="total-price">
																	<div class="price price-left">
																		<span class="price product-price">
																			$123.20 
																		</span>
																	</div>
																	<div class="price-sale price-right">
																	</div>
																</div>
															</div>
															<!-- End item-content -->
														</div>
														<!-- End item-info -->
													</div>
												</div>
												<div class="item-wrap-inner product-item-container">
													<div class="left-block">
														<div class="item-image">
															<div class="item-img-info product-image-container ">
																<a class="lt-image" data-product="55" href="#" target="_self" title="Drumstick uttempor the actual teachings of the great">
																	<img src="image/catalog/demo/product/sport/1-120x120.jpg" alt="Drumstick uttempor the actual teachings of the great">
																</a>
															</div>
														</div>
														<div class="box-label">
														</div>
													</div>
													<div class="right-block">
														<div class="caption">
															<h4 class="item-title">
																<a href="product.html" target="_self" title="Drumstick uttempor the actual teachings of the great">
																 Drumstick uttempor the actual teachings of the great 
																</a>
															</h4>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="total-price">
																	<div class="price price-left">
																		<span class="price product-price">
																							 $122.00 
																							 </span>
																	</div>
																	<div class="price-sale price-right">
																	</div>
																</div>
															</div>
															<!-- End item-content -->
														</div>
														<!-- End item-info -->
													</div>
												</div>
												<div class="item-wrap-inner product-item-container">
													<div class="left-block">
														<div class="item-image">
															<div class="item-img-info product-image-container ">
																<a class="lt-image" data-product="55" href="#" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze orilamra ">
																	<img src="image/catalog/demo/product/sport/4-120x120.jpg" alt="Amy Byer Big Girls' Colorblock  Trapeze orilamra ">
																</a>
															</div>
														</div>
														<div class="box-label">
															<span class="label-product label-sale">Sale</span>
														</div>
													</div>
													<div class="right-block">
														<div class="caption">
															<h4 class="item-title">
																<a href="product.html" target="_self" title="Amy Byer Big Girls' Colorblock  Trapeze orilamra">
																	Vitaeelit pilama loves or pursues or desires to pain 
																</a>
															</h4>
															<!-- Begin item-content -->
															<div class="item-content">
																<div class="total-price">
																	<div class="price price-left">
																		<span class="price product-price">
																			$1,990.00 
																		</span>
																		<span class="price-old">$2,000.00</span>
																	</div>
																	<div class="price-sale price-right">
																		<span class="discount">-1% 
																		<strong>OFF</strong>
																	</span>
																	</div>
																</div>
															</div>
															<!-- End item-content -->
														</div>
														<!-- End item-info -->
													</div>
												</div>
												<!-- End item-wrap-inner -->
											</div>
										</div>
									</div>
								</div>
							</div>
													 </div>
												</div>
										 </div>
										 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_lhsd  block block_9">
												<div class="moduletable module so-extraslider-ltr home1-extra clearfix home1-extra-style2">
													 <div class="head-title font-ct">
															<h2 class="modtitle">Food & Restaurant</h2>
													 </div>
													 <div class="modcontent">
															<div  id="so_extra_slider_food" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
																 <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
																		<div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
																			 <div class="item products-list grid">
																					<div class="item-wrap product-layout style1 ">
																						 <div class="item-wrap-inner product-item-container">
																								<div class="left-block">
																									 <div class="item-image">
																											<div class="item-img-info product-image-container ">
																												 <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
																												 <img src="image/catalog/demo/product/food/2-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
																												 </a>
																											</div>
																									 </div>
																									 <div class="box-label">
													<span class="label-product label-sale">Sale</span>
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4 class="item-title">
																												 <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
																												 Vitaeelit pilama loves or pursues or desires to pain 
																												 </a>
																											</h4>
																											<!-- Begin item-content -->
																											<div class="item-content">
																												 <div class="total-price">
																														<div class="price price-left">
																															 <span class="price product-price">
																	$123.20 
																															 </span>
																 <span class="price-old">$98.00</span>
																														</div>
																														<div class="price-sale price-right">
																<span class="discount">-13% 
																	<strong>OFF</strong>
																</span>
																														</div>
																												 </div>
																											</div>
																											<!-- End item-content -->
																									 </div>
																									 <!-- End item-info -->
																								</div>
																						 </div>
																						 <div class="item-wrap-inner product-item-container">
																								<div class="left-block">
																									 <div class="item-image">
																											<div class="item-img-info product-image-container ">
																												 <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
																												 <img src="image/catalog/demo/product/food/8-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
																												 </a>
																											</div>
																									 </div>
																									 <div class="box-label">
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4 class="item-title">
																												 <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
																												 Vitaeelit pilama loves or pursues or desires to pain 
																												 </a>
																											</h4>
																											<!-- Begin item-content -->
																											<div class="item-content">
																												 <div class="total-price">
																														<div class="price price-left">
																															 <span class="price product-price">
																															 $123.20 
																															 </span>
																														</div>
																														<div class="price-sale price-right">
																														</div>
																												 </div>
																											</div>
																											<!-- End item-content -->
																									 </div>
																									 <!-- End item-info -->
																								</div>
																						 </div>
																						 <div class="item-wrap-inner product-item-container">
																								<div class="left-block">
																									 <div class="item-image">
																											<div class="item-img-info product-image-container ">
																												 <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
																												 <img src="image/catalog/demo/product/food/1-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
																												 </a>
																											</div>
																									 </div>
																									 <div class="box-label">
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4 class="item-title">
																												 <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
																												 Vitaeelit pilama loves or pursues or desires to pain 
																												 </a>
																											</h4>
																											<!-- Begin item-content -->
																											<div class="item-content">
																												 <div class="total-price">
																														<div class="price price-left">
																															 <span class="price product-price">
																															 $123.20 
																															 </span>
																														</div>
																														<div class="price-sale price-right">
																														</div>
																												 </div>
																											</div>
																											<!-- End item-content -->
																									 </div>
																									 <!-- End item-info -->
																								</div>
																						 </div>
																						 <!-- End item-wrap-inner -->
																					</div>
																			 </div>
																			 <div class="item products-list grid">
																					<div class="item-wrap product-layout style1 ">
																						 <div class="item-wrap-inner product-item-container">
																								<div class="left-block">
																									 <div class="item-image">
																											<div class="item-img-info product-image-container ">
																												 <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
																												 <img src="image/catalog/demo/product/food/9-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
																												 </a>
																											</div>
																									 </div>
																									 <div class="box-label">
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4 class="item-title">
																												 <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
																												 Vitaeelit pilama loves or pursues or desires to pain 
																												 </a>
																											</h4>
																											<!-- Begin item-content -->
																											<div class="item-content">
																												 <div class="total-price">
																														<div class="price price-left">
																															 <span class="price product-price">
																															 $123.20 
																															 </span>
																														</div>
																														<div class="price-sale price-right">
																														</div>
																												 </div>
																											</div>
																											<!-- End item-content -->
																									 </div>
																									 <!-- End item-info -->
																								</div>
																						 </div>
																						 <div class="item-wrap-inner product-item-container">
																								<div class="left-block">
																									 <div class="item-image">
																											<div class="item-img-info product-image-container ">
																												 <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
																												 <img src="image/catalog/demo/product/food/7-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
																												 </a>
																											</div>
																									 </div>
																									 <div class="box-label">
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4 class="item-title">
																												 <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
																												 Vitaeelit pilama loves or pursues or desires to pain 
																												 </a>
																											</h4>
																											<!-- Begin item-content -->
																											<div class="item-content">
																												 <div class="total-price">
																														<div class="price price-left">
																															 <span class="price product-price">
																															 $182.00 
																															 </span>
																														</div>
																														<div class="price-sale price-right">
																														</div>
																												 </div>
																											</div>
																											<!-- End item-content -->
																									 </div>
																									 <!-- End item-info -->
																								</div>
																						 </div>
																						 <div class="item-wrap-inner product-item-container">
																								<div class="left-block">
																									 <div class="item-image">
																											<div class="item-img-info product-image-container ">
																												 <a class="lt-image" data-product="55" href="#" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain">
																												 <img src="image/catalog/demo/product/food/4-120x120.jpg" alt="Vitaeelit pilama loves or pursues or desires to pain">
																												 </a>
																											</div>
																									 </div>
																									 <div class="box-label">
																									 </div>
																								</div>
																								<div class="right-block">
																									 <div class="caption">
																											<h4 class="item-title">
																												 <a href="product.html" target="_self" title="Vitaeelit pilama loves or pursues or desires to pain ">
																												 Vitaeelit pilama loves or pursues or desires to pain 
																												 </a>
																											</h4>
																											<!-- Begin item-content -->
																											<div class="item-content">
																												 <div class="total-price">
																														<div class="price price-left">
																															 <span class="price product-price">
																															 $182.00 
																															 </span>
																														</div>
																														<div class="price-sale price-right">
																														</div>
																												 </div>
																											</div>
																											<!-- End item-content -->
																									 </div>
																									 <!-- End item-info -->
																								</div>
																						 </div>
																						 <!-- End item-wrap-inner -->
																					</div>
																			 </div>
																		</div>
																 </div>
															</div>
													 </div>
												</div>
										 </div>
										<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col_dkfx  block block_9">
												<div class="moduletable module so-extraslider-ltr home1-extra clearfix home1-extra-style3">
							<div class="head-title font-ct">
								<h2 class="modtitle">Book Stationery</h2>
							</div>
							<div class="modcontent">
								<div id="so_extra_slider_book" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
									<div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate">
										<div class="category-slider-inner products-list yt-content-slider-2" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
											<div class="item products-list grid">
												<div class="item-wrap product-layout style1 ">
													<div class="item-wrap-inner product-item-container">
														<div class="left-block">
															<div class="item-image">
																<div class="item-img-info product-image-container ">
																	<a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
																		<img src="image/catalog/demo/product/book/3-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos">
																	</a>
																</div>
															</div>
															<div class="box-label">
																<span class="label-product label-sale">Sale</span>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="item-title">
																	<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
																		Bazem Carlo again is there anyone who loves oreos
																	</a>
																</h4>
																<!-- Begin item-content -->
																<div class="item-content">
																	<div class="total-price">
																		<div class="price price-left">
																			<span class="price product-price">
																				$98.00 
																			</span>
																			<span class="price-old">$122.00</span>
																		</div>
																		<div class="price-sale price-right">
																			<span class="discount">-20% 
																				<strong>OFF</strong>
																			</span>
																		</div>
																	</div>
																</div>
																<!-- End item-content -->
															</div>
															<!-- End item-info -->
														</div>
													</div>
													<div class="item-wrap-inner product-item-container">
														<div class="left-block">
															<div class="item-image">
																<div class="item-img-info product-image-container ">
																	<a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		<img src="image/catalog/demo/product/book/5-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
																	</a>
																</div>
															</div>
															<div class="box-label">
																<span class="label-product label-sale">Sale</span>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="item-title">
																	<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos">
																		Bazem Carlo again is there anyone who loves oreos 
																	</a>
																</h4>
																<!-- Begin item-content -->
																<div class="item-content">
																	<div class="total-price">
																		<div class="price price-left">
																			<span class="price product-price">
																				$108.80 
																			</span>
																			<span class="price-old">$122.00</span>
																		</div>
																		<div class="price-sale price-right">
																			<span class="discount">-20% 
																				<strong>OFF</strong>
																			</span>
																		</div>
																	</div>
																</div>
																<!-- End item-content -->
															</div>
															<!-- End item-info -->
														</div>
													</div>
													<div class="item-wrap-inner product-item-container">
														<div class="left-block">
															<div class="item-image">
																<div class="item-img-info product-image-container ">
																	<a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		<img src="image/catalog/demo/product/book/8-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
																	</a>
																</div>
															</div>
															<div class="box-label">
																<span class="label-product label-sale">Sale</span>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="item-title">
																	<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		Bazem Carlo again is there anyone who loves oreos  
																	</a>
																</h4>
																<!-- Begin item-content -->
																<div class="item-content">
																	<div class="total-price">
																		<div class="price price-left">
																			<span class="price product-price">
																								 $122.00 
																								 </span>
																			<span class="price-old">$146.00</span> 
																		</div>
																		<div class="price-sale price-right">
																			<span class="discount">-17% 
																				<strong>OFF</strong>
																			</span>
																		</div>
																	</div>
																</div>
																<!-- End item-content -->
															</div>
															<!-- End item-info -->
														</div>
													</div>
													<!-- End item-wrap-inner -->
												</div>
											</div>
											<div class="item products-list grid">
												<div class="item-wrap product-layout style1 ">
													<div class="item-wrap-inner product-item-container">
														<div class="left-block">
															<div class="item-image">
																<div class="item-img-info product-image-container ">
																	<a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		<img src="image/catalog/demo/product/book/9-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
																	</a>
																</div>
															</div>
															<div class="box-label">
																<span class="label-product label-sale">Sale</span>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="item-title">
																	<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		Bazem Carlo again is there anyone who loves oreos 
																	</a>
																</h4>
																<!-- Begin item-content -->
																<div class="item-content">
																	<div class="total-price">
																		<div class="price price-left">
																			<span class="price product-price">
																				$42.80 
																			</span>
																			<span class="price-old">$1,202.00</span>
																		</div>
																		<div class="price-sale price-right">
																			<span class="discount">-97% 
																				<strong>OFF</strong>
																			</span>
																		</div>
																	</div>
																</div>
																<!-- End item-content -->
															</div>
															<!-- End item-info -->
														</div>
													</div>
													<div class="item-wrap-inner product-item-container">
														<div class="left-block">
															<div class="item-image">
																<div class="item-img-info product-image-container ">
																	<a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		<img src="image/catalog/demo/product/book/1-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
																	</a>
																</div>
															</div>
															<div class="box-label">
																<span class="label-product label-sale">Sale</span>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="item-title">
																	<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		Bazem Carlo again is there anyone who loves oreos  
																	</a>
																</h4>
																<!-- Begin item-content -->
																<div class="item-content">
																	<div class="total-price">
																		<div class="price price-left">
																			<span class="price product-price">
																				$50.00 
																			</span>
																			<span class="price-old">$122.00</span>
																		</div>
																		<div class="price-sale price-right">
																			<span class="discount">-60% 
																				<strong>OFF</strong>
																			</span>
																		</div>
																	</div>
																</div>
																<!-- End item-content -->
															</div>
															<!-- End item-info -->
														</div>
													</div>
													<div class="item-wrap-inner product-item-container">
														<div class="left-block">
															<div class="item-image">
																<div class="item-img-info product-image-container ">
																	<a class="lt-image" data-product="55" href="#" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		<img src="image/catalog/demo/product/book/2-120x120.jpg" alt="Bazem Carlo again is there anyone who loves oreos ">
																	</a>
																</div>
															</div>
															<div class="box-label">
																<span class="label-product label-sale">Sale</span>
															</div>
														</div>
														<div class="right-block">
															<div class="caption">
																<h4 class="item-title">
																	<a href="product.html" target="_self" title="Bazem Carlo again is there anyone who loves oreos ">
																		Bazem Carlo again is there anyone who loves oreos 
																	</a>
																</h4>
																<!-- Begin item-content -->
																<div class="item-content">
																	<div class="total-price">
																		<div class="price price-left">
																			<span class="price product-price">
																				 $56.00 
																			</span>
																			<span class="price-old">$62.00</span>
																		</div>
																		<div class="price-sale price-right">
																			<span class="discount">-10% 
																				<strong>OFF</strong>
																			</span>
																		</div>
																	</div>
																</div>
																<!-- End item-content -->
															</div>
															<!-- End item-info -->
														</div>
													</div>
													<!-- End item-wrap-inner -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
												</div>
										</div>
										 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_5dfs  block block_10">
												<div class="clearfix home1-sevices">
													 <ul class="category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
															<li class="item payment col-md-3">
																 <div class="icon">
																 </div>
																 <div class="text">
																		<h5><a href="#">Payment on Delivery</a></h5>
																		<p>Cash on delivery option</p>
																 </div>
															</li>
															<li class="item free col-md-3">
																 <div class="icon">
																 </div>
																 <div class="text">
																		<h5><a href="#">Free shipping</a></h5>
																		<p>Free shipping on oder over $100</p>
																 </div>
															</li>
															<li class="item secure col-md-3">
																 <div class="icon">
																 </div>
																 <div class="text">
																		<h5><a href="#">Secure Payment</a></h5>
																		<p>We value your security</p>
																 </div>
															</li>
															<li class="item support col-md-3">
																 <div class="icon">
																 </div>
																 <div class="text">
																		<h5><a href="#">Online support</a></h5>
																		<p>We have support 24/7</p>
																 </div>
															</li>
													 </ul>
												</div>
										 </div>
										 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_cfay  block block_11">
												<div class="module so-latest-blog custom-ourblog clearfix default-nav preset01-2 preset02-2 preset03-2 preset04-2 preset05-1">
													 <h2 class="modtitle"><span>Latest Blog</span></h2>
													 <div class="modcontent">
															<div id="so_latest_blog_1" class="so-blog-external button-type2 button-type2">
																 <div class="category-slider-inner products-list yt-content-slider blog-external clearfix " data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="2" data-items_column0="2" data-items_column1="2" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
																		<div class="media">
																			 <div class="item head-button"> 
																					<div class="content-img col-sm-6 col-xs-12">
																						 <a href="product.html" target="_self">
																						 <img src="image/catalog/demo/blog/8-260x190.jpg" alt="Aestibulum ipsum a ornare car">
																						 </a>
																					</div>
																					<div class="content-detail col-sm-6 col-xs-12">
																						 <div class="media-content so-block">
																								<div class="entry-date font-ct date-bottom">
																									 <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
																								</div>
																								<h4 class="media-heading head-item">
																									 <a href="product.html" title="Aestibulum ipsum a ornare car" target="_self">Aestibulum ipsum a ornare car</a>
																								</h4>
																								<div class="description">
																									 Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
																								</div>
																								<div class="readmore">
																									 <a href="product.html" target="_self">Read more</a>
																								</div>
																						 </div>
																					</div>
																			 </div>
																		</div>
																		<div class="media">
																			 <div class="item head-button">
																					<div class="content-img col-sm-6 col-xs-12">
																						 <a href="product.html" target="_self">
																						 <img src="image/catalog/demo/blog/9-260x190.jpg" alt="Aestibulum ipsum a ornare lectus">
																						 </a>
																					</div>
																					<div class="content-detail col-sm-6 col-xs-12">
																						 <div class="media-content so-block">
																								<div class="entry-date font-ct date-bottom">
																									 <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
																								</div>
																								<h4 class="media-heading head-item">
																									 <a href="product.html" title="Aestibulum ipsum a ornare lectus" target="_self">Aestibulum ipsum a ornare lectus</a>
																								</h4>
																								<div class="description">
																									 Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
																								</div>
																								<div class="readmore">
																									 <a href="product.html" target="_self">Read more</a>
																								</div>
																						 </div>
																					</div>
																			 </div>
																		</div>
									<div class="media">
																			 <div class="item head-button">
																					<div class="content-img col-sm-6 col-xs-12">
																						 <a href="product.html" target="_self">
																						 <img src="image/catalog/demo/blog/5-260x190.jpg" alt="Baby Came Back! Missed Out? Grab Your">
																						 </a>
																					</div>
																					<div class="content-detail col-sm-6 col-xs-12">
																						 <div class="media-content so-block">
																								<div class="entry-date font-ct date-bottom">
																									 <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
																								</div>
																								<h4 class="media-heading head-item">
																									 <a href="product.html" title="Baby Came Back! Missed Out? Grab Your" target="_self">Baby Came Back! Missed Out? Grab Your</a>
																								</h4>
																								<div class="description">
																									 Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
																								</div>
																								<div class="readmore">
																									 <a href="product.html" target="_self">Read more</a>
																								</div>
																						 </div>
																					</div>
																			 </div>
																		</div>
									<div class="media">
																			 <div class="item head-button">
																					<div class="content-img col-sm-6 col-xs-12">
																						 <a href="product.html" target="_self">
																						 <img src="image/catalog/demo/blog/2-260x190.jpg" alt="Biten demonstraverunt lector ">
																						 </a>
																					</div>
																					<div class="content-detail col-sm-6 col-xs-12">
																						 <div class="media-content so-block">
																								<div class="entry-date font-ct date-bottom">
																									 <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
																								</div>
																								<h4 class="media-heading head-item">
																									 <a href="product.html" title="Biten demonstraverunt lector " target="_self">Biten demonstraverunt lector </a>
																								</h4>
																								<div class="description">
																									 Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi v..
																								</div>
																								<div class="readmore">
																									 <a href="product.html" target="_self">Read more</a>
																								</div>
																						 </div>
																					</div>
																			 </div>
																		</div>
									<div class="media">
																			 <div class="item head-button">
																					<div class="content-img col-sm-6 col-xs-12">
																						 <a href="product.html" target="_self">
																						 <img src="image/catalog/demo/blog/7-260x190.jpg" alt="Commodo laoreet semper">
																						 </a>
																					</div>
																					<div class="content-detail col-sm-6 col-xs-12">
																						 <div class="media-content so-block">
																								<div class="entry-date font-ct date-bottom">
																									 <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
																								</div>
																								<h4 class="media-heading head-item">
																									 <a href="product.html" title="Commodo laoreet semper" target="_self">Commodo laoreet semper</a>
																								</h4>
																								<div class="description">
													Commodo laoreet semper tincidunt lorem Vestibulum nunc at In Curabitur magna. Euismod euismod Suspendisse tortor ante ad..
																								</div>
																								<div class="readmore">
																									 <a href="product.html" target="_self">Read more</a>
																								</div>
																						 </div>
																					</div>
																			 </div>
																		</div>
									<div class="media">
																			 <div class="item head-button">
																					<div class="content-img col-sm-6 col-xs-12">
																						 <a href="product.html" target="_self">
																						 <img src="image/catalog/demo/blog/3-260x190.jpg" alt="Neque porro quisquam est">
																						 </a>
																					</div>
																					<div class="content-detail col-sm-6 col-xs-12">
																						 <div class="media-content so-block">
																								<div class="entry-date font-ct date-bottom">
																									 <span class="media-date-added"><i class="fa fa-clock-o"></i> 17 Oct 2017</span>
																								</div>
																								<h4 class="media-heading head-item">
																									 <a href="product.html" title="Neque porro quisquam est" target="_self">Neque porro quisquam est</a>
																								</h4>
																								<div class="description">
																									 Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius ..
																								</div>
																								<div class="readmore">
																									 <a href="product.html" target="_self">Read more</a>
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
										 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_swee  block block_12">
												<div id="content_slider_mfn4" class="yt-content-slider owl2-theme yt-content-slider-style-default arrow-default top-brand owl2-carousel owl2-responsive-1200 owl2-loaded yt-testimonials-slider" data-transitionin="fadeIn" data-transitionout="fadeOut" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="6" data-items_column0="6" data-items_column1="5" data-items_column2="4" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-pagination="no" data-lazyload="no" data-loop="yes" data-hoverpause="yes">
													 <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-1.jpg" alt="title_dsdfg">
													 </div>
													 <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-2.jpg" alt="title_dsdfg">
													 </div>
													 <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-3.jpg" alt="title_dsdfg">
													 </div>
													 <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-4.jpg" alt="title_dsdfg">
													 </div>
													 <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-5.jpg" alt="title_dsdfg">
													 </div>
													 <div class="yt-content-slide yt-clearfix yt-content-wrap"> <img src="image/catalog/demo/brand/brand-6.jpg" alt="title_dsdfg">
													 </div>
												</div>
										 </div>
									</div>
							 </div>
						</div>
			
				 </div>
				 <!-- //Main Container -->
				 <!-- Footer Container -->
				 <footer class="footer-container typefooter-1">
						<div class="footer-has-toggle" id="collapse-footer">
							 <div class="so-page-builder">
									<div class="container-fluid page-builder-ltr">
										 <div class="row row_sh6r  footer--top  row-color ">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_971a  float_none container">
													 <div class="row row_dmol  ">
															<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col_hcbx block--newletter">
																 <div class="module news-letter">
																		<div class="so-custom-default newsletter" style="width:100%     ; background-color: #f0f0f0 ; ">
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
															<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col_h1e7 block--social">
																 <div class="footer-social">
																		<h3 class="block-title">Follow us</h3>
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
																		</div>
																 </div>
															</div>
													 </div>
												</div>
										 </div>
									</div>
									<div class="container-fluid page-builder-ltr">
										 <div class="row row_z1do  footer--center  row-color ">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_x6fe  float_none container">
													 <div class="row row_wprs  ">
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_yb5e footer--link">
																 <h3 class="title-footer">
																		spa & massage
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Makeup</a>
																		</li>
																		<li>
																			 <a href="#"> Skin Care</a>
																		</li>
																		<li>
																			 <a href="#"> Hair Care</a>
																		</li>
																		<li>
																			 <a href="#"> Tools & Accessories</a>
																		</li>
																		<li>
																			 <a href="#"> Perfume & Cologne</a>
																		</li>
																		<li>
																			 <a href="#"> More to Explore</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_1tke footer--link">
																 <h3 class="title-footer">
																		fashion & accessories
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Clothing</a>
																		</li>
																		<li>
																			 <a href="#"> Shoes</a>
																		</li>
																		<li>
																			 <a href="#"> Jewelry</a>
																		</li>
																		<li>
																			 <a href="#"> Watches</a>
																		</li>
																		<li>
																			 <a href="#"> Handbags & Walletss</a>
																		</li>
																		<li>
																			 <a href="#"> Accessories</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_ldmi footer--link">
																 <h3 class="title-footer">
																		travel & vacation
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Top 10 Hotels</a>
																		</li>
																		<li>
																			 <a href="#"> Travel Tour</a>
																		</li>
																		<li>
																			 <a href="#"> Bundle Deal</a>
																		</li>
																		<li>
																			 <a href="#"> Top Fights</a>
																		</li>
																		<li>
																			 <a href="#"> Vacation Retals</a>
																		</li>
																		<li>
																			 <a href="#"> Cruise</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_uoai footer--link">
																 <h3 class="title-footer">
																		electronics
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Home Audio & Theater</a>
																		</li>
																		<li>
																			 <a href="#"> Camera</a>
																		</li>
																		<li>
																			 <a href="#"> Photo & Video</a>
																		</li>
																		<li>
																			 <a href="#"> Cell Phones</a>
																		</li>
																		<li>
																			 <a href="#"> Headphones</a>
																		</li>
																		<li>
																			 <a href="#"> Video Games</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_77lh footer--link">
																 <h3 class="title-footer">
																		sport & Entertaiment
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Yoga & Fitness</a>
																		</li>
																		<li>
																			 <a href="#"> Games</a>
																		</li>
																		<li>
																			 <a href="#"> Cinema</a>
																		</li>
																		<li>
																			 <a href="#"> Studio</a>
																		</li>
																		<li>
																			 <a href="#"> Music</a>
																		</li>
																		<li>
																			 <a href="#"> Shopping</a>
																		</li>
																 </ul>
															</div>
													 </div>
												</div>
										 </div>
									</div>
									<div class="container-fluid page-builder-ltr">
										 <div class="row row_mvtd  footer--center2  row-color ">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6fdl  float_none container">
													 <div class="row row_hwmc  ">
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_6ps1 footer--link">
																 <h3 class="title-footer">
																		food & restaurant
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Fast Food</a>
																		</li>
																		<li>
																			 <a href="#"> Buffet</a>
																		</li>
																		<li>
																			 <a href="#"> Café</a>
																		</li>
																		<li>
																			 <a href="#"> Drink</a>
																		</li>
																		<li>
																			 <a href="#"> Cake</a>
																		</li>
																		<li>
																			 <a href="#"> Restaurant</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_qprt footer--link">
																 <h3 class="title-footer">
																		health & beauty
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Makeup</a>
																		</li>
																		<li>
																			 <a href="#"> Skin Care</a>
																		</li>
																		<li>
																			 <a href="#"> Hair Care</a>
																		</li>
																		<li>
																			 <a href="#"> Tools & Accessories</a>
																		</li>
																		<li>
																			 <a href="#"> Perfume & Cologne</a>
																		</li>
																		<li>
																			 <a href="#"> More to Explore</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_jzhl footer--link">
																 <h3 class="title-footer">
																		Book Stationery
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Award Winners</a>
																		</li>
																		<li>
																			 <a href="#"> Bargain Books</a>
																		</li>
																		<li>
																			 <a href="#"> Best Books of 2016</a>
																		</li>
																		<li>
																			 <a href="#"> Best Books of the Month</a>
																		</li>
																		<li>
																			 <a href="#"> Books in Spanish</a>
																		</li>
																		<li>
																			 <a href="#"> Children Books</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_kefr footer--link">
																 <h3 class="title-footer">
																		Real house
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Makeup</a>
																		</li>
																		<li>
																			 <a href="#"> Skin Care</a>
																		</li>
																		<li>
																			 <a href="#"> Hair Care</a>
																		</li>
																		<li>
																			 <a href="#"> Tools & Accessories</a>
																		</li>
																		<li>
																			 <a href="#"> Perfume & Cologne</a>
																		</li>
																		<li>
																			 <a href="#"> More to Explore</a>
																		</li>
																 </ul>
															</div>
															<div class="col-lg-15 col-md-15 col-sm-4 col-xs-6 col_mtmx footer--link">
																 <h3 class="title-footer">
																		Mom & baby care
																 </h3>
																 <ul class="links">
																		<li>
																			 <a href="#">Award Winners</a>
																		</li>
																		<li>
																			 <a href="#"> Bargain Books</a>
																		</li>
																		<li>
																			 <a href="#"> Best Books of 2016</a>
																		</li>
																		<li>
																			 <a href="#"> Best Books of the Month</a>
																		</li>
																		<li>
																			 <a href="#"> Books in Spanish</a>
																		</li>
																		<li>
																			 <a href="#"> Children Books</a>
																		</li>
																 </ul>
															</div>
													 </div>
												</div>
										 </div>
									</div>
									<div class="container-fluid page-builder-ltr">
										 <div class="row row_qof8  footer--center3  row-color ">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_up4v  float_none ">
													 <div class="row row_fymn  ">
															<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_1yf0">
																 <div class="contactinfo">
																		<h4 class="title-footer">Our Contact</h4>
																		<p>They key is to have every key, the key to open every door. We will never see them</p>
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
																					<a href="#">Contact@TopDeals.Com</a>
																			 </div>
																		</div>
																 </div>
																 <div class="payment-html">
																		<div>
																			 <a class="app-1" href="#">google store</a>
																			 <a class="app-2" href="#">apple store</a>
																			 <a class="app-3" href="#">window store</a>
																		</div>
																 </div>
															</div>
													 </div>
												</div>
										 </div>
									</div>
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
												<img src="image/catalog/demo/payment/payments-1.png" alt="imgpayment">
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
			<script type="text/javascript" src="js/themejs/custom_h1.js"></script>
			<script type="text/javascript" src="js/themejs/addtocart.js"></script>  
			<script type="text/javascript" src="js/themejs/nouislider.js"></script>
	 </body>
</html>
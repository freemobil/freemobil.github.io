<!-- Begin Color Scheme
============================================ -->
<?php 
require_once ('scssphp/scss.inc.php');
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
 $themeCssName='';  
 $ColorScheme = '#dd3c7f';
 $themeColor = strtolower($ColorScheme);
				
$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
$scss->addImportPath('sass');
$scss->setVariables(array(
		'$linkColor' => $themeColor,
		'$dir' => 'ltr',
));

$string_css     = $scss->compile('@import "home3.scss"');
$header3_css    = $scss->compile('@import "header/header3.scss"');
$footer3_css    = $scss->compile('@import "footer/footer3.scss"');
$responsive_css     = $scss->compile('@import "responsive.scss"');

file_put_contents('css/home3.css', $string_css);
file_put_contents('css/header/header3.css', $header3_css);
file_put_contents('css/footer/footer3.css', $footer3_css);
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
		<link href="css/footer/footer3.css" rel="stylesheet">
		<link href="css/header/header3.css" rel="stylesheet">
		<link id="color_scheme" href="css/home3.css" rel="stylesheet">
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

<body class="common-home ltr layout-3">
	<div id="wrapper" class="wrapper-full banners-effect-10">
		<!-- Header Container  -->
		<header id="header" class=" typeheader-3">
			<!-- Header Top -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 col-md-9 col-lg-6">
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
												<div class="megamenu-pattern" style="width: 650px">
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
																<div class="sub-menu" style="width: 400px">
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
																<a class="clearfix">
																<strong>
																Features
																</strong>
																<span class="labelopencart"></span>
																<b class="caret"></b>
																</a>
																<div class="sub-menu" style="width: 120%;">
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
															<li class="deal-h5 hidden">
																<p class='close-menu'></p>
																<a href="#" class="clearfix">
																<strong>
																<img src="image/catalog/demo/menu/hot-block.png" alt="">Buy This Theme!
																</strong>
																</a>
															</li>
															<li class="deal-h5 hidden">
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
						<div class="text-text col-lg-4 hidden-md-down">
							<div class="hidden-xs">
								<div class="text-html">
									<p>
										Get an extra 10% off on select hotels with Member Pricing. Join now!
									</p>
								</div>
							</div>
						</div>
						<div class="nav-layout-3 col-lg-2 col-md-3 col-xs-8">
							<!-- LANGUAGE CURENTY -->
							<div class="link language">
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
										<input type="hidden" name="redirect" value="">
									</form>
								</div>
							</div>
							<div class="link currency">
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
										<input type="hidden" name="redirect" value="#">
									</form>
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
						<div class="header-logo col-lg-2 col-md-2 col-sm-3 col-xs-12">
							<a href="home3.html"><img src="image/catalog/demo/logo/logo-3.png" title="Your Store - Layout 3" alt="Your Store - Layout 3"></a>
						</div>
						<div class="header-search col-lg-6 col-md-6 col-sm-5 col-xs-7">
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
						<div class="header-cart col-lg-2 col-md-2 col-sm-1  col-xs-1">
							<div class="shopping_cart">
								<div id="cart" class="btn-shopping-cart">
									<a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
										<div class="shopcart">
											<span class="handle pull-left"></span>
											<div class="cart-info">
												<h2 class="title-cart">Shopping cart</h2>
												<h2 class="title-cart2 hidden">My Cart</h2>
												<span class="total-shopping-cart cart-total-full">
												<span class="items_cart">0 </span><span class="items_cart2">item(s)</span><span class="items_carts"> - $0.00</span> 
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
						<div class="user-info-layout-3 col-lg-2 col-md-2 col-sm-3 col-xs-4">
							<div class="userinfo-block">
								<div class="user-info">
									<a class="link-lg" href="register.html">Register </a> /
									<a class="link-lg" href="login.html">Login </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header center -->
			<!-- Header bottom-->
			
		</header>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<div id="content">
			<div class="so-page-builder">
				<section id="section_1_h3">
					<div class="container page-builder-ltr">
						<div class="row row-style row_lkda">
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col_iksd menu_vertical">
								<div class="row row-style row-lkdn">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_kkwm col-style megamenu-style-dev">
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
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-6.png" alt="">Hot Deal</strong>
																			</span>
																			</a>
																		</li>
																		<li class="item-vertical  vertical-style2 with-sub-menu hover">
																			<p class='close-menu'></p>
																			<a class="clearfix">
																			<span>
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-1.png" alt="">Electronics</strong>
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
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-2.png" alt="">Travel &amp; Vacation</strong>
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
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-3.png" alt="">Book Stationery</strong>
																			</span>
																			</a>
																		</li>
																		<li class="item-vertical   item-style3 with-sub-menu hover">
																			<p class='close-menu'></p>
																			<a class="clearfix">
																			<span>
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-4.png" alt="">Fashion</strong>
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
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-5.png" alt="">Sport &amp; Entertaiment</strong>
																			</span>
																			</a>
																		</li>
																		<li class="item-vertical  css-menu with-sub-menu hover">
																			<p class='close-menu'></p>
																			<a href="#" class="clearfix">
																			<span>
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-8.png" alt="">Spa &amp; Massage</strong>
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
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-9.png" alt="">Real House</strong>
																			</span>
																			</a>
																		</li>
																		<li class="item-vertical ">
																			<p class='close-menu'></p>
																			<a href="#" class="clearfix">
																			<span>
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-6.png" alt="">Mom &amp; Baby</strong>
																			</span>
																			</a>
																		</li>
																		<li class="item-vertical ">
																			<p class='close-menu'></p>
																			<a href="#" class="clearfix">
																			<span>
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-7.png" alt="">Food &amp; Restaurant</strong>
																			</span>
																			</a>
																		</li>
																		<li class="item-vertical ">
																			<p class='close-menu'></p>
																			<a href="#" class="clearfix">
																			<span>
																			<strong><i class="icon"></i><img src="image/catalog/demo/menu/icon/icon-9.png" alt="">Jewelry &amp; Watches</strong>
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
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_k32j">
										<div class="trending-search">
											<h3 class="title_block">
											Trending Search
											</h3>
											<a href="#">Letv</a>
											<a href="#">Formal Shoes</a>
											<a href="#">Vivo Mobiles</a>
											<a href="#">Reebook</a>
											<a href="#">Micromax</a>
											<a href="#">Travel Vacation</a>
											<a href="#">Hotel</a>
											<a href="#">Restaurant</a>
											</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_iuhd block">
										<div class="module so-extraslider-ltr home3_extra bn-shadow">
											<h3 class="modtitle">Special Items</h3>
											<div class="modcontent">
												<div id="so_extra_slider_450" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
													<div class="box-banner">
														<div class="banners">
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
																				href="product.html" target="_blank"
																				title="Pariatur beef desktop publishing package..">
																			<img src="image/catalog/demo/product/fashion/5-60x60.png" alt="Pariatur beef desktop publishing packages monst">
																			</a>
																		</div>
																		<div class="box-label">
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4 class="font-ct">
																				<a href="product.html" target="_blank" title="Pariatur beef desktop publishing packages monst "  >
																				Pariatur beef desktop publishing package.. 
																				</a>
																			</h4>
																			<div  class="content_price price font-ct">
																				<span class="old-price product-price">$45.00 </span>&nbsp;&nbsp;
																				<span class="price-old">$50.00 </span>&nbsp;
																			</div>
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
																				href="product.html" target="_blank"
																				title="Est Officia Including Shoes Beautiful Pi..">
																			<img src="image/catalog/demo/product/fashion/15-60x60.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
																			</a>
																		</div>
																		<div class="box-label">
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4 class="font-ct">
																				<a href="product.html" target="_blank" title="Est Officia Including Shoes Beautiful Pieces Canaz "  >
																				Est Officia Including Shoes Beautiful Pi.. 
																				</a>
																			</h4>
																			<div  class="content_price price font-ct">
																				<span class="old-price product-price">$50.00 </span>&nbsp;&nbsp;
																				<span class="price-old">$279.99 </span>&nbsp;
																			</div>
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
																				href="product.html" target="_blank"
																				title="Maciti Aliqua occur that pleasures have ..">
																			<img src="image/catalog/demo/product/fashion/21-60x60.png" alt="Maciti Aliqua occur that pleasures have a lotem">
																			</a>
																		</div>
																		<div class="box-label">
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4 class="font-ct">
																				<a href="product.html" target="_blank" title="Maciti Aliqua occur that pleasures have a lotem "  >
																				Maciti Aliqua occur that pleasures have .. 
																				</a>
																			</h4>
																			<div  class="content_price price font-ct">
																				<span class="old-price product-price">$60.00 </span>&nbsp;&nbsp;
																				<span class="price-old">$100.00 </span>&nbsp;
																			</div>
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
																				href="product.html" target="_blank"
																				title="Est Officia Including Shoes Beautiful Pi..">
																			<img src="image/catalog/demo/product/fashion/24-60x60.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
																			</a>
																		</div>
																		<div class="box-label">
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4 class="font-ct">
																				<a href="product.html" target="_blank" title="Est Officia Including Shoes Beautiful Pieces Canaz "  >
																				Est Officia Including Shoes Beautiful Pi.. 
																				</a>
																			</h4>
																			<div  class="content_price price font-ct">
																				<span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
																				<span class="price-old">$100.00 </span>&nbsp;
																			</div>
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
																				href="product.html" target="_blank"
																				title="Ligula tortoram ut labore et dolore magn..">
																			<img src="image/catalog/demo/product/fashion/14-60x60.png" alt="Ligula tortoram ut labore et dolore magna elip">
																			</a>
																		</div>
																		<div class="box-label">
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4 class="font-ct">
																				<a href="product.html" target="_blank" title="Ligula tortoram ut labore et dolore magna elip "  >
																				Ligula tortoram ut labore et dolore magn.. 
																				</a>
																			</h4>
																			<div  class="content_price price font-ct">
																				<span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
																				<span class="price-old">$100.00 </span>&nbsp;
																			</div>
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
																				href="product.html" target="_blank"
																				title="Amazing Yoga Sport Poses Most  People Wo..">
																			<img src="image/catalog/demo/product/fashion/10-60x60.jpg" alt="Amazing Yoga Sport Poses Most  People Wouldn't Dream ">
																			</a>
																		</div>
																		<div class="box-label">
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4 class="font-ct">
																				<a href="product.html" target="_blank" title="Amazing Yoga Sport Poses Most  People Wouldn't Dream  "  >
																				Amazing Yoga Sport Poses Most  People Wo.. 
																				</a>
																			</h4>
																			<div  class="content_price price font-ct">
																				<span class="old-price product-price">$89.00 </span>&nbsp;&nbsp;
																				<span class="price-old">$100.00 </span>&nbsp;
																			</div>
																		</div>
																	</div>
																</div>
																<!-- End item-wrap-inner -->
															</div>
															<!-- End item-wrap -->
														</div>
													</div>
													<!--End extraslider-inner -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_lbre block hidden-xs">
										<div class="banner-layout-3 bt-1 clearfix banners">
											<div class="">
												<a class="bn-shadow" href="#" title="Banner 1">     
													<img src="image/catalog/demo/banners/home3/01.jpg" alt="Static Image">
												</a> 
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_d2sm block">
										<div class="module so-extraslider-ltr home3_extra_style2 bn-shadow">
											<h3 class="modtitle">Recommend Items</h3>
											<div class="modcontent">
												<div id="so_extra_slider_305" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-2 preset04-1 button-type1">
													<div class="box-banner">
														<div class="banners">
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
																			<img src="image/catalog/demo/product/electronic/25-210x210.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
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
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('104');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('104');"><i class="fa fa-exchange"></i></button>
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
																			<img src="image/catalog/demo/product/electronic/19-210x210.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
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
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('66');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('66');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('66');"><i class="fa fa-exchange"></i></button>
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
																				title="Portable  Compact Charger (External Battery) t45">
																			<img src="image/catalog/demo/product/electronic/4-210x210.jpg" alt="Portable  Compact Charger (External Battery) t45">
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
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('78');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('78');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('78');"><i class="fa fa-exchange"></i></button>
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
																				title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
																			<img src="image/catalog/demo/product/electronic/1-210x210.png" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
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
															<div class="item-wrap product-layout style1 ">
																<div class="product-item-container">
																	<div class="left-block ">
																		<div class="product-image-container so-quickview">
																			<a class="lt-image" 
																				href="product.html" target="_self"
																				title="Charger  Compact Portable with Premium">
																			<img src="image/catalog/demo/product/electronic/11-210x210.jpg" alt="Charger  Compact Portable with Premium">
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
																			<img src="image/catalog/demo/product/electronic/13-210x210.jpg" alt="Compact Portable Charger (External Battery)">
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
													</div>
													<!--End extraslider-inner -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_dmsm block">
										<div class="block-testimonial bn-shadow">
											<div class="testimonial-items contentslider" data-rtl="no" data-loop="no" data-autoplay="yes" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-hoverpause="yes">
												<div class="item">
													<div class="text">
														<div class="t">Lorem Khaled Ipsum is a major key to success. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Always remember in the jungle there’s a lot of they in there</div>
													</div>
													<div class="img"><img src="image/catalog/demo/banners/home3/user-2.jpg" alt="Static Image"></div>
													<div class="name">Sharon Stone</div>
													<div class="job">Acc - Hollywood</div>
												</div>
												<div class="item">
													<div class="text">
														<div class="t">
															Khaled Lorem  Ipsum is a major key to success. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Always remember in the jungle there’s a lot of they in there
														</div>
													</div>
													<div class="img"><img src="image/catalog/demo/banners/home3/user-1.jpg" alt="Static Image"></div>
													<div class="name">David Beckham</div>
													<div class="job">CE0 - Magentech</div>
												</div>
												<div class="item">
													<div class="text">
														<div class="t">
															Lorem Khaled Ipsum is a major key to success. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. Always remember in the jungle there’s a lot of they in there
														</div>
													</div>
													<div class="img"><img src="image/catalog/demo/banners/home3/user-3.jpg" alt="Static Image"></div>
													<div class="name">Johny Walker</div>
													<div class="job">Manager - United</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col_8sje slider_container">
								<div class="row row_mwsi row-style">
									<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col_5q4o slider-layout-3">
										<div class="module sohomepage-slider so-homeslider-ltr">
											<div class="modcontent">
												<div id="sohomepage-slider1">
													<div class="so-homeslider yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="yes" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
														<div class="item">
														 <a href=" #   " title="slide 1 - 1" target="_self">
														 <img class="responsive" src="image/catalog/demo/slider/home3/sample-7.jpg" alt="slide 1 - 1">
														 </a>
														 <div class="sohomeslider-description">
														 </div>
													</div>
													<div class="item">
														 <a href=" #   " title="slide 1 - 2" target="_self">
														 <img class="responsive" src="image/catalog/demo/slider/home3/sample-8.jpg" alt="slide 1 - 2">
														 </a>
														 <div class="sohomeslider-description">
														 </div>
													</div>
													<div class="item">
														 <a href=" #   " title="slide 1 - 3" target="_self">
														 <img class="responsive" src="image/catalog/demo/slider/home3/sample-9.jpg" alt="slide 1 - 3">
														 </a>
														 <div class="sohomeslider-description">
														 </div>
														</div>
												 </div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col_8jd3 deal-layout-3 hidden-sm hidden-md hidden-xs">
										<div class="module so-deals-ltr home3_deal">
											<div class="modcontent">
												<div id="so_deals_938" class="so-deal modcontent products-list grid clearfix preset00-1 preset01-1 preset02-1 preset03-1 preset04-1  button-type1  style2">
													<div class="extraslider-inner" data-effect="none">
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block so-quickview">
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																		<div class="product-image-container">
																			<a href="product.html" target="_self">
																			<img src="image/catalog/demo/product/electronic/1.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" class="img-responsive">
																			</a>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="item-time">
																				<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
																				<div class="item-timer product_time_30"></div>
																			</div>
																			<h4><a href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block so-quickview">
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																		<div class="product-image-container">
																			<a href="product.html" target="_self">
																			<img src="image/catalog/demo/product/electronic/11.jpg" alt="Charger  Compact Portable with Premium" class="img-responsive">
																			</a>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="item-time">
																				<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
																				<div class="item-timer product_time_51"></div>
																			</div>
																			<h4><a href="product.html" target="_self" title="Charger  Compact Portable with Premium">Charger  Compact Portable with Premium</a></h4>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('51');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('51');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block so-quickview">
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																		<div class="product-image-container">
																			<a href="product.html" target="_self">
																			<img src="image/catalog/demo/product/electronic/26.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" class="img-responsive">
																			</a>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="item-time">
																				<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
																				<div class="item-timer product_time_105"></div>
																			</div>
																			<h4><a href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">Lorem Ipsum dolor at vero eos et iusto odi  with Premium</a></h4>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('105');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('105');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('105');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block so-quickview">
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																		<div class="product-image-container">
																			<a href="product.html" target="_self">
																			<img src="image/catalog/demo/product/electronic/6.jpg" alt="Mammo Diablo except to obtain some advan from" class="img-responsive">
																			</a>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="item-time">
																				<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
																				<div class="item-timer product_time_110"></div>
																			</div>
																			<h4><a href="product.html" target="_self" title="Mammo Diablo except to obtain some advan from">Mammo Diablo except to obtain some advan from</a></h4>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('110');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('110');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('110');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block so-quickview">
																		<div class="box-label">
																			<span class="label-product label-sale">-11%</span>
																		</div>
																		<div class="product-image-container">
																			<a href="product.html" target="_self">
																			<img src="image/catalog/demo/product/electronic/29.jpg" alt="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)" class="img-responsive">
																			</a>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="item-time">
																				<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
																				<div class="item-timer product_time_86"></div>
																			</div>
																			<h4><a href="product.html" target="_self" title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">Seneo PA046 Fast Charger  Wireless Sleep-Friendly)</a></h4>
																			<div class="price">
																				<span class="price-new">$89.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('86');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('86');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('86');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block so-quickview">
																		<div class="box-label">
																			<span class="label-product label-sale">-70%</span>
																		</div>
																		<div class="product-image-container">
																			<a href="product.html" target="_self">
																			<img src="image/catalog/demo/product/electronic/19.jpg" alt="Compact Portable Charger (Power Bank) with Premium" class="img-responsive">
																			</a>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<div class="item-time">
																				<span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
																				<div class="item-timer product_time_66"></div>
																			</div>
																			<h4><a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium">Compact Portable Charger (Power Bank) with Premium</a></h4>
																			<div class="price">
																				<span class="price-new">$60.00</span>
																				<span class="price-old">$199.99</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('66');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('66');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('66');"><i class="fa fa-exchange"></i></button>
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
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_stzj block">
										<div class="cate-html">
											<ul class="cate-html-item contentslider" data-rtl="no" data-loop="no" data-autoplay="yes" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="27" data-items_column0="5" data-items_column1="3" data-items_column2="3" data-items_column3="3" data-items_column4="2" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
												<li class="item">
													<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home3/cate-1.jpg" alt="Static Image"></a></div>
													<div class="item-content">
													<h4><a href="#">Food & Restaurant</a></h4>
													</div>
												</li>
												<li class="item">
													<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home3/cate-2.jpg" alt="Static Image"></a></div>
													<div class="item-content">
													<h4><a href="#">SPA & Massage</a></h4>
													</div>
												</li>
												<li class="item">
													<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home3/cate-3.jpg" alt="Static Image"></a></div>
													<div class="item-content">
													<h4><a href="#">Health Care</a></h4>
													</div>
												</li>
												<li class="item">
													<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home3/cate-4.jpg" alt="Static Image"></a></div>
													<div class="item-content">
													<h4><a href="#">Fashion</a></h4>
													</div>
												</li>
												<li class="item">
													<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home3/cate-5.jpg" alt="Static Image"></a></div>
													<div class="item-content">
													<h4><a href="#">Health Care</a></h4>
													</div>
												</li>
												<li class="item">
													<div class="item-image"><a title="Static Image" href="#"><img src="image/catalog/demo/banners/home3/cate-6.jpg" alt="Static Image"></a></div>
													<div class="item-content">
													<h4><a href="#">Travel</a></h4>
													</div>
												</li>
												
											</ul>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6iia block">
										<div class="module so-deals-ltr home3_deal_style2">
											<div class="head-title">
												<h2 class="modtitle font-ct"><span>Hot Deal</span></h2>
												<div class="cslider-item-timer">
													<div class="product_time_maxprice"></div>
												</div>
											</div>
											<div class="modcontent products-list grid">
												<div id="so_deals_986" class="so-deal modcontent products-list grid clearfix preset00-4 preset01-4 preset02-3 preset03-2 preset04-1  button-type1  style2">
													<div class="extraslider-inner" data-effect="none">
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block ">
																		<div class="product-image-container">
																			<div class="image so-quickview">
																				<a class="lt-image hidden" 
																					href="product.html" target="_self"
																					title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
																				</a>
																				<a class="lt-image" href="product.html" target="_self">
																				<img src="image/catalog/demo/product/electronic/1-226x226.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus" class="img-responsive">
																				</a>
																			</div>
																		</div>
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4><a href="product.html" target="_self" title=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus"> Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus</a></h4>
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('30');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block ">
																		<div class="product-image-container">
																			<div class="image so-quickview">
																				<a class="lt-image hidden" 
																					href="product.html" target="_self"
																					title="Charger  Compact Portable with Premium">
																				</a>
																				<a class="lt-image" href="product.html" target="_self">
																				<img src="image/catalog/demo/product/electronic/11-226x226.jpg" alt="Charger  Compact Portable with Premium" class="img-responsive">
																				</a>
																			</div>
																		</div>
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4><a href="product.html" target="_self" title="Charger  Compact Portable with Premium">Charger  Compact Portable with Premium</a></h4>
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('51');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('51');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block ">
																		<div class="product-image-container">
																			<div class="image so-quickview">
																				<a class="lt-image hidden" 
																					href="product.html" target="_self"
																					title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
																				</a>
																				<a class="lt-image" href="product.html" target="_self">
																				<img src="image/catalog/demo/product/electronic/26-226x226.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" class="img-responsive">
																				</a>
																			</div>
																		</div>
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4><a href="product.html" target="_self" title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">Lorem Ipsum dolor at vero eos et iusto odi  with Premium</a></h4>
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('105');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('105');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('105');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block ">
																		<div class="product-image-container">
																			<div class="image so-quickview">
																				<a class="lt-image hidden" 
																					href="product.html" target="_self"
																					title="Mammo Diablo except to obtain some advan from">
																				</a>
																				<a class="lt-image" href="product.html" target="_self">
																				<img src="image/catalog/demo/product/electronic/6-226x226.jpg" alt="Mammo Diablo except to obtain some advan from" class="img-responsive">
																				</a>
																			</div>
																		</div>
																		<div class="box-label">
																			<span class="label-product label-sale">-20%</span>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4><a href="product.html" target="_self" title="Mammo Diablo except to obtain some advan from">Mammo Diablo except to obtain some advan from</a></h4>
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>
																			<div class="price">
																				<span class="price-new">$80.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('110');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('110');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('110');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block ">
																		<div class="product-image-container">
																			<div class="image so-quickview">
																				<a class="lt-image hidden" 
																					href="product.html" target="_self"
																					title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">
																				</a>
																				<a class="lt-image" href="product.html" target="_self">
																				<img src="image/catalog/demo/product/electronic/29-226x226.jpg" alt="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)" class="img-responsive">
																				</a>
																			</div>
																		</div>
																		<div class="box-label">
																			<span class="label-product label-sale">-11%</span>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4><a href="product.html" target="_self" title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">Seneo PA046 Fast Charger  Wireless Sleep-Friendly)</a></h4>
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>
																			<div class="price">
																				<span class="price-new">$89.00</span>
																				<span class="price-old">$100.00</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('86');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('86');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('86');"><i class="fa fa-exchange"></i></button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="item">
															<div class="transition product-layout">
																<div class="product-item-container ">
																	<div class="left-block ">
																		<div class="product-image-container">
																			<div class="image so-quickview">
																				<a class="lt-image hidden" 
																					href="product.html" target="_self"
																					title="Compact Portable Charger (Power Bank) with Premium">
																				</a>
																				<a class="lt-image" href="product.html" target="_self">
																				<img src="image/catalog/demo/product/electronic/19-226x226.jpg" alt="Compact Portable Charger (Power Bank) with Premium" class="img-responsive">
																				</a>
																			</div>
																		</div>
																		<div class="box-label">
																			<span class="label-product label-sale">-70%</span>
																		</div>
																	</div>
																	<div class="right-block">
																		<div class="caption">
																			<h4><a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium">Compact Portable Charger (Power Bank) with Premium</a></h4>
																			<div class="rating">
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																				<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																			</div>
																			<div class="price">
																				<span class="price-new">$60.00</span>
																				<span class="price-old">$199.99</span>
																			</div>
																		</div>
																		<div class="button-group2">
																			<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('66');"> <span>Add to Cart</span></button>
																			<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('66');"><i class="fa fa-heart"></i></button>
																			<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('66');"><i class="fa fa-exchange"></i></button>
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
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_kjmz block">
										<div class="banner-21 banner">
											<div>
												<a class="bn-shadow" href="#" title="Banner 24">      
												<img src="image/catalog/demo/banners/home3/banner21.jpg" alt="Static Image">
												</a> 
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_lkwe block">
										<div class="module so-listing-tabs-ltr home3_listingtab">
											<div class="head-title">
												<h3 class="modtitle">Fashion &amp; Accessories</h3>
											</div>
											<div class="modcontent">
												<div id="so_listing_tabs_342" class="so-listing-tabs first-load module">
													<div class="ltabs-wrap products-list grid">
														<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="2" data-md="2" data-sm="1" data-xs="2" data-margin="0">
															<!--Begin Tabs-->
															<div class="ltabs-tabs-wrap">
																		 <span class="ltabs-tab-selected"></span>
																		 <span class="ltabs-tab-arrow">▼</span>
																		 <div class="item-sub-cat">
																				<ul class="ltabs-tabs cf">
																					 <li class="ltabs-tab tab-sel" data-category-id="30" data-active-content=".items-category-30"><div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/116.jpg"
																								title="Bags" alt="Bags"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Bags
																						</span></li>
																					 <li class="ltabs-tab" data-category-id="31" data-active-content=".items-category-31"><div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/23.jpg"
																								title="Dress Ladies" alt="Dress Ladies"
																								style="background:#fff"/>
																						</div><span class="ltabs-tab-label">Dress Ladies</span>
																					</li>
																					 <li class="ltabs-tab " data-category-id="32" data-active-content=".items-category-32">
																						 <div class="ltabs-tab-img">
																								<img src="image/catalog/demo/category/24.jpg"
																									title="Jean" alt="Jean"
																									style="background:#fff"/>
																							</div>
																							<span class="ltabs-tab-label">
																							Jean
																							</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="33" data-active-content=".items-category-33">
																						 <div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/9.jpg"
																								title="Men Fashion" alt="Men Fashion"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Men Fashion
																						</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="34" data-active-content=".items-category-34">
																						<div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/22.jpg"
																								title="T-shirt" alt="T-shirt"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						T-shirt
																						</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="35" data-active-content=".items-category-35">
																						 <div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/25.jpg"
																								title="Trending" alt="Trending"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Trending
																						</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="36" data-active-content=".items-category-36">
																							<div class="ltabs-tab-img">
																								<img src="image/catalog/demo/category/21.jpg"
																									title="Western Wear" alt="Western Wear"
																									style="background:#fff"/>
																							</div>
																							<span class="ltabs-tab-label">
																							Western Wear
																							</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="37" data-active-content=".items-category-37">
																						 <div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/10.jpg"
																								title="Women Fashion" alt="Women Fashion"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Women Fashion
																						</span>
																					 </li>
																				</ul>
																		 </div>
																	</div>
															<!-- End Tabs-->
														</div>
														<div class="wap-listing-tabs ">
														<div class="ltabs-items-container">
															<div class="ltabs-items ltabs-items-selected items-category-30" data-total="8">
																<div class="ltabs-items-inner ltabs-slider">
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Est Officia Including Shoes Beautiful Pieces Canaz">
																						<img src="image/catalog/demo/product/fashion/24-226x226.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-20%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">
																							Est Officia Including Shoes Beautiful Pieces Canaz
																							</a>
																						</h4>
																						<div class="rating">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						</div>
																						<p class="price">
																							<span class="price-new">$80.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('42');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Invisible Hidden Spy Earphone Micro Wireless">
																						<img src="image/catalog/demo/product/fashion/16-226x226.png" alt="Invisible Hidden Spy Earphone Micro Wireless">
																						</a>
																					</div>
																					<div class="box-label">
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Invisible Hidden Spy Earphone Micro Wireless" target="_self">
																							Invisible Hidden Spy Earphone Micro Wireless
																							</a>
																						</h4>
																						<div class="rating">
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						</div>
																						<p class="price">
																							$100.00
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('52');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('52');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('52');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Ligula tortoram ut labore et dolore magna elip">
																						<img src="image/catalog/demo/product/fashion/14-226x226.png" alt="Ligula tortoram ut labore et dolore magna elip">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-20%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Ligula tortoram ut labore et dolore magna elip" target="_self">
																							Ligula tortoram ut labore et dolore magna elip
																							</a>
																						</h4>
																						<div class="rating">
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						</div>
																						<p class="price">
																							<span class="price-new">$80.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('87');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('87');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('87');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Ligula tortoram ut labore et dolore magna elip">
																						<img src="image/catalog/demo/product/fashion/11-226x226.png" alt="Ligula tortoram ut labore et dolore magna elip">
																						</a>
																					</div>
																					<div class="box-label">
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Ligula tortoram ut labore et dolore magna elip" target="_self">
																							Ligula tortoram ut labore et dolore magna elip
																							</a>
																						</h4>
																						<div class="rating">
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						</div>
																						<p class="price">
																							$100.00
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('90');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('90');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('90');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="magna elip therefore always free from bolac sodo">
																						<img src="image/catalog/demo/product/fashion/18-226x226.png" alt="magna elip therefore always free from bolac sodo">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-2%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="magna elip therefore always free from bolac sodo" target="_self">
																							magna elip therefore always free from bolac sodo
																							</a>
																						</h4>
																						<div class="rating">
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						</div>
																						<p class="price">
																							<span class="price-new">$98.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('83');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('83');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('83');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Est Officia Including Shoes Beautiful Pieces Canaz">
																						<img src="image/catalog/demo/product/fashion/15-226x226.png" alt="Est Officia Including Shoes Beautiful Pieces Canaz">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-82%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Est Officia Including Shoes Beautiful Pieces Canaz" target="_self">
																							Est Officia Including Shoes Beautiful Pieces Canaz
																							</a>
																						</h4>
																						<div class="rating">
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																							<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																						</div>
																						<p class="price">
																							<span class="price-new">$50.00</span>
																							<span class="price-old">$279.99</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('29');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('29');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('29');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>
															</div>
															<div class="ltabs-items items-category-31 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-32 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-33 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-34 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-35 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-36 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-37 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_hksd block">
										<div class="module so-listing-tabs-ltr home3_listingtab_style2">
											<div class="head-title">
												<h3 class="modtitle">Digital & Electronic</h3>
											</div>
											<div class="modcontent">
												<div id="so_listing_tabs_727" class="so-listing-tabs first-load module">
													<div class="ltabs-wrap">
														<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-margin="0">
															<!--Begin Tabs-->
															<div class="ltabs-tabs-wrap">
																		 <span class="ltabs-tab-selected"></span>
																		 <span class="ltabs-tab-arrow">▼</span>
																		 <div class="item-sub-cat">
																				<ul class="ltabs-tabs cf">
																					 <li class="ltabs-tab tab-sel" data-category-id="40" data-active-content=".items-category-40"><div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/94.jpg"
																								title="CASE" alt="CASE"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						CASE
																						</span></li>
																					 <li class="ltabs-tab " data-category-id="41" data-active-content=".items-category-41"><div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/93.jpg"
																								title="Cell & Cable" alt="Cell & Cable"
																								style="background:#fff"/>
																						</div><span class="ltabs-tab-label">Cell & Cable</span>
																					</li>
																					 <li class="ltabs-tab " data-category-id="42" data-active-content=".items-category-42">
																						 <div class="ltabs-tab-img">
																								<img src="image/catalog/demo/category/88.jpg"
																									title="Headphone" alt="Headphone"
																									style="background:#fff"/>
																							</div>
																							<span class="ltabs-tab-label">
																							Headphone
																							</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="43" data-active-content=".items-category-43">
																						 <div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/90.jpg"
																								title="Laptops" alt="Laptops"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Laptops
																						</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="44" data-active-content=".items-category-44">
																						<div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/87.jpg"
																								title="Mobile & Table" alt="Mobile & Table"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Mobile & Table
																						</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="45" data-active-content=".items-category-45">
																						 <div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/91.jpg"
																								title="Sound" alt="Sound  "
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Sound
																						</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="46" data-active-content=".items-category-46">
																							<div class="ltabs-tab-img">
																								<img src="image/catalog/demo/category/89.jpg"
																									title="USB & HDD" alt="USB & HDD"
																									style="background:#fff"/>
																							</div>
																							<span class="ltabs-tab-label">
																							USB & HDD
																							</span>
																					 </li>
																					 <li class="ltabs-tab " data-category-id="47" data-active-content=".items-category-47">
																						 <div class="ltabs-tab-img">
																							<img src="image/catalog/demo/category/92.jpg"
																								title="Video & Camera" alt="Video & Camera"
																								style="background:#fff"/>
																						</div>
																						<span class="ltabs-tab-label">
																						Video & Camera
																						</span>
																					 </li>
																				</ul>
																		 </div>
																	</div>
															<!-- End Tabs-->
														</div>
														<div class="wap-listing-tabs products-list grid">
														<div class="ltabs-items-container">
															<div class="ltabs-items ltabs-items-selected items-category-40" data-total="12">
																<div class="ltabs-items-inner ltabs-slider ">
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Compact Portable Charger (External Battery)">
																						<img src="image/catalog/demo/product/electronic/13-226x226.jpg" alt="Compact Portable Charger (External Battery)">
																						</a>
																					</div>
																					<div class="box-label">
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Compact Portable Charger (External Battery)" target="_self">
																							Compact Portable Charger (External Batte..
																							</a>
																						</h4>
																						<p class="price">
																							$80.00
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('103');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('103');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('103');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Charger  Compact Portable with Premium">
																						<img src="image/catalog/demo/product/electronic/11-226x226.jpg" alt="Charger  Compact Portable with Premium">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-20%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Charger  Compact Portable with Premium" target="_self">
																							Charger  Compact Portable with Premium
																							</a>
																						</h4>
																						<p class="price">
																							<span class="price-new">$80.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('51');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('51');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('51');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Compact Portable Charger (External Battery) T21">
																						<img src="image/catalog/demo/product/electronic/14-226x226.jpg" alt="Compact Portable Charger (External Battery) T21">
																						</a>
																					</div>
																					<div class="box-label">
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Compact Portable Charger (External Battery) T21" target="_self">
																							Compact Portable Charger (External Batte..
																							</a>
																						</h4>
																						<p class="price">
																							$100.00
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('75');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('75');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('75');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Compact Portable Charger (External Battery) T22">
																						<img src="image/catalog/demo/product/electronic/21-226x226.jpg" alt="Compact Portable Charger (External Battery) T22">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-20%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Compact Portable Charger (External Battery) T22" target="_self">
																							Compact Portable Charger (External Batte..
																							</a>
																						</h4>
																						<p class="price">
																							<span class="price-new">$80.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('88');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('88');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('88');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
																						<img src="image/catalog/demo/product/electronic/26-226x226.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-20%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Lorem Ipsum dolor at vero eos et iusto odi  with Premium" target="_self">
																							Lorem Ipsum dolor at vero eos et iusto o..
																							</a>
																						</h4>
																						<p class="price">
																							<span class="price-new">$80.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('105');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('105');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('105');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Mammo Diablo except to obtain some advan from">
																						<img src="image/catalog/demo/product/electronic/6-226x226.jpg" alt="Mammo Diablo except to obtain some advan from">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-20%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Mammo Diablo except to obtain some advan from" target="_self">
																							Mammo Diablo except to obtain some advan..
																							</a>
																						</h4>
																						<p class="price">
																							<span class="price-new">$80.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('110');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('110');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('110');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Portable  Compact Charger (External Battery) t45">
																						<img src="image/catalog/demo/product/electronic/4-226x226.jpg" alt="Portable  Compact Charger (External Battery) t45">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-40%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Portable  Compact Charger (External Battery) t45" target="_self">
																							Portable  Compact Charger (External Batt..
																							</a>
																						</h4>
																						<p class="price">
																							<span class="price-new">$60.00</span>
																							<span class="price-old">$100.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('78');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('78');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('78');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="LG 29UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 HDMI(2)">
																						<img src="image/catalog/demo/product/electronic/28-226x226.jpg" alt="LG 29UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 HDMI(2)">
																						</a>
																					</div>
																					<div class="box-label">
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="LG 29UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 HDMI(2)" target="_self">
																							LG 29UC97-S 29"(21:9) FHD  IPS LED 2560X..
																							</a>
																						</h4>
																						<p class="price">
																							$101.00
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('40');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('40');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Compact Portable Charger (Power Bank) with Premium">
																						<img src="image/catalog/demo/product/electronic/19-226x226.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-70%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Compact Portable Charger (Power Bank) with Premium" target="_self">
																							Compact Portable Charger (Power Bank) wi..
																							</a>
																						</h4>
																						<p class="price">
																							<span class="price-new">$60.00</span>
																							<span class="price-old">$199.99</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('66');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('66');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('66');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="SamSung 23UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 ">
																						<img src="image/catalog/demo/product/electronic/5-226x226.jpg" alt="SamSung 23UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 ">
																						</a>
																					</div>
																					<div class="box-label">
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="SamSung 23UC97-S 29&quot;(21:9) FHD  IPS LED 2560X1080 " target="_self">
																							SamSung 23UC97-S 29"(21:9) FHD  IPS LED ..
																							</a>
																						</h4>
																						<p class="price">
																							$279.99
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('64');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('64');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('64');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="ltabs-item ">
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Luma Extrem ich toil and pain can pcure him">
																						<img src="image/catalog/demo/product/electronic/9-226x226.jpg" alt="Luma Extrem ich toil and pain can pcure him">
																						</a>
																					</div>
																					<div class="box-label">
																						<span class="label-product label-sale">-20%</span>
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Luma Extrem ich toil and pain can pcure him" target="_self">
																							Luma Extrem ich toil and pain can pcure ..
																							</a>
																						</h4>
																						<p class="price">
																							<span class="price-new">$400.00</span>
																							<span class="price-old">$500.00</span>
																						</p>
																					</div>
																					<div class="button-group2">
																						<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to cart" onclick="cart.add('60');"> <span>Add to cart</span></button>
																						<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i></button>
																						<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('60');"><i class="fa fa-exchange"></i></button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="item-inner product-thumb trg transition product-layout">
																			<div class="product-item-container">
																				<div class="left-block ">
																					<div class="image product-image-container so-quickview ">
																						<a class="lt-image" 
																							href="product.html" target="_self"
																							title="Compact Portable Charger (External Battery) T23">
																						<img src="image/catalog/demo/product/electronic/17-226x226.jpg" alt="Compact Portable Charger (External Battery) T23">
																						</a>
																					</div>
																					<div class="box-label">
																					</div>
																				</div>
																				<div class="right-block">
																					<div class="caption">
																						<h4>
																							<a href="product.html" 
																								title="Compact Portable Charger (External Battery) T23" target="_self">
																							Compact Portable Charger (External Batte..
																							</a>
																						</h4>
																						<p class="price">
																							$1,000.00
																						</p>
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
																</div>
															</div>
															<div class="ltabs-items items-category-41 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-42 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-43 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-44 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-45 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-46 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
															<div class="ltabs-items items-category-47 grid" data-total="8">
																 <div class="ltabs-loading"></div>
															</div>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4kdf block">
										<div class="banner-layout-5 row clearfix">
											<div class="banner-22 col-sm-4  banners">
												<div>
													<a class="bn-shadow" href="#" title="Banner 22">      
													<img src="image/catalog/demo/banners/home3/banner22.jpg" alt="Static Image">
													</a> 
												</div>
											</div>
											<div class="banner-23 col-sm-4 banners">
												<div>
													<a class="bn-shadow" href="#" title="Banner 23">      
													<img src="image/catalog/demo/banners/home3/banner23.jpg" alt="Static Image">
													</a> 
												</div>
											</div>
											<div class="banner-24 col-sm-4  banners">
												<div>
													<a class="bn-shadow" href="#" title="Banner 24">      
													<img src="image/catalog/demo/banners/home3/banner24.jpg" alt="Static Image">
													</a> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ksde block">
								<div class="module so-extraslider-ltr home3_extra_style3">
									<h3 class="modtitle">Feature Items</h3>
									<div class="modcontent">
										<div id="so_extra_slider_528" class="so-extraslider buttom-type1 preset00-6 preset01-5 preset02-3 preset03-2 preset04-1 button-type1">
											<div class="box-banner">
												<div class="banners">
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
																	<img src="image/catalog/demo/product/electronic/25-234x234.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
																	<div  class="content_price price font-ct">
																		<span class="old-price product-price">$50.00 </span>&nbsp;&nbsp;
																		<span class="price-old">$279.99 </span>&nbsp;
																	</div>
																</div>
																<div class="button-group2">
																	<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('104');"> <span>Add to Cart</span></button>
																	<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i></button>
																	<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('104');"><i class="fa fa-exchange"></i></button>
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
																	<img src="image/catalog/demo/product/electronic/19-234x234.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
																	<div  class="content_price price font-ct">
																		<span class="old-price product-price">$60.00 </span>&nbsp;&nbsp;
																		<span class="price-old">$199.99 </span>&nbsp;
																	</div>
																</div>
																<div class="button-group2">
																	<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('66');"> <span>Add to Cart</span></button>
																	<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('66');"><i class="fa fa-heart"></i></button>
																	<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('66');"><i class="fa fa-exchange"></i></button>
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
																	<img src="image/catalog/demo/product/electronic/4-234x234.jpg" alt="Portable  Compact Charger (External Battery) t45">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
																	<div  class="content_price price font-ct">
																		<span class="old-price product-price">$60.00 </span>&nbsp;&nbsp;
																		<span class="price-old">$100.00 </span>&nbsp;
																	</div>
																</div>
																<div class="button-group2">
																	<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('78');"> <span>Add to Cart</span></button>
																	<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('78');"><i class="fa fa-heart"></i></button>
																	<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('78');"><i class="fa fa-exchange"></i></button>
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
																	<img src="image/catalog/demo/product/electronic/1-234x234.jpg" alt=" Magnetic Air Vent Phone Holder for iPhone 7 / 7 Plus">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
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
																	<img src="image/catalog/demo/product/electronic/11-234x234.jpg" alt="Charger  Compact Portable with Premium">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
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
																	<img src="image/catalog/demo/product/electronic/13-234x234.jpg" alt="Compact Portable Charger (External Battery)">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
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
																	<img src="image/catalog/demo/product/electronic/21-234x234.jpg" alt="Compact Portable Charger (External Battery) T22">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
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
																	<img src="image/catalog/demo/product/electronic/26-234x234.jpg" alt="Lorem Ipsum dolor at vero eos et iusto odi  with Premium">
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
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
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
												<div class="item ">
													<div class="item-wrap product-layout style1 ">
														<div class="product-item-container">
															<div class="left-block ">
																<div class="product-image-container so-quickview">
																	<a class="lt-image" 
																		href="product.html" target="_self"
																		title="Mammo Diablo except to obtain some advan from">
																	<img src="image/catalog/demo/product/electronic/6-234x234.jpg" alt="Mammo Diablo except to obtain some advan from">
																	</a>
																</div>
																<div class="box-label">
																	<span class="label-product label-sale">-20% </span>
																</div>
															</div>
															<div class="right-block">
																<div class="caption">
																	<h4 class="font-ct">
																		<a href="product.html" target="_self" title="Mammo Diablo except to obtain some advan from "  >
																		Mammo Diablo except to obtain some advan from 
																		</a>
																	</h4>
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
																	<div  class="content_price price font-ct">
																		<span class="old-price product-price">$80.00 </span>&nbsp;&nbsp;
																		<span class="price-old">$100.00 </span>&nbsp;
																	</div>
																</div>
																<div class="button-group2">
																	<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('110');"> <span>Add to Cart</span></button>
																	<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('110');"><i class="fa fa-heart"></i></button>
																	<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('110');"><i class="fa fa-exchange"></i></button>
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
																		title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">
																	<img src="image/catalog/demo/product/electronic/29-234x234.jpg" alt="Seneo PA046 Fast Charger  Wireless Sleep-Friendly)">
																	</a>
																</div>
																<div class="box-label">
																	<span class="label-product label-sale">-11% </span>
																</div>
															</div>
															<div class="right-block">
																<div class="caption">
																	<h4 class="font-ct">
																		<a href="product.html" target="_self" title="Seneo PA046 Fast Charger  Wireless Sleep-Friendly) "  >
																		Seneo PA046 Fast Charger  Wireless Sleep-Friendly) 
																		</a>
																	</h4>
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
																	<div  class="content_price price font-ct">
																		<span class="old-price product-price">$89.00 </span>&nbsp;&nbsp;
																		<span class="price-old">$100.00 </span>&nbsp;
																	</div>
																</div>
																<div class="button-group2">
																	<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('86');"> <span>Add to Cart</span></button>
																	<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('86');"><i class="fa fa-heart"></i></button>
																	<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('86');"><i class="fa fa-exchange"></i></button>
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
																		title="Compact Portable Charger (External Battery) T21">
																	<img src="image/catalog/demo/product/electronic/14-234x234.jpg" alt="Compact Portable Charger (External Battery) T21">
																	</a>
																</div>
																<div class="box-label">
																</div>
															</div>
															<div class="right-block">
																<div class="caption">
																	<h4 class="font-ct">
																		<a href="product.html" target="_self" title="Compact Portable Charger (External Battery) T21 "  >
																		Compact Portable Charger (External Battery) T21 
																		</a>
																	</h4>
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
																	<div  class="content_price price font-ct">
																		<span class="price product-price">
																		$100.00 
																		</span>
																	</div>
																</div>
																<div class="button-group2">
																	<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('75');"> <span>Add to Cart</span></button>
																	<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('75');"><i class="fa fa-heart"></i></button>
																	<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('75');"><i class="fa fa-exchange"></i></button>
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
																		title="True Wireless Stereo Bluetooth 4.2 Headphones">
																	<img src="image/catalog/demo/product/electronic/20-234x234.jpg" alt="True Wireless Stereo Bluetooth 4.2 Headphones">
																	</a>
																</div>
																<div class="box-label">
																</div>
															</div>
															<div class="right-block">
																<div class="caption">
																	<h4 class="font-ct">
																		<a href="product.html" target="_self" title="True Wireless Stereo Bluetooth 4.2 Headphones "  >
																		True Wireless Stereo Bluetooth 4.2 Headphones 
																		</a>
																	</h4>
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>
																	<div  class="content_price price font-ct">
																		<span class="price product-price">
																		$100.00 
																		</span>
																	</div>
																</div>
																<div class="button-group2">
																	<button class="bt-cart addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('95');"> <span>Add to Cart</span></button>
																	<button class="bt wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('95');"><i class="fa fa-heart"></i></button>
																	<button class="bt compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('95');"><i class="fa fa-exchange"></i></button>
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
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_g1nr  block">
								<div class="row">
									<div class="banner-25 col-sm-6 banners">
										<div>
										<a class="bn-shadow" href="#" title="Banner 25">      
										<img src="image/catalog/demo/banners/home3/banner25.jpg" alt="Static Image">
										</a> 
										</div>
									</div>
									<div class="banner-26 col-sm-6  banners">
										<div>
										<a class="bn-shadow" href="#" title="Banner 26">      
										<img src="image/catalog/demo/banners/home3/banner26.jpg" alt="Static Image">
										</a> 
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
		<footer class="footer-container typefooter-3">
			<div class="footer-has-toggle collapse" id="collapse-footer"  >
				<div class="so-page-builder">
					<section class="section_1  section-color ">
						<div class="container page-builder-ltr">
							<div class="row row_5fdf  row-style ">
								<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 col_9jik  col-style">
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
								<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col_l60i  col-style">
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
											<a href="#" class="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>   <a href="#" class="linkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>   
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section_2  section-color ">
						<div class="container page-builder-ltr">
							<div class="row row_dsw3  row-style  row-color ">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_itqc  col-style">
									<div class="clearfix bonus-menus bonus-menu-4">
										<ul>
											<li class="item secure col-md-3">
												<div class="icon">
												</div>
												<div class="text">
													<h5><a href="#">100% Secure Payments</a></h5>
													<p>All major credit & debit</p>
													<p> cards accepted</p>
												</div>
											</li>
											<li class="item help col-md-3">
												<div class="icon">
												</div>
												<div class="text">
													<h5><a href="#">Help Center</a></h5>
													<p>Got a question? Look no further. </p>
													<p> Browse our FAQs or submit your here.</p>
												</div>
											</li>
											<li class="item trustpay col-md-3">
												<div class="icon">
												</div>
												<div class="text">
													<h5><a href="#">TrustPay</a></h5>
													<p>100% Payment Protection. Easy</p>
													<p> Return Policy </p>
												</div>
											</li>
											<li class="item delivery col-md-3">
												<div class="icon">
												</div>
												<div class="text">
													<h5><a href="#">Worldwide Delivery</a></h5>
													<p>With sites in 5 languages, we ship to </p>
													<p>over 200 countries & regions.</p>
												</div>
											</li>
											<li class="item value col-md-3">
												<div class="icon">
												</div>
												<div class="text">
													<h5><a href="#">Great Value</a></h5>
													<p>We offer competitive prices on our 100</p>
													<p>million plus product range.</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section_3 ">
						<div class="container page-builder-ltr">
							<div class="row row_4gdc  row-style ">
								<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col_ir5g  col-style">
									<div class="footer-links">
										<h4 class="title-footer">
											Trade Services
										</h4>
										<ul class="links">
											<li>
												<a href="#">Trade Assurance</a>
											</li>
											<li>
												<a href="#"> Business Identity</a>
											</li>
											<li>
												<a href="#"> Logistics Service</a>
											</li>
											<li>
												<a href="#"> Secure Payment</a>
											</li>
											<li>
												<a href="#"> Inspection Services</a>
											</li>
											<li>
												<a href="#"> Request for Quotation</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col_sa3f  col-style">
									<div class="footer-links">
										<h4 class="title-footer">
											POLICY INFO
										</h4>
										<ul class="links">
											<li>
												<a title="About US" href="about-us.html">About US</a>
											</li>
											<li>
												<a title="Contact us" href="contact.html">Contact us</a>
											</li>
											<li>
												<a title="Warranty And Services" href="warranty.html">Warranty And Services</a>
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
								<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col_r3tw  col-style">
									<div class="footer-links">
										<h4 class="title-footer">
											Our BUSINESS
										</h4>
										<ul class="links">
											<li>
												<a href="#">Advertise on TopDeals</a>
											</li>
											<li>
												<a href="#"> Media Enquiries</a>
											</li>
											<li>
												<a href="#"> Be an Affiliate</a>
											</li>
											<li>
												<a href="#"> Deal of the Day</a>
											</li>
											<li>
												<a href="#"> Diwali Offers</a>
											</li>
											<li>
												<a href="#"> Snapdeal Gold</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col_asli  col-style">
									<div class="footer-links">
										<h4 class="title-footer">
											Our company
										</h4>
										<ul class="links">
											<li>
												<a title="Brands" href="#">Brands</a>
											</li>
											<li>
												<a title="Gift Certificates" href="gift-voucher.html">Gift Certificates</a>
											</li>
											<li>
												<a title="Affiliates" href="login.html">Affiliates</a>
											</li>
											<li>
												<a title="Specials" href="#">Specials</a>
											</li>
											<li>
												<a title="Returns" href="#">Returns</a>
											</li>
											<li>
												<a href="#"> Sitemap</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col_xi8a  col-style">
									<div class="footer-links">
										<h4 class="title-footer">
											My Account
										</h4>
										<ul class="links">
											<li>
												<a title="My Account" href="my-account.html">My Account</a>
											</li>
											<li>
												<a title="Account Downloads" href="#">Account Downloads</a>
											</li>
											<li>
												<a title="Checkout" href="cart.html">Checkout</a>
											</li>
											<li>
												<a href="wishlist"> Wishlist</a>
											</li>
											<li>
												<a title="Order History" href="order-information">Order History</a>
											</li>
											<li>
												<a title="Your Transactions" href="#">Your Transactions</a>
											</li>
										</ul>
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
		</div>
		<div class="back-to-top"><i class="fa fa-angle-up"></i></div>
		<!-- //end Footer Container -->
	
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
	<script type="text/javascript" src="js/themejs/custom_h3.js"></script>
	<script type="text/javascript" src="js/themejs/addtocart.js"></script>
</body>

</html>
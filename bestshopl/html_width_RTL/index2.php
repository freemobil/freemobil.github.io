<!-- Begin SASS CSS
    ============================================ -->
<?php 
    require_once ('scssphp/scss.inc.php');
    use Leafo\ScssPhp\Compiler;
    use Leafo\ScssPhp\Server;
    $themeCssName='';  
    $ColorScheme = '#ff9800';
    $themeColor = strtolower($ColorScheme);
    
    $scss = new Compiler();
    $scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
    $scss->addImportPath('sass');
    $scss->setVariables(array(
        '$linkColor' => $themeColor,
        '$dir' => 'rtl',
    ));

    
    $string_css     = $scss->compile('@import "home2.scss"');
    $header1_css    = $scss->compile('@import "header/header2.scss"');
    $footer1_css    = $scss->compile('@import "footer/footer2.scss"');
    
    file_put_contents('css/home2.css', $string_css);
    file_put_contents('css/header/header2.css', $header1_css);
    file_put_contents('css/footer/footer2.css', $footer1_css);
    
    ?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic page needs
            ============================================ -->
        <title>BestShop - Multipurpose Responsive HTML5 Template</title>
        <meta charset="utf-8">
        <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
        <meta name="description" content="BestShop is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
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
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.rtl.min.css">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="css/themecss/lib.css" rel="stylesheet">
        <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
        <link href="js/minicolors/miniColors.css" rel="stylesheet">
        <!-- Theme CSS
            ============================================ -->
        <link href="css/themecss/so_searchpro.css" rel="stylesheet">
        <link href="css/themecss/so_megamenu.css" rel="stylesheet">
        <link href="css/themecss/so-categories.css" rel="stylesheet">
        <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
        <link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
        <link href="css/footer/footer2.css" rel="stylesheet">
        <link href="css/header/header2.css" rel="stylesheet">
        <link id="color_scheme" href="css/home2.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!-- Google web fonts
            ============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,600,700' rel='stylesheet' type='text/css'>
        <style type="text/css">
            body{font-family:'Roboto', sans-serif}
        </style>
    </head>
    <body class="common-home res layout-2">
        <div id="wrapper" class="wrapper-fluid banners-effect-7">
            <!-- Header Container  -->
            <header id="header" class=" typeheader-2">
                <div class="banner-top hidden-compact">
                    <div class="container">
                        <div class="row text-center">
                            <div class="alert alert-info alert-dismissible fade in" role="alert"> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
                                We are using php file for implement our <strong>'Demo Options' </strong> tool in left of our demo. in our package, there are no php files
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Top -->
                <div class="header-top hidden-compact">
                    <div class="container">
                        <div class="row">
                            <div class="header-top-left col-lg-10 col-md-10 col-sm-6 col-xs-4">
                                <div class="hidden-sm hidden-xs welcome-msg">
                                    <span>Wellcome Our Online Store!</span> 
                                    <span class="email">Email: Design@domain.com</span>
                                    <span class="hotline">Hotline: 888 4344 6000 - 888 1338 8193</span>
                                 </div>
                            </div>
                            <div class="header-top-right collapsed-block col-lg-2 col-md-2 col-sm-6 col-xs-8">
                                <ul class="top-link list-inline lang-curr">
                                    <li class="currency">
                                        <div class="btn-group currencies-block">
                                            <form action="index.php" method="post" enctype="multipart/form-data" id="currency">
                                                <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                <span class="icon icon-credit "></span> $ USD  <span class="fa fa-angle-down"></span>
                                                </a>
                                                <ul class="dropdown-menu btn-xs">
                                                    <li> <a href="#">(€)&nbsp;Euro</a></li>
                                                    <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                                    <li> <a href="#">($)&nbsp;USD </a></li>
                                                </ul>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="language">
                                        <div class="btn-group languages-block ">
                                            <form action="index.php" method="post" enctype="multipart/form-data" id="bt-language">
                                                <a class="btn-link dropdown-toggle" data-toggle="dropdown">
                                                <img src="image/catalog/flags/ar.png" alt="English" title="English">
                                                <span class="">Arabic</span>
                                                <span class="fa fa-angle-down"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="../index.php"><img class="image_flag" src="image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li>
                                                    <li> <a href="index.php"> <img class="image_flag" src="image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                                </ul>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Header Top -->
                <!-- Header center -->
                <div class="header-middle">
                    <div class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div class="navbar-logo col-lg-3 col-md-2 col-sm-12 col-xs-12">
                                <div class="logo"><a href="index.php"><img src="image/catalog/logo2.png" title="Your Store" alt="Your Store" /></a></div>
                            </div>
                            <!-- //end Logo -->
                            <!-- Search -->
                            <div class="middle2 col-lg-6 col-md-6">
                                <div class="search-header-w">
                                    
                                    <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                        <form method="GET" action="index.php">
                                            <div id="search0" class="search input-group form-group">
                                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
                                                <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                                    <select class="no-border" name="category_id">
                                                        <option value="0">All Categories</option>
                                                        <option value="78">Apparel</option>
                                                        <option value="77">Cables &amp; Connectors</option>
                                                        <option value="82">Cameras &amp; Photo</option>
                                                        <option value="80">Flashlights &amp; Lamps</option>
                                                        <option value="81">Mobile Accessories</option>
                                                        <option value="79">Video Games</option>
                                                        <option value="20">Jewelry &amp; Watches</option>
                                                        <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                                        <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                                        <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                                    </select>
                                                </div>
                                                <span class="input-group-btn">
                                                <button type="submit" class="button-search btn btn-primary" name="submit_search">Search</button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="route" value="product/search" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- //end Search -->
                            <div class="middle3 col-lg-3 col-md-4">
                                <!--cart-->
                                <div class="shopping_cart">
                                    <div id="cart" class="btn-shopping-cart">
                                        <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                            <div class="shopcart">
                                                <span class="icon-c">
                                                </span>
                                                <div class="shopcart-inner">
                                                    <p class="text-shopping-cart">
                                                        My cart
                                                    </p>
                                                    <span class="total-shopping-cart cart-total-full">
                                                    <span class="items_cart2">$156.4</span>
                                                    <span class="items_cart">2</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                            <li>
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center" style="width:70px">
                                                                <a href="product.html">
                                                                <img src="image/catalog/demo/product/80/1.jpg" style="width:70px" alt="Yutculpa ullamcon" title="Yutculpa ullamco" class="preview">
                                                                </a>
                                                            </td>
                                                            <td class="text-left"> <a class="cart_product_name" href="product.html">Yutculpa ullamco</a> 
                                                            </td>
                                                            <td class="text-center">x1</td>
                                                            <td class="text-center">$80.00</td>
                                                            <td class="text-right">
                                                                <a href="product.html" class="fa fa-edit"></a>
                                                            </td>
                                                            <td class="text-right">
                                                                <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center" style="width:70px">
                                                                <a href="product.html">
                                                                <img src="image/catalog/demo/product/80/2.jpg" style="width:70px" alt="Xancetta bresao" title="Xancetta bresao" class="preview">
                                                                </a>
                                                            </td>
                                                            <td class="text-left"> <a class="cart_product_name" href="product.html">Xancetta bresao</a> 
                                                            </td>
                                                            <td class="text-center">x1</td>
                                                            <td class="text-center">$60.00</td>
                                                            <td class="text-right">
                                                                <a href="product.html" class="fa fa-edit"></a>
                                                            </td>
                                                            <td class="text-right">
                                                                <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                            <li>
                                                <div>
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left"><strong>Sub-Total</strong>
                                                                </td>
                                                                <td class="text-right">$140.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                                </td>
                                                                <td class="text-right">$2.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left"><strong>VAT (20%)</strong>
                                                                </td>
                                                                <td class="text-right">$20.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left"><strong>Total</strong>
                                                                </td>
                                                                <td class="text-right">$162.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> 
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--//cart-->   
                                <!-- call -->
                                <div class="user ">
                                    <span>Hello Guest!</span>
                                    <div class="user-link">
                                        <a href="#" class="login">Log in</a>
                                        <span>/</span>
                                        <a href="#">Register</a>
                                    </div>
                                </div>
                                <!-- //call -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Header center -->
                <!-- Header Bottom -->
                <div class="header-bottom hidden-compact">
                    <div class="container">
                        <div class="row">
                            <div class="bottom1 menu-vertical col-lg-2 col-md-3">
                                <!-- Secondary menu -->
                                <div class="responsive so-megamenu megamenu-style-dev">
                                    <div class="so-vertical-menu ">
                                        <nav class="navbar-default">
                                            <div class="container-megamenu vertical">
                                                <div id="menuHeading">
                                                    <div class="megamenuToogle-wrapper">
                                                        <div class="megamenuToogle-pattern">
                                                            <div class="container">
                                                                <div>
                                                                    <span></span>
                                                                    <span></span>
                                                                    <span></span>
                                                                </div>
                                                                All Categories                          
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-header">
                                                    <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                    <i class="fa fa-bars"></i>
                                                    <span>  All Categories     </span>
                                                    </button>
                                                </div>
                                                <div class="vertical-wrapper" >
                                                    <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                    <div class="megamenu-pattern">
                                                        <div class="container-mega">
                                                            <ul class="megamenu">
                                                                <li class="item-vertical  with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico10.png" alt="icon">
                                                                    <span>Gifts & Toys</span>
                                                                    <b class="caret"></b>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="60"  >
                                                                        <div class="content" >
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"  class="main-menu">Apparel</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#" >Accessories for Tablet PC</a></li>
                                                                                                            <li><a href="#" >Accessories for i Pad</a></li>
                                                                                                            <li><a  href="#" >Accessories for iPhone</a></li>
                                                                                                            <li><a href="#" >Bags, Holiday Supplies</a></li>
                                                                                                            <li><a href="#" >Car Alarms and Security</a></li>
                                                                                                            <li><a href="#" >Car Audio &amp; Speakers</a></li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"  class="main-menu">Cables &amp; Connectors</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#" >Cameras &amp; Photo</a></li>
                                                                                                            <li><a href="#" >Electronics</a></li>
                                                                                                            <li><a href="#" >Outdoor &amp; Traveling</a></li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"  class="main-menu">Camping &amp; Hiking</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#" >Earings</a></li>
                                                                                                            <li><a href="#" >Shaving &amp; Hair Removal</a></li>
                                                                                                            <li><a href="#" >Salon &amp; Spa Equipment</a></li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Smartphone &amp; Tablets</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#" >Sports &amp; Outdoors</a></li>
                                                                                                            <li><a href="#" >Bath &amp; Body</a></li>
                                                                                                            <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"  class="main-menu">Bags, Holiday Supplies</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#" onclick="window.location = '18_46';">Battereries &amp; Chargers</a></li>
                                                                                                            <li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
                                                                                                            <li><a href="#" onclick="window.location = '18_45';">Headphones, Headsets</a></li>
                                                                                                            <li><a href="#" onclick="window.location = '18_30';">Home Audio</a></li>
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
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">                                                            
                                                                    <img src="image/catalog/menu/icons/ico1.png" alt="icon">
                                                                    <span>Fashion & Accessories</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical  style1 with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <span class="label"></span>
                                                                    <img src="image/catalog/menu/icons/ico9.png" alt="icon">
                                                                    <span>Electronic</span>
                                                                    <b class="caret"></b>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="40" >
                                                                        <div class="content">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Smartphone</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#">Esdipiscing</a>
                                                                                                            </li>
                                                                                                            <li><a href="#">Scanners</a>
                                                                                                            </li>
                                                                                                            <li><a href="#">Apple</a>
                                                                                                            </li>
                                                                                                            <li><a href="#">Dell</a>
                                                                                                            </li>
                                                                                                            <li><a href="#">Scanners</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Electronics</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#">Asdipiscing</a>
                                                                                                            </li>
                                                                                                            <li><a href="#">Diam sit</a>
                                                                                                            </li>
                                                                                                            <li><a href="#">Labore et</a>
                                                                                                            </li>
                                                                                                            <li><a href="#">Monitors</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="row banner">
                                                                                        <a href="#">
                                                                                        <img src="image/catalog/menu/megabanner/vbanner1.jpg" alt="banner1">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="item-vertical with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico7.png" alt="icon">
                                                                    <span>Health &amp; Beauty</span>
                                                                    <b class="caret"></b>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="60" >
                                                                        <div class="content" >
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Car Alarms and Security</a>
                                                                                                        <ul>
                                                                                                            <li><a href="#" >Car Audio &amp; Speakers</a></li>
                                                                                                            <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                                            <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                                            <li><a href="#" >Headphones, Headsets</a></li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="24" onclick="window.location = '24';" class="main-menu">Health &amp; Beauty</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a href="#" >Home Audio</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Helicopters &amp; Parts</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Outdoor &amp; Traveling</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#">Toys &amp; Hobbies</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#"  class="main-menu">Electronics</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a href="#">Earings</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Salon &amp; Spa Equipment</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Shaving &amp; Hair Removal</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#">Smartphone &amp; Tablets</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#"  class="main-menu">Sports &amp; Outdoors</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a href="#" >Flashlights &amp; Lamps</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Fragrances</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Fishing</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >FPV System &amp; Parts</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 static-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">More Car Accessories</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a href="#" >Lighter &amp; Cigar Supplies</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Mp3 Players &amp; Accessories</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Men Watches</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Mobile Accessories</a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
                                                                                                        <ul>
                                                                                                            <li>
                                                                                                                <a href="#" >Gift &amp; Lifestyle Gadgets</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Gift for Man</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Gift for Woman</a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#" >Gift for Woman</a>
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
                                                                </li>
                                                                <li class="item-vertical css-menu with-sub-menu hover">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico6.png" alt="icon">
                                                                    <span>Smartphone &amp; Tablets</span>
                                                                    <b class="caret"></b>
                                                                    </a>
                                                                    <div class="sub-menu" data-subwidth="20">
                                                                        <div class="content" >
                                                                            <div class="row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-12 hover-menu">
                                                                                            <div class="menu">
                                                                                                <ul>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Headphones, Headsets</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Home Audio</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Health &amp; Beauty</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Helicopters &amp; Parts</a>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <a href="#" class="main-menu">Helicopters &amp; Parts</a>
                                                                                                    </li>
                                                                                                </ul>
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
                                                                    <img src="image/catalog/menu/icons/ico5.png" alt="icon">
                                                                    <span>Health & Beauty</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico4.png" alt="icon">
                                                                    <span>Bathroom</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico3.png" alt="icon">
                                                                    <span>Metallurgy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical" >
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico2.png" alt="icon">
                                                                    <span>Bedroom</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical" >
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico1.png" alt="icon">
                                                                    <span>Health &amp; Beauty</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical" style="display: none;">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico11.png" alt="icon">
                                                                    <span>Toys &amp; Hobbies </span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical" style="display: none;">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico12.png" alt="icon">
                                                                    <span>Jewelry &amp; Watches</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical" style="display: none;">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico9.png" alt="icon">
                                                                    <span>Home &amp; Lights</span>
                                                                    </a>
                                                                </li>
                                                                <li class="item-vertical" style="display: none;">
                                                                    <p class="close-menu"></p>
                                                                    <a href="#" class="clearfix">
                                                                    <img src="image/catalog/menu/icons/ico6.png" alt="icon">
                                                                    <span>Metallurgy</span>
                                                                    </a>
                                                                </li>
                                                                <li class="loadmore">
                                                                    <i class="fa fa-plus-square-o"></i>
                                                                    <span class="more-view">More Categories</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                <!-- // end Secondary menu -->
                            </div>
                            <!-- Main menu -->
                            <div class="main-menu col-lg-6 col-md-9">
                                <div class="responsive so-megamenu megamenu-style-dev">
                                    <nav class="navbar-default">
                                        <div class=" container-megamenu  horizontal open ">
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
                                                    <div class="container-mega">
                                                        <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                            <li class="home hover">
                                                                <a href="index.php">Home <b class="caret"></b></a>
                                                                <div class="sub-menu" style="width:100%;" >
                                                                    <div class="content" >
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <a href="index.php" class="image-link">
                                                                                    <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home-1.jpg" alt="">
                                                                                    </span> 
                                                                                    <h3 class="figcaption">Home page - (Default)</h3>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <a href="index2.php" class="image-link">
                                                                                    <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home-2.jpg" alt="">
                                                                                    </span> 
                                                                                    <h3 class="figcaption">Home page - Layout 2</h3>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <a href="index3.php" class="image-link">
                                                                                    <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home-3.jpg" alt="">
                                                                                    </span> 
                                                                                    <h3 class="figcaption">Home page - Layout 3</h3>
                                                                                </a>
                                                                            </div>
                                                                            
                                                                            <div class="col-md-4">
                                                                                <a href="html_width_RTL/index.php" class="image-link">
                                                                                    <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/rtl.jpg" alt="">
                                                                                    </span> 
                                                                                    <h3 class="figcaption">RTL Layout</h3>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <a href="mobile/index.html" class="image-link">
                                                                                    <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/mobile.jpg" alt="">
                                                                                    </span> 
                                                                                    <h3 class="figcaption">Mobile Layout</h3>
                                                                                </a>
                                                                            </div>
                                                                            <!-- <div class="col-md-15">
                                                                                <a href="#" class="image-link"> 
                                                                                    <span class="thumbnail">
                                                                                        <img class="img-responsive img-border" src="image/demo/feature/comming-soon.png" alt="">
                                                                                        
                                                                                    </span> 
                                                                                    <h3 class="figcaption">Comming soon</h3> 
                                                                                </a> 
                                                                                
                                                                                </div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                <strong>Features</strong>
                                                                <img class="label-hot" src="image/catalog/menu/new-icon.png" alt="icon items">
                                                                <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 100%; right: auto;">
                                                                    <div class="content" >
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
                                                                                            <li><a href="product.html">Product page 1</a></li>
                                                                                            <li><a href="product-v2.html">Product page 2</a></li>
                                                                                            <!-- <li><a href="product-v3.html">Image size - small</a></li> -->
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
                                                            </li>
                                                            <li class="with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                <strong>Pages</strong>
                                                                <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 40%; ">
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
                                                            <li class="with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                <strong>Categories</strong>
                                                                <img class="label-hot" src="image/catalog/menu/hot-icon.png" alt="icon items">
                                                                <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 100%; display: none;">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-3 img img1">
                                                                                        <a href="#"><img src="image/catalog/menu/megabanner/image-1.jpg" alt="banner1"></a>
                                                                                    </div>
                                                                                    <div class="col-md-3 img img2">
                                                                                        <a href="#"><img src="image/catalog/menu/megabanner/image-2.jpg" alt="banner2"></a>
                                                                                    </div>
                                                                                    <div class="col-md-3 img img3">
                                                                                        <a href="#"><img src="image/catalog/menu/megabanner/image-3.jpg" alt="banner3"></a>
                                                                                    </div>
                                                                                    <div class="col-md-3 img img4">
                                                                                        <a href="#"><img src="image/catalog/menu/megabanner/image-4.jpg" alt="banner4"></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <a href="#" class="title-submenu">Automotive</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
                                                                                                <li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
                                                                                                <li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
                                                                                                <li><a href="#"  class="main-menu">More Car Accessories</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <a href="#" class="title-submenu">Funitures</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"  class="main-menu">Bathroom</a></li>
                                                                                                <li><a href="#"  class="main-menu">Bedroom</a></li>
                                                                                                <li><a href="#"  class="main-menu">Decor</a></li>
                                                                                                <li><a href="#"  class="main-menu">Living room</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <a href="#" class="title-submenu">Jewelry &amp; Watches</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"  class="main-menu">Earings</a></li>
                                                                                                <li><a href="#"  class="main-menu">Wedding Rings</a></li>
                                                                                                <li><a href="#"  class="main-menu">Men Watches</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <a href="#" class="title-submenu">Electronics</a>
                                                                                <div class="row">
                                                                                    <div class="col-md-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#"  class="main-menu">Computer</a></li>
                                                                                                <li><a href="#"  class="main-menu">Smartphone</a></li>
                                                                                                <li><a href="#"  class="main-menu">Tablets</a></li>
                                                                                                <li><a href="#"  class="main-menu">Monitors</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                <strong>Accessories</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="blog-page.html" class="clearfix">
                                                                <strong>Blog</strong>
                                                                <span class="label"></span>
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
                            <!-- //end Main menu -->
                            <div class="bottom2 col-lg-4 hidden-md col-sm-6 col-xs-8">
                                <div class="link-header-bot font-title hidden-sm hidden-xs">
                                    <div class="signin-link blank">                            
                                        <a href="#">Purchase theme</a>
                                    </div>
                                </div>
                                <div class="link-header-bot hidden-xs hidden-sm hidden-md">
                                    <div class="blank">
                                        <a href="#">Special Offer</a>
                                        <img src="image/catalog/menu/icon-sale.png" alt="Sale">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- //Header Container  -->
            <!-- Main Container  -->
            <div class="main-container">
                <div id="content" >
                    <div class="module sohomepage-slider ">
                        <div class="yt-content-slider"  data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            <div class="yt-content-slide">
                                <a href="#"><img src="image/catalog/slideshow/home2/slide-1.jpg" alt="slider1" class="img-responsive"></a>
                            </div>
                            <div class="yt-content-slide">
                                <a href="#"><img src="image/catalog/slideshow/home2/slide-2.jpg" alt="slider2" class="img-responsive"></a>
                            </div>
                            <div class="yt-content-slide">
                                <a href="#"><img src="image/catalog/slideshow/home2/slide-3.jpg" alt="slider3" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="loadeding"></div>
                    </div>
                    <div class="container">
                        
                        <div class="banners banner1">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <a href="#"><img src="image/catalog/banners/home2/banner-11.jpg" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="#"><img src="image/catalog/banners/home2/banner-12.jpg" alt=""></a>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <a href="#"><img src="image/catalog/banners/home2/banner-13.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="block-policy2">
                            <ul>
                                <li class="item-1">
                                    <div class="item-inner">
                                        <div class="icon icon1"></div>
                                        <div class="content">
                                            <a href="#">Free Shipping</a>
                                            <p>From $99.00</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-2">
                                    <div class="item-inner">
                                        <div class="icon icon2"></div>
                                        <div class="content">
                                            <a href="#">Money Guarantee</a>
                                            <p>30 days Back</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-3">
                                    <div class="item-inner">
                                        <div class="icon icon3"></div>
                                        <div class="content">
                                            <a href="#">Payment Method</a>
                                            <p>Secure System</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-4">
                                    <div class="item-inner">
                                        <div class="icon icon4"></div>
                                        <div class="content">
                                            <a href="#">Online Support</a>
                                            <p>24 hours on day</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="item-5">
                                    <div class="item-inner">
                                        <div class="icon icon5"></div>
                                        <div class="content">
                                            <a href="#">100% Safe</a>
                                            <p>Secure shopping</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="categories module">
                            <h3 class="modtitle"><span>Popular Categories</span></h3>
                            <div class="so-extraslider">
                                <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/7.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Electronics</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/8.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Computers</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/9.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Headphone</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/10.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Furniture & Decors</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/11.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Shoes & Accessories</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/12.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Fashions</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/7.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Electronics</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="category clearfix">
                                            <div class="image banners">
                                                <div>
                                                    <a href="category.html"><img src="image/catalog/demo/product/250/9.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="content-info">
                                                <a href="category.html">Furniture & Decors</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" banner2">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <a href="#"><img src="image/catalog/banners/home3/banner-5.jpg" alt="Banner"></a>
                                </div>
                            </div>
                        </div>
                        <div class="deals module clearfix">
                            <h3 class="modtitle"><span>Daily Deals</span></h3>
                            <div class="so-extraslider">
                                <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="2" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                    <div class="item">
                                        <div class="product-thumb transition">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image">
                                                            <span class="label-product label-product-sale">-26%</span>
                                                            <a href="product.html" target="_self">
                                                            <img src="image/catalog/demo/product/390/2.jpg" alt="Ground round enim" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('101');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="product.html" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price"> <span class="price-old">$76.00</span>  <span class="price-new">$66.00</span>
                                                            </p>
                                                            <p >They key is to have every key, the key to open every door. We don’t see them, we will never see them, to be successful you’ve got to work hard...</p>
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>58</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>36</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="40%" data-toggle='tooltip' style="width: 60%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title">Hurry Up! Offer Ends In:</div>
                                                                <div class="item-time">
                                                                    <div class="item-timer">
                                                                        <div class="defaultCountdown-30"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb transition">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image">
                                                            <span class="label-product label-product-sale">-13%</span>
                                                            <a href="product.html" target="_self">
                                                            <img src="image/catalog/demo/product/390/1.jpg" alt="Ground round enim" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('101');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="product.html" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price"> <span class="price-old">$95.00</span>  <span class="price-new">$65.00</span>
                                                            </p>
                                                            <p >They key is to have every key, the key to open every door. We don’t see them, we will never see them, to be successful you’ve got to work hard...</p>
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>60</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>40</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="40%" data-toggle='tooltip' style="width: 40%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title">Hurry Up! Offer Ends In:</div>
                                                                <div class="item-time">
                                                                    <div class="item-timer">
                                                                        <div class="defaultCountdown-30"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb transition">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image">
                                                            <span class="label-product label-product-sale">-65%</span>
                                                            <a href="product.html" target="_self">
                                                            <img src="image/catalog/demo/product/390/2.jpg" alt="Ground round enim" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('101');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="product.html" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price"> <span class="price-old">$109.00</span>  <span class="price-new">$95.00</span>
                                                            </p>
                                                            <p >They key is to have every key, the key to open every door. We don’t see them, we will never see them, to be successful you’ve got to work hard...</p>
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>40</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>10</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="40%" data-toggle='tooltip' style="width: 20%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title">Hurry Up! Offer Ends In:</div>
                                                                <div class="item-time">
                                                                    <div class="item-timer">
                                                                        <div class="defaultCountdown-30"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb transition">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image">
                                                            <span class="label-product label-product-sale">-45%</span>
                                                            <a href="product.html" target="_self">
                                                            <img src="image/catalog/demo/product/390/1.jpg" alt="Ground round enim" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('101');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="product.html" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price"> <span class="price-old">$81.00</span>  <span class="price-new">$75.00</span>
                                                            </p>
                                                            <p >They key is to have every key, the key to open every door. We don’t see them, we will never see them, to be successful you’ve got to work hard...</p>
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>30</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>15</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="40%" data-toggle='tooltip' style="width: 50%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title">Hurry Up! Offer Ends In:</div>
                                                                <div class="item-time">
                                                                    <div class="item-timer">
                                                                        <div class="defaultCountdown-30"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="product-thumb transition">
                                            <div class="row">
                                                <div class="inner">
                                                    <div class="item-left col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="image">
                                                            <span class="label-product label-product-sale">-32%</span>
                                                            <a href="product.html" target="_self">
                                                            <img src="image/catalog/demo/product/390/2.jpg" alt="Ground round enim" class="img-responsive">
                                                            </a>
                                                            <div class="button-group so-quickview">
                                                                <button class="btn-button addToCart" title="Add to Cart" type="button" onclick="cart.add('101');"><i class="fa fa-shopping-basket"></i>  <span>Add to Cart</span>
                                                                </button>
                                                                <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                                                </button>
                                                                <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                                                </button>
                                                                <!--quickview-->                                                      
                                                                <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>                                                        
                                                                <!--end quickview-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-right col-lg-6 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="caption">
                                                            <h4><a href="product.html" target="_self" title="Ground round enim">Ground round enim</a></h4>
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <p class="price"> <span class="price-old">$87.00</span>  <span class="price-new">$76.00</span>
                                                            </p>
                                                            <p >They key is to have every key, the key to open every door. We don’t see them, we will never see them, to be successful you’ve got to work hard...</p>
                                                            <div class="item-available">
                                                                <div class="row">
                                                                    <p class="col-xs-6 a1">Available: <b>20</b> 
                                                                    </p>
                                                                    <p class="col-xs-6 a2">Sold: <b>15</b> 
                                                                    </p>
                                                                </div>
                                                                <div class="available"> <span class="color_width" data-title="40%" data-toggle='tooltip' style="width: 75%"></span>
                                                                </div>
                                                            </div>
                                                            <!--countdown box-->
                                                            <div class="item-time-w">
                                                                <div class="time-title">Hurry Up! Offer Ends In:</div>
                                                                <div class="item-time">
                                                                    <div class="item-timer">
                                                                        <div class="defaultCountdown-30"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end countdown box-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banners banner3">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="banner-31">
                                        <a href="#"><img src="image/catalog/banners/home2/banner-21.jpg" alt=""></a>
                                    </div>
                                    <div class="banner-32">
                                        <a href="#"><img src="image/catalog/banners/home2/banner-22.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="banner-33">
                                        <a href="#"><img src="image/catalog/banners/home2/banner-23.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="banner-34">
                                        <a href="#"><img src="image/catalog/banners/home2/banner-24.jpg" alt=""></a>
                                    </div>
                                    <div class="banner-35">
                                        <a href="#"><img src="image/catalog/banners/home2/banner-25.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="best-selling module">
                            <h3 class="modtitle"><span>Best Selling Products</span></h3>
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-xs-6 col-xxs-12">
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/1.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-product-new">New</span>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <div class="price">$96.00</div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/2.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-product-sale">-10%</span>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <p class="price"><span class="price-old">$102.00</span><span class="price-new">$35.00</span></p>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-xs-6  col-xxs-12">
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/3.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <div class="price">$65.00</div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/4.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <p class="price"><span class="price-new">$61.00</span></p>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-xs-6  col-xxs-12">
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/5.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <div class="price">$96.00</div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/6.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-product-new">New</span></div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <p class="price"><span class="price-new">$45.00</span></p>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-xs-6  col-xxs-12">
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/14.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <div class="price">$97.00</div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/2.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-product-sale">-10%</span>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <p class="price"><span class="price-old">$102.00</span><span class="price-new">$84.00</span></p>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-xs-6  hidden-xs">
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/15.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-product-new">New</span>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <div class="price">$68.00</div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/16.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <p class="price"><span class="price-new">$32.00</span></p>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-xs-6  hidden-xs">
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/17.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-product-sale">-15%</span>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <p class="price"><span class="price-old">$138.00</span><span class="price-new">$98.00</span></p>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner product-layout transition">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                        <img src="image/catalog/demo/product/250/18.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                        </a>
                                                    </div>
                                                    <div class="box-label"> <span class="label-product label-product-sale">-10%</span>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">                                                     
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                        </button> 
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                        </div>
                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                        <p class="price"><span class="price-old">$155.00</span><span class="price-new">$97.00</span></p>
                                                    </div>
                                                    <div class="button-group">
                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                        <span>Add to cart </span>   
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banners banner4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <a href="#"><img src="image/catalog/banners/home2/banner-31.jpg" alt=""></a>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <a href="#"><img src="image/catalog/banners/home2/banner-32.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="module listingtab-icons">
                            <h3 class="modtitle"><span>Featured Products</span></h3>
                            <div class="modcontent">
                                <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                                    <div class="loadeding"></div>
                                    <div class="ltabs-wrap">
                                        <div class="ltabs-tabs-container" data-rtl="yes" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="4" data-sm="3" data-xs="2" data-xxs="1" data-margin="0">
                                            <!--Begin Tabs-->                            
                                            <div class="ltabs-tabs-wrap">
                                                <span class='ltabs-tab-selected'></span>
                                                <span class="ltabs-tab-arrow">▼</span>
                                                <ul class="ltabs-tabs cf list-sub-cat font-title">
                                                    <li class="ltabs-tab tab-sel tab-loaded" data-category-id="72" data-active-content=".items-category-72">
                                                        <span class="ltabs-tab-label">Cellphone</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="73" data-active-content=".items-category-73">
                                                        <span class="ltabs-tab-label">Cosmetics</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="74" data-active-content=".items-category-74">
                                                        <span class="ltabs-tab-label">Electronics</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="75" data-active-content=".items-category-75">
                                                        <span class="ltabs-tab-label">Fashion</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="76" data-active-content=".items-category-76">
                                                        <span class="ltabs-tab-label">Handbags</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="77" data-active-content=".items-category-77">
                                                        <span class="ltabs-tab-label">Jewelry</span>
                                                    </li>
                                                    <li class="ltabs-tab" data-category-id="78" data-active-content=".items-category-78">
                                                        <span class="ltabs-tab-label">Smart TVs</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Tabs-->
                                        </div>
                                        <div class="wap-listing-tabs ltabs-items-container products-list ">
                                            <div class="ltabs-items ltabs-items-selected items-category-72" data-total="5">
                                                <div class="ltabs-items-inner ltabs-slider">
                                                    <div class="item">
                                                        <div class="item-inner product-layout transition">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                                        <img src="image/catalog/demo/product/306/1.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label"> <span class="label-product label-product-new">New</span>
                                                                    </div>
                                                                    <!--quickview--> 
                                                                    <div class="so-quickview">                                                     
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                                        </button> 
                                                                    </div>
                                                                    <!--end quickview-->
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                                        </div>
                                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                                        <div class="price">$96.00</div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                                        <span>Add to cart </span>   
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner product-layout transition">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                                        <img src="image/catalog/demo/product/306/2.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label"> <span class="label-product label-product-sale">-10%</span>
                                                                    </div>
                                                                    <!--quickview--> 
                                                                    <div class="so-quickview">                                                     
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                                        </button> 
                                                                    </div>
                                                                    <!--end quickview-->
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                                        </div>
                                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                                        <p class="price"><span class="price-old">$102.00</span><span class="price-new">$91.00</span></p>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                                        <span>Add to cart </span>   
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner product-layout transition">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                                        <img src="image/catalog/demo/product/306/3.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                                        </a>
                                                                    </div>
                                                                    <!--quickview--> 
                                                                    <div class="so-quickview">                                                     
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                                        </button> 
                                                                    </div>
                                                                    <!--end quickview-->
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                                        </div>
                                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                                        <div class="price">$58.00</div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                                        <span>Add to cart </span>   
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner product-layout transition">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                                        <img src="image/catalog/demo/product/306/4.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                                        </a>
                                                                    </div>
                                                                    <!--quickview--> 
                                                                    <div class="so-quickview">                                                     
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                                        </button> 
                                                                    </div>
                                                                    <!--end quickview-->
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                                        </div>
                                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                                        <div class="price">$64.00</div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                                        <span>Add to cart </span>   
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-inner product-layout transition">
                                                            <div class="product-item-container">
                                                                <div class="left-block">
                                                                    <div class="product-image-container second_img">
                                                                        <a href="product.html" target="_self" title="Ninim spareri magna">
                                                                        <img src="image/catalog/demo/product/306/5.jpg" class="img img-responsive" alt="Ninim spareri magna">
                                                                        </a>
                                                                    </div>
                                                                    <div class="box-label"> <span class="label-product label-product-new">New</span>
                                                                    </div>
                                                                    <!--quickview--> 
                                                                    <div class="so-quickview">                                                     
                                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>   
                                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('104');"><i class="fa fa-heart"></i>
                                                                        </button>
                                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('104');"><i class="fa fa-refresh"></i>
                                                                        </button> 
                                                                    </div>
                                                                    <!--end quickview-->
                                                                </div>
                                                                <div class="right-block">
                                                                    <div class="caption">
                                                                        <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                            <span class="fa fa-stack"><i class="fa fa-star "></i></span>
                                                                        </div>
                                                                        <h4><a href="product.html" title="Ninim spareri magna" target="_self">Ninim spareri magna</a></h4>
                                                                        <div class="price">$165.00</div>
                                                                    </div>
                                                                    <div class="button-group">
                                                                        <button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('104 ');">
                                                                        <span>Add to cart </span>   
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items items-category-73 grid" data-total="5">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                            <div class="ltabs-items  items-category-74 grid" data-total="5">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                            <div class="ltabs-items items-category-75 grid" data-total="4">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                            <div class="ltabs-items  items-category-76 grid" data-total="4">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                            <div class="ltabs-items items-category-77 grid" data-total="4">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                            <div class="ltabs-items  items-category-78 grid" data-total="4">
                                                <div class="ltabs-loading"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banners banner5">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <a href="#"><img src="image/catalog/banners/home2/banner-4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="list-product">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="block-product">
                                        <h4 class="title">Latest Products</h4>
                                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="yes" data-buttonpage="top">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$54.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$108.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$75.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/4.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$84.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$75.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/6.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$78.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="block-product">
                                        <h4 class="title">On Sale Products</h4>
                                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="yes" data-buttonpage="top">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/7.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$45.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/8.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$128.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$68.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$91.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$73.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/7.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$34.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="block-product">
                                        <h4 class="title">Most Viewed</h4>
                                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="yes" data-buttonpage="top">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$96.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/4.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$86.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/6.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$73.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/8.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$79.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$76.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$346.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="block-product">
                                        <h4 class="title">Featured Products</h4>
                                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="yes" data-buttonpage="top">
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$78.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$354.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/7.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$45.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/7.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$612.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/8.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$454.00</div>
                                                    </div>
                                                </div>
                                                <div class="product">
                                                    <div class="left-block">
                                                        <a href="product.html"><img src="image/catalog/demo/product/90/6.jpg" alt=""></a>
                                                    </div>
                                                    <div class="right-block">
                                                        <h4 class="title-product"><a href="product.html">ut labore et do</a></h4>
                                                        <div class="rating">    
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">$524.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-brands clearfix">
                        <div class="container">
                            <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="7" data-items_column1="6" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/1.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/2.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/3.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/4.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/5.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/6.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/7.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/1.jpg" alt="brand"></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="image/catalog/brands/home1/3.jpg" alt="brand"></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="container">
                        <div class="lastest-blog module">
                            <h3 class="modtitle"><span>Latest From Blogs</span></h3>
                            <div class="list-blog">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="item-inner">
                                            <div class="top-block">
                                                <a href="blog-detail.html">
                                                <img class="content" src="image/catalog/blog/home1/1.jpg" alt="">
                                                <img class="icon" src="image/theme/icons/blog.png" alt="">
                                                </a>
                                                <div class="date-blog">
                                                    <div class="day-time">14</div>
                                                    <div class="mon-time">Oct</div>
                                                </div>
                                            </div>
                                            <div class="bottom-block">
                                                <h4><a href="blog-detail.html">Winner Of Primetime Emmy Award And Outstanding Comedy Series, It's A Must Watch.</a></h4>
                                                <div class="entry-meta">
                                                    <div class="entry-date"><i class="fa fa-calendar"></i> Feb 28, 2017</div>
                                                    <div class="entry-comment"><i class="fa fa-comments"></i> 0 comments</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="item-inner">
                                            <div class="top-block">
                                                <a href="blog-detail.html">
                                                <img class="content" src="image/catalog/blog/home1/2.jpg" alt="">
                                                <img class="icon" src="image/theme/icons/blog.png" alt="">
                                                </a>
                                                <div class="date-blog">
                                                    <div class="day-time">12</div>
                                                    <div class="mon-time">Oct</div>
                                                </div>
                                            </div>
                                            <div class="bottom-block">
                                                <h4><a href="blog-detail.html">Winner Of Primetime Emmy Award And Outstanding Comedy Series, It's A Must Watch.</a></h4>
                                                <div class="entry-meta">
                                                    <div class="entry-date"><i class="fa fa-calendar"></i> Feb 28, 2017</div>
                                                    <div class="entry-comment"><i class="fa fa-comments"></i> 12 comments</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="item-inner">
                                            <div class="top-block">
                                                <a href="blog-detail.html">
                                                <img class="content" src="image/catalog/blog/home1/3.jpg" alt="">
                                                <img class="icon" src="image/theme/icons/blog.png" alt="">
                                                </a>
                                                <div class="date-blog">
                                                    <div class="day-time">25</div>
                                                    <div class="mon-time">Oct</div>
                                                </div>
                                            </div>
                                            <div class="bottom-block">
                                                <h4><a href="blog-detail.html">Winner Of Primetime Emmy Award And Outstanding Comedy Series, It's A Must Watch.</a></h4>
                                                <div class="entry-meta">
                                                    <div class="entry-date"><i class="fa fa-calendar"></i> Feb 28, 2017</div>
                                                    <div class="entry-comment"><i class="fa fa-comments"></i> 3 comments</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="item-inner">
                                            <div class="top-block">
                                                <a href="blog-detail.html">
                                                <img class="content" src="image/catalog/blog/home1/4.jpg" alt="">
                                                <img class="icon" src="image/theme/icons/blog.png" alt="">
                                                </a>
                                                <div class="date-blog">
                                                    <div class="day-time">29</div>
                                                    <div class="mon-time">Oct</div>
                                                </div>
                                            </div>
                                            <div class="bottom-block">
                                                <h4><a href="blog-detail.html">Winner Of Primetime Emmy Award And Outstanding Comedy Series, It's A Must Watch.</a></h4>
                                                <div class="entry-meta">
                                                    <div class="entry-date"><i class="fa fa-calendar"></i> Feb 28, 2017</div>
                                                    <div class="entry-comment"><i class="fa fa-comments"></i> 7 comments</div>
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
        
        <!-- //Main Container -->
        <!-- Footer Container -->
        <footer class="footer-container typefooter-2">
            <!-- Footer Top Container -->
            <section class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="contnet-footer-top">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 socials-footer">
                                <h3 class="title-footer-top">Follow Socials</h3>
                                <ul class="socials">
                                    <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <h3 class="title-footer-top title-footer-bot">Sign Up For Newsletter</h3>
                                <div class="block_content">
                                    <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="subcribe">
                                                <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                                Sign in
                                                </button>
                                            </div>
                                            <div class="input-box">
                                                <input type="email" placeholder="Enter your email ..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Top Container -->
            <section class="footer-middle ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-style">
                            <div class="infos-footer box-footer">
                                <div class="module">
                                    <h3 class="modtitle">Contact Info</h3>
                                    <ul>
                                        <li class="adres">No 40 Baria Sreet 133/2 NewYork City, NY, USD.</li>
                                        <li class="mail">
                                            <a href="mailto:contact@opencartworks.com">contact@opencartworks.com</a>
                                        </li>
                                        <li class="phone">(+0214)0 315 215 - (+0214)0 315 215</li>
                                        <li class="time">Open time: 8:00AM - 6:00PM</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col-style">
                            <div class="box-information box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Information</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Support 24/7 page</a></li>
                                            <li><a href="#">Product</a></li>
                                            <li><a href="#">Product Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 col-style">
                            <div class="box-service box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Services</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Customer Service</a></li>
                                            <li><a href="#">Custom Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-style">
                            <div class="module  so-popular-tag box-footer">
                                <h3 class=" modtitle"><span>Popular Tags</span></h3>
                                <div class="modcontent">
                                    <div class="box-content">   
                                        <a href="#">Ground</a><a href="#">ipsum</a><a href="#">consectetur</a>
                                        <a href="#">adipisicing</a><a href="#">eiusmod</a><a href="#">labore</a>
                                        <a href="#">aliqua</a><a href="#">quis nostrud</a><a href="#">exercitation</a>
                                        <a href="#">occaecat</a><a href="#">laboris</a><a href="#">occaecat</a> 
                                        <a href="#">adipisicing</a><a href="#">eiusmod</a><a href="#">labore</a> 
                                        <a href="#">aliqua</a><a href="#">quis nostrud</a><a href="#">exercitation</a><a href="#">occaecat</a><a href="#">laboris</a><a href="#">occaecat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer Bottom Container -->
            <section class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="content-footer-bottom">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w hidden-sm">
                                <img src="image/catalog/demo/payment/payment.png" alt="imgpayment">
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w pull-right">
                                <div class="copyright">© 2018 Bestsmarket. All Rights Reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Bottom Container -->
            <!--Back To Top-->
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
        <!-- //end Footer Container -->
        <!-- Cpanel Block -->
        <div id="sp-cpanel_btn" class="isDown visible-lg">
            <i class="fa fa-cog"></i>
        </div>
        <div id="sp-cpanel" class="sp-delay">
            <h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
            <div id="sp-cpanel_settings">
                <form action="" method="post" class="myform" >
                    <div class="panel-group">
                        <label>Color Scheme</label>
                        <div class="group-schemes">
                            <input name="cplthemesColors" class="minicolors minicolors-input form-control" type="text" value="#ff9800" size="7">
                        </div>
                    </div>
                    <div class="panel-group ">
                        <label>Layout Box</label>
                        <div class="group-boxed">
                            <select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
                                <option value="full">Wide</option>
                                <option value="boxed">Boxed</option>
                            </select>
                        </div>
                    </div>
                    <div class="panel-group">
                        <label>Body Image</label>
                        <div class="group-pattern">
                            <div data-pattern="28"  class="img-pattern"><img src="image/theme/patterns/28.png" alt="pattern 28"></div>
                            <div data-pattern="29"  class="img-pattern"><img src="image/theme/patterns/29.png" alt="pattern 29"></div>
                            <div data-pattern="30"  class="img-pattern"><img src="image/theme/patterns/30.png" alt="pattern 30"></div>
                            <div data-pattern="31"  class="img-pattern"><img src="image/theme/patterns/31.png" alt="pattern 31"></div>
                            <div data-pattern="32"  class="img-pattern"><img src="image/theme/patterns/32.png" alt="pattern 32"></div>
                            <div data-pattern="33"  class="img-pattern"><img src="image/theme/patterns/33.png" alt="pattern 33"></div>
                            <div data-pattern="34"  class="img-pattern"><img src="image/theme/patterns/34.png" alt="pattern 34"></div>
                            <div data-pattern="35"  class="img-pattern"><img src="image/theme/patterns/35.png" alt="pattern 35"></div>
                            <div data-pattern="36"  class="img-pattern"><img src="image/theme/patterns/36.png" alt="pattern 36"></div>
                            <div data-pattern="37"  class="img-pattern"><img src="image/theme/patterns/37.png" alt="pattern 37"></div>
                            <div data-pattern="38"  class="img-pattern"><img src="image/theme/patterns/38.png" alt="pattern 38"></div>
                            <div data-pattern="39"  class="img-pattern"><img src="image/theme/patterns/39.png" alt="pattern 39"></div>
                            <div data-pattern="40"  class="img-pattern"><img src="image/theme/patterns/40.png" alt="pattern 40"></div>
                            <div data-pattern="41"  class="img-pattern"><img src="image/theme/patterns/41.png" alt="pattern 41"></div>
                            <div data-pattern="42"  class="img-pattern"><img src="image/theme/patterns/42.png" alt="pattern 42"></div>
                            <div data-pattern="43"  class="img-pattern"><img src="image/theme/patterns/43.png" alt="pattern 43"></div>
                            <div data-pattern="44"  class="img-pattern"><img src="image/theme/patterns/44.png" alt="pattern 44"></div>
                            <div data-pattern="45"  class="img-pattern"><img src="image/theme/patterns/45.png" alt="pattern 45"></div>
                        </div>
                        <p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
                        <button type="button" style="width:100%" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-file-text"></i> Get Skin CSS</button>
                    </div>
                    <div class="reset-group">
                        <input type="submit" name="submit-reset" class="btn btn-success " value="Reset" onClick="ResetAll();">
                        <input type="submit" name="submitbtn" class="btn" value="Apply">
                    </div>
                </form>
            </div>
        </div>
        <!-- Begin Color Scheme
            ============================================ -->
        <?php 
            /*require_once ('scssphp/scss.inc.php');
            use Leafo\ScssPhp\Compiler;
            use Leafo\ScssPhp\Server;*/
            $themeCssName='';  
            
            if(isset($_COOKIE['customColorScheme'])){
               $ColorScheme = $_COOKIE['customColorScheme'];
            
               $themeCssName = 'theme-' . str_replace("#", "", $ColorScheme) . '.css';
               if(isset($_POST['submitbtn'])){
                $themeColor = strtolower($ColorScheme);
                $scss = new Compiler();
                $scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
                $scss->addImportPath('sass');
                $scss->setVariables(array(
                    '$linkColor' => $themeColor,
                    '$dir' => 'ltr',
                ));
            
                $string_css     = $scss->compile('@import "theme.scss"');
                file_put_contents('css/'.$themeCssName, $string_css);
            }
            }
            
            if(isset($_POST['submit-reset'])){
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
            }
            ?>
        <link rel='stylesheet' property='stylesheet'  href='css/themecss/cpanel.css' type='text/css' media='all' />
        <?php if(isset($ColorScheme)){?>
        <link rel='stylesheet' property='stylesheet'  href='css/<?php echo $themeCssName?>' type='text/css' media='all' />
        <?php }?>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> 
                        <h4 class="modal-title" id="myLargeModalLabel">Skin CSS</h4>
                    </div>
                    <div class="modal-body"> 
                        <textarea id="getCSSTextarea" class="get-css" readonly=""><?php $fileCssName = !empty($themeCssName) ?  $themeCssName : 'theme.css'; echo '/********************************************
                            ' ;
                            echo '*  Color Scheme: '.$fileCssName;
                            echo '
                            ********************************************/
                            ' ;
                            echo file_get_contents('css/'.$fileCssName);
                            ?>
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Color Scheme
            ============================================ -->
        <!-- Include Libs & Plugins
            ============================================ -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="js/themejs/libs.js"></script>
        <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
        <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
        <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
        <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
        <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
        <!-- Theme files
            ============================================ -->
        <script type="text/javascript" src="js/themejs/application.js"></script>
        <script type="text/javascript" src="js/themejs/homepage.js"></script>
        <!-- <script type="text/javascript" src="js/themejs/toppanel.js"></script> -->
        <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
        <script type="text/javascript" src="js/themejs/addtocart.js"></script>  
        <script type="text/javascript" src="js/themejs/cpanel.js"></script>
    </body>
</html>
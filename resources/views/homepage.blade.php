<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from live.hasthemes.com/html/5/rozer-preview/rozer/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 05:15:18 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Rozer – Electronics eCommerce HTML Template</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon/favicon.png')}}" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />

        <!-- CSS
  ============================================ -->

            <!-- Vendor CSS (Bootstrap & Icon Font) -->
        <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css"> -->

            <!-- Plugins CSS (All Plugins Files) -->
         <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/plugins/swiper.css">  -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/vendor.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/plugins.min.css')}}" />
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.min.css')}}">

        <!-- Main Style CSS -->
        <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    </head>

    <body>
        <!-- Header Section Start From Here -->
        <header class="header-wrapper">
            <!-- Header Nav Start -->
            <div class="header-nav">
                <div class="container">
                    <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                        <div class="header-static-nav">
                            <p>Welcome you to Rozer Store!</p>
                        </div>
                        <div class="header-menu-nav">
                            <ul class="menu-nav">
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Setting <i class="ion-ios-arrow-down"></i></button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                            <li><a href="my-account.html">My account</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="login.html">Sign in</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD $ <i class="ion-ios-arrow-down"></i></button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-2">
                                            <li><a href="#">EUR €</a></li>
                                            <li><a href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="pr-0">
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{URL::to('frontend/assets/images/flag/1.jpg')}}" alt="" /> English <i class="ion-ios-arrow-down"></i>
                                        </button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-3">
                                            <li>
                                                <a href="#"><img src="{{URL::to('frontend/assets/images/flag/1.jpg')}}" alt="" /> English</a>
                                            </li>
                                            <li>
                                                <a href="#"><img src="{{URL::to('frontend/assets/images/flag/2.jpg')}}" alt="" /> Français</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-top bg-white ptb-30px d-xl-block d-none sticky-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="mobile-menu-toggle home-2">
                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="logo">
                                <a href="index.html"><img class="img-responsive" src="{{URL::to('frontend/assets/images/logo/logo.jpg')}}" alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 align-self-center">
                            <div class="header-right-element d-flex">
                                <div class="search-element media-body mr-120px">
                                    <form class="d-flex" action="#">
                                        <div class="search-category">
                                            <select>
                                                <option value="0">All categories</option>
                                                <option value="12">Laptop</option>
                                                <option value="13">- - Hot Categories</option>
                                                <option value="19">- - - - Dresses</option>
                                                <option value="20">- - - - Jackets &amp; Coats</option>
                                                <option value="21">- - - - Sweaters</option>
                                                <option value="22">- - - - Jeans</option>
                                            </select>
                                        </div>
                                        <input type="text" placeholder="Enter your search key ... " />
                                        <button><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                                <!--Cart info Start -->
                                <div class="header-tools d-flex">
                                    <div class="cart-info d-flex align-self-center">
                                        <a href="#offcanvas-wishlist" class="heart offcanvas-toggle" data-number="3"><i class="icon-heart"></i></a>
                                        <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i class="icon-bag"></i><span>$20.00</span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Cart info End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            <div class="header-menu  d-xl-block d-none bg-light-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 custom-col-3">
                            <div class="header-menu-vertical bg-blue">
                                <h4 class="menu-title be-af-none">All Cattegories</h4>
                                <ul class="menu-content display-block">
                                    <li class="menu-item">
                                        <a href="#">Electronics <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu flex-wrap">
                                            <li>
                                                <a href="#">
                                                    <span><strong>Smart Electronics</strong></span>
                                                </a>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Wearable Devices</a></li>
                                                    <li><a href="#">Smart Home Appliances</a></li>
                                                    <li><a href="#">Smart Remote Controls</a></li>
                                                    <li><a href="#">Smart Watches</a></li>
                                                    <li><a href="#">Smart Wristbands</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <img src="{{URL::to('frontend/assets/images/menu-image/banner-mega1.jpg')}}" alt="" />
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Video Games <i class="ion-ios-arrow-right"></i></a>
                                        <ul class="sub-menu sub-menu-2">
                                            <li>
                                                <ul class="submenu-item">
                                                    <li><a href="#">Handheld Game Players</a></li>
                                                    <li><a href="#">Game Controllers</a></li>
                                                    <li><a href="#">Joysticks</a></li>
                                                    <li><a href="#">Stickers</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- sub menu -->
                                    </li>
                                    <li class="menu-item"><a href="#">Televisions</a></li>
                                    <li class="menu-item"><a href="#">Digital Cameras</a></li>
                                    <li class="menu-item"><a href="#">Headphones</a></li>
                                    <li class="menu-item"><a href="#"> Wearable Devices</a></li>
                                    <li class="menu-item"><a href="#"> Smart Watches</a></li>
                                    <li class="menu-item"><a href="#"> Game Controllers</a></li>
                                    <li class="menu-item"><a href="#"> Smart Home Appliances</a></li>
                                </ul>
                                <!-- menu content -->
                            </div>
                            <!-- header menu vertical -->
                        </div>
                        <div class="col-lg-7 custom-col custom-col-3">
                        <!-- Slider Start -->
                            <div class="slider-area slider-height-2">
                                <div class="hero-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(frontend/assets/images/slider-image/sample-3.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                                    <span class="animated color-white">GALAXY WATCH</span>
                                                    <h1 class="animated color-white">
                                                        Pre-Order <br />
                                                        <strong>Exclusive</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(frontend/assets/images/slider-image/sample-4.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                                    <span class="animated color-white">BT HEADPHONE</span>
                                                    <h1 class="animated color-white">
                                                        Headset <br />
                                                        <strong>Hyper X</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                </div>
                            </div>
                            <!-- Slider End -->
                        </div>
                        <div class="col-lg-3">
                            <div class="banner-area banner-area-2">
                                <div class="banner-wrapper mb-15px">
                                    <a href="shop-4-column.html"><img src="{{URL::to('frontend/assets/images/banner-image/9.jpg')}}" alt="" /></a>
                                </div>
                                <div class="banner-wrapper">
                                    <a href="shop-4-column.html"><img src="{{URL::to('frontend/assets/images/banner-image/10.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
                <!-- Static Area Start -->
                <div class="static-area  ptb-40px">
                    <div class="container">
                        <div class="static-area-wrap">
                            <div class="row">
                                <!-- Static Single Item Start -->
                                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="{{URL::to('frontend/assets/images/icons/static-icons-2.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Free Returns</h4>
                                            <p>Returns are free within 9 days</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                                    <div class="single-static">
                                        <img src="{{URL::to('frontend/assets/images/icons/static-icons-4.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Support 24/7</h4>
                                            <p>Contact us 24 hours a day</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
                                    <div class="single-static">
                                        <img src="{{URL::to('frontend/assets/images/icons/static-icons-3.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>100% Payment Secure</h4>
                                            <p>Your payment are safe with us.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Static Area End -->
            </div>
            <!-- header menu -->
        </header>
        <!-- Header Section End Here -->    

        <!-- Mobile Header Section Start -->
    <div class="mobile-header d-xl-none sticky-nav bg-white ptb-10px">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img class="img-responsive" src="{{URL::to('frontend/assets/images/logo/logo.jpg')}}" alt="logo.jpg" /></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="cart-info d-flex align-self-center">
                            <a href="compare.html" class="shuffle d-xs-none" data-number="3"><i class="icon-shuffle"></i></a>
                            <a href="#offcanvas-wishlist" class="heart offcanvas-toggle d-xs-none" data-number="3"><i class="icon-heart"></i></a>
                            <a href="#offcanvas-cart" class="bag offcanvas-toggle" data-number="3"><i class="icon-bag"></i><span>$20.00</span></a>
                        </div>
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>

    <!-- Search Category Start -->
    <div class="mobile-search-area d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-element media-body">
                        <form class="d-flex" action="#">
                            <div class="search-category">
                                <select>
                                    <option value="0">All categories</option>
                                    <option value="12">Laptop</option>
                                    <option value="13">- - Hot Categories</option>
                                    <option value="19">- - - - Dresses</option>
                                    <option value="20">- - - - Jackets &amp; Coats</option>
                                    <option value="21">- - - - Sweaters</option>
                                    <option value="22">- - - - Jeans</option>
                                    <option value="23">- - - - Blouses &amp; Shirts</option>
                                    <option value="14">- - Outerwear &amp; Jackets</option>
                                    <option value="24">- - - - Basic Jackets</option>
                                    <option value="25">- - - - Real Fur</option>
                                </select>
                            </div>
                            <input type="text" placeholder="Enter your search key ... " />
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Category End -->
    <div class="mobile-category-nav d-xl-none mb-15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li class="menu-item-has-children menu-item-has-children-6">
                                    <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-6">
                                        <li><a href="#">Handheld Game Players</a></li>
                                        <li><a href="#">Game Controllers</a></li>
                                        <li><a href="#">Joysticks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Televisions</a></li>
                                <li class="hidden"><a href="#">Projectors</a></li>
                                <li>
                                    <a href="#" id="more-btn"><i class="ion-ios-plus-empty" aria-hidden="true"></i> More Categories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!--=======  End of category menu =======-->
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{URL::to('frontend/assets/images/product-image/1.jpg')}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{URL::to('frontend/assets/images/product-image/2.jpg')}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{URL::to('frontend/assets/images/product-image/3.jpg')}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.html" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="{{URL::to('frontend/assets/images/product-image/1.jpg')}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{URL::to('frontend/assets/images/product-image/2.jpg')}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="{{URL::to('frontend/assets/images/product-image/3.jpg')}}" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <strong>Subtotal :</strong>
                    <span class="amount">$144.00</span>
                </div>
                <div class="buttons">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <div class="inner customScroll">
            <div class="head">
                <span class="title">&nbsp;</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="offcanvas-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="offcanvas-menu">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                            <li> <a href="index-3.html"><span class="menu-text">Home 3</span></a></li>
                            <li><a href="index-4.html"><span class="menu-text">Home 4</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Shop Single</a></li>
                                    <li><a href="single-product-variable.html">Shop Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                    <li><a href="single-product-group.html">Shop Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Shop Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                    <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                    <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                            <li><a href="compare.html">Compare Page</a></li>
                            <li><a href="login.html">Login & Register Page</a></li>
                            <li><a href="my-account.html">Account Page</a></li>
                            <li><a href="wishlist.html">Wishlist Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="offcanvas-buttons mt-30px">
                <div class="header-tools d-flex">
                    <div class="cart-info d-flex align-self-center">
                        <a href="my-account.html" class="user"><i class="icon-user"></i></a>
                        <a href="wishlist.html" data-number="3"><i class="icon-heart"></i></a>
                        <a href="cart.html" data-number="3"><i class="icon-bag"></i></a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-social mt-30px">
                <ul>
                    <li>
                        <a href="#"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <div class="offcanvas-overlay"></div>


            <!-- Header Nav End -->
            <div class="header-menu  d-xl-none bg-light-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                        <!-- Slider Start -->
                            <div class="slider-area slider-height-2 mb-md-30px mb-lm-30px mb-sm-30px">
                                <div class="hero-slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(frontend/assets/images/slider-image/sample-3.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                                    <span class="animated color-white">GALAXY WATCH</span>
                                                    <h1 class="animated color-white">
                                                        Pre-Order <br />
                                                        <strong>Exclusive</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                        <div class="swiper-slide bg-img d-flex" style="background-image: url(frontend/assets/images/slider-image/sample-4.jpg);">
                                            <div class="container align-self-center">
                                                <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                                    <span class="animated color-white">BT HEADPHONE</span>
                                                    <h1 class="animated color-white">
                                                        Headset <br />
                                                        <strong>Hyper X</strong>
                                                    </h1>
                                                    <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Slider  -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination swiper-pagination-white"></div>
                                </div>
                            </div>
                            <!-- Slider End -->
                        </div>
                        <div class="col-lg-3">
                            <div class="banner-area">
                                <div class="banner-wrapper mb-md-30px mb-lm-30px mb-sm-30px">
                                    <a href="shop-4-column.html"><img src="{{URL::to('frontend/assets/images/banner-image/9.jpg')}}" alt="" /></a>
                                </div>
                                <div class="banner-wrapper mb-0px">
                                    <a href="shop-4-column.html"><img src="{{URL::to('frontend/assets/images/banner-image/10.jpg')}}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
                <!-- Static Area Start -->
                <div class="static-area  ptb-40px">
                    <div class="container">
                        <div class="static-area-wrap">
                            <div class="row">
                                <!-- Static Single Item Start -->
                                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6 mb-md-30px mb-lm-30px">
                                    <div class="single-static">
                                        <img src="{{URL::to('frontend/assets/images/icons/static-icons-2.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Free Returns</h4>
                                            <p>Returns are free within 9 days</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6 mb-sm-30px">
                                    <div class="single-static">
                                        <img src="{{URL::to('frontend/assets/images/icons/static-icons-4.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>Support 24/7</h4>
                                            <p>Contact us 24 hours a day</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                                <!-- Static Single Item Start -->
                                <div class="col-lg-4 col-xs-12 col-md-6 col-sm-6">
                                    <div class="single-static">
                                        <img src="{{URL::to('frontend/assets/images/icons/static-icons-3.png')}}" alt="" class="img-responsive" />
                                        <div class="single-static-meta">
                                            <h4>100% Payment Secure</h4>
                                            <p>Your payment are safe with us.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Static Single Item End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Static Area End -->
            </div>
            <!-- header menu -->
        <!-- Feature Area start -->
        <div class="feature-area mt-60px mb-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">Featured Products</h2>
                        </div>
                    </div>
                </div>
                <div class="feature-slider-two slider-nav-style-1 single-product-responsive">
                    <div class="feature-slider-wrapper swiper-wrapper">
                        <!-- Single Item -->
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/6.jpg')}}" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal"></a>
										<i class="icon-magnifier icons"></i>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                </div>
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#"><button type="button" class="btn btn-primary">ADD TO CART</button></a></li>
                                        <li>
                                            <a href="wishlist.html"><button type="button" class="btn btn-primary"><i class="icon-heart"></i></button></a>
                                        </li>
                                    </ul>
                            </article>
                        </div>
                        <!-- Single Item -->
                        <div class="feature-slider-item swiper-slide">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/6.jpg')}}" alt="" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal"></a>
										<i class="icon-magnifier icons"></i>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                </div>
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#"><button type="button" class="btn btn-primary">ADD TO CART</button></a></li>
                                        <li>
                                            <a href="wishlist.html"><button type="button" class="btn btn-primary"><i class="icon-heart"></i></button></a>
                                        </li>
                                    </ul>
                            </article>
                        </div>
                        <!-- Single Item -->
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End -->
        <!-- Banner Area Start -->
        <div class="banner-area mt-30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="{{URL::to('frontend/assets/images/banner-image/4.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->   
        <!-- New Arrivals area start -->
            <div class="recent-add-area mt-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="section-heading">New Arrivals</h2>
                            </div>
                        </div>
                    </div>
                     <div class="recent-slider-two slider-nav-style-1 multi-row">
                        <div class="recent-slider-wrapper swiper-wrapper">
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/28.jpg')}}" alt="" />
                                            <img class="second-img" src="{{URL::to('frontend/assets/images/product-image/29.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/9.jpg')}}" alt="" />
                                            <img class="second-img" src="{{URL::to('frontend/assets/images/product-image/29.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/8.jpg')}}" alt="" />
                                            <img class="second-img" src="{{URL::to('frontend/assets/images/product-image/10.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/11.jpg')}}" alt="" />
                                            <img class="second-img" src="{{URL::to('frontend/assets/images/product-image/12.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/13.jpg')}}" alt="" />
                                            <img class="second-img" src="{{URL::to('frontend/assets/images/product-image/14.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/15.jpg')}}" alt="" />
                                            <img class="second-img" src="{{URL::to('frontend/assets/images/product-image/16.jpg')}}" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div> 
                </div> 
            </div> 
            <!-- New Arrivals area end -->
        <!-- Banner Area Start -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="{{URL::to('frontend/assets/images/banner-image/7.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="banner-wrapper">
                            <a href="shop-4-column.html"><img src="{{URL::to('frontend/assets/images/banner-image/8.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Category Tab Area Start -->
        <section class="category-tab-area mt-30px mb-40px">
            <div class="container">
                <div class="section-title d-flex">
                    <h2>Smart Electronics</h2>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs sub-category d-flex justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1">Smart Home Appliances</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Smart Remote Controls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">Smart Watches</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content banner-area">
                    <!-- 1st tab start -->
                    <div id="tab-1" class="tab-pane active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="feature-slider-2 slider-nav-style-1">
                                    <div class="feature-slider-wrapper swiper-wrapper">
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="{{URL::to('frontend/assets/images/product-image/6.jpg')}}" alt="" />
                                                        <img class="second-img" src="{{URL::to('frontend/assets/images/product-image/7.jpg')}}" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                    <ul>
                                                        <li class="cart"><button type="button" class="btn btn-light"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></button></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/27.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/26.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/21.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/20.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/13.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/14.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/16.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <div id="tab-2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                                <div class="banner-wrapper">
                                    <a href="shop-4-column.html"><img src="assets/images/banner-image/11.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                                <div class="feature-slider-2 slider-nav-style-1">
                                    <div class="feature-slider-wrapper swiper-wrapper">
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/27.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/26.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/21.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/20.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/13.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/14.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/16.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div id="tab-3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 mt-lm-55px">
                                <div class="banner-wrapper">
                                    <a href="shop-4-column.html"><img src="assets/images/banner-image/11.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                                <div class="feature-slider-2 slider-nav-style-1">
                                    <div class="feature-slider-wrapper swiper-wrapper">
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/8.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/9.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/27.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/26.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/15.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/21.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/20.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/7.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/19.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/18.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/13.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/14.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/12.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/25.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/26.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/24.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/27.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/22.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/23.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/16.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/17.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/10.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/11.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/16.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/14.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/13.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price">€23.90</li>
                                                            <li class="current-price">€21.51</li>
                                                            <li class="discount-price">-10%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Single Item -->
                                        <div class="feature-slider-item swiper-slide">
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                            <article class="list-product">
                                                <div class="img-block">
                                                    <a href="single-product.html" class="thumbnail">
                                                        <img class="first-img" src="assets/images/product-image/6.jpg" alt="" />
                                                        <img class="second-img" src="assets/images/product-image/7.jpg" alt="" />
                                                    </a>
                                                    <div class="quick-view">
                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                            <i class="icon-magnifier icons"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                </ul>
                                                <div class="product-decs">
                                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                                    <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                    <div class="pricing-meta">
                                                        <ul>
                                                            <li class="old-price not-cut">€18.90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="add-to-link">
                                                    <ul>
                                                        <li class="cart"><a title="Add to cart" href="#"><i class="icon-bag"></i></a></li>
                                                        <li>
                                                            <a title="Add to wishlist" href="wishlist.html"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a title="Add to compare" href="compare.html"><i class="icon-shuffle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-buttons">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                </div>
            </div>
        </section>
        <!-- Category Tab Area end -->
        <!-- category Area Start -->
        <div class="popular-categories-area ptb-60px bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="section-heading">Popular Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="category-slider slider-nav-style-1">
                    <div class="category-slider-wrapper swiper-wrapper">
                        <div class="category-slider-item swiper-slide">
                            <div class="category-slider-bg ">
                                <div class="thumb-category">
                                    <a href="single-product.html">
                                        <img src="assets/images/product-image/2-1.jpg" alt="product-image.jpg" />
                                    </a>
                                </div>
                                <div class="category-discript">
                                    <h4>Smart Electronics</h4>
                                    <ul>
                                        <li><a href="#">Wearable Devices</a></li>
                                        <li><a href="#">Smart Home Appliances</a></li>
                                        <li><a href="#">Smart Remote Controls</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                    </ul>
                                    <a href="shop-4-column.html" class="view-all-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="category-slider-item swiper-slide">
                            <div class="category-slider-bg ">
                                <div class="thumb-category">
                                    <a href="single-product.html">
                                        <img src="assets/images/product-image/2-2.jpg" alt="product-image.jpg" />
                                    </a>
                                </div>
                                <div class="category-discript">
                                    <h4>Audio & Video</h4>
                                    <ul>
                                        <li><a href="#">Televisions</a></li>
                                        <li><a href="#">TV Receivers</a></li>
                                        <li><a href="#">Projectors</a></li>
                                        <li><a href="#">TV Sticks</a></li>
                                    </ul>
                                    <a href="shop-4-column.html" class="view-all-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="category-slider-item swiper-slide">
                            <div class="category-slider-bg ">
                                <div class="thumb-category">
                                    <a href="single-product.html">
                                        <img src="assets/images/product-image/2-3.jpg" alt="product-image.jpg" />
                                    </a>
                                </div>
                                <div class="category-discript">
                                    <h4>Video Games</h4>
                                    <ul>
                                        <li><a href="#">Handheld Game Players</a></li>
                                        <li><a href="#">Game Controllers</a></li>
                                        <li><a href="#">Joysticks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                    </ul>
                                    <a href="shop-4-column.html" class="view-all-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="category-slider-item swiper-slide">
                            <div class="category-slider-bg ">
                                <div class="thumb-category">
                                    <a href="single-product.html">
                                        <img src="assets/images/product-image/2-4.jpg" alt="product-image.jpg" />
                                    </a>
                                </div>
                                <div class="category-discript">
                                    <h4>Portable Audio & Video</h4>
                                    <ul>
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Speakers</a></li>
                                        <li><a href="#">MP3 Players</a></li>
                                        <li><a href="#">Microphones</a></li>
                                    </ul>
                                    <a href="shop-4-column.html" class="view-all-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="category-slider-item swiper-slide">
                            <div class="category-slider-bg ">
                                <div class="thumb-category">
                                    <a href="single-product.html">
                                        <img src="assets/images/product-image/2-5.jpg" alt="product-image.jpg" />
                                    </a>
                                </div>
                                <div class="category-discript">
                                    <h4>Camera & Photo</h4>
                                    <ul>
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">Camcorders</a></li>
                                        <li><a href="#">Camera Drones</a></li>
                                        <li><a href="#">Action Cameras</a></li>
                                    </ul>
                                    <a href="shop-4-column.html" class="view-all-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="category-slider-item swiper-slide">
                            <div class="category-slider-bg ">
                                <div class="thumb-category">
                                    <a href="single-product.html">
                                        <img src="assets/images/product-image/2-1.jpg" alt="product-image.jpg" />
                                    </a>
                                </div>
                                <div class="category-discript">
                                    <h4>Smart Electronics</h4>
                                    <ul>
                                        <li><a href="#">Wearable Devices</a></li>
                                        <li><a href="#">Smart Home Appliances</a></li>
                                        <li><a href="#">Smart Remote Controls</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                    </ul>
                                    <a href="shop-4-column.html" class="view-all-btn">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- category Area End -->

            <!-- Recently Add area start -->
            <div class="recent-add-area mb-30px mt-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="section-heading">Recently Added</h2>
                            </div>
                        </div>
                    </div>
                    <div class="recent-slider slider-nav-style-1 multi-row-2">
                        <div class="recent-slider-wrapper swiper-wrapper">
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/28.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/15.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/16.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/17.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/18.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>Graphic Corner</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/21.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/22.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>Graphic Corner</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€23.90</li>
                                                <li class="current-price">€21.51</li>
                                                <li class="discount-price">-10%</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/23.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/24.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/25.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/26.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/27.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/28.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/29.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/29.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/20.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/21.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="recent-slider-item swiper-slide">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/8.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/10.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="assets/images/product-image/11.jpg" alt="" />
                                            <img class="second-img" src="assets/images/product-image/12.jpg" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="icon-magnifier icons"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price not-cut">€18.90</li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recently Add area end -->
            <!-- Brand area start -->
            <div class="brand-area mb-60px">
                <div class="container">
                    <div class="brand-slider slider-nav-style-1  slider-nav-style-2">
                        <div class="brand-slider-wrapper swiper-wrapper">
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets/images/brand-logo/3.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets/images/brand-logo/4.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets/images/brand-logo/5.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                            </div>
                            <div class="brand-slider-item swiper-slide">
                                <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand area end -->
        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">ABOUT US</h4>
                                    <p class="text-infor">We are a team of designers and developers that create high quality HTML template</p>
                                    <div class="need-help">
                                        <p class="phone-info">
                                            NEED HELP?
                                            <span>
                                                (+800) 345 678 <br />
                                                (+800) 123 456
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Information</h4>
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="#">Secure Payment</a></li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Stores</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-2 mb-sm-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">CUSTOM LINKS</h4>
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="#">Legal Notice</a></li>
                                            <li><a href="#">Prices Drop</a></li>
                                            <li><a href="#">New Products</a></li>
                                            <li><a href="#">Best Sales</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 ">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">NEWSLETTER</h4>
                                    <div class="subscrib-text">
                                        <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form
                                            id="mc-embedded-subscribe-form"
                                            class="validate"
                                            novalidate=""
                                            target="_blank"
                                            name="mc-embedded-subscribe-form"
                                            method="post"
                                            action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                        >
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Enter your email here.." name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true" style="position: absolute; left: -5000px;">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Sign Up" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="copy-text">Copyright © <a href="https://hasthemes.com/"> HasThemes</a>. All Rights Reserved</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <img class="payment-img" src="assets/images/icons/payment.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                                 <!-- Swiper -->
                                  <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/12.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/13.jpg" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg" alt="">
                                          </div>
                                        </div>
                                  </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-instagram"></i></a>
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
        </div>
        <!-- Modal end -->
        <!-- JS
============================================ -->

            <!-- Vendors JS -->
        <script src="{{URL::to('frontend/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
        <script src="{{URL::to('frontend/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::to('frontend/assets/js/vendor/jquery-migrate-3.1.0.min.js')}}"></script>
        <script src="{{URL::to('frontend/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>

            <!-- Plugins JS -->
        <script src="{{URL::to('frontend/assets/js/plugins/jquery-ui.min.js')}}"></script>
        <script src="{{URL::to('frontend/assets/js/plugins/swiper.min.js')}}"></script>
        <script src="{{URL::to('frontend/assets/js/plugins/countdown.js')}}"></script>
        <script src="{{URL::to('frontend/assets/js/plugins/scrollup.js')}}"></script>
        <script src="{{URL::to('frontend/assets/js/plugins/elevateZoom.js')}}"></script>

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <!-- <script src="assets/js/vendor/vendor.min.js"></script>
        <script src="assets/js/plugins/plugins.min.js"></script> -->

        <!-- Main Activation JS -->
        <script src="{{URL::to('frontend/assets/js/main.js')}}"></script>
    </body>

<!-- Mirrored from live.hasthemes.com/html/5/rozer-preview/rozer/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 05:15:28 GMT -->
</html>

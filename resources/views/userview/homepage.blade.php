@extends('layout')
@section('user_content')
    <div class="header-menu  d-xl-block d-none bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 custom-col-3">
                    <div class="header-menu-vertical bg-blue">
                        <h4 class="menu-title be-af-none">All Cattegories</h4>
                        <ul class="menu-content display-block">
                            <?php
                            $all_category_info=DB::table('tbl_category')->get();
                            foreach($all_category_info as $v_category)
                            {
                                if( $v_category->parent_id==''){?>
                                    <li class="menu-item">
                                        <a href="#">{{ $v_category->name }} <i class="ion-ios-arrow-right"></i></a>
                                    <?php
                                    $now_cat=$v_category->name;
                                    $all_sub_cat = DB::table('tbl_category')
                                                    ->where('parent_id', $now_cat)
                                                    ->get();
                                    foreach($all_sub_cat as $v_cat){?>
                                        <ul class="sub-menu flex-wrap">
                                            <li>
                                                <ul class="submenu-item">
                                                    <li><a href="#">{{ $v_cat -> name }}</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    <?php
                                    }?>
                                    </li><?php
                                }
                            }?>
                                    
                                    <!-- <li>
                                        <img src="{{URL::to('frontend/assets/images/menu-image/banner-mega1.jpg')}}" alt="" />
                                    </li> --> 
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
                                <?php 
                                    $all_slider_info=DB::table('sliders')->get();
                                    foreach($all_slider_info as $v_slider)
                                    {
                                        if($v_slider->status==1 && $v_slider->place==1 ){
                                ?>

                                <div class="swiper-slide bg-img d-flex" style="background-image: url({{ $v_slider->image }});">
                                    <div class="container align-self-center">
                                        <div class="slider-content-1 slider-animated-1 text-left pl-60px">
                                            <span class="animated color-white">GALAXY WATCH</span>
                                            <h1 class="animated color-white">
                                                Pre-Order <br />
                                                <strong>Exclusive</strong>
                                            </h1>
                                            <a href="{{URL::to('/shop')}}" class="shop-btn animated">SHOP NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <?php }} ?>
                                
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
                        <?php
                            foreach($all_slider_info as $v_slider)
                            {
                                if($v_slider->status==1 && $v_slider->place==2 ){
                        ?>
                            <a href="{{URL::to('/shop')}}"><img src="{{ $v_slider-> image}}" alt="" style="width: 345px; height: 200px;" /></a>
                        <?php } ?>
                        </div>
                        <div class="banner-wrapper">
                        <?php
                                if($v_slider->status==1 && $v_slider->place==3 ){
                        ?>
                            <a href="{{URL::to('/shop')}}"><img src="{{ $v_slider-> image}}" alt="" style="width: 345px; height: 200px;" /></a>
                        <?php }} ?>
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
                                    <?php 
                                    $all_category_info=DB::table('tbl_category')->get();
                                    foreach($all_category_info as $v_category)
                                    {
                                        if( $v_category->parent_id==''){
                                ?>
                                                <option value="12">{{$v_category->name}}</option>
                                            <?php
                                            foreach($all_category_info as $v_sub_cat){
                                                if( $v_sub_cat->parent_id==$v_category->name){?>
                                                    <option value="13">- - {{ $v_sub_cat-> name}}</option>
                                            <?php }
                                        }?>
                                                
                                    <?php }
                                }?>
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
                                <?php 
                                    $all_category_info=DB::table('tbl_category')->get();
                                    foreach($all_category_info as $v_category)
                                    {
                                        if( $v_category->parent_id==''){
                                ?>
                                <li class="menu-item-has-children menu-item-has-children-6">
                                    <a href="#">{{ $v_category->name }}<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <?php 
                                    foreach($all_category_info as $v_sub_cat){
                                        if( $v_sub_cat->parent_id==$v_category->name){?>
                                    <ul class="category-mega-menu category-mega-menu-6">
                                        <li><a href="#">{{ $v_sub_cat -> name}}</a></li>
                                    </ul>
                                <?php }} ?>
                                </li>
                                                
                                <?php }
                                }?>
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
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-list.html">Shop List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Shop Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Shop Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Shop Slider</a></li>
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
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
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
                        <?php 
                            foreach ($all_category_info as $key => $v_category) {
                                if($v_category->parent_id==''){
                        ?>
                        <div class="category-slider-item swiper-slide">
                            <div class="category-slider-bg ">
                                <div class="thumb-category">
                                    <a href="single-product.html">
                                        <img src="{{$v_category->image}}" alt="product-image.jpg" />
                                    </a>
                                </div>
                                <div class="category-discript">
                                    <h4>{{ $v_category->name}}</h4>
                                </div>
                            </div>
                        </div>
                    <?php }}?>
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
                        <?php
                            $all_product=DB::table('product')
                                        ->join('tbl_category','product.category_id', '=', 'tbl_category.id')
                                        ->join('tbl_brands','product.brand_id', '=', 'tbl_brands.id')
                                        ->select('product.*', 'tbl_brands.*')
                                        ->get();
                            foreach ($all_product as $v_f_product) {           
                        ?>
                        <div class="feature-slider-item swiper-slide">    
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img class="first-img" src="{{ $v_f_product-> cover_photo }}" alt=""/>
                                    </a>
                                    <div class="quick-view">
                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal"></a>
                                    </div>
                                </div>
                                <ul class="product-flag">
                                    <li class="new">New</li>
                                </ul>
                                <div class="product-decs">
                                    <a class="inner-link" href="shop-4-column.html"><span>{{ $v_f_product->name }}</span></a>
                                    <h2><a href="single-product.html" class="product-link">{{ $v_f_product->title }}</a></h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                        <ul>
                                            <li class="old-price not-cut">{{ $v_f_product-> sell_price}} BDT</li>
                                        </ul>
                                </div>
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="{{URL::to('/view_product/'.$v_f_product->id)}}"><button type="button" class="btn btn-primary">ADD TO CART</button></a></li>
                                        <li>
                                            <a href="wishlist.html"><button type="button" class="btn btn-primary"><i class="icon-heart"></i></button></a>
                                        </li>
                                    </ul>
                            </article>
                        </div>
                        <?php
                            }
                        ?>
                        
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
                                                    <a href="{{URL::to('/product')}}" class="thumbnail">
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
                    <!-- 3rd tab start -->
                    <div id="tab-3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
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

        <!-- Brand area start -->
        <div class="brand-area mb-60px">
            <div class="container">
                <div class="brand-slider slider-nav-style-1  slider-nav-style-2">
                    <div class="brand-slider-wrapper swiper-wrapper">
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="{{URL::to('frontend/assets/images/brand-logo/1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="{{URL::to('frontend/assets/images/brand-logo/2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="{{URL::to('frontend/assets/images/brand-logo/3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="{{URL::to('frontend/assets/images/brand-logo/4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="{{URL::to('frontend/assets/images/brand-logo/5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="{{URL::to('frontend/assets/images/brand-logo/1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="brand-slider-item swiper-slide">
                            <a href="#"><img src="{{URL::to('frontend/assets/images/brand-logo/2.jpg')}}" alt="" /></a>
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
        
@endsection
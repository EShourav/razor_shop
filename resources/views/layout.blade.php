<!DOCTYPE html>
<html class="no-js" lang="en">
    
<!-- Mirrored from live.hasthemes.com/html/5/rozer-preview/rozer/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Mar 2021 05:15:18 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>TechDen - Be Smart With Gadgets!</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon/favicon-2.png')}}" />
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
                            <p>Welcome you to Tech Den Store!
                            </p>
                        </div>
                        <div class="header-menu-nav">
                            <ul class="menu-nav">
                                <li>
                                    <div class="dropdown">
                                        <?php
                                        $user_id=Session::get('user_id');
                                        if($user_id!=NULL){ ?>
                                        <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Setting <i class="ion-ios-arrow-down"></i></button>
                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                        
                                            <li><a href="{{URL::to('/user_account/'.$user_id)}}">Account</a></li>
                                            <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                                            <li><a href="{{URL::to('/logout')}}">Log Out</a></li>
                                        
                                        </ul><?php }
                                        else{?>
                                            <button  type="button" id="dropdownMenuButton"><a href="{{URL::to('/login')}}" class="button">Sign In</a></button>
                                        <?php } ?>
                                    </div>
                                </li>
                                <!-- <li>
                                    <div class="dropdown">
                                        <button type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD $ <i class="ion-ios-arrow-down"></i></button>

                                        <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-2">
                                            <li><a href="#">EUR €</a></li>
                                            <li><a href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </li> -->
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
                                                <a href="#"><img src="{{URL::to('frontend/assets/images/flag/3.jpg')}}" alt="" /> Bangla</a>
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
                                <a href="{{URL::to('/')}}"><img class="img-responsive" src="{{URL::to('frontend/assets/images/logo/techdenlogo.png')}}" alt="logo.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-md-9 align-self-center">
                            <div class="header-right-element d-flex">
                                <div class="search-element media-body mr-120px">
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
                                        <button><i class="icon-magnifier" style="background-color: #8bc53f"></i></button>
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
            @yield('user_content')
            <!-- Footer Area Start -->
        <div class="footer-area" style="background-color: #8bc53f">
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
                                <p class="copy-text">Copyright © <a href="https://projanmoit.com/"> ProjanmoIT</a>. All Rights Reserved</p>
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
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/11.jpg')}}" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/12.jpg')}}" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/13.jpg')}}" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/14.jpg')}}" alt="">
                                          </div>
                                        </div>
                                  </div>
                                  <div class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/11.jpg')}}" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/12.jpg')}}" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/13.jpg')}}" alt="">
                                          </div>
                                          <div class="swiper-slide"> 
                                                <img class="img-responsive m-auto" src="{{URL::to('frontend/assets/images/product-image/14.jpg')}}" alt="">
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

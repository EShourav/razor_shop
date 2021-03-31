@extends('layout')
@section('user_content')
<div class="offcanvas-overlay"></div>
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-content">
                    <ul class="nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Products by category</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End-->
<!-- Shop Category Area End -->

<div class="shop-category-area mt-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                            <!-- Shop Top Area Start -->
                <div class="shop-top-bar d-flex">
                    <!-- Left Side start -->
                    <div class="shop-tab nav d-flex">
                        <a class="active" href="#shop-1" data-toggle="tab">
                            <i class="fa fa-th"></i>
                        </a>
                        <p>There Are 17 Products.</p>
                    </div>
                    <!-- Left Side End -->
                    <!-- Right Side Start -->
                    <div class="select-shoing-wrap d-flex">
                        <div class="shot-product">
                            <p>Sort By:</p>
                        </div>
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div>
                    </div>
                    <!-- Right Side End -->
                </div>
                <!-- Shop Top Area End -->

                <!-- Shop Bottom Area Start -->
                <div class="shop-bottom-area mt-35">
                    <!-- Shop Tab Content Start -->
                    <div class="tab-content jump">
                        <!-- Tab One Start -->
                        <div id="shop-1" class="tab-pane active">
                            <div class="row responsive-md-class responsive-xl-class responsive-lg-class">
                            	<?php
										foreach ($productByCategory as $v_probycat) {
								?>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="{{URL::to($v_probycat->cover_photo)}}" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>{{$v_probycat->title}}</span></a>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">{{$v_probycat->sell_price}} BDT</li>
                                                </ul>
                                            </div>
                                        </div>
                                            <ul>
                                                <li class="cart"><button type="button" class="btn btn-light"><a class="cart-btn" href="#">ADD TO CART </a></button></li>
                                                <li><button type="button" class="btn btn-light">
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a></button>
                                                </li>
                                            </ul>
                                        
                                    </article>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <!-- Tab One End -->                
                    </div>
                    <!-- Shop Tab Content End -->
                    <!--  Pagination Area Start -->
                    <div class="pro-pagination-style text-center mb-60px mt-30px">
                        <ul>
                            <li>
                                <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                            </li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--  Pagination Area End -->
                </div>
                <!-- Shop Bottom Area End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                <div class="shop-sidebar-wrap">
                	<?php foreach ($productByCategory as $v_productByCategory) {
                		$cat_id=$v_productByCategory->category_id;
                	}
                		$all_cat_info=DB::table('tbl_category')
                						->where('id',$cat_id)
                						->get();
                		foreach ($all_cat_info as $v_cat) {
                	?>

                    <div class="sidebar-widget padding-30px bg-light-gray-2 mb-30px">

                        <h3 class="sidebar-title">{{$v_cat->parent_id}}</h3>
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                            	<?php
                            		$all_info=DB::table('tbl_category')
                            				->get();
                            		foreach ($all_info as $v_sub_cat) {
                            			if($v_sub_cat->parent_id==$v_cat->parent_id){
                            	?>
                            	<div class="card-body">
                                    <ul class="category-list">
        	                            <li><a href="#">{{$v_sub_cat->name}}</a></li>
									</ul>
                                </div>                   
                            <?php }} ?>
                            </div> <!-- card -->
                        </div>
                    </div>
                <?php } ?>
                    <!-- Sidebar single item -->
                    <div class="sidebar-widget-group mt-20 padding-30px">
                        <h3 class="sidebar-title">Filter By</h3>
                        <div class="sidebar-widget mt-20">
                            <h4 class="pro-sidebar-title">Price</h4>
                            <div class="price-filter mt-10">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget mt-30">
                            <h4 class="pro-sidebar-title">Brand</h4>
                            <div class="sidebar-widget-list">
                            	<?php foreach ($productByCategory as $v_productByCategory) {
		                		$cat_id=$v_productByCategory->category_id;
		                	}
		                		$all_brand_info=DB::table('tbl_brands')
		                						->join('product','product.brand_id','=','tbl_brands.id')
		                						->select('tbl_brands.*')
		                						->distinct()
		                						->where('product.category_id',$cat_id)
		                						->get();
		                		foreach ($all_brand_info as $v_brand) {
		                	?>
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" /> <a href="#">{{$v_brand->name}}</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                                <?php } ?>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Category Area End -->
@endsection
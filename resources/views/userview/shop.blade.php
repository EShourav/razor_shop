@extends('layout')
@section('user_content')

<div class="shop-category-area mt-30px">
	<div class="container">
	    <div class="row">
	        <div class="col-lg-12 col-md-12">
	            <!-- Shop Top Area Start -->
	            <div class="shop-top-bar d-flex">
	                <!-- Left Side start -->
	                <div class="shop-tab nav d-flex">
	                    <a class="active" href="#shop-1" data-toggle="tab">
	                        <i class="fa fa-th"></i>
	                    </a>
	                    <p>There Are Various Products.</p>
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
                            <div class="row responsive-md-class">
                            	<?php 
                            		foreach ($all_products as $v_products) {
                            	?>
                                <div class="col-xl-3 col-md-4 col-sm-6 ">
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="{{URL::to('/view_product/'.$v_products->id)}}" class="thumbnail">
                                                <img class="first-img" src="{{ $v_products->cover_photo }}" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-decs">
                                            <a class="inner-link" href="{{URL::to('/view_product/'.$v_products->id)}}"><span>{{ $v_products->title}}</span></a>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                                <ul>
                                                    <li class="old-price not-cut"><strong>{{ $v_products->sell_price}} BDT</strong></li>
                                                </ul>
                                            
                                        </div>
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="{{URL::to('/view_product/'.$v_products->id)}}"><button type="button" class="btn btn-primary">ADD TO CART</button> </a></li>
                                                <li>
                                                    <a href="wishlist.html"><button type="button" class="btn btn-primary"> <i class="icon-heart"></button></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><button type="button" class="btn btn-primary"><i class="icon-shuffle"></i></button></a>
                                                </li>
                                            </ul>
                                    </article>
                                </div>
                            <?php
                        		}
                            ?>
                            </div>
                        </div>
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
			</div>
		</div>
	</div>
</div>


@endsection
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
                                <li>Login / Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
            <!-- login area start -->
            <div class="login-register-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4>login</h4>
                                    </a>
                                    <a data-toggle="tab" href="#lg2">
                                        <h4>register</h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                <?php
									$message=Session::get('message');
									if($message)
									{
										echo $message;
										Session::put('message',null);
									}
								?>
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form action="{{URL::to('/sign_in')}}" method="post">
                                                	{{ csrf_field() }}
                                                    <input type="email" name="user_email" placeholder="Email" />
                                                    <input type="password" name="user_password" placeholder="Password" />
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox" />
                                                            <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                            <a href="#">Forgot Password?</a>
                                                        </div>
                                                        <button type="submit"><span>Login</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form action="{{URL::to('/register')}}" method="post" enctype="multipart/form-data">
                                                	{{csrf_field()}}
                                                    <input type="text" name="user_name" placeholder="Name" />
                                                    <input type="email" name="user_email" placeholder="Email" />
                                                    <input type="text" name="user_phone" placeholder="Phone Number" />
                                                    <input type="text" name="user_address" placeholder="Address" />
                                                    <input type="password" name="user_password" placeholder="Password" />
                                                    <input type="password" name="user_password_confirmed" placeholder="Confirm Password" />

                                                    <input type="file" name="user_image" placeholder="Image" />
                                                    <div class="button-box">
                                                        <button type="submit"><span>Register</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login area end -->

@endsection
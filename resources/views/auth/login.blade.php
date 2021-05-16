@extends('layouts.app')

@section('page-content')
<section id="contact">

    <img class="login-detail-left" src="assets/images/login-detail-left.png">

    <img class="login-detail-right" src="assets/images/login-detail-right.png">

    <div id="register" class="background-wrapper">

        <div class="login register-outer-box">

            <div class="contact-box d-flex">

                <div id="register-page-left" class="register-left-box">

                    <h3 id="register-first-h" class="text-center">If you think it’s expensive to hire a professional, wait until you hire and amateur</h3>

                    <ul class="d-flex flex-column link-boxes nav nav-tabs">

                        <li class=" links nav-item">

                            <a class="nav-link active" data-toggle="tab" href="#login" id="login-tab-btn">Login</a>

                        </li>

                        <li class="links nav-item">

                            <a class="nav-link" data-toggle="tab" href="#signup" id="signup-tab-btn">Sign up</a>

                        </li>

                    </ul>

                    <h3 id="register-second-h" class="text-center">Time spent on hiring, is time well spent</h3>

                </div>

                <div class="register-right-box d-flex tab-content">

                    <div id="login" class="container tab-pane active">

                        <h2 class="text-center">Welcome <strong>Back</strong></h2>

                        <div class="register-notice" style="color: red;">

                            <!-- Notice wrapper -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>

                        <form action="{{ route('login') }}" class="text-center login-form d-flex flex-column align-items-center uwp-login-form" method="post">
                            {{ csrf_field() }}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <br>
                            <input class="w-100 mb-3" id="email" type="email" placeholder="Email*" name="email" value="{{ old('email') }}" required autofocus>
                            
                            <input class="w-100" type="password" id="password" placeholder="Password*" name="password" required autocomplete="current-password">
                            
                            <div class="uwp-footer-link uwp-forgotpsw mt-3 pl-3 align-self-start">
                            @if (Route::has('password.request'))
                                <a rel="nofollow" href="{{ route('password.request') }}">

                                    Forgot password?

                                </a>
                            @endif
                            </div>

                            <input type="submit" name="uwp_login_submit" value="Log in">
                        </form><br>
                        <h5 class="text-center">Or</h5>
                        <div class="row">
                            <div class="col-md-6 input-icon">
                                
                                <button class="btn btn-success btn-lg btn-block"><div style="background-color: white;float:left;width:8%;height:auto;"><img src={{ url('assets/images/google.png') }}></div>Continue with Google</button>
                            </div>
                            <div class="col-md-6 input-icon">
                                <i class="fab fa-facebook-f"></i>
                                <button class="btn btn-primary btn-lg btn-block">Continue with facebook</button>
                            </div>
                        </div>

                    </div>



                    <div id="signup" class="container tab-pane fade">

                        <div class="container">

                            <h2 class="text-center">Create an <strong>Account</strong></h2>

                            <div class="register-notice" style="color: red;">

                                <!-- Notices weapper -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            </div>


                            <div class="d-flex nav mt-0">

                                <ul class="nav nav-tabs d-flex w-100 justify-content-around" id="registrationAccount">

                                    <li class="nav-item">

                                        <a href="#individual" class="nav-link py-2" data-toggle="tab">Individual</a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#business" class="nav-link py-2" data-toggle="tab">Business</a>

                                    </li>

                                </ul>

                            </div>

                            <div class="pl-sm-0 h-100 input-box pb-lg-0 pb-3 tab-content">

                                <div class="tab-pane fade" id="individual">

                                    <form class="text-center register-form" id="myform" action="{{ route('register') }}" method="post">
                                            {{ csrf_field() }}
                                            <input class="w-100 mb-3" type="hidden" name="user_type" value="individual" required>

                                        <input class="w-100 mb-3" type="name" placeholder="Full Name*" name="name" value="{{ old('name') }}" required>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <input class="w-100 mb-3" type="text" placeholder="Surname*" name="surname" value="{{ old('surname') }}" required>
                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <input class="w-100 mb-3" type="email" placeholder="Email*" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <div class="position-relative">
                                            <input class="w-100" type="password" placeholder="Password*" name="password" id="passwordInput" required>
                                            <label class="show-pass-btn"><i class="fas fa-eye"></i><input type="checkbox" onclick="showPassword()"></label>
                                            <p id="password-strength-text" class="mb-1 mt-3 text-left"></p>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        <div class="position-relative">
                                            <input class="w-100" type="password" placeholder="Password Confirm*" name="password_confirmation" id="passwordInput" required>
                                            <label class="show-pass-btn"><i class="fas fa-eye"></i><input type="checkbox" onclick="showPassword()"></label>
                                            <p id="password-strength-text" class="mb-1 mt-3 text-left"></p>
                                            <meter max="4" id="password-strength-meter"></meter>
                                        </div>

                                        <input class="w-100 mb-3" type="text" placeholder="Username*" name="username_instead" required>

                                        <div class="d-flex reg-checkboxes">

                                            <input type="checkbox" name="username-instead">

                                            <label for="username-instead">Show this username instead of name next to the review</label>

                                        </div>

                                        <div class="d-flex reg-checkboxes">

                                            <input type="checkbox" name="recieve-news">

                                            <label for="recieve-news">Recieve news by email</label>

                                        </div>
                                        <button type="submit" class="acc-setting-save">Save</button>
                                        <!-- <button type="submit">submit</button> -->
                                            <!-- <a href="" type="submit" id="mylink"   class="signup-next-button">Next</a> -->

                                    </form><br>
                                    <h5 class="text-center">Or</h5>
                                    <div class="row">
                                        <div class="col-md-6 input-icon">
                                            
                                            <button class="btn btn-success btn-lg btn-block"><div style="background-color: white;float:left;width:8%;height:auto;"><img src={{ url('assets/images/google.png') }}></div>Continue with Google</button>
                                        </div>
                                        <div class="col-md-6 input-icon">
                                            <i class="fab fa-facebook-f"></i>
                                            <button class="btn btn-primary btn-lg btn-block">Continue with facebook</button>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="business">

                                    <form class="text-center register-form" action="{{ route('register') }}" method="post">
                                    {{ csrf_field() }}
                                            <input class="w-100 mb-3" type="hidden" name="user_type" value="business" required>
                                        <input class="w-100 mb-3" type="name" placeholder="Name*" name="name" required>

                                        <input class="w-100 mb-3" type="text" placeholder="Company name*" name="company_name" required>

                                        <input class="w-100 mb-3" type="text" placeholder="Position in Company*" name="position_in_company" required>

                                        <input class="w-100 mb-3" type="email" placeholder="Email*" name="email" required>

                                        <div class="position-relative w-100">
                                            <input class="w-100" type="password" placeholder="Password*" name="password" id="passwordInput" required>
                                            <label class="show-pass-btn"><i class="fas fa-eye"></i><input type="checkbox" onclick="showPassword()"></label>
                                            <p id="password-strength-text" class="mb-1 mt-3 text-left"></p>
                                        </div>
                                        
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        <div class="position-relative">
                                            <input class="w-100" type="password" placeholder="Password Confirm*" name="password_confirmation" id="passwordInput" required>
                                            <label class="show-pass-btn"><i class="fas fa-eye"></i><input type="checkbox" onclick="showPassword()"></label>
                                            <p id="password-strength-text" class="mb-1 mt-3 text-left"></p>
                                            <meter max="4" id="password-strength-meter"></meter>
                                        </div>

                                        <div class="d-flex reg-checkboxes w-100">

                                            <input type="checkbox" name="recieve_news">

                                            <label for="recieve-news">Recieve news by email</label>

                                        </div>

                                        <input name="register" value="Register" type="submit">

                                    </form><br>
                                    <h5 class="text-center">Or</h5>
                                    <div class="row">
                                        <div class="col-md-6 input-icon">
                                            
                                            <button class="btn btn-success btn-lg btn-block"><div style="background-color: white;float:left;width:8%;height:auto;"><img src={{ url('assets/images/google.png') }}></div>Continue with Google</button>
                                        </div>
                                        <div class="col-md-6 input-icon">
                                            <i class="fab fa-facebook-f"></i>
                                            <button class="btn btn-primary btn-lg btn-block">Continue with facebook</button>
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
@endsection
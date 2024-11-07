@extends('frontend.layouts.master')
@section('content')
<section class="fp__breadcrumb" style="background: url({{ config('settings.breadcrumb') }});">
    <div class="fp__breadcrumb_overlay">
        <div class="container">
            <div class="fp__breadcrumb_text">
                <h1>sign up</h1>
                <ul>
                    <li><a href="{{ url('/') }}">home</a></li>
                    <li><a href="javascript:;">sign up</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="fp__signup" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
    <div class="fp__signup_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                    <div class="fp__login_area">
                        <h2>Welcome!</h2>

                        <!-- Display errors or success messages -->
                        @if (session('error') || session('success'))
                        <div>{{ session('error') ?? session('success') }}</div>
                        @endif
                        <p>Sign up to continue</p>
                        <form action="{{ route('register.send') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter name"
                                            value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Enter email"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>Confirm Password</label>
                                        <input type="password" placeholder="Enter confirm password"
                                            name="password_confirmation">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <button type="submit" class="common_btn">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>or</span></p>
                        <ul class="d-flex">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                        </ul>
                        <p class="create_account">Already have an account? <a href="{{ route('login') }}">Login</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

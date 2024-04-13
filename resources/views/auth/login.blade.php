@extends('website.layouts.app')
@section('styles')

@endsection
@section('content')

    <div class="page-content bg-light">
                <section class="px-3">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 start-side-content">
                            <div class="dz-bnr-inr-entry">
                                <h1>My Account</h1>
                                <nav aria-label="breadcrumb text-align-start" class="breadcrumb-row">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}"> Home</a></li>
                                        <li class="breadcrumb-item">My Account</li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="registration-media">
                                <img src="{{ asset('assets/images/registration/pic3.png') }}" alt="/">
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content">
                            <div class="login-area">
                                <h2 class="text-secondary text-center">Welcome Back</h2>
                                <p class="text-center m-b25">welcome please login to your account</p>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="m-b30">
                                        <label class="label-title">Email Address</label>
                                        <input type="text"  class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <span>{{ $message }}</span>
                                            </span>
                                            @enderror
                                    </div>
                                    <div class="m-b15">
                                        <label class="label-title">Password</label>
                                        <div class="secure-input ">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                            <div class="show-pass">
                                                <i class="eye-open fa-regular fa-eye"></i>
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <span>{{ $message }}</span>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row d-flex justify-content-between m-b30">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a class="text-primary" href="javascript:void(0);">Forgot Password</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                    <button type="submit" class="btn btn-secondary btnhover text-uppercase me-2">Sign in </button>

                                        <a href=""
                                            class="btn btn-outline-secondary btnhover text-uppercase">Register</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY MIN JS -->
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{ asset('assets/vendor/bootstrap-touchspin/bootstrap-touchspin.js') }}"></script><!-- BOOTSTRAP TOUCHSPIN JS -->

<script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- SWIPER JS -->
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED-->
<script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script><!-- ISOTOPE -->
<script src="{{ asset('assets/vendor/countdown/jquery.countdown.js') }}"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="{{ asset('assets/vendor/wnumb/wNumb.js') }}"></script><!-- WNUMB -->
<script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script><!-- NOUSLIDER MIN JS-->
<script src="{{ asset('assets/js/dz.carousel.js') }}"></script><!-- DZ CAROUSEL JS -->
<script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- AJAX -->
<script src="{{ asset('assets/js/custom.js') }}"></script><!-- Custom -->
@endsection

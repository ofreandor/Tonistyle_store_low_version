<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Tonistyle Store & Ecommerce</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightgallery/dist/css/lightgallery.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-thumbnail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/lightgallery/dist/css/lg-zoom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" type="text/css" rel="stylesheet" href="{{ asset('assets/css/skin/skin-1.css') }}">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""> -->
    <link href="../css2?family=DM+Sans:wght@400;500;700&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

        @yield('styles')


</head>

<body>

    <style>



        .dropdown-menu {
            transition: opacity 0.5s ease, transform 0.5s ease;
            display: none;
            opacity: 0;
            transform: translateY(-10px);
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* Proper alignment and borders */
        .dropdown-menu {
            margin-top: 0;
        }

        .dropdown-divider {
            margin: 0.5rem 0;
            border-top: 1px solid rgba(0, 0, 0, 0.15);
        }
        .dropdown-item{
            height:20px;
            text-align:left;
            padding-top:5px;
            margin-top:9px;
        }
    </style>

    <div class="page-wraper">
        {{-- <div id="loading-area" class="preloader-wrapper-2">
            <div class="loader"></div>
        </div> --}}

        <!-- Header -->
        <header class="site-header mo-left header style-2">
            <!-- Main Header -->
            <div class="header-info-bar">
                <div class="container clearfix">

                    <div class="logo-header logo-dark">
                        <a href=""><img src="{{ asset('assets/logo/logo1.svg') }}" alt="logo"></a>
                    </div>

                    <!-- EXTRA NAV -->
                    <div class="extra-nav d-md-flex d-none m-l15">
                        <div class="extra-cell">
                            <ul class="navbar-nav header-right m-0">
                                <li class="nav-item info-box ">
                                    <div class="nav-link">
                                        <div class="dz-icon">

                                        </div>
                                        <div class="info-content">
                                            <span>24/7 SUPPORT</span>
                                            <h6 class="title mb-0">+123 456 789</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- header search nav -->
                    <div class="header-search-nav">
                        <form class="header-item-search">
                            <div class="input-group search-input">
                                <select class="default-select">
                                    <option>All Categories</option>
                                    <option>Photography </option>
                                    <option>Arts</option>
                                    <option>Adventure</option>
                                    <option>Action</option>
                                    <option>Games</option>
                                    <option>Movies</option>
                                    <option>Comics</option>
                                    <option>Biographies</option>
                                    <option>Children’s Books</option>
                                    <option>Historical</option>
                                    <option>Contemporary</option>
                                    <option>Classics</option>
                                    <option>Education</option>
                                </select>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    placeholder="Search for products">
                                <button class="btn" type="button">
                                    <i class="iconly-Light-Search text-secondary"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->

            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix">
                    <div class="container clearfix d-lg-flex d-block">
                        <!-- Website Logo -->
                        <div class="logo-header logo-dark">
                            <a href=""><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                            <div class="logo-header">
                                <a href=""><img src="{{ asset('assets/images/logo.svg') }}" alt=""></a>
                            </div>
                            <div class="browse-category-menu">
                                <a href="javascript:void(0);" class="category-btn">
                                    <div class="category-menu me-3">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <span class="category-btn-title">
                                        Browse Categories
                                    </span>
                                    <span class="toggle-arrow ms-auto">
                                        <i class="icon feather icon-chevron-down"></i>
                                    </span>
                                </a>
                                <div class="category-menu-items" style="display: none;">
                                    <ul class="nav navbar-nav">
                                        <li class="has-mega-menu cate-drop">
                                            <a href="javascript:void(0);">
                                                <i class="icon feather icon-arrow-right"></i>
                                                <span>Clothes</span>

                                            </a>

                                        </li>
                                        <li class="cate-drop">
                                            <a href="javascript:void(0);">
                                                <i class="icon feather icon-arrow-right"></i>
                                                <span>UrbanSkirt</span>

                                            </a>

                                        </li>

                                        <li>
                                            <a href="">
                                                <i class="icon feather icon-arrow-right"></i>
                                                <span>VelvetGown</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                            <ul class="nav navbar-nav dark-nav">
                                <li class="has-mega-menu sub-menu-down">
                                    <a href=""><span>Home</span><i class="fas fa-chevron-down tabindex"></i></a>


                                </li>
                                <li class="has-mega-menu sub-menu-down">
                                    <a href="javascript:void(0);"><span>Shop</span><i
                                            class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                                <li class="has-mega-menu sub-menu-down"><a
                                        href="javascript:void(0);"><span>Fashion</span><i
                                            class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                                <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Seasonal
                                            Deals</span><i class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                                <li class="has-mega-menu sub-menu-down"><a href="javascript:void(0);"><span>Gift
                                            Card</span><i class="fas fa-chevron-down tabindex"></i></a>

                                </li>
                            </ul>

                        </div>

                        <!-- EXTRA NAV -->
                        <div class="extra-nav">
                            <div class="extra-cell">
                                <ul class="header-right">
                                    <li class="nav-item login-link">
                                        <a class="nav-link" href="{{ route('login') }}">
                                            Login / Register
                                        </a>
                                    </li>


                                    @auth
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                My Account
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="">Dashboard</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="">Orders</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="">Cart</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="">Account Settings</a>
                                                <div class="dropdown-divider"></div>
                                                <form method="POST" action="">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">Logout</button>
                                                </form>
                                            </div>
                                        </li>
                                    @endauth




                                    <li class="nav-item wishlist-link">
                                        <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            <i class="iconly-Light-Heart2"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item cart-link">
                                        <a href="javascript:void(0);" class="nav-link cart-btn"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                            aria-controls="offcanvasRight">
                                            <i class="iconly-Broken-Buy"></i>
                                            <span class="badge badge-circle">5</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main Header End -->

            <!-- SearchBar -->
            <div class="dz-search-area dz-offcanvas offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    &times;
                </button>
                <div class="container">
                    <form class="header-item-search">
                        <div class="input-group search-input">
                            <select class="default-select">
                                <option>All Categories</option>
                                <option>Clothes</option>
                                <option>UrbanSkirt</option>
                                <option>VelvetGown</option>
                                <option>LushShorts</option>
                                <option>Vintage</option>

                            </select>
                            <input type="search" class="form-control" placeholder="Search Product">
                            <button class="btn" type="button">
                                <i class="iconly-Light-Search"></i>
                            </button>
                        </div>
                        <ul class="recent-tag">
                            <li class="pe-0"><span>Quick Search :</span></li>
                            <li><a href="">Clothes</a></li>
                            <li><a href="">UrbanSkirt</a></li>
                            <li><a href="">VelvetGown</a></li>
                            <li><a href="">LushShorts</a></li>
                        </ul>
                    </form>
                    <div class="row">
                        <div class="col-xl-12">
                            <h5 class="mb-3">You May Also Like</h5>
                            <div class="swiper category-swiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/1.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">SilkBliss Dress</a></h6>
                                                <h6 class="price">$40.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/3.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">GlamPants</a></h6>
                                                <h6 class="price">$30.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/4.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">ComfyLeggings</a></h6>
                                                <h6 class="price">$35.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/2.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">ClassicCapri</a></h6>
                                                <h6 class="price">$20.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/5.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">DapperCoat</a></h6>
                                                <h6 class="price">$70.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/6.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">ComfyLeggings</a></h6>
                                                <h6 class="price">$45.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/7.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">DenimDream Jeans</a></h6>
                                                <h6 class="price">$40.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop-card">
                                            <div class="dz-media ">
                                                <img src="{{ asset('assets/images/shop/product/4.png') }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <h6 class="title"><a href="">SilkBliss Dress</a></h6>
                                                <h6 class="price">$60.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SearchBar -->

            <!-- Sidebar cart -->
            <div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    &times;
                </button>
                <div class="offcanvas-body">
                    <div class="product-description">
                        <div class="dz-tabs">
                            <ul class="nav nav-tabs center" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="shopping-cart" data-bs-toggle="tab"
                                        data-bs-target="#shopping-cart-pane" type="button" role="tab"
                                        aria-controls="shopping-cart-pane" aria-selected="true">Shopping Cart
                                        <span class="badge badge-light">5</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="wishlist" data-bs-toggle="tab"
                                        data-bs-target="#wishlist-pane" type="button" role="tab"
                                        aria-controls="wishlist-pane" aria-selected="false">Wishlist
                                        <span class="badge badge-light">2</span>
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-4" id="dz-shopcart-sidebar">
                                <div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel"
                                    aria-labelledby="shopping-cart" tabindex="0">
                                    <div class="shop-sidebar-cart">
                                        <ul class="sidebar-cart-list">
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="{{ asset('assets/images/shop/shop-cart/pic1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="">Sophisticated
                                                                Swagger Suit</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <div class="btn-quantity light quantity-sm me-3">
                                                                <input type="text" value="1" name="demo_vertical2">
                                                            </div>
                                                            <h6 class="dz-price mb-0">$50.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="{{ asset('assets/images/shop/shop-cart/pic2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="">Cozy Knit
                                                                Cardigan Sweater</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <div class="btn-quantity light quantity-sm me-3">
                                                                <input type="text" value="1" name="demo_vertical2">
                                                            </div>
                                                            <h6 class="dz-price mb-0">$40.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="{{ asset('assets/images/shop/shop-cart/pic3.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="">Athletic Mesh
                                                                Sports Leggings</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <div class="btn-quantity light quantity-sm me-3">
                                                                <input type="text" value="1" name="demo_vertical2">
                                                            </div>
                                                            <h6 class="dz-price  mb-0">$65.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="cart-total">
                                            <h5 class="mb-0">Subtotal:</h5>
                                            <h5 class="mb-0">300.00$</h5>
                                        </div>
                                        <div class="mt-auto">
                                            <div class="shipping-time">
                                                <div class="dz-icon">
                                                    <i class="flaticon flaticon-ship"></i>
                                                </div>
                                                <div class="shipping-content">
                                                    <h6 class="title pe-4">Congratulations , you've got free shipping!
                                                    </h6>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-animated border-0"
                                                            style="width: 75%;" role="progressbar">
                                                            <span class="sr-only">75% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href=""
                                                class="btn btn-outline-secondary btn-block m-b20">Checkout</a>
                                            <a href="" class="btn btn-secondary btn-block">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist"
                                    tabindex="0">
                                    <div class="shop-sidebar-cart">
                                        <ul class="sidebar-cart-list">
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="{{ asset('assets/images/shop/shop-cart/pic1.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="">Sophisticated
                                                                Swagger Suit</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="dz-price  mb-0">$50.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="{{ asset('assets/images/shop/shop-cart/pic2.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="">Cozy Knit
                                                                Cardigan Sweater</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="dz-price  mb-0">$40.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-widget">
                                                    <div class="dz-media me-3">
                                                        <img src="{{ asset('assets/images/shop/shop-cart/pic3.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="cart-content">
                                                        <h6 class="title"><a href="">Athletic Mesh
                                                                Sports Leggings</a></h6>
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="dz-price  mb-0">$65.00</h6>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="dz-close">
                                                        <i class="ti-close"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-auto">
                                            <a href="" class="btn btn-secondary btn-block">Check Your
                                                Favourite</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar cart -->

            <!-- Sidebar finter -->
            <div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasLeft">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    &times;
                </button>
                <div class="offcanvas-body">
                    <div class="product-description">
                        <div class="widget widget_search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dzSearch" required="required" type="search" class="form-control"
                                        placeholder="Search Product">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit" class="btn">
                                            <i class="icon feather icon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h6 class="widget-title">Price</h6>
                            <div class="price-slide range-slider">
                                <div class="price">
                                    <div class="range-slider style-1">
                                        <div id="slider-tooltips" class="mb-3"></div>
                                        <span class="example-val" id="slider-margin-value-min"></span>
                                        <span class="example-val" id="slider-margin-value-max"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h6 class="widget-title">Color</h6>
                            <div class="d-flex align-items-center flex-wrap color-filter ps-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1"
                                        value="#000000" aria-label="..." checked="">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2"
                                        value="#9BD1FF" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3"
                                        value="#21B290" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel4"
                                        value="#FEC4C4" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel5"
                                        value="#FF7354" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel6"
                                        value="#51EDC8" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel7"
                                        value="#B77CF3" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel8"
                                        value="#FF4A76" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel9"
                                        value="#3E68FF" aria-label="...">
                                    <span></span>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabe20"
                                        value="#7BEF68" aria-label="...">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h6 class="widget-title">Size</h6>
                            <div class="btn-group product-size">
                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio11" checked="">
                                <label class="btn" for="btnradio11">4</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio21">
                                <label class="btn" for="btnradio21">6</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio31">
                                <label class="btn" for="btnradio31">8</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio41">
                                <label class="btn" for="btnradio41">10</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio51">
                                <label class="btn" for="btnradio51">12</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio61">
                                <label class="btn" for="btnradio61">14</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio71">
                                <label class="btn" for="btnradio71">16</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio81">
                                <label class="btn" for="btnradio81">18</label>

                                <input type="radio" class="btn-check" name="btnradio1" id="btnradio91">
                                <label class="btn" for="btnradio91">20</label>
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h6 class="widget-title">Category</h6>
                            <ul>
                                <li class="cat-item cat-item-26"><a href="">Dresses</a> (10)</li>
                                <li class="cat-item cat-item-36"><a href="">Top &amp; Blouses</a> (5)
                                </li>
                                <li class="cat-item cat-item-43"><a href="">Boots</a> (17)</li>
                                <li class="cat-item cat-item-27"><a href="">Jewelry</a> (13)</li>
                                <li class="cat-item cat-item-40"><a href="">Makeup</a> (06)</li>
                                <li class="cat-item cat-item-40"><a href="">Fragrances</a> (17)</li>
                                <li class="cat-item cat-item-40"><a href="">Shaving &amp; Grooming</a>
                                    (13)</li>
                                <li class="cat-item cat-item-43"><a href="">Jacket</a> (06)</li>
                                <li class="cat-item cat-item-36"><a href="">Coat</a> (22)</li>
                            </ul>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h6 class="widget-title">Tags</h6>
                            <div class="tagcloud">
                                <a href="">Vintage </a>
                                <a href="">Wedding</a>
                                <a href="">Cotton</a>
                                <a href="">Linen</a>
                                <a href="">Navy</a>
                                <a href="">Urban</a>
                                <a href="">Business Meeting</a>
                                <a href="">Formal</a>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-sm font-14 btn-secondary btn-sharp">RESET</a>
                    </div>
                </div>
            </div>
            <!-- filter sidebar -->
        </header>
        <!-- Header End -->

        <div class="page-content bg-light overflow-hidden">

            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="site-footer bg-light">
            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="widget widget_about me-2">
                                <div class="footer-logo logo-dark">
                                    <a href=""><img src="images/logo.svg" alt=""></a>
                                </div>
                                <ul class="widget-address">
                                    <li>
                                        <p><span>Address</span> : Block 43 B Army Estate Sepele Road Warri Delta State</p>
                                    </li>
                                    <li>
                                        <p><span>E-mail</span> : info@tonistylestore.com</p>
                                    </li>
                                    <li>
                                        <p><span>Phone</span> : (+234) 70 144 19922</p>
                                    </li>
                                </ul>
                                <div class="subscribe_widget">
                                    <h6 class="title fw-medium text-capitalize">subscribe to our newsletter</h6>
                                    <form class="dzSubscribe style-1">
                                        <div class="dzSubscribeMsg"></div>
                                        <div class="form-group">
                                            <div class="input-group mb-0">
                                                <input name="dzEmail" required="required" type="email"
                                                    class="form-control" placeholder="Your Email Address">
                                                <div class="input-group-addon">
                                                    <button name="submit" value="Submit" type="submit" class="btn">
                                                        <i class="icon feather icon-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="widget widget_post">
                                <h5 class="footer-title mx-2">Recent Posts</h5>
                                <ul>
                                    <li>
                                        <div class="dz-media">
                                            <img src="images/shop/product/small/1.png" alt="">
                                        </div>
                                        <div class="dz-content">
                                            <h6 class="name"><a href="">Cozy Knit Cardigan Sweater</a>
                                            </h6>
                                            <span class="time">July 23, 2023</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dz-media">
                                            <img src="images/shop/product/small/2.png" alt="">
                                        </div>
                                        <div class="dz-content">
                                            <h6 class="name"><a href="">Sophisticated Swagger Suit</a>
                                            </h6>
                                            <span class="time">July 23, 2023</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dz-media">
                                            <img src="images/shop/product/small/3.png" alt="">
                                        </div>
                                        <div class="dz-content">
                                            <h6 class="name"><a href="">Athletic Mesh Sports
                                                    Leggings</a></h6>
                                            <span class="time">July 23, 2023</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Categories</h5>
                                <ul>
                                    <li><a href="javascript:void(0);">Women</a></li>
                                    <li><a href="javascript:void(0);">Men</a></li>
                                    <li><a href="javascript:void(0);">Children</a></li>
                                    <li><a href="javascript:void(0);">Shoes</a></li>
                                    <li><a href="javascript:void(0);">Watches</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">HELP</h5>
                                <ul>
                                    <li><a href="javascript:void(0);">Track Order</a></li>
                                    <li><a href="javascript:void(0);">Returns</a></li>
                                    <li><a href="javascript:void(0);">Shipping</a></li>
                                    <li><a href="javascript:void(0);">FAQs</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-3 col-sm-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="widget widget_services">
                                <h5 class="footer-title">Quick Links</h5>
                                <ul>
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li><a href="javascript:void(0);">Shop</a></li>
                                    <li><a href="javascript:void(0);">Fashion</a></li>
                                    <li><a href="javascript:void(0);">Seasonal Deals</a></li>
                                    <li><a href="javascript:void(0);">Gift Card</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top End -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row fb-inner wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-lg-6 col-md-12 text-start">
                            <p class="copyright-text">© <span class="current-year">2024</span> <a
                                    href="https://www.tonistyle store.com/">tonistyle store</a> Theme. All Rights
                                Reserved.</p>
                        </div>
                        <div class="col-lg-6 col-md-12 text-end">
                            <div
                                class="d-flex align-items-center justify-content-center justify-content-md-center justify-content-xl-end">
                                <span class="me-3">We Accept: </span>
                                <img src="images/footer-img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom End -->

        </footer>



        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
        <!-- Quick Modal Start -->
        <div class="modal quick-view-modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="icon feather icon-x"></i>
                    </button>
                    <div class="modal-body">
                        <div class="row g-xl-4 g-3">
                            <div class="col-xl-6 col-md-6">
                                <div class="dz-product-detail mb-0">
                                    <div class="swiper-btn-center-lr">
                                        <div class="swiper quick-modal-swiper2">
                                            <div class="swiper-wrapper" id="lightgallery">
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item" href="images/products/lady-1.png"
                                                            data-src="images/products/lady-1.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/lady-1.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item" href="images/products/lady-2.png"
                                                            data-src="images/products/lady-2.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/lady-2.png" alt="image">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="dz-media DZoomImage">
                                                        <a class="mfp-link lg-item" href="images/products/lady-3.png"
                                                            data-src="images/products/lady-3.png">
                                                            <i class="feather icon-maximize dz-maximize top-right"></i>
                                                        </a>
                                                        <img src="images/products/lady-3.png" alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper quick-modal-swiper thumb-swiper-lg thumb-sm swiper-vertical">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/lady-1.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/lady-2.png" alt="image">
                                                </div>
                                                <div class="swiper-slide">
                                                    <img src="images/products/thumb-img/lady-3.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="dz-product-detail style-2 ps-xl-3 ps-0 pt-2 mb-0">
                                    <div class="dz-content">
                                        <div class="dz-content-footer">
                                            <div class="dz-content-start">
                                                <span class="badge bg-secondary mb-2">SALE 20% Off</span>
                                                <h4 class="title mb-1"><a href="">Cozy Knit Cardigan
                                                        Sweater</a></h4>
                                                <div class="review-num">
                                                    <ul class="dz-rating me-2">
                                                        <li class="star-fill">
                                                            <i class="flaticon-star-1"></i>
                                                        </li>
                                                        <li class="star-fill">
                                                            <i class="flaticon-star-1"></i>
                                                        </li>
                                                        <li class="star-fill">
                                                            <i class="flaticon-star-1"></i>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-star-1"></i>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-star-1"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="text-secondary me-2">4.7 Rating</span>
                                                    <a href="javascript:void(0);">(5 customer reviews)</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="para-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has.
                                        </p>
                                        <div class="meta-content m-b20 d-flex align-items-end">
                                            <div class="me-3">
                                                <span class="form-label">Price</span>
                                                <span class="price">$125.75 <del>$132.17</del></span>
                                            </div>
                                            <div class="btn-quantity light me-0">
                                                <label class="form-label">Quantity</label>
                                                <input type="text" value="1" name="demo_vertical2">
                                            </div>
                                        </div>
                                        <div class=" cart-btn">
                                            <a href="" class="btn btn-secondary text-uppercase">Add To
                                                Cart</a>
                                            <a href=""
                                                class="btn btn-md btn-outline-secondary btn-icon">
                                                <svg width="19" height="17" viewbox="0 0 19 17" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.24805 16.9986C8.99179 16.9986 8.74474 16.9058 8.5522 16.7371C7.82504 16.1013 7.12398 15.5038 6.50545 14.9767L6.50229 14.974C4.68886 13.4286 3.12289 12.094 2.03333 10.7794C0.815353 9.30968 0.248047 7.9162 0.248047 6.39391C0.248047 4.91487 0.755203 3.55037 1.67599 2.55157C2.60777 1.54097 3.88631 0.984375 5.27649 0.984375C6.31552 0.984375 7.26707 1.31287 8.10464 1.96065C8.52734 2.28763 8.91049 2.68781 9.24805 3.15459C9.58574 2.68781 9.96875 2.28763 10.3916 1.96065C11.2292 1.31287 12.1807 0.984375 13.2197 0.984375C14.6098 0.984375 15.8885 1.54097 16.8202 2.55157C17.741 3.55037 18.248 4.91487 18.248 6.39391C18.248 7.9162 17.6809 9.30968 16.4629 10.7792C15.3733 12.094 13.8075 13.4285 11.9944 14.9737C11.3747 15.5016 10.6726 16.1001 9.94376 16.7374C9.75136 16.9058 9.50417 16.9986 9.24805 16.9986ZM5.27649 2.03879C4.18431 2.03879 3.18098 2.47467 2.45108 3.26624C1.71033 4.06975 1.30232 5.18047 1.30232 6.39391C1.30232 7.67422 1.77817 8.81927 2.84508 10.1066C3.87628 11.3509 5.41011 12.658 7.18605 14.1715L7.18935 14.1743C7.81021 14.7034 8.51402 15.3033 9.24654 15.9438C9.98344 15.302 10.6884 14.7012 11.3105 14.1713C13.0863 12.6578 14.6199 11.3509 15.6512 10.1066C16.7179 8.81927 17.1938 7.67422 17.1938 6.39391C17.1938 5.18047 16.7858 4.06975 16.045 3.26624C15.3152 2.47467 14.3118 2.03879 13.2197 2.03879C12.4197 2.03879 11.6851 2.29312 11.0365 2.79465C10.4585 3.24179 10.0558 3.80704 9.81975 4.20255C9.69835 4.40593 9.48466 4.52733 9.24805 4.52733C9.01143 4.52733 8.79774 4.40593 8.67635 4.20255C8.44041 3.80704 8.03777 3.24179 7.45961 2.79465C6.811 2.29312 6.07643 2.03879 5.27649 2.03879Z"
                                                        fill="black"></path>
                                                </svg>
                                                Add To Wishlist
                                            </a>
                                        </div>
                                        <div class="dz-info mb-0">
                                            <ul>
                                                <li><strong>SKU:</strong></li>
                                                <li>PRT584E63A</li>
                                            </ul>
                                            <ul>
                                                <li><strong>Category:</strong></li>
                                                <li><a href="">Dresses,</a></li>
                                                <li><a href="">Jeans,</a></li>
                                                <li><a href="">Swimwear,</a></li>
                                                <li><a href="">Summer,</a></li>
                                                <li><a href="">Clothing</a></li>
                                            </ul>
                                            <ul>
                                                <li><strong>Tags:</strong></li>
                                                <li><a href="">Casual</a></li>
                                                <li><a href="">Athletic,</a></li>
                                                <li><a href="">Workwear,</a></li>
                                                <li><a href="">Accessories</a></li>
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


    </div>
    <!-- JAVASCRIPT FILES ========================================= -->


    @yield('scripts')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script><!-- WOW JS -->
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- BOOTSTRAP MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <!-- BOOTSTRAP SELECT MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap-touchspin/bootstrap-touchspin.js') }}"></script>
    <!-- BOOTSTRAP TOUCHSPIN JS -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- SWIPER JS -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script>
    <script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdown/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/vendor/wnumb/wNumb.js') }}"></script>
    <script src="{{ asset('assets/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script>
    <script src="{{ asset('assets/vendor/lightgallery/dist/lightgallery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/group-slide/group-loop.js') }}"></script><!-- group JS -->
    <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js') }}"></script> --}}


    <script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM JS -->
</body>

</html>

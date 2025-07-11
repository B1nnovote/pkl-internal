
<style>
    .minicart_single_img img {
        width: 100px;
        height: auto;
        object-fit: cover;
        border-radius: 4px;
    }
    </style>
    
<header>
    <div class="headerarea header__sticky">
        <div class="container desktop__menu__wrapper">
            <div class="row common__row position-relative">
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="headerarea__logo">
                        <a href="#"><img src="{{ asset('assets/frontend/img/logo/logo__1.png') }}" alt=""></a>
                    </div>
                </div>


                <div class="col-xl-7 col-lg-7 col-md-6 main_menu_wrap">

                    <div class="headerarea__main__menu ">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home
                                    </a>
                                </li>

                                <li class="position-static">
                                    <a href="{{ route('product.index') }}">Product
                                    </a>
                                </li>
                                <li><a href="{{ url('about') }}">About</a> </li>
                            </ul>
                        </nav>
                    </div>

                </div>


                <div class="col-xl-3 col-lg-3 col-md-6">

                    <div class="headerarea__right">

                        <ul class="headerarea__right__nav">

                            <li>
                                <div class="headerarea__search cursor__pointer">

                                    <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22" class="icon icon-search" viewBox="0 0 22 22">
                                        <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor">
                                        </circle>
                                        <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>


                                </div>
                            </li>


                            <li>
                                <div class="setting__wrap cursor__pointer">
                                    <div class="setting__wrap__active">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            <path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                        </svg>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="headermiddle__bar cursor__pointer">
                                    <div class="headermiddle__account">
                                        <div class="headermiddle__account__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                                <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256" />
                                                <path d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class="bigcounter">
                                                {{ $cartItems->count() }}
                                            </span>


                                        </div>

                                    </div>
                                </div>


                            </li>





                        </ul>

                    </div>

                </div>

            </div>


        </div>
    </div>

    <div class="container-fluid mob_menu_wrapper headerarea header__sticky">
        <div class="row align-items-center">
            <div class="col-sm-4 col-2">
                <div class="mobile-off-canvas">
                    <a class="mobile-aside-button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-5">
                <div class="mobile-logo">
                    <a class="logo__mobile" href="#"><img src="{{ asset('assets/frontend/img/logo/logo__1.png') }}" alt="logo"></a>
                </div>
            </div>
            <div class="col-sm-4 col-5">
                <div class="header-right-wrap">


                    <div class="header__right__inner__wrap d-flex align-items-center justify-content-end">

                        <ul class="headerarea__right headerarea__right__mobail__menu">
                            <li>
                                <div class="headerarea__search cursor__pointer">

                                    <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22" class="icon icon-search" viewBox="0 0 22 22">
                                        <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor">
                                        </circle>
                                        <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>


                                </div>
                            </li>

                            <li>
                                <div class="setting__wrap cursor__pointer">
                                    <div class="setting__wrap__active">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            <path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                        </svg>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="headermiddle__bar cursor__pointer">
                                    <div class="headermiddle__account">
                                        <div class="headermiddle__account__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                                <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256" />
                                                <path d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class=" bigcounter">
                                                {{ $cartItems->count() }}
                                            </span>

                                        </div>

                                    </div>
                                </div>


                            </li>

                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Mobile Menu Start Here -->
    <div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="fa fa-close"></i></a>
        <div class="header-mobile-aside-wrap">

            <div class="mobile__logo">
                <a href="index.html">
                    <img src="{{ asset('assets/frontend/img/logo/logo__1.png') }}" alt="Logo">
                </a>
            </div>

            <div class="mobile-search">
                <form class="search-form" action="{{ route('product.search') }}" method="get">
                    <input type="text" name="q" placeholder="Search entire store…">
                    <button class="button-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap">

                <div class="mobile-navigation">

                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Fashion 1</a></li>
                                    <li><a href="home-2.html">Fashion 2</a></li>
                                    <li><a href="home-3.html">Fashion 3</a></li>
                                    <li><a href="home-4.html">Beauty</a></li>
                                    <li><a href="home-5.html">Jewelry</a></li>
                                    <li><a href="home-6.html">T-Shirt</a></li>
                                    <li><a href="home-7.html">Electronics</a></li>
                                    <li><a href="home-8.html">Single Product</a></li>
                                    <li><a href="home-9-dark.html">Home Dark</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="shop.html">Shop</a>

                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Tops & Blouses</a></li>
                                            <li><a href="#">Sweaters & Cardigans</a></li>
                                            <li><a href="#">Jackets & Coats</a></li>
                                            <li><a href="#">Pants & Jeans</a></li>
                                            <li><a href="#">Skirts</a></li>
                                            <li><a href="#">Active wear</a></li>
                                            <li><a href="#">Lingerie & Sleepwear</a></li>
                                        </ul>
                                    </li>


                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Shirts</a></li>
                                            <li>
                                                <a href="#">T-Shirts & Polos
                                                    <span class="header__label hot__color">Hot</span>
                                                </a>
                                            </li>
                                            <li><a href="#">Sweaters & Hoodies</a></li>
                                            <li><a href="#">Jackets & Blazers</a></li>
                                            <li><a href="#">Pants & Chinos</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Suits & Formal wear</a></li>
                                            <li><a href="#">Active wear</a></li>
                                        </ul>
                                    </li>
                                </ul>


                            </li>


                            <li><a href="{{ url('about') }}">About</a>
                            </li>


                        </ul>
                    </nav>

                </div>


            </div>
            <div class="mobile-curr-lang-wrap">

                <div class="single-mobile-curr-lang">
                    <a class="mobile-account-active" href="#">My Account <i class="fa fa-angle-down"></i></a>
                    <div class="lang-curr-dropdown account-dropdown-active">
                        <ul>
                            @auth
                            <li>
                                <a href="{{ route('orders.index') }}">My Orders</a>
                            </li>
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Create Account</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>

            </div>
            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a>
                <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                <a class="google" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end Here -->

    <!-- setting__wrap__list__start -->
    <div class="setting__wrap__list">
        <button class="setting__wrap__close">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <title>Close</title>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
            </svg>
        </button>

        <div class="setting__wrap__heading">
            <h6><a href="#">Account</a></h6>
        </div>

        <div class="setting__wrap__list__inner">
            <ul>
                @auth
                <li>
                    <a href="{{ route('orders.index') }}">My Orders</a>
                </li>
                <li>
                    <a href="{{ route('cart.index') }}">Cart</a>
                </li>
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-2').submit();">
                        Logout
                    </a>
                </li>
                <form id="logout-form-2" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('cart.index') }}">Cart</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Create Account</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>

    <!-- setting__wrap__list__end -->

    <!-- header__search -->
    <div class="headersearch__active">
        <div class="headersearch__active__icon">
            <button class="headersearch__active__close">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <title>Close</title>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                </svg></button>
        </div>
        <div class="headersearch__active__input">
            <form action="{{ route('product.search') }}" method="get" role="search" style="position: relative;">
                <div class="header__form__search">
                    <input type="search" name="q" placeholder="Search our store" class="input-text" autocomplete="off">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- header__search -->

    <section class="minicart">
        <div class="minicart__inner">
            <div class="minicart__wrapper">
                <div class="minicart_close_icon">
                    <div class="minicart_cart_text ">
                        <strong>Cart</strong>
                    </div>
                    <button class="minicart__close__btn">
                        <i class="fa fa-close"></i>
                    </button>

                </div>

                <div class="minicart_single_wraper">
                    @forelse ($cartItems as $item)
                        <div class="minicart__single">

                            <div class="minicart__single__img">
                                <a href="{{ route('product.show', $item->product->slug) }}">
                                    <img src="{{ Storage::url($item->product->image) }}"
                                        alt="{{ $item->product->name }}">
                                </a>

                                <div class="minicart__single__close">
                                    <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button title="Remove"><i class="fa fa-close"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="minicart_single_content">
                                <h4><a href="#">{{ $item->product->name }}</a></h4>
                                <span>{{ $item->qty }} x
                                    <span class="money">Rp
                                        {{ number_format($item->product->price, 0, ',', '.') }}</span>
                                </span>


                            </div>

                        </div>
                    @empty
                        <p class="text-center p-3">Keranjang kosong</p>
                    @endforelse

                </div>
                @php
                    $total = $cartItems->sum(fn($item) => $item->qty * $item->product->price);
                @endphp

                <div class="minicart__footer">
                    <div class="minicart__subtotal">
                        <span class="subtotal__title">Subtotal:</span>
                        <span class="subtotal_amount">Rp {{ number_format($total, 0, ',', '.') }}</span>

                    </div>
                    <div class="minicart__button">
                        <a href="{{ route('cart.index') }}" class="default__button">View Cart</a>
                        <a href="{{ route('cart.checkout') }}" class="default__button">Checkout</a>
                    </div>
                    <div class="cart_note_text">
                        <p>Free Shipping on All Orders Over Rp 1.500.000!</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

</header>
<!-- header section end -->

{{-- 
<!-- header__topbar__start -->
<div class="header__topbar desktop__menu__wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="header__topbar__left">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                <rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="32" />
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="32" d="M112 160l144 112 144-112" />
                            </svg>example@example.com
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                <path
                                    d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="32" />
                                <circle cx="256" cy="192" r="48" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>City, State, ZIP Code
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="header__topbar__right">

                    <div class="header__topbar__language__wraper">
                        <div class="header__topbar__language">
                            English <i class="fa fa-angle-down"></i>
                            <div class="header__topbar__language__inner">
                                <ul>
                                    <li class="active">
                                        <a href="#"> English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Espanol

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> Português (portugal)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="header__topbar__social__icon">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- header__topbar__end -->
        

<!-- header section start -->
<header>
    <div class="headerarea header__sticky">
        <div class="container desktop__menu__wrapper">
            <div class="row common__row position-relative">
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="headerarea__logo">
                        <a href="#"><img src="img/logo/logo__1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 main_menu_wrap">
                    <div class="headerarea__main__menu ">
                        <nav>
                            <ul>
                                <li><a class="headerarea__has__dropdown " href="index.html">Home
                                    </a>
                                </li>
                                <li class="position-static">
                                    <a class="headerarea__has__dropdown" href="{{ url('admin/shop') }}">Product
                                        <span class="header__label">New</span>
                                    </a>
                                </li>
                                <li><a href="{{ url('admin/about') }}">About</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-6">

                    <div class="headerarea__right">

                        <ul class="headerarea__right__nav">
                            <li class="disclosure__button">
                                <div class="disclosure__button__language cursor__pointer">
                                    US (USD $) <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="disclosure__button__language__inner">
                                    <ul>
                                        <li class="active">
                                            <a href="#">Afghan (AFN ؋)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> Ålann (EUR €)

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> Albania (ALL L)</a>
                                        </li>

                                        <li>
                                            <a href="#"> Albania (ALL L)</a>
                                        </li>

                                        <li>
                                            <a href="#"> Albania (ALL L)</a>
                                        </li>
                                        <li>
                                            <a href="#"> Afghan (AFN ؋)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> Islands (EUR €)

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> Albania (ALL L)</a>
                                        </li>

                                        <li>
                                            <a href="#"> Albania (ALL L)</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="headerarea__search cursor__pointer">

                                    <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22"
                                        class="icon icon-search" viewBox="0 0 22 22">
                                        <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor"></circle>
                                        <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>


                                </div>
                            </li>


                            <li>
                                <div class="setting__wrap cursor__pointer">
                                    <div class="setting__wrap__active">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path
                                                d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                            <path
                                                d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                        </svg>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="headermiddle__bar cursor__pointer">
                                    <div class="headermiddle__account">
                                        <div class="headermiddle__account__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                viewBox="0 0 512 512">
                                                <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"
                                                    d="M48 80h64l48 272h256" />
                                                <path
                                                    d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class=" bigcounter">2</span>

                                        </div>

                                    </div>
                                </div>


                            </li>



                        </ul>

                    </div>

                </div>

            </div>


        </div>
    </div>

    <div class="container-fluid mob_menu_wrapper headerarea header__sticky">
        <div class="row align-items-center">
            <div class="col-sm-4 col-2">
                <div class="mobile-off-canvas">
                    <a class="mobile-aside-button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-5">
                <div class="mobile-logo">
                    <a class="logo__mobile" href="#"><img src="img/logo/logo__1.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-sm-4 col-5">
                <div class="header-right-wrap">


                    <div class="header__right__inner__wrap d-flex align-items-center justify-content-end">

                        <ul class="headerarea__right headerarea__right__mobail__menu">
                            <li>
                                <div class="headerarea__search cursor__pointer">

                                    <svg role="presentation" stroke-width="2" focusable="false" width="22" height="22"
                                        class="icon icon-search" viewBox="0 0 22 22">
                                        <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor"></circle>
                                        <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>


                                </div>
                            </li>

                            <li>
                                <div class="setting__wrap cursor__pointer">
                                    <div class="setting__wrap__active">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                            <path
                                                d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="32" />
                                            <path
                                                d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                stroke-width="32" />
                                        </svg>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="headermiddle__bar cursor__pointer">
                                    <div class="headermiddle__account">
                                        <div class="headermiddle__account__img">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                viewBox="0 0 512 512">
                                                <circle cx="176" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <circle cx="400" cy="416" r="16" fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"
                                                    d="M48 80h64l48 272h256" />
                                                <path
                                                    d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32" />
                                            </svg>
                                            <span class=" bigcounter">2</span>

                                        </div>

                                    </div>
                                </div>


                            </li>

                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>
        
    <!-- Mobile Menu Start Here -->
    <div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="fa fa-close"></i></a>
        <div class="header-mobile-aside-wrap">

            <div class="mobile__logo">
                <a href="index.html">
                    <img src="img/logo/logo__1.png" alt="Logo">
                </a>
            </div>

            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap">

                <div class="mobile-navigation">

                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Fashion 1</a></li>
                                    <li><a href="home-2.html">Fashion 2</a></li>
                                    <li><a href="home-3.html">Fashion 3</a></li>
                                    <li><a href="home-4.html">Beauty</a></li>
                                    <li><a href="home-5.html">Jewelry</a></li>
                                    <li><a href="home-6.html">T-Shirt</a></li>
                                    <li><a href="home-7.html">Electronics</a></li>
                                    <li><a href="home-8.html">Single Product</a></li>
                                    <li><a href="home-9-dark.html">Home Dark</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="shop.html">Shop</a>

                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Tops & Blouses</a></li>
                                            <li><a href="#">Sweaters & Cardigans</a></li>
                                            <li><a href="#">Jackets & Coats</a></li>
                                            <li><a href="#">Pants & Jeans</a></li>
                                            <li><a href="#">Skirts</a></li>
                                            <li><a href="#">Active wear</a></li>
                                            <li><a href="#">Lingerie & Sleepwear</a></li>
                                        </ul>
                                    </li>


                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Shirts</a></li>
                                            <li>
                                                <a href="#">T-Shirts & Polos
                                                    <span class="header__label hot__color">Hot</span>
                                                </a>
                                            </li>
                                            <li><a href="#">Sweaters & Hoodies</a></li>
                                            <li><a href="#">Jackets & Blazers</a></li>
                                            <li><a href="#">Pants & Chinos</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Suits & Formal wear</a></li>
                                            <li><a href="#">Active wear</a></li>
                                        </ul>
                                    </li>


                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Accessories</a>
                                        <ul class="dropdown">

                                            <li><a href="#">Bags & Purses</a></li>
                                            <li><a href="#">Hats & Caps</a></li>
                                            <li><a href="#">Scarves & Shawls</a></li>
                                            <li><a href="#">Belts & Suspenders</a></li>
                                            <li>
                                                <a href="#">Sunglasses
                                                    <span class="header__label">New</span>
                                                </a>
                                            </li>
                                            <li><a href="#">Jewelry</a></li>
                                            <li><a href="#">Watches</a></li>
                                            <li><a href="#">Mobile</a></li>

                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Footwear</a>
                                        <ul class="dropdown">

                                            <li><a href="#">Flats & Loafers</a></li>
                                            <li><a href="#">Heels & Pumps</a></li>
                                            <li><a href="#">Sneakers & Athletic</a></li>
                                            <li><a href="#">Dress Shoes</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Boots & Chukkas</a></li>
                                            <li><a href="#">Sandals & Slides</a></li>
                                            <li><a href="#">Pumps & Slides</a></li>

                                        </ul>
                                    </li>

                                </ul>


                            </li>

                            <li class="menu-item-has-children"><a href="categories.html">Categories</a>
                                <ul class="dropdown">

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Featured Product</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__1.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">New Arrivals</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__2.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Summer Styles</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__3.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Winter Fashion</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__4.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Accessories</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__5.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Footwear</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__6.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Men</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__7.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a class="menu__title" href="categories.html">Women</a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="categories.html">
                                                    <img class="img-fluid" src="img/collection/collection__8.png"
                                                        alt="Collection">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </li>
                            <li><a href="about.html">About</a>
                            </li>

                            <li class="menu-item-has-children"><a href="blog.html">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="service.html">Service</a></li>
<li><a href="faq.html">FAQ</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="categories.html">Categories</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="https://themeforest.net/user/marino-themes">Purchase Now</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                </div>


            </div>
            <div class="mobile-curr-lang-wrap">
                <div class="single-mobile-curr-lang">
                    <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English (US)</a></li>
                            <li><a href="#">English (UK)</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div>
                </div>

                <div class="single-mobile-curr-lang">
                    <a class="mobile-account-active" href="#">My Account <i class="fa fa-angle-down"></i></a>
                    <div class="lang-curr-dropdown account-dropdown-active">
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Creat Account</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a>
                <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                <a class="google" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end Here -->

    <!-- setting__wrap__list__start -->
    <div class="setting__wrap__list">
        <button class="setting__wrap__close">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                <title>Close</title>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                    d="M368 368L144 144M368 144L144 368"></path>
            </svg></button>

        <div class="setting__wrap__heading">
            <h6>
                <a href="#">Account</a>
            </h6>
        </div>
        <div class="setting__wrap__list__inner">
            <ul>
                <li>
                    <a href="login.html">Login</a>
                </li>
                <li>
                    <a href="cart.html">Cart</a>
                </li>
                <li>
                    <a href="wishlist.html">Wishlist</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- setting__wrap__list__end -->

    <!-- header__search -->
    <div class="headersearch__active">
        <div class="headersearch__active__icon">
            <button class="headersearch__active__close">
                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                    <title>Close</title>
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                </svg></button>
        </div>
        <div class="headersearch__active__input">
            <form action="/search" method="get" role="search" style="position: relative;">
                <div class="header__form__search">
                    <input type="search" name="q" value="" placeholder="Search our store" class="input-text"
                        autocomplete="off">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- header__search -->
        
    <!-- minicart__section__start -->
    <section class="minicart">
        <div class="minicart__inner">
            <div class="minicart__wrapper">
                <div class="minicart__close__icon">
                    <div class="minicart__cart__text ">
                        <strong>Cart</strong>
                    </div>
                    <button class="minicart__close__btn">
                        <i class="fa fa-close"></i>
                    </button>

                </div>

                <div class="minicart__single__wraper">
                    <div class="minicart__single">

                        <div class="minicart__single__img">
                            <a href="single-product.html">
                                <img src="img/grid/grid__1.png" alt="product">
                            </a>
                            <div class="minicart__single__close">
                                <button title="Remove"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                        <div class="minicart__single__content">
                            <h4><a href="single-product.html">E. Casual Comforts T-shirt</a></h4>
                            <span>1 x <span class="money">$5,.00 USD</span></span>

                        </div>

                    </div>

                    <div class="minicart__single">

                        <div class="minicart__single__img">
                            <a href="single-product.html">
                                <img src="img/grid/grid__2.png" alt="product">
                            </a>
                            <div class="minicart__single__close">
                                <button title="Remove"><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                        <div class="minicart__single__content">
                            <h4><a href="single-product.html">M. Denim Clothing Jacket</a></h4>
                            <span>1 x <span class="money">$4,.00 USD</span></span>

                        </div>

                    </div>
                </div>

                <div class="minicart__footer">
                    <div class="minicart__subtotal">
                        <span class="subtotal__title">Subtotal:</span>
                        <span class="subtotal__amount">$9.00 USD</span>
                    </div>
                    <div class="minicart__button">
                        <a href="cart.html" class="default__button">View Cart</a>
                        <a href="checkout.html" class="default__button">Checkout</a>
                    </div>
                    <div class="cart__note__text">
                        <p>Free Shipping on All Orders Over $100!</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- minicart__section__end -->

</header>
<!-- header section end -->

 <!-- setting__wrap__list__start -->
 <div class="setting__wrap__list">
    <button class="setting__wrap__close">
        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
            <title>Close</title>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                d="M368 368L144 144M368 144L144 368"></path>
        </svg></button>

    <div class="setting__wrap__heading">
        <h6>
            <a href="#">Account</a>
        </h6>
    </div>
    <div class="setting__wrap__list__inner">
        <ul>
            <li>
                <a href="login.html">Login</a>
            </li>
            <li>
                <a href="cart.html">Cart</a>
            </li>
            <li>
                <a href="wishlist.html">Wishlist</a>
            </li>
        </ul>
    </div>
</div>
<!-- setting__wrap__list__end -->


            <!-- header__search -->
            <div class="headersearch__active">
                <div class="headersearch__active__icon">
                    <button class="headersearch__active__close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <title>Close</title>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                        </svg></button>
                </div>
                <div class="headersearch__active__input">
                    <form action="/search" method="get" role="search" style="position: relative;">
                        <div class="header__form__search">
                            <input type="search" name="q" value="" placeholder="Search our store" class="input-text"
                                autocomplete="off">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- header__search -->
             <!-- minicart__section__start -->
             <section class="minicart">
                <div class="minicart__inner">
                    <div class="minicart__wrapper">
                        <div class="minicart__close__icon">
                            <div class="minicart__cart__text ">
                                <strong>Cart</strong>
                            </div>
                            <button class="minicart__close__btn">
                                <i class="fa fa-close"></i>
                            </button>
        
                        </div>
        
                        <div class="minicart__single__wraper">
                            <div class="minicart__single">
        
                                <div class="minicart__single__img">
                                    <a href="single-product.html">
                                        <img src="img/grid/grid__1.png" alt="product">
                                    </a>
                                    <div class="minicart__single__close">
                                        <button title="Remove"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="minicart__single__content">
                                    <h4><a href="single-product.html">E. Casual Comforts T-shirt</a></h4>
                                    <span>1 x <span class="money">$5,.00 USD</span></span>
        
                                </div>
        
                            </div>
        
                            <div class="minicart__single">
        
                                <div class="minicart__single__img">
                                    <a href="single-product.html">
                                        <img src="img/grid/grid__2.png" alt="product">
                                    </a>
                                    <div class="minicart__single__close">
                                        <button title="Remove"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="minicart__single__content">
                                    <h4><a href="single-product.html">M. Denim Clothing Jacket</a></h4>
                                    <span>1 x <span class="money">$4,.00 USD</span></span>
        
                                </div>
        
                            </div>
                        </div>
        
                        <div class="minicart__footer">
                            <div class="minicart__subtotal">
                                <span class="subtotal__title">Subtotal:</span>
                                <span class="subtotal__amount">$9.00 USD</span>
                            </div>
                            <div class="minicart__button">
                                <a href="cart.html" class="default__button">View Cart</a>
                                <a href="checkout.html" class="default__button">Checkout</a>
                            </div>
                            <div class="cart__note__text">
                                <p>Free Shipping on All Orders Over $100!</p>
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </section>
            <!-- minicart__section__end -->
        </head>
                 --}}

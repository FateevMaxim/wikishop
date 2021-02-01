<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Wiki Shop</title>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
</head>

<body>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1"><a href="#">Главная</a>
                </li>
                <li class="level1 active dropdown"><a href="{{ url('/shop') }}">Магазин</a>
                    <span class="icon-sub-menu"></span>
                    <div class="menu-level1 js-open-menu">
                        <ul class="level1">
                            <li class="level2">
                                <a href="#">Categories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a></li>
                                    <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a></li>
                                    <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Other Pages</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="shop_full.html" title="">Shop</a></li>
                                    <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                    <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                    <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                    <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                    <li class="level3"><a href="track.html" title="">Track Your Order</a></li>
                                    <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="level1">
                    <a href="#">Pages</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                        <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                        <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                        <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Blog</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="blog-standar.html" title="Blog Standar">Blog Standar</a></li>
                        <li class="level2"><a href="blog_grid.html" title="Blog Gird">Blog Gird</a></li>
                        <li class="level2"><a href="blog-standar.html" title="Blog Sidebar">Blog Sidebar</a></li>
                        <li class="level2"><a href="blog-single-post.html" title="Blog Single Post">Blog Single Post</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
    <!--<div class="header-top-banner">
        <a href="#"><img src="img/banner-top.jpg" alt="" class="img-reponsive"></a>
    </div>-->
    <div class="h3-bg">
        <div class="wrappage v2">
            <header id="header" class="header-v3 bg-w">
                <div class="topbar">
                    <div class="container container-240">
                        <div class="row flex">
                            <div class="col-md-6 col-sm-6 col-xs-4 flex-left">
                                <div class="topbar-left">
                                    <div class="element element-store hidden-xs hidden-sm">
                                        <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/icon-map.png" alt="">
                                      <span>Адреса магазинов</span>

                                    </a>
                                        <ul class="dropdown-menu" aria-labelledby="label1">
                                            <li><a href="#">Алматы, Grand Park, бутик 15</a></li>
                                            <li><a href="#">Алматы, Гоголя 145</a></li>
                                            <li><a href="#">Ташкент, Абая 113</a></li>
                                        </ul>
                                    </div>
                                    <!--<div class="element hidden-xs hidden-sm">
                                        <a href="#"><img src="img/icon-track.png" alt=""><span>Track Your Order</span></a>
                                    </div>-->
                                    <!--<div class="element element-account hidden-md hidden-lg">
                                        <a href="#">Мой аккаунт</a>
                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-8 flex-right">
                                <div class="topbar-right">
                                    <!--<div class="element hidden-xs hidden-sm">
                                        <a href="#">Buyer Protection </a>
                                    </div>-->
                                    <div class="element hidden-xs hidden-sm">
                                        <a href="#">Помощь</a>
                                    </div>
                                    {{--<div class="element hidden-xs hidden-sm">
                                        <a href="#"><img src="img/icon-phone.png" alt=""><span>Установить приложение на смартфон</span></a>
                                    </div>
                                    <div class="element element-leaguage">
                                        <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/Russia.png" alt="">
                                      <span>Русский</span>
                                      <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                    </a>
                                        <ul class="dropdown-menu" aria-labelledby="label2">
                                            <li><a href="#">KZ</a></li>
                                            <li><a href="#">RU</a></li>
                                            <li><a href="#">EN</a></li>
                                        </ul>
                                    </div>
                                    <div class="element element-currency">
                                        <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <span>KZT</span>
                                      <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                    </a>
                                        <ul class="dropdown-menu" aria-labelledby="label3">
                                            <li><a href="#">RUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-center">
                    <div class="container container-240">
                        <div class="row flex">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                                <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                            <form method="get" class="searchform ajax-search" action="/search" role="search">
                                <input type="hidden" name="type" value="product">
                                <input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="Я ищу...">
                                <ul class="list-product-search hidden-xs hidden-sm">
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/iphonex.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/sound.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Smartphone 6S 64GB LTE</h3>
                                        </a>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone4.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone5.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Smartphone 6S 64GB LTE </h3>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex align-center" href="">
                                            <div class="product-img">
                                                <img src="img/product/phone1.jpg" alt="">
                                            </div>
                                            <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                        </a>
                                    </li>
                                </ul>
                                <div class="search-panel">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href='#'>Все категории <span class="fa fa-caret-down"></span></a>
                                    <ul id="category" class="dropdown-menu dropdown-category">

                                        @if (isset($items))
                                            @foreach($items as $item)
                                                <li><a href="#">{{ $item->name }}</a>
                                            @endforeach
                                        @endif
                                        <li><a href="#">TV & Video</a></li>
                                    </ul>
                                </div>
                                <span class="input-group-btn">
                                          <button class="button_search" type="button"><i class="ion-ios-search-strong"></i></button>
                                </span>
                            </form>
                            <div class="tags">
                                <span>Частые запросы :</span>
                                <a href="#">шорты</a>
                                <a href="#">рубашки </a>
                                <a href="#">летняя резина</a>
                            </div>
                        </div>
                            <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                                <div class="right-panel">
                                    <div class="header-sub-element hidden-xs hidden-sm">
                                        <div class="sub-left">
                                            <img src="img/icon-call.png" alt="">
                                        </div>
                                        <div class="sub-right">
                                            <span>Позвонить нам</span>
                                            <div class="phone">+7(123) 456 7891 </div>
                                        </div>
                                    </div>
                                    <div class="header-sub-element row">
                                        <a class="hidden-xs hidden-sm" href=""><img src="img/icon-user.png" alt=""></a>
                                        <a href="#"><img src="img/icon-heart.png" alt=""></a>
                                        <!--<div class="cart">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
                                            <img src="img/icon-cart.png" alt="">
                                            <span class="count cart-count">0</span>
                                        </a>
                                            <div class="dropdown-menu dropdown-cart">
                                                <ul class="mini-products-list">
                                                    <li class="item-cart">
                                                        <div class="product-img-wrap">
                                                            <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="inner-left">
                                                                <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                                <div class="product-price">
                                                                    16000.00 <span>( x2)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                                    </li>
                                                    <li class="item-cart">
                                                        <div class="product-img-wrap">
                                                            <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                        </div>
                                                        <div class="product-details">
                                                            <div class="inner-left">
                                                                <div class="product-name"><a href="#">Harman Kardon Onyx Studio Pro</a></div>
                                                                <div class="product-price">
                                                                    18000.00 <span>( x2)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="bottom-cart">
                                                    <div class="cart-price">
                                                        <span>Subtotal</span>
                                                        <span class="price-total">34000.00</span>
                                                    </div>
                                                    <div class="button-cart">
                                                        <a href="#" class="cart-btn btn-viewcart">View Cart</a>
                                                        <a href="#" class="cart-btn e-checkout btn-gradient">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                        <i class="fa fa-bars f-15"></i>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom hidden-xs hidden-sm">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-lg-9 widget-left">
                                <div class="flex lr">
                                    <nav class="main-menu flex align-center">
                                        <button type="button" class="icon-mobile e-icon-menu icon-pushmenu js-push-menu">
                                            <span class="navbar-toggler-bar"></span>
                                            <span class="navbar-toggler-bar"></span>
                                            <span class="navbar-toggler-bar"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="myNavbar">
                                            <ul class="nav navbar-nav js-menubar">
                                                <li class="level1 dropdown hassub"><a href="{{ url('/shop') }}">Магазин{{--<span class="h-ribbon h-pos e-green">Sale</span>--}}</a>
                                                    <span class="plus js-plus-icon"></span>
                                                    <div class="menu-level-1 dropdown-menu">
                                                        <ul class="level1">
                                                            <li class="level2 col-4">

                                                                <a href="#">Categories</a>
                                                                <ul class="menu-level-2">
                                                                    <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a><span class="h-ribbon v3 e-red h-pos">Hot</span></li>
                                                                    <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a></li>
                                                                    <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right Sidebar</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="level2 col-4">
                                                                <a href="#">Other Pages</a>
                                                                <ul class="menu-level-2">
                                                                    <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                                                    <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                                                    <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                                                    <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                                                    <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </li>
                                                <li class="level1 active dropdown">
                                                    <a href="#">Pages<span class="h-ribbon h-pos e-skyblue">new</span></a>
                                                    <span class="plus js-plus-icon"></span>
                                                    <ul class="dropdown-menu menu-level-1">
                                                        <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                                                        <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                                                        <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                                                        <li class="level2"><a href="404.html" title="404">404</a></li>
                                                        <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                                                    </ul>
                                                </li>
                                                <li class="level1 active dropdown">
                                                    <a href="#">Blog</a>
                                                    <ul class="dropdown-menu menu-level-1">
                                                        <li class="level2"><a href="blog-standar.html" title="Blog Standar">Blog Standar</a></li>
                                                        <li class="level2"><a href="blog_grid.html" title="Blog Gird">Blog Gird</a></li>
                                                        <li class="level2"><a href="blog-standar.html" title="Blog Sidebar">Blog Sidebar</a></li>
                                                        <li class="level2"><a href="blog-single-post.html" title="Blog Single Post">Blog Single Post</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <div class="header-bottom-right hidden-xs hidden-sm">
                                        <img src="img/icon-ship.png" alt="" class="img-reponsive">
                                        <span>Бесплатная доставка при заказе от 15000 KZT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /header -->

            @yield('leftMainMenu')
            @yield('maincontent')


            <footer>
                <div class="f-top v2">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <div class="footer-block footer-about">
                                    <div class="f-logo">
                                        <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                                    </div>
                                    <ul class="footer-block-content">
                                        <li class="address">
                                            <span>Казахстан, Алматы, ул.Прямая, д.14</span>
                                        </li>
                                        <li class="phone">
                                            <span>+7(123) 456 7891 или +7(198) 765 4321</span>
                                        </li>
                                        <li class="email">
                                            <span>contact@yourcompany.kz</span>
                                        </li>
                                        <li class="time">
                                            <span>Пн-Сб 9:00 - 17:00  &nbsp;&nbsp;&nbsp;  Вс : Закрыто</span>
                                        </li>
                                    </ul>
                                    <div class="footer-social social">
                                        <h3 class="footer-block-title">Следите за нами</h3>
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-youtube"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Быстрые ссылки</h3>
                                    <ul class="footer-block-content">
                                        <li><a href="#">Новые поступления</a></li>
                                        <li><a href="#">Топ 100 товаров</a></li>
                                        <li><a href="#">КЕПКИ</a></li>
                                        <li><a href="#">РУБАШКИ</a></li>
                                        <li><a href="#">Домашние аудио центры</a></li>
                                        <li><a href="#">Наушники</a></li>
                                        <li><a href="#">Автоэлектроника</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Сервис покупателя</h3>
                                    <ul class="footer-block-content">
                                        <li><a href="#">Аккаунт</a></li>
                                        <li><a href="#">Возвраты/Обмены</a></li>
                                        <li><a href="#">Вопросы</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="footer-block">
                                    <div class="footer-block-phone">
                                        <h3 class="footer-block-title">Горячяя линия</h3>
                                        <p class="phone-desc">Звоните нам</p>
                                        <p class="phone-light">+7(123) 456 7891 или +7(198) 765 4321</p>
                                    </div>
                                    <div class="footer-block-newsletter">
                                        <h3 class="footer-block-title">Подписка</h3>
                                        <p>Подпишитесь на обновления нашего магазина, чтобы первыми узнать о новых поступлениях</p>
                                        <form class="form_newsletter" action="#" method="post">
                                            <input type="email" value="" placeholder="Введите Ваш Email" name="EMAIL" id="mail" class="newsletter-input form-control">
                                            <button id="subscribe" class="button_mini btn btn-gradient" type="submit">
                                                Подписаться
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-bottom">
                    <div class="container container-240">
                        <div class="row flex lr">
                            <div class="col-xs-12 f-copyright"><span>© 2020-2021 Wiki. Все права защищены.</span></div>
                            <!--<div class="col-xs-6 f-payment hidden-xs">
                                <a href="#"><img src="img/payment/mastercard.png" alt="" class="img-reponsive"></a>
                                <a href="#"><img src="img/payment/paypal.png" alt="" class="img-reponsive"></a>
                                <a href="#"><img src="img/payment/visa.png" alt="" class="img-reponsive"></a>
                                <a href="#"><img src="img/payment/american-express.png" alt="" class="img-reponsive"></a>
                                <a href="#"><img src="img/payment/western-union.png" alt="" class="img-reponsive"></a>
                                <a href="#"><img src="img/payment/jcb.png" alt="" class="img-reponsive"></a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /footer -->
            <!-- /footer -->
        </div>
    </div>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/countdown.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
</body>

</html>

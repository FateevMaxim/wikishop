@extends ('layouts.main')


@section('leftMainMenu')
    <div class="col-lg-3 widget-verticalmenu">
        <div class="vertical-wrapper">
            <ul class="vertical-group">
                <li class="vertical-item level1 mega-parent"><a href="#">Новые поступления</a></li>

                <li class="vertical-item level1 mega-parent"><a href="#">Топ 100 товаров <span class="h-ribbon e-red mg-210">Горячие</span></a></li>
                @foreach($items as $item)
                    <li class="vertical-item level1"><a href="#">{{ $item->name }}</a>
                @endforeach
                <li class="vertical-item level1 vertical-drop"><a href="#">Домашние аудио центры</a>
                    <div class="menu-level-1 dropdown-menu vertical-menu v2 homebg pd2 style1">
                        <ul class="level1">
                            <li class="level2 col-md-4">
                                <a href="#">Домашние кинотеатры</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="">Саунд бары</a></li>
                                </ul>
                            </li>
                            <li class="level2 col-md-4">
                                <a href="# ">Динамики</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="">Bluetooth динамики</a></li>
                                </ul>
                            </li>
                            <li class="level2 col-md-4">
                                <a href="#">Аксессуары</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="">Повторители и усилители</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="vertical-item level1 vertical-drop"><a href="#">Наушники</a>
                    <div class="menu-level-1 dropdown-menu vertical-menu v2 headphonebg pd3 style1">
                        <ul class="level1">
                            <li class="level2 col-md-6">
                                <a href="#">Наушники</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="">Вкладыши</a></li>
                                </ul>
                            </li>
                            <li class="level2 col-md-6">
                                <a href="# ">Аудиосистемы</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="#" title="">Комплектные системы</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="vertical-item level1 vertical-drop"><a href="#">Автоэлектроника</a>
                    <div class="menu-level-1 dropdown-menu vertical-menu">
                        <ul class="vertical-menu1">
                            <li><a href="#">Аудио в авто</a></li>
                        </ul>
                    </div>
                </li>
                <li class="vertical-item level1 vertical-drop mega-parent"><a href="#">Все категории</a>
                    <div class="menu-level-1 dropdown-menu vertical-menu v2 pd">
                        <div class="row">
                            <div class="col-md-4 text-center cate-item">
                                <a href="#"><img src="img/megamenu/cate1.jpg" alt="" class="img-reponsive"></a>
                                <h3><a href="#">Камеры в зеркала</a></h3>
                            </div>
                            <div class="col-md-4 text-center cate-item">
                                <a href="#"><img src="img/megamenu/cate2.jpg" alt="" class="img-reponsive"></a>
                                <h3><a href="#">Линзы</a></h3>
                            </div>
                            <div class="col-md-4 text-center cate-item">
                                <a href="#"><img src="img/megamenu/cate3.jpg" alt="" class="img-reponsive"></a>
                                <h3><a href="#">Дроны с камерами</a></h3>
                            </div>
                            <div class="col-md-4 text-center cate-item">
                                <a href="#"><img src="img/megamenu/cate4.jpg" alt="" class="img-reponsive"></a>
                                <h3><a href="#">Спортивные и экшн камеры</a></h3>
                            </div>
                            <div class="col-md-4 text-center cate-item">
                                <a href="#"><img src="img/megamenu/cate5.jpg" alt="" class="img-reponsive"></a>
                                <h3><a href="#">Оптика</a></h3>
                            </div>
                            <div class="col-md-4 text-center cate-item">
                                <a href="#"><img src="img/megamenu/cate6.jpg" alt="" class="img-reponsive"></a>
                                <h3><a href="#">Аксессуары</a></h3>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endsection



@section('maincontent')
            <!-- /header -->
            <section class="all-s">
                <div class="ads-group v2 nospc">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 set-w hidden-xs hidden-sm "></div>
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 set-flex ">
                                <div class="slide-home3">
                                    <div class="e-slide v2 js-slider-3items">
                                        <div class="e-slide-img">
                                            <a href="#"><img src="img/slider/h3_s1.jpg" alt=""></a>
                                            <div class="slide-content v2">
                                                <p class="cate v2">Белая рубашка</p>
                                                <h3 class="v2">Белая рубашка с полосатой вставкой</h3>
                                                <p class="sale v2">от <span class="red">5600</span></p>
                                                <a href="#" class="slide-btn e-yl-gradient">Посмотреть<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img">
                                            <a href="#"><img src="img/slider/h3_s2.jpg" alt=""></a>
                                            <div class="slide-content v2">
                                                <p class="cate v2">Зимняя куртка</p>
                                                <h3 class="v2">Облегающая хлопковая куртка</h3>
                                                <p class="sale v2">от <span class="red">16000</span></p>
                                                <a href="#" class="slide-btn e-yl-gradient">Посмотреть<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                        <div class="e-slide-img">
                                            <a href="#"><img src="img/slider/h3_s3.jpg" alt=""></a>
                                            <div class="slide-content v2">
                                                <p class="cate v2">Новое поступление</p>
                                                <h3 class="v2">Зимняя линейка сапог пополнилась</h3>
                                                <p class="sale v2">от <span class="red"> 9000</span></p>
                                                <a href="#" class="slide-btn e-yl-gradient">Посмотреть<i class="ion-ios-arrow-forward"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature -->
                <!--<div class="feature v2">
                    <div class="container container-240">
                        <div class="feature-inside">
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="img/feature/g-truck.png" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>Worldwide Delivery</h3>
                                    <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                                </div>
                            </div>
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="img/feature/g-credit.png" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>Safe Payment</h3>
                                    <p>Pay with the world’s most popular and secure payment methods.</p>
                                </div>
                            </div>
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="img/feature/g-safety.png" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>Shop with Confidence</h3>
                                    <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                                </div>
                            </div>
                            <div class="feature-block v2 text-center">
                                <div class="feature-block-img"><img src="img/feature/g-tele.png" alt="" class="img-reponsive"></div>
                                <div class="feature-info v2">
                                    <h3>24/7 Help Center</h3>
                                    <p>Round-the-clock assistance for a smooth shopping experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- Super Deal -->
                <!--<div class="super-deal">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="owl-carousel owl-theme owl-cate js-oneitem">
                                    <div class="slick-item">
                                        <div class="sp-item">
                                            <div class="product-wrapper">
                                                <div class="flex product-img-slide">
                                                    <div class="product-images v2">
                                                        <div class="main-img v2 js-product-slider">
                                                            <a href="#" class="hover-images effect"><img src="img/single/sonos1.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sonos2.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sonos3.jpg" alt="photo" class="img-reponsive"></a>
                                                        </div>
                                                    </div>
                                                    <div class="multiple-img-list-ver2 v2 js-click-product">
                                                        <div class="product-col v2">
                                                            <div class="img active">
                                                                <img src="img/single/sonos1.jpg" alt="photo" class="img-reponsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sonos2.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sonos3.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-box">
                                                <div class="product-item-countd">
                                                    <div class="product-info">
                                                        <div class="product-info-top">
                                                            <h1 class="deal-title">Super deal</h1>
                                                            <h3 class="product-title v3"><a href="#">Sonos One – Voice Controlled Smart Speaker </a></h3>
                                                            <div class="product-price thin-price">
                                                                <span class="red">$79.00</span>
                                                                <span class="old">$99.00</span>
                                                            </div>
                                                            <div class="deal-progress">
                                                                <div class="deal-stock">
                                                                    <span class="stock-sold">19% already claimed</span>
                                                                    <span class="stock-available">Available: <strong>22</strong></span>
                                                                </div>
                                                                <div class="progress">
                                                                    <span class="progress-bar" style="width:27.5956%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="time-cound">
                                                            <p>Deal ends in :</p>
                                                            <div class="countdown countdown-time v2" data-countdown="countdown" data-date="08-31-2018-00-00-00">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="sp-item">
                                            <div class="product-wrapper">
                                                <div class="flex product-img-slide">
                                                    <div class="product-images v2">
                                                        <div class="main-img v2 js-product-slider">
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony2.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony3.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                                        </div>
                                                    </div>
                                                    <div class="multiple-img-list-ver2 v2 js-click-product">
                                                        <div class="product-col v2">
                                                            <div class="img active">
                                                                <img src="img/single/sony.jpg" alt="photo" class="img-reponsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony2.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony3.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-box">
                                                <div class="product-item-countd">
                                                    <div class="product-info">
                                                        <div class="product-info-top">
                                                            <h1 class="deal-title">Super deal</h1>
                                                            <h3 class="product-title v3"><a href="#">Sonos One – Voice Controlled Smart Speaker </a></h3>
                                                            <div class="product-price thin-price">
                                                                <span class="red">$79.00</span>
                                                                <span class="old">$99.00</span>
                                                            </div>
                                                            <div class="deal-progress">
                                                                <div class="deal-stock">
                                                                    <span class="stock-sold">19% already claimed</span>
                                                                    <span class="stock-available">Available: <strong>22</strong></span>
                                                                </div>
                                                                <div class="progress">
                                                                    <span class="progress-bar" style="width:27.5956%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="time-cound">
                                                            <p>Deal ends in :</p>
                                                            <div class="countdown countdown-time v2" data-countdown="countdown" data-date="08-31-2018-00-00-00">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-item">
                                        <div class="sp-item">
                                            <div class="product-wrapper">
                                                <div class="flex product-img-slide">
                                                    <div class="product-images v2">
                                                        <div class="main-img v2 js-product-slider">
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony2.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony3.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                                            <a href="#" class="hover-images effect"><img src="img/single/sony4.jpg" alt="photo" class="img-reponsive"></a>
                                                        </div>
                                                    </div>
                                                    <div class="multiple-img-list-ver2 v2 js-click-product">
                                                        <div class="product-col v2">
                                                            <div class="img active">
                                                                <img src="img/single/sony.jpg" alt="photo" class="img-reponsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony2.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony3.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="product-col v2">
                                                            <div class="img">
                                                                <img src="img/single/sony4.jpg" alt="images" class="img-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-box">
                                                <div class="product-item-countd">
                                                    <div class="product-info">
                                                        <div class="product-info-top">
                                                            <h1 class="deal-title">Super deal</h1>
                                                            <h3 class="product-title v3"><a href="#">Sonos One – Voice Controlled Smart Speaker </a></h3>
                                                            <div class="product-price thin-price">
                                                                <span class="red">$79.00</span>
                                                                <span class="old">$99.00</span>
                                                            </div>
                                                            <div class="deal-progress">
                                                                <div class="deal-stock">
                                                                    <span class="stock-sold">19% already claimed</span>
                                                                    <span class="stock-available">Available: <strong>22</strong></span>
                                                                </div>
                                                                <div class="progress">
                                                                    <span class="progress-bar" style="width:27.5956%"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="time-cound">
                                                            <p>Deal ends in :</p>
                                                            <div class="countdown countdown-time v2" data-countdown="countdown" data-date="08-31-2018-00-00-00">

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
                    </div>
                </div>-->
                <div class="releases v2">
                    <div class="container container-240">
                        <div class="title-icon t-column mg-50">
                            <div class="t-inside">
                                <img src="img/real.png" alt="">
                            </div>
                            <h1>Новые поступления</h1>
                        </div>
                        <ul class="product-tab-sw2">
                            <li class="active"><a data-toggle="tab" href="#tv2" aria-expanded="true">КЕПКИ</a></li>
                            <li class=""><a data-toggle="tab" href="#audito2" aria-expanded="false">РУБАШКИ</a></li>
                            <li class=""><a data-toggle="tab" href="#camera2" aria-expanded="false">Наушники</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tv2" class="tab-pane fade in active">
                                <div class="js-multiple-row2">

                                    @foreach($products as $product)
                                        <div class="product-item">
                                            <div class="pd-bd product-inner">
                                                <div class="product-img">
                                                    @if (!$product->picture)
                                                        <a href="{{ url('/product') }}"><img src="img/product/anker.jpg" alt="" class="img-reponsive"></a>
                                                    @endif
                                                    <a href="{{ url('/product') }}"><img src="img/product/{{ $product->picture }}" alt="" class="img-reponsive"></a>
                                                    <!--<div class="ribbon-price red"><span>- 30% </span></div>-->
                                                </div>
                                                <div class="product-info">
                                                    <div class="color-group"></div>
                                                    <div class="element-list element-list-left">
                                                        <ul class="desc-list">
                                                            <li>Connects directly to Bluetooth</li>
                                                            <li>Battery Indicator light</li>
                                                            <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                            <li>Computers running Windows</li>
                                                        </ul>
                                                    </div>
                                                    <div class="element-list element-list-middle">
                                                        <div class="product-rating bd-rating">
                                                            <span class="star star-5"></span>
                                                            <span class="star star-4"></span>
                                                            <span class="star star-3"></span>
                                                            <span class="star star-2"></span>
                                                            <span class="star star-1"></span>
                                                            <div class="number-rating">( 896 reviews )</div>
                                                        </div>
                                                        <p class="product-cate">@if (isset($product->brand->name)) {{ $product->brand->name }} @endif</p>
                                                        <p class="product-cate">Артикул: {{ $product->code }}</p>
                                                        <h3 class="product-title"><a href="{{ url('/product') }}">{{ $product->name }}</a></h3>
                                                        <div class="product-bottom">
                                                            <div class="product-price">
                                                                <span class="red">{{ $product->in_price }}</span>
                                                                <span class="old">{{ $product->out_price }}</span>
                                                            </div>
                                                            <a href="{{ url('/product') }}" class="btn-icon btn-view">
                                                                <span class="icon-bg icon-view"></span>
                                                            </a>
                                                        </div>
                                                        <div class="product-bottom-group">
                                                            <!--<a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-cart"></span>
                                                            </a>-->
                                                            <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-wishlist"></span>
                                                            </a>
                                                            <a href="#" class="btn-icon">
                                                                <span class="icon-bg icon-compare"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-button-group">
                                                        <!--<a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-cart"></span>
                                                        </a>-->
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-wishlist"></span>
                                                        </a>
                                                        <a href="#" class="btn-icon">
                                                            <span class="icon-bg icon-compare"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tv.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="audito2" class="tab-pane fade">
                                <div class="js-multiple-row2">
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/logitech.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tv2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tv2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">

                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/logitech.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tv.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="camera2" class="tab-pane fade">
                                <div class="js-multiple-row2">
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/fujifilm.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">

                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/logitech.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tv2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers & Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tv2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                                <div class="ribbon-price red"><span>- 30% </span></div>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group"></div>
                                                <div class="element-list element-list-left">
                                                    <ul class="desc-list">
                                                        <li>Connects directly to Bluetooth</li>
                                                        <li>Battery Indicator light</li>
                                                        <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                        <li>Computers running Windows</li>
                                                    </ul>
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <div class="product-rating bd-rating">
                                                        <span class="star star-5"></span>
                                                        <span class="star star-4"></span>
                                                        <span class="star star-3"></span>
                                                        <span class="star star-2"></span>
                                                        <span class="star star-1"></span>
                                                        <div class="number-rating">( 896 reviews )</div>
                                                    </div>
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">HP 22er 21.5-inch LED</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price">
                                                            <span class="red">$1.450.00</span>
                                                            <span class="old">$1,215.00</span>
                                                        </div>
                                                        <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                    </div>
                                                    <div class="product-bottom-group">
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                        <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                    <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/headphone3.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/pd4.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/samsungbox.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/logitech.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Camera & Photo</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/smartwatch.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/macbook2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Audio Speakers</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/tv.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item">
                                        <div class="pd-bd product-inner">
                                            <div class="product-img">
                                                <a href="#"><img src="img/product/sound2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="color-group">
                                                </div>
                                                <div class="element-list element-list-left">
                                                </div>
                                                <div class="element-list element-list-middle">
                                                    <p class="product-cate">Computers &amp; Accessories</p>
                                                    <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                    <div class="product-bottom">
                                                        <div class="product-price"><span>$1,215.00</span></div>
                                                        <a href="#" class="btn-icon btn-view">
                                                <span class="icon-bg icon-view"></span>
                                            </a>
                                                    </div>
                                                </div>
                                                <div class="product-button-group">

                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-wishlist"></span>
                                        </a>
                                                    <a href="#" class="btn-icon">
                                            <span class="icon-bg icon-compare"></span>
                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="container container-240">
                    <div class="banner-callus spc2 image-bd effect_img2">
                        <a href="#"><img src="img/banner/yandex.jpg" alt="" class="img-responsive"></a>
                        <div class="box-center v2">
                            <p>Доставка курьерами</p>
                            <a href="#" class="btn-callus">Начать покупки</a>
                        </div>
                    </div>
                </div>
                <!-- e-category  -->
                <div class="e-category">
                    <div class="container container-240">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <h1 class="cate-title">Избранные товары</h1>
                                @foreach($featureds as $featured)
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="{{ url('/product') }}"><img src="img/product/{{ $featured->picture }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="{{ url('/product') }}">{{ $featured->name }} </a></h3>
                                        <div class="product-price v2"><span>{{ $featured->out_price }}</span></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <h1 class="cate-title">Самые новые</h1>
                                @foreach($featureds as $featured)
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="{{ url('/product') }}"><img src="img/product/{{ $featured->picture }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="{{ url('/product') }}">{{ $featured->name }} </a></h3>
                                            <div class="product-price v2"><span>{{ $featured->out_price }}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <h1 class="cate-title">Хит продаж</h1>
                                @foreach($featureds as $featured)
                                    <div class="cate-item">
                                        <div class="product-img">
                                            <a href="{{ url('/product') }}"><img src="img/product/{{ $featured->picture }}" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-title"><a href="{{ url('/product') }}">{{ $featured->name }} </a></h3>
                                            <div class="product-price v2"><span>{{ $featured->out_price }}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endsection

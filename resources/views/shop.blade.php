@extends('layouts.main')

@section('maincontent')

    <!--content-->
    <div class="container container-240 shop-collection">
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Главная</a></li>
            <li class="active">Магазин</li>
        </ul>
        <div class="filter-collection-left hidden-lg hidden-md">
            <a class="btn">Фильтр</a>
        </div>
        <div class="row shop-colect">
            <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
                <div class="close-sidebar-collection hidden-lg hidden-md">
                    <span>фильтр</span><i class="icon_close ion-close"></i>
                </div>
                <div class="filter filter-cate">
                    <ul class="wiget-content v2">
                        @foreach($items as $item)
                            <li class="active"><a href="#">{{ $item->name }} <span class="number">(67)</span></a></li>
                        @endforeach
                        <li class="active"><a href="#">Домашние аудио центры <span class="number">(65)</span></a></li>
                        <li class="active"><a href="#">Наушники <span class="number">(80)</span></a></li>
                        <li class="active"><a href="#">Автоэлектроника <span class="number">(80)</span></a></li>
                    </ul>
                </div>
                <div class="filter filter-group">
                    <h1 class="widget-blog-title">Фильтр товаров</h1>
                    <div class="filter-price filter-inside">
                        <h3>Цена</h3>
                        <div class="filter-content">
                            <div class="price-range-holder">
                                <input type="text" class="price-slider" value="">
                            </div>
                            <span class="min-max">
                                    Цена: 5000 — 25000
                                </span>
                            <a href="#" class="btn-filter e-gradient">Фильтр</a>
                        </div>
                    </div>
                    <div class="filter-brand filter-inside">
                        <h3>Бренды</h3>
                        <ul class="e-filter brand-filter">
                            @foreach($brands as $brand)
                                <li><a href="#">{{ $brand->name }} <span class="number">(52)</span></a></li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn-showmore">Показать все +</a>
                    </div>
                </div>
                <div class="banner">
                    <a class="image-bd hover-images" href=""><img src="img/o-banner3.jpg" alt="" class="img-reponsive"></a>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
                <div class="e-product">
                    <div class="pd-banner">
                        <a href="#" class="image-bd effect_img2"><img src="img/products-landing-page.png" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="pd-top">
                        <h1 class="title">Магазин</h1>
                        <div class="show-element"><span>Показаны 1–20 из 20 результатов</span></div>
                    </div>
                    <div class="pd-middle">
                        <div class="view-mode view-group">
                            <a class="grid-icon col"><img src="img/grid.png" alt=""></a>
                            <a class="grid-icon col2 active"><img src="img/grid2.png" alt=""></a>
                            <a class="list-icon list"><img src="img/list.png" alt=""></a>
                        </div>
                        <div class="pd-sort">
                            <div class="filter-sort">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="dropdown-label">Сортировка по умолчанию</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="manual">Избранные</a></li>
                                        <li><a href="best-selling">Популярное</a></li>
                                        <li><a href="title-ascending">По алфавиту, A-Я</a></li>
                                        <li><a href="title-descending">По алфавиту, Я-А</a></li>
                                        <li><a href="price-descending">Цена, по убыванию</a></li>
                                        <li><a href="price-ascending">Цена, по возрастанию</a></li>
                                        <li><a href="created-ascending">Дата, сначала старые</a></li>
                                        <li><a href="created-descending">Дата, сначала новые</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-show">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Показать
                                        <span class="dropdown-label">12</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">20</a></li>
                                        <li><a href="#">40</a></li>
                                        <li><a href="#">80</a></li>
                                        <li><a href="#">120</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-collection-grid product-grid product-grid-v2">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                <div class="pd-bd product-inner">
                                    <div class="product-img">
                                        <a href="{{ url('/product/'.$product->id) }}">

                                            @if (!$product->picture)
                                                <a href="{{ url('/product/'.$product->id) }}"><img src="img/product/anker.jpg" alt="" class="img-reponsive"></a>
                                            @endif
                                            <img src="img/product/{{ $product->picture }}" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="color-group"></div>
                                        <div class="element-list element-list-left">
                                            <ul class="desc-list">
                                                <li>Артикул: {{ $product->code }}</li>
                                                <li>{{ $product->memo }}</li>
                                                <li>Бренд: {{ $product->brand->name }}</li>
                                            </ul>
                                        </div>
                                        <div class="element-list element-list-middle">
                                            <!--<div class="product-rating bd-rating">
                                                <span class="star star-5"></span>
                                                <span class="star star-4"></span>
                                                <span class="star star-3"></span>
                                                <span class="star star-2"></span>
                                                <span class="star star-1"></span>
                                                <div class="number-rating">( 896 reviews )</div>
                                            </div>-->
                                            <p class="product-cate">Название категории</p>
                                            <h3 class="product-title"><a href="{{ url('/product/'.$product->id) }}">{{ $product->name }}</a></h3>
                                            <div class="product-bottom">
                                                <div class="product-price"><span>{{ $product->out_price }}</span></div>
                                                <a href="{{ url('/product/'.$product->id) }}" class="btn-icon btn-view">
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



                        </div>
                    </div>
                    <div class="pd-middle space-v1">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                        </ul>
                        <div class="pd-sort">
                            <div class="filter-sort">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="dropdown-label">Сортировка по умолчанию</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="manual">Избранные</a></li>
                                        <li><a href="best-selling">Популярное</a></li>
                                        <li><a href="title-ascending">По алфавиту, A-Я</a></li>
                                        <li><a href="title-descending">По алфавиту, Я-А</a></li>
                                        <li><a href="price-descending">Цена, по убыванию</a></li>
                                        <li><a href="price-ascending">Цена, по возрастанию</a></li>
                                        <li><a href="created-ascending">Дата, сначала старые</a></li>
                                        <li><a href="created-descending">Дата, сначала новые</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-show">
                                <div class="dropdown">
                                    <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Показать
                                        <span class="dropdown-label">12</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">20</a></li>
                                        <li><a href="#">40</a></li>
                                        <li><a href="#">80</a></li>
                                        <li><a href="#">120</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <!--<div class="feature">
        <div class="container container-240">
            <div class="feature-inside">
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/truck.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Worldwide Delivery</h3>
                        <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Safe Payment</h3>
                        <p>Pay with the world’s most popular and secure payment methods.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/safety.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Shop with Confidence</h3>
                        <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                    </div>
                </div>

                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/telephone.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>24/7 Help Center</h3>
                        <p>Round-the-clock assistance for a smooth shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- / end content -->
@endsection

@extends('layouts.main')

@section('maincontent')

        <!--content-->
        <div class="container container-240">
             <div class="single-product-detail product-bundle product-aff">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/shop') }}">Магазин</a></li>
                    <li class="active">{{ $products->name }} </li>
                </ul>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">

                        <div class="flex product-img-slide">


                            <div class="product-images">
                                <div class="main-img js-product-slider">
                                    <img src="{{asset('img/product/'.$products->picture)}}" alt="photo" class="img-reponsive">

                                </div>
                                <div class="e-product-button" data-toggle="modal" data-target="#my360"><span>360˚</span></div>
                            </div>
                            <div class="multiple-img-list-ver2 js-click-product">
                                <div class="product-col">
                                    <div class="img active">
                                        <img src="{{asset('img/product/'.$products->picture)}}" alt="photo" class="img-reponsive">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="single-flex">
                            <div class="single-product-info product-info product-grid-v2 s-50">
                                <p class="product-cate">{{ $products->brand->name }}</p>
                                <!--<div class="product-rating">
                                    <span class="star star-5"></span>
                                    <span class="star star-4"></span>
                                    <span class="star star-3"></span>
                                    <span class="star star-2"></span>
                                    <span class="star star-1"></span>
                                    <div class="number-rating">( 896 reviews )</div>
                                </div>-->
                                <h3 class="product-title"><a href="#">{{ $products->name }}</a></h3>
                                <div class="product-price">
                                    <span>{{ $products->out_price }}</span>
                                </div>
                                <div class="availability">
                                    <p class="product-inventory"> <label>Наличие : </label><span> {{ $products->online }}</span></p>
                                </div>
                                <div class="product-brand">
                                    <p>Бренд :</p>
                                    {{ $products->brand->name }}
                                </div>
                                <div class="product-sku">
                                    <label>Артикул :</label><span> {{ $products->code }}</span>
                                </div>
                                <div class="short-desc">
                                    <p class="product-desc">{{ $products->memo }}</p>
                                    <ul class="desc-list">
                                       <li>Возможные характеристики</li>
                                       <li>Функции</li>
                                       <li>И параметры</li>
                                    </ul>
                                </div>
                                <div class="color-group">
                                    <label>Цвета :</label>
                                    <a href="#" class="circle black"></a>
                                    <a href="#" class="circle red"></a>
                                    <a href="#" class="circle gray"></a>
                                </div>

                                <div class="single-product-button-group">
                                    <!--<div class="e-btn cart-qtt btn-gradient">
                                        <div class="e-quantity">
                                          <input type="number" step="1" min="1" max="999" name="quantity" value="1" title="Qty" class="qty input-text js-number" size="4">
                                          <div class="tc pa">
                                             <a class="js-plus quantity-right-plus"><i class="fa fa-caret-up"></i></a>
                                             <a class="js-minus quantity-left-minus"><i class="fa fa-caret-down"></i></a>
                                          </div>
                                       </div>
                                       <a href="#" class="btn-add-cart">Add to cart <span class="icon-bg icon-cart v2"></span></a>
                                    </div>-->
                                    <a href="#" class="e-btn btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="e-btn btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>

                                <div class="product-tags">
                                    <label>Тэги :</label>
                                    <a href="#">Ремни,</a>
                                    <a href="#">Кожа,</a>
                                    <a href="#">Мужская</a>
                                </div>
                            </div>
                            <div class="single-product-feature s-50 hidden-xs hidden-sm">

                                <div class="hot-line e-gradient">
                                    <p>Звоните нам</p>
                                    <div class="flex align-center tele">
                                        <img src="{{ asset('img/feature/hotline.png') }}" alt="">
                                        <div class="phone-number">
                                            <p>+7(123) 456 7891</p>
                                            <p>+7(198) 765 4321</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="single-product-tab bd-7">
                    <div class="cmt-title text-center abs">
                        <ul class="nav nav-tabs v3 text-center">
                            <li class="active"><a data-toggle="pill" href="#desc">Description</a></li>
                            <li><a data-toggle="pill" href="#info">Specification</a></li>
                            <li><a data-toggle="pill" href="#review">Reviews</a></li>
                        </ul>
                    </div>
                <div class="tab-content js-tab">
                    <div id="desc" class="tab-pane fade in active">
                         <div class="entry-content active">
                            <div class="e-text">
                                <div class="entry-inside v4 text-center">
                                    <img src="img/single/simple_icon.png" alt="">
                                    <h1 class="entry-title spc">Multi-Purpose WooCommerce Theme for Electronics Store </h1>
                                </div>
                                <div class="entry-inside v3">

                                        <div class="text-center image-bd">
                                            <img src="img/single/des_1.jpg" alt="">
                                        </div>

                                        <div class="row entry-middle">
                                            <div class="entry-info col-xs-12 col-sm-6 col-md-6">
                                                <h3>This is demo heading</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                            </div>

                                            <div class="entry-info col-xs-12 col-sm-6 col-md-6">
                                                <h3>This is demo heading</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                                            </div>
                                        </div>

                                        <div class="text-center image-bd img-cal">
                                            <img src="img/single/des_2.jpg" alt="">
                                        </div>
                                </div>
                            </div>
                            <div class="entry-button text-center abs">
                                <a href="#" class="btn-show btn-show-more">Show more<i class="ion-chevron-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="info" class="tab-pane fade in">

                    </div>
                    <div id="review" class="tab-pane fade in ">

                    </div>

                </div>
            </div>-->
            </div>
            <div class="bestseller">
                <div class="ecome-heading style5v3 spc5v3">
                    <h1>Этот же бренд</h1>
                    <a href="#" class="btn-show">Посмотреть ещё<i class="ion-ios-arrow-forward"></i></a>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">

                    @foreach($relateds as $related)
                    <div class="product-item">
                        <div class="pd-bd product-inner">
                            <div class="product-img">
                                <a href="{{ url('/product/'.$related->id.'/'.$related->brand_id) }}"><img src="{{ asset('img/product/'.$related->picture) }}" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="product-info">
                                <div class="color-group">
                                </div>
                                <div class="element-list element-list-left">
                                </div>
                                <div class="element-list element-list-middle">
                                    <p class="product-cate">{{ $related->brand->name }}</p>
                                    <h3 class="product-title"><a href="{{ url('/product/'.$related->id.'/'.$related->brand_id) }}">{{ $related->name }}</a></h3>
                                    <div class="product-bottom">
                                        <div class="product-price"><span>{{ $related->out_price }}</span></div>
                                        <a href="{{ url('/product/'.$related->id.'/'.$related->brand_id) }}" class="btn-icon btn-view">
                                            <span class="icon-bg icon-view"></span>
                                        </a>
                                    </div>
                                </div>

                                {{--<div class="product-button-group">
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-wishlist"></span>
                                    </a>
                                    <a href="#" class="btn-icon">
                                        <span class="icon-bg icon-compare"></span>
                                    </a>
                                </div>
                                --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{--<div class="e-qa">
                <div class="cmt-title v2 text-center abs"><h1 class="oval-bd btn-gradient">Customer questions & answers</h1></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>Does the sonos one pair up with a sonos play1 as a stereo pair ?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>As long as the players are grouped in a configuration to your liking, you can ask Alexa on the Sonos One or on an echo device to start music and playback will begin across the Sonos grouping. </p>
                            </div>
                        </div>

                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>It uses a dictionary of over 200 Latin words ?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>Latin words, combined with a handful of model sentence structures,to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humou</p>
                            </div>
                        </div>

                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>Does the sonos one pair up with a sonos play1 as a stereo pair ?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>As long as the players are grouped in a configuration to your liking, you can ask Alexa on the Sonos One or on an echo device to start music and playback will begin across the Sonos grouping.  </p>
                            </div>
                        </div>

                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>It uses a dictionary of over 200 Latin words ?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>Is the quality of the "sonos one" sound the same as ?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                            </div>
                        </div>

                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                        </div>

                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>Is the quality of the "sonos one" sound the same as ?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                            </div>
                        </div>

                        <div class="qa-element">
                            <div class="qa-quest">
                                <span class="qa-icon">Q</span>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting?</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-icon">A</span>
                                <p>Search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}
            {{--<div class="bestseller single-space">
                <div class="ecome-heading style5v3 spc5v3">
                    <h1>Этот же бренд</h1>
                    <a href="#" class="btn-show">Посмотреть ещё<i class="ion-ios-arrow-forward"></i></a>
                </div>
                <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate">

                    @foreach($relateds as $related)
                        <div class="product-item">
                            <div class="pd-bd product-inner">
                                <div class="product-img">
                                    <a href="{{ url('/product/'.$related->id) }}"><img src="{{ asset('img/product/'.$related->picture) }}" alt="" class="img-reponsive"></a>
                                </div>
                                <div class="product-info">
                                    <div class="color-group">
                                    </div>
                                    <div class="element-list element-list-left">
                                    </div>
                                    <div class="element-list element-list-middle">
                                        <p class="product-cate">{{ $related->brand->name }}</p>
                                        <h3 class="product-title"><a href="#">{{ $related->name }}</a></h3>
                                        <div class="product-bottom">
                                            <div class="product-price"><span>{{ $related->out_price }}</span></div>
                                            <a href="{{ url('/product/'.$related->id) }}" class="btn-icon btn-view">
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
                    @endforeach
                </div>
            </div>--}}
        </div>
        {{--<div class="e-category">
            <div class="container container-240">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h1 class="cate-title">Избранные товары</h1>
                        @foreach($featureds as $featured)
                            <div class="cate-item">
                                <div class="product-img">
                                    <a href="{{ url('/product') }}"><img src="{{ asset('img/product/'.$featured->picture )}}" alt="" class="img-reponsive"></a>
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
                                    <a href="{{ url('/product') }}"><img src="{{ asset('img/product/'.$featured->picture )}}" alt="" class="img-reponsive"></a>
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
                                    <a href="{{ url('/product') }}"><img src="{{ asset('img/product/'.$featured->picture )}}" alt="" class="img-reponsive"></a>
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
        </div>--}}
        <!-- / end content -->
@endsection

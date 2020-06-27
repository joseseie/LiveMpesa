@extends('layouts.BaseLayout')

@section('content')

<section id="slider"><!--slider-->
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($products as $index => $product)

                    @if($index === 0)
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                    @else
                        <li data-target="#slider-carousel" data-slide-to="{{ $index }}"></li>
                    @endif

                @endforeach
            </ol>

            <div class="carousel-inner">

                @foreach($products as $index => $product)

                    @if($index === 0)
                        @include('products.carousel-item', ['active' => true, 'product' => $product])
                    @else
                        @include('products.carousel-item',  compact('product'))
                    @endif

                @endforeach

            </div>

            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
</div>
</div>
</section><!--/slider-->

<section>
<div class="container">
<div class="row">
    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Sportswear
                            </a>
                        </h4>
                    </div>
                    <div id="sportswear" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">Nike </a></li>
                                <li><a href="#">Under Armour </a></li>
                                <li><a href="#">Adidas </a></li>
                                <li><a href="#">Puma</a></li>
                                <li><a href="#">ASICS </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Mens
                            </a>
                        </h4>
                    </div>
                    <div id="mens" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">Fendi</a></li>
                                <li><a href="#">Guess</a></li>
                                <li><a href="#">Valentino</a></li>
                                <li><a href="#">Dior</a></li>
                                <li><a href="#">Versace</a></li>
                                <li><a href="#">Armani</a></li>
                                <li><a href="#">Prada</a></li>
                                <li><a href="#">Dolce and Gabbana</a></li>
                                <li><a href="#">Chanel</a></li>
                                <li><a href="#">Gucci</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                Womens
                            </a>
                        </h4>
                    </div>
                    <div id="womens" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">Fendi</a></li>
                                <li><a href="#">Guess</a></li>
                                <li><a href="#">Valentino</a></li>
                                <li><a href="#">Dior</a></li>
                                <li><a href="#">Versace</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Kids</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Fashion</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Households</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Interiors</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Clothing</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Bags</a></h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#">Shoes</a></h4>
                    </div>
                </div>
            </div><!--/category-products-->

            <div class="brands_products"><!--brands_products-->
                <h2>Brands</h2>
                <div class="brands-name">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                        <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                        <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                        <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                        <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                        <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                        <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                    </ul>
                </div>
            </div><!--/brands_products-->

            <div class="price-range"><!--price-range-->
                <h2>Price Range</h2>
                <div class="well text-center">
                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                    <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                </div>
            </div><!--/price-range-->

            <div class="shipping text-center"><!--shipping-->
                <img src="{{asset('images/home/shipping.jpg')}}" alt="" />
            </div><!--/shipping-->

        </div>
    </div>

    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Features Items</h2>

            @foreach($products as $index => $product)

                @include('products.product-item',  compact('product'))

            @endforeach



        </div><!--features_items-->

        {{--<div class="category-tab"><!--category-tab-->--}}
            {{--<div class="col-sm-12">--}}
                {{--<ul class="nav nav-tabs">--}}
                    {{--<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>--}}
                    {{--<li><a href="#blazers" data-toggle="tab">Blazers</a></li>--}}
                    {{--<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>--}}
                    {{--<li><a href="#kids" data-toggle="tab">Kids</a></li>--}}
                    {{--<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="tab-content">--}}
                {{--<div class="tab-pane fade active in" id="tshirt" >--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="tab-pane fade" id="blazers" >--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="tab-pane fade" id="sunglass" >--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="tab-pane fade" id="kids" >--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="tab-pane fade" id="poloshirt" >--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery2.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery4.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery3.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-3">--}}
                        {{--<div class="product-image-wrapper">--}}
                            {{--<div class="single-products">--}}
                                {{--<div class="productinfo text-center">--}}
                                    {{--<img src="{{asset('images/home/gallery1.jpg')}}" alt="" />--}}
                                    {{--<h2>$56</h2>--}}
                                    {{--<p>Easy Polo Black Edition</p>--}}
                                    {{--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!--/category-tab-->--}}

        <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">recommended items</h2>

            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="item active">

                        @foreach($products as $index => $product)

                            @if($index < 3)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{asset('images/home/recommend'.($index + 1).'.jpg')}}" alt="" />
{{--                                                <img src="{{ asset( '/storage/' . $product->image_url) }}" style="width: 312px;height: 157px" alt="" />--}}
                                                <h2>{{ $product->price }} MZN</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="javascript:;" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Pagar</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            @endif

                        @endforeach
                    </div>
                </div>
                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div><!--/recommended_items-->

    </div>
</div>
</div>
</section>

<footer id="footer"><!--Footer-->
<div class="footer-top">
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <div class="companyinfo">
                <h2><span>e</span>-shopper</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="col-sm-3">
                <div class="video-gallery text-center">
                    <a href="#">
                        <div class="iframe-img">
                            <img src="{{asset('images/home/iframe1.png')}}" alt="" />
                        </div>
                        <div class="overlay-icon">
                            <i class="fa fa-play-circle-o"></i>
                        </div>
                    </a>
                    <p>Circle of Hands</p>
                    <h2>24 DEC 2014</h2>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="video-gallery text-center">
                    <a href="#">
                        <div class="iframe-img">
                            <img src="{{asset('images/home/iframe2.png')}}" alt="" />
                        </div>
                        <div class="overlay-icon">
                            <i class="fa fa-play-circle-o"></i>
                        </div>
                    </a>
                    <p>Circle of Hands</p>
                    <h2>24 DEC 2014</h2>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="video-gallery text-center">
                    <a href="#">
                        <div class="iframe-img">
                            <img src="{{asset('images/home/iframe3.png')}}" alt="" />
                        </div>
                        <div class="overlay-icon">
                            <i class="fa fa-play-circle-o"></i>
                        </div>
                    </a>
                    <p>Circle of Hands</p>
                    <h2>24 DEC 2014</h2>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="video-gallery text-center">
                    <a href="#">
                        <div class="iframe-img">
                            <img src="{{asset('images/home/iframe4.png')}}" alt="" />
                        </div>
                        <div class="overlay-icon">
                            <i class="fa fa-play-circle-o"></i>
                        </div>
                    </a>
                    <p>Circle of Hands</p>
                    <h2>24 DEC 2014</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="address">
                <img src="{{asset('images/home/map.png')}}" alt="" />
                <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{ asset( '/storage/' . $product->image_url) }}" alt=""  style="height: 290px;width: 313px" />
{{--                <img src="{{ asset('images/home/product1.jpg')}}" alt="" />--}}
                <h2>{{ $product->price }} MZN</h2>
                <p>{{ $product->name }}</p>
                <a href="javascript:;"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                <a href="javascript:;"  class="btn btn-danger add-to-cart" style="background: red;color: white">Pagar</a>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>{{ $product->price }} MZN</h2>
                    <p>{{ $product->name }}</p>
                    <a href="javascript:;"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    <a href="javascript:;" class="btn btn-danger add-to-cart" style="background: white;color: red">Pagar (MPESA)</a>
                </div>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{ asset( '/storage/' . $product->image_url) }}" alt=""  style="height: 290px;width: 313px" />
{{--                <img src="{{ asset('images/home/product1.jpg')}}" alt="" />--}}
                <h2>{{ $product->price }} MZN</h2>
                <p>{{ $product->name }}</p>
                <a href="javascript:;"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                <a href="javascript:;"  class="btn btn-danger add-to-cart" style="background: red;color: white" data-toggle="modal" data-target="#myModal{{ $product->id }}">Pagar</a>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>{{ $product->price }} MZN</h2>
                    <p>{{ $product->name }}</p>
                    <a href="javascript:;"  class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    <a href="javascript:;" class="btn btn-danger add-to-cart" style="background: white;color: red" data-toggle="modal" data-target="#myModal{{ $product->id }}">Pagar (MPESA)</a>
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

    <!-- The Modal -->
    <div class="modal" id="myModal{{ $product->id }}">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Seu contacto</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form method="POST" action="/product/pay">
                <!-- Modal body -->
                <div class="modal-body">

                    @csrf

                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">
                            Seu número:
                        </label>

                        <div class="col-md-6">
                            <input id="phone" type="number" class="form-control" name="phone" placeholder="84/85" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Pagar
                        </button>
                    </div>



                </div>
                <!-- Modal footer -->

                </form>

            </div>
        </div>
    </div>

</div>
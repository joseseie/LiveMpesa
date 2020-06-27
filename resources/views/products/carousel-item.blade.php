<div class="item {{ isset($active) ? 'active' : '' }}">
    <div class="col-sm-6">
        <h1><span>E</span>-LIVE_MPESA_SHOP</h1>
        <h2>
            {{ $product->name  }}
        </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
        <button type="button" class="btn btn-default get">Get it now</button>
    </div>
    <div class="col-sm-6">
{{--        @php($url = env('APP_URL') === 'http://localhost:8000' ? 'https://live.explicador.co.mz' : '')--}}
        {{--<img src="{{ asset('images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />--}}
        <img src="{{ asset( '/storage/' . $product->image_url) }}" class="girl img-responsive" alt="" />
        {{--<img src="{{ asset('images/home/pricing.png')}}"  class="pricing" alt="" />--}}
    </div>
</div>
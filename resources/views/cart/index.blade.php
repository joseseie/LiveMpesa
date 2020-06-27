@extends('layouts.BaseLayout')

@section('content')

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Shopping Cart</li>
</ol>
</div>
<div class="table-responsive cart_info">
<table class="table table-condensed">
<thead>
<tr class="cart_menu">
<td class="image">Item</td>
<td class="description"></td>
<td class="price">Price</td>
<td class="quantity">Quantity</td>
<td class="total">Total</td>
<td></td>
</tr>
</thead>
<tbody>
<tr>
<td class="cart_product">
<a href=""><img src="images/cart/one.png" alt=""></a>
</td>
<td class="cart_description">
<h4><a href="">Colorblock Scuba</a></h4>
<p>Web ID: 1089772</p>
</td>
<td class="cart_price">
<p>$59</p>
</td>
<td class="cart_quantity">
<div class="cart_quantity_button">
    <a class="cart_quantity_up" href=""> + </a>
    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
    <a class="cart_quantity_down" href=""> - </a>
</div>
</td>
<td class="cart_total">
<p class="cart_total_price">$59</p>
</td>
<td class="cart_delete">
<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
</td>
</tr>

<tr>
<td class="cart_product">
<a href=""><img src="images/cart/two.png" alt=""></a>
</td>
<td class="cart_description">
<h4><a href="">Colorblock Scuba</a></h4>
<p>Web ID: 1089772</p>
</td>
<td class="cart_price">
<p>$59</p>
</td>
<td class="cart_quantity">
<div class="cart_quantity_button">
    <a class="cart_quantity_up" href=""> + </a>
    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
    <a class="cart_quantity_down" href=""> - </a>
</div>
</td>
<td class="cart_total">
<p class="cart_total_price">$59</p>
</td>
<td class="cart_delete">
<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
</td>
</tr>
<tr>
<td class="cart_product">
<a href=""><img src="images/cart/three.png" alt=""></a>
</td>
<td class="cart_description">
<h4><a href="">Colorblock Scuba</a></h4>
<p>Web ID: 1089772</p>
</td>
<td class="cart_price">
<p>$59</p>
</td>
<td class="cart_quantity">
<div class="cart_quantity_button">
    <a class="cart_quantity_up" href=""> + </a>
    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
    <a class="cart_quantity_down" href=""> - </a>
</div>
</td>
<td class="cart_total">
<p class="cart_total_price">$59</p>
</td>
<td class="cart_delete">
<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section> <!--/#cart_items-->

<section id="do_action">
<div class="container">
<div class="heading">
<h3>What would you like to do next?</h3>
<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
</div>
<div class="row">
<div class="col-sm-6">
<div class="chose_area">
<ul class="user_option">
<li>
    <input type="checkbox">
    <label>Use Coupon Code</label>
</li>
<li>
    <input type="checkbox">
    <label>Use Gift Voucher</label>
</li>
<li>
    <input type="checkbox">
    <label>Estimate Shipping & Taxes</label>
</li>
</ul>
<ul class="user_info">
<li class="single_field">
    <label>Country:</label>
    <select>
        <option>United States</option>
        <option>Bangladesh</option>
        <option>UK</option>
        <option>India</option>
        <option>Pakistan</option>
        <option>Ucrane</option>
        <option>Canada</option>
        <option>Dubai</option>
    </select>

</li>
<li class="single_field">
    <label>Region / State:</label>
    <select>
        <option>Select</option>
        <option>Dhaka</option>
        <option>London</option>
        <option>Dillih</option>
        <option>Lahore</option>
        <option>Alaska</option>
        <option>Canada</option>
        <option>Dubai</option>
    </select>

</li>
<li class="single_field zip-field">
    <label>Zip Code:</label>
    <input type="text">
</li>
</ul>
<a class="btn btn-default update" href="">Get Quotes</a>
<a class="btn btn-default check_out" href="">Continue</a>
</div>
</div>
<div class="col-sm-6">
<div class="total_area">
<ul>
<li>Cart Sub Total <span>$59</span></li>
<li>Eco Tax <span>$2</span></li>
<li>Shipping Cost <span>Free</span></li>
<li>Total <span>$61</span></li>
</ul>
<a class="btn btn-default update" href="">Update</a>
<a class="btn btn-default check_out" href="">Check Out</a>
</div>
</div>
</div>
</div>
</section><!--/#do_action-->

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
            <img src="images/home/iframe1.png" alt="" />
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
            <img src="images/home/iframe2.png" alt="" />
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
            <img src="images/home/iframe3.png" alt="" />
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
            <img src="images/home/iframe4.png" alt="" />
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
<img src="images/home/map.png" alt="" />
<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
</div>
</div>
</div>
</div>
</div>
@endsection

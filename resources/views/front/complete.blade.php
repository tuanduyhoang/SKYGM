@extends('master')
@section('title','complete')
@section('main')
<div class="banner-wrapper has_background">
    <img src="{{asset('assets/images/banner-for-all2.jpg')}}"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title container">Complete</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs container">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Cart</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@if (Cart::count()>0)
<div class="">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center order_complete">
                	<i class="fa-solid fa-circle-check"></i>
                    <div class="heading_s1">
                  	<h3>Your Order Completed!</h3>
                    </div>
                  	<p>Thank you for your order! Your order is being processed and should be completed within 3-6 hours.
                         You will receive a confirmation email when your order is complete.</p>
                    <p>You will be redirected to home after 5s <?php header("refresh: 5; url = http://127.0.0.1:8000/");
                        // exit();
                    ?></p>

                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@else
@endif
<main class="site-main main-container no-sidebar">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <div class="kobolg">
                        <div class="kobolg-notices-wrapper"></div>
                        <form class="kobolg-cart-form">
                            <table class="shop_table shop_table_responsive cart kobolg-cart-form__contents"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Quantity</th>
                                    <th class="product-quantity">Total</th>
                                    <th class="product-subtotal">Status</th>
                                    <th class="product-subtotal">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if ($items->count() > 0)
                                        @foreach ($items as $item)
                                        <tr class="kobolg-cart-form__cart-item cart_item">
                                            <td class="product-remove">
                                                </td>
                                            <td class="product-thumbnail">
                                                {{-- <img
                                                        src="{{asset($item->options->img)}}"
                                                        class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                        alt="img" width="600" height="778"></td> --}}
                                            <td class="product-name" data-title="Product">
                                                <ul>
                                                    @foreach($item->products as $product)
                                                        <li>
                                                            <a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}" class="block">{{ $product->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td class="product-quantity" data-title="Quantity">
                                            </td>
                                            <td class="product-subtotal" data-title="Total">
                                                <span class="kobolg-Price-amount amount"><span
                                                        class="kobolg-Price-currencySymbol"></span>{{number_format($item->price)}} VNĐ</span></td>
                                            <td>
                                                <div class="col-md-18">
                                                    <select name="status" id="status" class="form-control" disabled>
                                                        <option value="0">Đang xử lí</option>
                                                        <option value="1">Đã xử lí</option>
                                                        <option value="2">Đang giao hàng</option>
                                                        <option value="3">Giao hàng thất bại</option>
                                                        <option value="4">Đã giao hàng</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                {{-- <a href="{{'delete/'.$product->id}}" class="text-danger"><i class="fas fa-trash fa-lg"></i>Cancel</a> --}}
                                                <a href="{{asset('delete/'.$item->id)}}"
                                                    class="remove" aria-label="Remove this item" data-product_id="27"
                                                    data-product_sku="885B712"><i class="fa-solid fa-trash"></i> Cancel</a>
                                                </div>
                                            </td>



                                        </tr>
                                        @endforeach
                                    @else
                                        <tr><td colspan="6" style="text-align:center">No item in cart</td></tr>
                                    @endif


                                {{-- <tr class="kobolg-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="29"
                                           data-product_sku="003D754">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="{{asset('assets/images/apro1113-600x778.jpg')}}"
                                                class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Short Sleeve
                                            Loose</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>129.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>129.00</span></td>
                                </tr>
                                <tr class="kobolg-cart-form__cart-item cart_item">
                                    <td class="product-remove">
                                        <a href="#"
                                           class="remove" aria-label="Remove this item" data-product_id="20"
                                           data-product_sku="775E109">×</a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img
                                                src="{{asset('assets/images/apro201-1-600x778.jpg')}}"
                                                class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                alt="img" width="600" height="778"></a></td>
                                    <td class="product-name" data-title="Product">
                                        <a href="#">Smart Monitor</a></td>
                                    <td class="product-price" data-title="Price">
                                        <span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>139.00</span></td>
                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <span class="qty-label">Quantiy:</span>
                                            <div class="control">
                                                <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                <input type="text"
                                                       value="1" title="Qty" class="input-qty input-text qty text">
                                                <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal" data-title="Total">
                                        <span class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>139.00</span></td>
                                </tr> --}}
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            {{-- <label for="coupon_code">Coupon:</label> <input type="text"
                                                                                            name="coupon_code"
                                                                                            class="input-text"
                                                                                            id="coupon_code" value=""
                                                                                            placeholder="Coupon code"> --}}
                                            {{-- <a href="{{asset('cart/delete/all')}}" class="btn btn-warning" name="apply_coupon"
                                                    value="Apply coupon">Clear cmm hết
                                            </a> --}}
                                            {{-- <form action="{{route('deleteall')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('Delete')

                                                <button type="submit" class="button" name="update_cart" value="Update cart"
                                                >Delete all
                                                </button>
                                            </form> --}}
                                        </div>


                                        <form action="{{route('updatecart','rowId')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')

                                            <button type="submit" class="button" name="update_cart" value="Update cart"
                                            >Go to gì đấy
                                            </button>
                                        </form>
                                        {{-- <div class="quantity-input">
                                            <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >
                                            <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                                            <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                                        </div> --}}

                                        <input type="hidden" id="kobolg-cart-nonce" name="kobolg-cart-nonce"
                                               value="f41b5bf554"><input type="hidden" name="_wp_http_referer"
                                                                         value="/kobolg/cart/"></td>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





@endsection


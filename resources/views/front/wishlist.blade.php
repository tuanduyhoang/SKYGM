@extends('master')
@section('title','wishlist')
@section('main')

<div class="banner-wrapper has_background">
    <img src="assets/images/banner-for-all2.jpg"
         class="img-responsive attachment-1920x447 size-1920x447" alt="img">
    <div class="banner-wrapper-inner">
        <h1 class="page-title container">Wishlist</h1>
        <div role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs container">
            <ul class="trail-items breadcrumb">
                <li class="trail-item trail-begin"><a href="{{route('front.home')}}"><span>Home</span></a></li>
                <li class="trail-item trail-end active"><span>Wishlist</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="main-content col-md-12">
                <div class="page-main-content">
                    <form id="yith-wcwl-form" class="kobolg">
                        <!-- TITLE -->
                        <!-- WISHLIST TABLE -->
                        <table class="shop_table cart wishlist_table" data-pagination="no" data-per-page="5"
                               data-page="1" data-id="" data-token="">
                            <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="product-thumbnail"></th>
                                <th class="product-name">
                                    <span class="nobr">Product Name</span>
                                </th>
                                <th class="product-price">
                    <span class="nobr">
                        Unit Price                    </span>
                                </th>
                                <th class="product-stock-status">
                    <span class="nobr">
                        Stock Status                    </span>
                                </th>
                                <th class="product-add-to-cart"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr id="yith-wcwl-row-29" data-row-id="29">
                                <td class="product-remove">
                                    <div>
                                        <a href="#"
                                           class="remove remove_from_wishlist" title="Remove this product">×</a>
                                    </div>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="assets/images/apro1113-600x778.jpg"
                                             class="attachment-kobolg_thumbnail size-kobolg_thumbnail" alt="img"
                                             width="600" height="778"> </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Short Sleeve
                                        Loose</a>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="29">Quick View</a></td>
                                <td class="product-price">
                                    <span class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol">$</span>129.00</span></td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart">
                                    <!-- Date added -->
                                    <!-- Add to cart button -->
                                    <a href="#"
                                       data-quantity="1"
                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt"
                                       data-product_id="29" data-product_sku="003D754"
                                       aria-label="Add “Red Consoles” to your cart" rel="nofollow"> Add to
                                        Cart</a>
                                    <!-- Change wishlist -->
                                    <!-- Remove from wishlist -->
                                </td>
                            </tr>
                            <tr id="yith-wcwl-row-25" data-row-id="25">
                                <td class="product-remove">
                                    <div>
                                        <a href="#"
                                           class="remove remove_from_wishlist" title="Remove this product">×</a>
                                    </div>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="assets/images/apro151-1-600x778.jpg"
                                             class="attachment-kobolg_thumbnail size-kobolg_thumbnail" alt="img"
                                             width="600" height="778"> </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Cellphone Factory</a>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="25">Quick View</a></td>
                                <td class="product-price">
                                    <del><span class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol">$</span>89.00</span></del>
                                    <ins><span class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol">$</span>79.00</span></ins>
                                </td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart">
                                    <!-- Date added -->
                                    <!-- Add to cart button -->
                                    <a href="#"
                                       data-quantity="1"
                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt"
                                       data-product_id="25" data-product_sku="018Q711"
                                       aria-label="Add “Cellphone Factory” to your cart" rel="nofollow"> Add to
                                        Cart</a>
                                    <!-- Change wishlist -->
                                    <!-- Remove from wishlist -->
                                </td>
                            </tr>
                            <tr id="yith-wcwl-row-22" data-row-id="22">
                                <td class="product-remove">
                                    <div>
                                        <a href="#"
                                           class="remove remove_from_wishlist" title="Remove this product">×</a>
                                    </div>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img src="assets/images/apro181-2-600x778.jpg"
                                             class="attachment-kobolg_thumbnail size-kobolg_thumbnail" alt="img"
                                             width="600" height="778"> </a>
                                </td>
                                <td class="product-name">
                                    <a href="#">Red Mouse</a>
                                    <a href="#" class="button yith-wcqv-button" data-product_id="22">Quick View</a></td>
                                <td class="product-price">
                                    <span class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol">$</span>98.00</span></td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span></td>
                                <td class="product-add-to-cart">
                                    <!-- Date added -->
                                    <!-- Add to cart button -->
                                    <a href="#"
                                       data-quantity="1"
                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart add_to_cart button alt"
                                       data-product_id="22" data-product_sku="389N100"
                                       aria-label="Add “Red Mouse” to your cart" rel="nofollow"> Add to Cart</a>
                                    <!-- Change wishlist -->
                                    <!-- Remove from wishlist -->
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div
</div>


@endsection

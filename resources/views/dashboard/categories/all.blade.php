@extends('master')
@section('main')
@section('title','all')
<div class="section-001">
    <div class="container">
        <div class="kobolg-heading style-01">
            <div class="heading-inner">
                <h3 class="title">All Categories</h3>
                <div class="subtitle">
                    Made with care for your little ones, our products are perfect for every occasion. Check it out.
                </div>
            </div>
        </div>
        <div class="kobolg-products style-01">
            <div class="response-product product-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                @foreach ($categories as $category)
                <div class="product-item recent-product style-01 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#" tabindex="0">
                                <img class="img-responsive"
                                     src="{{ asset($category->img) }}"
                                     alt="Meta Watches                                                " width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span>
                            </div>
                            <div class="group-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="kobolg product compare-button">
                                    <a href="#" class="compare button">Compare</a>
                                </div>
                                <a href="#" class="button yith-wcqv-button">Quick View</a>
                                <div class="add-to-cart">
                                    <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info equal-elem">
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">{{$category->name}}                                                </a>
                            </h3>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">{{$category->description}}                                                </a>
                            </h3>
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>109.00</span></span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection

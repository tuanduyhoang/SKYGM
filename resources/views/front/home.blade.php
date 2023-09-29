@extends('master')
@section('title','home')
@section('main')

<header id="header" class="header style-04 header-dark">
    <div class="header-wrap-stick">
        <div class="header-position">
            <div class="header-nav">
                <div class="container">
                    <div class="kobolg-menu-wapper"></div>
                    <div class="header-nav-inner">
                        <div data-items="8"
                             class="vertical-wrapper block-nav-category has-vertical-menu show-button-all">
                            <div class="block-title">
                    <span class="before">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                                <span class="text-title">SHOP BY CATEGORIES</span>
                            </div>
                            <div class="block-content verticalmenu-content">
                                @foreach ($categories as $category)
                                <ul id="menu-vertical-menu" class="azeroth-nav vertical-menu default">
                                    <li id="menu-item-886"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-886"><a
                                            class="azeroth-menu-item-title" title="Camera" href="{{asset('category/'.$category->id.'/'.$category->slug.'.html')}}"><span class=""></span>{{$category->name}}</a></li>
                                    {{-- <li id="menu-item-895"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-895"><a
                                            class="azeroth-menu-item-title" title="Game & Consoles" href="#"><span class="icon flaticon-console"></span>Game & Consoles</a>
                                    </li>
                                    <li id="menu-item-888"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-888"><a
                                            class="azeroth-menu-item-title" title="Printers & Ink" href="{{route('category.create')}}"><span class="icon flaticon-print-button"></span>Add Category</a></li>
                                    <li id="menu-item-889"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-889"><a
                                            class="azeroth-menu-item-title" title="Speaker" href="{{route('product.create')}}"><span class="icon flaticon-technology-1"></span>Add Product</a></li>
                                    <li id="menu-item-890"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-890"><a
                                            class="azeroth-menu-item-title" title="Smartphone" href="#"><span class="icon flaticon-smartphone"></span>Smartphone</a></li>
                                    <li id="menu-item-891"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-891"><a
                                            class="azeroth-menu-item-title" title="Accessories" href="#"><span class="icon flaticon-mouse"></span>Accessories</a></li>
                                    <li id="menu-item-892"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-892"><a
                                            class="azeroth-menu-item-title" title="Essentials" href="#"><span class="icon flaticon-layers"></span>Essentials</a>
                                    </li>
                                    <li id="menu-item-893"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-893"><a
                                            class="azeroth-menu-item-title" title="Featured" href="#"><span class="icon flaticon-shapes"></span>Featured</a></li>
                                    <li id="menu-item-894"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-894 link-other">
                                        <a class="azeroth-menu-item-title" title="Best Seller" href="#"><span class="icon flaticon-shiny-diamond"></span> Seller</a></li> --}}
                                </ul>
                                @endforeach

                                <div class="view-all-category">
                                    <a href="javascript:void(0)" data-closetext="Close" data-alltext="All Categories"
                                       class="btn-view-all open-cate">All Categories</a>
                                </div>
                            </div>
                        </div><!-- block category -->
                        <div class="box-header-nav menu-nocenter">
                            <ul id="menu-primary-menu"
                                class="clone-main-menu kobolg-clone-mobile-menu kobolg-nav main-menu">
                                <li id="menu-item-230"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kobolg-menu-item-title" title="Home" href="">Home</a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-home">
                                        <div class="demo-item">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    {{-- <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="" target="_self"
                                                               class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
                                                                <img src="{{asset('assets/images/demo001.jpg')}}"
                                                                     class="az_single_image-img attachment-full"
                                                                     alt="img">
                                                            </a>
                                                        </figure>
                                                    </div> --}}
                                                    <h5 class="az_custom_heading">
                                                        <a href="{{route('product.all')}}">Home 01</a>
                                                    </h5>
                                                </div>
                                                {{-- <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="{{route('product.index')}}" target="_self"
                                                               class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
                                                                <img src="{{asset('assets/images/demo002.jpg')}}"
                                                                     class="az_single_image-img attachment-full"
                                                                     alt="img"></a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="{{route('product.all')}}">Home 02</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-03.html" target="_self"
                                                               class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
                                                                <img src="{{asset('assets/images/demo003.jpg')}}"
                                                                     class="az_single_image-img attachment-full"
                                                                     alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-03.html">Home 03</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-04.html" target="_self"
                                                               class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
                                                                <img src="{{asset('assets/images/demo004.jpg')}}"
                                                                     class="az_single_image-img attachment-full"
                                                                     alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-04.html">Home 04</a></h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-05.html" target="_self"
                                                               class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg">
                                                                <img src="{{asset('assets/images/demo005.jpg')}}"
                                                                     class="az_single_image-img attachment-full"
                                                                     alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-05.html">Home 05</a>
                                                    </h5>
                                                </div>
                                                <div class="col-md-6 col-lg-4 col-sm-6">
                                                    <div class="dreaming_single_image dreaming_content_element az_align_left shadow-img">
                                                        <figure class="dreaming_wrapper az_figure">
                                                            <a href="home-06.html" target="_self"
                                                               class="az_single_image-wrapper az_box_border_grey effect normal-effect dark-bg ">
                                                                <img src="{{asset('assets/images/demo006.jpg')}}"
                                                                     class="az_single_image-img attachment-full"
                                                                     alt="img">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                    <h5 class="az_custom_heading">
                                                        <a href="home-06.html">Home 06</a>
                                                    </h5>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="menu-item-228"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kobolg-menu-item-title" title="Shop"
                                       href="shop.html">Shop</a>
                                    <span class="toggle-submenu"></span>
                                    {{-- <div class="submenu megamenu megamenu-shop">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Shop Layouts </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="shop.html" target="_self">Shop Grid </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-list.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="{{asset('assets/images/label-new.jpg')}}"
                                                                             class="attachment-full size-full"
                                                                             alt="img">
                                                                    </span>
                                                                    Shop List
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop.html" target="_self">No Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-rightsidebar.html" target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Product Layouts </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-product.html" target="_self">Vertical
                                                                    Thumbnails </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-policy.html"
                                                                   target="_self">
                                                                    <span class="image">
                                                                        <img src="{{asset('assets/images/label-new.jpg')}}"
                                                                             class="attachment-full size-full"
                                                                             alt="img">
                                                                    </span>
                                                                    Extra Sidebar
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-rightsidebar.html"
                                                                   target="_self">
                                                                    Right Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-leftsidebar.html"
                                                                   target="_self">
                                                                    Left Sidebar </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Product Extends </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-product-bundle.html"
                                                                   target="_self">
                                                                            <span class="image">
                                                                                <img src="{{asset('assets/images/label-new.jpg')}}"
                                                                                     class="attachment-full size-full"
                                                                                     alt="img">
                                                                            </span>
                                                                    Product Bundle
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-360deg.html"
                                                                   target="_self">
                                                                    <span class="image">
                                                                        <img src="{{asset('assets/images/label-hot.jpg')}}"
                                                                             class="attachment-full size-full"
                                                                             alt="img">
                                                                    </span>
                                                                    Product 360 Deg </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-video.html"
                                                                   target="_self">
                                                                    Video </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Other Pages </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="cart.html">Cart </a>
                                                            </li>
                                                            <li>
                                                                <a href="wishlist.html" target="_self">Wishlist </a>
                                                            </li>
                                                            <li>
                                                                <a href="checkout.html" target="_self">Checkout </a>
                                                            </li>
                                                            <li>
                                                                <a href="order-tracking.html" target="_self">Order
                                                                    Tracking </a>
                                                            </li>
                                                            <li>
                                                                <a href="my-account.html" target="_self">My Account </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Product Types </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-product-simple.html"
                                                                   target="_self">
                                                                    Simple </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product.html"
                                                                   target="_self">
                                                                            <span class="image"><img
                                                                                    src="{{asset('assets/images/label-hot.jpg')}}"
                                                                                    class="attachment-full size-full"
                                                                                    alt="img"></span>
                                                                    Variable </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-external.html"
                                                                   target="_self">
                                                                    External / Affiliate </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-group.html"
                                                                   target="_self">
                                                                    Grouped </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-outofstock.html"
                                                                   target="_self">
                                                                    Out Of Stock </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product-onsale.html"
                                                                   target="_self">
                                                                    On Sale </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </li>
                                <li id="menu-item-229"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kobolg-menu-item-title" title="Elements" href="#">Elements</a>
                                    <span class="toggle-submenu"></span>
                                    {{-- <div class="submenu megamenu megamenu-elements">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">Element 1 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="banner.html"
                                                                   target="_self">Banner </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-element.html"
                                                                   target="_self">Blog Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="categories-element.html"
                                                                   target="_self">
                                                                    Categories Element </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-element.html"
                                                                   target="_self">
                                                                    Product Element </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Element 2 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="client.html"
                                                                   target="_self">
                                                                    Client </a>
                                                            </li>
                                                            <li>
                                                                <a href="product-layout.html"
                                                                   target="_self">
                                                                    Product Layout </a>
                                                            </li>
                                                            <li>
                                                                <a href="google-map.html"
                                                                   target="_self">
                                                                    Google map </a>
                                                            </li>
                                                            <li>
                                                                <a href="iconbox.html"
                                                                   target="_self">
                                                                    Icon Box </a>
                                                            </li>
                                                            <li>
                                                                <a href="team.html"
                                                                   target="_self">
                                                                    Team </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Element 3 </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="instagram-feed.html"
                                                                   target="_self">
                                                                    Instagram Feed </a>
                                                            </li>
                                                            <li>
                                                                <a href="newsletter.html"
                                                                   target="_self">
                                                                    Newsletter </a>
                                                            </li>
                                                            <li>
                                                                <a href="testimonials.html"
                                                                   target="_self">
                                                                    Testimonials </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </li>
                                <li id="menu-item-996"
                                    class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                    <a class="kobolg-menu-item-title" title="Blog"
                                       href="blog.html">Blog</a>
                                    <span class="toggle-submenu"></span>
                                    {{-- <div class="submenu megamenu megamenu-blog">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Blog Layout </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="blog.html" target="_self">No Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-rightsidebar.html" target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog.html" target="_self">Blog Standard </a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html" target="_self">Blog Grid </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Post Layout </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-post.html" target="_self">No
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-leftsidebar.html" target="_self">Left
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-rightsidebar.html" target="_self">Right
                                                                    Sidebar </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-instagram.html" target="_self">
                                                                    <span class="image">
                                                                        <img src="{{asset('assets/images/label-hot.jpg')}}"
                                                                             class="attachment-full size-full"
                                                                             alt="img">
                                                                    </span>
                                                                    Instagram In Post
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-product.html"
                                                                   target="_self">
                                                                    <span class="image">
                                                                        <img src="{{asset('assets/images/label-new.jpg')}}"
                                                                             class="attachment-full size-full"
                                                                             alt="img">
                                                                    </span>
                                                                    Product In Post
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="kobolg-listitem style-01">
                                                    <div class="listitem-inner">
                                                        <h4 class="title">
                                                            Post Format </h4>
                                                        <ul class="listitem-list">
                                                            <li>
                                                                <a href="single-post.html" target="_self">Standard </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-gallery.html" target="_self">Gallery </a>
                                                            </li>
                                                            <li>
                                                                <a href="single-post-video.html"
                                                                   target="_self">
                                                                    <span class="image">
                                                                        <img src="{{asset('assets/images/label-hot.jpg')}}"
                                                                             class="attachment-full size-full"
                                                                             alt="img">
                                                                    </span>
                                                                    Video
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </li>
                                <li id="menu-item-237"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                    <a class="kobolg-menu-item-title" title="Pages" href="#">Pages</a>
                                    <span class="toggle-submenu"></span>
                                    <ul role="menu" class="submenu">
                                        <li id="menu-item-987"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                                            <a class="kobolg-menu-item-title" title="About"
                                               href="{{route('about')}}">About</a></li>
                                        <li id="menu-item-988"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-988">
                                            <a class="kobolg-menu-item-title" title="Contact"
                                               href="{{route('contact')}}">Contact</a></li>
                                        <li id="menu-item-990"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-990">
                                            <a class="kobolg-menu-item-title" title="Page 404"
                                               href="404.html">Page 404</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-238"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-238">
                                    <a class="kobolg-menu-item-title" title="Free Shipping on Orders $100" href="#">Free
                                        Shipping on Orders $100</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="slide-home-01">
    <div class="container">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
             data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            <div class="slide-wrap">
                <img src="{{asset('assets/images/slide11.jpg')}}" alt="image">
                <div class="slide-info">
                    <div class="slide-inner">
                        <h5>Black Friday</h5>
                        <h1>Electronics</h1>
                        <h2>New Arrivals</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="{{asset('assets/images/slide12.jpg')}}" alt="image">
                <div class="slide-info">
                    <div class="slide-inner">
                        <h5>Best Selling</h5>
                        <h1><span>Life Compani</span></h1>
                        <h2>Smartphone</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="{{asset('assets/images/slide13.jpg')}}" alt="image">
                <div class="slide-info">
                    <div class="slide-inner">
                        <h5>This Week Only</h5>
                        <h1>Up Sale To</h1>
                        <h2>50% Off</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section-003 section-002">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="kobolg-banner style-01">
                    <div class="banner-inner">
                        <figure class="banner-thumb">
                            <img src="{{asset('assets/images/banner12.jpg')}}"
                                 class="attachment-full size-full" alt="img"></figure>
                        <div class="banner-info">
                            <div class="banner-content">
                                <div class="title-wrap">
                                    <div class="banner-label">
                                        Modern Mobile
                                    </div>
                                    <h6 class="title">
                                        New Collection </h6>
                                </div>
                                <div class="button-wrap">
                                    <a class="button" target="_self" href="#"><span>Shop now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="kobolg-banner style-01">
                    <div class="banner-inner">
                        <figure class="banner-thumb">
                            <img src="{{asset('assets/images/banner13.jpg')}}"
                                 class="attachment-full size-full" alt="img"></figure>
                        <div class="banner-info">
                            <div class="banner-content">
                                <div class="title-wrap">
                                    <div class="banner-label">
                                        Headphones
                                    </div>
                                    <h6 class="title">
                                        Best Seller </h6>
                                </div>
                                <div class="button-wrap">
                                    <a class="button" target="_self" href="#"><span>Shop now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{--
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
                               href="{{asset('category/'.$category->id.'/'.$category->slug.'.html')}}" tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset($category->img)}}"
                                     alt="Meta Watches                                                " width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <div class="group-button">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <div class="yith-wcwl-add-button show">
                                        <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="kobolg product compare-button">
                                    <a href="#" class="compare button">Compare</a>
                                </div>
                                <a href="" class="button yith-wcqv-button">Quick View</a>
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
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol"></span>{{$category->description}}</span></span>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="product-item recent-product style-01 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp  instock shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#" tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro302-270x350.jpg')}}"
                                     alt="Circle Watches" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
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
                                   tabindex="0">Circle Watches</a>
                            </h3>
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>79.00</span></span>
                        </div>
                    </div>
                </div>
                <div class="product-item recent-product style-01 rows-space-0 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link" href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro31-1-270x350.jpg')}}"
                                     alt="Blue Smartphone" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
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
                                <a href="#" tabindex="0">Blue Smartphone</a>
                            </h3>
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>120.00</span></span>
                        </div>
                    </div>
                </div>
                <div class="product-item recent-product style-01 rows-space-0 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link" href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro41-1-270x350.jpg')}}"
                                     alt="White Watches" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
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
                                <a href="#" tabindex="0">White Watches</a>
                            </h3>
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>134.00</span></span>
                        </div>
                    </div>
                </div>
                <div class="product-item recent-product style-01 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link" href="#"
                               tabindex="-1">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro51012-1-270x350.jpg')}}"
                                     alt="Multi Cellphone" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onsale"><span class="number">-21%</span></span>
                                <span class="onnew"><span class="text">New</span></span></div>
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
                                <a href="#" tabindex="-1">Multi Cellphone</a>
                            </h3>
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <span class="price"><del><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>125.00</span></del> <ins><span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>99.00</span></ins></span>
                        </div>
                    </div>
                </div>
                <div class="product-item recent-product style-01 rows-space-0 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock sale featured shipping-taxable product-type-grouped">
                    <div class="product-inner tooltip-left">
                        <div class="product-thumb">
                            <a class="thumb-link" href="#"
                               tabindex="-1">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro61-1-270x350.jpg')}}"
                                     alt="Black Watches" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
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
                                    <a href="#"
                                       class="button product_type_simple add_to_cart_button">Viewproducts</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info equal-elem">
                            <h3 class="product-name product_title">
                                <a href="#" tabindex="-1">Black Watches</a>
                            </h3>
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>79.00</span> – <span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>139.00</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="section-001 section-024">
    <div class="container">
        <div class="kobolg-heading style-01">
            <div class="heading-inner">
                <h3 class="title">
                    Best for you </h3>
                <div class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit erat vehicula ad, mollis viverra
                    vulputate
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="kobolg-products style-06">
                    <h3 class="title">
                        <span>Best selling</span>
                    </h3>
                    <div class="response-product product-list-owl owl-slick equal-container better-height slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]"><span class="fa fa-angle-left prev slick-arrow" aria-disabled="false" style="display: block;"></span><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(-800px, 0px, 0px);"><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="margin-right: 30px; width: 370px;" tabindex="-1"><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro151-1-90x90.jpg')}}" alt="Cellphone Factory" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Cellphone Factory</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>89.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>79.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat  instock shipping-taxable purchasable product-type-variable has-default-attributes" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro171-1-90x90.jpg')}}" alt="Photo Camera" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Photo Camera</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>105.00</span> – <span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>110.00</span></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro71-1-90x90.jpg')}}" alt="Gaming Mouse" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Gaming Mouse</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>109.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>89.00</span></ins></span>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="margin-right: 30px; width: 370px;" tabindex="-1"><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro201-1-90x90.jpg')}}" alt="Smart Monitor" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Smart Monitor</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>150.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>139.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro51012-1-90x90.jpg')}}" alt="Multi Cellphone" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Multi Cellphone</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>125.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>99.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro302-90x90.jpg')}}" alt="Circle Watches" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Circle Watches</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>79.00</span></span>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide slick-current slick-active first-slick last-slick" data-slick-index="2" aria-hidden="false" style="margin-right: 30px; width: 370px;" tabindex="0"><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{asset('assets/images/apro13-1-90x90.jpg')}}" alt="Meta Watches                                                " width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Meta Watches </a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>109.00</span></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{asset('assets/images/apro1211-2-90x90.jpg')}}" alt="Modern Watches" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Modern Watches</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        <span class="review">(1)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>138.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>119.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item best-selling style-06 rows-space-30 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{asset('assets/images/apro181-2-90x90.jpg')}}" alt="Red Mouse" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Red Mouse</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>98.00</span></span>
                                </div>
                            </div>
                        </div></div></div></div></div><span class="fa fa-angle-right next slick-arrow slick-disabled" style="display: block;" aria-disabled="true"></span></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="kobolg-products style-06">
                    <h3 class="title">
                        <span>On Sale</span>
                    </h3>
                    <div class="response-product product-list-owl owl-slick equal-container better-height slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]"><span class="fa fa-angle-left prev slick-arrow slick-disabled" aria-disabled="true" style="display: block;"></span><div class="slick-list draggable" style="padding-left: 0px; padding-right: 0px; padding-bottom: 0px; margin-left: 0px; margin-right: 0px; margin-bottom: 0px;"><div class="slick-track" style="opacity: 1; width: 800px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active first-slick last-slick" data-slick-index="0" aria-hidden="false" style="margin-right: 30px; width: 370px;" tabindex="0"><div class="row-item"><div class="product-item on_sale style-06 rows-space-30 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{asset('assets/images/apro51012-1-90x90.jpg')}}" alt="Multi Cellphone" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Multi Cellphone</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>125.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>99.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item on_sale style-06 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{asset('assets/images/apro71-1-90x90.jpg')}}" alt="Gaming Mouse" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Gaming Mouse</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>109.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>89.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item on_sale style-06 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="0">
                                        <img class="img-responsive" src="{{asset('assets/images/apro1211-2-90x90.jpg')}}" alt="Modern Watches" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">Modern Watches</a>
                                    </h3>
                                    <div class="rating-wapper ">
                                        <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                        <span class="review">(1)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>138.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>119.00</span></ins></span>
                                </div>
                            </div>
                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="margin-right: 30px; width: 370px;" tabindex="-1"><div class="row-item"><div class="product-item on_sale style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro151-1-90x90.jpg')}}" alt="Cellphone Factory" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Cellphone Factory</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>89.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>79.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"><div class="product-item on_sale style-06 rows-space-30 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple" style="width: 100%; display: inline-block;">
                            <div class="product-inner">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="#" tabindex="-1">
                                        <img class="img-responsive" src="{{asset('assets/images/apro201-1-90x90.jpg')}}" alt="Smart Monitor" width="90" height="90">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="-1">Smart Monitor</a>
                                    </h3>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span></div>
                                    <span class="price"><del><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>150.00</span></del> <ins><span class="kobolg-Price-amount amount"><span class="kobolg-Price-currencySymbol">$</span>139.00</span></ins></span>
                                </div>
                            </div>
                        </div></div><div class="row-item"></div></div></div></div><span class="fa fa-angle-right next slick-arrow" style="display: block;" aria-disabled="false"></span></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="kobolg-banner style-12">
                    <div class="banner-inner">
                        <figure class="banner-thumb">
                            <img src="{{asset('assets/images/banner4-6.jpg')}}" class="attachment-full size-full" alt="img"></figure>
                        <div class="banner-info ">
                            <div class="banner-content">
                                <div class="banner-label">
                                    New
                                </div>
                                <div class="title-wrap">
                                    <h6 class="title">Collection</h6>
                                </div>
                                <div class="button-wrap">
                                    <a class="button" target="_self" href="#"><span>Show now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-043">
    <div class="container">
        <div class="kobolg-heading style-01">
            <div class="heading-inner">
                <h3 class="title">
                    All Categories</h3>
                <div class="subtitle">
                    Made with care for your little ones, our products are perfect for every occasion. Check it out.
                </div>
            </div>
        </div>
        <div class="kobolg-categories  style-02">
            <div class="categories-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                @foreach ($categories as $category)
                <div class="categories-item rows-space-0 post-740 page type-page status-publish hentry">
                    <div class="categories-inner">
                        <figure class="categories-thumb">
                            <a href="{{asset('category/'.$category->id.'/'.$category->slug.'.html')}}" tabindex="-1">
                                <img src="{{asset($category->img)}}"
                                     class="img-responsive attachment-370x370 size-370x370" alt="img"
                                     width="370"
                                     height="370"> </a>
                        </figure>
                        <h3 class="title">
                            <a href="#" tabindex="-1">
                                {{$category->name}} </a>
                        </h3>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</div>


<div class="section-001">
    <div class="container">
        <div class="kobolg-heading style-01">
            <div class="heading-inner">
                <h3 class="title">All Products</h3>
                <div class="subtitle">Made with care for your little ones, our products are perfect for every
                    occasion. Check it out.
                </div>
            </div>
        </div>
        <div class="kobolg-products style-02">
            <div class="response-product product-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:2}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                @foreach ($products as $product)
                <div class="product-item featured_products style-02 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#" tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset($product->img)}}"
                                     alt="Black Watches" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="{{asset('detail/'.$product->id.'/'.$product->slug.'.html')}}" class="button yith-wcqv-button" title="chi tiết sản phẩm">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">{{$product->name}}</a>
                            </h3>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">{{number_format($product->price)}} VNĐ </span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart" >
                                <a href="" class="button product_type_grouped" >
                                    {{-- {{asset('cart/add/'.$item->id)}} --}}
                                    View products</a></div>
                                    {{-- <form action="{{route('addcart',$item->id)}}" method="POST" enctype="multipart/form-data" class="variations_form cart">
                                        @csrf
                                        <button type="submit" class="single_add_to_cart_button button btn btn-success">Add to cart</button>
                                    </form> --}}
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                @endforeach



                {{-- <div class="product-item featured_products style-02 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro71-1-270x350.jpg')}}"
                                     alt="Gaming Mouse" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onsale"><span class="number">-18%</span></span>
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">Gaming Mouse</a>
                            </h3>
                            <span class="price"><del><span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>109.00</span></del> <ins><span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>89.00</span></ins></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">Add to cart</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro101-1-270x350.jpg')}}"
                                     alt="Mac 27 Inch" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button" data-product_id="30"
                               tabindex="0">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">Mac 27 Inch</a>
                            </h3>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>60.00</span></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    Add to cart</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-31 product type-product status-publish has-post-thumbnail product_cat-light product_cat-sofas product_tag-hat first instock sale featured shipping-taxable product-type-grouped">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro91-1-270x350.jpg')}}"
                                     alt="Classic Watches" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">Classic Watches</a>
                            </h3>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>89.00</span> – <span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>139.00</span></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    View products</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-29 product type-product status-publish has-post-thumbnail product_cat-new-arrivals product_cat-specials product_tag-light product_tag-sock  instock featured downloadable shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro1113-270x350.jpg')}}"
                                     alt="Red Consoles" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">Red Consoles</a>
                            </h3>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>129.00</span></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    Add to cart</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro1211-2-270x350.jpg')}}"
                                     alt="Modern Watches" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onsale"><span class="number">-14%</span></span>
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper ">
                                <div class="star-rating"><span style="width:100%">Rated <strong
                                        class="rating">5.00</strong> out of 5</span></div>
                                <span class="review">(1)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">Modern Watches</a>
                            </h3>
                            <span class="price"><del><span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>138.00</span></del> <ins><span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>119.00</span></ins></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    Add to cart</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat first instock featured shipping-taxable product-type-external">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro141-1-270x350.jpg')}}"
                                     alt="Smart Monitor" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper ">
                                <div class="star-rating"><span style="width:100%">Rated <strong
                                        class="rating">5.00</strong> out of 5</span></div>
                                <span class="review">(1)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">Smart Monitor</a>
                            </h3>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>207.00</span></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    Buy it on Amazon</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="0">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro151-1-270x350.jpg')}}"
                                     alt="Cellphone Factory" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onsale"><span class="number">-11%</span></span>
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button" data-product_id="25"
                               tabindex="0">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="0">Cellphone Factory</a>
                            </h3>
                            <span class="price"><del><span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>89.00</span></del> <ins><span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>79.00</span></ins></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    Add to cart</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock featured shipping-taxable purchasable product-type-variable has-default-attributes">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#" tabindex="-1">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro161-1-270x350.jpg')}}"
                                     alt="Gaming Mouse" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <form class="variations_form cart">
                                <table class="variations">
                                    <tbody>
                                    <tr>
                                        <td class="value">
                                            <select title="box_style" data-attributetype="box_style"
                                                    data-id="pa_color" class="attribute-select "
                                                    name="attribute_pa_color"
                                                    data-attribute_name="attribute_pa_color"
                                                    data-show_option_none="yes" tabindex="-1">
                                                <option data-type="" data-pa_color="" value="">
                                                    Choose an option
                                                </option>
                                                <option data-width="30" data-height="30"
                                                        data-type="color" data-pa_color="#3155e2"
                                                        value="blue">Blue
                                                </option>
                                                <option data-width="30" data-height="30"
                                                        data-type="color" data-pa_color="#49aa51"
                                                        value="green">Green
                                                </option>
                                                <option data-width="30" data-height="30"
                                                        data-type="color" data-pa_color="#ff63cb"
                                                        value="pink">Pink
                                                </option>
                                            </select>
                                            <div class="data-val attribute-pa_color"
                                                 data-attributetype="box_style"><a
                                                    class="change-value color" href="#"
                                                    style="background: #3155e2;"
                                                    data-value="blue"></a><a
                                                    class="change-value color" href="#"
                                                    style="background: #49aa51;"
                                                    data-value="green"></a><a
                                                    class="change-value color" href="#"
                                                    style="background: #ff63cb;"
                                                    data-value="pink"></a></div>
                                            <a class="reset_variations" href="#"
                                               tabindex="-1">Clear</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                            <a href="#" class="button yith-wcqv-button">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="-1">Gaming Mouse</a>
                            </h3>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>45.00</span> – <span
                                    class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>54.00</span></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    Select options</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div>
                <div class="product-item featured_products style-02 rows-space-30 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock first instock featured downloadable shipping-taxable purchasable product-type-simple">
                    <div class="product-inner tooltip-top">
                        <div class="product-thumb">
                            <a class="thumb-link"
                               href="#"
                               tabindex="-1">
                                <img class="img-responsive"
                                     src="{{asset('assets/images/apro181-2-270x350.jpg')}}"
                                     alt="Red Mouse" width="270" height="350">
                            </a>
                            <div class="flash">
                                <span class="onnew"><span class="text">New</span></span></div>
                            <a href="#" class="button yith-wcqv-button" data-product_id="22"
                               tabindex="-1">Quick View</a></div>
                        <div class="product-info">
                            <div class="rating-wapper nostar">
                                <div class="star-rating"><span style="width:0%">Rated <strong
                                        class="rating">0</strong> out of 5</span></div>
                                <span class="review">(0)</span></div>
                            <h3 class="product-name product_title">
                                <a href="#"
                                   tabindex="-1">Red Mouse</a>
                            </h3>
                            <span class="price"><span class="kobolg-Price-amount amount"><span
                                    class="kobolg-Price-currencySymbol">$</span>98.00</span></span>
                        </div>
                        <div class="group-button clearfix">
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show">
                                    <a href="#" class="add_to_wishlist">Add to cart</a>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="button product_type_grouped">
                                    Add to cart</a></div>
                            <div class="kobolg product compare-button">
                                <a href="#" class="compare button">Compare</a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>





<div>
    <div class="kobolg-banner style-02 left-center">
        <div class="banner-inner">
            <figure class="banner-thumb">
                <img src="{{asset('assets/images/banner101.jpg')}}"
                     class="attachment-full size-full" alt="img"></figure>
            <div class="banner-info container">
                <div class="banner-content">
                    <div class="title-wrap">
                        <div class="banner-label">
                            Modern Laptop
                        </div>
                        <h6 class="title">
                            Best Seller </h6>
                    </div>
                    <div class="button-wrap">
                        <div class="subtitle">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit justo
                        </div>
                        <a class="button" target="_self" href="#"><span>Shop now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="section-038">
    <div class="kobolg-banner style-07 left-center">
        <div class="banner-inner">
            <figure class="banner-thumb">
                <img src="{{asset('assets/images/banner28.jpg')}}"
                     class="attachment-full size-full" alt="img"></figure>
            <div class="banner-info container">
                <div class="banner-content">
                    <div class="title-wrap">
                        <div class="banner-label">
                            30 Nov - 03 Dec
                        </div>
                        <h6 class="title">
                            New Collection </h6>
                    </div>
                    <div class="cate">
                        50% Off / Selected items
                    </div>
                    <div class="button-wrap">
                        <div class="subtitle">
                            Mus venenatis habitasse leo malesuada lacus commodo faucibus torquent donec
                        </div>
                        <a class="button" target="_self" href="#"><span>Shop now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section-001">
    <div class="container">
        <div class="kobolg-heading style-01">
            <div class="heading-inner">
                <h3 class="title">
                    From Our Blog </h3>
                <div class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit erat vehicula ad, mollis viverra
                    vulputate
                </div>
            </div>
        </div>
        <div class="kobolg-blog style-01">
            <div class="blog-list-owl owl-slick equal-container better-height"
                 data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:3,&quot;rows&quot;:1}"
                 data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                <article
                        class="post-item post-grid rows-space-0 post-195 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-table category-life-style tag-light tag-life-style">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#" tabindex="0">
                                <img src="{{asset('assets/images/blogpost1-370x330.jpg')}}"
                                     class="img-responsive attachment-370x330 size-370x330" alt="img"
                                     width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="0">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="0">
                                    admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#"
                                       tabindex="0">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a
                                        href="#"
                                        tabindex="0">Not your ordinary multi service.</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article
                        class="post-item post-grid rows-space-0 post-192 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion category-multi category-life-style tag-light tag-fashion tag-multi">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#"
                               tabindex="0">
                                <img src="{{asset('assets/images/blogpost5-370x330.jpg')}}"
                                     class="img-responsive attachment-370x330 size-370x330" alt="img"
                                     width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="0">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="0">
                                    admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#"
                                       tabindex="0">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a
                                        href="#"
                                        tabindex="0">We bring you the best by working</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article
                        class="post-item post-grid rows-space-0 post-189 post type-post status-publish format-video has-post-thumbnail hentry category-table category-life-style tag-multi tag-life-style post_format-post-format-video">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#"
                               tabindex="0">
                                <img src="{{asset('assets/images/blogpost9-370x330.jpg')}}"
                                     class="img-responsive attachment-370x330 size-370x330" alt="img"
                                     width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="0">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="0">
                                    admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#"
                                       tabindex="0">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a
                                        href="#"
                                        tabindex="0">We design functional best multi</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article
                        class="post-item post-grid rows-space-0 post-186 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-life-style tag-life-style">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#"
                               tabindex="-1">
                                <img src="{{asset('assets/images/blogpost4-370x330.jpg')}}"
                                     class="img-responsive attachment-370x330 size-370x330" alt="img"
                                     width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="-1">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="-1">
                                    admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#"
                                       tabindex="-1">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a
                                        href="#"
                                        tabindex="-1">The child is swimming with a buoy</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
                <article
                        class="post-item post-grid rows-space-0 post-183 post type-post status-publish format-standard has-post-thumbnail hentry category-light category-fashion tag-light tag-multi">
                    <div class="post-inner blog-grid">
                        <div class="post-thumb">
                            <a href="#" tabindex="-1">
                                <img src="{{asset('assets/images/blogpost2-370x330.jpg')}}"
                                     class="img-responsive attachment-370x330 size-370x330" alt="img"
                                     width="370" height="330"> </a>
                            <a class="datebox" href="#" tabindex="-1">
                                <span>19</span>
                                <span>Dec</span>
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    By:<a href="#" tabindex="-1">
                                    admin </a>
                                </div>
                                <div class="post-comment-icon">
                                    <a href="#"
                                       tabindex="-1">
                                        0 </a>
                                </div>
                            </div>
                            <div class="post-info equal-elem">
                                <h2 class="post-title"><a
                                        href="#"
                                        tabindex="-1">Collection hiding beside beige wall</a></h2>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada sodales
                                quisque litora dapibus primis lacinia
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>



<div class="section-014">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="kobolg-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-rocket-launch"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Worldwide Delivery</h4>
                            <div class="desc">With sites in 5 languages, we ship to over 200 countries &amp;
                                regions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="kobolg-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-truck"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Safe Shipping</h4>
                            <div class="desc">Pay with the world’s most popular and secure payment methods.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="kobolg-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-reload"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">365 Days Return</h4>
                            <div class="desc">Round-the-clock assistance for a smooth shopping experience.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="kobolg-iconbox style-02">
                    <div class="iconbox-inner">
                        <div class="icon">
                            <span class="flaticon-telemarketer"></span>
                        </div>
                        <div class="content">
                            <h4 class="title">Shop Confidence</h4>
                            <div class="desc">Our Buyer Protection covers your purchase from click to delivery.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section-008">
    <div class="kobolg-instagram style-01">
        <div class="instagram-owl owl-slick"
             data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item"
                   tabindex="0">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta1.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                             <span class="social-wrap">
                                <span class="social-info">1
                                    <i class="flaticon-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="flaticon-heart-shape-outline"></i>
                                </span>
                            </span>
                        </span>
                </a>
            </div>
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item" tabindex="0">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta2.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="flaticon-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="flaticon-heart-shape-outline"></i>
                                        </span>
                                    </span>
                                </span>
                </a>
            </div>
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item"
                   tabindex="0">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta3.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="flaticon-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="flaticon-heart-shape-outline"></i>
                                        </span>
                                    </span>
                                </span>
                </a>
            </div>
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item" tabindex="0">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta4.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="flaticon-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="flaticon-heart-shape-outline"></i>
                                        </span>
                                    </span>
                                </span>
                </a>
            </div>
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item" tabindex="0">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta5.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="flaticon-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="flaticon-heart-shape-outline"></i>
                                        </span>
                                    </span>
                                </span>
                </a>
            </div>
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item"
                   tabindex="-1">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta6.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="flaticon-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="flaticon-heart-shape-outline"></i>
                                        </span>
                                    </span>
                                </span>
                </a>
            </div>
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item"
                   tabindex="-1">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta7.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="flaticon-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="flaticon-heart-shape-outline"></i>
                                        </span>
                                    </span>
                                </span>
                </a>
            </div>
            <div class="rows-space-0">
                <a target="_blank" href="#" class="item"
                   tabindex="-1">
                    <img class="img-responsive lazy" src="{{asset('assets/images/insta8.jpg')}}" alt="Home 01">
                    <span class="instagram-info">
                                 <span class="social-wrap">
                                    <span class="social-info">0
                                        <i class="flaticon-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="flaticon-heart-shape-outline"></i>
                                    </span>
                                </span>
                            </span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

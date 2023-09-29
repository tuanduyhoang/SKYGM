<header id="header" class="header style-04 header-dark">
    <div class="header-top">
        <div class="container">
            <div class="header-top-inner">
                <ul id="menu-top-left-menu" class="kobolg-nav top-bar-menu">
                    <li id="menu-item-864"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-864"><a
                            class="kobolg-menu-item-title" title="Store Direction"
                            href="#"><span class="icon flaticon-placeholder"></span>Store
                        Direction</a></li>
                    <li id="menu-item-865"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-865"><a
                            class="kobolg-menu-item-title" title="Order Tracking"
                            href="#"><span class="icon flaticon-box"></span>Order
                        Tracking</a></li>
                </ul>
                <div class="kobolg-nav top-bar-menu right">
                    <ul class="wpml-menu">
                        <li class="menu-item kobolg-dropdown block-language">
                            <a href="#" data-kobolg="kobolg-dropdown">
                                <img src="{{asset('assets/images/en.png')}}"
                                     alt="en" width="18" height="12">
                                English
                            </a>
                            <span class="toggle-submenu"></span>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">
                                        <img src="{{asset('assets/images/it.png')}}"
                                             alt="it" width="18" height="12">
                                        Italiano
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item kobolg-dropdown block-language">
                            <a href="#" data-kobolg="kobolg-dropdown">
                                {{-- <img src="{{asset('assets/images/en.png')}}"
                                     alt="en" width="18" height="12"> --}}
                                Downloads
                            </a>
                            <span class="toggle-submenu"></span>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">
                                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/d91264e165ed6facc6178994d5afae79.png"
                                             alt="it" width="300" height="300">

                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <div class="wcml-dropdown product wcml_currency_switcher">
                                <ul>
                                    <li class="wcml-cs-active-currency">
                                        <a class="wcml-cs-item-toggle">USD</a>
                                        <ul class="wcml-cs-submenu">
                                            <li>
                                                <a>EUR</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-middle-inner">
                <div class="header-logo-menu">
                    <div class="block-menu-bar">
                        <a class="menu-bar menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="header-logo">
                        <a href="{{route('front.home')}}"><img alt="Kobolg" height="50px" width="200px" src="{{asset('assets/images/logo2.png')}}"
                                                  class="logo"></a></div>
                </div>
                <div class="header-search-mid">
                    <div class="header-search">
                        <div class="block-search">
                            <form role="search" method="get"
                                  class="form-search block-search-form kobolg-live-search-form" action="{{asset('/search')}}">
                                <div class="form-content search-box results-search">
                                    <div class="inner">
                                        <input autocomplete="off" class="searchfield txt-livesearch input" name="result"
                                               value="" placeholder="Search here..." type="text">
                                    </div>
                                </div>
                                <input name="post_type" value="product" type="hidden">
                                <input name="taxonomy" value="product_cat" type="hidden">
                                <div class="category">
                                    <select title="product_cat" name="product_cat" id="1771262470"
                                            class="category-search-option"
                                            tabindex="-1" style="display: none;">
                                        <option value="0">All Categories</option>
                                        @foreach ($categories as $category)
                                        <option class="level-0" value="light"><a href="{{asset('category/'.$category->id.'/'.$category->slug.'.html')}}">{{$category->name}}</a></option>
                                        @endforeach
                                        {{-- <option class="level-0" value="light">Camera</option>
                                        <option class="level-0" value="chair">Accessories</option>
                                        <option class="level-0" value="table">Game & Consoles</option>
                                        <option class="level-0" value="bed">Life style</option>
                                        <option class="level-0" value="new-arrivals">New arrivals</option>
                                        <option class="level-0" value="lamp">Summer Sale</option>
                                        <option class="level-0" value="specials">Specials</option>
                                        <option class="level-0" value="sofas">Featured</option> --}}
                                    </select>
                                </div>
                                <button type="submit" class="btn-submit">
                                    <span class="flaticon-search"></span>
                                </button>
                            </form><!-- block search -->
                        </div>
                    </div>
                </div>
                <div class="header-control">
                    <div class="header-control-inner">
                        <div class="meta-dreaming">
                            @if (isset(Auth::user()->name))
                            Hi, {{Auth::user()->name ??''}}
                            <div class="menu-item block-user block-dreaming kobolg-dropdown">
                                <a class="block-link" href="" title="Tài khoản">
                                    <span class="flaticon-profile"></span>
                                </a>
                                <ul class="sub-menu">
                                    {{-- @foreach ($user as $u)
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--dashboard is-active">
                                        <a href="{{route('users.edit',$u->id)}}">My account</a>
                                    </li>
                                    @endforeach --}}

                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--orders">
                                        <a href="#">Orders</a>
                                    </li>
                                    {{-- <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--downloads">
                                        <a href="#">Downloads</a>
                                    </li> --}}
                                    {{-- <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-addresses">
                                        <a href="#">Addresses</a>
                                    </li> --}}
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-account">
                                        <a href="{{route('users.edit','user')}}">Account details</a>
                                    </li>
                                    <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--customer-logout">

                                    <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <div class="">
                                                <button type="submit" class="btn btn-danger"><span>Logout</span></button>
                                            </div>

                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @else
                            <div class="menu-item block-user block-dreaming kobolg-dropdown">
                                <form class="d-flex">
                                    <a href="{{route('get.register')}}" class="btn btn-success">Sign Up</a>
                                    <a href="{{route('get.login')}}" class="btn btn-warning">Login</a>

                                    </form>

                            </div>
                            @endif
                            <div class="block-minicart block-dreaming kobolg-mini-cart kobolg-dropdown">
                                <div class="shopcart-dropdown block-cart-link" data-kobolg="kobolg-dropdown">
                                    <a class="block-link link-dropdown" href="cart.html" title="Giỏ hàng">
                                        <span class="flaticon-online-shopping-cart"></span>
                                        <span class="count">{{Cart::count()}}</span>
                                    </a>
                                </div>
                                <div class="widget kobolg widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">
                                        <h3 class="minicart-title">Your Cart<span class="minicart-number-items">{{Cart::count()}}</span>
                                        </h3>
                                        <ul class="kobolg-mini-cart cart_list product_list_widget">
                                            @foreach (Cart::content() as $item)
                                            <li class="kobolg-mini-cart-item mini_cart_item">
                                                <a href="{{asset('cart/delete/'.$item->rowId)}}" class="remove remove_from_cart_button">×</a>
                                                {{-- <form action="{{ route('deletecart',$item->id) }}" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden" value="">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="27"
                                                    data-product_sku="885B712">x</button>
                                                </form> --}}
                                                <a href="#">{{$item->name}}
                                                    <img src="{{asset($item->options->img)}}"
                                                         class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                         alt="img" width="600" height="778">
                                                </a>
                                                <span class="quantity">{{$item->qty}} × <span
                                                        class="kobolg-Price-amount amount"><span
                                                        class="kobolg-Price-currencySymbol"></span>{{number_format($item->price)}} VNĐ</span></span>


                                            </li>
                                            @endforeach

                                            {{-- <li class="kobolg-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="{{asset('assets/images/apro1113-600x778.jpg')}}"
                                                         class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                         alt="img" width="600" height="778">Red Consoles&nbsp;
                                                </a>
                                                <span class="quantity">1 × <span
                                                        class="kobolg-Price-amount amount"><span
                                                        class="kobolg-Price-currencySymbol">$</span>129.00</span></span>
                                            </li>
                                            <li class="kobolg-mini-cart-item mini_cart_item">
                                                <a href="#" class="remove remove_from_cart_button">×</a>
                                                <a href="#">
                                                    <img src="{{asset('assets/images/apro201-1-600x778.jpg')}}"
                                                         class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                         alt="img" width="600" height="778">Smart Monitor&nbsp;
                                                </a>
                                                <span class="quantity">1 × <span
                                                        class="kobolg-Price-amount amount"><span
                                                        class="kobolg-Price-currencySymbol">$</span>139.00</span></span>
                                            </li> --}}
                                        </ul>
                                        <p class="kobolg-mini-cart__total total"><strong>Subtotal: {{number_format(Cart::total())}}</strong>
                                            <span class="kobolg-Price-amount amount"><span
                                                    class="kobolg-Price-currencySymbol"></span> VNĐ</span>
                                        </p>
                                        <p class="kobolg-mini-cart__buttons buttons">
                                            <a href="{{route('showcart')}}" class="button kobolg-forward">Viewcart</a>
                                            <a href="{{route('checkout')}}" class="button checkout kobolg-forward">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @if (isset(Auth::user()->name))
                            <div class="block-minicart block-dreaming kobolg-mini-cart kobolg-dropdown">
                                <div class="shopcart-dropdown block-cart-link" >
                                    <a class="block-link link-dropdown" href="{{route('wishlist')}}" title="wishlist">
                                        {{-- <span class="flaticon-online-shopping-cart"></span> --}}
                                        <i class="fa-regular fa-heart"></i>
                                        <span class="count">{{Cart::count()}}</span>
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-mobile">
        <div class="header-mobile-left">
            <div class="block-menu-bar">
                <a class="menu-bar menu-toggle" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="header-search kobolg-dropdown">
                <div class="header-search-inner" data-kobolg="kobolg-dropdown">
                    <a href="#" class="link-dropdown block-link">
                        <span class="flaticon-search"></span>
                    </a>
                </div>
                <div class="block-search">
                    <form role="search" method="get"
                          class="form-search block-search-form kobolg-live-search-form">
                        <div class="form-content search-box results-search">
                            <div class="inner">
                                <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                       placeholder="Search here..." type="text">
                            </div>
                        </div>
                        <input name="post_type" value="product" type="hidden">
                        <input name="taxonomy" value="product_cat" type="hidden">
                        <div class="category">
                            <select title="product_cat" name="product_cat" id="1770352541"
                                    class="category-search-option" tabindex="-1"
                                    style="display: none;">
                                <option value="0">All Categories</option>
                                <option class="level-0" value="light">Camera</option>
                                <option class="level-0" value="chair">Accessories</option>
                                <option class="level-0" value="table">Game & Consoles</option>
                                <option class="level-0" value="bed">Life style</option>
                                <option class="level-0" value="new-arrivals">New arrivals</option>
                                <option class="level-0" value="lamp">Summer Sale</option>
                                <option class="level-0" value="specials">Specials</option>
                                <option class="level-0" value="sofas">Featured</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-submit">
                            <span class="flaticon-search"></span>
                        </button>
                    </form><!-- block search -->
                </div>
            </div>
            <ul class="wpml-menu">
                <li class="menu-item kobolg-dropdown block-language">
                    <a href="#" data-kobolg="kobolg-dropdown">
                        <img src="{{asset('assets/images/en.png')}}"
                             alt="en" width="18" height="12">
                        English
                    </a>
                    <span class="toggle-submenu"></span>
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#">
                                <img src="{{asset('assets/images/it.png')}}"
                                     alt="it" width="18" height="12">
                                Italiano
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <div class="wcml-dropdown product wcml_currency_switcher">
                        <ul>
                            <li class="wcml-cs-active-currency">
                                <a class="wcml-cs-item-toggle">USD</a>
                                <ul class="wcml-cs-submenu">
                                    <li>
                                        <a>EUR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-mobile-mid">
            <div class="header-logo">
                <a href="index.html"><img alt="Kobolg"
                                          src="{{asset('assets/images/logo2.png')}}"
                                          class="logo"></a></div>
        </div>
        <div class="header-mobile-right">
            <div class="header-control-inner">
                <div class="meta-dreaming">
                    <div class="menu-item block-user block-dreaming kobolg-dropdown">
                        <a class="block-link" href="my-account.html">
                            <span class="flaticon-profile"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--dashboard is-active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--orders">
                                <a href="#">Orders</a>
                            </li>
                            <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--downloads">
                                <a href="#">Downloads</a>
                            </li>
                            <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-addresses">
                                <a href="#">Addresses</a>
                            </li>
                            <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--edit-account">
                                <a href="#">Account details</a>
                            </li>
                            <li class="menu-item kobolg-MyAccount-navigation-link kobolg-MyAccount-navigation-link--customer-logout">
                                <a href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-minicart block-dreaming kobolg-mini-cart kobolg-dropdown">
                        <div class="shopcart-dropdown block-cart-link" data-kobolg="kobolg-dropdown">
                            <a class="block-link link-dropdown" href="cart.html">
                                <span class="flaticon-online-shopping-cart"></span>
                                <span class="count">3</span>
                            </a>
                        </div>
                        <div class="widget kobolg widget_shopping_cart">
                            <div class="widget_shopping_cart_content">
                                <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span></h3>
                                <ul class="kobolg-mini-cart cart_list product_list_widget">
                                    <li class="kobolg-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/apro134-1-600x778.jpg')}}"
                                                 class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                 alt="img" width="600" height="778">T-shirt with skirt – Pink&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>150.00</span></span>
                                    </li>
                                    <li class="kobolg-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/apro1113-600x778.jpg')}}"
                                                 class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                 alt="img" width="600" height="778">Red Consoles&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>129.00</span></span>
                                    </li>
                                    <li class="kobolg-mini-cart-item mini_cart_item">
                                        <a href="#" class="remove remove_from_cart_button">×</a>
                                        <a href="#">
                                            <img src="{{asset('assets/images/apro201-1-600x778.jpg')}}"
                                                 class="attachment-kobolg_thumbnail size-kobolg_thumbnail"
                                                 alt="img" width="600" height="778">Smart Monitor&nbsp;
                                        </a>
                                        <span class="quantity">1 × <span
                                                class="kobolg-Price-amount amount"><span
                                                class="kobolg-Price-currencySymbol">$</span>139.00</span></span>
                                    </li>
                                </ul>
                                <p class="kobolg-mini-cart__total total"><strong>Subtotal:</strong>
                                    <span class="kobolg-Price-amount amount"><span
                                            class="kobolg-Price-currencySymbol">$</span>418.00</span>
                                </p>
                                <p class="kobolg-mini-cart__buttons buttons">
                                    <a href="cart.html" class="button kobolg-forward">Viewcart</a>
                                    <a href="checkout.html" class="button checkout kobolg-forward">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

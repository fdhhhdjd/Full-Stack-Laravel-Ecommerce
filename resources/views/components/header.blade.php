<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a title="Hotline: (+84) 798805741" href="#"><span
                                        class="icon label-before fa fa-mobile"></span>Hotline: (+84) 798805741</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img
                                            src="{{ asset('assets/images/lang-en.png') }}"
                                            alt="lang-en"></span>English<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="submenu lang">
                                    <li class="menu-item"><a title="hungary" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-hun.png"
                                                    alt="lang-hun"></span>Hungary</a></li>
                                    <li class="menu-item"><a title="german" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-ger.png"
                                                    alt="lang-ger"></span>German</a></li>
                                    <li class="menu-item"><a title="french" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-fra.png"
                                                    alt="lang-fre"></span>French</a></li>
                                    <li class="menu-item"><a title="canada" href="#"><span
                                                class="img label-before"><img src="assets/images/lang-can.png"
                                                    alt="lang-can"></span>Canada</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children parent">
                                <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <ul class="submenu curency">
                                    <li class="menu-item">
                                        <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                    </li>
                                </ul>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->utype === 'ADM')

                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account
                                                ({{ Auth::user()->name }}) <i class="fa fa-angle-down"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.dashboard') }}" title="Dashboard">Dashboard</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.categories') }}" title="Category">Manager
                                                        Categories</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.products') }}" title="Product">Manager
                                                        Products</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.homeslider') }}" title="Slider">Manager
                                                        Slider</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.homecategories') }}"
                                                        title="Home Category">Manager
                                                        Home Category</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.coupons') }}" title="Coupons">Manager
                                                        Coupons</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.attributes') }}" title="Attribute">Manager
                                                        Attributes</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.orders') }}" title="Orders">Manager
                                                        Orders</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.contact') }}" title="contact">Manager
                                                        Contact</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ route('admin.sale') }}" title="Dashboard">
                                                        Managers Sale </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('admin.settings') }}" title="setting">Settings
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('logout') }}" title="logout"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @else
                                        <li class="menu-item menu-item-has-children parent">
                                            <a title="My Account" href="#">My Account
                                                ({{ Auth::user()->name }}) <i class="fa fa-angle-down"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <ul class="submenu curency">
                                                <li class="menu-item">
                                                    <a href="{{ route('user.dashboard') }}"
                                                        title="Dashboard">Dashboard</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('user.profile') }}" title="Profile">Profile</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('user.orders') }}" title="Orders">Orders</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('user.changepassword') }}"
                                                        title="Change Password">Change Password</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="{{ route('logout') }}" title="logout"
                                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                    @endif
                                @else
                                    <li class="menu-item"><a title="Register or Login"
                                            href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="menu-item"><a title="Register or Login"
                                            href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/shop" class="link-to-home"><img
                                    src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado"></a>
                        </div>
                        {{-- Header Search --}}
                        @livewire('header-search-component')


                        <div class="wrap-icon right-section">
                            {{-- wishlist --}}
                            @livewire('wishlist-count-component')
                            {{-- Cart --}}
                            @livewire('cart-count-component')


                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="header-nav-section">
                        <div class="container">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info">
                                <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top new items</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span
                                        class="nav-label hot-label">hot</span></li>
                                <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span
                                        class="nav-label hot-label">hot</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="/about" class="link-term mercado-item-title">About Us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/contact-us" class="link-term mercado-item-title">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

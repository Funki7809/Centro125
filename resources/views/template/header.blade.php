<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="topbar">
            <div class="content-topbar container h-100">
                <div class="left-topbar">
                </div>

                <div class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{ url('/') }}"><img src="{{ asset('images/imagotipo125.png') }}" alt="IMG-LOGO"></a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="menu-mobile">

            <ul class="main-menu-m">
                @foreach($categories as $category)
                <li>
                    <a href="{{ route('category.show', [$category->id]) }}">{{$category->name}}</a>
                    <a href="{{ route('category.show', [$category->id]) }}">
                
                        <span class="arrow-main-menu-m">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- header desktop -->
        <div class="wrap-logo container">
            <!-- Logo desktop -->
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('images/imagotipo125.png') }}"" alt="LOGO"></a>
            </div>

            <!-- Banner -->
            <div class="banner-header">
                <!-- <a href="#"><img src="images/banner-01.jpg" alt="IMG"></a> -->
            </div>
        </div>

        <!--  -->
        <div class="wrap-main-nav">
            <div class="main-nav">
                <!-- Menu desktop -->
                <nav class="menu-desktop">
                    <a class="logo-stick" href="{{ url('/') }}">
                        <img src="{{ asset('images/imagotipo125.png') }}" alt="LOGO">
                    </a>
                    <ul class="main-menu">
                        @foreach($categories as $category)
                            <li class="main-menu-active">
                                <a href="{{ route('category.show', [$category->id]) }}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

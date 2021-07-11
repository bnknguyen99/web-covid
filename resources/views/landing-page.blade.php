<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VNPT Store</title>
        <link rel="shortcut icon" href="/favicon.ico" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


    </head>
    <body>
        <div id="app">
            <header class="with-background">
            <video autoplay muted loop id="myVideo">
                <source src="https://tuyendung.vnpt.vn/Images/2_610x1920px.mp4" type="video/mp4">
                </video>
                <div class="top-nav-1 container">
                    <div class="top-nav-left">
                        <div class="logo"><a href="/shop"><img src="https://tuyendung.vnpt.vn/images/logo%203.png" alt="logo"></a></div>
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <p style="font-size: 40px; font-weight: bold;">VNPT MOBILE STORE</p>
                        <P></P>
                        <div class="hero-buttons">
                            <a href="/shop" class="button button-white">Mua ngay</a>
                        </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image" style="height: 250px">

                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>

            <div class="featured-section">
                            
                <div class="container">
                    <h1 class="text-center">Sản phẩm mới!!!</h1>
                    <div class="products text-center col-sm 1">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product" style="width:40px;height:40px;"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->


                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">Xem thêm</a>
                        <a href="/shop?category=on-sale" class="button">Đang giảm giá</a>
                    </div>
                        
                    {{-- <div class="tabs">
                        <div class="tab">
                            view more
                        </div>
                        <div class="tab">
                            On Sale
                        </div>
                    </div> --}}


                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            
            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>

</html>

<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- js -->
    <script src="{{asset('assets/vendor/jquery-3.3.1/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/owl-carousel-2.3.4/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendor/nouislider-12.1.0/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/js/number.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/vendor/svg4everybody-2.1.9/svg4everybody.min.js')}}"></script>
    <script>svg4everybody();</script>
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-5.6.1/css/all.min.css')}}">
    <!-- font - stroyka -->
    <link rel="stylesheet" href="{{asset('assets/fonts/stroyka/stroyka.css')}}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
    @livewireStyles
</head>

<body>
    <!-- mobilemenu -->
    <div class="mobilemenu">
        <div class="mobilemenu__backdrop"></div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__header">
                <div class="mobilemenu__title">Menu</div>
                <button type="button" class="mobilemenu__close">
                    <svg width="20px" height="20px">
                        <use xlink:href="{{asset('assets/images/sprite.svg')}}#cross-20"></use>
                    </svg>
                </button>
            </div>
            <div class="mobilemenu__content">
                <ul class="mobile-links mobile-links--level--0" data-collapse
                    data-collapse-opened-class="mobile-links__item--open">
                    <li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="{{route('home')}}" class="mobile-links__item-link">Accueil</a>
                        </div>
                    </li>
                    {{--<li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home</a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="{{asset('assets/images/sprite.svg')}}#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item>
                                    <div class="mobile-links__item-title"><a href="index.html"
                                                                             class="mobile-links__item-link">Home 1</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>--}}
                </ul>
            </div>
        </div>
    </div>
    <!-- mobilemenu / end -->

    <!-- site -->
    <div class="site">
        @include('layouts.header')
        <!-- site__body -->
        <div class="site__body">
            {{ $slot }}
        </div>
        <!-- site__body / end -->
        @include('layouts.footer')
    </div>
    <!-- site / end -->
    @livewireScripts
</body>
</html>

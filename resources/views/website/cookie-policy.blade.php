@extends('components.profile.app')
@section('content')
    <!-- banner -->
    {{--    <div class="mil-inner-banner">--}}
    {{--        <div class="mil-banner-content mil-up">--}}
    {{--            <div class="mil-animation-frame">--}}
    {{--                <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>--}}
    {{--            </div>--}}
    {{--            <div class="container">--}}
    {{--                <ul class="mil-breadcrumbs mil-mb-60">--}}
    {{--                    <li><a href="{{route('home')}}">Homepage</a></li>--}}
    {{--                    <li><a href="{{route('privacy-policy')}}">privacy policy</a></li>--}}
    {{--                </ul>--}}
    {{--                <h1 class="mil-mb-60">Privacy Policy</h1>--}}
    {{--                <a href="#about" class="mil-link mil-dark mil-arrow-place mil-down-arrow">--}}
    {{--                    <span>Read</span>--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- banner end -->

    <!-- about -->
    <section id="about">
        <div class="container mil-p-120-30">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-12 col-xl-12">

                    <div class="mil-mb-90">
                        <h2 class="mil-up mil-mb-60">Cookie Policy – <span class="mil-thin">MARAVILLA</span></h2>
                        <p class="mil-up mil-mb-30">
                            This website uses cookies and similar technologies to improve user experience and analyze
                            website performance.
                        </p>


                        <p class="mil-up mil-mb-10">
                            Cookies may be used to:</p>
                        <ul class="ms-3 mil-mb-30">
                            <li>
                                Understand how visitors interact with the website
                            </li>
                            <li>
                                Improve website functionality
                            </li>
                            <li>
                                Support third-party services such as Google Maps
                            </li>
                        </ul>

                        <p class="mil-up mil-mb-30">
                            You can control or disable cookies through your browser settings. Please note that disabling
                            cookies may affect some features of the website.
                        </p>
                        <p class="mil-up mil-mb-30">
                            By continuing to use this website, you agree to our use of cookies.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    @include('website.footer')

@endsection

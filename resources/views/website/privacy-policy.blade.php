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
                        <h2 class="mil-up mil-mb-60">Privacy Policy – <span class="mil-thin">MARAVILLA</span></h2>
                        <p class="mil-up mil-mb-30">
                            At MARAVILLA, we respect your privacy and are committed to protecting any personal
                            information you provide through our website.
                        </p>

                        <h5 class="mil-up mil-mb-10">
                            Information We Collect
                        </h5>

                        <p class="mil-up mil-mb-10">
                            We may collect personal information when you interact with our website, including:</p>
                        <ul class="ms-3 mil-mb-30">
                            <li>
                                Name
                            </li>
                            <li>
                                Email address
                            </li>
                            <li>
                                Message content
                            </li>
                        </ul>

                        <p class="mil-up mil-mb-30">
                            We may also automatically collect limited technical information such as IP address, browser
                            type, and device information for security and analytics purposes.
                        </p>

                        <h5 class="mil-up mil-mb-10">
                            How We Use Your Information
                        </h5>

                        <p class="mil-up mil-mb-10">
                            We use your information to:
                        </p>
                        <ul class="ms-3 mil-mb-30">
                            <li>
                                Respond to your inquiries and communicate with you
                            </li>
                            <li>
                                Provide our services and customer support
                            </li>
                            <li>
                                Improve our website performance and user experience
                            </li>
                            <li>
                                We do not sell, rent, or trade your personal data to third parties.
                            </li>
                        </ul>
                        <h5 class="mil-up mil-mb-10">
                            Third-Party Services
                        </h5>

                        <p class="mil-up mil-mb-10">
                            Our website uses third-party services such as Google Maps to display our company location.
                            These services may collect information about your visit, including IP address, device
                            information, location data, and cookies, in accordance with their own privacy policies.
                        </p>
                        <p class="mil-up mil-mb-10">
                            MARAVILLA does not control and is not responsible for how these third-party services process
                            your data.
                        </p>
                        <h5 class="mil-up mil-mb-10">
                            Data Protection
                        </h5>

                        <p class="mil-up mil-mb-10">
                            We implement appropriate technical and organizational measures to protect your personal data
                            against unauthorized access, misuse, loss, or disclosure.
                        </p>
                        <h5 class="mil-up mil-mb-10">
                            Data Retention
                        </h5>

                        <p class="mil-up mil-mb-10">
                            We retain personal information only for as long as necessary to fulfill the purposes
                            outlined in this policy, unless a longer retention period is required by law.
                        </p>
                        <h5 class="mil-up mil-mb-10">
                            Your Rights
                        </h5>

                        <p class="mil-up mil-mb-10">
                            You have the right to request access, correction, or deletion of your personal data by
                            contacting us at:
                        </p>
                        <a href="mailto:info@maravilla-bc.com">info@maravilla-bc.com</a>
                        <h5 class="mil-up mil-mb-10">
                            Changes to This Policy
                        </h5>

                        <p class="mil-up mil-mb-10">
                            We reserve the right to update this Privacy Policy at any time. Any changes will be posted
                            on this page.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    @include('website.footer')

@endsection

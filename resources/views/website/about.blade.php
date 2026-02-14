@extends('components.profile.app')
@section('content')
    <!-- banner -->
    <div class="mil-inner-banner">
        <div class="mil-banner-content mil-up">
            <div class="mil-animation-frame">
                <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
            </div>
            <div class="container">
                <ul class="mil-breadcrumbs mil-mb-60">
                    <li><a href="{{route('home')}}">Homepage</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                </ul>
                <h1 class="mil-mb-60">Building a <br> Better <span class="mil-thin">World Today</span></h1>
                <a href="#about" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                    <span>About Us</span>
                </a>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- about -->
    <section id="about">
        <div class="container mil-p-120-30">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-6 col-xl-5">

                    <div class="mil-mb-90">
                        <h2 class="mil-up mil-mb-60">Discover <br>Our <span class="mil-thin">Firm</span></h2>
                        <p class="mil-up mil-mb-30">
                            At MARAVILLA, we are passionate about crafting stunning buildings while
                            ensuring every project follows a meticulous process that delivers both
                            efficiency and exceptional quality. As a customer-centric construction and
                            project management group, we pride ourselves on building strong relationships
                            with individuals and businesses.
                        </p>

                        <p class="mil-up mil-mb-60"> Our commitment to expert guidance helps our clients complete their
                            projects
                            on time and within budget, without compromising excellence. Driven by a team
                            of seasoned professionals across construction, design, and project
                            management, MARAVILLA offers innovative, modern solutions that meet the
                            diverse needs of our clients. We believe that true luxury lies in the details—by
                            combining thoughtful design with precise project execution, we create spaces
                            that elevate lifestyles and exceed expectations</p>

                        {{--                        <div class="mil-about-quote">--}}
                        {{--                            <div class="mil-avatar mil-up">--}}
                        {{--                                <img src="img/faces/customers/2.jpg" alt="Founder">--}}
                        {{--                            </div>--}}
                        {{--                            <h6 class="mil-quote mil-up">Passionately Creating <span--}}
                        {{--                                    class="mil-thin">Design Wonders:</span> Unleashing <span class="mil-thin">Boundless Creativity</span>--}}
                        {{--                            </h6>--}}
                        {{--                        </div>--}}
                    </div>

                </div>
                <div class="col-lg-5">

                    <div class="mil-about-photo mil-mb-90">

                        <div class="mil-lines-place"></div>
                        <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                            <img src="{{asset('img/photo/about.png')}}" alt="img" class="mil-scale" data-value-1="1"
                                 data-value-2="1.2">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- services -->
    <section class="mil-dark-bg">
        <div class="mi-invert-fix">
            <div class="mil-animation-frame">
                <div class="mil-animation mil-position-1 mil-scale" data-value-1="2.4" data-value-2="1.4"
                     style="top: 300px; right: -100px"></div>
                <div class="mil-animation mil-position-2 mil-scale" data-value-1="2" data-value-2="1"
                     style="left: 150px"></div>
            </div>
            <div class="container mil-p-120-0">

                <div class="mil-mb-120">
                    <div class="row">
                        <div class="col-lg-10">
                            {{--A trusted team focused on building strong results and lasting value--}}
                            <span class="mil-suptitle mil-light-soft mil-suptitle-right mil-up">A trusted team focused on building strong results<br> and lasting value.</span>

                        </div>
                    </div>

                    <div class="mil-complex-text justify-content-center mil-up mil-mb-15">

                        <span class="mil-text-image"><img src="img/photo/2.jpg" alt="team"></span>
                        {{--                        Building Ideas Into Reality--}}
                        <h2 class="mil-h1 mil-muted mil-center">Building <span class="mil-thin">Ideas</span></h2>

                    </div>
                    <div class="mil-complex-text justify-content-center mil-up">

                        <h2 class="mil-h1 mil-muted mil-center">Into <span class="mil-thin">Reality.</span></h2>
                        {{--                        <a href="services.html"--}}
                        {{--                           class="mil-services-button mil-button mil-arrow-place"><span>What we do</span></a>--}}

                    </div>
                </div>

                <div class="row mil-services-grid m-0">
                    <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="#" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">Construction</h5>
                            <p class="mil-light-soft mil-mb-30">
                                DCC’s collaborative planning, design, and construction delivered Maravilla’s biggest,
                                most successful project.
                            </p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div>
                    <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="#" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">Design</h5>
                            <p class="mil-light-soft mil-mb-30">
                                Award-winning UAE creative team with 10 years’ expertise
                                delivering innovative, practical designs.
                            </p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div>
                    <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="#" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">Project Management</h5>
                            <p class="mil-light-soft mil-mb-30">
                                Sets project scope, roles, and approvals to complete
                                essential tasks efficiently.
                            </p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div>
                    <div class="col-md-6 col-lg-3 mil-services-grid-item p-0">

                        <a href="#" class="mil-service-card-sm mil-up">
                            <h5 class="mil-muted mil-mb-30">Fit Out</h5>
                            <p class="mil-light-soft mil-mb-30">
                                Boosting efficiency across retail, leisure, and industry.
                            </p>
                            <div class="mil-button mil-icon-button-sm mil-arrow-place"></div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- team -->
    <section>
        {{--        @include('components.profile.pattern')--}}

        <div class="container mil-p-120-30">
            <div class="row justify-content-between align-items-center">

                <div class="col-lg-5 col-xl-4">

                    <div class="mil-mb-90">
                        <h2 class="mil-up mil-mb-60">Meet <br>Our Team</h2>
                        <p class="mil-up mil-mb-30">We are talented individuals who are passionate about bringing ideas
                            to life. With a diverse range of backgrounds and skill sets, we collaborate to produce
                            effective solutions for our clients.</p>

                        <p class="mil-up mil-mb-60">Together, our creative team is committed to delivering impactful
                            work that exceeds expectations.</p>

                        <div class="mil-up">
                            {{--                            <a href="team.html" class="mil-button mil-arrow-place mil-mb-60"><span>Read more</span></a>--}}
                        </div>

                        <h4 class="mil-up">
                            <span class="mil-thin">We</span> delivering <br><span class="mil-thin">exceptional</span>
                            results.
                        </h4>
                    </div>

                </div>


                <div class="col-lg-6">
                    <div class="mil-team-list">
                        <div class="mil-lines-place"></div>

                        <div class="row mil-mb-60">
                            @foreach($teamMembers->chunk(ceil($teamMembers->count() / 2)) as $index => $columnMembers)
                                <div class="col-sm-6">

                                    @if($index == 1)
                                        <p class="mil-mobile-hidden mil-text-sm mil-mb-30" style="height: 30px;">
                                            <span class="mil-accent">*</span> The founders of our agency
                                        </p>
                                    @endif

                                    @foreach($columnMembers as $member)
                                        <div class="mil-team-card mil-up mil-mb-30">
                                            <img src="{{ asset('storage/' . $member->image) }}"
                                                 alt="{{ $member->name }}">
                                            <div class="mil-description">
                                                <div class="mil-secrc-text">
                                                    <h5 class="mil-muted mil-mb-5">
                                                        <a href="#">
                                                            {{ $member->name }}
                                                        </a>
                                                    </h5>
                                                    <p class="mil-link mil-light-soft mil-mb-10">{{ $member->position }}</p>

                                                    <ul class="mil-social-icons mil-center">
                                                        <li>
                                                            <a href="{{ $member->whatsapp??config('socials.whatsapp') }}"
                                                               target="_blank" class="social-icon"
                                                               rel="noopener noreferrer"
                                                               onclick="window.open(this.href, '_blank'); return false;">
                                                                <i class="fab fa-whatsapp"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ $member->linkedin ??config('socials.linkedin')}}"
                                                               target="_blank" class="social-icon"
                                                               rel="noopener noreferrer"
                                                               onclick="window.open(this.href, '_blank'); return false;">
                                                                <i class="fab fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ $member->instagram ??config('socials.instagram')}}"
                                                               target="_blank"
                                                               class="social-icon"
                                                               rel="noopener noreferrer"
                                                               onclick="window.open(this.href, '_blank'); return false;">
                                                                <i class="fab fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ $member->behance ??config('socials.behance')}}"
                                                               target="_blank" class="social-icon"
                                                               rel="noopener noreferrer"
                                                               onclick="window.open(this.href, '_blank'); return false;">
                                                                <i class="fab fa-behance"></i>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team end -->

    <!-- reviews -->
    <section class="mil-soft-bg">
        <div class="container mil-p-120-120">

            <div class="row">
                <div class="col-lg-10">

                    <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Customer reviews are a valuable source <br>of information for both businesses and consumers.</span>

                </div>
            </div>

            <h2 class="mil-center mil-up mil-mb-60">Customer <span class="mil-thin">Voices:</span> <br>Hear What <span
                    class="mil-thin">They Say!</span></h2>

            <div class="mil-revi-pagination mil-up mil-mb-60"></div>

            <div class="row mil-relative justify-content-center">
                <div class="col-lg-8">

                    <div class="mil-slider-nav mil-soft mil-reviews-nav mil-up">
                        <div class="mil-slider-arrow mil-prev mil-revi-prev mil-arrow-place"></div>
                        <div class="mil-slider-arrow mil-revi-next mil-arrow-place"></div>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="mil-quote-icon mil-up">
                        <path
                            d="M 13.5 10 A 8.5 8.5 0 0 0 13.5 27 A 8.5 8.5 0 0 0 18.291016 25.519531 C 17.422273 29.222843 15.877848 31.803343 14.357422 33.589844 C 12.068414 36.279429 9.9433594 37.107422 9.9433594 37.107422 A 1.50015 1.50015 0 1 0 11.056641 39.892578 C 11.056641 39.892578 13.931586 38.720571 16.642578 35.535156 C 19.35357 32.349741 22 27.072581 22 19 A 1.50015 1.50015 0 0 0 21.984375 18.78125 A 8.5 8.5 0 0 0 13.5 10 z M 34.5 10 A 8.5 8.5 0 0 0 34.5 27 A 8.5 8.5 0 0 0 39.291016 25.519531 C 38.422273 29.222843 36.877848 31.803343 35.357422 33.589844 C 33.068414 36.279429 30.943359 37.107422 30.943359 37.107422 A 1.50015 1.50015 0 1 0 32.056641 39.892578 C 32.056641 39.892578 34.931586 38.720571 37.642578 35.535156 C 40.35357 32.349741 43 27.072581 43 19 A 1.50015 1.50015 0 0 0 42.984375 18.78125 A 8.5 8.5 0 0 0 34.5 10 z"
                            fill="#000000"/>
                    </svg>

                    <div class="swiper-container mil-reviews-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                     data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional
                                        talent and expertise. Their ability to think outside the box and bring unique
                                        ideas to life is truly impressive. With meticulous attention to detail, they
                                        consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                     data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                        agency, and I must say, they truly impressed me. They consistently think outside
                                        the box, resulting in impressive and impactful work. I highly recommend this
                                        agency for their consistent delivery of exceptional creative solutions.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                     data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional
                                        talent and expertise. Their ability to think outside the box and bring unique
                                        ideas to life is truly impressive. With meticulous attention to detail, they
                                        consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                     data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                        agency, and I must say, they truly impressed me. They consistently think outside
                                        the box, resulting in impressive and impactful work. I highly recommend this
                                        agency for their consistent delivery of exceptional creative solutions.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                     data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional
                                        talent and expertise. Their ability to think outside the box and bring unique
                                        ideas to life is truly impressive. With meticulous attention to detail, they
                                        consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                     data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">I had the pleasure of working with this creative
                                        agency, and I must say, they truly impressed me. They consistently think outside
                                        the box, resulting in impressive and impactful work. I highly recommend this
                                        agency for their consistent delivery of exceptional creative solutions.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="mil-review-frame mil-center" data-swiper-parallax="-200"
                                     data-swiper-parallax-opacity="0">
                                    <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                    <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                    <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional
                                        talent and expertise. Their ability to think outside the box and bring unique
                                        ideas to life is truly impressive. With meticulous attention to detail, they
                                        consistently deliver visually stunning and impactful work.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- reviews end -->

    <!-- partners -->
    <div class="mil-soft-bg">
        <div class="container mil-p-0-120">

            <div class="swiper-container mil-infinite-show mil-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/damac.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/dc.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/tech.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/elington.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/global.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/besix.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/sank.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/naga.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/b8.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/ajmal.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-partner-frame" style="width: 60px;">
                            <img src="{{asset('img/partners/ua.png')}}" alt="logo">
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- partners end -->

    <!-- blog -->
    <section>
        <div class="container mil-p-120-60">
            <div class="row align-items-center mil-mb-30">
                <div class="col-lg-6 mil-mb-30">
                    <h3 class="mil-up">Recent Publications:</h3>
                </div>
                <div class="col-lg-6 mil-mb-30">
                    <div class="mil-adaptive-right mil-up">
                        <a href="{{route('blog')}}" class="mil-link mil-dark mil-arrow-place">
                            <span>View all</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($recentPosts as $post)
                    <div class="col-lg-6">

                        <a href="#" class="mil-blog-card mil-mb-60">
                            <div class="mil-cover-frame mil-up">
                                <img src="{{asset('storage/'.$post->featured_image)}}" alt="cover">
                            </div>
                            <div class="mil-post-descr">
                                <div class="mil-labels mil-up mil-mb-30">
                                    <div class="mil-label mil-upper mil-accent"></div>
                                    <div class="mil-label mil-upper">{{$post->published_at->format('Y-M-d')}}</div>
                                </div>
                                <h4 class="mil-up mil-mb-30">How to Become a Graphic Designer in 10 Simple Steps</h4>
                                <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Eius sequi commodi dignissimos optio, beatae, eos necessitatibus
                                    nisi.
                                    Nam cupiditate consectetur nostrum qui! Repellat natus nulla, nisi aliquid,
                                    asperiores
                                    impedit tempora sequi est reprehenderit cumque explicabo, dicta. Rem nihil ullam
                                    totam
                                    ea voluptas quibusdam repudiandae id ut at iure! Totam, a!</p>
                                <div class="mil-link mil-dark mil-arrow-place mil-up">
                                    <span>Read more</span>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog end -->

    @include('website.footer')
@endsection

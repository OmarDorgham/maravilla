@extends('components.profile.app')
@section('content')
    <!-- banner -->
    <div class="mil-inner-banner mil-p-0-120">
        <div class="mil-banner-content mil-up">
            <div class="mil-animation-frame">
                <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="6" data-value-2="1.4"></div>
            </div>
            <div class="container">
                <ul class="mil-breadcrumbs mil-mb-60">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                </ul>
                <h1 class="mil-mb-60">Exploring <span class="mil-thin"> Our</span><br> Blog</h1>
                <a href="#blog" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                    <span>Publications</span>
                </a>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- popular -->
    <section class="mil-soft-bg" id="blog">
        <div class="container mil-p-120-60">
            <div class="row align-items-center mil-mb-30">
                <div class="col-lg-6 mil-mb-30">
                    <h3 class="mil-up">Recent Publications:</h3>
                </div>
            </div>
            <div class="row">
                @foreach($recentPosts as $post)
                    <div class="col-lg-6">

                        <a href="{{route('post',$post)}}" class="mil-blog-card mil-mb-60">
                            <div class="mil-cover-frame mil-up">
                                <img src="{{asset('storage/'.$post->featured_image)}}" alt="cover">
                            </div>
                            <div class="mil-post-descr">
                                <div class="mil-labels mil-up mil-mb-30">
                                    <div class="mil-label mil-upper">{{$post->published_at->format('M d Y')}}</div>
                                </div>
                                <h4 class="mil-up mil-mb-30">{{$post->title}}</h4>
                                <p class="mil-post-text mil-up mil-mb-30">
                                    {{$post->excerpt}}
                                </p>
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
    <!-- popular end -->

    <!-- blog -->
    <section>
        <div class="container mil-p-120-120">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-lg-12">
                        <a href="{{route('post',$post)}}" class="mil-blog-card mil-blog-card-hori mil-more mil-mb-60">
                            <div class="mil-cover-frame mil-up">
                                <img src="{{asset('storage/'.$post->featured_image)}}" alt="cover">
                            </div>
                            <div class="mil-post-descr">
                                <div class="mil-labels mil-up mil-mb-30">
                                    <div class="mil-label mil-upper">{{$post->published_at->format('M d Y')}}</div>
                                </div>
                                <h4 class="mil-up mil-mb-30">{{$post->title}}</h4>
                                <p class="mil-post-text mil-up mil-mb-30">Lorem ipsum dolor sit amet, consectetur
                                    {{$post->excerpt}}
                                </p>
                                <div class="mil-link mil-dark mil-arrow-place mil-up">
                                    <span>Read more</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="mil-pagination">
                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                            <a href="{{ $posts->url($i) }}"
                               class="mil-pagination-btn {{ $posts->currentPage() == $i ? 'mil-active' : '' }}">
                                {{ $i }}
                            </a>
                        @endfor
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog end -->

    @include('website.footer')
@endsection

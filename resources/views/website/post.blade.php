@extends('components.profile.app')
@section('content')
    <!-- banner -->
    <div class="mil-inner-banner">
        <div class="mil-banner-content mil-center mil-up">
            <div class="container">
                <ul class="mil-breadcrumbs mil-center mil-mb-60">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('post',$post)}}">Publication</a></li>
                </ul>
                {{--                <h2>--}}
                {{--                    How to Become a--}}
                {{--                    <span class="mil-thin">Graphic</span>--}}
                {{--                    <br>--}}
                {{--                    Designer in--}}
                {{--                    <span class="mil-thin">10 Simple Steps</span>--}}
                {{--                </h2>--}}
                <h2>
                    {{ $chunk1 }}
                    <span class="mil-thin">{{ $chunk2 }}</span>
                    {{ $chunk3 }}
                    <span class="mil-thin">{{ $chunk4 }}</span><br>
                </h2>

            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- publication -->
    <section id="blog">
        <div class="container mil-p-120-90">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <div class="mil-image-frame mil-horizontal mil-up">
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Publication cover"
                             class="mil-scale" data-value-1=".90"
                             data-value-2="1.15">
                    </div>
                    <div class="mil-info mil-up mil-mb-90">
                        {{--                        <div>Category: &nbsp;<span class="mil-dark">Technology</span></div>--}}
                        <div>Date: &nbsp;<span class="mil-dark">{{$post->published_at->format('Y-M-d')}}</span></div>
                        {{--                        <div>Author: &nbsp;<span class="mil-dark">Paul Trueman</span></div>--}}
                    </div>

                </div>
                <div class="col-lg-8">
                    {!! str_replace('<p>', '<p class="mil-text-xl mil-dark mil-up mil-mb-60">', $post->content) !!}
                </div>
            </div>
        </div>
    </section>
    <!-- publication end -->

    @include('website.footer')
@endsection

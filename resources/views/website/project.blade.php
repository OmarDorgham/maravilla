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
                    <li><a href="{{route('projects')}}">Projects</a></li>
                </ul>
                @php
                    $words = explode(' ', $project->title);
                    $firstWord = array_shift($words);
                    $rest = implode(' ', $words);
                @endphp

                <h1 class="mil-mb-60">
                    {{ $firstWord }} <span class="mil-thin">{{ $rest }}</span>
                </h1>
                <a href="#project" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                    <span>Read more</span>
                </a>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <section id="project">
        <div class="container mil-p-120-120">
            <div class="swiper-container mil-2-slider mil-up">
                <div class="swiper-wrapper">
                    @foreach($project->images as $image)
                        <div class="swiper-slide">

                            <div class="mil-image-frame mil-vertical mil-drag">
                                <img src="{{asset('storage/'.$image->image)}}" alt="image">
                                <a data-fancybox="gallery" data-no-swup href="{{asset('storage/'.$image->image)}}"
                                   class="mil-zoom-btn">
                                    <img src="{{asset('img/icons/zoom.svg')}}" alt="zoom">
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="mil-info mil-up">
                <div>Client: &nbsp;<span class="mil-dark">{{$project->client_name}}</span></div>
                <div>Date: &nbsp;<span class="mil-dark">{{$project->project_date->format('M Y')}}</span></div>
                {{--                <div>Author: &nbsp;<span class="mil-dark">Paul Trueman</span></div>--}}
            </div>
            <div class="row justify-content-center mil-center mil-p-120-120">
                <div class="col-lg-8">
                    <h3 class="mil-up mil-mb-60">{{$project->title}}</h3>
                    <p class="mil-text-lg mil-up">{{$project->description}}</p>
                </div>
            </div>
            <div class="mil-image-frame mil-horizontal mil-up mil-mb-120">
                <img  src="{{asset('storage/'.$project->main_image)}}" alt="{{$project->title}}">
                <a data-fancybox="gallery" data-no-swup href="{{asset('storage/'.$project->main_image)}}"
                   class="mil-zoom-btn">
                    <img src="{{asset('img/icons/zoom.svg')}}" alt="zoom">
                </a>
            </div>
            <div class="mil-works-nav mil-up">
                @if($previous)
                    <a href="{{ route('projects.show', $previous->slug) }}"
                       class="mil-link mil-dark mil-arrow-place mil-icon-left">
                        <span>Prev project</span>
                    </a>
                @else
                    <span class="mil-link mil-dark mil-arrow-place mil-icon-left mil-disabled" disabled>
                        <span>Prev project</span>
                    </span>
                @endif

                <a href="{{ route('projects') }}" class="mil-link mil-dark">
                    <span>All projects</span>
                </a>

                @if($next)
                    <a href="{{ route('projects.show', $next->slug) }}" class="mil-link mil-dark mil-arrow-place">
                        <span>Next project</span>
                    </a>
                @else
                    <span class="mil-link mil-dark mil-arrow-place mil-disabled" disabled>
                        <span>Next project</span>
                    </span>
                @endif
            </div>

        </div>
    </section>
@endsection

@extends('components.profile.app')
@section('content')
    <section class="mil-portfolio-slider-frame">
        <div class="mil-animation-frame">
            <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="1" data-value-2="2"
                 style="top: -60px; right: -4px;"></div>
        </div>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-9">
                    <div class="swiper-container mil-portfolio-slider mil-up">
                        <div class="swiper-wrapper">
                            @foreach($projects as $project)
                                <div class="swiper-slide">

                                    <div class="mil-portfolio-item mil-slider-item" data-swiper-parallax="-30">
                                        <div class="mil-cover-frame mil-drag">
                                            <div class="mil-cover" data-swiper-parallax-scale="1.3">
                                                <img src="{{ asset('storage/' . $project->main_image) }}"
                                                     alt="{{$project->title}}">
                                            </div>
                                        </div>
                                        <div class="mil-descr" data-swiper-parallax-x="104%"
                                             data-swiper-parallax-opacity="0">
                                            <div class="mil-descr-text" data-swiper-parallax-y="100%"
                                                 data-swiper-parallax-opacity="0">
                                                <div class="mil-labels mil-mb-15">
                                                    {{--                                                    <div class="mil-label mil-upper mil-accent">TECHNOLOGY</div>--}}
                                                    <div
                                                        class="mil-label mil-upper">{{$project->project_date->format('M d Y')}}</div>
                                                </div>
                                                <h5>{{$project->title}}</h5>
                                            </div>
                                            <div data-swiper-parallax-y="120" data-swiper-parallax-opacity="0">
                                                <a href="{{route('projects.show',$project)}}"
                                                   class="mil-button mil-arrow-place">
                                                    <span>View Project</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mil-relative">
                    <div class="mil-portfolio-nav">
                        <div class="mil-portfolio-btns-frame">
                            <div class="swiper-portfolio-pagination"></div>
                            <div class="mil-slider-nav">
                                <div class="mil-slider-arrow mil-prev mil-portfolio-prev mil-arrow-place"></div>
                                <div class="mil-slider-arrow mil-portfolio-next mil-arrow-place"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

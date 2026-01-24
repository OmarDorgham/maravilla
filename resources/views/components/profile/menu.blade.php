<div class="mil-menu-frame">
    <!-- frame clone -->
    <div class="mil-frame-top">
        <a href="{{route('home')}}" class="mil-logo">
            <img src="{{ asset('img/logo2.png') }}" class="mil-custom-logo" alt="logo">
        </a>
        <div class="mil-menu-btn">
            <span></span>
        </div>
    </div>
    <!-- frame clone end -->
    <div class="container">
        <div class="mil-menu-content">
            <div class="row">
                <div class="col-xl-5">
                    <nav class="mil-main-menu" id="swupMenu">
                        <ul>
                            <li class="mil-has-children {{request()->routeIs('home')?'mil-active':''}}">
                                {{--                                onclick="location.reload(); return false;"--}}
                                <a href="{{route('home')}}">Homepage</a>
                            </li>
                            <li class="mil-has-children {{request()->routeIs('about')?'mil-active':''}}">
                                <a href="{{route('about')}}">About Us</a>

                            </li>
                            <li class="mil-has-children {{request()->routeIs('projects')?'mil-active':''}}">
                                <a href="{{route('projects')}}">Projects</a>
                            </li>
                            <li class="mil-has-children">
                                <a href="#.">Newsletter</a>
                                <ul>
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="publication.html">Publication</a></li>
                                </ul>
                            </li>
                            <li class="mil-has-children">
                                <a href="#.">Other pages</a>
                                <ul>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-7">

                    <div class="mil-menu-right-frame">
                        <div class="mil-animation-in">
                            <div class="mil-animation-frame">
                                <div class="mil-animation mil-position-1 mil-scale" data-value-1="2"
                                     data-value-2="2"></div>
                            </div>
                        </div>
                        <div class="mil-menu-right">
                            <div class="row">
                                <div class="col-lg-8 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Projects</h6>

                                    <ul class="mil-menu-list">
                                        @foreach($profileProjects as $project)
                                            <li>
                                                <a href="{{route('projects.show',$project)}}" class="mil-light-soft">
                                                    {{$project->title}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Useful links</h6>

                                    <ul class="mil-menu-list">
                                        <li><a href="#." class="mil-light-soft">Privacy Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Terms and conditions</a></li>
                                        <li><a href="#." class="mil-light-soft">Cookie Policy</a></li>
                                        <li><a href="#." class="mil-light-soft">Careers</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="mil-divider mil-mb-60"></div>
                            <div class="row justify-content-between">

                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Canada</h6>

                                    <p class="mil-light-soft mil-up">71 South Los Carneros Road, California <span
                                            class="mil-no-wrap">+51 174 705 812</span></p>

                                </div>
                                <div class="col-lg-4 mil-mb-60">

                                    <h6 class="mil-muted mil-mb-30">Germany</h6>

                                    <p class="mil-light-soft">Leehove 40, 2678 MC De Lier, Netherlands <span
                                            class="mil-no-wrap">+31 174 705 811</span></p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

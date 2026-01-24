@extends('components.profile.app')
@section('content')
    <!-- banner -->
    <div class="mil-inner-banner mil-p-0-120">
        <div class="mil-banner-content mil-center mil-up">
            <div class="container">
                <ul class="mil-breadcrumbs mil-center mil-mb-60">
                    <li><a href="home-1.html">Homepage</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <h1 class="mil-mb-60">Get in touch!</h1>
                <a href="#contact" class="mil-link mil-dark mil-arrow-place mil-down-arrow">
                    <span>Send message</span>
                </a>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- map -->
    <div class="mil-map-frame mil-up">
        <div class="mil-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7219.142070316039!2d55.28097107483806!3d25.217684830871573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4292f6d3f4ab%3A0x67b81a59cfac0a46!2sServcorp%20Emirates%20Towers%20-%20Coworking%2C%20Offices%2C%20Virtual%20Offices%20%26%20Meeting%20Rooms!5e0!3m2!1sen!2seg!4v1769246051467!5m2!1sen!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- map end -->

    <!-- contact form -->
    <section id="contact">
        <div class="container mil-p-120-90">
            <h3 class="mil-center mil-up mil-mb-120">Let's <span class="mil-thin">Talk</span></h3>
            <form class="row align-items-center" method="POST" action="{{route('contactus.store')}}">
                @csrf
                <div class="col-lg-6 mil-up">
                    <input type="text" placeholder="What's your name" required name="name">
                </div>
                <div class="col-lg-6 mil-up">
                    <input type="email" placeholder="Your Email" required name="email">
                </div>
                <div class="col-lg-12 mil-up">
                    <textarea placeholder="Tell us about our project" required name="message"></textarea>
                </div>
                <div class="col-lg-8">
                    <p class="mil-up mil-mb-30"><span class="mil-accent">*</span> We promise not to disclose your
                        personal information to third parties.</p>
                </div>
                <div class="col-lg-4">
                    <div class="mil-adaptive-right mil-up mil-mb-30">
                        <button type="submit" class="mil-button mil-arrow-place">
                            <span>Send message</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- contact form end -->
@endsection

@extends('components.profile.app')
@section('content')
    <!-- banner -->
    <section class="mil-banner mil-dark-bg">
        <video autoplay muted loop>
            <source src="{{asset('attachments/intro.mp4')}}" type="video/mp4">
        </video>
        @include('components.profile.pattern')
        <div class="mi-invert-fix">
            <div class="mil-animation-frame">
                <div class="mil-animation mil-position-1 mil-scale" data-value-1="7" data-value-2="1.6"></div>
                <div class="mil-animation mil-position-2 mil-scale" data-value-1="4" data-value-2="1"></div>
                <div class="mil-animation mil-position-3 mil-scale" data-value-1="1.2" data-value-2=".1"></div>
            </div>

            <div class="mil-gradient"></div>

            <div class="container">
                <div class="mil-banner-content mil-up">

                    <h1 class="mil-muted mil-mb-60">Through Build <span class="mil-thin">Innovation,</span><br>
                        and
                        <span class="mil-thin">Inspiration</span></h1>
                    <div class="row">
                        <div class="col-md-7 col-lg-5">

                            <p class="mil-light-soft mil-mb-60">Welcome to a world of construction excellence.
                                Together, we build with confidence, quality, and turning ideas into
                                landmarks.</p>
                        </div>
                    </div>

                    <a href="{{asset('attachments\brochure.pdf')}}"
                       class="mil-button mil-arrow-place mil-btn-space" download="brochure.pdf" target="_blank">
                        <span>OUR PROFILE</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
@endsection
@section('custom_js')
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const items = document.querySelectorAll('.trapezoid');
            const itemsPerRow = 8;

            let index = 0;
            let direction = "build"; // build | remove

            function animate() {


                    if (index >= items.length) {
                        // عند انتهاء البناء ننتظر قليلاً ثم نبدأ الهدم
                        setTimeout(() => {
                            direction = "remove";
                            index = items.length - 1;
                        }, 800);
                        return;
                    }

                    const rowIndex = Math.floor(index / itemsPerRow);
                    const offset = rowIndex * 70;

                    items[index].style.marginLeft = offset + "px";
                    items[index].classList.add('show');

                    index++;

                setTimeout(animate, 150);
            }

            // يبدأ بعد 5 ثواني
            setTimeout(animate, 5000);
            // items.classList.remove('show');
        });
    </script>

@endsection

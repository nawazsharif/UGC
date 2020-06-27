@extends('layouts.font_layout.main_layout')
@section('content')
    <!-- Home -->

    <div class="home">
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item">
                    <!-- Background image artist https://unsplash.com/@benwhitephotography -->
                    <div class="home_slider_background"
                         style="background-image:url({{asset('images/font_theme/index.jpg')}})"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo"><img src="{{asset('images/font_theme/home_logo.png')}}"
                                                                    alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title">Complete Online Courses</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum.
                                                Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl
                                                fermentum, gravida augue ut, fermentum ipsum.
                                            </div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more
                                                    <div class="button_arrow"><i class="fa fa-angle-right"
                                                                                 aria-hidden="true"></i></div>
                                                </a></div>
                                            <div class="button home_button"><a href="#">see all courses
                                                    <div class="button_arrow"><i class="fa fa-angle-right"
                                                                                 aria-hidden="true"></i></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <!-- Background image artist https://unsplash.com/@benwhitephotography -->
                    <div class="home_slider_background"
                         style="background-image:url({{asset('images/font_theme/index.jpg')}}})"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo"><img src="{{asset('images/font_theme/home_logo.png')}}"
                                                                    alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title">Complete Online Courses</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum.
                                                Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl
                                                fermentum, gravida augue ut, fermentum ipsum.
                                            </div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more
                                                    <div class="button_arrow"><i class="fa fa-angle-right"
                                                                                 aria-hidden="true"></i></div>
                                                </a></div>
                                            <div class="button home_button"><a href="#">see all courses
                                                    <div class="button_arrow"><i class="fa fa-angle-right"
                                                                                 aria-hidden="true"></i></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <!-- Background image artist https://unsplash.com/@benwhitephotography -->
                    <div class="home_slider_background"
                         style="background-image:url({{asset('images/font_theme/index.jpg')}})"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo"><img src="{{asset('images/font_theme/home_logo.png')}}"
                                                                    alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title">Complete Online Courses</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum.
                                                Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl
                                                fermentum, gravida augue ut, fermentum ipsum.
                                            </div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more
                                                    <div class="button_arrow"><i class="fa fa-angle-right"
                                                                                 aria-hidden="true"></i></div>
                                                </a></div>
                                            <div class="button home_button"><a href="#">see all courses
                                                    <div class="button_arrow"><i class="fa fa-angle-right"
                                                                                 aria-hidden="true"></i></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Featured Course -->

    <div class="featured">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Home Slider Nav -->
                    <div class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
                        <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left"
                                                                                   aria-hidden="true"></i></div>
                        <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right"
                                                                                   aria-hidden="true"></i></div>
                    </div>
                    {{--<div class="featured_container">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-lg-6 featured_col">--}}
                    {{--<div class="featured_content">--}}
                    {{--<div class="featured_header d-flex flex-row align-items-center justify-content-start">--}}
                    {{--<div class="featured_tag"><a href="#">Featured</a></div>--}}
                    {{--<div class="featured_price ml-auto">Price: <span>$35</span></div>--}}
                    {{--</div>--}}
                    {{--<div class="featured_title"><h3><a href="courses.html">Online Literature Course</a>--}}
                    {{--</h3></div>--}}
                    {{--<div class="featured_text">Maecenas rutrum viverra sapien sed fermentum. Morbi--}}
                    {{--tempor odio eget lacus tempus pulvinar. Donec vehicula efficitur nibh, in--}}
                    {{--pretium nulla interdum non.--}}
                    {{--</div>--}}
                    {{--<div class="featured_footer d-flex align-items-center justify-content-start">--}}
                    {{--<div class="featured_author_image"><img src="{{asset('images/font_theme/featured_author.jpg')}}"  alt="">--}}
                    {{--</div>--}}
                    {{--<div class="featured_author_name">By <a href="#">James S. Morrison</a></div>--}}
                    {{--<div class="featured_sales ml-auto"><span>352</span> Sales</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-6 featured_col">--}}
                    {{--<!-- Background image artist https://unsplash.com/@jtylernix -->--}}
                    {{--<div class="featured_background"--}}
                    {{--style="background-image:url({{asset('images/font_theme/featured.jpg')}})"></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

    <!-- Courses -->

    <div class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section_title text-center"><h2>Latest Thesis</h2></div>

                </div>
            </div>
            <div class="row">
                <div class="col">

                    <!-- Courses Slider -->
                    <div class="courses_slider_container">
                        <div class="owl-carousel owl-theme courses_slider">
                        @foreach($thesisList as $thesis)
                            <!-- Slider Item -->
                                <div class="owl-item">
                                    @include('layouts.font_layout.thesis')
                                </div>
                            @endforeach


                        </div>

                        <!-- Courses Slider Nav -->
                        <div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left"
                                                                                         aria-hidden="true"></i></div>
                        <div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right"
                                                                                         aria-hidden="true"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Milestones -->

    <div class="milestones">
        <!-- Background image artis https://unsplash.com/@thepootphotographer -->
        <div class="parallax_background parallax-window" data-parallax="scroll"
             data-image-src="{{asset('images/font_theme/milestones.jpg')}}"
             data-speed="0.8"></div>
        <div class="container">
            <div class="row milestones_container">

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/font_theme/milestone_1.svg')}}" alt="">
                        </div>
                        <div class="milestone_counter" data-end-value="1548">0</div>
                        <div class="milestone_text">Online Courses</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/font_theme/milestone_2.svg')}}" alt="">
                        </div>
                        <div class="milestone_counter" data-end-value="7286">0</div>
                        <div class="milestone_text">Students</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/font_theme/milestone_3.svg')}}" alt="">
                        </div>
                        <div class="milestone_counter" data-end-value="257">0</div>
                        <div class="milestone_text">Teachers</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="{{asset('images/font_theme/milestone_4.svg')}}" alt="">
                        </div>
                        <div class="milestone_counter" data-end-value="39">0</div>
                        <div class="milestone_text">Countries</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Sections -->

    <div class="grouped_sections">
        <div class="container">
            <div class="row">

                <!-- Why Choose Us -->

                <div class="col-lg-4 grouped_col">
                    <div class="grouped_title">Why Choose Us?</div>
                    <div class="accordions">

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center active">
                                <div>Mauris vehicula nisi congue?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis
                                        in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Vehicula nisi congue, blandit?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis
                                        in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Mauris vehicula nisi congue?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis
                                        in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion_container">
                            <div class="accordion d-flex flex-row align-items-center">
                                <div>Nisi congue, blandit purus sed?</div>
                            </div>
                            <div class="accordion_panel">
                                <div>
                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis
                                        in. Aenean id varius quam.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Events -->

                <div class="col-lg-4 grouped_col">
                    <div class="grouped_title">Upcoming Events</div>
                    <div class="events">

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">20</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">New Marketing Course Release</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">23</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">Students Art Workshop</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">25</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">Launch Party for a new Platform</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">27</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">New Marketing Course</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class="event d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">29</div>
                                    <div class="event_month">April</div>
                                </div>
                            </div>
                            <div class="event_body">
                                <div class="event_title"><a href="#">New Marketing Course</a></div>
                                <div class="event_subtitle">Location: Online Platform</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- News -->

                <div class="col-lg-4 grouped_col">
                    <div class="grouped_title">Latest News</div>
                    <div class="news">

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{asset('images/font_theme/news_1.jpg')}}"
                                                                  alt="https://unsplash.com/@beccatapert"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Why Choose online education?</a></div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{asset('images/font_theme/news_2.jpg')}}"
                                                                  alt="https://unsplash.com/@nbb_photos"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{asset('images/font_theme/news_3.jpg')}}"
                                                                  alt="https://unsplash.com/@rawpixel"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Why Choose online education?</a></div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="news_post_image"><img src="{{asset('images/font_theme/news_4.jpg')}}"
                                                                  alt="https://unsplash.com/@jtylernix"></div>
                            </div>
                            <div class="news_post_body">
                                <div class="news_post_date">April 02, 2018</div>
                                <div class="news_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video -->

    <div class="video">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="video_container_outer">
                        <div class="video_container">
                            <!-- Video poster image artist: https://unsplash.com/@annademy -->
                            <video id="vid1" class="video-js vjs-default-skin" controls
                                   data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/5_MRXyYjHDk"}], "youtube": { "iv_load_policy": 1 } }'>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Join -->

    <div class="join">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section_title text-center"><h2>Join Our Platform Today</h2></div>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id
                        varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut
                    </div>
                </div>
            </div>
        </div>
        <div class="button join_button"><a href="#">register now
                <div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </a></div>
    </div>

@endsection


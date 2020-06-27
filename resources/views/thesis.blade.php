@extends('layouts.font_layout.main_layout')
@section('content')
    <!-- Home -->

    <div class="home">
        <!-- Background image artist https://unsplash.com/@thepootphotographer -->
        <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="{{asset('images/font_theme/courses.jpg')}}" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Thesis</div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li>Thesis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section_title text-center"><h2>Choose your course</h2></div>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id
                        varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut
                    </div>
                </div>
            </div>

            <!-- Course Search -->
            <div class="row">
                <div class="col">
                    <div class="course_search">
                        <form action="#"
                              class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                            <div><input type="text" class="course_input" placeholder="Course" required="required"></div>
                            <div><input type="text" class="course_input" placeholder="Level" required="required"></div>
                            <button class="course_button"><span>search course</span><span class="button_arrow"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row courses_row">
            @foreach($thesisList as $thesis)
                <!-- Course -->
                    <div class="col-lg-4 col-md-6">
                        @include('layouts.font_layout.thesis')
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col">
                    <div class="courses_paginations">
                        {{ $thesisList->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
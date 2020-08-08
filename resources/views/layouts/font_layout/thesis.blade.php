<div class="course">
    <div class="course_image"><img src="{{asset('images/font_theme/course_1.png')}}" height="200" alt=""></div>
    <div class="course_body">
        <div class="course_header d-flex flex-row align-items-center justify-content-start">
            <div class="course_tag"><a href="#">{{$thesis->catName->cat_name}}</a></div>
            <div class="course_price ml-auto">Dept: <span>{{$thesis->deptName->dept_name}}</span></div>
        </div>
        <div class="course_title"><h3><a href="courses.html">{{$thesis->topic}}</a></h3></div>
        {{--<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi--}}
        {{--tempor odio eget lacus tempus pulvinar.--}}
        {{--</div>--}}
        <div class="course_footer d-flex align-items-center justify-content-start">
            <div class="course_author_image"><img src="{{ URL::to('images/' . $thesis->uniName->logo) }}"
                                                  alt="https://unsplash.com/@anthonytran">
            </div>
            <div class="course_author_name">By <a href="#">{{$thesis->uniName->name}}</a></div>
            <div class="course_sales ml-auto"><span>{{$thesis->download_count}}</span> <a href="{{ url('/download/'.$thesis->file.'/'.$thesis->id)  }}">Download</a></div>
        </div>
    </div>
</div>
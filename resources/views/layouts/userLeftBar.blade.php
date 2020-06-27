<?php
$url=explode("/",$_SERVER['REQUEST_URI']);
isset($url[0])?$url1=$url[0]:$url1='';
isset($url[1])? $url2=$url[1]:$url2='';
isset($url[2])? $url3=$url[2]:$url3="";
isset($url[3])? $url4=$url[3]:$url4="";
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        {{--<div class="sidebar-brand-icon rotate-n-15">--}}
            {{--<i class="fas fa-laugh-wink"></i>--}}
        {{--</div>--}}
        <div class="sidebar-brand-text mx-3 mt-4"><img src="{{ URL::to('images/' . $university->logo) }}" alt="logo" height="80"></div>
    </a>


    <!-- Heading -->
    <div class="sidebar-heading py-3">

    </div>

    {{--<!-- Nav Item - Pages Collapse Menu -->--}}
    {{--<li class="nav-item">--}}
        {{--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">--}}
            {{--<i class="fas fa-fw fa-cog"></i>--}}
            {{--<span>Thesis</span>--}}
        {{--</a>--}}
        {{--<div id="collapseTwo" class="collapse @if($url2=='university') show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
            {{--<div class="bg-white py-2 collapse-inner rounded">--}}
                {{--<h6 class="collapse-header">{{$url2}}</h6>--}}

                {{--<a class="collapse-item @if($url3=='create-university') active @endif" href="{{route('admin.university.create')}}" >Create University</a>--}}
                {{--<a class="collapse-item @if($url3=='university-list') active @endif" href="{{route('admin.university.list')}}">University List</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</li>--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="/home" >
            <i class="fas fa-fw fa-cog"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Thesis</span>
        </a>
            <div id="collapseThree" class="collapse @if($url2=='thesis') show @endif" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{--<h6 class="collapse-header">Custom Components:</h6>--}}
                <a class="collapse-item @if($url3=='thesislist') active @endif" href="{{route('user.thesis.list')}}">Thesis List</a>
                <a class="collapse-item @if($url3=='create-thesis') active @endif" href="{{route('create.thesis.page')}}">Create Thesis</a>
                <a class="collapse-item @if($url3=='department') active @endif" href="{{route('user.university.dept')}}">Create Department</a>
                <a class="collapse-item @if($url3=='department-list') active @endif" href="{{route('user.dept.list')}}">Department List</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
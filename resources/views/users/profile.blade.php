@extends('layouts.userLayout')
<style>
    :root {
        font-size: 14px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .grid-container {
        width: 100%;
    }

    .card {
        border-radius: 1em;
        box-shadow: 0 0 2em rgba(0, 0, 0, 0.125);
        text-align: center;
    }
    .card header {
        position: relative;
        height: 0;
        padding-bottom: 41.84%;
        display: flex;
    }
    .card header .header-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .card header .avatar {
        position: absolute;
        width: 6em;
        height: 6em;
        border-radius: 50%;
        overflow: hidden;
        top: 100%;
        left: 50%;
        transform: translate(-50%, -50%);
        box-shadow: 0 0 2em rgba(0, 0, 0, 0.5);
    }
    .card .card-section {
        padding-top: 4em;
    }
    .card .card-section .username {
        font-family: "Roboto", sans-serif;
    }
    .card footer {
        background: #f6f6f6;
        padding: 1em;
    }
    .card footer ul {
        display: flex;
        margin: 0;
        list-style: none;
        justify-content: center;
    }
    .card footer ul li a {
        color: #444;
        transition: all 0.25s;
        padding: 0.5em;
        font-size: 1.125rem;
    }
    .card footer ul li a:hover, .card footer ul li a:focus {
        color: #0a0a0a;
    }
    </style>
@section('adminMainContent')
    <!-- Main Content -->
    <div id="content">

    @include('layouts/topBar')

    <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="row d-flex justify-content-center">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-9 col-12">
                    <section class="grid-container">
                        <div class="grid-x align-center">
                            <div class="cell card medium-4">
                                <header>
                                    <img src="https://images.unsplash.com/photo-1519750783826-e2420f4d687f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=640&q=80" alt="" class="header-img" />

                                    <div class="avatar">
                                        <img style="height: 85px;" @if(!empty($university->logo))src="{{ URL::to('images/' . $university->logo) }}" @endif alt="" />
                                    </div>
                                </header>

                                <div class="card-section">
                                    <h4 class="username">{{$university->name}}</h4>
                                </div>

                                <footer>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </footer>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
            <!-- End of Main Content -->
@endsection
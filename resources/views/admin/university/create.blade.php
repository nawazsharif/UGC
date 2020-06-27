@extends('layouts.adminLayout')
@section('adminMainContent')
    <!-- Main Content -->
    <div id="content">

    @include('layouts/topBar')

    <!-- Begin Page Content -->
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row d-flex justify-content-center">

                <!-- Area Chart -->
                <div class="col-xl-6 col-lg-7 col-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create University</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">

                                <form
                                        action="{{route('create.university')}}"
                                        method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">University Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>University Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
@endsection
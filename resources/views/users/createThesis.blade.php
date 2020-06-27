@extends('layouts.userLayout')
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
                <div class="col-xl-8 col-lg-9 col-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create University</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">

                            <form action="{{route('create.thesis')}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group">
                                        <label>Toppic</label>
                                        <input type="text" name="toppic" class="form-control" placeholder="toppic name">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select One</option>
                                            @foreach($thesis_categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Faculty/institute/Department</label>
                                        <select name="dept_id" class="form-control">
                                            <option value="">Select One</option>
                                            @foreach($departments as $dept)
                                                <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Publish Date</label>
                                        <input name="publish_date" type="date" class="form-control" placeholder="Publish Date">
                                    </div>
                                    <div class="form-group">
                                        <label>Thesis Paper</label>
                                        <input name="thesis" type="file" class="form-control" accept="application/pdf" placeholder="PDF file">
                                    </div>


                                    <button type="submit" class="btn btn-primary">Save changes</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
@endsection
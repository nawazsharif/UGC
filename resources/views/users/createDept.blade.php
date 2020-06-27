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
                            <h6 class="m-0 font-weight-bold text-primary">Create Department</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">

                            <form action="{{route('create.university.dept')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="form-group">
                                    <label>Department Name</label>
                                    <input type="text" name="dept_name" class="form-control" placeholder="Department Name Like CSE">
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
@endsection
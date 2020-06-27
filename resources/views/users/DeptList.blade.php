@extends('layouts.userLayout')
@section('adminMainContent')
    <!-- Main Content -->
    <div id="content">

    @include('layouts/topBar')

    <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Thesis Table -->
            @if (Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success: </strong> {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        @endif

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">University List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#NO</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $c=1; ?>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$c++}}</td>
                                    <td>{{$department->dept_name}}</td>
                                    <td><a href="{{url('/thesis/department/'.$department->id)}}">Edit</a> <a href="{{url('/thesis/delete-department/'.$department->id)}}">Delete</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.End Thesis Table -->
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
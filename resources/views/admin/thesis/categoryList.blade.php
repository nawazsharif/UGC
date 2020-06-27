@extends('layouts.adminLayout')
@section('adminMainContent')
    <!-- Main Content -->
    <div id="content">

    @include('layouts/topBar')
    <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
        {{--<h1 class="h3 mb-2 text-gray-800">University List</h1>--}}
        {{--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>--}}
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
                    <h6 class="m-0 font-weight-bold text-primary">Thesis Category List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#NO</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{$c=1}}
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$c++}}</td>
                                    <td>{{$category->cat_name}}</td>
                                    {{--<td>{{$category->is_active}}</td>--}}

                                    <td><a href="{{url('/thesis/category-edit/'.$category->id)}}">Edit</a>&nbsp;<a href="{{url('/thesis/category-delete/'.$category->id)}}">Delete</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
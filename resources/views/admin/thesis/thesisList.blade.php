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

        <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Thesis List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Topic</th>
                                <th>Category</th>
                                <th>Department</th>
                                <th>University</th>
                                <th>Publish Date</th>
                                <th>File</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($thesises as $thesis)
                                <tr>
                                    <td>{{$thesis->topic}}</td>
                                    <td>{{$thesis->cat_name}}</td>
                                    <td>{{$thesis->dept_name}}</td>
                                    <td>{{$thesis->name}}</td>
                                    <td>{{$thesis->publish_date}}</td>
                                    <td><a href="{{ url('/download/'.$thesis->file)  }}">{{$thesis->file}}</a></td>
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
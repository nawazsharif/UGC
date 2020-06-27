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
                            <h6 class="m-0 font-weight-bold text-primary">University Profile</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">

                            <form action="{{url('upload/uni-logo')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <input type="text" hidden name="uni_id" value="{{$university->id}}">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" readonly=""  class="form-control" value="{{$university->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" readonly=""  class="form-control" value="{{$university->email}}">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{$university->phone}}" placeholder="University Contact Number">
                                </div>

                                <div class="form-group">
                                    <label>University Logo</label>
                                    <input name="logo" type="file" class="form-control" accept="application/pdf" placeholder="PDF file">
                                </div>

                                @if(!empty($university->logo))
                                    <input name="uni_prev_logo" hidden type="file" class="form-control" value="={{$university->logo}}">
                                <div class="col-12">
                                    <img src="{{ URL::to('images/' . $university->logo) }}" alt="" height="80">
                                </div>

                                @endif
                                <button type="submit" class="btn btn-primary">Save changes</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->
@endsection
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset("css/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action="{{route('signup.university')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>University Email</label>
                                <input id='uni_email' type="email" class="form-control" name="email">
                                <button id='check-btn' type="button" class="mt-2 btn btn-success">Check</button>
                            </div>
                            <input id='uni_id' type="text" hidden class="form-control" name="uni_id">
                            <input id='uni_hidden_email' type="text" name="uni_email" hidden class="form-control">

                            <div id='check-section' class="d-none">
                                <div class="form-group">
                                    <label>University Name</label>
                                    <input id='name' disabled type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>University Contact No</label>
                                    <input id='phone' type="text" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label>University logo</label>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>University Department</label>
                                    <input id='dept_name' type="text" class="form-control" name="dept_name">
                                    <span id="dept_list"></span>
                                    <button class="mt-2 btn btn-success" id="add_dept">add</button>
                                    <ul id="dept_dom">
                                    </ul>
                                </div>
                                {{--<div class="form-group">--}}
                                {{--<label>Established Date</label>--}}
                                {{--<input type="date" class="form-control" name="date">--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <label>password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                        {{--<form class="user">--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6 mb-3 mb-sm-0">--}}
                                    {{--<input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">--}}
                            {{--</div>--}}
                            {{--<div class="form-group row">--}}
                                {{--<div class="col-sm-6 mb-3 mb-sm-0">--}}
                                    {{--<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<a href="login.html" class="btn btn-primary btn-user btn-block">--}}
                                {{--Register Account--}}
                            {{--</a>--}}
                            {{--<hr>--}}
                            {{--<a href="index.html" class="btn btn-google btn-user btn-block">--}}
                                {{--<i class="fab fa-google fa-fw"></i> Register with Google--}}
                            {{--</a>--}}
                            {{--<a href="index.html" class="btn btn-facebook btn-user btn-block">--}}
                                {{--<i class="fab fa-facebook-f fa-fw"></i> Register with Facebook--}}
                            {{--</a>--}}
                        {{--</form>--}}
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <script>
        function deleteService(id) {
            var index = id;
            var dept_id = '#dept_' + id;
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url: "{{ route('dept.remove') }}",
                method: "POST",
                data: {index: index, _token: _token},
                success: function (result) {
                    if (result == 'success') {
                        $(dept_id).remove();
                    } else {

                    }
                }
            })
        }
        $( document ).ready(function() {
            $('#uni_email').blur(function (e) {
                e.preventDefault();
                var error_company_name = '';
                var uni_email = $('#uni_email').val().trim();
                var _token = $('input[name="_token"]').val();
                if (!uni_email) {
                    $('#company_name').addClass('has-error');
                    // $('#register').attr('disabled', 'disabled');
                    $('#register').attr('readonly', true);
                } else {
                    $.ajax({
                        url: "{{route('check')}}",
                        method: "POST",
                        data: {uni_email: uni_email, _token: _token},
                        success: function (result) {

                            if (result['message'] == 'unique') {
                                $('#check-section').addClass('d-none');
                                alert('Please contact with UGC');
                                // $('#error_company_name').removeClass('d-none');
                                // $('#error_company_name').html('Great job Thank you');
                                // $('#company_name').removeClass('has-error');
                                // $('#register').attr('disabled', false);
                                // $('#check-success-div').removeClass('d-none');
                                // $('#check-btn').addClass('d-none');
                                // $('#error_span').html('');
                            } else {

                                $('#check-section').removeClass('d-none');
                                $('#check-btn').addClass('d-none');
                                // console.log(result['university'][0].name);
                                $('#name').val(result['university'].name);
                                $('#uni_id').val(result['university'].id);
                                $("#uni_hidden_email").val(result['university'].email);
                                // $('#error_company_name').removeClass('d-none');
                                // $('#error_company_name').html('company name Already Exist');
                                // $('#company_name').addClass('has-error');
                                // $('#register').attr('disabled', 'disabled');
                                // if($('#check-success-div').hasClass('d-none')){
                                // } else{ $('#check-success-div').addClass('d-none');}
                                // $('#check-btn').hasClass('d-none') && $('#check-btn').removeClass('d-none');
                                // $('#error_span').html('"'+company_name+' is already taken. Please click here(<a href="/business/'+result['slug']+'.html">'+company_name+'</a>) if you want to claim this business." Or you can try "'+company_name+' Dhaka (The area you prefer)"');

                            }
                        }
                    })
                }

            });


            $("#add_dept").click(function (event) {
                event.preventDefault();
                var dept_name = $('#dept_name').val();
                var uni_id = $('#uni_id').val();
                var _token = $('input[name="_token"]').val();
                if (dept_name == null || dept_name == '') {
                    alert('this field required');
                    return false;
                }

                $.ajax({
                    url: "{{ route('university.dept') }}",
                    method: "POST",
                    data: {dept_name: dept_name, uni_id: uni_id, _token: _token},
                    success: function (result) {
                        if(result['message']== 'success'){
                            $('#dept_name').val('');
                            $('#dept_dom').append('<li id="dept_'+result["dept_id"]+'">'+dept_name+'<i onclick="deleteService('+result["dept_id"]+')" class="float-right fa fa-times"></i></li>');
                        } else {
                            alert(result['message']);

                        }
                    }
                })

            });
        });
    </script>



</body>

</html>

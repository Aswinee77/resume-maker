<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8" />
    <title>Resume List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/themea2/assets/images/favicon.ico">

    <!-- preloader css -->
    <link rel="stylesheet" href="{{url('/')}}/themea2/assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{url('/')}}/themea2/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('/')}}/themea2/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('/')}}/themea2/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper" class="m-20px">
            
            <div class="container-fluid" style="padding: 40px;">
                <div class="row">
                    @foreach($datas as $data)
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center " style="border-radius: 27px;
background: #dfe8ec;
box-shadow:  25px 25px 52px #bec5c9,
             -25px -25px 52px #ffffff;">
                            <div class="card-body">
                                @if($data->photo != null)
                                <div class="mx-auto mb-4">
                                    <img src="{{url('/')}}/uploads/{{@$data->photo}}" alt="image" class="rounded-circle" height="150px">
                                </div>
                                @else
                                <div class="mx-auto mb-4">
                                    <img src="{{url('/')}}/uploads/user.jpg" alt="image" class="rounded-circle" height="150px">
                                </div>
                                @endif
                                <h5 class="font-size-16 mb-1"><a href="{{url('/')}}/view/{{Crypt::encrypt($data->user_id)}}" target="_blank">{{$data->name}}</a></h5>
                                <p class="text-muted mb-2">{{$data->current_position}}</p>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    @endforeach
                </div>
                <!-- end row -->                        
            </div> <!-- container-fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="{{url('/')}}/themea2/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/themea2/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/themea2/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{url('/')}}/themea2/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('/')}}/themea2/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{url('/')}}/themea2/assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="{{url('/')}}/themea2/assets/libs/pace-js/pace.min.js"></script>

        <script src="{{url('/')}}/themea2/assets/js/app.js"></script>

    </body>
    </html>

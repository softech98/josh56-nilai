<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>401 Unauthorized Access | Pengolahan-Nilai</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level js -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <!-- end of global js-->
    <!-- page level styles-->
    <link href="{{ asset('assets/css/frontend/500.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .btn-primary {
            color: #fff;
            background-color: #337ab7 !important;
            border-color: #2e6da4 !important;
            font-size:14px !important;
        }
    </style>
    <!-- end of page level styles-->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class=" col-lg-5 col-lg-offset-5 col-md-5 col-md-offset-5 col-sm-6 col-sm-offset-3 col-offset-1 col-10 middle mx-auto">
            <div class="error-container">
                <div class="error-main">
                    <h1> <i class="livicon" data-name="warning" data-s="100" data-c="#ffbc60" data-hc="#ffbc60" data-eventtype="click" data-iteration="15" data-duration="2000"></i>
                        401
                    </h1>
                    <h3>
                        Anda Tidak Memiliki Akses Ke Alamat ini.. !!
                    </h3>
                    <br>
                   <a href="{{ route('home') }}">
            <button type="button" class="btn btn-primary button-alignment">Home</button>
                 </a>
                        
                    <br>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('assets/js/frontend/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/frontend/bootstrap.min.js') }}" type="text/javascript"></script>
    <!--livicons-->
    <script src="{{ asset('assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/js/livicons-1.4.min.js') }}"></script>
    <!-- end of global js -->
    <!-- begining of page level js-->
    <script>
    $("document").ready(function() {
        setTimeout(function() {
            $(".livicon").trigger('click');
        }, 10);
    });
    // code for aligning center
    $(document).ready(function() {
        var x = $(window).height();
        var y = $(".middle").height();
        //alert(x);
        x = x - y;
        x = x / 2;
        $(".middle").css("padding-top", x);
    });
    </script>
    <!-- end of page level js-->
</body>
</html>
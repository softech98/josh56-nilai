@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Dashboard
@parent
@stop

{{-- page level styles --}}
@section('header_styles')


<link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/only_dashboard.css') }}"/>
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/morrisjs/morris.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/css/pages/dashboard2.css') }}"/> --}}
{{-- <style>
   .list_of_items{
        overflow: auto;
        height:20px;
    }
</style> --}}
@stop

{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Dashboard </h1>
    <ol class="breadcrumb">
        <li class=" breadcrumb-item active">
            <a href="#">
                <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Dashboard
            </a>
        </li>
    </ol>
</section>

<!--</section>-->
<section class="content">
   {{--  @if ($analytics_error != 0)
    <div class="alert alert-danger alert-dismissable margin5">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Error:</strong> You Need to add Google Analytics file for full working of the page
    </div>
    @endif --}}
    <div class="col-12">
        <div class="row">
            <div class="col-8">
                <h4>Selamat Datang {{ Sentinel::getUser()->nama }}</h4>
            </div>
            <div class="col-4">
                <h4 style="float: right;"> IP : {{ Request::ip() }} </h4>
            </div>
        </div>
    </div>
     @if(Sentinel::inRole('admin'))
    <div class="row">
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInLeftBig">
            <!-- Trans label pie charts strats here-->
            <div class="lightbluebg no-radius">
                <div class="card-body squarebox square_boxs cardpaddng">
                    <div class="row">
                        <div class="col-12 float-left nopadmar">
                            <div class="row">
                                <div class="square_box col-6 text-right">
                                    <span>Total Guru</span>

                                    <div class="number" id="myTargetElement1"></div>
                                </div>
                                <div class="col-6">
                                    <i class="livicon  float-right" data-name="users" data-l="true" data-c="#fff"
                                    data-hc="#fff" data-s="70"></i>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <small class="stat-label">Orang</small>
                                    <h4 id="myTargetElement1.1"></h4>
                                </div>
                                <div class="col-6 text-right">
                                    <small class="stat-label"></small>
                                    <h4 id="myTargetElement1.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInUpBig">
            <!-- Trans label pie charts strats here-->
            <div class="redbg no-radius">
                <div class="card-body squarebox square_boxs cardpaddng">
                    <div class="row">
                        <div class="col-12 float-left nopadmar">
                            <div class="row">
                                <div class="square_box col-6 float-left">
                                    <span>Total Siswa</span>

                                    <div class="number" id="myTargetElement2"></div>
                                </div>
                                <div class="col-6">
                                    <i class="livicon float-right" data-name="user-flag" data-l="true" data-c="#fff"
                                    data-hc="#fff" data-s="70"></i>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <small class="stat-label">Orang</small>
                                    <h4 id="myTargetElement2.1"></h4>
                                </div>
                                <div class="col-6 text-right">
                                    <small class="stat-label"></small>
                                    <h4 id="myTargetElement2.2"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-3 col-sm-6 col-md-6 margin_10 animated fadeInDownBig">
            <!-- Trans label pie charts strats here-->
            <div class="goldbg no-radius">
                <div class="card-body squarebox square_boxs cardpaddng">
                    <div class="row">
                        <div class="col-12 float-left nopadmar">
                            <div class="row">
                                <div class="square_box col-6 pull-left">
                                    <span>Total Rombel</span>

                                    <div class="number" id="myTargetElement3"></div>
                                </div>
                                <div class="col-6">
                                   <i class="livicon float-right" data-name="sitemap" data-l="true" data-c="#fff"
                                   data-hc="#fff" data-s="70"></i>
                               </div>
                           </div>
                           <div class="row">
                            <div class="col-6">
                                <small class="stat-label">rombel</small>
                                <h4 id="myTargetElement3.1"></h4>
                            </div>
                            <div class="col-6 text-right">
                                <small class="stat-label"></small>
                                <h4 id="myTargetElement3.2"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
        <!-- Trans label pie charts strats here-->
        <div class="palebluecolorbg no-radius">
            <div class="card-body squarebox square_boxs cardpaddng">
                <div class="row">
                    <div class="col-12 float-left nopadmar">
                        <div class="row">
                            <div class="square_box col-6 pull-left">
                                <span>Registered Users</span>

                                <div class="number" id="myTargetElement4"></div>
                            </div>
                            <div class="col-6">
                             <i class="livicon float-right" data-name="users" data-l="true" data-c="#fff"
                             data-hc="#fff" data-s="70"></i>
                         </div>
                     </div>
                     <div class="row">
                        <div class="col-6">
                            <small class="stat-label">Orang</small>
                            <h4 id="myTargetElement4.1"></h4>
                        </div>
                        <div class="col-6 text-right">
                            <small class="stat-label"></small>
                            <h4 id="myTargetElement4.2"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endif
<!--/row-->
</section>
<div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Alert</h4>
                </div>
                <div class="modal-body">
                    <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    @stop

    {{-- page level scripts --}}
    @section('footer_scripts')
    <!-- Back to Top-->
    <script type="text/javascript" src="{{ asset('assets/vendors/countUp.js/js/countUp.js') }}"></script>
    <script src="{{ asset('assets/vendors/morrisjs/morris.min.js') }}"></script>

    <script>
        var useOnComplete = false,
        useEasing = false,
        useGrouping = false,
        options = {
                useEasing: useEasing, // toggle easing
                useGrouping: useGrouping, // 1,000,000 vs 1000000
                separator: ',', // character to use as a separator
                decimal: '.' // character to use as a decimal
            };
            var demo = new CountUp("myTargetElement4", 125, {{ $user_count }}, 0, 6, options);
            demo.start();
            var demo = new CountUp("myTargetElement3", 125, {{ $rombel_count }}, 0, 6, options);
            demo.start();
            var demo = new CountUp("myTargetElement1", 125, {{ $guru_count }}, 0, 6, options);
            demo.start();
            var demo = new CountUp("myTargetElement2", 125, {{ $siswa_count }}, 0, 6, options);
            demo.start();

        </script>

        @stop

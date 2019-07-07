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
                <h4>Selamat Datang {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</h4>
            </div>
            <div class="col-4">
                <h4 style="float: right;"> IP : {{ Request::ip() }} </h4>
            </div>
        </div>
    </div>
     @if(Sentinel::inRole('guru'))
   <h3>Anda Login Sebagai Guru</h3>
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

  

        @stop

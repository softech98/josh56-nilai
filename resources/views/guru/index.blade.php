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

<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
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
                <h4>Selamat Datang {{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }} | Guru</h4>
            </div>
            <div class="col-4">
                <h4 style="float: right;"> IP : {{ Request::ip() }} </h4>
            </div>
        </div>
    </div>
     @if(Sentinel::inRole('guru'))
@endif
<!--/row-->
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-12 paddingtopbottom_5px">
            <div class="card panel-primary ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                   Mata Pelajaran yang diampu
                 </h4>
            </div>
            <br />
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                    @if($mapelguru)
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th>No.</th>
                                <th>Mata Pelajaran</th>
                                <th>Rombel</th>
                                <th>Wali Kelas</th>
                                <th>Jumlah Siswa</th>
                            </tr>
                        </thead>
                        @foreach($getnamamapel as $m)
                        <tbody>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $m->nama}}</td>
                        @endforeach
                        {{-- @foreach($getrombel as $m)
                        <td> {{$m->tingkat}}{{$m->namaRombel}}</td>
        
                        </tbody>
                        @endforeach --}}
                    </table>
                    @else
                    <table class="table table-bordered table-striped table-hover">
                        <tr><td class="text-center">Anda tidak memiliki jadwal mengajar!</td></tr>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>    <!-- row-->
    {{-- @include('admin.guru.modal'); --}}
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

    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
type="text/javascript"></script>
<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>

  

        @stop

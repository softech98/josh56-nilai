@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
Data Periode
@parent
@stop

@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/vendors/Buttons/css/buttons.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/pages/advbuttons.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/all.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/iCheck/css/line/line.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/awesomebootstrapcheckbox/css/awesome-bootstrap-checkbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/awesomebootstrapcheckbox/css/build.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/formelements.css') }}"/>

@stop


{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>Data Periode</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#"> Periode</a></li>
        <li class="active">Daftar Periode</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card panel-primary ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                       Periode
                    </h4>
                    {{-- <div class="pull-right">
                    <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                    </div> --}}
                </div>
                <br />
                <div class="card-body">
                    {{-- @if ($roles->count() >= 1) --}}
                        <div class="table-responsive">

                        <table class="table table-striped" id="table">
                            <thead>
                                <tr class="filters">
                                    <th width="20px">No.</th>
                                    <th>Tahun</th>
                                    <th>Semester</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </div>
                </div>
            </div>
        </div>
        
        @include('admin.periode.create')
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/Buttons/js/scrollto.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/Buttons/js/buttons.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}" ></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/card/js/jquery.card.js') }}"></script>
    <script language="javascript" type="text/javascript" src="{{ asset('assets/js/pages/radio_checkbox.js') }}"></script>

    <script>
    $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            type : "get",
            ajax: '{!! route('admin.periode.index') !!}',
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'mulai' },
            { data: 'semester', name: 'semester' },
            { data: 'aktif', name: 'aktif' },
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            columnDefs: [
                             {
                                 targets: [ 1],
                                 "orderable": false,
                                 render: function ( data, type, row ) {
                                     return data+'/'+row.selesai;
                                 }
                             },
                             {
                                 targets: [ 2],
                                   "orderable": false,
                                 render: function ( data, type, row ) {
                                     if(data ==='1')
                                     {
                                        row.semester = 'Ganjil';
                                     }
                                     else
                                     {
                                        row.semester = 'Genap';
                                     }
                                     return row.semester;
                                 }
                             },
                             {
                                 targets: [ 3],
                                   "orderable": false,
                                 render: function (data, type, row, meta) {
                                    var label = 'label-danger';
                                    if (data==0) {
                                        label = 'label-danger';
                                        row.aktif = 'Non Aktif';
                                    } else {
                                        label = 'label-success';
                                        row.aktif = 'Aktif';
                                    }
                                    return '<span class="label ' + label + '">' + row.aktif + '</span>';
                                }
                             }
                             ],
             responsive: true
        });
        table.on( 'draw', function () {
            $('.livicon').each(function(){
                $(this).updateLivicon();
            });
        } );
    });

</script>
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deleteLabel">Delete Periode</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus Periode ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
<script>
$(function () {
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
});

 var $url_path = '{!! url('/') !!}';
    $('#delete_confirm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var $recipient = button.data('id');
        var modal = $(this)
        modal.find('.modal-footer a').prop("href",$url_path+"/admin/periode/"+$recipient+"/delete");
    })
</script>
@stop

@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Penilaian Pengetahuan
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Penilaian Pengetahuan</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Penilaian</a></li>
        <li class="active">Penilaian Pengetahuan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-12">
            <hr>
            <div class="form-group{{ $errors->has('rombel_id') ? ' has-error' : '' }}">
                {!! Form::label('rombel_id', 'Rombongan Belajar') !!}
                {!! Form::select('rombel_id', $rombel, null, ['id' => 'rombel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Rombel--']) !!}
                <small class="text-danger">{{ $errors->first('rombel_id') }}</small>
            </div>
            <div class="form-group{{ $errors->has('mapel_id') ? ' has-error' : '' }}">
                {!! Form::label('mapel_id', 'Mata Pelajaran') !!}
                {!! Form::select('mapel_id', $mapel, null, ['id' => 'mapel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Mapel--']) !!}
                <small class="text-danger">{{ $errors->first('mapel_id') }}</small>
            </div>

            <div class="card panel-primary ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                     Kompetensi Dasar
                 </h4>
                 <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" id="add" href="javascript:void(0)">
                                        <span class="btn-label pull-left">
                                                <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff"
                                                   data-hc="white"></i>
                                            </span>
                                <span class="label-text align-middle">Tambah Kompetensi</span>
                            </button>
            </div>
            <br />
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                     @if(count($mapelguru->toArray()) > 0 && $mapelguru != null)
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th>No.</th>
                                <th>Kode</th>
                                <th>Mata Pelajaran</th>
                                <th>Tingkat</th>
                                <th width="50%">Kompetensi Dasar</th>
                                <th>Actions</th>
                                <th><a href="javascript:void(0)"><i class="livicon" id="bulk_delete" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete selected guru"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
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
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
type="text/javascript"></script>
<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>

{{-- <script>
    $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            ajax: '{!! route('guru.kompetensi.data') !!}',
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'kode', name: 'kode' },
                { data: 'mapels.nama', name: 'mapel'},
                { data: 'tingkat', name: 'tingkat' },
                { data: 'kompetensi_dasar', name: 'kompetensi_dasar' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
                { data: 'checkbox', name: 'checkbox', orderable: false, searchable: false }
                ]
            });
        table.on( 'draw', function () {
            $('.livicon').each(function(){
                $(this).updateLivicon();
            });
        } );
    });

</script> --}}

 <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Kompetensi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete this Kompetensi? This operation is irreversible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        
    </div>
    <!-- /.modal-dialog -->

    {{-- <script>
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
            modal.find('.modal-footer a').prop("href",$url_path+"/guru/kompetensi/"+ $recipient +"/delete");
        })
    </script>

    <script type="text/javascript">
        $('#add').click(function(){
            $('#myModal').modal('show');
            $('.modal-title').html("Tambah Data Kompetensi");
            $('.modal-body').load('{!! route("guru.kompetensi.create") !!}')
        });
    </script> --}}
   
    @stop

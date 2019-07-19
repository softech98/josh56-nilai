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
    {{-- {{ Form::model($pengetahuan, array('action' => $action, 'files' => true, 'method' => $method, 'id'=>'form-validation3','role'=>'form')) }} --}}
    <div class="row">
        <div class="col-12">
            <hr>
            <div class="col-lg-8">

                <div class="form-group{{ $errors->has('periode_id') ? ' has-error' : '' }}">
                    <div class="row">
                        {!! Form::label('periode_id', 'Periode',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('periode_id', $periode, ['id' => 'periode_id', 'class' => 'form-control', 'required' => 'required', 'disabled']) !!}
                            <small class="text-danger">{{ $errors->first('periode_id') }}</small>
                        </div>
                    </div>
                </div>  
                <div class="form-group{{ $errors->has('rombel_id') ? ' has-error' : '' }}">
                    <div class="row">
                        {!! Form::label('rombel_id', 'Rombongan Belajar',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('rombel_id', $rombel, null, ['id' => 'rombel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Rombel--']) !!}
                            <small class="text-danger">{{ $errors->first('rombel_id') }}</small>
                        </div>
                    </div>
                </div>  
                <div class="form-group{{ $errors->has('mapel_id') ? ' has-error' : '' }}">
                    <div class="row">
                        {!! Form::label('mapel_id', 'Mata Pelajaran',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('mapel_id', $mapel, null, ['id' => 'mapel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Mapel--']) !!}
                            <small class="text-danger">{{ $errors->first('mapel_id') }}</small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('jumlah_penilaian', 'Jumlah Penilaian',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('jumlah_penilaian', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'12',], null, ['id' => 'jml_nilai', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Jumlah Penilaian atau KD--']) !!}
                            <small class="text-danger">{{ $errors->first('jumlah_penilaian') }}</small>
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                        <div class="row">
                        <div class="col-md-6 col-sm-8 ">
                            <button type="reset" class="btn btn-danger btn-responsive ">Reset</button>
                            <button type="submit" class="btn btn-success btn-responsive ">
                                {{-- {{ $btn_submit }} --}}Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   {{-- {!! Form::close() !!} --}}
    </div>

            <div class="card panel-primary ">
                <div class="card-heading clearfix">
               </div>
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                     {{-- @if(count($mapelguru->toArray()) > 0 && $mapelguru != null) --}}
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th rowspan="2" style="vertical-align: middle;">Nama Siswa</th>
                                <th colspan="6" class="text-center">Kompetensi Dasar</th>
                                <th rowspan="2" style="vertical-align: middle;">NTS</th>
                                <th rowspan="2" style="vertical-align: middle;">NAS</th>
                                <th rowspan="2" style="vertical-align: middle;">Rata-Rata Nilai</th>
                            </tr>
                            <tr>
                                <th>3.1</th>
                                <th>3.2</th>
                                <th>3.3</th>
                                <th>3.4</th>
                                <th>3.5</th>
                                <th>3.6</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                   {{--  @else
                    <table class="table table-bordered table-striped table-hover">
                        <tr><td class="text-center">Anda tidak memiliki jadwal mengajar!</td></tr>
                    </table>
                    @endif --}}
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

<script>
    $('#rombel_id').on('change', function(e){
        console.log(e);
        var rombel_id = e.target.val

        $.get('/getmapel?rombel_id=' + rombel_id, function(data){
            //success data
            console.log(data);
        })
    });
</script>

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

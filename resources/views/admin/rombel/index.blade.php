@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
Data Rombel
@parent
@stop

@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop


{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>Daftar Rombel</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#"> Rombel</a></li>
        <li class="active">Daftar Rombel</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card panel-danger ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="home" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                       Rombel
                    </h4>
                    <a class="btn-xs btn-success pull-right" data-toggle="modal" id="add" href="javascript:void(0)">Tambah Rombel</a>
                    <a class="btn-xs btn-primary pull-right" id="reload" href="javascript:void(0)">Refresh</a>
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
                                    <th width="20px">Id</th>
                                    <th>Rombel</th>
                                    <th>Tingkat</th>
                                    <th>Jurusan</th>
                                    <th>Wali Kelas</th>
                                    <th>Periode</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                               {{--  @foreach ($kelas as $kelas)
                                <tr>
                                    <td>{{$kelas->id}}</td>
                                    <td>{{$kelas->nama}}</td>
                                    <td><button>Edit</button><button>Delete</button>  </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                        </div>
                   {{--  @else
                        @lang('general.noresults')
                    @endif    --}}
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script>
    $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            type : "get",
            ajax: '{!! route('admin.rombel.data') !!}',
            columns: [
            { data: 'id', name: 'is_rombel.id' },
            { data: 'namaRombel', name: 'is_rombel.namaRombel' },
            { data: 'tingkat', name: 'is_rombel.tingkat' },
            { data: 'singkatan', name: 'is_jurusan.singkatan' },
            { data: 'nama', name: 'is_guru.nama' },
            { data: 'periode', name: 'periode'},
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            columnDefs: [
                             {
                                 targets: [ 5 ],
                                 "orderable": false,
                                 render: function ( data, type, row ) {
                                     return data+'/'+row.selesai;
                                 }
                             },
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
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" title="delete" aria-labelledby="kelas_delete_confirm_title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
  </div>
</div>
<script>
$(function () {
    $('body').on('hidden.bs.modal', '.modal', function () {
        $(this).removeData('bs.modal');
    });
});
</script>
<script type="text/javascript">
    $(document).on('click', '.edit{{$rombel->id}}', function(){
        var nip = $(this).data('id');
    $.get("{{ route('admin.rombel.index') }}" +'/' + nip +'/edit', function (data) {
          $('#myModal').modal('show');
          $('.modal-title').html("Edit Data Rombel");
          $('.modal-body').html(data);
          
      })
    });
    </script>

<script type="text/javascript">
    $('#add').click(function(){
    $('#myModal').modal('show');
     $('.modal-title').html("Tambah Data Rombel");
        $('.modal-body').load('{!! route("admin.rombel.create") !!}')
    });
</script>
{{-- <script type="text/javascript">
    $(document).on('click', '.edit{{$rombel->id}}', function(){
        var id = $(this).data('id');
    $.get("{{ route('rombel.index') }}" +'/' + id +'/edit', function (data) {
          $('#myModal').modal('show');
          $('.modal-body').html(data);
          
      })
    });
</script> --}}
<script>
    $(document).ready(function() {

        table = $("#table").DataTable();
        $("#reload").on("click", function () { 
         table.ajax.reload(null, false); 
        });

   });
</script>
<script>
         $("#walikelas").select2({
            placeholder: "--Pilih Walikelas--",
            theme:"bootstrap"
        });
    </script>
@stop

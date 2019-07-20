@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
Data Rombel
@parent
@stop

@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-slider/css/bootstrap-slider.min.css') }}" />

<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
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
            <div class="card panel-primary ">
                <div class="card-heading clearfix icon-buttons">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="home" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                       Rombel
                    </h4>
                    <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" id="add" href="javascript:void(0)">
                                        <span class="btn-label pull-left">
                                                <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff"
                                                   data-hc="white"></i>
                                            </span>
                                <span class="label-text align-middle">Tambah Rombel</span>
                            </button>
                   
                </div>
                 <div class="row">
                            <div class="col-md-4 my-2 ml-4">
                                {{-- <label class="control-label">Filter Jurusan :</label> --}}
                                {!! Form::select('jurusan', $jurusan , null,['class' => 'form-control', 'id' => 'jurusan', 'placeholder' => '--Filter Jurusan--']) !!}
                            </div>
                            <div class="col-md-4 my-2 ml-4">
                                {{-- <label class="control-label">Filter Jurusan :</label> --}}
                                {!! Form::select('tingkat', $tingkat , null,['class' => 'form-control', 'id' => 'tingkat', 'placeholder' => '--Filter Tingkat--']) !!}
                            </div>
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
                                    {{-- <th>Jurusan</th> --}}
                                    <th>Wali Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    {{-- <th>Periode</th> --}}
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {{-- item --}}
                            </tbody>
                        </table>
                        </div>
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/jeditable/js/jquery.jeditable.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.buttons.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.colReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.responsive.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.rowReorder.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.colVis.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.html5.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.bootstrap4.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/buttons.print.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/pdfmake.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/vfs_fonts.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.scroller.js') }}" ></script>
    <script>
    $(function() {
        var jurusanSelect, tingkatSelect;
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url: '{{route('admin.rombel.data')}}',
            data: function (d) {
                d.jurusanSelect = jurusanSelect;
                d.tingkatSelect = tingkatSelect;
            }
        },
            columns: [
            { data: 'id',},
            { data: 'namaRombel'},
            { data: 'tingkat', searchable: false },
            { data: 'guru.nama', name: 'walikelas', searchable: false, orderable: false },
            { data: 'mapels', name: 'mapels', searchable: false, orderable: false },
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            // columnDefs: [
            //                  {
            //                      targets: [ 5 ],
            //                      "orderable": false,
            //                      render: function ( data, type, row ) {
            //                          return data+'/'+row.periode.selesai;
            //                      }
            //                  },
            //                  ],
             responsive: true
        });
        table.on( 'draw', function () {
            $('.livicon').each(function(){
                $(this).updateLivicon();
            });
        } );

         $('#jurusan').click(function () {
                jurusanSelect = $(this).val();
                table.draw();

            });
         $('#tingkat').click(function () {
                tingkatSelect = $(this).val();
                table.draw();

            });
    });

</script>
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Rombel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin akan menghapus rombongan belajar ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        
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
            modal.find('.modal-footer a').prop("href",$url_path+"/admin/rombel/"+ $recipient +"/delete");
        })
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
<script type="text/javascript">
    $(document).on('click', '.mapel{{$rombel->id}}', function(){
        var nip = $(this).data('id');
    $.get("{{ route('admin.rombel.index') }}" +'/' + nip +'/mapel', function (data) {
          $('#myModal').modal('show');
          $('.modal-title').html('Konfigurasi Guru Mata Pelajaran');
          $('.modal-body').html(data);
          
      })
    });
    </script>
<script>
    $(document).ready(function() {

        table = $("#table").DataTable();
        $("#reload").on("click", function () { 
         table.ajax.reload(null, false); 
        });

   });
</script>
{{-- <script>
         $("#walikelas").select2({
            placeholder: "--Pilih Walikelas--",
            theme:"bootstrap"
        });
    </script>
      <script>
         $("#mapel_guru").select2({
            placeholder: "--Pilih Guru Mapel--",
            theme:"bootstrap"
        });
    </script> --}}
@stop

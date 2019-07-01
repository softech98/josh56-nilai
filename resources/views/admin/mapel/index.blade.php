@extends('admin.layouts/default')

{{-- Web site Title --}}
@section('title')
Data Mata Pelajaran
@parent
@stop

@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/colReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/scroller.bootstrap4.css') }}">
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop


{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>Daftar Mata Pelajaran</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#"> Mata Pelajaran</a></li>
        <li class="active">Daftar Mata Pelajaran</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card panel-primary ">
                <div class="card-heading clearfix icon-buttons">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="home" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                       Mata Pelajaran
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
                                {!! Form::select('jurusan', $jurusan , null,['class' => 'form-control', 'id' => 'jurusan', 'placeholder' => '--Filter Jurusan--']) !!}
                            </div>
                            
                            </div>
                <br />
                <div class="card-body">
                    {{-- @if ($roles->count() >= 1) --}}
                        <div class="table-responsive">

                        <table class="table table-striped" id="table">
                            <thead>
                                <tr class="filters">
                                    <th width="20px">No.</th>
                                    <th>Jurusan</th>
                                    <th>Nama Mapel</th>
                                    <th>X</th>
                                    <th>XI</th>
                                    <th>XII</th>
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
                       
                   {{--  @else
                        @lang('general.noresults')
                    @endif    --}}
                </div>
            </div>
        </div>
        {{-- @include('mapel.create') --}}
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
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
        var jurusanSelect;
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
            url: '{{route('admin.mapel.data')}}',
            data: function (d) {
                d.jurusanSelect = jurusanSelect;
            }
        },
            columnDefs: [
            {
                targets: [3,4,5],
                render: function (data, type, row, meta) {
                        var label = 'label-danger';
                        if (data=='Non aktif') {
                            label = 'label-danger';
                        } else if (data=='Aktif') {
                            label = 'label-success';
                        }
                        return '<span class="label ' + label + '">' + data + '</span>';
                    }
                    // return data;
                }

            ],
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false, searchable: false},
            { data: 'jurusan.nama', name: 'jurusan_id' },
            { data: 'nama', name: 'nama' },
            { data: 'k1'},
            { data: 'k2'},
            { data: 'k3'},
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            
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
    $(document).on('click', '.edit{{$mapel->id}}', function(){
        var nip = $(this).data('id');
    $.get("{{ route('admin.mapel.index') }}" +'/' + nip +'/edit', function (data) {
          $('#myModalsm').modal('show');
          $('.modal-title').html("Edit Data Mata Pelajaran");
          $('.modal-body').html(data);
          
      })
    });
    </script>
<script type="text/javascript">
    $('#add').click(function(){
    $('#myModalsm').modal('show');
     $('.modal-title').html("Tambah Data Mata Pelajaran");
        $('.modal-body').load('{!! route("admin.mapel.create") !!}')
    });
</script>
@stop

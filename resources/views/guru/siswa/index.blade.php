@extends('admin/layouts/default')

{{-- Web site Title --}}
@section('title')
Data Siswa
@parent
@stop

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
<link href="{{ asset('assets/css/pages/formelements.css') }}" rel="stylesheet" />
@stop


{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>Daftar Siswa</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#"> Siswa</a></li>
        <li class="active">Daftar Siswa</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-md-12">
            <div class="card panel-primary ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="flag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                     Siswa
                 </h4>
            </div>
            <div class="row">
                            <div class="col-md-4 my-2 ml-4">
                                {!! Form::select('jurusan', $jurusan , null,['class' => 'form-control', 'id' => 'jurusan', 'placeholder' => '--Filter Rombel--']) !!}
                            </div>
                            
                            </div>
            <br />
            <div class="card-body">

                {{-- @if ($roles->count() >= 1) --}}
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">

                    <table class="table table-striped" id="table">
                        <thead>
                            <tr class="filters">
                                <th width="20px">No.</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Rombel</th>
                                <th>Jenis Kelamin</th>
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
        </div>    <!-- row-->
    </section>
    @stop

    {{-- Body Bottom confirm modal --}}
    @section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
    type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/formelements.js') }}"  type="text/javascript"></script>

    <script>
        $(function() {
            var jurusanSelect;
            var table = $('#table').DataTable({

                processing: true,
                serverSide: true,
                order: [ [3, 'asc'] ],
                type : "get",
                ajax: {
                url: '{{route('guru.siswa.index')}}',
                data: function (d) {
                d.jurusanSelect = jurusanSelect;
            }
        },
                columns: [
                {data: 'DT_RowIndex', name: 'is_siswa.DT_RowIndex',orderable: false, searchable: false },
                { data: 'nis', name: 'nis' },
                { data: 'nama', name: 'nama' },
                { data: 'rombel', name: 'rombel' },
                { data: 'jenis_kelamin', name: 'jenis_kelamin' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false },
                ],
                responsive: true,
                
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
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Siswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                   Apakah anda yakin akan menghapus Siswa ini?
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

    </script>
   
    
    @stop

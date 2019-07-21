@extends('admin.layouts/default')

{{-- Web site Title --}}
@section('title')
Data Jurusan
@parent
@stop

@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/vendors/Buttons/css/buttons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/advbuttons.css') }}" />

@stop


{{-- Content --}}
@section('content')
<section class="content-header">
    <h1>Daftar Jurusan</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#"> Jurusan</a></li>
        <li class="active">Daftar Jurusan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card panel-primary ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="home" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                     Jurusan
                 </h4>
            </div>
            <br />
            <div class="card-body">
                {{-- @if ($roles->count() >= 1) --}}
                <div class="table-responsive">

                    <table class="table table-striped" id="table">
                        <thead>
                            <tr class="filters">
                                <th width="20px">No</th>
                                <th>Nama Jurusan</th>
                                <th>Singkatan</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                   {{--  @else
                        @lang('general.noresults')
                        @endif    --}}
                    </div>


                   
                </div>
             </div>
         @include('admin.jurusan.create')
         </div>
    

</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/Buttons/js/scrollto.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/Buttons/js/buttons.js') }}" ></script>
    
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="deleteLabel">Delete Jurusan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin ingin menghapus data ini?
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
<script>
    $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            type : "get",
            ajax: '{!! route('admin.jurusan.data') !!}',
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'nama', name: 'nama' },
            { data: 'singkatan', name: 'singkatan' },
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
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
    modal.find('.modal-footer a').prop("href",$url_path+"/admin/jurusan/"+$recipient+"/delete");
})

</script>
@stop

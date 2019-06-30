@extends('layouts/default')

{{-- Web site Title --}}
@section('title')
Data Mata Pelajaran
@parent
@stop

@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
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
        <div class="col-md-6">
            <div class="panel panel-primary ">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left"> <i class="livicon" data-name="home" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                       Mata Pelajaran
                    </h4>
                    {{-- <div class="pull-right">
                    <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                    </div> --}}
                </div>
                <br />
                <div class="panel-body">
                    {{-- @if ($roles->count() >= 1) --}}
                        <div class="table-responsive">

                        <table class="table table-striped" id="table">
                            <thead>
                                <tr class="filters">
                                    <th width="20px">No.</th>
                                    <th>Nama Mapel</th>
                                    <th>Kategori</th>
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
        @include('mapel.create')
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>

    <script>
    $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            type : "get",
            ajax: '{!! route('admin.mapel.data') !!}',
            columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'nama', name: 'nama' },
            { data: 'kategori', name: 'kategori' },
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
@stop

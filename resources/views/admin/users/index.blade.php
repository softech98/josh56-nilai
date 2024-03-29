@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Users List
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
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Users</a></li>
        <li class="active">Users List</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-12">
            <div class="card panel-primary ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                     Users List
                 </h4>
                  <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" id="add" href="javascript:void(0)">
                                        <span class="btn-label pull-left">
                                                <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff"
                                                   data-hc="white"></i>
                                            </span>
                                <span class="label-text align-middle">Tambah User</span>
                            </button>
            </div>
            <br>
                <div class="card-body">
                    <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                        <table class="table table-bordered width100" id="table">
                            <thead>
                                <tr class="filters">
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>E-mail</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/adduser.js') }}"></script>

<script>
    $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.users.data') !!}',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'nama', name: 'nama' },
            { data: 'email', name: 'email' },
            { data: 'status', name: 'status'},
            { data: 'created_at', name:'created_at'},
            { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ], 
            columnDefs: [
            {
                targets: 3,
                render: function (data, type, row, meta) {
                        var label = 'label-danger';
                        if (data=='Pending') {
                            label = 'label-danger';
                        } else if (data=='Activated') {
                            label = 'label-success';
                        }
                        return '<span class="label ' + label + '">' + data + '</span>';
                    }
                    // return data;
                }

            ]
        });
        table.on( 'draw', function () {
            $('.livicon').each(function(){
                $(this).updateLivicon();
            });
        } );
    });

</script>

{{-- <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deleteLabel">Delete User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                Are you sure to delete this User? This operation is irreversible.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>

</div> --}}
<!-- /.modal-dialog -->
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
        modal.find('.modal-footer a').prop("href",$url_path+"/admin/users/"+$recipient+"/delete");
    })
</script>
<script type="text/javascript">
        $('#add').click(function(){
            $('#myModal').modal('show');
            $('.modal-title').html("Tambah User");
            $('.modal-body').load('{!! route("admin.users.create") !!}')
        });

        /*=====  End of add users  ======*/
        
         $(document).on('click', '.remove{{$users->id}}', function(){
            var nip = $(this).data('id');
            $.get("{{ route('admin.users.index') }}" +'/' + nip +'/confirm-delete', function (data) {
              $('#myModalsm').modal('show');
              $('.modal-title').html("Hapus Users");
              $('.modal-body').html(data);  

          })
        }); 
    </script>
 
@stop

@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Daftar Guru
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/pages/formelements.css') }}" rel="stylesheet" />
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Guru</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Guru</a></li>
        <li class="active">Daftar Guru</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="col-12">
            <div class="card panel-primary ">
                <div class="card-heading clearfix">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                     Guru
                 </h4>
                 <button type="button" class="btn btn-labeled btn-primary pull-right" data-toggle="modal" id="" data-target="#modalGuru" href="javascript:void(0)">
                                        <span class="btn-label pull-left">
                                                <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff"
                                                   data-hc="white"></i>
                                            </span>
                                <span class="label-text align-middle">Tambah Guru</span>
                            </button>
            </div>
            <br />
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th>No.</th>
                                <th>Foto</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>L/P</th>
                                <th>No HP/Telp</th>
                                <th>Created</th>
                                <th>Actions</th>
                                <th><a href="javascript:void(0)"><i class="livicon" id="bulk_delete" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete selected guru"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
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
<script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
    type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>
<!-- InputMask -->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <!-- date-range-picker -->
    <script src="{{ asset('assets/js/pages/autogrow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/formelements.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/card/js/jquery.card.js') }}"  type="text/javascript"></script>

<script>
    $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            deferRender: true,
            // order: [['6', 'DESC']],
            ajax: '{!! route('admin.guru.data') !!}',
            columns: [
            { data: 'DT_RowIndex', name:'DT_RowIndex', orderable: false, searchable: false},
            { data: 'foto', name: 'foto',
            render: function( data, type, row ) {
                if(data)
                    return "<img src=\"{{ asset('uploads/image')}}/" + data + "\" height=\"100\" width=\"100\"/>";
                else if(row.jenis_kelamin === 'L')
                    return "<img src=\"{{ asset('assets/images/authors/avatar3.png') }}" + "\" height=\"100\" width=\"100\"/>";
                else
                    return "<img src=\"{{ asset('assets/images/authors/avatar5.png') }}" + "\" height=\"100\" width=\"100\"/>";
                // return "<img src=\"/assets/images/authors/no_avatar.jpg" + "\" height=\"100\"/>";
                
            }
        },
        { data: 'nip', name: 'nip' },
        { data: 'nama', name: 'nama' },
        { data: 'jenis_kelamin', name: 'jenis_kelamin' },
        { data: 'hp', name: 'hp' },
        { data: 'created_at', name: 'created_at' },
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

</script>

     <div class="modal fade in" id="modalGuru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">

                        <h4 class="modal-title" id="myModalLabel">Tambah Data Guru</h4>
                        <button type="button" class="close resetModal" data-dismiss="modal"
                                aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body">
                    @include('admin.guru.create');
                    </div>
                </div>
            </div>
        </div>
    <!-- /.modal-dialog -->

    <script>
        $(function () {
            var originalModal = $('#modalGuru').clone();
          $(".modal").on("hidden.bs.modal", function() {
            $('#modalGuru').remove();
            var myClone = originalModal.clone();
            $('body').append(myClone);

  });

           $('input#nip')
            .maxlength({
                alwaysShow: true,
                placement: 'top',
                warningClass: "label label-danger",
            limitReachedClass: "label label-success"
            });
            $('input#hp')
            .maxlength({
                alwaysShow: true,
                placement: 'bottom',
                warningClass: "label label-success",
            limitReachedClass: "label label-success"
            });
           
       });

        var $url_path = '{!! url('/') !!}';
        $('#delete_confirm').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var $recipient = button.data('id');
            var modal = $(this)
            modal.find('.modal-footer a').prop("href",$url_path+"/admin/guru/"+ $recipient +"/delete");
        })
    </script>

    <script type="text/javascript">
        $('#add').click(function(){
            $('#myModal').modal('show');
            $('.modal-title').html("Tambah Data Guru");
            $('.modal-body').load('{!! route("admin.guru.create") !!}')
        });
    </script>
    <script type="text/javascript">
        $(document).on('click', '.edit{{$guru->id}}', function(){
            var nip = $(this).data('id');
            $.get("{{ route('admin.guru.index') }}" +'/' + nip +'/edit', function (data) {
              $('#myModal').modal('show');
              $('.modal-title').html("Edit Data Guru");
              $('.modal-body').html(data);  

          })
        });

        $(document).on('click', '.remove{{$guru->id}}', function(){
            var nip = $(this).data('id');
            $.get("{{ route('admin.guru.index') }}" +'/' + nip +'/confirm-delete', function (data) {
              $('#myModalsm').modal('show');
              $('.modal-title').html("Hapus Guru");
              $('.modal-body').html(data);  

          })
        }); 

        $(document).on('click', '#bulk_delete', function(){
        var id = [];
        
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $('.guru_checkbox:checked').each(function(){
                    id.push($(this).val());
            });

            if(id.length > 0)
            {
                var msg = $('#msg');
                $.ajax({
                    url:"{{ route('admin.guru.massremove')}}",
                    data:{id:id},
                    success:function(data)
                    {
                        alert('Data terhapus');
                        $('#table').DataTable().ajax.reload();
                        
                        // msg.css('display', 'block');
                        // $('#msgMuncul').text('Data Berhasil Terhapus');
                        // msg.fadeOut(5000);
                        // $('#msgMuncul').text('');
                    }
                });
            }
            else
            {
                alert("Please select atleast one checkbox");
            }
        }
    });

    </script>
    @stop

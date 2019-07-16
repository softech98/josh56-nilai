@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
View Siswa Details
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<meta name="csrf_token" content="{{ csrf_token() }}">
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet"/>

<link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet"/>
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <!--section starts-->
    <h1>Siswa Profile</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="dashboard" data-size="14" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">Siswa</a>
        </li>
        <li class="active">Siswa Profile</li>
    </ol>
</section>
<!--section ends-->
<section class="content user_profile">
    <div class="row">
        <div class="col-lg-12">
            {{-- <ul class="nav nav-tabs first_svg">
                <li class="nav-item">
                    <a href="#tab1" data-toggle="tab" class="nav-link active show">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#777" data-hc="#000"></i>
                    Siswa Profile</a>
                </li>
                
            </ul> --}}
            <div  class="tab-content mar-top" id="clothing-nav-content">
                <div id="tab1" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                @if($siswa->foto)
                                                <img src="{!! url('/').'/uploads/image/'.$siswa->foto !!}" alt="img"
                                                class="img-fluid"/>
                                                @elseif($siswa->jenis_kelamin === "L")
                                                <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."
                                                class="img-fluid"/>
                                                @elseif($siswa->jenis_kelamin === "P")
                                                <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="..."
                                                class="img-fluid"/>
                                                @else
                                                <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                class="img-fluid"/>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="table-responsive-lg table-responsive-sm table-responsive-md table-responsive">
                                                <table class="table table-bordered table-striped" id="siswa">

                    <tr>
                        <td>Nama</td>
                        <td>
                            <p class="user_name_max">{{ $siswa->nama }}</p>
                        </td>

                    </tr>
                    <tr>
                        <td>NIS</td>
                        <td>
                            {{ $siswa->nis }}
                        </td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>
                            {{ $siswa->nisn }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                         Rombel
                     </td>
                     <td>
                        {{ $siswa->rombel->tingkat }}
                        {{ $siswa->rombel->namaRombel }}
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        @if($siswa->jenis_kelamin == 'L')
                        Laki-laki
                        @else 
                        Perempuan
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>
                        {{ $siswa->tempat_lahir }}
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>
                     {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y')}}
                 </td>
             </tr>
             <tr>
                <td>Alamat</td>
                <td>
                    {{ $siswa->alamat }}
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    {{ $siswa->agama }}
                </td>
            </tr>

            <tr>
                <td>Created At</td>
                <td>
                    {!! $siswa->created_at->diffForHumans() !!}
                </td>
            </tr>
        </table>
                                </div>
                                <a href="{{ route('guru.siswa.index') }}" class='btn btn-success'>Back to List</a>
                                {{-- <a href="javascript:void(0)" id="edit{{$siswa->nis}}" class='btn btn-warning'>Edit</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!-- Bootstrap WYSIHTML5 -->
<script  src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
<script type="text/javascript">
   $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            e.target // newly activated tab
            e.relatedTarget // previous active tab
            $("#clothing-nav-content .tab-pane").removeClass("show active");
        });
    </script>
    <script type="text/javascript">
     $('#edit{{$siswa->nis}}').click(function(){
    
          $('#myModal').modal('show');
          $('.modal-body').load('{!! url("admin/siswa/$siswa->nis/edit") !!}');
          
      // })
    });
    </script>
    {{-- <script type="text/javascript">
        $(document).ready(function () {
            $('#change-password').click(function (e) {
                e.preventDefault();
                var check = false;
                var sendData = '_token=' + $("input[name='_token']").val() + '&password=' + $('#password').val() + '&password-confirm=' + $('#password-confirm').val();
                if ($('#password').val() ===""){
                    alert('Please Enter password');
                }
                else if  ($('#password').val() !== $('#password-confirm').val()) {
                    alert("confirm password should match with password");
                }
                else if  ($('#password').val() === $('#password-confirm').val()) {
                    check = true;
                }

                if (check) {
                    $.ajax({
                        url: '{{ route('passwordreset', $guru->id) }}',
                        type: "post",
                        data: sendData,
                        success: function (data) {
                            alert('password reset successful');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('error in password reset');
                        }
                    });
                }
                $('.password_change')[0].reset();
            });
        });
    </script> --}}

    @stop

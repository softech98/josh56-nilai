@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
View Guru Details
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<meta name="csrf_token" content="{{ csrf_token() }}">
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet"/>

<link href="{{ asset('assets/css/pages/guru_profile.css') }}" rel="stylesheet"/>
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <!--section starts-->
    <h1>Guru Profile</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="dashboard" data-size="14" data-loop="true"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#">Guru</a>
        </li>
        <li class="active">Guru Profile</li>
    </ol>
</section>
<!--section ends-->
<section class="content user_profile">
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs first_svg">
                <li class="nav-item">
                    <a href="#tab1" data-toggle="tab" class="nav-link active show">
                        <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#777" data-hc="#000"></i>
                    Guru Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#tab2" data-toggle="tab" class="nav-link">
                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                    Change Password</a>
                </li>
            </ul>
            <div  class="tab-content mar-top" id="clothing-nav-content">
                <div id="tab1" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-heading">
                                    <h3 class="card-title">

                                        User Profile
                                    </h3>

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-file">
                                                @if($guru->foto)
                                                <img src="{!! url('/').'/uploads/gurus/'.$guru->foto !!}" alt="img"
                                                class="img-fluid"/>
                                                @elseif($guru->jenis_kelamin === "L")
                                                <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."
                                                class="img-fluid"/>
                                                @elseif($guru->jenis_kelamin === "P")
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
                                                <table class="table table-bordered table-striped" id="gurus">

                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>
                                                            <p class="guru_name_max">{{ $guru->nama }}</p>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>NIP</td>
                                                        <td>
                                                            {{ $guru->nip }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-Mail</td>
                                                        <td>
                                                            {{ $guru->email }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                       <td>Jenis Kelamin</td>
                                                       <td>
                                                        @if($guru->jenis_kelamin == 'L')
                                                        Laki-laki
                                                        @else 
                                                        Perempuan
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                 <td>Tanggal Lahir</td>
                                                 <td>
                                                    {{ $guru->tanggal_lahir }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>
                                                    {{ $guru->alamat }}
                                                </td>
                                            </tr>
                                            <tr>
                                               <td>No HP/Telp</td>
                                               <td>
                                                {{ $guru->hp }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Created At</td>
                                            <td>
                                                {!! $guru->created_at !!}
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                                <a href="{{ route('admin.guru.index') }}" class='btn btn-success'>Back to List</a>
                                <a href="javascript:void(0)" id="edit{{$guru->nip}}" class='btn btn-warning'>Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tab2" class="tab-pane fade">
        <div class="row">
            <div class="col-md-12 pd-top ml-auto">
                <form class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <div class="row">
                                {{ csrf_field() }}
                                <label for="inputpassword" class="col-md-3 control-label">
                                    Password
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text"><i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i></span>
                                        </span>
                                        <input type="password" id="password" placeholder="Password" name="password"
                                        class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label for="inputnumber" class="col-md-3 control-label">
                                    Confirm Password
                                    <span class='require'>*</span>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-append">
                                            <span class="input-group-text"><i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i></span>
                                        </span>
                                        <input type="password" id="password-confirm" placeholder="Confirm Password" name="confirm_password"
                                        class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="col-md-offset-3 col-md-9 ml-auto">
                            <button type="submit" class="btn btn-primary" id="change-password">Submit
                            </button>
                            &nbsp;
                            <input type="reset" class="btn btn-default" value="Reset"></div>
                        </div>
                    </form>
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
     $('#edit{{$guru->nip}}').click(function(){
    
          $('#myModal').modal('show');
          $('.modal-body').load('{!! url("admin/guru/$guru->nip/edit") !!}');
          
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

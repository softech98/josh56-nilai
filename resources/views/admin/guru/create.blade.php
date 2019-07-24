@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
{{$judul}}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/pages/formelements.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/vendors/flatpickr/css/material_blue.css') }}" rel="stylesheet"
      type="text/css"/>
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1> {{$judul}} </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href=" {{route('admin.guru.index')}} "> Guru</a></li>
        <li class="active">{{$judul}}</li>
    </ol>
</section>

<!-- Main content -->
<div class="row justify-content-center">
    <div class="col-12 col-md-12 col-lg-11">
        <div class="card panel-primary">
            <div class="card-heading">
                        <h3 class="card-title">
                            <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Form {{$judul}}
                        </h3>
                    </div>
            <!-- CSRF Token -->
            <div class="card-body ">
                {{ Form::model($guru, array('action' => $action, 'files' => true, 'method' => $method, 'id'=>'form-validation3','role'=>'form')) }}
                {{ csrf_field() }}
                
                <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                        {{ Form::text('nip',null,array('id'=>'nip','class'=>'form-control','placeholder' => 'Nomor Induk Pegawai','autofocus', 'required', 'minlength'=>'18', 'maxlength'=>'18', 'title'=>'Nomor Induk Pegawai')) }}
                            <small class="text-danger">{{ $errors->first('nip') }}</small>
                            </div>
                        </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nama',null,array('id'=>'nama' ,'class'=>'form-control','placeholder' => 'Nama Guru','autofocus', 'required','title'=>'Nama Guru', 'maxlength'=>'30')) }}
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::email('email',null,array('id'=>'email','class'=>'form-control','placeholder' => 'Alamat E-mail','autofocus', 'required', 'title'=>'Alamat E-Mail', 'maxlength'=>'50')) }}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::text('username', $guru->users->username, ['id'=>'username','class' => 'form-control', 'placeholder'=>'Username', 'required', 'title'=>'Username', 'minlength'=>'5', 'maxlength'=> '15']) !!}
                        <small class="text-danger">{{ $errors->first('username') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::textarea('alamat',null,array('id'=>'alamat','class'=>'form-control','placeholder' => 'Alamat','autofocus','rows'=>'3', 'required', 'title'=>'Alamat','maxlength'=>'100')) }}
                     <small class="text-danger">{{ $errors->first('alamat') }}</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::select('jenis_kelamin',$jenis_kelamin, null, ['class' => 'form-control select2', 'placeholder'=>'--jenis kelamin--', 'required', 'title'=>'Jenis Kelamin']) !!}
                        <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
                                <div class="input-group date">
                                {{ Form::text('tanggal_lahir',null,array('id'=>'tanggal_lahir' ,'class'=>'form-control','placeholder' => 'Tanggal Lahir','autofocus', 'required', 'title'=>'Tanggal Lahir')) }}
                                <span class="input-group-append add-on">
                                            <a class="input-btn" data-toggle>
                                                <span class="input-group-text remove_radius"> <i class="livicon" data-name="calendar" data-size="23"
                                                   data-c="#555555" data-hc="#555555" data-loop="true"></i></span>
                                            </a>
                                        </span>
                                        
                                </div>
                                <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::label('noTelp', 'No Hp') !!}
                                {{ Form::text('hp',null,array('id' =>'hp','class'=>'form-control','placeholder' => 'No HP', 'title'=>'Nomor Handphone', 'maxlength'=>'13')) }}
                                <small class="text-danger">{{ $errors->first('hp') }}</small>
                            </div>
                        </div>
                        </div>
                        <div class="row marginTop">
                            @if($method == 'POST')
                            <div class="col-2 col-sm-2"></div>
                            <div class="col-2 col-sm-4">
                                <button type="reset" class="btn btn-danger btn-block resetModal" aria-hidden="true">Reset</button>
                            </div>
                            @endif
                            <div class="col-2 col-sm-4">
                               <button type="submit" class="btn btn-info btn-block ">
                                {{ $btn_submit }}
                            </button>
                            </div>
                        </div>
    {!! Form::close() !!}
</div>

</div>
</div>
</div>
@stop

@section('footer_scripts')
{{-- </div> --}}

            <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
            <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"
            type="text/javascript"></script>
            <!-- InputMask -->
            <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
            <!-- date-range-picker -->
            <script src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"  type="text/javascript"></script>
            <script src="{{ asset('assets/js/pages/formelements.js') }}"  type="text/javascript"></script>
            <!-- Script formelement -->
            <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
            type="text/javascript"></script>
            <script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>
            <script src="{{ asset('assets/vendors/flatpickr/js/flatpickr.min.js') }}" type="text/javascript"></script>
            <script>
            $(document).ready(function () {

                flatpickr("#tanggal_lahir", {
                    altInput: true,
                    altFormat: "d-m-Y",
                    dateFormat: "Y-m-d",
                    maxDate: "2005-01-30"

                });
            });

</script>

{{-- <script type="text/javascript">
    $(function() {
        $('input#nip')
            .maxlength({
                alwaysShow: true,
                warningClass: "label label-danger",
                limitReachedClass: "label label-success"
            });
            $('input#hp')
            .maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-success"
            });
    });
</script> --}}
@stop
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
     {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/dark.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> --}}

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
                {{ Form::model($siswa, array('action' => $action, 'files' => true, 'method' => $method, 'id'=>'form-validation3','role'=>'form')) }}
                {{ csrf_field() }}
                
                <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                        {{ Form::text('nisn',null,array('id'=>'nisn','class'=>'form-control','placeholder' => 'Nomor Induk Siswa Nasional (10 digit)','autofocus', 'required', 'title'=>'Nomor Induk Siswa Nasional (10 digit)', 'maxlength'=>'10','minlength'=>'10')) }}
                                        <small class="text-danger">{{ $errors->first('nisn') }}</small>
                            </div>
                        </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nis',null,array('id'=>'nis','class'=>'form-control','placeholder' => 'Nomor Induk Siswa (5 digit)','autofocus', 'required', 'title'=>'Nomor Induk Siswa (5 digit)', 'maxlength'=>'5','minlength'=>'5')) }}
                                    <small class="text-danger">{{ $errors->first('nis') }}</small>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nama',null,array('id'=>'nama','class'=>'form-control','placeholder' => 'Nama Siswa','autofocus', 'required', 'title'=>'Nama Siswa', 'maxlength'=>'30')) }}
                                    <small class="text-danger">{{ $errors->first('nama') }}</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::select('jenis_kelamin',$jenis_kelamin, null, ['id'=>'jenis_kelamin','class' => 'form-control select2', 'placeholder'=>'--jenis kelamin--', 'required', 'title'=>'Jenis Kelamin']) !!}
                                    <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::textarea('alamat',null,array('id' => 'alamat','class'=>'form-control','placeholder' => 'Alamat','autofocus','rows'=>'3', 'required', 'title'=>'Alamat', 'maxlength'=>'100')) }}
                     <small class="text-danger">{{ $errors->first('alamat') }}</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::select('rombel_id',$rombel, null, ['id'=>'rombel_id','class' => 'form-control select2', 'placeholder'=>'--Pilih Rombel--', 'title'=>'Rombongan Belajar', 'required']) !!}
                                    <small class="text-danger">{{ $errors->first('rombel_id') }}</small>
                                    <br><br>
                                    {!! Form::select('agama',$agama, null, ['id'=>'agama','class' => 'form-control select2', 'placeholder'=>'--Pilih Agama--', 'required', 'title'=>'Agama']) !!}
                                    <small class="text-danger">{{ $errors->first('agama') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::label('tempat_lahir', 'Tempat Lahir') !!}
                                {{ Form::text('tempat_lahir',null,array('id'=>'tempat_lahir' ,'class'=>'form-control','placeholder' => 'Tempat Lahir','autofocus', 'required', 'title'=>'Tempat Lahir','maxlength'=>'20')) }}
                                <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                            </div>
                        </div>
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
{{-- </div> --}}
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
            <script src="{{ asset('assets/js/pages/custom_datepicker.js') }}" type="text/javascript"></script>
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
@stop
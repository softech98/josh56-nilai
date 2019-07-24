
<!-- Main content -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <!-- CSRF Token -->
            <div class="card-body ">
                {{ Form::model($siswa, array('action' => $action, 'files' => true, 'method' => $method, 'id'=>'form-validation3','role'=>'form')) }}
                {{ csrf_field() }}
                
                <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                        {{ Form::text('nisn',null,array('id'=>'nisn','class'=>'form-control','placeholder' => 'Nomor Induk Siswa Nasional (10 digit)','autofocus', 'required', 'title'=>'Nomor Induk Siswa Nasional (10 digit)', 'maxlength'=>'10',)) }}
                                        <small class="text-danger">{{ $errors->first('nisn') }}</small>
                            </div>
                        </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nis',null,array('id'=>'nis','class'=>'form-control','placeholder' => 'Nomor Induk Siswa (5 digit)','autofocus', 'required', 'title'=>'Nomor Induk Siswa (5 digit)', 'maxlength'=>'5')) }}
                                    <small class="text-danger">{{ $errors->first('nis') }}</small>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::text('nama',null,array('id'=>'nama','class'=>'form-control','placeholder' => 'Nama Siswa','autofocus', 'required', 'title'=>'Nama Siswa')) }}
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
                                    {{ Form::textarea('alamat',null,array('id' => 'alamat','class'=>'form-control','placeholder' => 'Alamat','autofocus','rows'=>'3', 'required', 'title'=>'Alamat')) }}
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
                                {{ Form::text('tempat_lahir',null,array('class'=>'form-control','placeholder' => 'Tempat Lahir','autofocus', 'required', 'title'=>'Tempat Lahir')) }}
                                <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
                                <div class="input-group date">
                                {{ Form::text('tanggal_lahir',null,array('id'=>'tanggal_lahir' ,'class'=>'form-control','placeholder' => 'Tanggal Lahir','autofocus', 'required', 'title'=>'Tanggal Lahir')) }}
                                <div class="input-group-addon">
                                <span class="fa fa-fw fa-calendar"></span>
                                </div>
                                </div>
                                <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                            </div>
                            
                        </div>
                        </div>
                        <div class="row marginTop">
                            {{-- @if($method == 'POST') --}}
                            <div class="col-6 col-md-6">
                                <button type="reset" class="btn btn-danger btn-block resetModal" id="myReset" aria-hidden="true">Reset</button>
                            </div>
                            {{-- @endif --}}
                            <div class="col-6 col-md-6">
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
    
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"
    type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
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
         $("#rombel_id").select2({
            placeholder: "--Pilih Rombel--",
            theme:"bootstrap"
        });
    </script>
    <script>
        $(document).ready(function() {
             $(document).ready(function() {
            $('input#nis')
            .maxlength({
                alwaysShow: true,
                placement: 'top',
                warningClass: "label label-danger",
            limitReachedClass: "label label-success"
            });
            $('input#nisn')
            .maxlength({
                alwaysShow: true,
                placement: 'top',
                warningClass: "label label-success",
            limitReachedClass: "label label-success"
            });
        }); 
            $("#tanggal_lahir").datetimepicker({
                format: 'DD-MM-YYYY',
                widgetPositioning:{
                    vertical:'top'
                },
                keepOpen:false,
                useCurrent: false,
                maxDate: 'now'
            });
        }); 
            
    </script>


<!-- Main content -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
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
                                    {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'Nama Guru','autofocus', 'required','title'=>'Nama Guru')) }}
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::email('email',null,array('class'=>'form-control','placeholder' => 'Alamat E-mail','autofocus', 'required', 'title'=>'Alamat E-Mail')) }}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {!! Form::text('username', $guru->users->username, ['class' => 'form-control', 'placeholder'=>'Username', 'required', 'title'=>'Username', 'minlength'=>'5']) !!}
                        <small class="text-danger">{{ $errors->first('username') }}</small>
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
                                    {!! Form::select('jenis_kelamin',$jenis_kelamin, null, ['class' => 'form-control select2', 'placeholder'=>'--jenis kelamin--', 'required', 'title'=>'Jenis Kelamin']) !!}
                        <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
                                {{ Form::date('tanggal_lahir',null,array('class'=>'form-control','placeholder' => 'Tanggal Lahir','autofocus', 'required', 'title'=>'Tanggal Lahir')) }}
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
                            <div class="col-6 col-md-6">
                                <button type="reset" class="btn btn-danger btn-block resetModal" aria-hidden="true">Reset</button>
                            </div>
                            @endif
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
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
    type="text/javascript"></script>
        <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>

<!-- InputMask -->
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>
    <!-- date-range-picker -->
    <script src="{{ asset('assets/js/pages/autogrow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/formelements.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/card/js/jquery.card.js') }}"  type="text/javascript"></script>

    <script>
        $(document).ready(function() {
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
            
        </script>
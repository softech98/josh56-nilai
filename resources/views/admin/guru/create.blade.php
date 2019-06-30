
<!-- Main content -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <!-- CSRF Token -->
            <div class="card-body ">
                {{ Form::model($guru, array('action' => $action, 'files' => true, 'method' => $method, 'id'=>'form-validation3','role'=>'form')) }}
                {{ csrf_field() }}
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            {{ Form::number('nip',null,array('id'=>'nip','class'=>'form-control','placeholder' => 'Nomor Induk Pegawai','autofocus', 'required', 'minlength'=>'18', 'maxlength'=>'18')) }}
                            <small class="text-danger">{{ $errors->first('nip') }}</small>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'Nama Guru','autofocus', 'required')) }}
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                    </div>
                </div>
                <div class="form-grup">
                    <div class="row">
                     <div class="col-lg-6 col-md-6">
                        {{ Form::email('email',null,array('class'=>'form-control','placeholder' => 'Alamat E-mail','autofocus', 'required')) }}
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        {!! Form::select('jenis_kelamin',$jenis_kelamin, null, ['class' => 'form-control select2', 'placeholder'=>'--jenis kelamin--', 'required']) !!}
                        <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-grup">
                <div class="row">

                    <div class="col-lg-10 col-md-8">
                     {{ Form::textarea('alamat',null,array('class'=>'form-control','placeholder' => 'Alamat','autofocus','rows'=>'3', 'required')) }}
                     <small class="text-danger">{{ $errors->first('alamat') }}</small>
                 </div>
             </div>

         </div>
         <br>
         <div class="form-group">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
                    {{ Form::date('tanggal_lahir',null,array('class'=>'form-control','placeholder' => 'Tanggal Lahir','autofocus', 'required')) }}
                    <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                </div>
                <div class="col-lg-5 col-md-5">
                    {!! Form::label('noTelp', 'No Hp') !!}
                    {{ Form::text('hp',null,array('class'=>'form-control','placeholder' => 'No HP','autofocus')) }}
                    <small class="text-danger">{{ $errors->first('hp') }}</small>
                </div>
            </div>
        </div>
        <div class="button-group">
            <div class="row">
                <div class="col-md-4">
                   <button type="reset" class="btn btn-danger btn-block resetModal" aria-hidden="true">Reset</button>
               </div>
               <div class="col-md-4">
                <button type="submit" class="btn btn-info btn-block ">
                    {{ $btn_submit }}
                </button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

</div>
</div>
</div>
{{-- </div> --}}




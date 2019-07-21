
<!-- Main content -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <!-- CSRF Token -->
            <div class="card-body ">
                {{ Form::model($siswa, array('action' => $action, 'files' => true, 'method' => $method, 'id'=>'form-validation3', 'role' => 'form')) }}
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="row">
                         <div class="col-lg-7 col-md-6">
                            {{ Form::number('nisn',null,array('id'=>'nisn','class'=>'form-control','placeholder' => 'Nomor Induk Siswa Nasional','autofocus')) }}
                            <small class="text-danger">{{ $errors->first('nisn') }}</small>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            {{ Form::number('nis',null,array('id'=>'nis','class'=>'form-control','placeholder' => 'Nomor Induk Siswa','autofocus')) }}
                            <small class="text-danger">{{ $errors->first('nis') }}</small>
                        </div>
                    </div>
                </div>
                <div class="form-grup">
                    <div class="row">
                     <div class="col-lg-7 col-md-6">
                        {{ Form::text('nama',null,array('id'=>'nama','class'=>'form-control','placeholder' => 'Nama Siswa','autofocus')) }}
                        <small class="text-danger">{{ $errors->first('nama') }}</small>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        {!! Form::select('jenis_kelamin',$jenis_kelamin, null, ['id'=>'jenis_kelamin','class' => 'form-control select2', 'placeholder'=>'--jenis kelamin--']) !!}
                        <small class="text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-grup">
                <div class="row">

                    <div class="col-lg-8 col-md-6">
                     {{ Form::textarea('alamat',null,array('id'=>'alamat','class'=>'form-control','placeholder' => 'Alamat','autofocus','rows'=>'3',)) }}
                     <small class="text-danger">{{ $errors->first('alamat') }}</small>
                 </div>
                <div class="col-lg-4 col-md-4">
                        {!! Form::select('rombel_id',$rombel, null, ['id'=>'rombel_id','class' => 'form-control select2', 'placeholder'=>'--Pilih Rombel--']) !!}
                        <small class="text-danger">{{ $errors->first('rombel_id') }}</small>
                        <br>
                        {!! Form::select('agama',$agama, null, ['id'=>'agama','class' => 'form-control select2', 'placeholder'=>'--Pilih Agama--']) !!}
                        <small class="text-danger">{{ $errors->first('agama') }}</small>
                    </div>
             </div>

         </div>
         <br>
         <div class="form-group">
            <div class="row">
                
                <div class="col-lg-5 col-md-5">
                    {{ Form::text('tempat_lahir',null,array('class'=>'form-control','placeholder' => 'Tempat Lahir','autofocus')) }}
                    <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                </div>
                <div class="col-sm-2">
                    {!! Form::label('tanggal_lahir', 'Tanggal Lahir') !!}
                </div>  
                <div class="col-lg-5 col-md-6">
                    {{ Form::date('tanggal_lahir',null,array('class'=>'form-control','placeholder' => 'Tanggal Lahir','autofocus')) }}
                    <small class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                </div>
            </div>
        </div>
        <div class="button-group">
            <div class="row">
                    @if($method == 'POST')
                <div class="col-md-4">
                   <button type="reset" class="btn btn-danger btn-block resetModal" aria-hidden="true">Reset</button>
               </div>
                   @endif   
               <div class="col-md-4">
                <button type="submit" class="btn btn-info btn-block " id="btncheck">
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
<script>
         $("#rombel_id").select2({
            placeholder: "--Pilih Rombel--",
            theme:"bootstrap"
        });
    </script>
{{-- </div> --}}




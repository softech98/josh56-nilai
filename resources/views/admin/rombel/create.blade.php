
<!-- Main content -->
    <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
                {{ Form::model($rombel, array('action' => $action, 'files' => true, 'method' => $method)) }}
                    <!-- CSRF Token -->

                    {{ csrf_field() }}
                    {!! Form::hidden('periode_id', $periode->id) !!}
                    <br>
                    <div class="form-group">
                        <div class="row">
                        {!! Form::label('namaROmbel', 'Nama Rombel',[ 'class' => 'col-sm-2', 'control-label']) !!}
                        <div class="col-sm-4">
                           {{ Form::text('namaRombel',null,array('class'=>'form-control','placeholder' => 'Nama Rombel','autofocus' ,'required' => 'required')) }}
                         <small class="text-danger">{{ $errors->first('namaRombel') }}</small>
                     </div>
                        {!! Form::label('jurusan', 'Jurusan',[ 'class' => 'col-sm-2', 'control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::select('jurusan_id', $jurusan, null, ['id' => 'jurusan', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Jurusan--']) !!}
                            <small class="text-danger">{{ $errors->first('jurusan_id') }}</small>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <div class="row">
                        {!! Form::label('tingkat', 'Tingkatan',[ 'class' => 'col-sm-2', 'control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::select('tingkat', $tingkat, null, ['id' => 'tingkat', 'class' => 'form-control', 'required' => 'required','placeholder'=>'--Pilih Tingkat--']) !!}
                            <small class="text-danger">{{ $errors->first('tingkat') }}</small>
                        </div>
                        {!! Form::label('guru_id', 'Wali Kelas',[ 'class' => 'col-sm-2', 'control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::select('guru_id', $wali_kelas, null, ['id' => 'walikelas', 'class' => 'form-control select2', 'placeholder'=>'']) !!}
                            <small class="text-danger">{{ $errors->first('guru_id') }}</small>
                        </div>
                    </div>
                    </div>
                    {{-- <div class="form-group">
                        <div class="row">
                        {!! Form::label('guru_id', 'Wali Kelas',[ 'class' => 'col-sm-2', 'control-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::select('guru_id', $wali_kelas, null, ['id' => 'walikelas', 'class' => 'form-control select2', 'placeholder'=>'']) !!}
                            <small class="text-danger">{{ $errors->first('guru_id') }}</small>
                        </div>
                    </div>
                </div> --}}
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6 col-sm-8 ">
                            <button type="reset" class="btn btn-danger btn-responsive ">Reset</button>
                            <button type="submit" class="btn btn-success btn-responsive ">
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
    <!-- row-->


    <script>
         $("#walikelas").select2({
            placeholder: "--Pilih Walikelas--",
            theme:"bootstrap"
        });
    </script>
   


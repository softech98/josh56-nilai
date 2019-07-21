
<!-- Main content -->
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <!-- CSRF Token -->
            <div class="card-body ">
                {{ Form::model($kompetensi, array('action' => $action, 'files' => true, 'method' => $method, 'id'=>'form-validation3','role'=>'form')) }}
                {{ csrf_field() }}
                {{-- {!! Form::hidden('periode', $periode->id) !!} --}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <small class="text-danger">{{ $errors->first('tingkat') }}</small>
                            {!! Form::select('tingkat',['10'=>'10', '11'=>'11', '12'=>'12'], null, ['class' => 'form-control', 'placeholder'=>'--Pilih Tingkat--', 'required']) !!}
                        </div>
                        <div class="col-lg-6 col-md-6">
                            {!! Form::select('mapel_id', $getnamamapel, null, ['class' => 'form-control', 'placeholder'=>'--Pilih Mapel--', 'required']) !!}
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                     <div class="col-lg-6 col-md-6">
                        {{ Form::text('kode',null,array('class'=>'form-control','placeholder' => 'Kode KD','autofocus', 'required')) }}
                        <small class="text-danger">{{ $errors->first('kode') }}</small>
                    </div>
                    <div class="col-lg-5 col-md-8">
                        {!! Form::select('aspek',['P'=>'Pengetahuan','K'=>'Keterampilan'], null,['class' => 'form-control select2', 'placeholder'=>'--Aspek Penilaian--', 'required']) !!}
                        <small class="text-danger">{{ $errors->first('aspek') }}</small>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="row">

                    <div class="col-lg-10 col-md-8">
                     {{ Form::textarea('kompetensi_dasar',null,array('class'=>'form-control','placeholder' => 'Isi Kompetensi','autofocus','rows'=>'3', 'required')) }}
                     <small class="text-danger">{{ $errors->first('kompetensi_dasar') }}</small>
                 </div>
             </div>

         </div>
         <br>
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




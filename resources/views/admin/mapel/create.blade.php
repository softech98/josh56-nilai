
<!-- Main content -->
    <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-body">
                {{ Form::model($mapel, array('action' => $action, 'files' => true, 'method' => $method)) }}
                    <!-- CSRF Token -->

                    {{ csrf_field() }}
                    <br>
                    <div class="form-group">
                        <div class="row">
                        {!! Form::label('Jurusan', 'Jurusan',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::select('jurusan_id', $jurusan, null, ['id' => 'Jurusan', 'class' => 'form-control', 'required' => 'required','placeholder'=>'--Pilih Jurusan--']) !!}
                            <small class="text-danger">{{ $errors->first('jurusan_id') }}</small>
                        </div>
                    </div>
                    </div>
                     <div class="form-group">
                        <div class="row">
                        {!! Form::label('nama', 'Nama Mapel',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('nama', null, ['id' => 'nama', 'class' => 'form-control', 'required' => 'required',]) !!}
                            <small class="text-danger">{{ $errors->first('nama') }}</small>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        {!! Form::label('k1', 'Kelas',[ 'class' => 'col-sm-2', 'control-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::hidden('k1',  '0', false, ['class'=>'flat-red'] ) !!} 
                            <input id="k1" name="k1" type="checkbox" class="pos-rel p-l-30 custom-checkbox" value="1" @if($mapel->k1===1) checked="checked" @endif  > Kelas X
                            <small class="text-danger">{{ $errors->first('k1') }}</small>
                        </div>
                        <div class="col-sm-2">
                            {!! Form::hidden('k2',  '0', false, ['class'=>'flat-red'] ) !!} 
                            {{-- {!! Form::checkbox('k2',  '1', ['class'=>'flat-red'] ) !!} Kelas XI --}}
                            <input id="k2" name="k2" type="checkbox" class="pos-rel p-l-30 custom-checkbox" value="1" @if($mapel->k2===1) checked="checked" @endif  > Kelas XI
                            <small class="text-danger">{{ $errors->first('k1') }}</small>
                        </div>
                         <div class="col-sm-2">
                            {!! Form::hidden('k3',  '0', false, ['class'=>'flat-red'] ) !!} 
                            {{-- {!! Form::checkbox('k3',  '1', ['checked' => 'checked'] ) !!} Kelas XII --}}
                            <input id="k3" name="k3" type="checkbox" class="pos-rel p-l-30 custom-checkbox" value="1" @if($mapel->k3===1) checked="checked" @endif  > Kelas XII
                            <small class="text-danger">{{ $errors->first('k1') }}</small>
                        </div>
                        

                    </div>
                </div>

                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <button class="btn btn-warning btn-responsive" data-dismiss="modal" id="reload">Kembali</button>
                            <button type="submit" class="btn btn-success btn-responsive">
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



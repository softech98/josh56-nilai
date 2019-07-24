

<!-- Main content -->
<div class="col-md-6">
    <div class="card panel-primary ">
        <div class="card-heading">
            <h4 class="card-title"> <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                {{$judul}}
            </h4>
        </div>
        <div class="card-body">
            
            {{ Form::model($jurusan, array('action' => $action, 'files' => true, 'method' => $method)) }}
            <!-- CSRF Token -->

            {{ csrf_field() }}

            <div class="form-group">
                <div class="row">
                    {!! Form::label('nama', 'Nama Jurusan',[ 'class' => 'col-sm-3', 'control-label']) !!}
                    <div class="col-sm-6">
                     {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'Nama Jurusan','autofocus')) }}
                     <small class="text-danger">{{ $errors->first('nama') }}</small>
                 </div>
             </div>
         </div>
         <div class="form-group">
            <div class="row">
                {!! Form::label('singkatan', 'Inisial',[ 'class' => 'col-sm-3', 'control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::text('singkatan',null,array('class'=>'form-control','placeholder' => 'Singkatan','autofocus')) }}
                 <small class="text-danger">{{ $errors->first('singkatan') }}</small>
             </div>
         </div>
     </div>
     <div class="ui-group-buttons col-sm-9 pull-right">
        <button type="submit" class="btn btn-primary">{{$btn_submit}} </button>
        <div class="or or-lg"></div>
        @if($method == "POST")
    <button type="reset" class="btn btn-danger">Reset</button>
    @else
    <a href=" {{route ('admin.jurusan.index')}} " class="btn btn-danger">Batal</a>
    @endif
    </div>
</form>
</div>
</div>
</div>
<!-- row-->

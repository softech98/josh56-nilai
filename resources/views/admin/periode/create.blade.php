

<!-- Main content -->
<div class="col-md-6">
    <div class="card panel-primary ">
        <div class="card-heading">
            <h4 class="card-title"> <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                {{$judul}}
            </h4>
        </div>
        <div class="card-body">

            {{ Form::model($periode, array('action' => $action, 'files' => true, 'method' => $method)) }}
            <!-- CSRF Token -->

            {{ csrf_field() }}

            <div class="form-group">
                <div class="row">
                    {!! Form::label('mulai', 'Mulai',[ 'class' => 'col-sm-2', 'control-label']) !!}
                    <div class="col-sm-6">
                     {{ Form::number('mulai',null,array('class'=>'form-control','placeholder' => 'Tahun Mulai','autofocus', 'required')) }}
                     <small class="text-danger">{{ $errors->first('mulai') }}</small>
                 </div>
             </div>
         </div>
         <div class="form-group">
            <div class="row">
                {!! Form::label('selesai', 'Selesai',[ 'class' => 'col-sm-2', 'control-label']) !!}
                <div class="col-sm-6">
                 {{ Form::number('selesai',null,array('class'=>'form-control','placeholder' => 'Tahun Selesai','autofocus', 'required')) }}
                 <small class="text-danger">{{ $errors->first('selesai') }}</small>
             </div>
         </div>
     </div>
     <div class="form-group">
        <div class="row">
            {!! Form::label('semester', 'Semester',[ 'class' => 'col-sm-3', 'control-label']) !!}
            <div class="col-sm-6">
                <input type="radio" name="semester" value="1" @if($periode->semester == '1') checked="checked" @endif>Ganjil &nbsp
                <input type="radio" name="semester" value="2" @if($periode->semester == '2') checked="checked" @endif>Genap
               <small class="text-danger">{{ $errors->first('semester') }}</small>
           </div>
       </div>
   </div>

   <div class="ui-group-buttons col-sm-9 pull-right">
    <button type="submit" class="btn btn-primary">{{$btn_submit}} </button>
    <div class="or or-lg"></div>
    @if($method == "POST")
    <button type="reset" class="btn btn-danger">Reset</button>
    @else
    <a href=" {{route ('admin.periode.index')}} " class="btn btn-danger">Batal</a>
    @endif
</div>
</div>
</form>
</div>
</div>
</div>
<!-- row-->


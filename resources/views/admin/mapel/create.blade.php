

<!-- Main content -->
<section class="content">
        <div class="col-lg-6">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        {{$judul}}
                    </h4>
                </div>
                <div class="panel-body">
                    {!! $errors->first('slug', '<span class="help-block">Another role with same slug exists, please choose another name</span> ') !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ Form::model($mapel, array('action' => $action, 'files' => true, 'method' => $method)) }}
                        <!-- CSRF Token -->

                        {{ csrf_field() }}

                        <div class="form-group">
                        {!! Form::label('nama', 'Nama Mapel',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-sm-6">
                           {{ Form::text('nama',null,array('class'=>'form-control','placeholder' => 'Nama Mapel','autofocus')) }}
                           <div>
                         <small class="text-danger">{{ $errors->first('nama') }}</small>
                         </div>
                        </div>
                     </div>
                        <br><br><br>
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">
                              Kategori
                            </label>
                            <div class="col-sm-6">
                                <select  id="kategori" name="kategori" class="form-control" placeholder="Kategori"> <option selected="selected" value="">-- Pilih Kategori --</option>
                          <option value="Muatan Nasional">Muatan Nasional</option>
                          <option value="Muatan Kewilayahan">Muatan Kewilayahan</option>
                          <option value="Muatan Peminatan Kejuruan">Muatan Peminatan Kejuruan</option>
                            </select>
                            </div>
                            <div class="col-sm-6 col-sm-offset-3">
                            <small class="text-danger">{{ $errors->first('kategori') }}</small>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-6">
                                <a class="btn btn-danger" href="{{ route('mapel.index') }}">
                                    @lang('button.cancel')
                                </a>
                                <button type="submit" class="btn btn-success">
                                   {{$btn_submit}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- row-->
</section>



<!-- Main content -->
    <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card panel-primary">
            <div class="card-heading clearfix icon-buttons">
                    <h4 class="card-title pull-left"> <i class="livicon" data-name="home" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Rombongan Belajar {{$rombels->tingkat}} {{$rombels->namaRombel}}
                    </h4>
                </div>
            <div class="card-body">
                 {{-- {{ Form::model($mapelguru, array('action' => $action, 'files' => true, 'method' => $method)) }} --}}
                 <form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
                 @method($method)
                <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr class="filters">
                                    <th width="20px">No.</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Guru Mata Pelajaran</th>
                                </tr>
                            </thead>
                            @foreach($mapel as $row)
                        {!! Form::hidden('jurusan_id[]', $rombels->jurusan_id) !!}
                        {!! Form::hidden('rombel_id[]', $rombels->id) !!}
                            <tbody>
                                <td align="center">{{ $loop->iteration }}</td>
                            <td> {{$row->nama}}{!! Form::hidden('mapel_id[]', $row->id) !!} </td>
                            <td>{!! Form::select('guru_id[]', $guru,  ['id' => 'guru', 'class' => 'form-control select2','placeholder' => "--Pilih Guru Mapel--"]) !!} </td>
                            </tbody>
                            @endforeach
                        </table>
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
</form>
                   {{-- {!! Form::close() !!} --}}
            </div>
           </div>
       </div>
   </div>
    <!-- row-->

 <script>
         $("#guru").select2({
            // placeholder: "--Pilih Guru Mapel--",
            theme:"bootstrap"
        });
    </script>

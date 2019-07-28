
<!-- Main content -->
    <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                 {{ Form::model($mapelguru, array('action' => $action, 'files' => true, 'method' => $method)) }}

                 <h4 align="">--- Rombongan Belajar | {{$rombels->tingkat}} {{$rombels->namaRombel}} ---</h4>
                 {{-- <form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data"> --}}
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
                            <tbody>
                            @foreach($mapel as $row)
                            <tr>
                                {!! Form::hidden('jurusan_id[]', $rombels->jurusan_id) !!}
                                {!! Form::hidden('rombel_id[]', $rombels->id) !!}
                                {!! Form::hidden('mapel_id[]', $row->id) !!} 

                                <td align="center">{{ $loop->iteration }}</td>
                                <td> {{$row->nama}}</td>
                                @php
                                 
                                 $guruMapel = $mapelguru->where('mapel_id', '=', $row->id)->where('rombel_id', '=', $rombels->id)->where('periode_id', $periodeaktif->id)->first();

                                @endphp
                                <td> {!! Form::select('guru_id[]', $guru, $guruMapel === null ? null : $guruMapel->guru_id, ['class' => 'guru_mapel form-control select2','placeholder' => "Pilih Guru Mapel"]) !!} {!! Form::hidden('periode_id[]', $periodeaktif->id) !!} </td>

                            </tr>
                            @endforeach
                            </tbody>
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
{{-- </form> --}}
                   {!! Form::close() !!}
            </div>
           </div>
       </div>
   </div>
    <!-- row-->

 <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>
 <script>
         $(".guru_mapel").select2({
            placeholder: "--Pilih Guru Mapel--",
            theme:"bootstrap"
        });
</script>

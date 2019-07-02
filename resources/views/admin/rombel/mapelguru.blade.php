
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
                            <tbody>
                                <td align="center">{{ $loop->iteration }}</td>
                            <td> {{$row->nama}} </td>
                            <td>{!! Form::select('guru_id', $guru, null, ['id' => 'guru', 'class' => 'form-control select2','placeholder' => "--Pilih Guru Mapel--"]) !!} </td>
                            </tbody>
                            @endforeach
                        </table>
                        </div>
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

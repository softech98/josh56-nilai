@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Penilaian Pengetahuan
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}" />
<link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/pages/wizard.css') }}" rel="stylesheet">
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>Penilaian Pengetahuan</h1>
    <ol class="breadcrumb">
        <li>
        <a href="{{ url('guru/dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li><a href="#"> Penilaian</a></li>
        <li class="active">Penilaian Pengetahuan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    
    <form action="{{ route("nilaiStore") }}" method="post">
    @csrf
    <input type="hidden" id="aspek" name="aspek" value="P">
    {!! Form::hidden('periode_id', $getperiode->id) !!}
    <div class="row">
        <div class="col-12">
            <hr>
            <div class="col-lg-8">

                <div class="form-group{{ $errors->has('periode_id') ? ' has-error' : '' }}">
                    <div class="row">
                        {!! Form::label('periode_id', 'Periode',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::text('periode_id', $periode, ['id' => 'periode_id', 'class' => 'form-control', 'required' => 'required', 'disabled']) !!}
                            <small class="text-danger">{{ $errors->first('periode_id') }}</small>
                        </div>
                    </div>
                </div>  
                <div class="form-group{{ $errors->has('rombel_id') ? ' has-error' : '' }}">
                    <div class="row">
                        {!! Form::label('rombel_id', 'Rombongan Belajar',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('rombel_id', $rombel, session()->get('rombel_id') ?? 0, ['id' => 'rombel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Rombel--']) !!}
                            <small class="text-danger">{{ $errors->first('rombel_id') }}</small>
                        </div>
                    </div>
                </div>  
                <div class="form-group{{ $errors->has('mapel_id') ? ' has-error' : '' }}">
                    <div class="row">
                        {!! Form::label('mapel_id', 'Mata Pelajaran',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('mapel_id', session()->get('mapel_guru') ?? [''], session()->get('mapel_id') ?? 0, ['id' => 'mapel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Mapel--']) !!}
                            <small class="text-danger">{{ $errors->first('mapel_id') }}</small>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        {!! Form::label('jumlah_penilaian', 'Jumlah Penilaian',[ 'class' => 'col-sm-3', 'control-label']) !!}
                        <div class="col-md-6">
                            {!! Form::select('jumlah_penilaian', ['3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'], session()->get('jumlah_penilaian'), ['id' => 'jml_nilai', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Jumlah Penilaian atau KD--']) !!}
                            <small class="text-danger">{{ $errors->first('jumlah_penilaian') }}</small>
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                        <div class="row">
                        <div class="col-md-6 col-sm-8 ">
                            {{-- <button type="reset" class="btn btn-danger btn-responsive ">Reset</button> --}}
                            <button type="submit" class="btn btn-success btn-responsive" style="display:none;">
                                {{-- {{ $btn_submit }} --}}Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="card panel-primary ">
                <div class="card-heading clearfix">
               </div>
            <div class="card-body">
                <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                     {{-- @if(count($mapelguru->toArray()) > 0 && $mapelguru != null) --}}
                    <table class="table table-bordered " id="table">
                        <thead>
                            <tr class="filters">
                                <th rowspan="2" style="vertical-align: middle;">Nama Siswa</th>
                                <th colspan="6" class="text-center" id='colsKd'>Kompetensi Dasar</th>
                                <th rowspan="2" style="vertical-align: middle;">NTS</th>
                                <th rowspan="2" style="vertical-align: middle;">NAS</th>
                                <th rowspan="2" style="vertical-align: middle;">Rata-Rata Nilai</th>
                            </tr>                            
                            <tr id='rowKd'>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success">Simpan</button>
                                       {!! Form::close() !!}

                   {{--  @else
                    <table class="table table-bordered table-striped table-hover">
                        <tr><td class="text-center">Anda tidak memiliki jadwal mengajar!</td></tr>
                    </table>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>    <!-- row-->
    {{-- @include('admin.guru.modal'); --}}
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
type="text/javascript"></script>
<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>

<script>
    $('#rombel_id').on('change', function(e){
        var romb_id = e.target.value;

        if(romb_id == '')
        {
            romb_id = 0;
            $('#mapel_id').empty();
            $('#mapel_id').append('<option value="">--Pilih Mapel--</option>');
        }
        else
        {
            $.get('getmapel/' + romb_id, function(data){
                //success data
                $('#mapel_id').empty();
                $.each(data, function(index, mapel){
                    $('#mapel_id').append('<option value="'+mapel.id+'">'+mapel.nama+'</option>');
                })
            })
        }
    });

    //fungsi untuk mengambil data dari database
    function getSiswaFromRombel()
    {
        var jml_nilai = $('#jml_nilai').val();

        $.get('getbanyakNilai/' + jml_nilai, function(data){
            // success data
            $.each(data, function(index, mapel){
                
            })
        });

        //ambil data siswa berdasarkan rombel id
        $.get(`{{ route("getSiswaFromRombel") }}/${$('#rombel_id').val()}/${$("#aspek").val()}` , function(response) {

            // untuk judul KD
            $("#table thead tr#rowKd").empty();
            
            if ( $('#jml_nilai').val() === "" )
            {
                return;
            }

            var jml_nilai = parseInt($('#jml_nilai').val());

            $('#colsKd').attr('colspan', jml_nilai);

            // untuk dapatkan kompetensi dasar berdasarkan rombel dan tingkatt
            var tingkat = parseInt($('#rombel_id option:selected').text());
            var aspek = $('#aspek').val();
            var mapel = $('#mapel_id').val();
            
            $.get(`{{ route("getKdFromTingkatAspekAndMapel") }}/${tingkat}/${aspek}/${mapel}`, function(response) {
                for (let h = 0; h <  jml_nilai; h++)  {

                    var option = '';
                    for (let i = 0; i <  response.length; i++) 
                    {
                        option += `<option value='${response[i].id}'>${response[i].kode}</option>`;
                    }

                    $("#table thead tr#rowKd").append(`
                        <td>
                            <select name='kompetensi[]' class='form-control kompetensi'>
                                ${option}       
                            </select>
                        </td>
                        `);

                    //

                    $(`.kompetensi:eq(${h}) option:eq(${h})`).attr("selected", "selected");
                };
            });

            //untuk isi baris tabel
            $("#table tbody tr").remove();

            $.each(response, function(index, siswa) { 
                var row = `<tr><td>${siswa.nama}</td>`;
                var rowKd = '';
                var jml_nilai = parseInt($('#jml_nilai').val());
                
                for (var i = 0; i < jml_nilai; i++) 
                {

                    //jika data nilai siswanya ada dan jumlah inputan yg berisi nilainya akan diisikan otomatis, lebih dari itu maka inputan kosong yang akan ditampilkan
                    if ( siswa.nilais.length > 1 && siswa.nilais.length > i)
                    {
                        rowKd += `<td>

                            <input type='hidden' name='siswa[${index}][nis]' value='${siswa.nis}' placeholder='' class='form-control' max="100" min='0'/>

                            <input type='number' name='siswa[${index}][nilai][]' value='${siswa.nilais[i].nilai}' placeholder='' class='form-control' max="100" min='0'/>
                        </td>`;
                    }else
                    {
                        rowKd += `<td>

                            <input type='hidden' name='siswa[${index}][nis]' value='${siswa.nis}' placeholder='' class='form-control' max="100" min='0'/>

                            <input type='number' name='siswa[${index}][nilai][]' value='' placeholder='' class='form-control' max="100" min='0'/>
                        </td>`;
                    }
                }

                //jika siswa memiliki nilai akhir
                if ( siswa.nilai_akhir )
                {
                    row = row + rowKd + `
                            <td><input type='number' name='siswa[${index}][nilai_akhir][nts]' value="${siswa.nilai_akhir.nts}" placeholder='' class='form-control'  max="100" min='0' /></td>
                            <td><input type='number' name='siswa[${index}][nilai_akhir][nas]' value="${siswa.nilai_akhir.nas}" placeholder='' class='form-control'  max="100" min='0'/></td>
                            <td>${siswa.nilai_akhir.rerata_nilai}</td>
                    </tr>
                    `;
                }else
                {
                    row = row + rowKd + `
                            <td><input type='number' name='siswa[${index}][nilai_akhir][nts]' value="" placeholder='' class='form-control'  max="100" min='0' /></td>
                            <td><input type='number' name='siswa[${index}][nilai_akhir][nas]' value="" placeholder='' class='form-control'  max="100" min='0'/></td>
                            <td></td>
                    </tr>
                    `;
                }

                $("#table tbody").append(row);
        });

    });
    }

    getSiswaFromRombel();
    $('#jml_nilai').on('change', function(){
       getSiswaFromRombel(); 
    });
</script>


@stop



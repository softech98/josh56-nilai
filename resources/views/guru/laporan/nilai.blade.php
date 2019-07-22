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
	<h1>Laporan Penilaian</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ url('guru/dashboard') }}">
				<i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
				Dashboard
			</a>
		</li>
		<li><a href="#"> Laporan</a></li>
		<li class="active">Laporan Penilaian</li>
	</ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">

	<div class="row">
		<div class="col-12">
			<hr>
			<div class="col-lg-8">

				<div class="form-group{{ $errors->has('periode_id') ? ' has-error' : '' }}">
					<div class="row">
						{!! Form::label('periode_id', 'Periode',[ 'class' => 'col-sm-3', 'control-label']) !!}
						<div class="col-md-6">
							{!! Form::select('periode_id', $periode, null, ['id' => 'periode_id', 'class' => 'form-control']) !!}
							<small class="text-danger">{{ $errors->first('periode_id') }}</small>
						</div>
					</div>
				</div>  
				<div class="form-group{{ $errors->has('rombel_id') ? ' has-error' : '' }}">
					<div class="row">
						{!! Form::label('rombel_id', 'Rombongan Belajar',[ 'class' => 'col-sm-3', 'control-label']) !!}
						<div class="col-md-6">
							{!! Form::select('rombel_id', $rombel, null, ['id' => 'rombel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Rombel--']) !!}
							<small class="text-danger">{{ $errors->first('rombel_id') }}</small>
						</div>
					</div>
				</div>  
				<div class="form-group{{ $errors->has('mapel_id') ? ' has-error' : '' }}">
					<div class="row">
						{!! Form::label('mapel_id', 'Mata Pelajaran',[ 'class' => 'col-sm-3', 'control-label']) !!}
						<div class="col-md-6">
							{!! Form::select('mapel_id', [''], null, ['id' => 'mapel_id', 'class' => 'form-control', 'required' => 'required', 'placeholder'=>'--Pilih Mapel--']) !!}
							<small class="text-danger">{{ $errors->first('mapel_id') }}</small>
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
				<table class="table table-striped" id="table">
					<thead>
						<tr>
							<th>Nama Siswa / NIS</th>
							<th style="text-align: center">Pengetahuan</th>
							<th style="text-align: center">Keterampilan</th>
						</tr>
					</thead>
					<tbody>
						<th>Ilham Saputra | 123456</th>
						<th style="text-align: center">90</th>
						<th style="text-align: center">80</th>
					</tbody>
				</table>
			</div>
		</div>
			</section>
			@stop
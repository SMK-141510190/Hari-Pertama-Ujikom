@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
	    <div class="col-md-0 col-md-offset-0">
	        <div class="panel panel-success">
	            <div class="panel-heading"><h2> LEMBUR PEGAWAI </h2></div>

	            	<div class="panel-body">
						{!! Form::model($lmbpegawai, ['method' => 'PATCH', 'route' => ['lemburpegawai.update', $lmbpegawai->id]]) !!}
						<input type="hidden" class="form-control" value="{{ $lmbpegawai->id }}">
						

						<div class="form-group">
							{!! Form::label('Kode', 'Kode Lembur:') !!}
							<select class="form-control" name="Kode_lembur_id">
								<option>-- Kode Lembur --</option>
								@foreach($katlmb as $data)
									<option value="{{ $data->id }}"> {{ $data->Kode_lembur }}</option>
								@endforeach
							</select> 
						</div>

						<div class="form-group">
						{!! Form::label('Nama', 'Nama:') !!}
						<select class="form-control" name="pegawai_id">
							@foreach($pegawai as $data)
								<option value="{{ $data->id }}"> {{ $data->User->name }}</option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
							{!! Form::label('jam', 'Jumlah Jam:') !!}
							<input type="text" name="Jumlah_jam" class="form-control" value="{{ $lmbpegawai->Jumlah_jam }}" required> 
						</div>


						<div class="form-group">
							{!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
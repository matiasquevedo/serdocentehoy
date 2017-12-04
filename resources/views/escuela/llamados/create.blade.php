@extends('escuela.template.main')


@section('title', 'Nuevo Llamado')

@section('content')

	@if(count($errors)>0)

		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)

					<li>
						{{ $error}}
					</li>

				@endforeach
			</ul>
			

		</div>
		
	@endif

	{!! Form::open(['route'=>'llamados.store', 'method'=>'POST']) !!}

		<h3>Nuevo Llamado</h3>
		<div class="form-group">
			{!! Form::label('titulo','Titulo') !!}
			{!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('fecha','Fecha') !!}
			{!! Form::text('fecha',null,['class'=>'form-control','placeholder'=>'Fecha','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('hora','Hora') !!}
			{!! Form::text('hora',null,['class'=>'form-control','placeholder'=>'Hora','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('orden','Orden') !!}
			{!! Form::select('orden',['primero'=>'Primer Orden','segundo'=>'Segundo Orden','tercero'=>'Tercer Orden','cuarto'=>'Cuarto Orden','quinto'=>'Quinto Orden'],null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required','id'=>'tipo']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('horario_catedra','Horario de dar Clase') !!}
			{!! Form::text('horario_catedra',null,['class'=>'form-control','placeholder'=>'Hora Entrada // Hora Salida','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descripcion','Descripcion') !!}
			{!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required']) !!}
		</div>


	
		<div class="form-group">
			{!! Form::submit('Publicar',['class'=>'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}


@endsection
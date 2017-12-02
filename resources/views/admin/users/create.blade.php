@extends('admin.template.main')


@section('title', 'Nuevo Usuario')

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

	{!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'nombre@server.com','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password',['class'=>'form-control','placeholder'=>'*******','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo Usuario') !!}
			{!! Form::select('type',['admin'=>'Administrador','docente'=>'Docente','escuela'=>'Institución'],null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required','id'=>'tipo']) !!}
		</div>


	<div class="institucion" id="crearInstitucio" style="display:none;">

		<div class="form-group">
			{!! Form::label('nombre','Nombre Institución') !!}
			{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('numero','Número') !!}
			{!! Form::text('numero',null,['class'=>'form-control','placeholder'=>'Numero','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('ubicacion','Ubicación') !!}
			{!! Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>'Ubicación','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('nivel','Nivel') !!}
			{!! Form::select('nivel',['nivel inicial'=>'Nivel Inicial','primaria'=>'primaria','secundaria'=>'secundaria','nivel terciario'=>'nivel terciario'],null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('tipo','Tipo') !!}
			
			{!! Form::select('tipo',['especial'=>'Especial','albergue'=>'Albergue'],null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}

		</div>		
	</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>



	{!! Form::close() !!}



@endsection

@section('js')
	<script>
		document.getElementById("tipo").onchange = function() {
			if ($("#tipo").val()=="escuela"){
           		$("#crearInstitucio").show();

      		}else{
           		$("#crearInstitucio").hide();

     		 }
						
		};
		
	</script>

@endsection
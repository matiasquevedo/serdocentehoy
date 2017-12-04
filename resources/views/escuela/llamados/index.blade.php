@extends('escuela.template.main')


@section('title', 'Listado de Llamados')

@section('content')



<div class="row">
  <div class="col-md-1">
  	
  </div>
  <div class="col-md-10">

  		<table class="table table-striped">
  <thead>
    <tr>
      <th>#Id</th>
      <th>Titulo</th>
      <th>Fecha</th>
      <th>Orden</th>
      <th>Horario de Catedra</th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
		@foreach($llamados as $llamado)
		<tr>
			<td>{{$llamado->id}}</td>
			<td><a href=""> {{$llamado->titulo}} </a></td>
      <td>{{$llamado->fecha}}</td>
      <td>{{$llamado->orden}}</td>
      <td>{{$llamado->horario_catedra}}</td>
			<td><a href="{{ route('users.edit', $llamado->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a><a href="{{ route('instituciones.destroy', $llamado->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>


  		@endforeach


  	
  </tbody>
</table>	

  </div>
  <div class="col-md-1">
  	
  	

  </div>
</div>



@endsection
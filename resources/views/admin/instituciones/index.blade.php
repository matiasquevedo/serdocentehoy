@extends('admin.template.main')


@section('title', 'Listado de Escuelas')

@section('content')



<div class="row">
  <div class="col-md-1">
  	
  </div>
  <div class="col-md-10">

  		<table class="table table-striped">
  <thead>
    <tr>
      <th>#Id</th>
      <th>Nombre</th>
      <th>Numero</th>
      <th>Nivel</th>
      <th>Tipo</th>
      <th>Usuario Responsable</th>
      <th>Accion</th>
    </tr>
  </thead>
  <tbody>
		@foreach($escuelas as $escuela)
		<tr>
			<td>{{$escuela->id}}</td>
			<td><a href="{{ route('instituciones.show', $escuela->id) }}"> {{$escuela->nombre}} </a></td>
      <td>{{$escuela->numero}}</td>
      <td>{{$escuela->nivel}}</td>
      <td>{{$escuela->tipo}}</td>
      <td>{{$escuela->user->name}}</td>
			<td><a href="{{ route('users.edit', $escuela->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a><a href="{{ route('instituciones.destroy', $escuela->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>


  		@endforeach


  	
  </tbody>
</table>
{!! $escuelas->render() !!}  	

  </div>
  <div class="col-md-1">
  	
  	

  </div>
</div>



@endsection
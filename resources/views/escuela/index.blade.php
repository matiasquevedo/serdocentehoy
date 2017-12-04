@extends('escuela.template.main')


@section('title', 'Inicio')

@section('content')

	<div class="container color-rojo">
		<div class="row row-backbordered text-center ">
			<div class="col-sm-12">
				<div class="panel panel-default panel-floating panel-floating-inline">
					<div class="panel-body">
						<div class="panel-content">
							<h3 class="m-b-0">
								<strong>Escuela</strong>
							</h3>
							<div>
                    			<img src="img/icon.png" alt="" height="200" width="200">
                			</div>
							<p class="text-muted">Estamos agregando funcionalidades</p>
							<div class="panel-actions">
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
		<a href="{{ route('llamados.create')}}" class="btn btn-info">Nuevo Llamado</a>
		<a href="{{ route('llamados.index')}}" class="btn btn-info">Mis Llamados</a>
		<a href="" class="btn btn-info">Areas Curriculares</a>
	</div>


@endsection
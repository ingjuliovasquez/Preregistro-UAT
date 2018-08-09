@extends('servicios.preregistro.templates.form2')
@section('content')

<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
			<nav class="navbar navbar-expand-lg navbar-light">
				
				<h4>Unidades de Atención Temprana</h4>
				  
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
					  
			    	{{-- <form class="form-inline my-2 my-lg-0" method="POST" action="{{ url('filtro-uat') }}">
						@csrf
						<div class="form-inline">
								<div class=" input-group col-7 text-right">
									<input type="text" id="folio" name="folio" class="form-control" placeholder="buscar" aria-describedby="basic-addon1">
									
								</div>
									<div class="input-group mb-6">
										<button class="btn btn-primary" style="margin-left: -10px;" id="basic-addon1"><i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
							</div>
					
			    	</form> --}}
				  </div>
				  {{-- <a href="{{url('lista-oficios')}}"><button class="btn btn-primary my-2 my-sm-0" type="button">Todos</button></a> --}}
			</nav>
		</div>
		
		
			<table class="table table-striped table-bordered table-hover" >
			 	<thead class="table-secondary"style="text-align:center;">
			    	<tr>
					  <th scope="col">CIUDAD</th>
					  <th scope="col">DIRECCIÓN</th>
					  <th scope="col">TELÉFONO</th>
					 
			    	</tr>
			  	</thead>
			  	<tbody>
					@forelse($unidades as $unidad)
					<tr>
						<td>{{$unidad->descripcion}}</td>
						<td>{{$unidad->direccion}}</td>
						<td>{{$unidad->telefono}}</td>
					</tr>
				@empty 
				 @endforelse 
			  	</tbody>
			</table>
		
	</div>
	</div>
@endsection

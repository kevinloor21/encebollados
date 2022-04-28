@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12 text-dark">

<h1 class="text-white" class="bg-info">𝘓𝘪𝘴𝘵𝘢 𝘥𝘦 clientes</h1>

<a href="{{route('clientes.create')}}" class="btn btn-primary">Crear Cliente</a>

<table class="table table-striped table-dark table-sm table-bordered table-hover">
<th>#</th>
<th >Nombre</th>
<th>Apellido</th>
<th>Cedula</th>
<th>Telefono</th>
<th>Acciones</th>

@foreach($clientes as $c)
<tr>

<td class="table-info text-dark">{{$loop->iteration}} </td>
<td class="table-info text-dark">{{$c->cli_nombre}} </td>
<td class="table-info text-dark">{{$c->cli_apellido}} </td>
<td class="table-info text-dark">{{$c->cli_cedula}} </td>
<td class="table-info text-dark">{{$c->cli_telefono}}</td>
<td class="table-info text-dark">
<div class="row">
	<ul></ul>

	<form action="{{route('cliente.destroy',$c->cli_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar esta categoria?') ">
  	@csrf
  	<button class="btn btn-danger"> <img src="https://cdn-icons-png.flaticon.com/512/168/168245.png" width="15px"></button>
  </form>
  
	<form action="{{route('cliente.edit',$c->cli_id)}}">
			<button class="btn btn-primary btn-sm"><img src="https://cdn-icons-png.flaticon.com/512/2808/2808392.png"width="28px"></button>
	</form>
		</div></div>
		</div>
</td>
</div>
</tr>
@endforeach
</table>
</div>
</div>
@endsection


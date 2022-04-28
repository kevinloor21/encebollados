@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12 text-dark">

<h1 class="text-white" class="bg-info">𝘓𝘪𝘴𝘵𝘢 𝘥𝘦 𝘶𝘴𝘶𝘢𝘳𝘪𝘰𝘴</h1>

<a href="{{route('usuario.create')}}" class="btn btn-primary">Nuevo Usuario</a>

<table class="table table-striped table-dark table-sm table-bordered table-hover">
<th>#</th>
<th >Nombre</th>
<th>Cedula</th>
<th>Email</th>
<th>Acciones</th>
@foreach($users as $u)
<tr>


<td class="table-info text-dark">{{$loop->iteration}} </td>

<td class="table-info text-dark">{{$u->usu_name}} </td>

<td class="table-info text-dark">{{$u->usu_cedula}} </td>

<td class="table-info text-dark">{{$u->email}} </td>

<td class="table-info text-dark">
	<form action="{{route('usuario.destroy',$u->usu_id)}}" method="POST" onsubmit="return confirm ('Desea eliminar ese Usuario?') ">
		@csrf
<button class="btn btn-danger"> <img src="https://iconarchive.com/download/i83718/custom-icon-design/mono-general-4/trash.ico" width="15px"></button>
</td>



</tr>
@endforeach
</table>
@endsection


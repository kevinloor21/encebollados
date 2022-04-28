@extends('layouts.app')
@section('content')
<h1 class="text-white">Formulario Clientes</h1>
<form action="{{route('cliente.uptade',$clientes->cli_id)}}" method="POST">
@csrf



<center>
<div class="card" style="width: 19rem;"> 
  <div class="card-body">
     <div class="form-group">

    <label for="">Nombre</label>
    <input  value="{{$clientes->cli_nombre}}" type="text" class="form-control" name="cli_nombre">
</div>


     <div class="form-group">

    <label for="">Apellido</label>
    <input value="{{$clientes->cli_apellido}}"type="text" class="form-control" name="cli_apellido">
</div>

     <div class="form-group">

    <label for="">Cedula</label>
    <input value="{{$clientes->cli_cedula}}" type="text" class="form-control" name="cli_cedula">
</div>

     <div class="form-group">

    <label for="">Telefono</label>
    <input value="{{$clientes->cli_telefono}}
    "type="text" class="form-control" name="cli_telefono">
</div>

 <button type="submit" class="btn btn-success">Guardar</button>
</form>
  </div>
  </center>
</div>

@endsection
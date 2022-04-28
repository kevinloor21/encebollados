@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-4" >
<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 5%;">
<form action="{{route('cliente.store')}}" method="POST">

     <h3 style="font-family:algeria;text-align: center;"><img src="https://w7.pngwing.com/pngs/524/696/png-transparent-computer-icons-user-symbol-symbol-miscellaneous-black-computer-icons.png" width="80px"> Registro de Cliente</h3>
@csrf
                     <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" name="cli_nombre" id="cli_nombre" class="form-control" placeholder="Escriba su nombre">
                </div>

                <div class="form-group">
                    <label for="">Apellido: </label>
                    <input type="texto" name="cli_apellido" class="form-control" placeholder="Escriba su Apellido">
                </div>

                <div class="form-group">
                    <label for="">Cedula: </label>
                    <input type="number" name="cli_cedula" id="cli_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
                </div>
                <div class="form-group">
                    <label for="">Telefono: </label>
                    <input type="number" name="cli_telefono" id="cli_telefono" class="form-control" placeholder="Escriba su numero telefonico" maxlength="10">
                </div>



<button type="submit" class="btn btn-success">Guardar</button>
</form>
  </div>
  </center>
</div>






 

@endsection	
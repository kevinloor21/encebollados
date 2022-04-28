@extends('layouts.app')
@section('content')
<script src="{{asset('js/users.js')}}"> </script>
<div class="container col-md-4" >
<div class="card-body card w-150 text-white bg-light mb-3 text-dark " style="margin-top: 5%;">
        <h3 style="font-family:algeria;text-align: center;"><img src="https://w7.pngwing.com/pngs/524/696/png-transparent-computer-icons-user-symbol-symbol-miscellaneous-black-computer-icons.png" width="80px"> Registro de Usuarios</h3>
<form action="{{route('usuario.store')}}" method="POST" onsubmit="return vali()">
@csrf
                <div class="form-group">



                    <label for="">Nombre y Apellido:</label>
                    <input type="text" name="usu_name" id="usu_name" class="form-control" placeholder="Escriba su nombre">
                </div>

                <div class="form-group">
                    <label for="">Correo: </label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Escriba su email">
                </div>

                <div class="form-group">
                    <label for="">Cedula: </label>
                    <input type="text" name="usu_cedula" id="usu_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="">Contraseña </label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success">Guardar</button>
</form>
                </div>
        </form> 
    </div>
</div>  
@endsection
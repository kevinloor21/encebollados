<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public $timestamps=false;
    protected $table='cliente';
    protected $primaryKey='cli_id';
    protected $fillable =['cli_nombre','cli_apellido','cli_cedula','cli_telefono'];

}

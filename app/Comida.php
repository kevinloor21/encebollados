<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    //
    public $timestamps=false;
    protected $table='comida';
    protected $primaryKey='com_id';
    protected $fillable =['com_nombre','com_precio','com_ingredientes','com_estado'];
}

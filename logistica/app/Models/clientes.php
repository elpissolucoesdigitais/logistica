<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes';
    public function relClientes() 
    {
        return $this->hasOne('App\Models\clientes','id','id');
    }
}

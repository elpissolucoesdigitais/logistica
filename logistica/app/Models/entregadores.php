<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class entregadores extends Model
{
    protected $table = 'entregadores';
    public function relEntregadores() 
    {
        return $this->hasOne('App\Models\entregadores','id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class veiculos extends Model
{
    protected $fillable=['placa','modelo','marca','tipo','renavam','ano','cor','entregador_id'];
    protected $table = 'veiculos';

    public function relVeiculo()
    {
        // return $this->hasOne('App\Models','id','entregador_id');
        return $this->hasOne('App\entregadores','id', 'entregador_id', 'nome');
    }
    
}

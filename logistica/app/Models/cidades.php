<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cidades extends Model
{
    protected $fillable=['nome'];
    protected $table = 'cidades';
    public function relCidades() 
    {
        return $this->hasOne('App\Models\cidades','id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fornecedores extends Model
{
    protected $table = 'fornecedores';
    public function relFornecedores() 
    {
        return $this->hasOne('App\Models\fornecedores','id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientesPlanos extends Model
{
    public function getNamePlanos()
    {
        return $this->hasMany('App\Plano');
    }
}

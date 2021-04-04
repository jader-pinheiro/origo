<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

// use App\ClientesPlanos;
// use App\Plano;

class Cliente extends Model
{
    public function getPlanos()
    {
        return $this->hasMany('App\ClientesPlanos');
    }

    public function getNomePlanos($id)
    {

        //return $this->hasMany('App\Plano');
        $nomePlanos =
            DB::table('clientes')
            ->select('planos.plano', 'planos.mensalidade', 'clientes_planos.id')
            ->join('clientes_planos', 'clientes.id', '=', 'clientes_planos.cliente_id')
            ->join('planos', 'planos.id', '=', 'clientes_planos.plano_id')
            ->where('clientes_planos.cliente_id', $id)
            ->orderBy('clientes_planos.id')
            ->get();

        //dd($nomePlanos);
        return $nomePlanos;


        //return $this->hasMany('App\ClientesPlanos');
    }

    public function getClientes()
    {

        //return $this->hasMany('App\Plano');
        $clientes =
            DB::table('clientes')
            ->distinct('clientes_planos . cliente_id')
            //->select('planos.plano', 'planos.mensalidade', 'clientes_planos.id')
            ->join('clientes_planos', 'clientes.id', '=', 'clientes_planos.cliente_id')
            ->join('planos', 'planos.id', '=', 'clientes_planos.plano_id')
            //->where('clientes_planos.cliente_id', $id)
            //->orderBy('clientes_planos.id')
            ->get();
        //dd($clientes);
        return $clientes;


        //return $this->hasMany('App\ClientesPlanos');
    }
}

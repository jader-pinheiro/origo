<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientesPlanos;

class PlanoCliController extends Controller
{
    public function destroy($id)
    {
        $plano = ClientesPlanos::find($id);
        if (isset($plano)) {
            $plano->delete();
        }
        return redirect('/clientes');
    }
}

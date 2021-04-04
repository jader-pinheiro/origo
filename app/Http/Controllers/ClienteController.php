<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
use App\Plano;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cli = Cliente::all();

        $clientes = new Cliente();
        $cliente = $clientes->getClientes();


        return view('clientes', compact('cli', 'cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_cliente');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cli = new Cliente();
        $cli->nome = $request->input('nomeCliente');
        $cli->email = $request->input('emailCliente');
        $cli->telefone = $request->input('telefoneCliente');
        $cli->estado = $request->input('estadoCliente');
        $cli->cidade = $request->input('cidadeCliente');
        $cli->data_nasc = $request->input('nascCliente');
        // $cli->


        $cli->save();
        return redirect('/clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cli = Cliente::find($id);
        if (isset($cli)) {
            return view('edit_cliente', compact('cli'));
        }
        return redirect('/clientes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cli = Cliente::find($id);
        if (isset($cli)) {
            $cli->nome = $request->input('nomeCliente');
            $cli->email = $request->input('emailCliente');
            $cli->telefone = $request->input('telefoneCliente');
            $cli->estado = $request->input('estadoCliente');
            $cli->cidade = $request->input('cidadeCliente');
            $cli->data_nasc = $request->input('nascCliente');
            $cli->save();
        }
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cli = Cliente::find($id);


        $chk =
            DB::table('clientes')
            ->select('planos.plano', 'planos.mensalidae', 'clientes_planos.id')
            ->join('clientes_planos', 'clientes.id', '=', 'clientes_planos.cliente_id')
            ->join('planos', 'planos.id', '=', 'clientes_planos.plano_id')
            ->where('clientes_planos.cliente_id', $id)
            ->where('planos.plano', '=', 'free')
            ->where('clientes.estado', '=', 'São Paulo')
            ->orderBy('clientes_planos.id')
            ->exists();
        //dd($chk);

        if ($chk == true) {

            return view('alert');
        }


        if (isset($cli)) {
            $cli->delete();
        }
        return redirect('/clientes');
    }


    public function getPlanos($id)
    {
        $cli = Cliente::find($id);

        $t = new Cliente();
        $nomePlano = $t->getNomePlanos($id);
        $planos = $cli->getPlanos;

        if (isset($cli)) {
            return view('get_planos_cli', compact('cli', 'planos', 'nomePlano'));
        }
        return redirect('/get_planos');
    }


    public function tester()
    {

        $t = new Cliente();

        //dd($t->getNomePlanos());
    }
}

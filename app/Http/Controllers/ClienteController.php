<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

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
        return view('clientes', compact('cli'));
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
        if (isset($cli)) {
            $cli->delete();
        }
        return redirect('/clientes');
    }
}

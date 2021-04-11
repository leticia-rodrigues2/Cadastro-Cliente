<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function salvarCliente(Request $request){
        $cliente = new Cliente;

        $cliente->nome_cliente= $request->name;
        $cliente->email_cliente= $request->email;
        $cliente->telefone_cliente= $request->phone;
        $cliente->senha_cliente= $request->password;
        $cliente->data_nasc_cliente= $request->date;

        $cliente->save();

        return redirect("/");

    }
    public function relatorio (){
       $clientes = Cliente::all();
       return view("relatorio",['clientes'=>$clientes]);
    }

    public function editarCliente ($id){
        $cliente = Cliente::where('id_cliente',$id)->first();
        return view ("editarFormulario",['cliente'=>$cliente]);

     }
     public function atualizarCliente ($id ,Request $request){
        $cliente = Cliente::where('id_cliente',$id)->first();
        $cliente->nome_cliente= $request->name;
        $cliente->email_cliente= $request->email;
        $cliente->telefone_cliente= $request->phone;
        $cliente->senha_cliente= $request->password;
        $cliente->data_nasc_cliente= $request->date;

        $cliente->save();

        return redirect("/");

     }


     
}


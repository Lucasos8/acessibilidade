<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Usuario;

class ClienteController extends Controller {

    public function index() {
        $cliente = Cliente::all();   
        return view('pages.veiculando.principal', ['veiculos'=> $cliente]);
       
    }   

    public function login() {
        var_dump($_POST);
        // return redirect('/request-type');
       
    }   

    public function save(Request $request) {
        if(isset($request->id)){
            $cliente = Cliente::where('id', '=', $request->id)->update([
            "nome"=>$request->nome,
            "login"=>$request->login,
            "senha"=>$request->senha,
            
            ]);

            return redirect('/')->with('Success', 'Cliente editado com sucesso!');

        }else{
            $cliente = new cliente();
            $cliente->nome = $request->nome_veiculo;
            $cliente->login = $request->ano_veiculo;
            $cliente->senha = $request->marca_veiculo;
           
            if($cliente->save()){
                //entender os retornos
                return redirect('/')->with('success', 'Cliente cadastrado com sucesso!');
            }else{
                return redirect('/')->withErrors('Ocorreu um erro ao salvar o cliente!');
            }
        }

        //return view('pages.veiculando.principal');
    }
    
    public function edit(Request $request){     
        $id = $request->id;
        $cliente = Cliente::where('id', '=', $id)->first();
        return view('pages.Veiculando.cadastrandoVeiculos', ['veiculo' =>  $cliente]);

    }

    public function delete(Request $request){
        $id = $request->id;
        Cliente::destroy($id);
        return view('pages.veiculando.principal');       
    }

}

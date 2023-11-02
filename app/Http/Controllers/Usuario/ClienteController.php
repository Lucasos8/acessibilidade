<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Usuario;

class ClienteController extends Controller
{

    public function index()
    {
        $veiculos = Cliente::all();   
        return view('pages.veiculando.principal', ['veiculos'=>$veiculos]);
       
    }   

    public function cadastrandoVeiculos()
    {
        return view('pages.veiculando.cadastrandoVeiculos');
       
    }   

    public function save(Request $request) {
        if(isset($request->id)){
            $cliente = Cliente::where('id', '=', $request->id)->update([
            "id"=>$request->id,
            "nome"=>$request->nome,
            "login"=>$request->login,
            "senha"=>$request->senha,
            
            ]);

            return redirect('/')->with('Success', 'Cliente editado com sucesso!');

        }else{
            $cliente = new cliente();
            $cliente->nome = $request->nome_veiculo;
            $cliente->ano = $request->ano_veiculo;
            $cliente->marca = $request->marca_veiculo;
            $cliente->cilindrada = $request->cilindrada_veiculo;
            $cliente->descrição = $request->descrição_veiculo;
            $cliente->valor = $request->valor_veiculo;
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
        $veiculos = Cliente::where('id', '=', $id)->first();
        return view('pages.Veiculando.cadastrandoVeiculos', ['veiculo' => $veiculos]);

    }

    public function delete(Request $request){
        $id = $request->id;
        Cliente::destroy($id);
        return view('pages.veiculando.principal');       
    }

}

<?php

namespace App\Http\Controllers\Veiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class VeiculoController extends Controller
{

    public function index()
    {
        $veiculos = Veiculo::all();   
        return view('pages.veiculando.principal', ['veiculos'=>$veiculos]);
       
    }   

    public function cadastrandoVeiculos()
    {
        return view('pages.veiculando.cadastrandoVeiculos');
       
    }   

    public function save(Request $request) {
        if(isset($request->id)){
            $veiculos = Veiculo::where('id', '=', $request->id)->update([
            "nome"=>$request->nome_veiculo,
            "ano"=>$request->ano_veiculo,
            "marca"=>$request->marca_veiculo,
            "cilindrada"=>$request->cilindrada_veiculo,
            "descrição"=>$request->descrição_veiculo,
            "valor"=>$request->valor_veiculo,
            ]);
            return redirect('/')->with('success', 'Veiculo editado com sucesso!');
        }else{
            $veiculos = new veiculo();
            $veiculos->nome = $request->nome_veiculo;
            $veiculos->ano = $request->ano_veiculo;
            $veiculos->marca = $request->marca_veiculo;
            $veiculos->cilindrada = $request->cilindrada_veiculo;
            $veiculos->descrição = $request->descrição_veiculo;
            $veiculos->valor = $request->valor_veiculo;
            if($veiculos->save()){
                //entender os retornos
                return redirect('/')->with('success', 'Veiculo cadastrado com sucesso!');
            }else{
                return redirect('/')->withErrors('Ocorreu um erro ao salvar o veiculo!');
            }
        }
        //return view('pages.veiculando.principal');
    }
    
    public function edit(Request $request){     
        $id = $request->id;
        $veiculos = Veiculo::where('id', '=', $id)->first();
        return view('pages.Veiculando.cadastrandoVeiculos', ['veiculo' => $veiculos]);

    }

    public function delete(Request $request){
        $id = $request->id;
        Veiculo::destroy($id);
        return view('pages.veiculando.principal');       
    }

}

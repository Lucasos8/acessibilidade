<?php

namespace App\Http\Controllers\Veiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gravacao;

class GravacaoController extends Controller
{

    public function index()
    {
        $gravacao = Gravacao::all();   
        return view('pages.veiculando.principal', ['gravacao'=>$gravacao]);
       
    }   

    public function cadastrandoGravacao()
    {
        return view('pages.veiculando.cadastrandoVeiculos');
       
    }   

    public function save(Request $request) {
        if(isset($request->id)){
            $gravacao = Gravacao::where('id', '=', $request->id)->update([
            "id_cliente"=>$request->nome_veiculo,
            "id_atendente"=>$request->ano_veiculo,
            
            ]);
            return redirect('/')->with('success', 'Veiculo editado com sucesso!');
        }else{
            $gravacao = new Gravacao();
            $gravacao->id_cliente = $request->nome_veiculo;
            $gravacao->id_atendente = $request->ano_veiculo;
           
            if($gravacao->save()){
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
        $gravacao = Gravacao::where('id', '=', $id)->first();
        return view('pages.Veiculando.cadastrandoVeiculos', ['veiculo' => $gravacao]);

    }

    public function delete(Request $request){
        $id = $request->id;
        Gravacao::destroy($id);
        return view('pages.veiculando.principal');       
    }

}

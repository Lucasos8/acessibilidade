<?php

namespace App\Http\Controllers\Veiculo;

use App\Http\Controllers\Controller;
use App\Models\Atendente;
use Illuminate\Http\Request;
use App\Models\Usuario;

class AtendenteController extends Controller
{

    public function index()
    {
        $atendente = Atendente::all();   
        return view('pages.veiculando.principal', ['atendente'=>$atendente]);
       
    }   

    public function cadastrandoAtendente()
    {
        return view('pages.veiculando.cadastrandoVeiculos');
       
    }   

    public function save(Request $request) {
        if(isset($request->id)){
            $atendente = Atendente::where('id', '=', $request->id)->update([
            "nome"=>$request->nome_veiculo,
            "login"=>$request->ano_veiculo,
            "senha"=>$request->marca_veiculo,
            
            ]);
            return redirect('/')->with('success', 'Veiculo editado com sucesso!');
        }else{
            $atendente = new Atendente();
            $atendente->nome = $request->nome_veiculo;
            $atendente->login = $request->ano_veiculo;
            $atendente->senha = $request->marca_veiculo;
            
            if($atendente->save()){
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
        $atendente = Atendente::where('id', '=', $id)->first();
        return view('pages.Veiculando.cadastrandoVeiculos', ['atendente' => $atendente]);

    }

    public function delete(Request $request){
        $id = $request->id;
        Atendente::destroy($id);
        return view('pages.veiculando.principal');       
    }

}

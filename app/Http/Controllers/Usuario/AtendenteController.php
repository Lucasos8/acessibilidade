<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Atendente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class AtendenteController extends Controller {

    public function login() {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        if(!isset($usuario) || !isset($senha)) {
            return redirect('/atendente');
        }

        $users = DB::select('select * from atendente where (nome = ? OR login = ?) AND senha = ?', [$usuario, $usuario, $senha]);
        $numLines = count($users);
        if($numLines == 0) return redirect('/atendente');
        return redirect('/atendente/salas-abertas')->with(["id" => $users[0]->id]);
       
    }

    public function listRooms() {
        return view('atendenteSalasAbertas', ["SESS_ID" => session("id")]);
    }

    public function accessRoom() {
        return view('/live-chat');
    }

    


}

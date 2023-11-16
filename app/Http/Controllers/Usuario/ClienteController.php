<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class ClienteController extends Controller {
    public function login() {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        if(!isset($usuario) || !isset($senha)) {
            return redirect('/');
        }

        $users = DB::select('select * from cliente where (nome = ? OR login = ?) AND senha = ?', [$usuario, $usuario, $senha]);
        $numLines = count($users);
        if($numLines == 0) return redirect('/');
        return redirect('/request-type')->with(["id" => $users[0]->id]);
       
    }

    public function saveRoomId() {
        $userId = $_POST["user_id"];
        $roomId = $_POST["room_id"];
        Cliente::where('id', $userId)->update(['id_sala' => $roomId]);
    }

    public function removeRoom() {
        $userId = $_POST["user_id"];
        Cliente::where('id', $userId)->update(['id_sala' => NULL]);
    }

}

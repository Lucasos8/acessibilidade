<?php

namespace App\Http\Controllers\VideoChat;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoChatController extends Controller {

    function createRequest() {
        $userId = $_POST["user_id"];
        $tipoRequisicao = $_POST["tipo_atendimento"];
        Cliente::where('id', $userId)->update(['tipo_atendimento' => $tipoRequisicao]);
        return redirect('live-chat?user_id=' . $userId);
    }

    function saveRoomId() {

    }

}

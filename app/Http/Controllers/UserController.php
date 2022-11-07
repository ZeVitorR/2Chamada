<?php

namespace App\Http\Controllers;
use  App\Models\User;
use  App\models\Solicitacoe;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        $solicitacoes = Solicitacoe::all();
        $cont = 1;

        return view('coordenador',['users' => $users, 'solicitacoes'=>$solicitacoes,'cont'=>$cont]);

    }
}

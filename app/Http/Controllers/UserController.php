<?php

namespace App\Http\Controllers;
use  App\Models\User;
use  App\models\Solicitacoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index() {
        $id = Auth::user()->id;
        $tipo = DB::table('model_has_permissions')->where('model_id', $id)->value('permission_id');
        $users = User::all();
        $hoje = date('Y/m/d');


        if($tipo == 2){
            $solicitacoes = Solicitacoe::where('idCoordenador', $id)->get();
            $total = Solicitacoe::where('idCoordenador', $id)->count();
            $busca = request('busca');
            $prof = request('opcao');

            if($busca && $prof == 1){
                $solicitacoes = Solicitacoe::where(
                    'professor', 'like', '%'.$busca.'%'
                    )->get();
            }else if ($busca && $prof == 2){
                $solicitacoes = Solicitacoe::where(
                    'disciplina', 'like', '%'.$busca.'%'
                    )->get();

            }else if ($busca && $prof == 3){
                $solicitacoes = Solicitacoe::where(
                    'curso', 'like', '%'.$busca.'%'
                    )->get();
            }
        }else{
            $solicitacoes = Solicitacoe::all();
            $total = Solicitacoe::all()->count();
            $busca = request('busca');
            $prof = request('opcao');

            if($busca && $prof == 1){
                $solicitacoes = Solicitacoe::where(
                    'professor', 'like', '%'.$busca.'%'
                    )->get();
            }else if ($busca && $prof == 2){
                $solicitacoes = Solicitacoe::where(
                    'disciplina', 'like', '%'.$busca.'%'
                    )->get();

            }else if ($busca && $prof == 3){
                $solicitacoes = Solicitacoe::where(
                    'curso', 'like', '%'.$busca.'%'
                    )->get();
            }

        }

        $cont = 1;


        return view('coordenador',['solicitacoes'=>$solicitacoes,'cont'=>$cont,'total' => $total]);

    }

}

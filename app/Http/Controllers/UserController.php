<?php

namespace App\Http\Controllers;
use  App\Models\User;
use  App\models\Solicitacoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public $solicita;
    public function index() {
        $id = Auth::user()->id;
        $tipo = DB::table('model_has_permissions')->where('model_id', $id)->value('permission_id');
        $users = User::all();
        $hoje = date("Y/m/d");
        $hoje = explode("/",$hoje);
        list($ano,$mes,$dia) = $hoje;
        $mes = (int)$mes;
        if($tipo == 2){
            if( $mes<=06)
                $solicitacoes = Solicitacoe::where('idCoordenador', $id)->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                $total = Solicitacoe::where('idCoordenador', $id)->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();
                $busca = request('busca');
                $prof = request('opcao');

                if($busca && $prof == 1){
                    $solicitacoes = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                    $total = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();
                }else if ($busca && $prof == 2){
                    $solicitacoes = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                    $total = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();

                }else if ($busca && $prof == 3){
                    $solicitacoes = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                    $total = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();
                }
            elseif($mes>6){
                $solicitacoes = Solicitacoe::where('idCoordenador', $id)->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                $total = Solicitacoe::where('idCoordenador', $id)->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();
                $busca = request('busca');
                $prof = request('opcao');

                if($busca && $prof == 1){
                    $solicitacoes = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                    $total = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();
                }else if ($busca && $prof == 2){
                    $solicitacoes = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                    $total = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();

                }else if ($busca && $prof == 3){
                    $solicitacoes = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                    $total = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();
                }
            }
        }else{
            if( $mes<=06){
                $solicitacoes = Solicitacoe::whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                $total = Solicitacoe::whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();
                $busca = request('busca');
                $prof = request('opcao');

                if($busca && $prof == 1){
                    $solicitacoes = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                    $total = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();
                }else if ($busca && $prof == 2){
                    $solicitacoes = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                    $total = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();
                }else if ($busca && $prof == 3){
                    $solicitacoes = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                    $total = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->count();
                }
            }else{
                $solicitacoes = Solicitacoe::whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                $total = Solicitacoe::whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();
                $busca = request('busca');
                $prof = request('opcao');

                if($busca && $prof == 1){
                    $solicitacoes = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                    $total= Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();
                }else if ($busca && $prof == 2){
                    $solicitacoes = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                    $total = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();
                }else if ($busca && $prof == 3){
                    $solicitacoes = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                    $total = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->count();
                }
            }
        }
        $cont = 1;
        return view('coordenador',['solicitacoes'=>$solicitacoes,'cont'=>$cont,'total' => $total]);

    }

}

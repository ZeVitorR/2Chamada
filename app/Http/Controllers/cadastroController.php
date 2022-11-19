<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use App\Models\Solicitacoe;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class cadastroController extends Controller
{
    public function index(){
        $cod = DB::table('users')
            ->join('model_has_permissions', 'users.id', '=', 'model_has_permissions.model_id')
            ->select('users.*')
            ->where('model_has_permissions.permission_id','2')
            ->get();

        return view('cadastro',['users'=>$cod]);
    }

    public function store(Request $request){
        $solicitacoes = new Solicitacoe;
        $solicitacoes->status = $request->dev;
        $solicitacoes->codigo = $request->RA;
        $solicitacoes->nome= $request->aluno;
        $solicitacoes->data_solicitacao = $request->data;
        $solicitacoes->curso = $request->curso;
        $solicitacoes->idCoordenador =$request->cod;
        $solicitacoes->periodo = $request->periodo;
        $solicitacoes->disciplina = $request->dis;
        $solicitacoes->professor = $request->prof;
        $solicitacoes->motivo = $request->motivo;
        $solicitacoes->save();

        event(new Registered($solicitacoes));

        return redirect(RouteServiceProvider::HOME);
    }
}

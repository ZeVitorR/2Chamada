<?php

namespace App\Http\Controllers;
use  App\Models\User;
use  App\models\Solicitacoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class excelController extends Controller
{
    public function exportaExcel(){
        $busca = request('busca');
        $prof = request('opcao');
        dd($busca);
        ini_set('default_charset', 'UTF-8');
        setlocale(LC_ALL,'pt_BR.UTF8');
        mb_internal_encoding('UTF8');
        mb_regex_encoding('UTF8');
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


                if($busca && $prof == 1){
                    $solicitacoes = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();

                }else if ($busca && $prof == 2){
                    $solicitacoes = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                }else if ($busca && $prof == 3){
                    $solicitacoes = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-01-01","$ano-06-30"])->get();
                }
            }else{
                $solicitacoes = Solicitacoe::whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                $busca = request('busca');
                $prof = request('opcao');

                if($busca && $prof == 1){
                    $solicitacoes = Solicitacoe::where(
                        'professor', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                }else if ($busca && $prof == 2){
                    $solicitacoes = Solicitacoe::where(
                        'disciplina', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                }else if ($busca && $prof == 3){
                    $solicitacoes = Solicitacoe::where(
                        'curso', 'like', '%'.$busca.'%'
                        )->whereBetween('dataSolicitacao',["$ano-07-01","$ano-12-31"])->get();
                }
            }
        }
        $datahoje = date('d-m-Y');
		$arquivo = '2Chamada'.$datahoje.'.xls';
        $html = header('Content-Type: text/html; charset=UTF-8');
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="7"><center><b>Solicitacoes de 2 Chamada</b></center></td>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>Codigo</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Data da Prova Perdida</b></td>';
		$html .= '<td><b>Periodo</b></td>';
		$html .= '<td><b>Curso</b></td>';
		$html .= '<td><b>Disciplina</b></td>';
		$html .= '<td><b>Professor</b></td>';
		$html .= '</tr>';
        foreach($solicitacoes as $solicitacoe){
            $html .= '<tr>';
            $html .= '<td>'.$solicitacoe->codigo.'</td>';
            $html .= '<td>'.$solicitacoe->nome.'</td>';
            $html .= '<td>'.$solicitacoe->dataSolicitacao.'</td>';
            $html .= '<td>'.$solicitacoe->periodo.'</td>';
            $html .= '<td>'.$solicitacoe->curso.'</td>';
            $html .= '<td>'.$solicitacoe->disciplina.'</td>';
            $html .= '<td>'.$solicitacoe->professor.'</td>';
            $html .= '</tr>';
        }

        // Configurações header para forçar o download
        header('Content-Type: text/html; charset=UTF-8');
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
    }
}

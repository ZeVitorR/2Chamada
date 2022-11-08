<x-app-layout>
    @section('head')
    <link rel="stylesheet" href="/css/coordenador.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @endsection
    <div id="cabecario">
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="sair" name="sair":href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                <img id="sair" src="imagens/sair.png" width="100" height="120"/>
            </button>
        </form>
        <h2>CODIGO:{{Auth::user()->id}}</h2>
        <h3>NOME:{{Auth::user()->name}}</h3>
        <h1>COORDENADOR</h1>
        <button id="histo" class="historico">
          <img id="setahist" src="imagens/setahist.png" width="100" height="120"/>
        </button>
    </div>
    <h4>SOLICITAÇÕES</h4>
    <h5>TOTAL:{{$cont}}</h5>
    <button id="exp">
      <img id="exportar" src="imagens/exportar.png"/>
    </button>
    <div id="Busca">
      <input type="text" id="txtBusca" placeholder="Buscar..."/>
      <select id="opcao" name="opcao" class="form-select" aria-label="Default select example">
            <option selected value="1">Professor</option>
            <option value="2">Disciplina</option>
            <option value="3">Curso</option>
      </select>
      <button id="b" class="buscar">
        <img id="busca" src="imagens/busca.png" width="30"/>
      </button>
    </div>
    <div id="tabela">
      <table class="table table-hover table-dark">
        <thead>
          <tr >
            <th scope="col">#</th>
            <th scope="col">Status</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nome</th>
            <th scope="col">Data da Solicitação</th>
            <th scope="col">Curso</th>
            <th scope="col">Disciplina</th>
            <th scope="col">Professor</th>
            <th scope="col">Motivo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($solicitacoes as $solicitacoe)
                <tr >

                    <th scope="row">{{$cont++}}</th>
                    <td>{{$solicitacoe->status}}</td>
                    <td>{{$solicitacoe->codigo}}</td>
                    <td>{{$solicitacoe->nome}}</td>
                    <td>{{$solicitacoe->data_solicitacao}}</td>
                    <td>{{$solicitacoe->codigo}}</td>
                    <td>{{$solicitacoe->disciplina}}</td>
                    <td>{{$solicitacoe->professor}}</td>
                    <td>{{$solicitacoe->motivo}}</td>

                </tr>
            @endforeach
        </tbody>
      </table>
        <div id ="paginação">
          <nav aria-label="...">
            <ul class="pagination pagination-sm">
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item active" aria-current="page">
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item active" aria-current="page">
              </li>
            </ul>
          </nav>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</x-app-layout>

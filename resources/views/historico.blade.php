<x-app-layout>
    @section('head')
    <link rel="stylesheet" href="/css/historico.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    @endsection
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col">
            <form method="GET" action="{{ route('inicial') }}">
                @csrf
                <button id="Voltar" class="back":href="route('inicial')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                    <img id="volta" src="imagens/voltar.png"  />
                    <label class="voltar" for="Voltar">Voltar</label>
                </button>
            </form>
          </div>
          <div class="col">
                <h1>HISTORICO</h1>
          </div>
          <div class="col">
            <div id="Busca">
                <form action="/historico" method="GET">
                  <input type="text" id="txtBusca" name="busca" placeholder="Buscar..."/>
                  <select id="opcao" name="opcao" class="form-select" aria-label="Default select example">
                        <option selected value="1">Professor</option>
                        <option value="2">Disciplina</option>
                        <option value="3">Curso</option>
                  </select>

                  <button type="submit" id="b" class="buscar">
                    <img id="busca" src="imagens/busca.png" width="30"/>
                  </button>
                </form>
            </div>
          </div>
        </div>
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
                <td>{{$solicitacoe->dataSolicitacao}}</td>
                <td>{{$solicitacoe->curso}}</td>
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

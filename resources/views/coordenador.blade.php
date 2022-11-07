<x-app-layout>
    @section('head')
    <link rel="stylesheet" href="/css/historico.css">
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
        {{-- <button class="sair" name="sair">
          <img id="sair" src="imagens/sair.png" width="100" height="120"/>
        </button> --}}
        <h2>CODIGO:{codigo}</h2>
        <h3>NOME:{nomeCoordenador}</h2>
        <h1>COORDENADOR</h1>
        <button id="histo" class="historico">
          <img id="setahist" src="imagens/setahist.png" width="100" height="120"/>
        </button>
    </div>
    <h4>SOLICITAÇÕES</h4>
    <h5>TOTAL:{total}</h4>
    <button id="exp">
      <img id="exportar" src="imagens/exportar.png"/>
    </button>
    <div id="Busca">
      <input type="text" id="txtBusca" placeholder="Buscar..."/>
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
          <tr >
            <th scope="row">1</th>
            <td>Aprovado</td>
            <td>0001</td>
            <td>Otto</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Aprovado</td>
            <td>0002</td>
            <td>Thornton</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Aprovado</td>
            <td>0003</td>
            <td>Larry the Bird</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Aprovado</td>
            <td>0004</td>
            <td>Larry the Bird</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Aprovado</td>
            <td>0005</td>
            <td>Larry the Bird</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Aprovado</td>
            <td>0006</td>
            <td>Larry the Bird</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Aprovado</td>
            <td>0003</td>
            <td>Larry the Bird</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Aprovado</td>
            <td>0003</td>
            <td>Larry the Bird</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Aprovado</td>
            <td>0003</td>
            <td>Larry the Bird</td>
            <td>18/08/2022</td>
            <td>Ciencias da Computação</td>
            <td>Metodo numerico</td>
            <td>Jean</td>
            <td>Doença</td>
          </tr>
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

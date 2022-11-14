<x-app-layout>



    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">


                       <div class="py-4">
                                          <div class="max-w-7xl mx-auto sm:px-25 lg:px-8">
                                              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                                  <div class="p-6 bg-white border-b border-white-100">
                                                          <body>
                                                              <form action="/envio" method="POST">
                                                                  @csrf
                                                                  <label> Cadastro de 2° Chamada</label>
                                                                  <br> <br> <br>


                                                                  {{--Nome--}}
                                                                  <label>Nome do Aluno(a):</label>
                                                                  <input type="text">

                                                                   {{--RA--}}
                                                                   <label>Número R.A:</label>
                                                                   <input type="text">


                                                                  {{--Curso--}}
                                                                  <label>Curso:</label>
                                                                  <input type="text">
                                                                  <br> <br> <br>


                                                                  {{--Período--}}
                                                                  <label>Período:</label>
                                                                  <input type="text">


                                                                  {{--Coor--}}
                                                                  <label>Coordenador:</label>
                                                                  <input type="text">
                                                                  <br> <br> <br>

                                                                  {{--Justif--}}
                                                                  <label>Justificativa da reposição:</label>
                                                                  <input type="text">


                                                                  {{--Justif2--}}
                                                                  <label>Devolutiva da justificativa</label>
                                                                  <select id="dev">
                                                                      <option value = "-">Selecione uma opção</option>
                                                                      <option value = "AC">Aceito</option>
                                                                      <option value = "NG">Negado</option>
                                                                  </select>
                                                                  <br> <br> <br>

                                                                  {{--Atividade--}}
                                                                  <label>Avaliação não realizada</label>
                                                                  <select id="dev">
                                                                      <option value = "-">Selecione uma opção</option>
                                                                      <option value = "AC">Prova 1</option>
                                                                      <option value = "NG">Prova 2</option>
                                                                      <option value = "NG">Exame </option>
                                                                      <option value = "NG">Atividade em aula </option>
                                                                      <option value = "NG">Seminario</option>
                                                                  </select>

                                                                  {{--Date--}}
                                                                  <label>Data da atividade não realizada:</label>
                                                                  <input type="text">
                                                                  <br> <br> <br>


                                                                  {{--Pag--}}
                                                                  <label>Pagamento</label>
                                                                  <select id="dev">
                                                                      <option value = "-">Selecione uma opção</option>
                                                                      <option value = "AC">Pago</option>
                                                                      <option value = "NG">Pendente</option>
                                                                  </select>
                                                                 <br> <br> <br>

                                                                 <button>
                                                                 Enviar
                                                                 </button>

                                                                 <button>
                                                                 limpar
                                                                 </button>


                                                                  </form>


                                                          <body>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
              </div>
          </div>
      </div>
  </div>

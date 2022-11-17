<x-app-layout>
    @section('head')
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link rel="stylesheet" href="/css/coordenador.css">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endsection
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-gray overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                    <div class="py-4">
                        <div class="max-w-7xl mx-auto sm:px-25 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-gray border-b border-black-100">
                                    <body>
                                        <form action="/envio" method="POST">
                                            @csrf
                                            <div class="flex justify-center  ">
                                                <h1 class="text-2xl font-bold"> Cadastro de 2° Chamada</h1>
                                            </div>

                                            <br> <br> <br>


                                            {{--Nome--}}

                                            <label>Nome do Aluno(a):</label>
                                            <input name="aluno" type="text">

                                            {{--RA--}}
                                            &nbsp;&nbsp;
                                            <label>Número R.A:</label>
                                            <input name="RA" type="text">


                                            {{--Curso--}}
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label>Curso:</label>
                                            <input name="curso" type="text">
                                            <br> <br> <br>

                                            {{--Disciplina--}}

                                            <label>Disciplina:</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input name="dis" type="text">

                                            {{--Professor--}}
                                            &nbsp;&nbsp;
                                            <label>Professor:</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <input name="prof" type="text">
                                            &nbsp;&nbsp;&nbsp;

                                            {{--Período--}}
                                            <label>Período:</label>
                                            <input name="periodo" type="text">
                                            <br> <br> <br>

                                            {{--Coor--}}
                                            <label>Coordenador:</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <select name="cod" id="dev">
                                                <option value = "-">Selecione uma opção</option>
                                                @foreach ($users as $user)
                                                    <option value ='{{$user->id}}'>{{$user->name}}</option>
                                                @endforeach


                                            </select>

                                            {{--Date--}}
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label>Data da atividade não realizada:</label>
                                            <input name="data" type="text">
                                            <br> <br> <br>

                                            {{--Justif--}}

                                            <label>Justificativa:</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input name="motivo" type="text">


                                            {{--Justif2--}}
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label>Devolutiva da justificativa:</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <select name="dev" id="dev">
                                                <option value = "-">Selecione uma opção</option>
                                                <option value = "Aceito">Aceito</option>
                                                <option value = "Negado">Negado</option>
                                            </select>
                                            <br> <br> <br>






                                            {{-- <button>
                                                Enviar
                                            </button>

                                            <button>
                                                limpar
                                            </button> --}}

                                            <!-- Base -->
<button type="submit">
    <a
    class="group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
    href="/download"
    >
    <span
        class="absolute inset-0 translate-x-0.5 translate-y-0.5 bg-indigo-600 transition-transform group-hover:translate-y-0 group-hover:translate-x-0"
    ></span>

    <span class="relative block border border-current bg-white px-8 py-3">
        Enviar
    </span>
    </a>
</button>
<!-- Hover -->

<button>
    <a
    class="group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
    href="/download"
    >
    <span
        class="absolute inset-0 translate-x-0 translate-y-0 bg-indigo-600 transition-transform group-hover:translate-y-0.5 group-hover:translate-x-0.5"
    ></span>

    <span class="relative block border border-current bg-white px-8 py-3">
        Limpar
    </span>
    </a>
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
</x-app-layout>

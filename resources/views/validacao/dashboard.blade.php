<x-app-layout>
    @can('coordenador')

    @elsecan('atendimentoIntegrado')
        Voce é um atendimentoIntegrado
    @endcan
</x-app-layout>

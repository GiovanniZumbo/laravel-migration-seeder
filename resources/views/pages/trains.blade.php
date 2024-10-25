@extends('layout.app')

@section('main-content')
    <h1 class="text-center py-3">Tabella treni disponibili</h1>
    <div class="container">
        <table class="table table-success table-striped-columns table-hover">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Codice treno</th>
                    <th scope="col">Stazione Partenza</th>
                    <th scope="col">Stazione Arrivo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Orario Arrivo</th>
                    <th scope="col">In orario</th>
                    <th scope="col">N. carrozze</th>
                    <th scope="col">Binario</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
                    <tr>
                        <th scope="row">{{ $train->azienda }}</th>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->data_partenza }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->binario }}</td>

                    </tr>

                @empty
                    <p>Nessun treno disponibile al momento</p>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection

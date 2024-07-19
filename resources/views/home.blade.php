@extends('layouts.app')

@section('main-content')
    <main>
        <h1>Elenco dei Treni</h1>
        @foreach ($trains as $train)
            <article>
                <h2>{{ $train->azienda }}</h2>
                <p>Stazione di partenza: {{ $train->stazione_partenza }}</p>
                <p>Stazione di arrivo: {{ $train->stazione_arrivo }}</p>
                <p>Orario di partenza: {{ $train->orario_partenza }}</p>
                <p>Orario di arrivo: {{ $train->orario_arrivo }}</p>
                <p>Codice Treno: {{ $train->codice_treno }}</p>
                <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
                <p>In orario: {{ $train->in_orario ? 'Sì' : 'No' }}</p>
                <p>Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}</p>
            </article>
        @endforeach
    </main>
@endsection

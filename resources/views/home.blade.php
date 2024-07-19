@extends('layouts.app')

@section('main-content')
    <main>
        <h1>Elenco dei Treni</h1>
        @foreach ($trains as $train)
            <article>
                <h2>{{ $train->azienda }}</h2>
                <p>Stazione di partenza: {{ $train->stazione_partenza }}</p>
                <p>Stazione di arrivo: {{ $train['Stazione di arrivo'] }}</p>
                <p>Orario di partenza: {{ $train['Orario di partenza'] }}</p>
                <p>Orario di arrivo: {{ $train['Orario di arrivo'] }}</p>
                <p>Codice Treno: {{ $train['Codice Treno'] }}</p>
                <p>Numero Carrozze: {{ $train['Numero Carrozze'] }}</p>
                <p>In orario: {{ $train['In orario'] ? 'Sì' : 'No' }}</p>
                <p>Cancellato: {{ $train['Cancellato'] ? 'Sì' : 'No' }}</p>
            </article>
        @endforeach
    </main>
@endsection

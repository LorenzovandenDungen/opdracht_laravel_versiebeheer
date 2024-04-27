@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bieren uit categorie: {{ $categorie->naam }}</h1>

        <ul>
            @foreach ($bieren as $bier)
                <li>{{ $bier->naam }}</li>
            @endforeach
        </ul>
    </div>
@endsection

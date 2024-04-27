@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Andere bieren van hetzelfde biermerk: {{ $bier->naam }}</h1>

        <ul>
            @foreach ($andereBieren as $anderBier)
                <li>{{ $anderBier->naam }}</li>
            @endforeach
        </ul>
    </div>
@endsection

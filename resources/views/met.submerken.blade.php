@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Merken met submerken en het aantal submerken</h1>

        <ul>
            @foreach ($merken as $merk)
                <li>{{ $merk->naam }} ({{ $merk->submerken->count() }})</li>
            @endforeach
        </ul>
    </div>
@endsection

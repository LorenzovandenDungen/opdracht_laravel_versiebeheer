@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Boomweergave van alle bieren</h1>
        <ul>
            @foreach ($bieren as $bier)
                <li>{{ $bier->naam }}</li>
                @if ($bier->submerken->isNotEmpty())
                    <ul>
                        @foreach ($bier->submerken as $subbier)
                            <li>{{ $subbier->naam }}</li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
    </div>
@endsection
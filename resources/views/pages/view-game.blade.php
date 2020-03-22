@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="back text-left" href="{{ route('home') }}">Back</a>
                <div class="card">
                    <div class="card-header">View Game <strong>{{ $game['title'] }}</strong></div>
                    <div class="iframe">{!! $game['iframe'] !!}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

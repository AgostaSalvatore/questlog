@extends('layouts.app')

@section('title', 'Lista Quest')

@section('content')

    @foreach ($quests as $quest)
        <div>
            <h2>{{ $quest->title }}</h2>
            <p>{{ $quest->description }}</p>
            <p>Stato: {{ $quest->status }}</p>
            <p>Priorità: {{ $quest->priority }}</p>
        </div>
    @endforeach

@endsection
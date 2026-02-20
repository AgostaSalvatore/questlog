@extends('layouts.app')

@section('title', 'Lista Quest')

@section('content')

    @forelse ($quests as $quest)
        <div>
            <h2>{{ $quest->title }}</h2>
            <p>{{ $quest->description }}</p>
            <p><b>Stato:</b> {{ $quest->status_label }}</p>
            <p><b>Priorità:</b> {{ $quest->priority }}</p>
        </div>
    @empty
        <p>Nessuna quest trovata</p>
    @endforelse

@endsection
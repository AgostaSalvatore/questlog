@extends('layouts.app')

@section('title', 'Dettaglio Quest')

@section('content')
    <h1>{{ $quest->title }}</h1>

    <p><b>Descrizione:</b> {{ $quest->description ?: '-' }}</p>
    <p><b>Stato:</b> {{ $quest->status_label }}</p>
    <p><b>Priorita:</b> {{ $quest->priority_first_letter_cap }}</p>

    <div style="display: flex; gap: 8px; margin-top: 16px;">
        <a href="{{ route('quests.index') }}" style="text-decoration: none;">
            <button type="button" class="btn-secondary">Torna alla lista</button>
        </a>

        <a href="{{ route('quests.edit', $quest) }}" style="text-decoration: none;">
            <button type="button">Modifica</button>
        </a>

        <form action="{{ route('quests.destroy', $quest) }}" method="POST" style="margin: 0;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Vuoi eliminare questa quest?')">Elimina</button>
        </form>
    </div>
@endsection

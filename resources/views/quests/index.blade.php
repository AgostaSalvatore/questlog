@extends('layouts.app')

@section('title', 'Lista Quest')

@section('content')

    <div style="margin-bottom: 16px;">
        <a href="{{ route('quests.create') }}" style="text-decoration: none; color: white;">
            <button type="button">Crea Quest</button>
        </a>
    </div>

    @forelse ($quests as $quest)
        <div style="border: 1px solid #e5e7eb; border-radius: 8px; padding: 12px; margin-bottom: 12px;">
            <h2>{{ $quest->title }}</h2>
            <p>{{ $quest->description }}</p>
            <p><b>Stato:</b> {{ $quest->status_label }}</p>
            <p><b>Priorità:</b> {{ $quest->priority_first_letter_cap }}</p>
            <a href="{{ route('quests.show', $quest) }}" style="text-decoration: none; color: white;">
                <button type="button">Vedi dettaglio</button>
            </a>
            <button type="button">
                <a href="{{ route('quests.edit', $quest) }}" style="text-decoration: none; color: white">Modifica</a></button>
            <form action="{{ route('quests.destroy', $quest) }}" style="margin-top: 10px;" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questa quest?')" style="text-decoration: none; color: red">Elimina</button>
            </form>
        </div>
    @empty
        <p>Nessuna quest trovata</p>
    @endforelse

@endsection
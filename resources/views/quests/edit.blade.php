@extends('layouts.app')

@section('title', 'Modifica Quest')

@section('content')
    <h1>Modifica Quest</h1>

    <form action="{{ route('quests.update', $quest->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Titolo</label>
            <input 
            type="text" 
            name="title" 
            id="title" 
            placeholder="Inserisci il titolo della quest"
            value="{{ old('title', $quest->title) }}"
            required>
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <input 
            type="text" 
            name="description" 
            id="description" 
            placeholder="Breve descrizione"
            value="{{ old('description', $quest->description) }}">
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Stato</label>
            <select name="status" id="status">
                <option value="pending">In attesa</option>
                <option value="in_progress">In corso</option>
                <option value="completed">Completata</option>
                <option value="failed">Fallita</option>
            </select>
        </div>

        <div class="form-group">
            <label for="priority">Priorità</label>
            <select name="priority" id="priority">
                <option value="low">Bassa</option>
                <option value="medium">Media</option>
                <option value="high">Alta</option>
                <option value="urgent">Urgente</option>
            </select>
        </div>

        <button type="submit">Crea Quest</button>
    </form>
@endsection
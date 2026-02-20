@extends('layouts.app')

@section('title', 'Crea Quest')

@section('content')
    <h1>Crea Quest</h1>

    <form action="{{ route('quests.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Inserisci il titolo della quest" required>
        </div>

        <div class="form-group">
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" placeholder="Breve descrizione">
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
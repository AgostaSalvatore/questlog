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
            <select name="status" id="status" >
                <option value="pending" {{ old('status', $quest->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ old('status', $quest->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ old('status', $quest->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="failed" {{ old('status', $quest->status) == 'failed' ? 'selected' : '' }}>Failed</option>
            </select>
        </div>

        <div class="form-group">
            <label for="priority">Priorità</label>
            <select name="priority" id="priority">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
                <option value="urgent">Urgent</option>
            </select>
        </div>

        <button type="submit">Modifica Quest</button>
    </form>
@endsection
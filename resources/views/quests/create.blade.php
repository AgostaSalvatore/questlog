@extends('layouts.app')

@section('title', 'Create Quest')


@section('content')
    <h1>Create Quest</h1>


    <form action="{{ route('quests.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Title</label>

            <input 
            type="text" 
            name="title" 
            id="title" 
            placeholder="Enter quest title"

            value="{{ old('title') }}"
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
            value="{{ old('description') }}">
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Stato</label>
            <select name="status" id="status">
                <option value="pending" {{ old('status', 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="in_progress" {{ old('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="failed" {{ old('status') == 'failed' ? 'selected' : '' }}>Failed</option>

            </select>
        </div>

        <div class="form-group">
            <label for="priority">Priority</label>

            <select name="priority" id="priority">
                <option value="low" {{ old('priority') == 'low' ? 'selected' : '' }}>Low</option>
                <option value="medium" {{ old('priority', 'medium') == 'medium' ? 'selected' : '' }}>Medium</option>
                <option value="high" {{ old('priority') == 'high' ? 'selected' : '' }}>High</option>
                <option value="urgent" {{ old('priority') == 'urgent' ? 'selected' : '' }}>Urgent</option>

            </select>
        </div>

        <button type="submit">Crea Quest</button>

    </form>
@endsection
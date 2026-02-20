@extends('layouts.app')

@section('title', 'Crea Quest')

@section('content')
    <h1>Crea Quest</h1>

    <form action="{{ route('quests.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titolo">
        <input type="text" name="description" placeholder="Descrizione">
        <select name="status" id="status">
            <option value="pending">In attesa</option>
            <option value="in_progress">In corso</option>
            <option value="completed">Completata</option>
            <option value="failed">Fallita</option>
        </select>
        <select name="priority" id="priority">
            <option value="low">Bassa</option>
            <option value="medium">Media</option>
            <option value="high">Alta</option>
            <option value="urgent">Urgente</option>
        </select>
        <button type="submit">Crea</button>
    </form>
@endsection
@extends('layouts.app')

@section('title', 'Liste des animaux')

@section('content')
    <h2>Les animaux du refuge</h2>

    <p>
        <a href="{{ route('animals.create') }}">Ajouter un animal</a>
    </p>

    @forelse ($animals as $animal)
        <x-animal-card :animal="$animal" />
    @empty
        <p>Aucun animal pour l’instant.</p>
    @endforelse
@endsection

@extends('layouts.app')

@section('title', 'Nos animaux')

@section('content')
    <div class="rc-page">
        <header class="rc-header">
            <img src="{{ asset('images/logo (1).png') }}" alt="RefugeConnect" class="rc-logo">
            <nav class="rc-nav">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('animals.create') }}">Ajouter un animal</a>
            </nav>
        </header>

        <section class="rc-hero">
            <h2>Nos animaux</h2>
        </section>

        <section class="rc-animals-list">
            @forelse ($animals as $animal)
                <x-animal-card :animal="$animal" />
            @empty
                <p>Aucun animal pour l’instant.</p>
            @endforelse
        </section>
    </div>
@endsection

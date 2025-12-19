@extends('layouts.app')

@section('title', 'Nos animaux')

@section('content')
    <div class="rc-page">
    <section class="rc-hero">
        <h1>Nos animaux</h1>
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

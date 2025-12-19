@extends('layouts.app')

@section('title', 'Nos animaux')

@section('content')
    <div class="rc-page">
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

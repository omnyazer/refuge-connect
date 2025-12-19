@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <div class="rc-page">
        <section class="rc-animal-detail">
            <h1>{{ $animal->name }}</h1>

            <div class="rc-animal-detail-body">
                <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}" class="rc-animal-detail-photo">

                <div class="rc-animal-detail-text">
                    <p><strong>Espèce :</strong> {{ $animal->species }}</p>
                    <p><strong>Âge :</strong> {{ $animal->age }} ans</p>
                    <p>{{ $animal->description }}</p>
                </div>
            </div>
        </section>
    </div>
@endsection

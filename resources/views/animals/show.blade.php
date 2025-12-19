@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <div class="rc-page">
        <section class="rc-animal-detail">
            <h2>{{ $animal->name }}</h2>

            <div class="rc-animal-detail-body">
                <img src="{{ $animal->photo }}" alt="{{ $animal->name }}" class="rc-animal-detail-photo">

                <div class="rc-animal-detail-text">
                    <p><strong>Espèce :</strong> {{ $animal->species }}</p>
                    <p><strong>Âge :</strong> {{ $animal->age }} ans</p>
                    <p>{{ $animal->description }}</p>
                </div>
            </div>
        </section>
    </div>
@endsection

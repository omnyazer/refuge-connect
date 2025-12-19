@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <h2>{{ $animal->name }}</h2>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>

    {{-- plus tard on affichera la vraie photo --}}
    <p><a href="{{ route('animals.index') }}">← Retour à la liste</a></p>
@endsection

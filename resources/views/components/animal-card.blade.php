<article class="rc-card">
    <a href="{{ route('animals.show', ['id' => $animal->id]) }}">
        <img src="{{ $animal->photo }}" alt="{{ $animal->name }}">
    </a>

    <h2>{{ $animal->name }}</h2>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p class="rc-card-description">{{ $animal->description }}</p>

    <div class="rc-card-actions">
        <a href="{{ route('animals.edit', ['id' => $animal->id]) }}">Modifier</a>
        <a href="{{ route('animals.delete', ['id' => $animal->id]) }}">Supprimer</a>
    </div>
</article>

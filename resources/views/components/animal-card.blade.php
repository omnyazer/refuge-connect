<article class="rc-card">
    <a href="{{ route('animals.show', ['id' => $animal->id]) }}">
        <img src="{{ $animal->photo }}" alt="{{ $animal->name }}">
    </a>

    <h3>{{ $animal->name }}</h3>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p class="rc-card-description">{{ $animal->description }}</p>

    <div class="rc-card-actions">
        <a href="{{ route('animals.edit', ['id' => $animal->id]) }}" class="rc-link-primary">Modifier</a>
        <a href="{{ route('animals.delete', ['id' => $animal->id]) }}" class="rc-link-danger">Supprimer</a>
    </div>
</article>

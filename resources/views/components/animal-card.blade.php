<article>
    <a href="{{ route('animals.show', ['id' => $animal->id]) }}">
        {{-- plus tard, remplace par une vraie image --}}
        <img src="{{ $animal->photo }}" alt="{{ $animal->name }}" style="max-width: 200px;">
    </a>

    <h3>{{ $animal->name }}</h3>
    <p>{{ $animal->species }} - {{ $animal->age }} ans</p>

    <p>
        <a href="{{ route('animals.edit', ['id' => $animal->id]) }}">Modifier</a>
        <a href="{{ route('animals.delete', ['id' => $animal->id]) }}">Supprimer</a>
    </p>
</article>

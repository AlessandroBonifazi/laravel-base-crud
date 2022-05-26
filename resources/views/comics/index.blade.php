@foreach ($comics as $comic)
    <div class="card">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h3>Titolo: {{ $comic->title }}</h3>
        <h3>Serie: {{ $comic->series }}</h3>
        <h3>Prezzo: {{ $comic->price }}€</h3>
        <h3>Data d'uscita: {{ $comic->sale_date }}</h3>
        <h3>Genere: {{ $comic->type }}</h3>
        <h3>Serie: {{ $comic->series }}</h3>
        <a href="{{ route('comics.show', $comic->id) }}">Details</a>
        <a href="{{route('comics.create')}}">new</a>
        <a href="{{route('comics.edit', $comic->id)}}">edit</a>
        <a href="{{route('comics.destroy', $comic->id)}}">delete</a>
    </div>
@endforeach
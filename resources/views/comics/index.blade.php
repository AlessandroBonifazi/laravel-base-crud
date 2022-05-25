@foreach ($comics as $comic)
    <div class="card">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h3>Titolo: {{ $comic->title }}</h3>
        <h3>Serie: {{ $comic->series }}</h3>
        <h3>Prezzo: {{ $comic->price }}€</h3>
        <h3>Data d'uscita: {{ $comic->sale_date }}</h3>
        <h3>Genere: {{ $comic->type }}</h3>
        <h3>Serie: {{ $comic->series }}</h3>
    </div>
@endforeach
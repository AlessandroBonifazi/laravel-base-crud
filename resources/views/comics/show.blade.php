<div class="card">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h3>Titolo: {{ $comic->title }}</h3>
        <h3>Serie: {{ $comic->series }}</h3>
        <h3>Prezzo: {{ $comic->price }}€</h3>
        <h3>Data d'uscita: {{ $comic->sale_date }}</h3>
        <h3>Genere: {{ $comic->type }}</h3>
        <h3>Serie: {{ $comic->series }}</h3>
        <a href="{{ route('comics.index') }}">Back</a>

        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
           @csrf
           @method('DELETE')
           Are you sure?
           <input type="submit" value="Delete">
        </form>
</div>
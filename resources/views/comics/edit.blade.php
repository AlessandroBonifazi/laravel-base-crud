<form action="{{route('comics.update', $comic->id)}}" method="POST">
    @csrf

    @method('PUT')

    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{$comic->title}}">
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{$comic->price}}">
    </div>

    <div>
        <label for="thumb">Image URL:</label>
        <input type="text" name="thumb" value="{{$comic->thumb}}">
    </div>

    <div>
        <label for="series">Series:</label>
        <input type="text" name="series" value="{{$comic->series}}">
    </div>

    <div>
        <label for="sale_date">Sale date:</label>
        <input type="text" name="sale_date" value="{{$comic->sale_date}}">
    </div>

    <div>
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{$comic->type}}">
    </div>

    <button type="submit">Edit Comic</button>
</form>
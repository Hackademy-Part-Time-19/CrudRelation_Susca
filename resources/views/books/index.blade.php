<x-layout>
    <h4>Elenco dei libri disponibili</h4>
    @foreach($books as $book)
    <div class="col-4">
        <div class="card" style="width: 20rem;">
            <img src="{{$book['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">{{$book->author}}</p>
                <p class="card-text">{{$book->price}}</p>
                <p class="card-text">{{$book->description}}</p>
                <a href="#" class="btn btn-primary">Details</a>
        </div>
    </div>

    @endforeach
</x-layout>

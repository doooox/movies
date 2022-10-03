@foreach ($movies as $movie)

    <h1><a href="{{ route('single-movie', ['id' => $movie->id]) }}">{{ $movie->title }}</a></h1>



@endforeach

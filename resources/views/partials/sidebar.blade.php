

            <div class="p-3">
              <h4 class="font-italic">Last viewed</h4>
              <ol class="list-unstyled mb-0">
                @foreach ($latestMovies as $latestmovie )
                <li><a href="{{ route('single-movie', ['id' => $movie->id]) }}">{{ $latestmovie->title }}</a></li>
                @endforeach
              </ol>
            </div>


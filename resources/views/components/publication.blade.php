<div class="card my-2 bg-light">
    <div class="card-body">
        @auth
            @if ($canUpdate === true )
                <a class="float-end btn btn-primary btn-sm"
                    href="{{ route('publication.edit', $publication->id) }}">Modifier</a>
                <form action="{{ route('publication.destroy', $publication->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Vouler vous vraiment supprimer la recette')"
                        class="mx-2 float-end btn btn-danger btn-sm">Supprimer</button>
                </form>
            @endif
        @endauth
        <blockquote class="blockquote mb-0">
            <h3>{{ $publication->titer }}</h3>
            <p> {{ $publication->body }}</p>
            @if (!is_null($publication->image))
                <footer class="blockquote-footer">
                    <img class="img-fluid" src="{{ asset('storage/' . $publication->image) }}"
                        alt="image">
                        <br>
                    <cite title="Source title">{{ $publication->created_at->format('d-m-Y') }}</cite>
                </footer>
            @endif

        </blockquote>
    </div>
</div>
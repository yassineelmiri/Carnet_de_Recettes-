<div class="col-sm-4">
    <div class="card text-start">
        <img class="card-img-top" src="https://picsum.photos/seed/picsum/200/300" alt="Title" />
        <div class="card-body">
            <h4 class="card-title">{{ $profile->name }}</h4>
            <p class="card-text">{{ Str::limit($profile->bio, 50) }}</p>
            <a href="{{ route('profiles.show', $profile->id) }}" class="stretched-link"></a>
        </div>
    </div>
</div>

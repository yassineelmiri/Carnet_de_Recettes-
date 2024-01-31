<div class="col-sm-4 my-4">
    <div class="card text-start">
        <img class="card-img-top" src="https://picsum.photos/seed/picsum/200/300" alt="Title" width="72" height="200"/>
        <div class="card-body">
            <h4 class="card-title">{{ $profile->name }}</h4>
            <p class="card-text">{{ Str::limit($profile->bio, 50) }}</p>
            <a href="{{ route('profiles.show', $profile->id) }}" class="stretched-link"></a>
        </div>  
        <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
            <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
                @method('DELETE')
                @csrf    
                <button class="btn btn-danger float-end" >Supprimer</button>
            </form>
        </div>
    </div>
</div>
 
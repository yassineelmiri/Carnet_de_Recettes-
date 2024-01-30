<x-master title="Profiles">

    <h3>Profiles</h3>
    <button type="button" class="btn btn-outline-success"><a href="{{ route('create') }}">Ajouter</a></button>
    <div class="row my-5">
        @foreach ($profiles as $profile)
            <x-profile-card :profile="$profile" />
        @endforeach
    </div>
    {{ $profiles->links() }}

</x-master>

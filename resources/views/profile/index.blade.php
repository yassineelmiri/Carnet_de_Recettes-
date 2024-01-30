<x-master title="Profiles">

    <h3>Profiles</h3>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Action</th>
        </tr>

        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->email }}</td>
                <td>{{ Str::limit($profile->bio, 50) }}</td>
                <td><a
                    
                    class="btn btn-primary"
                    href="{{ route('profiles.show',$profile->id) }}"
                    role="button"
                    >Afficher plus</a
                >
                </td>
            </tr>
        @endforeach
            {{$profiles->links()}}
    </table>

</x-master>

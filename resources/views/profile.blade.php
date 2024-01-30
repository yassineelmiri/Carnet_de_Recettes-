<x-master title="Profiles">

    <h3>Profiles</h3>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
        </tr>

        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->email }}</td>
                <td>{{ Str::limit($profile->bio, 50) }}</td>
            </tr>
        @endforeach
            {{$profiles->links()}}
    </table>

</x-master>

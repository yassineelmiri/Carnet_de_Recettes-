<x-master title="Publication">

    <h3>LES RECETTE</h3>
   <a  class="btn btn-primary mt-5 " href="{{ route('publication.create') }}">Créer nouveau recette</a>
    <div class="container w-75  mx-auto">
        <div class="row ">
            @foreach ($publications as $publication)
                <x-publication  :canUpdate="auth()->user()->id === $publication->profile_id" :publication="$publication"/>
            @endforeach
        </div>
    </div>
    {{ $publications->links() }}

</x-master>

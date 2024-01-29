<x-master title="Page Home">
    <x-alert type="warning">
        <strong>type 1</strong>
    </x-alert>

    <x-alert type="danger">
        <strong>type 2</strong>
    </x-alert>

    <x-alert type="success">
        <strong>type 3</strong>
    </x-alert>
    <h1>Bonjour Mr : yassine</h1>
    <h3>Profiles</h3>

    <x-index-user :users='$users' />

</x-master>
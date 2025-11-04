<x-layout>
    <x-slot:heading>Computers</x-slot:heading>
    <x-slot:content>
        <h1>Computers Page</h1>
        <ul>
            @foreach ($computers as $computer)
                <a href="/computers/{{ $computer['id'] }}">
                    <li> <b>{{ $computer['name'] }}</b> : Pays ${{ $computer['price'] }} </li>
                </a>
            @endforeach
        </ul>
    </x-slot:content>

</x-layout>

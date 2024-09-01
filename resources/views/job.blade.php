<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h1>Hewroo job</h1>

    <h2>{{ $job['title'] }}</h2>
    <h3>{{ $job['location'] }}</h3>
    <h4>{{ $job['salary'] }}</h4>
</x-layout>

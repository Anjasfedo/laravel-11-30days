<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <h1>Hewroo jobs</h1>
    @foreach ($jobs as $job)
    <li>
        <a href="/jobs/{{ $job['id'] }}"><strong>{{ $job['title'] }}</strong> - {{ $job['location'] }}</a>
    </li>
    @endforeach
</x-layout>

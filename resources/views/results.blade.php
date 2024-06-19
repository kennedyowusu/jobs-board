<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-wide-card :$job />
        @endforeach
    </div>
</x-layout>

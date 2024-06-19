@props(['job'])

<x-card-holder>

    <div>
        <x-job-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>

        <a href="{{ $job->url }}" target="_blank">
            <h3 class="font-bold text-xl mt-3">
                {{ $job->title }}
            </h3>
        </a>
        {{-- <p class="text-sm mt-4 text-gray-400">{{ $job->location }}</p> --}}
        <p class="text-sm text-gray-400 mt-auto">{{ $job->job_type }} - From ${{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag )
            <x-tag :tag="$tag" />
        @endforeach
    </div>

</x-card-holder>

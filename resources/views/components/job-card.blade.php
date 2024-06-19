@props(['job'])

<div
    class="
    p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-white/20 transition duration-300 ease-in-out
    transform hover:scale-105
">

    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8 group-hover:text-white/80 transition duration-150 ease-in-out
    ">
        <a href="{{ $job->url }}" target="_blank">
            <h3 class="text-xl font-bold">{{ $job->title }}</h3>
        </a>
        {{-- <p class="text-sm mt-4 text-gray-400">{{ $job->location }}</p> --}}
        <p class="text-sm mt-4
        text-gray-400 ">{{ $job->job_type }} - From ${{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">

        <div>
            @foreach($job->tags as $tag )
                <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>

        <x-job-logo :width="42" :height="42" :employer="$job->employer" />
    </div>
</div>

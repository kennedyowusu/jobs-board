<x-layout>
    <div class="space-y-10">

        {{-- SEARCH FORM --}}
        <section class="text-center pt-4">
            <h2 class="font-bold text-4xl">Land Your Next Job</h2>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
            </x-forms.form>
        </section>

        <section class="pt-6">
            <x-header>
                <h2 class="text-2xl font-semibold">Top Jobs</h2>
            </x-header>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 mt-6">
                @foreach($isFeatured as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>

        </section>

        <section>
            <x-header>Tags</x-header>

            <div class="mt-5 space-x-1">
                @foreach($tags as $tag )
                    <x-tag :tag="$tag" :link="route('jobs.index')" />
                @endforeach
            </div>

        </section>

        <section>
            <x-header>Recent Jobs</x-header>

            <div class="mt-5 space-y-5">
                @foreach($jobs as $job )
                    <x-wide-card :job="$job" />
                @endforeach
            </div>

        </section>

    </div>
</x-layout>

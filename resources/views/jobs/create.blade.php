<x-layout>
    <x-page-heading>Create New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Backend Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="$40,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="East Legon, Accra" />

        <x-forms.select label="Job Type" name="job_type">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://somejobs.com/jobs/frontend" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="is_feature" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />

        <x-forms.button>Publish Job</x-forms.button>
    </x-forms.form>
</x-layout>

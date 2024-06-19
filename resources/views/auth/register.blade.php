<x-layout>
    <x-page-heading>Create Account</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Full Name" name="name" />
        <x-forms.input label="Email Address" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />

        <x-forms.button>Register</x-forms.button>
    </x-forms.form>
</x-layout>

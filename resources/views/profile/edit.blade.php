<x-app-layout>
    <div class="bg-gray-50">
        <div class="container py-12">
            <section class="mb-12">
                <h1 class="text-3xl font-bold">Profile</h1>
            </section>
            <div class="max-w-2xl mx-auto flex flex-col gap-12">
                <x-card>@include('profile.partials.update-profile-information-form')</x-card>
                <x-card>@include('profile.partials.update-password-form')</x-card>
                <x-card>@include('profile.partials.delete-user-form')</x-card>
            </div>
        </div>
    </div>
</x-app-layout>

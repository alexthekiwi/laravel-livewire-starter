<x-app-layout>
    <div class="bg-gray-50 flex-grow">
        <div class="container py-12">
            <section class="mb-12">
                <h1 class="text-3xl font-bold">Hi {{ auth()->user()->first_name }}</h1>
            </section>
        </div>
    </div>
</x-app-layout>

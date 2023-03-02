<x-app-layout>
    <div class="bg-gray-50 flex-grow">
        <div class="container py-12">
            <section class="mb-12">
                <h1 class="text-3xl font-bold">Register</h1>
            </section>

            <section class="max-w-2xl mx-auto flex flex-col gap-12">
                <x-card>
                    <x-flash :message="session('status')" class="mb-6"/>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <fieldset>
                            <label>
                                Name
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                @error('name')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                            <label>
                                Email
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                                @error('email')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                            <label>
                                Password
                                <input type="password" name="password" id="password" required autofocus autocomplete="new-password">
                                @error('password')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                            <label>
                                Confirm password
                                <input type="password" name="password_confirmation" id="password_confirmation" required autofocus autocomplete="new-password">
                                @error('password_confirmation', 'updatePassword')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                        </fieldset>

                        <div class="flex justify-end items-center gap-6">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                Already registered?
                            </a>
                            <x-button type="submit">Register</x-button>
                        </div>
                    </form>
                </x-card>
            </section>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="bg-gray-50 flex-grow">
        <div class="container py-12">
            <section class="mb-12">
                <h1 class="text-3xl font-bold">Login</h1>
            </section>

            <div class="max-w-2xl mx-auto flex flex-col gap-12">
                <x-card>
                    <x-flash :message="session('status')" class="mb-6"/>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset>
                            <label>
                                Email
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                                @error('email')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                            <label>
                                Password
                                <input type="password" name="password" id="password" required autofocus autocomplete="password">
                                @error('password')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                            <label for="remember_me" class="inline-flex flex-row items-center gap-2">
                                <input id="remember_me" type="checkbox" name="remember">
                                <span>Remember me</span>
                            </label>
                        </fieldset>

                        <div class="flex justify-end items-center gap-6">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            <x-button type="submit">Login</x-button>
                        </div>
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="bg-gray-50 flex-grow">
        <div class="container py-12">
            <section class="mb-12">
                <h1 class="text-3xl font-bold">Password reset</h1>
            </section>

            <div class="max-w-2xl mx-auto flex flex-col gap-12">
                <x-card>
                    <x-flash :message="session('status')" class="mb-6"/>

                    <p class="mb-8">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <fieldset>
                            <label>
                                Email
                                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                                @error('email')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </label>
                        </fieldset>

                        <div class="flex justify-end items-center gap-6">
                            <x-button type="submit">Reset password</x-button>
                        </div>
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>

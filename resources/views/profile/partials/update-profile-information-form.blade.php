<section class="flex flex-col">
    <header class="mb-8">
        <h2 class="font-bold text-lg">Profile information</h2>
        <p class="text-sm">Update your account's profile information and email address.</p>
    </header>

    @if (session('status') === 'profile-updated')
        <x-flash message="Profile updated!" class="mb-6"/>
    @endif

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('put')

        <fieldset>
            <label>
                Name
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                @error('name')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </label>
            <label>
                Email
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required autofocus autocomplete="email">
                @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </label>
        </fieldset>

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm text-gray-800 dark:text-gray-200">
                    Your email address is unverified.

                    <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        Click here to re-send the verification email.
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                        A new verification link has been sent to your email address.
                    </p>
                @endif
            </div>
        @endif

        <div class="flex justify-end gap-6">
            <x-button type="submit">Save</x-button>
        </div>
    </form>
</section>

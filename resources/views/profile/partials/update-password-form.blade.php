<section>
    <header class="mb-8">
        <h2 class="font-bold text-lg">Update Password</h2>
        <p class="text-sm">Ensure your account is using a long, random password to stay secure.</p>
    </header>

    @if (session('status') === 'password-updated')
        <x-flash message="Password saved!" class="mb-6"/>
    @endif

    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <fieldset>
            <label>
                Current password
                <input type="password" name="current_password" id="current_password" required autofocus autocomplete="current_password">
                @error('current_password', 'updatePassword')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </label>
            <label>
                New password
                <input type="password" name="password" id="password" required autofocus autocomplete="new-password">
                @error('password', 'updatePassword')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </label>
            <label>
                Confirm new password
                <input type="password" name="password_confirmation" id="password_confirmation" required autofocus autocomplete="new-password">
                @error('password_confirmation', 'updatePassword')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </label>
        </fieldset>

        <div class="flex justify-end gap-4">
            <x-button type="submit">Save</x-button>
        </div>
    </form>
</section>

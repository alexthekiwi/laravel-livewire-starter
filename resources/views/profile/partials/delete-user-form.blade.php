<section class="space-y-6">
    <header>
        <h2 class="font-bold text-lg">Delete Account</h2>
        <p class="text-sm">Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.</p>
    </header>

    <div class="flex justify-end">
        <x-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            status="danger"
        >
            Delete Account
        </x-button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="font-bold">Are you sure you want to delete your account?</h2>

            <p class="text-sm mt-2">Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>

            <label class="mt-6">
               Password
                <input type="password" name="password" id="password" required autofocus autocomplete="password">
                @error('password', 'userDeletion')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </label>

            <div class="mt-6 flex justify-end gap-6">
                <x-button status="secondary" type="button" x-on:click="$dispatch('close')">Cancel</x-button>
                <x-button status="danger" type="submit" x-on:click="$dispatch('close')">Delete Account</x-button>
            </div>
        </form>
    </x-modal>
</section>

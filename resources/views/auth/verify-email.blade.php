<x-app-layout>
    <div class="bg-gray-50 flex-grow">
        <div class="container py-12">
            <header class="mb-12">
                <h1 class="text-3xl font-bold">Verify email</h1>
            </header>

            <section class="max-w-2xl mx-auto flex flex-col gap-12">
                <x-card>
                    @if (session('status') == 'verification-link-sent')
                        <x-flash message="A new verification link has been sent to the email address you provided during registration." class="mb-6"/>
                    @endif

                    <p class="mb-6">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                    <div class="flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <x-button type="submit">
                                Resend Verification Email
                            </x-button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="underline">
                                Log Out
                            </button>
                        </form>
                    </div>
                </x-card>
            </section>
        </div>
    </div>
</x-app-layout>



<x-app-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-app-layout>

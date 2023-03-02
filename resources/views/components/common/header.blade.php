<header class="sticky top-0 w-full bg-gray-600">
    <nav class="container flex justify-between align-center gap-8 py-6 text-white">
        <a href="{{ route('home') }}" class="font-bold">{{ config('app.name') }}</a>

        <div class="flex items-center gap-4 text-sm">
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('profile.edit') }}">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endguest
        </div>
    </nav>
</header>

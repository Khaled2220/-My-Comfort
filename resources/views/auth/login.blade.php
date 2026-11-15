<x-guest-layout>

    <div class="text-center mb-7">

        <h1 class="text-3xl font-bold text-[#541C2B]">
            Welcome Back!
        </h1>

        <p class="text-sm text-gray-600 mt-2">
            Login to continue your journey
        </p>

    </div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-5">

            <x-input-label for="email" value="Email " class="text-[#541C2B] font-semibold"/>

            <x-text-input id="email" class="block mt-2 w-full rounded-xl border-[#D8C5A9] focus:border-[#541C2B] focus:ring-[#541C2B]" type="email" name="email" :value="old('email')" placeholder="Enter your email" required autofocus autocomplete="username"/>

            <x-input-error :messages="$errors->get('email')" class="mt-2" />

        </div>

        <!-- Password -->
        <div class="mb-5">

            <x-input-label for="password" value="Password" class="text-[#541C2B] font-semibold" />

            <x-text-input id="password" class="block mt-2 w-full rounded-xl border-[#D8C5A9] focus:border-[#541C2B] focus:ring-[#541C2B]" type="password" name="password" placeholder="Enter your password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mb-6">

            <label class="inline-flex items-center gap-2">

                <input type="checkbox" name="remember" class="rounded border-gray-300 text-[#541C2B] focus:ring-[#541C2B]" >

                <span class="text-sm text-gray-600">
                    Remember Me
                </span>

            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-[#541C2B] hover:underline" >
                    Forgot Password?
                </a>
            @endif

        </div>

        <!-- Login Button -->
        <button type="submit" style="background-color: #A52A2A;" onmouseover="this.style.backgroundColor='#8B2323'" onmouseout="this.style.backgroundColor='#A52A2A'" class="w-full text-white font-bold py-3 rounded-xl transition duration-300">
            Login
        </button>

        <!-- Register Link -->
        <p class="text-center text-sm text-gray-600 mt-6">

            Don't have an account?

            <a href="{{ route('register') }}" class="font-bold text-[#541C2B] hover:underline" >
                Create Account
            </a>

        </p>

    </form>
</x-guest-layout>

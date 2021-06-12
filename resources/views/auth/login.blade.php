<x-guest>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <div class="text-4xl text-center mb-4 font-bold">
                    DERCS
                </div>
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="text-2xl text-center mb-4">
                Login
            </div>

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Select Role Option --> 
            <div class="mt-4">
                <x-label for="role_id" :value="__('Login as:')" />
                <select name="role_id" id="selection" class="block mt-1 w-full border-gray-300">
                    <option value="rider">Rider/Courier</option>
                    <option value="customer">Customer</option>
                    <option value="staff">Admin</option>
                </select>
            </div>        

            <div class="flex items-center justify-end mt-4">
                <!-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <x-button class="ml-3 self-center">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<x-guest>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <div class="text-4xl text-center mb-4 font-bold">
                    DERCS
                </div>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('registerasrider') }}">
            @csrf

            <div class="text-2xl text-center mb-4">
                Rider Registration Details
            </div>

            <!-- Name -->
            <div>
                <x-label for="riderName" :value="__('Name')" />

                <x-input id="riderName" class="block mt-1 w-full" type="text" name="riderName" :value="old('riderName')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="riderEmail" :value="__('Email Address')" />

                <x-input id="riderEmail" class="block mt-1 w-full" type="email" name="riderEmail" :value="old('riderEmail')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="riderPassword" :value="__('Password')" />

                <x-input id="riderPassword" class="block mt-1 w-full"
                                type="password"
                                name="riderPassword"
                                required autocomplete="new-password" />
            </div>

            <!-- License Number -->
            <div class="mt-4">
                <x-label for="riderLicense" :value="__('License Number')" />

                <x-input id="riderLicense" class="block mt-1 w-full" type="text" name="riderLicense" :value="old('riderLicense')" required autofocus />
            </div>

            <!-- Phone number -->
            <div class="mt-4">
                <x-label for="riderPhone" :value="__('Phone Number')" />

                <x-input id="riderPhone" class="block mt-1 w-full" type="text" name="riderPhone" :value="old('riderPhone')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

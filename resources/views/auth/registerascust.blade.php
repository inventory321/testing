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

        <form method="POST" action="{{ route('registerascust') }}">
            @csrf

            <div class="text-2xl text-center mb-4">
                Customer Registration Details
            </div>

            <!-- Name -->
            <div>
                <x-label for="custName" :value="__('Name')" />

                <x-input id="custName" class="block mt-1 w-full" type="text" name="custName" :value="old('custName')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="custEmail" :value="__('Email Address')" />

                <x-input id="custEmail" class="block mt-1 w-full" type="email" name="custEmail" :value="old('custEmail')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="custPassword" :value="__('Password')" />

                <x-input id="custPassword" class="block mt-1 w-full"
                                type="password"
                                name="custPassword"
                                required autocomplete="new-password" />
            </div>

            <!-- Address Street -->
            <div class="mt-4">
                <x-label for="custStreet" :value="__('Address Street')" />

                <x-input id="custStreet" class="block mt-1 w-full" type="text" name="custStreet" :value="old('custStreet')" required />
            </div>

            <!-- Address Postcode -->
            <div class="mt-4">
                <x-label for="custPostcode" :value="__('Address Postcode')" />

                <x-input id="custPostcode" class="block mt-1 w-full" type="text" name="custPostcode" :value="old('custPostcode')" required />
            </div>

            <!-- Address City -->
            <div class="mt-4">
                <x-label for="custCity" :value="__('Address City')" />

                <x-input id="custCity" class="block mt-1 w-full" type="text" name="custCity" :value="old('custCity')" required />
            </div>

            <!-- Address State -->
            <div class="mt-4">
                <x-label for="custState" :value="__('Address State')" />

                <x-input id="custState" class="block mt-1 w-full" type="text" name="custState" :value="old('custState')" required />
            </div>

            <!-- Phone number -->
            <div class="mt-4">
                <x-label for="custPhone" :value="__('Phone Number')" />

                <x-input id="custPhone" class="block mt-1 w-full" type="text" name="custPhone" :value="old('custPhone')" required />
            </div>

            <!-- Hidden Customer Status -->
            <div>
                <x-label for="custStatus"/>

                <x-input id="custStatus" class="block mt-1 w-full" type="hidden" name="custStatus" :value="old('custStatus')" value="Active" required autofocus />
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

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="ii">
            <h1>My Certificates Com</h1>

        </div>
        
        <!-- Name -->
        <div>
            <x-input-label for="First_Name" :value="__('First_Name')" />
            <x-text-input id="First_Name" class="block mt-1 w-full" type="text" name="First_Name" :value="old('First_Name')" required autofocus autocomplete="First_Name" />
            <x-input-error :messages="$errors->get('First_Name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="Family_Name" :value="__('Family_Name')" />
            <x-text-input id="Family_Name" class="block mt-1 w-full" type="text" name="Family_Name" :value="old('Family_Name')" required autofocus autocomplete="Family_Name" />
            <x-input-error :messages="$errors->get('Family_Name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="Registration_number" :value="__('Registration_number')" />
            <x-text-input id="Registration_number" class="block mt-1 w-full" type="number" name="Registration_number" :value="old('Registration_number')" required autofocus autocomplete="Registration_number" />
            <x-input-error :messages="$errors->get('Registration_number')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

    </form>
</x-guest-layout>
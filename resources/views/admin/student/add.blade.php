<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-6">{{ __('Register') }}</h2>
            <form method="POST" action="{{ route('admin.student.store') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- Batch -->
                <div class="mb-4">
                    <x-input-label for="batch" :value="__('Batch')" />
                    <x-text-input id="batch" class="block mt-1 w-full" type="text" name="batch" :value="old('batch')" required autocomplete="batch" />
                    <x-input-error :messages="$errors->get('batch')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between">
                    <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button>
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

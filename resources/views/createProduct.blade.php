<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('create-product') }}">
        @csrf

        <!-- Name -->
            <div class="mt-4 mb-4">
                <x-label for="name" :value="__('Product Name')" />

                <x-input id="name" class="block mt-1 mb-1 w-full text-lg" type="name" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Description -->
            <div class="mt-4 text-sm">
                <x-label for="description" :value="__('Description')" />

                <x-input id="description" class="block mt-1 mb-1 w-full text-sm"
                         type="text"
                         name="description"
                         required autocomplete="description" />
            </div>
            <div class="mt-4 mb-4">
                <x-label for="price" :value="__('Price')" />

                <x-input id="price" class="block mt-1 mb-1 w-full"
                         type="number"
                         name="price"
                         step="any"
                         required autocomplete="price" />
            </div>

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

                <x-button class="ml-4">
                    {{ __('Create Product') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

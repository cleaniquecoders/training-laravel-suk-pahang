<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New User') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-3xl mx-auto py-10 sm:px-6 lg:px-8 bg-white shadow rounded-md my-4">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="col-span-6 sm:col-span-4 my-4">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" name="name" value="{{ old('name') }}" required />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4 my-4">
                    <x-label for="email" value="{{ __('E-mail') }}" />
                    <x-input id="email" type="email" class="mt-1 block w-full" name="email" value="{{ old('email') }}" required />
                    <x-input-error for="email" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4 my-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" type="password" class="mt-1 block w-full" name="password" required />
                    <x-input-error for="password" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4 my-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" type="password" class="mt-1 block w-full" name="password_confirmation" required />
                    <x-input-error for="password_confirmation" class="mt-2" />
                </div>

                <div class="flex justify-end">
                    <x-button>Add</x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

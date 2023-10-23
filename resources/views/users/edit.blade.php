<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User Details') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-3xl mx-auto py-10 sm:px-6 lg:px-8 bg-white shadow rounded-md my-4">
            <form action="{{ route('users.update', $user) }}" method="POST">
                @csrf @method('PUT')

                <div class="col-span-6 sm:col-span-4 my-4">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" name="name" value="{{ $user->name }}" required autocomplete="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="flex justify-end">
                    <x-button>Update</x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

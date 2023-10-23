<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{ $users->links() }}
            <ol>
                @foreach ($users as $user)
                    <li>
                        {{-- npm run dev --}}
                        <a
                        class="hover:underline hover:text-red-700"
                        href="{{ route('users.show', $user) }}">
                        {{ $user->name }}
                        </a>
                    </li>
                @endforeach
            </ol>
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>

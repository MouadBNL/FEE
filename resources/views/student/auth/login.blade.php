<x-layouts.guest-layout>
    <div class="h-screen w-screen bg-gray-100 flex items-center justify-center p-4">


        <x-card title="Connexion" class="w-full md:w-2/3 lg:w-1/3">
            <form action="{{ route('student.login.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="text-gr-600 pb-1">Email</label>
                    <x-input name="email" type="email" required placeholder="abc@efd.com" />
                </div>
                <div class="mb-6">
                    <label for="email" class="text-gr-600 pb-1">Password</label>
                    <x-input name="password" type="password" required placeholder="password" />
                </div>
                <div class="flex justify-end">
                    <x-button>Connexion</x-button>
                </div>
            </form>
        </x-card>

    </div>
</x-layouts.guest-layout>

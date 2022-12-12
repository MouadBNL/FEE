<x-layouts.guest-layout>
    <div class="h-screen bg-gray-100 flex items-center justify-center p-4">


        <x-card title="Créer un compte étudiant" class="w-full md:w-2/3 lg:w-1/3">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="text-gr-600 pb-1">Nom et Prénom</label>
                    <x-input name="name" type="text" required placeholder="John Doe" />
                </div>
                <div class="mb-4">
                    <label for="email" class="text-gr-600 pb-1">Email</label>
                    <x-input name="email" type="email" required placeholder="abc@efd.com" />
                </div>
                <div class="mb-6">
                    <label for="password" class="text-gr-600 pb-1">Mot de passe</label>
                    <x-input name="password" type="password" required placeholder="password" />
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="text-gr-600 pb-1">Confirmer votre mot de passe</label>
                    <x-input name="password_confirmation" type="password" required placeholder="password" />
                </div>
                <div class="flex justify-end">
                    <x-button>Créer</x-button>
                </div>
            </form>
        </x-card>

    </div>
</x-layouts.guest-layout>
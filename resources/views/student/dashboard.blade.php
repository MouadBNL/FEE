<x-layouts.auth-layout>
    <section class="grid grid-cols-4 gap-8 container">

        <div class="col-span-1">
            <div class="card">
                <div class="pt-14 pb-8 px-8 border-b border-gr-100">
                    <div class="mx-auto h-32 w-32 rounded-full bg-gr-100 border border-primary aspect-square mb-8">
                        {{-- Image profile --}}
                    </div>
    
                    <h3 class="text-center text-lg font-medium mb-2">{{ auth()->user()->name }}</h3>
                    <p class="text-center text-base font-semibold text-gr-400">Genie Informatique 4eme</p>
    
                </div>
                <div class="py-8 px-8 flex justify-center">
                    <a class="text-center text-primary font-bold text-sm" href="#">Voir mon profil</a>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <x-card title="Offre d'emploi" class="min-h-screen">
                <p>Display job offers here !</p>
            </x-card>
        </div>
        <div class="col-span-1">
            <x-card title="Message">
                <p>Display messages here !</p>
            </x-card>
        </div>
    </section>
</x-layouts.auth-layout>

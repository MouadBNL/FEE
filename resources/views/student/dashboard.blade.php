<x-layouts.auth-layout page-title="Dashboard | FEE7" page-name="Dashboard">
    <section class="grid grid-cols-4 gap-8 container my-12">

        <div class="col-span-1">
            <div class="card">
                <div class="pt-14 pb-8 px-8 border-b border-gr-100">
                    <div class="mx-auto h-32 w-32 rounded-full bg-gr-100 border border-primary aspect-square mb-8">
                        {{-- Image profile --}}
                    </div>
    
                    <h3 class="h3 text-center">{{ auth()->user()->name }}</h3>
                    <h4 class="h4 text-center">Genie Informatique 4eme</h4>
    
                </div>
                <div class="py-8 px-8 flex justify-center">
                    <a class="link" href="{{ route('myprofile') }}">Voir mon profil</a>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <x-card title="Offres d'emploi" class="min-h-screen">
                <p>Display job offers here !</p>
            </x-card>
        </div>
        <div class="col-span-1">
            <x-recent-messages/>
        </div>
    </section>
</x-layouts.auth-layout>

<x-layouts.auth-layout page-title="Entreprise | FEE7" page-name="Entreprise">
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
            @foreach($companies as $company)
                <article class="bg-white border border-gr-100 rounded-md shadow-sm p-4 mb-8 flex items-start  gap-4">
                    <img class="block h-16 w-16 object-cover rounded-full shrink-0 grow-0" src="{{ $company->picture ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png' }}" alt="">

                    <div class="w-full">
                        <h4 class="font-bold">{{ $company->name }}</h4>
                        <p class="text-sm text-gray-600">{{ $company->profile->industry }} - Spécialités: {{ join(", ", $company->profile->specialties ?? ["non défini"]) }}</p>
                        <p class="text-sm text-gray-600">{{ $company->profile->founding_year }} - {{ $company->profile->company_size }}</p>
                    </div>

                    <a href="{{ route('show-company', $company->id) }}" class="bg-primary hover:bg-primary-dark-1 transition text-white px-4 py-2 rounded cursor-pointer shrink-0 grow-0" type="submit" value="Connexion">
                        Profil
                    </a>
                </article>
            @endforeach
            <div>
                {{ $companies->links() }}
            </div>
        </div>
        <div class="col-span-1">
            <x-recent-messages/>
        </div>
    </section>
</x-layouts.auth-layout>

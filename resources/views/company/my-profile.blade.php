<x-layouts.auth-layout :page-title="($edit ? 'Mon profil' : $user->name) . ' | FEE7'" :page-name="$edit ? 'Mon profil' : $user->name">

    <section class="container">
        <div class=" mt-12 py-20 bg-gray-500 flex justify-center rounded">
            <div class="text-white">
                <div class="h-32 w-32 rounded-full bg-gray-50 mx-auto">
                </div>
                <h2 class="mt-5 text-center text-lg font-medium">{{ $user->name }}</h2>
                <h3 class="mt-2 text-center">IT Services and IT Consulting</h3>
                @if($user->profile->company_size && !empty($user->profile->company_size))
                <hr class="mt-5 mb-5 bg-gr-400 text-gr-400 border-gr-400">
                <h2 class="mt-5 text-center text-lg font-medium text-gray-50">{{ $user->profile->company_size }}</h2>
                <h3 class="mt-2 text-center text-gray-200">employés</h3>
                @endif
            </div>
        </div>
    </section>

    <section class="grid grid-cols-4 gap-8 container my-12">

        <div class="col-span-1">
            <x-card title="À propos" class="relative">
                <div class="grid grid-cols-1 gap-y-4">
                    @if($user->profile->industry && !empty($user->profile->industry))
                        <div>
                            <h5 class="text-sm text-gr-600">Industrie</h5>
                            <p class="text-sm  font-semibold text-gr-800">{{ $user->profile->industry }}</p>
                        </div>
                    @endif
                    @if($user->profile->company_size && !empty($user->profile->company_size))
                        <div>
                            <h5 class="text-sm text-gr-600">Taille de l'entreprise</h5>
                            <p class="text-sm  font-semibold text-gr-800">{{ $user->profile->company_size }} employés</p>
                        </div>
                    @endif
                    @if($user->profile->founding_year && !empty($user->profile->founding_year))
                        <div>
                            <h5 class="text-sm text-gr-600">Fondée</h5>
                            <p class="text-sm  font-semibold text-gr-800">{{ $user->profile->founding_year }}</p>
                        </div>
                    @endif
                    @if($user->profile->address && !empty($user->profile->address))
                        <div>
                            <h5 class="text-sm text-gr-600">Adresse</h5>
                            <p class="text-sm  font-semibold text-gr-800">{{ $user->profile->address }}</p>
                        </div>
                    @endif
                    @if($user->profile->specialties && !empty($user->profile->specialties))
                        <div>
                            <h5 class="text-sm text-gr-600">Spécialitées</h5>
                            <p class="text-sm  font-semibold text-gr-800">{{ implode(', ', $user->profile->specialties) }}</p>
                        </div>
                    @endif
                </div>

                @if($edit)
                <div class="absolute top-4 right-4">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-company-about></edit-company-abo>
                        </div>
                    </edit-button>
                </div>
                @endif
            </x-card>
        </div>
        <div class="col-span-3">
            <x-card title="Description" class="relative">
                @if($user->profile->description)
                <div class="whitespace-pre-line text-gr-600"> {{ $user->profile->description }}</div>
                @else
                    <span class="text-gr-600">Pas de description spécifiées</span>
                @endif

                @if($edit)
                <div class="absolute top-4 right-4">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-company-description></edit-company-description>
                        </div>
                    </edit-button>
                </div>
                @endif
            </x-card>
        </div>
    </section>
</x-layouts.auth-layout>

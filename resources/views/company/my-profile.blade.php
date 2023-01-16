<x-layouts.auth-layout :page-title="($edit ? 'Mon profil' : $user->name) . ' | FEE7'" :page-name="$edit ? 'Mon profil' : $user->name">

    <section class="container">
        <div class="mt-12 bg-white border border-gray-200 shadow-sm rounded overflow-hidden">
            <div class="py-20 bg-black flex justify-center relative">
                @if($user->profile->banner)
                <img class="absolute inset-0 object-cover w-full h-full opacity-20" src="{{ $user->profile->banner }}" />
                @endif
                <div class="text-white z-50">
                    <div class="h-32 w-32 rounded-lg bg-gray-50 mx-auto overflow-hidden border-2 border-primary-light-1">
                        <img src="{{ $user->picture ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png' }}" alt="profile picture" />
                    </div>
                    <h2 class="mt-5 text-center text-lg font-medium">{{ $user->name }}</h2>
                    @if($user->profile->industry && !empty($user->profile->industry))
                    <h3 class="mt-2 text-center">{{ $user->profile->industry }}</h3>
                    @endif
                    @if($user->profile->company_size && !empty($user->profile->company_size))
                    <hr class="mt-5 mb-5 bg-gr-400 text-gr-400 border-gr-400">
                    <h2 class="mt-5 text-center text-lg font-medium text-gray-50">{{ $user->profile->company_size }}</h2>
                    <h3 class="mt-2 text-center text-gray-200">employés</h3>
                    @endif
                </div>
                @if($edit)
                <div class="absolute top-4 right-4 border-white border rounded">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-user-info>
                            </edit-user-info>
                        </div>
                    </edit-button>
                </div>
                @endif
            </div>
            @if(($user->profile->linkedin && !empty($user->profile->linkedin)) || ($user->profile->website && !empty($user->profile->website)))
            <div class="flex items-center justify-between px-8 py-4">
                @if($user->profile->linkedin && !empty($user->profile->linkedin))
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="w-5 h-5">
                        <path d="M29.63.001H2.362C1.06.001 0 1.034 0 2.306V29.69C0 30.965 1.06 32 2.362 32h27.27C30.937 32 32 30.965 32 29.69V2.306C32 1.034 30.937.001 29.63.001z" fill="#0177b5" />
                        <path d="M4.745 11.997H9.5v15.27H4.745zm2.374-7.6c1.517 0 2.75 1.233 2.75 2.75S8.636 9.9 7.12 9.9a2.76 2.76 0 0 1-2.754-2.753 2.75 2.75 0 0 1 2.753-2.75m5.35 7.6h4.552v2.087h.063c.634-1.2 2.182-2.466 4.5-2.466 4.806 0 5.693 3.163 5.693 7.274v8.376h-4.743V19.84c0-1.77-.032-4.05-2.466-4.05-2.47 0-2.85 1.93-2.85 3.92v7.554h-4.742v-15.27z" fill="#fff" /></svg>
                    <a class="text-gray-600 text-sm font-medium hover:text-gray-800 hover:underline" href="{{ $user->profile->linkedin }}">{{ $user->profile->linkedin }}</a>
                </div>
                @endif
                @if($user->profile->website && !empty($user->profile->website))
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                    </svg>
                    <a class="text-gray-600 text-sm font-medium hover:text-gray-800 hover:underline" href="{{ $user->profile->website }}">{{ $user->profile->website }}</a>
                </div>
                @endif
            </div>
            @endif
        </div>
    </section>

    <section class="grid grid-cols-4 gap-8 container my-12">

        <div class="col-span-1">
            <x-card title="À propos" class="relative">
                <div class="grid grid-cols-1 gap-y-4">
                    @if($user->profile->contact_phone && !empty($user->profile->contact_phone))
                    <div>
                        <h5 class="text-sm text-gr-600">Numéro de contact</h5>
                        <a href="{{ $user->profile->contact_phone }}" target="_blank" class="text-sm  font-semibold text-gr-800">{{ Str::limit($user->profile->contact_phone, 30) }}</a>
                    </div>
                    @endif
                    @if($user->profile->contact_email && !empty($user->profile->contact_email))
                    <div>
                        <h5 class="text-sm text-gr-600">Email de contact</h5>
                        <a href="{{ $user->profile->contact_email }}" target="_blank" class="text-sm  font-semibold text-gr-800">{{ Str::limit($user->profile->contact_email, 30) }}</a>
                    </div>
                    @endif
                    @if($user->profile->website && !empty($user->profile->website))
                    <div>
                        <h5 class="text-sm text-gr-600">Site web</h5>
                        <a href="{{ $user->profile->website }}" target="_blank" class="text-sm  font-semibold text-gr-800">{{ Str::limit($user->profile->website, 30) }}</a>
                    </div>
                    @endif
                    @if($user->profile->linkedin && !empty($user->profile->linkedin))
                    <div>
                        <h5 class="text-sm text-gr-600">Linkedin</h5>
                        <a href="{{ $user->profile->linkedin }}" target="_blank" class="text-sm  font-semibold text-gr-800">{{ Str::limit($user->profile->linkedin, 30) }}</a>
                    </div>
                    @endif
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
                            <edit-company-about>
                                </edit-company-abo>
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

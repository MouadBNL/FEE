<x-layouts.auth-layout>
    <section class="grid grid-cols-4 gap-8 container">
        <div class="col-span-1 relative">
            <div class="sticky top-14">
                <div class="card mb-8">
                    <div class="pt-14 pb-8 px-8 border-b border-gr-100 relative">
                        <div class="mx-auto h-32 w-32 rounded-full bg-gr-100 border border-primary aspect-square mb-8">
                            {{-- Image profile --}}
                        </div>

                        <h3 class="h3 text-center">{{ auth()->user()->name }}</h3>
                        <h4 class="h4 text-center">Genie Informatique 4eme</h4>

                        @auth
                        <div class="absolute top-4 right-4">
                            <edit-button>
                                <div class="w-full md:2/3 lg:w-1/3">
                                    <edit-user-info></edit-user-info>
                                </div>
                            </edit-button>
                        </div>
                        @endauth
                    </div>
                    <div class="py-8 px-8 grid grid-cols-1 gap-y-4">
                        {{-- <div class="flex items-center">
                            <svg class="mr-4" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.875 1.5625H3.12012C2.26074 1.5625 1.5625 2.27051 1.5625 3.13965V21.8604C1.5625 22.7295 2.26074 23.4375 3.12012 23.4375H21.875C22.7344 23.4375 23.4375 22.7295 23.4375 21.8604V3.13965C23.4375 2.27051 22.7344 1.5625 21.875 1.5625ZM8.17383 20.3125H4.93164V9.87305H8.17871V20.3125H8.17383ZM6.55273 8.44727C5.5127 8.44727 4.67285 7.60254 4.67285 6.56738C4.67285 5.53223 5.5127 4.6875 6.55273 4.6875C7.58789 4.6875 8.43262 5.53223 8.43262 6.56738C8.43262 7.60742 7.59277 8.44727 6.55273 8.44727ZM20.3271 20.3125H17.085V15.2344C17.085 14.0234 17.0605 12.4658 15.4004 12.4658C13.7109 12.4658 13.4521 13.7842 13.4521 15.1465V20.3125H10.21V9.87305H13.3203V11.2988H13.3643C13.7988 10.4785 14.8584 9.61426 16.4355 9.61426C19.7168 9.61426 20.3271 11.7773 20.3271 14.5898V20.3125Z" fill="#A3A4A4" />
                            </svg>
                            <a class="text-sm text-gr-400 font-medium" href="#">linkdin.com/loremipsum...</a>
                        </div>
                        <div class="flex items-center">
                            <svg class="mr-4" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.0938 1.5625H3.90625C2.6123 1.5625 1.5625 2.6123 1.5625 3.90625V21.0938C1.5625 22.3877 2.6123 23.4375 3.90625 23.4375H21.0938C22.3877 23.4375 23.4375 22.3877 23.4375 21.0938V3.90625C23.4375 2.6123 22.3877 1.5625 21.0938 1.5625ZM15.1025 20.2979C14.6924 20.3711 14.541 20.1172 14.541 19.9072C14.541 19.6436 14.5508 18.2959 14.5508 17.207C14.5508 16.4453 14.2969 15.9619 13.999 15.708C15.8057 15.5078 17.71 15.2588 17.71 12.1387C17.71 11.25 17.3926 10.8057 16.875 10.2344C16.958 10.0244 17.2363 9.16016 16.792 8.03711C16.1133 7.82715 14.5605 8.91113 14.5605 8.91113C13.916 8.73047 13.2178 8.63769 12.5293 8.63769C11.8408 8.63769 11.1426 8.73047 10.498 8.91113C10.498 8.91113 8.94531 7.82715 8.2666 8.03711C7.82227 9.15527 8.0957 10.0195 8.18359 10.2344C7.66602 10.8057 7.42188 11.25 7.42188 12.1387C7.42188 15.2441 9.24316 15.5078 11.0498 15.708C10.8154 15.918 10.6055 16.2793 10.5322 16.7969C10.0684 17.0068 8.88184 17.3682 8.17383 16.1182C7.72949 15.3467 6.92871 15.2832 6.92871 15.2832C6.1377 15.2734 6.875 15.7813 6.875 15.7813C7.40234 16.0254 7.77344 16.9629 7.77344 16.9629C8.24707 18.4131 10.5127 17.9248 10.5127 17.9248C10.5127 18.6035 10.5225 19.707 10.5225 19.9072C10.5225 20.1172 10.376 20.3711 9.96094 20.2979C6.73828 19.2188 4.48242 16.1523 4.48242 12.5684C4.48242 8.08594 7.91016 4.68262 12.3926 4.68262C16.875 4.68262 20.5078 8.08594 20.5078 12.5684C20.5127 16.1523 18.3252 19.2236 15.1025 20.2979ZM10.3125 17.3145C10.2197 17.334 10.1318 17.2949 10.1221 17.2314C10.1123 17.1582 10.1758 17.0947 10.2686 17.0752C10.3613 17.0654 10.4492 17.1045 10.459 17.168C10.4736 17.2314 10.4102 17.2949 10.3125 17.3145ZM9.84863 17.2705C9.84863 17.334 9.77539 17.3877 9.67773 17.3877C9.57031 17.3975 9.49707 17.3438 9.49707 17.2705C9.49707 17.207 9.57031 17.1533 9.66797 17.1533C9.76074 17.1436 9.84863 17.1973 9.84863 17.2705ZM9.17969 17.2168C9.16016 17.2803 9.0625 17.3096 8.97949 17.2803C8.88672 17.2607 8.82324 17.1875 8.84277 17.124C8.86231 17.0605 8.95996 17.0313 9.04297 17.0508C9.14062 17.0801 9.2041 17.1533 9.17969 17.2168ZM8.5791 16.9531C8.53516 17.0068 8.44238 16.9971 8.36914 16.9238C8.2959 16.8604 8.27637 16.7676 8.3252 16.7236C8.36914 16.6699 8.46191 16.6797 8.53516 16.7529C8.59863 16.8164 8.62305 16.9141 8.5791 16.9531ZM8.13477 16.5088C8.09082 16.5381 8.00781 16.5088 7.9541 16.4355C7.90039 16.3623 7.90039 16.2793 7.9541 16.2451C8.00781 16.2012 8.09082 16.2354 8.13477 16.3086C8.18848 16.3818 8.18848 16.4697 8.13477 16.5088ZM7.81738 16.0352C7.77344 16.0791 7.7002 16.0547 7.64648 16.0059C7.59277 15.9424 7.58301 15.8691 7.62695 15.835C7.6709 15.791 7.74414 15.8154 7.79785 15.8643C7.85156 15.9277 7.86133 16.001 7.81738 16.0352ZM7.49023 15.6738C7.4707 15.7178 7.40723 15.7275 7.35352 15.6934C7.29004 15.6641 7.26074 15.6104 7.28027 15.5664C7.2998 15.5371 7.35352 15.5225 7.41699 15.5469C7.48047 15.5811 7.50977 15.6348 7.49023 15.6738Z" fill="#A3A4A4" />
                            </svg>
                            <a class="text-sm text-gr-400 font-medium" href="#">github.com/loremipsum...</a>
                        </div>
                        <div class="flex items-center">
                            <svg class="mr-4" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.3962 9.60393C17.8468 12.057 17.8131 15.99 15.411 18.4055C15.4065 18.4104 15.4011 18.4157 15.3962 18.4206L12.64 21.1769C10.209 23.6079 6.25388 23.6075 3.82325 21.1769C1.39225 18.7463 1.39225 14.7908 3.82325 12.3602L5.34517 10.8383C5.74877 10.4347 6.44382 10.7029 6.46465 11.2733C6.49123 12.0001 6.62158 12.7304 6.8621 13.4356C6.94355 13.6744 6.88535 13.9386 6.70693 14.117L6.17016 14.6538C5.02066 15.8033 4.98461 17.675 6.12279 18.8357C7.27221 20.0079 9.16147 20.0149 10.3197 18.8566L13.076 16.1008C14.2322 14.9445 14.2274 13.0756 13.076 11.9242C12.9242 11.7727 12.7713 11.655 12.6518 11.5727C12.5673 11.5147 12.4976 11.4377 12.4481 11.348C12.3986 11.2582 12.3708 11.1581 12.3669 11.0557C12.3506 10.6223 12.5042 10.1756 12.8467 9.83317L13.7102 8.96959C13.9367 8.74314 14.2919 8.71533 14.5545 8.89859C14.8552 9.10857 15.1369 9.34459 15.3962 9.60393ZM21.1768 3.82312C18.7461 1.39246 14.791 1.39213 12.36 3.82312L9.60379 6.57937C9.59886 6.58429 9.59353 6.58962 9.58902 6.59454C7.1869 9.01003 7.15322 12.943 9.60379 15.3961C9.86312 15.6554 10.1448 15.8914 10.4455 16.1014C10.7081 16.2846 11.0633 16.2568 11.2897 16.0304L12.1533 15.1668C12.4958 14.8243 12.6493 14.3777 12.6331 13.9443C12.6292 13.8419 12.6013 13.7418 12.5519 13.652C12.5024 13.5622 12.4326 13.4853 12.3481 13.4272C12.2287 13.345 12.0758 13.2273 11.924 13.0758C10.7726 11.9243 10.7677 10.0554 11.924 8.89916L14.6803 6.14333C15.8385 4.98509 17.7277 4.99206 18.8772 6.16425C20.0154 7.32499 19.9793 9.19669 18.8298 10.3462L18.293 10.883C18.1146 11.0614 18.0564 11.3255 18.1379 11.5643C18.3784 12.2695 18.5087 12.9998 18.5353 13.7267C18.5562 14.2971 19.2512 14.5653 19.6548 14.1617L21.1767 12.6398C23.6078 10.2092 23.6078 6.2537 21.1768 3.82312Z" fill="#A3A4A4" />
                            </svg>
                            <a class="text-sm text-gr-400 font-medium" href="#">loremipsum.com</a>
                        </div> --}}

                        @forelse($user->profile->links as $link)
                        <div class="flex items-center">
                            <svg class="mr-4" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.3962 9.60393C17.8468 12.057 17.8131 15.99 15.411 18.4055C15.4065 18.4104 15.4011 18.4157 15.3962 18.4206L12.64 21.1769C10.209 23.6079 6.25388 23.6075 3.82325 21.1769C1.39225 18.7463 1.39225 14.7908 3.82325 12.3602L5.34517 10.8383C5.74877 10.4347 6.44382 10.7029 6.46465 11.2733C6.49123 12.0001 6.62158 12.7304 6.8621 13.4356C6.94355 13.6744 6.88535 13.9386 6.70693 14.117L6.17016 14.6538C5.02066 15.8033 4.98461 17.675 6.12279 18.8357C7.27221 20.0079 9.16147 20.0149 10.3197 18.8566L13.076 16.1008C14.2322 14.9445 14.2274 13.0756 13.076 11.9242C12.9242 11.7727 12.7713 11.655 12.6518 11.5727C12.5673 11.5147 12.4976 11.4377 12.4481 11.348C12.3986 11.2582 12.3708 11.1581 12.3669 11.0557C12.3506 10.6223 12.5042 10.1756 12.8467 9.83317L13.7102 8.96959C13.9367 8.74314 14.2919 8.71533 14.5545 8.89859C14.8552 9.10857 15.1369 9.34459 15.3962 9.60393ZM21.1768 3.82312C18.7461 1.39246 14.791 1.39213 12.36 3.82312L9.60379 6.57937C9.59886 6.58429 9.59353 6.58962 9.58902 6.59454C7.1869 9.01003 7.15322 12.943 9.60379 15.3961C9.86312 15.6554 10.1448 15.8914 10.4455 16.1014C10.7081 16.2846 11.0633 16.2568 11.2897 16.0304L12.1533 15.1668C12.4958 14.8243 12.6493 14.3777 12.6331 13.9443C12.6292 13.8419 12.6013 13.7418 12.5519 13.652C12.5024 13.5622 12.4326 13.4853 12.3481 13.4272C12.2287 13.345 12.0758 13.2273 11.924 13.0758C10.7726 11.9243 10.7677 10.0554 11.924 8.89916L14.6803 6.14333C15.8385 4.98509 17.7277 4.99206 18.8772 6.16425C20.0154 7.32499 19.9793 9.19669 18.8298 10.3462L18.293 10.883C18.1146 11.0614 18.0564 11.3255 18.1379 11.5643C18.3784 12.2695 18.5087 12.9998 18.5353 13.7267C18.5562 14.2971 19.2512 14.5653 19.6548 14.1617L21.1767 12.6398C23.6078 10.2092 23.6078 6.2537 21.1768 3.82312Z" fill="#A3A4A4" />
                            </svg>
                            <a class="text-sm text-gr-400 font-medium hover:underline" href="{{ $link }}" target="blank">{{ str()->limit($link, 28) }}</a>
                        </div>
                        @empty
                        <span class="text-gr-600">Pas de Liens spécifié</span>
                        @endforelse

                        @auth
                        <edit-button>
                            <div class="w-full md:2/3 lg:w-1/3">
                                <edit-student-links></edit-student-links>
                            </div>
                        </edit-button>
                        @endauth
                    </div>
                </div>
                <x-card title="Loisirs" class="mb-8 relative">
                    {{-- <p class="text-gr-600">non spécifié</p> --}}
                    <div class="tag-container">
                        @forelse($user->profile->hobbies as $hobby)
                        <span class="tag">{{ $hobby }}</span>
                        @empty
                        <span class="text-gr-600">Pas de Loisirs spécifié</span>
                        @endforelse
                    </div>

                    @auth
                    <div class="absolute top-4 right-4">
                        <edit-button>
                            <div class="w-full md:2/3 lg:w-1/3">
                                <edit-student-hobbies></edit-student-hobbies>
                            </div>
                        </edit-button>
                    </div>
                    @endauth
                </x-card>
            </div>
        </div>
        <div class="col-span-2">
            <x-card title="Sommaire" class="mb-8 relative">
                <p class="text-gr-600">
                    {{ $user->profile->summary ?? 'Pas de sommaire spécifié' }}
                </p>

                @auth
                <div class="absolute top-4 right-4">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-student-summary></edit-student-summary>
                        </div>
                    </edit-button>
                </div>
                @endauth
            </x-card>
            <x-card title="Experiences" class="mb-8 relative">
                <div class="grid grid-cols-1 gap-y-8">
                    @forelse($user->profile->experiences as $exp)
                        <article>
                            <h3 class="text-lg font-medium text-gr-800">{{ $exp->title }}</h3>
                            <h4 class="text-sm font-bold text-primary">{{ $exp->company }}</h4>
                            <h4 class="text-sm font-normal text-gr-600 mb-4">{{ $exp->start }} - {{ $exp->end }}</h4>
                            <p class="text-gr-600">{{ $exp->description }}</p>
                        </article>
                    @empty
                        <span class="text-gr-600">Pas d'experiences spécifiées</span>
                    @endforelse
                    {{-- <article>
                        <h3 class="text-lg font-medium text-gr-800">Position title of the Expirence</h3>
                        <h4 class="text-sm font-bold text-primary">Entreprise ABC</h4>
                        <h4 class="text-sm font-normal text-gr-600 mb-4">Du 25 juillet 2022 au 1 septembre 2022 (2 mois)</h4>
                        <p class="text-gr-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam reprehenderit aliquid, obcaecati voluptate nihil est modi blanditiis architecto ipsum nam sint distinctio accusantium dolorum dolores animi dolor veniam itaque rerum.</p>
                    </article> --}}
                </div>


                @auth
                <div class="absolute top-4 right-4">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-student-experiences></edit-student-experiences>
                        </div>
                    </edit-button>
                </div>
                @endauth
            </x-card>
            <x-card title="Education" class="mb-8 relative">
                <div class="grid grid-cols-1 gap-y-8">
                    @forelse($user->profile->education as $edu)
                        <article>
                            <h3 class="text-lg font-medium text-gr-800">{{ $edu->title }}</h3>
                            <h4 class="text-sm font-bold text-primary">{{ $edu->school }}</h4>
                            <h4 class="text-sm font-normal text-gr-600 mb-4">{{ $edu->start }} - {{ $edu->end }}</h4>
                            <p class="text-gr-600">{{ $edu->description }}</p>
                        </article>
                    @empty
                        <span class="text-gr-600">Pas d'education spécifiées</span>
                    @endforelse
                </div>

                @auth
                <div class="absolute top-4 right-4">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-student-education></edit-student-education>
                        </div>
                    </edit-button>
                </div>
                @endauth
            </x-card>
            <x-card title="Projets" class="mb-8">
                <div class="grid grid-cols-1 gap-y-8">
                    <article>
                        <h3 class="text-lg font-medium text-gr-800">Position title of the Expirence</h3>
                        <h4 class="text-sm font-bold text-primary">Entreprise ABC</h4>
                        <h4 class="text-sm font-normal text-gr-600 mb-4">Du 25 juillet 2022 au 1 septembre 2022 (2 mois)</h4>
                        <p class="text-gr-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam reprehenderit aliquid, obcaecati voluptate nihil est modi blanditiis architecto ipsum nam sint distinctio accusantium dolorum dolores animi dolor veniam itaque rerum.</p>
                    </article>
                    <article>
                        <h3 class="text-lg font-medium text-gr-800">Position title of the Expirence</h3>
                        <h4 class="text-sm font-bold text-primary">Entreprise ABC</h4>
                        <h4 class="text-sm font-normal text-gr-600 mb-4">Du 25 juillet 2022 au 1 septembre 2022 (2 mois)</h4>
                        <p class="text-gr-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam reprehenderit aliquid, obcaecati voluptate nihil est modi blanditiis architecto ipsum nam sint distinctio accusantium dolorum dolores animi dolor veniam itaque rerum.</p>
                    </article>
                </div>
            </x-card>
            <x-card title="Diplomes & Certificas" class="">
                <div class="grid grid-cols-2 gap-8">
                    <article>
                        <h3 class="text-lg font-medium text-gr-800">Titre du diplom</h3>
                        <h4 class="text-sm font-bold text-primary">Ecole Abc</h4>
                        <h4 class="text-sm font-normal text-gr-600 mb-4">Reception le 10 septembre 2022</h4>
                    </article>
                    <article>
                        <h3 class="text-lg font-medium text-gr-800">Titre du diplom</h3>
                        <h4 class="text-sm font-bold text-primary">Ecole Abc</h4>
                        <h4 class="text-sm font-normal text-gr-600 mb-4">Reception le 10 septembre 2022</h4>
                    </article>
                    <article>
                        <h3 class="text-lg font-medium text-gr-800">Titre du diplom</h3>
                        <h4 class="text-sm font-bold text-primary">Ecole Abc</h4>
                        <h4 class="text-sm font-normal text-gr-600 mb-4">Reception le 10 septembre 2022</h4>
                    </article>
                </div>
            </x-card>
        </div>
        <div class="col-span-1">
            <x-card title="Compétences" class="mb-8 relative">
                {{-- <p class="text-gr-600">non spécifié</p> --}}
                <div class="tag-container">
                    @forelse($user->profile->skills as $skill)
                    <span class="tag">{{ $skill }}</span>
                    @empty
                    <span class="text-gr-600">Pas de Compétences spécifiée</span>
                    @endforelse
                </div>

                @auth
                <div class="absolute top-4 right-4">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-student-skills></edit-student-skills>
                        </div>
                    </edit-button>
                </div>
                @endauth
            </x-card>
            <x-card title="Langues" class="mb-8 relative">
                {{-- <p class="text-gr-600">non spécifié</p> --}}
                <div class="tag-container">
                    @forelse($user->profile->languages as $lang)
                    <span class="tag">{{ $lang["key"] }} | {{ $lang["value"] }}</span>
                    @empty
                    <span class="text-gr-600">Pas de Compétences spécifiée</span>
                    @endforelse
                </div>

                @auth
                <div class="absolute top-4 right-4">
                    <edit-button>
                        <div class="w-full md:2/3 lg:w-1/3">
                            <edit-student-languages></edit-student-languages>
                        </div>
                    </edit-button>
                </div>
                @endauth
            </x-card>
            <x-card title="Profils similaires" class="mb-8">
                <p class="text-gr-600">non spécifié</p>
            </x-card>
        </div>
    </section>
</x-layouts.auth-layout>

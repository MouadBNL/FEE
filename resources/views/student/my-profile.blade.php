<x-layouts.auth-layout>
    <section class="grid grid-cols-4 gap-8 container">
        <div class="col-span-1 relative">
            <div class="sticky top-14">
                <div class="card mb-8">
                    <div class="pt-14 pb-8 px-8 border-b border-gr-100">
                        <div class="mx-auto h-32 w-32 rounded-full bg-gr-100 border border-primary aspect-square mb-8">
                            {{-- Image profile --}}
                        </div>

                        <h3 class="h3 text-center">{{ auth()->user()->name }}</h3>
                        <h4 class="h4 text-center">Genie Informatique 4eme</h4>

                    </div>
                    <div class="py-8 px-8 flex justify-center">
                        <a class="link" href="#">Voir mon profil</a>
                    </div>
                </div>
                <x-card title="Loisirs" class="mb-8">
                    {{-- <p class="text-gr-600">non spécifié</p> --}}
                    <div class="tag-container">
                        <span class="tag">Books</span>
                        <span class="tag">Gaming</span>
                        <span class="tag">Football</span>
                        <span class="tag">Programming</span>
                        <span class="tag">Movies</span>
                    </div>
                </x-card>
            </div>
        </div>
        <div class="col-span-2">
            <x-card title="Sommaire" class="mb-8">
                <p class="text-gr-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque doloribus quam consectetur dolorum excepturi officiis, laborum nisi maxime tempora id ipsum molestiae corrupti ipsa repellendus in est totam perferendis labore!</p>
            </x-card>
            <x-card title="Experiences" class="mb-8">
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
            <x-card title="Education" class="mb-8">
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
            <x-card title="Compétences" class="mb-8">
                {{-- <p class="text-gr-600">non spécifié</p> --}}
                <div class="tag-container">
                    <span class="tag">Laravel</span>
                    <span class="tag">VueJS</span>
                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">UI/UX</span>
                    <span class="tag">Figma</span>
                </div>
            </x-card>
            <x-card title="Langues" class="mb-8">
                {{-- <p class="text-gr-600">non spécifié</p> --}}
                <div class="tag-container">
                    <span class="tag">Books</span>
                    <span class="tag">Gaming</span>
                    <span class="tag">Football</span>
                    <span class="tag">Programming</span>
                    <span class="tag">Movies</span>
                </div>
            </x-card>
            <x-card title="Profils similaires" class="mb-8">
                <p class="text-gr-600">non spécifié</p>
            </x-card>
        </div>
    </section>
</x-layouts.auth-layout>

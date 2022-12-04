<x-layouts.auth-layout>

    <section class="container">
        <div class=" mt-12 py-20 bg-gray-500 flex justify-center rounded">
            <div class="text-white">
                <div class="h-32 w-32 rounded-full bg-gray-50 mx-auto">
                </div>
                <h2 class="mt-5 text-center text-lg font-medium">{{ $user->name }}</h2>
                <h3 class="mt-2 text-center">IT Services and IT Consulting</h3>
                <hr class="mt-5 mb-5 bg-gr-400 text-gr-400 border-gr-400">
                <h2 class="mt-5 text-center text-lg font-medium text-gray-50">501-1,000</h2>
                <h3 class="mt-2 text-center text-gray-200">employees</h3>
            </div>
        </div>
    </section>

    <section class="grid grid-cols-4 gap-8 container my-12">

        <div class="col-span-1">
            <x-card title="À propos">
                <div class="grid grid-cols-1 gap-y-4">
                    <div>
                        <h5 class="text-sm text-gr-600">Industrie</h5>
                        <p class="text-sm  font-semibold text-gr-800">IT Services and IT Consulting</p>
                    </div>
                    <div>
                        <h5 class="text-sm text-gr-600">Taille de l'entreprise</h5>
                        <p class="text-sm  font-semibold text-gr-800">501-1,000 employés</p>
                    </div>
                    <div>
                        <h5 class="text-sm text-gr-600">Fondée</h5>
                        <p class="text-sm  font-semibold text-gr-800">2008</p>
                    </div>
                    <div>
                        <h5 class="text-sm text-gr-600">Headquarters</h5>
                        <p class="text-sm  font-semibold text-gr-800">Fès , Fès/Meknes</p>
                    </div>
                    <div>
                        <h5 class="text-sm text-gr-600">Spécialitées</h5>
                        <p class="text-sm  font-semibold text-gr-800">automabile, aéronauqtiue, télécom et réseau, and IT SOFTWARE</p>
                    </div>
                </div>
            </x-card>
        </div>
        <div class="col-span-3">
            <x-card title="Description">
                <p class="text-gr-600">
                    ALTEN Group supports the development strategy of its customers in the fields of innovation, R&D and technological information systems.<br>
                    Created 30 years ago, the Group has become a world leader in Engineering and Technology consulting.<br>
                    <br>
                    24 700 highly qualified engineers carry out studies and conception projects for the Technical and Information Systems Divisions of major customers in the industrial, telecommunications and Service sectors.<br>
                    <br>
                    Our business lines:<br>
                    <br>
                    • ENGINEERING<br>
                    R&D and Manufacturing outsourcing :<br>
                    > Consulting<br>
                    > R&D externalization / Design & Development<br>
                    > Manufacturing engineering<br>
                    > Supply chain and Quality<br>
                    > Testing<br>
                    > Customer Support training<br>
                    <br>
                    • ENTERPRISE SERVICES<br>
                    Internal IT:<br>
                    > Consulting functional knowledge<br>
                    > technical expertise (Digital, BI...)<br>
                    > IT applications / Life Cycle Management<br>
                    <br>
                    Internal Network:<br>
                    > Architecture and Security<br>
                    > Deployment Integration Support<br>
                </p>
            </x-card>
        </div>
    </section>
</x-layouts.auth-layout>

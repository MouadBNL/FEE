<x-layouts.auth-layout>
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
            @foreach($students as $student)
                <article class="bg-white border border-gr-100 rounded-md shadow-sm p-4 mb-8 flex items-start  gap-4">
                    <img class="block h-16 w-16 object-cover rounded-full shrink-0 grow-0" src="{{ $student->picture ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png' }}" alt="">

                    <div class="w-full">
                        <h4 class="font-bold">{{ $student->name }}</h4>
                        <div class="mb-4">
                            <p class="text-sm text-gray-600">{{ $student->profile->field }}</p>
                            <p class="text-sm text-gray-600">Skills: {{ join(", ", $student->profile->skills) }}</p>
                        </div>
                        <p class="text-sm text-gray-600">
                            {{ Str::limit($student->profile->summary, 200) }}
                        </p>
                    </div>

                    <a href="{{ route('show-student', $student->id) }}" class="bg-primary hover:bg-primary-dark-1 transition text-white px-4 py-2 rounded cursor-pointer shrink-0 grow-0" type="submit" value="Connexion">
                        Profil
                    </a>
                </article>
            @endforeach
            <div>
                {{ $students->links() }}
            </div>
        </div>
        <div class="col-span-1">
            <x-card title="Messages">
                <p>Display messages here !</p>
            </x-card>
        </div>
    </section>
</x-layouts.auth-layout>

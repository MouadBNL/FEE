<x-card title="Messages récents">
    @foreach($messages as $msg)
        <a href="{{ '/messenger/' . $msg->id }}" class=" p-2 mb-2 flex rounded hover:bg-gray-100 transition">
            <img class="h-12 w-12 shrink-0 grow-0 object-cover rounded-full mr-4 border-2 border-primary" src="{{ $msg->picture ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png' }}" alt="">
            
            <div class="w-full">
                <p class="font-bold text-sm">{{ $msg->name }}</p>
                <span class="text-xs bg-primary text-white rounded p-1">{{ $msg->type }}</span>
            </div>
        </a>
    @endforeach
    <div class="flex items-center justify-center mt-8">
        <a href="/messenger">
            <x-button>
                Ouvrir messenger
            </x-button>
        </a>
    </div>
</x-card>
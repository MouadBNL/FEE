<div class="favorite-list-item">
    <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m"
        style="background-image: url('{{ $user->picture  ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png' }}');">
    </div>
    <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
</div>

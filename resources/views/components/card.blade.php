<div {{ $attributes->merge(['class' => 'card']) }} >
    <div class="mx-8 py-6 border-b border-gr-100">
        <h3 class="h3">{{ $title ?? '' }}</h3>
    </div>
    <div class="mx-8 py-6">
        {{ $slot ?? '' }}
    </div>
</div>
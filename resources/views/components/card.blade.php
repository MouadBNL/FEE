<div {{ $attributes->merge(['class' => 'bg-white border border-gr-100 rounded-md shadow-sm']) }} >
    <div class="mx-8 py-6 border-b border-gr-100 text-lg font-semibold text-gr-800 ">
        <h1>{{ $title ?? '' }}</h1>
    </div>
    <div class="mx-8 py-6">
        {{ $slot ?? '' }}
    </div>
</div>
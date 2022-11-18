<input 
    name="{{ $name }}" 
    {{ $attributes->merge(['class' => "w-full shadow-sm border rounded py-1 px-2"]) }} 
>
@error($name)
<small class="text-red-500">
    {{ $message }}
</small>
@enderror
@props(['name'])

<div class="mb-6">
    <x-form.label :name="$name" ></x-form.label>

    <textarea 
        type="text" 
        rows="5"
        class="border border-gray-200 p-2 w-full"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name) }}"
        required
        {{ $attributes }}
    >
        {{ $slot }}
    </textarea>

    <x-form.error :name="$name" ></x-form.error>
</div>
<x-dropdown>

    <x-slot name="trigger" >
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
        </button>
    </x-slot>

    <x-dropdown-item href="/" >All</x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item
            :active="isset($currentCategory) && $currentCategory->is($category)"
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}" >
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
    
</x-dropdown>
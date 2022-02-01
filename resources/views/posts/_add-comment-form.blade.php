@auth
                     
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf

            <header class="flex items-center" >
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" class="rounded-full" width="40" height="40" alt="">
                <h2 class="ml-4" >Want to participate?</h2>
            </header>

            <div class="mt-6" >
                <textarea 
                    required 
                    name="body" 
                    rows="5" 
                    class="w-full text-sm focus:outline-none focus:ring" 
                    placeholder="Quick, thing of something to say!">
                </textarea>
            
                @error('body')
                    <span class="text-xs text-red-500" >{{ $message }}</span>
                @enderror
            
            </div>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6" >
                <x-submit-button>Post</x-submit-button>
            </div>

        </form>
    </x-panel>

@else

    <p class="font-semibold" >
        <a href="/register">Register</a>
        or  
        <a class="" href="/login">Log in</a>
        to leave a comment
    </p>

@endauth
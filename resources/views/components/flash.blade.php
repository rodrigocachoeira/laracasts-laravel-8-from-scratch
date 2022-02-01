@if(session()->has('success'))

    <div 
        x-data="{show:true}" 
        x-show="show"
        class="fixed bottom-0 bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm" 
        x-init="setTimeout(() => show = false, 4000)"    
    >
        <p>{{ session('success') }}</p>
    </div>

@endif
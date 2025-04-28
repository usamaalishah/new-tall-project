<div class="p-6 bg-white rounded-lg shadow-md">
    <h3 class="text-2xl font-bold mb-4">{{$livewirekamessage}}</h3>
    <h2 class="text-2xl font-bold mb-4">Counter Example</h2>
    
    <div class="flex items-center space-x-4">
        <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">
            -
        </button>
        
        <span class="text-xl font-semibold">{{ $count }}</span>
        
        <button wire:click="increment" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
            +
        </button>
    </div>
    
    <div class="mt-4">
        <p class="text-gray-600">
            This is a simple counter component built with Livewire.
        </p>
    </div>
</div>
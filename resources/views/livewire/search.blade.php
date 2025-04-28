{{-- <x-layouts.app> --}}
<div class="w-full max-w-2xl bg-white rounded-lg shadow p-6">
<h2 class="text-2xl font-bold text-gray-800 mb-4">Search</h2>

<div class="space-x-2">
    <input
        type="text"
        placeholder="Search."
        class="flex-grow px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300"
        wire:model.live="message"
    />
    <br>
    <h5>
        Here is your response: <span class="transition mt-5 bg-black text-white">{{ $message }}</span>
    </h5>
    
</div>
{{-- </x-layouts.app> --}}
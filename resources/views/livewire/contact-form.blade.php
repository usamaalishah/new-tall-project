<div>
    <div>
        <h2 class="text-2xl font-bold mb-4 mt-4 text-center">Customer List</h2>
    
        @if ($customers->isEmpty())
            <p class="text-gray-600">No customers found.</p>
        @else
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td class="border px-4 py-2">{{ $customer->name }}</td>
                            <td class="border px-4 py-2">{{ $customer->email }}</td>
                            <td class="border px-4 py-2">{{ $customer->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    
    <h2 class="text-2xl font-bold mb-4 mt-4 text-center">Become our Customer</h2>
    
    @if ($successMessage)
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit="submitForm">
        <div class="mb-4">
            <label for="name" class="block mb-1">Name</label>
            <input type="text" id="name" wire:model.live="name" class="w-full border rounded p-2">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="email" class="block mb-1">Email</label>
            <input type="email" id="email" wire:model.live="email" class="w-full border rounded p-2">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="message" class="block mb-1">Message</label>
            <textarea id="message" wire:model.live="message" class="w-full border rounded p-2" rows="4"></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="flex items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Submit
            </button>
            
            <div wire:loading wire:target="submitForm" class="ml-4 text-blue-500">
                Processing...
            </div>
        </div>
    </form>
</div>
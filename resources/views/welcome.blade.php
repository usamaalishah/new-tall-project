<x-layouts.app>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold mb-6">Welcome to My TALL Stack App!</h1>
                    
                    <p class="mb-4">
                        This is a simple application built with the TALL stack:
                    </p>
                    
                    <ul class="list-disc pl-5 mb-6">
                        <li><strong>T</strong>ailwind CSS - For styling</li>
                        <li><strong>A</strong>lpine.js - For JavaScript interactivity</li>
                        <li><strong>L</strong>aravel - The PHP framework</li>
                        <li><strong>L</strong>ivewire - For dynamic interfaces</li>
                    </ul>
                    
                    <div class="mt-8">
                        <h2 class="text-2xl font-semibold mb-4">Try the Livewire Counter Component:</h2>
                        <livewire:counter />
                    </div>
                    
                    <div class="mt-8">
                        <h2 class="text-2xl font-semibold mb-4">Try Alpine.js:</h2>
                        <div x-data="{ open: false }" class="bg-gray-100 p-6 rounded-lg">
                            <button 
                                @click="open = !open" 
                                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
                            >
                                Toggle Content
                            </button>
                            
                            <div x-show="open" class="mt-4 p-4 bg-white rounded shadow">
                                <p>This content is toggled with Alpine.js!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
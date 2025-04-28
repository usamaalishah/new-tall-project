<x-layouts.app>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold mb-6">Welcome to My TALL Stack App!</h1>

                    <p class="mb-4">
                        This is a simple application built with the TALL stack:
                    </p>
                    {{-- x - data  --}}

                    {{-- x-text  --}}
                    <h6 class="mb-6 bg-red-600 text-center text-blue-50">Alpine Practice</h6>
                    <div x-data="{message:'Hello Alpine World'}">
                        1- simple hello message:<strong class="p-6" x-text="message"></strong>
                    </div>
                    <h6 class="mb-3 mt-3 bg-black text-white text-center">x-text examples</h6>
                    <div x-data="{message1:'Hello Alpine World'}">
                        
                        Outside Message: <strong class="p-6" x-text="message1"></strong>

                        <div x-data="{message2:'Hello Alpine World'}">
                            Message 1: <strong class="p-6" x-text="message1"></strong>
                            Message 2: <strong class="p-6" x-text="message2"></strong>
                        </div>
                    </div>

                    <div x-data="{value: 10}">
                        Value Practice: <strong class="p-6" x-text="value + 2"></strong>
                    </div>

                    <h6 class="mb-3 mt-3 bg-black text-white text-center mt-2">x-on examples - mostly used for event like click submit etc</h6>
                    <div x-data>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800" @click="console.log('Button Clicked')">Click Me 1</button>

                        <button type="button" class="text-white bg-purple-700 hover:bg-purple-700" @click="alert($event.target.getAttribute('alertvalue'))" alertvalue="Hello World! Button Clicked">Click Me 2</button>
                        <br>
                        <input type="text" class="border-4 mt-3 mb-4" @keyup.enter="alert('Enter key pressed')">
                        <form @submit.prevent="console.log('Form Submitted')">
                            <button class="text-white bg-green-700 p-2">Submit</button>
                        </form>
                    </div>

                    <h6 class="mb-3 mt-3 bg-black text-white text-center mt-2">x-on examples - For increment counter</h6>
                    <div class="ml-2 mt-3 mb-3" x-data="{count: 10}">
                        <strong class="flex">Count :<p x-text="count" class="ml-2">10</p></strong>
                        <button class="text-white bg-blue-700 p-2" @click="count++">Increase the count</button>
                    </div>

                    <h6 class="mb-3 mt-3 bg-black text-white text-center mt-2">x-show examples - mostly used for show hide</h6>
                    
                    <div x-data ="{open: false}">
                        <button @click="open = !open"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                                Toggle Content
                            </button>
                            <div x-show="open" x-transition.delay.500ms class="mt-4 p-4 bg-white rounded shadow">
                                <p>This content is toggled with Alpine.js!</p>
                            </div>
                            {{-- <div x-show="open" x-transition:enter="transition ease-out duration-300" class="mt-4 p-4 bg-white rounded shadow">
                                <p>This content is toggled 2!</p>
                            </div> --}}
                    </div>
                    <h6 class="mb-3 mt-3 bg-black text-white text-center mt-2">x-ref examples - like element by id and class</h6>
                    <div x-data>
                        <button @click ="$refs.removeText.remove()" class="bg-blue-500 p-3">Remove This Text</button>
                        <span x-ref="removeText">this is the text</span>
                    </div>

                    <h6 class="mb-3 mt-3 bg-black text-white text-center mt-2">x-model examples - like element by id and class</h6>
                    <div x-data="{name: ''}">
                        Name: <input type="text" placeholder="Enter Name" x-model="name">
                        <p>Your Name: <span x-text="name"></span></p>
                    </div>

                    <div x-data="{name: ''}">
                        Lazy Name: <input type="textwelcome" placeholder="Enter Name" x-model="name">
                        <p>Your Name: <span x-text="name"></span></p>
                    </div>

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
                            <button @click="open = !open"
                                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
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

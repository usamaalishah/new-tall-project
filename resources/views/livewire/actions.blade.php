<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Contact Us</h2>

    <form wire:submit.prevent="formSubmit">
        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                 
                placeholder="Enter your name"
            />
        </div>

        <!-- Email Field -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                 
                placeholder="Enter your email"
            />
        </div>

        <!-- Message Field -->
        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea 
                id="message" 
                name="message" 
                rows="4" 
                class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                 
                placeholder="Enter your message"
            ></textarea>
        </div>

        <!-- Submit Button -->
        <div class="mb-4">
            <button 
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                Submit
            </button>
        </div>
    </form>
    <h1>{{ $message}}</h1>
</div>
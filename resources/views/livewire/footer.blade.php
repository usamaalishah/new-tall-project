<div class="bg-gray-800 text-white px-6 py-10" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <div>
            <h2 class="text-lg font-semibold mb-4">Codility Solutions</h2>
            <p class="text-sm text-gray-300">All-in-one IT solutions provider — from branding to backend.</p>
        </div>

        <div>
            <h3 class="text-md font-semibold mb-4">Company</h3>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="#" class="hover:text-white">About Us</a></li>
                <li><a href="#" class="hover:text-white">Careers</a></li>
                <li><a href="#" class="hover:text-white">Blog</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-md font-semibold mb-4">Support</h3>
            <ul class="space-y-2 text-sm text-gray-300">
                <li><a href="#" class="hover:text-white">Help Center</a></li>
                <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-white">Terms</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-md font-semibold mb-4">Subscribe</h3>
            <div class="flex flex-col space-y-2">
                <input type="email" placeholder="Your email" class="px-3 py-2 rounded bg-gray-700 border border-gray-600 text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-500">
                <button class="bg-yellow-500 hover:bg-yellow-600 text-sm text-black py-2 px-4 rounded">Subscribe</button>
            </div>
        </div>
    </div>

    <div class="mt-10 border-t border-gray-700 pt-6 text-sm text-center text-gray-400">
        &copy; {{ date('Y') }} Codility Solutions. All rights reserved.
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My TALL Stack App</title>
    
    <!-- Styles -->
    @vite('resources/css/app.css')
    
    <!-- Scripts -->
    @vite('resources/js/app.js')
    
    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-xl font-bold text-gray-800">TALL Stack</a>
                    <a href="/practice" class="text-xl text-gray-800 ml-5">Practice</a>
                    <a href="/tailwind" class="text-xl text-gray-800 ml-5">Tailwind</a>
                    <a href="/forms" class="text-xl text-gray-800 ml-5">Forms Practice</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
    <!-- Livewire Scripts -->
    @livewireScripts
    <livewire:footer />
</body>
</html>
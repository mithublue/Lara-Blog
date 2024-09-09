<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<x-banner />

<div class="min-h-screen bg-gray-100">
    @livewire('navigation-menu')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-12xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        <div class="max-w-12xl mx-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex h-screen bg-gray-100">
                    <!-- Sidebar -->
                    <div class="w-64 bg-white border-r border-gray-200">
                        <div class="p-6">
                            <h2 class="text-lg font-semibold text-gray-700">Dashboard Menu</h2>
                        </div>
                        <nav class="mt-6">
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 bg-gray-200">
                                <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 11h18M3 15h18"></path>
                                </svg>
                                Dashboard
                            </a>
                            <!-- Posts Menu with Submenu -->
                            <div x-data="{ open: false }">
                                <a href="#" @click="open = !open" class="flex items-center justify-between px-4 py-2 mt-2 text-gray-600 hover:bg-gray-200 cursor-pointer">
                                    <div class="flex items-center">
                                        <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                        </svg>
                                        Posts
                                    </div>
                                    <!-- Arrow Indicator for Submenu -->
                                    <svg :class="{'rotate-180': open}" class="h-5 w-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>

                                <!-- Submenu -->
                                <div x-show="open" x-collapse class="pl-10 mt-2 space-y-2">
                                    <a href="{{ route('admin.posts.index') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">
                                        All Posts
                                    </a>
                                    <a href="{{ route('admin.posts.create') }}" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">
                                        Add New
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">
                                        Categories
                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-200">
                                        Tags
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
</div>
@stack('modals')
@livewireScripts
</body>
</html>

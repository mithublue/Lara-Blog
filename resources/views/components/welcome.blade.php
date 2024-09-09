<!-- Content Section -->
    <div class="flex-1 lg:p-10">
        <h1 class="text-2xl font-bold text-gray-800">Welcome to {{ config('app.name') }}!</h1>
        <p class="mt-4 text-gray-600">
            This is your admin dashboard. Manage your posts, categories, and settings from the sidebar.
        </p>

        <!-- Example of interactive content with Alpine.js -->
        <div x-data="{ open: false }" class="mt-6">
            <button @click="open = !open" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
                {{ __('Learn More') }}
            </button>
            <div x-show="open" class="mt-4 text-gray-600">
                <p>
                    Using Laravel, Tailwind, and Alpine.js, you can build powerful and responsive web applications.
                </p>
            </div>
        </div>

        <!-- Responsive Cards Example -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-800">Tailwind CSS</h3>
                <p class="mt-4 text-gray-600">
                    Tailwind provides utility-first classes to style your app responsively.
                </p>
            </div>

            <div class="p-6 bg-white border border-gray-200 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-800">Alpine.js</h3>
                <p class="mt-4 text-gray-600">
                    Add interactivity with minimal effort using Alpine.js.
                </p>
            </div>
        </div>
    </div>

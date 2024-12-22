<div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-12">My <span class="text-red-600">Projects</span></h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project Card 1 -->
        <div class="bg-gray-900 rounded-xl overflow-hidden group">
            <div class="relative overflow-hidden">
                <img src="{{ Vite::asset('resources/images/project1.jpg') }}" 
                     alt="Project 1" 
                     class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="flex space-x-4">
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">E-Commerce Website</h3>
                <p class="text-gray-400 mb-4">A full-featured online shopping platform built with Laravel and React.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Laravel</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">React</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">MySQL</span>
                </div>
            </div>
        </div>

        <!-- Project Card 2 -->
        <div class="bg-gray-900 rounded-xl overflow-hidden group">
            <div class="relative overflow-hidden">
                <img src="{{ Vite::asset('resources/images/project2.jpg') }}" 
                     alt="Project 2" 
                     class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="flex space-x-4">
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Task Management System</h3>
                <p class="text-gray-400 mb-4">A collaborative task management solution for teams.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Spring Boot</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Angular</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">PostgreSQL</span>
                </div>
            </div>
        </div>

        <!-- Project Card 3 -->
        <div class="bg-gray-900 rounded-xl overflow-hidden group">
            <div class="relative overflow-hidden">
                <img src="{{ Vite::asset('resources/images/project3.jpg') }}" 
                     alt="Project 3" 
                     class="w-full h-48 object-cover transform group-hover:scale-110 transition duration-500">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="flex space-x-4">
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                        <a href="#" class="bg-red-600 hover:bg-red-700 p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Blog Platform</h3>
                <p class="text-gray-400 mb-4">A modern blogging platform with advanced features.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Laravel</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">Vue.js</span>
                    <span class="px-3 py-1 bg-gray-800 rounded-full text-sm">MySQL</span>
                </div>
            </div>
        </div>
    </div>
</div>
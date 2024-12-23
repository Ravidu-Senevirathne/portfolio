<footer class="relative min-h-[600px] bg-black overflow-hidden animate-fade-in">
    <!-- Background with overlay -->
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full flex justify-center items-center">
            <img src="{{ Vite::asset('resources/images/sitting-me.jpeg') }}" 
                 alt="Footer Background" 
                 class="min-w-[4000px] md:min-w-[5000px] h-[600px] md:h-[800px] object-contain opacity-20 animate-zoom-in">
        </div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 mt-56 animate-slide-up">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- About Section -->
            <div class="text-center md:text-left animate-fade-in">
                <h3 class="text-2xl font-bold text-red-600 mb-4">Get in Touch</h3>
                <p class="text-gray-300 mb-4">Let's collaborate on your next project</p>
                <p class="text-gray-300">
                    <i class="far fa-envelope mr-2"></i>
                    ravidu.dilruk@gmail.com
                </p>
            </div>

            <!-- Quick Links -->
            <div class="text-center animate-fade-in animation-delay-100">
                <h3 class="text-2xl font-bold text-red-600 mb-4">Quick Links</h3>
                <nav class="space-y-3">
                    <a href="#home" class="block hover:text-red-600 transition-colors duration-300">Home</a>
                    <a href="#about" class="block hover:text-red-600 transition-colors duration-300">About</a>
                    <a href="#projects" class="block hover:text-red-600 transition-colors duration-300">Projects</a>
                    <a href="#contact" class="block hover:text-red-600 transition-colors duration-300">Contact</a>
                </nav>
            </div>

            <!-- Social Links -->
            <div class="text-center lg:text-right animate-fade-in animation-delay-200">
                <h3 class="text-2xl font-bold text-red-600 mb-4">Follow Me</h3>
                <div class="flex justify-center lg:justify-end space-x-6">
                    <a href="https://github.com/Ravidu-Senevirathne" class="hover:text-red-600 transition-colors duration-300">
                        <i class="fab fa-github text-2xl"></i>
                    </a>
                    <a href="https://linkedin.com/in/ravidu-senevirathne" class="hover:text-red-600 transition-colors duration-300">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                    <a href="https://instagram.com/ravidusenevirathne" class="hover:text-red-600 transition-colors duration-300">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://facebook.com/ravidusenevirathne" class="hover:text-red-600 transition-colors duration-300">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-12 pt-8 border-t border-gray-800 animate-fade-in animation-delay-300">
            <p class="text-gray-400">&copy; {{ date('Y') }} Ravidu Senevirathne. All rights reserved.</p>
        </div>
    </div>
</footer>
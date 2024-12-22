<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-white">
    <header class="shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Ravidu .</h1>
            <nav class="hidden md:block">
                <ul class="flex space-x-4 text-xl">
                    <li><a href="#home" class="hover:text-red-500 transition-colors">Home</a></li>
                    <li><a href="#about" class="hover:text-red-500 transition-colors">About Me</a></li>
                    <li><a href="#projects" class="hover:text-red-500 transition-colors">Projects</a></li>
                    <li><a href="#contact" class="hover:text-red-500 transition-colors">Contact</a></li>
                </ul>
            </nav>
            <button id="menu-toggle" class="block md:hidden fixed top-4 right-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <div id="mobile-menu" class="hidden md:hidden">
                <ul class="flex flex-col space-y-4 text-xl">
                    <li><a href="#home" class="hover:text-red-500 transition-colors">Home</a></li>
                    <li><a href="#about" class="hover:text-red-500 transition-colors">About Me</a></li>
                    <li><a href="#projects" class="hover:text-red-500 transition-colors">Projects</a></li>
                    <li><a href="#contact" class="hover:text-red-500 transition-colors">Contact</a></li>
                </ul>
            </div>

            <script>
                document.getElementById('menu-toggle').addEventListener('click', function() {
                    var menu = document.getElementById('mobile-menu');
                    menu.classList.toggle('hidden');
                });
            </script>
        </div>
    </header>

    <section id="home" class="py-12 mt-32">
      <x-home></x-home>
    </section>

    <section id="about" class="py-12 mt-3">
       <x-about></x-about>
    </section>

    <section id="projects" class="py-12 bg-gray-200">
       <x-projects></x-projects>
    </section>

    <section id="contact" class="py-12">
        <x-contact></x-contact>
    </section>

    <footer class="bg-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} My Portfolio. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

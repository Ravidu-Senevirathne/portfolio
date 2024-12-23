<div class="min-h-screen relative flex items-center justify-center mt-10">
    <div class="absolute inset-0 flex justify-center items-center overflow-hidden">
        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/50 z-0"></div>
        
        <img src="{{ Vite::asset('resources/images/standing-me.jpeg') }}" 
             alt="Background" 
             class="absolute w-4/12 h-full object-cover opacity-60 animate-[zoomInOut_3s_ease-in-out]">
    </div>
    
    <div class="relative z-10 text-center space-y-6 p-8 rounded-lg backdrop-blur-sm bg-black/20 animate-fade-in">
        <h1 class="text-5xl font-bold tracking-wider text-white drop-shadow-lg animate-slide-in">
            Hi, I'm <span class="text-red-500 font-extrabold">Ravidu Senevirathne</span>
        </h1>
        
        <div class="text-3xl font-light space-y-2 animate-float">
            <p class="text-gray-100">I'm a <span id="changing-text" class="text-red-500 font-medium"></span></p>
            <p class="typing-effect text-gray-100">Passionate about creating elegant solutions</p>
        </div>
        
        <div class="mt-8 flex justify-center gap-4">
            <a href="#projects" class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-full transition-all duration-300 hover:scale-110">
                View My Work
            </a>
            <a href="#contact" class="border border-white hover:border-red-600 hover:text-red-600 px-6 py-3 rounded-full transition-all duration-300 hover:scale-110">
                Contact Me
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const texts = ["Full Stack Developer", "Laravel Developer", "Web Designer"];
        let currentIndex = 0;
        const changingText = document.getElementById('changing-text');

        function typeText(text, callback) {
            let index = 0;
            changingText.textContent = '';
            
            function type() {
                if (index < text.length) {
                    changingText.textContent += text[index];
                    index++;
                    setTimeout(type, 100);
                } else {
                    setTimeout(callback, 2000);
                }
            }
            
            type();
        }

        function startAnimation() {
            typeText(texts[currentIndex], () => {
                currentIndex = (currentIndex + 1) % texts.length;
                startAnimation();
            });
        }

        startAnimation();
    });
</script>
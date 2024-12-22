<div class="min-h-screen relative flex items-center justify-center mt-10">
    <div class="absolute inset-0 flex justify-center items-center bg-black">
        <img src="{{ Vite::asset('resources/images/standing-me.jpeg') }}" 
             alt="Background" 
             class="w-7/12  object-cover opacity-40">
    </div>
    
    <div class="relative z-10 text-center space-y-6">
        <h1 class="text-5xl font-bold tracking-wider">
            Hi, I'm <span class="text-red-600">Ravidu Senevirathne</span>
        </h1>
        
        <div class="text-3xl font-light space-y-2">
            <p>I'm a <span id="changing-text" class="text-red-600 font-medium"></span></p>
            <p class="typing-effect">Passionate about creating elegant solutions</p>
        </div>
        
        <div class="mt-8 flex justify-center gap-4">
            <a href="#projects" class="bg-red-600 hover:bg-red-700 px-6 py-3 rounded-full transition-all duration-300">
                View My Work
            </a>
            <a href="#contact" class="border border-white hover:border-red-600 hover:text-red-600 px-6 py-3 rounded-full transition-all duration-300">
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
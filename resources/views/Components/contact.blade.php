<div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-bold text-center mb-12">Get In <span class="text-red-600">Touch</span></h2>
    
    <div class="max-w-2xl mx-auto">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="space-y-6 bg-gray-900 p-8 rounded-xl shadow-2xl">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium mb-2">Name</label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-red-600 focus:border-transparent @error('name') border-red-500 @enderror"
                       value="{{ old('name') }}"
                       required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium mb-2">Email</label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-red-600 focus:border-transparent @error('email') border-red-500 @enderror"
                       value="{{ old('email') }}"
                       required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium mb-2">Message</label>
                <textarea id="message" 
                          name="message" 
                          rows="5" 
                          class="w-full bg-gray-800 border border-gray-700 rounded-lg p-3 focus:ring-2 focus:ring-red-600 focus:border-transparent @error('message') border-red-500 @enderror"
                          required>{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="flex justify-end">
                <button type="submit" 
                        class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition-colors duration-300 flex items-center">
                    Send Message
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>
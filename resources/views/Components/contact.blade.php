<div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-4">Contact</h2>
    <form class="space-y-4 bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
            <input type="text" id="name" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Message:</label>
            <textarea id="message" name="message" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors">Send</button>
    </form>
</div>
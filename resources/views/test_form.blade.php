<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl text-orange-500 font-bold mb-6">Contact Us</h1>
        <form action="{{ url('/contact') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Your Email:</label>
                <input type="email" name="email" id="email" required
                    class="w-full p-2 mt-1 bg-gray-100 border border-gray-300 text-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>

            <div>
                <label for="subject" class="block text-sm font-medium text-gray-600">Subject:</label>
                <input type="text" name="subject" id="subject" required
                    class="w-full p-2 mt-1 bg-gray-100 border border-gray-300 text-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-600">Message:</label>
                <textarea name="message" id="message" rows="4" required
                    class="w-full p-2 mt-1 bg-gray-100 border border-gray-300 text-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
            </div>

            <div class="text-right">
                <button type="submit"
                    class="px-4 py-2 bg-orange-500 hover:bg-orange-600 text-white font-bold rounded-md shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>

</html>

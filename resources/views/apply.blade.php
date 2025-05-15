<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply</title>
    @vite('resources/js/app.js')
</head>
<body class="p-6 bg-gray-100 font-sans">
<div class="max-w-xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Application Form</h1>

    <form action="{{ route('apply.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow-md">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" name="first_name" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" name="last_name" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Message</label>
            <textarea name="message" rows="4" class="mt-1 w-full border-gray-300 rounded-md shadow-sm" required></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Submit
        </button>
    </form>
</div>
</body>
</html>

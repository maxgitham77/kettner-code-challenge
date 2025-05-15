<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply Now</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Optional Tailwind -->
</head>
<body class="bg-gray-100 py-10">
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">Job Application Form</h1>
    <form action="{{ route('apply.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-1">First Name</label>
            <input type="text" name="first_name" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Last Name</label>
            <input type="text" name="last_name" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Email</label>
            <input type="email" name="email" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1">Message</label>
            <textarea name="message" rows="4" class="w-full border rounded p-2"></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Submit</button>
    </form>
</div>
</body>
</html>

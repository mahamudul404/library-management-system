<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    {{-- create admin dashboard in libray management aplication and use tailwind css --}}
    <div class="flex flex-col h-screen">
        <div class="flex-grow bg-white shadow-md p-4">
            <div class="flex items-center justify-between">
                <h1 class="text-xl font-bold">Admin Dashboard</h1>
                <div class="flex items-center">
                    <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900">Logout</button>
                </div>
            </div>
            <div class="mt-6">
                <div class="flex flex-wrap gap-4">
                    <div class="w-full md:w-1/2">
                        <div class="flex flex-col items-center">
                            <img class="w-32 h-32 object-cover rounded-full" src="https://example.com/image.jpg"
                                alt="User Avatar">
                            <h2 class="mt-4 text-lg font-bold text-gray-800">John Doe</h2>
                            <p class="text-sm text-gray-600">Software Engineer</p>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="flex flex-col items-center">
                            <div class="flex-grow">
                                <h2 class="text-2xl font-bold text-gray-800">Library Management System</h p
                                        class="mt-4 text-sm text-gray-600">Manage your library resources efficiently</p>
                                    <button
                                        class="px-4 py-2 text-sm font-medium text-white bg-blue-500 hover:bg-blue-600">Get
                                        Started</button>
                            </div>

</body>

</html>

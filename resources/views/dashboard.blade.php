<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow px-8 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">MyApp</h1>
        <div class="flex items-center gap-4">
            <span class="text-gray-600 text-sm">Hello, <strong>{{ session('user') }}</strong></span>
            <a href="/logout"
                class="bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded-lg transition">
                Logout
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-4xl mx-auto mt-10 px-4">
        <div class="bg-white rounded-2xl shadow p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Dashboard</h2>
            <p class="text-gray-500 mb-6">Welcome back, <span class="text-blue-600 font-semibold">{{ session('user') }}</span>. You are logged in.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 text-center">
                    <p class="text-3xl font-bold text-blue-600">1</p>
                    <p class="text-gray-600 mt-1">Active Session</p>
                </div>
                <div class="bg-green-50 border border-green-200 rounded-xl p-6 text-center">
                    <p class="text-3xl font-bold text-green-600">✓</p>
                    <p class="text-gray-600 mt-1">Authenticated</p>
                </div>
                <div class="bg-purple-50 border border-purple-200 rounded-xl p-6 text-center">
                    <p class="text-3xl font-bold text-purple-600">🔒</p>
                    <p class="text-gray-600 mt-1">Secure</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">Login to Your Account</h2>

        <form action="{{ url('/login') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Email Input -->
            <div class="flex flex-col">
                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('email') }}"
                    required
                />
            </div>

            <!-- Password Input -->
            <div class="flex flex-col">
                <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                />
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="text-red-500 text-sm">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300"
            >
                Login
            </button>
        </form>

        <!-- Register Link -->
        <div class="text-center mt-4">
            <a
                href="/register"
                class="text-blue-500 hover:text-blue-700 text-sm font-medium"
            >
                Don't have an account? Register here
            </a>
        </div>
    </div>

</body>
</html>
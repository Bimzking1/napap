<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Narapidana</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col items-center">

    <div class="w-full bg-white shadow-md py-4 mb-4">
        <div class="max-w-7xl mx-auto px-4 text-center text-2xl font-bold">
            Tambah Narapidana
        </div>
    </div>

    <div class="w-full max-w-7xl mx-auto px-4">
        <div class="mb-4">
            <a href="/narapidana" class="text-sm bg-blue-500 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-600 transition duration-300">
                Back
            </a>
        </div>
        <form method="POST" action="{{ route('narapidana.store') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Age:</label>
                <input type="number" id="age" name="age" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender:</label>
                <input type="text" id="gender" name="gender" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="case" class="block text-sm font-medium text-gray-700">Pelanggaran:</label>
                <select name="case" id="case" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    @foreach ($violations as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="sentence" class="block text-sm font-medium text-gray-700">Sentence:</label>
                <input type="number" id="sentence" name="sentence" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            </div>

            <div class="text-right">
                <input type="submit" value="Submit" class="bg-green-500 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-green-600 transition duration-300">
            </div>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Narapidana Kumham Jatim</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col items-center">

    <div class="w-full bg-white shadow-md py-4 mb-4 relative">
        <div class="max-w-[1280px] mx-auto px-4 text-center text-2xl font-bold">
            Database Narapidana Kumham Jatim
        </div>
        <div class="bg-blue-500 hover:bg-blue-600 duration-300 py-1 px-4 cursor-pointer absolute right-4 top-0 bottom-0 m-auto h-[40px] flex justify-center items-center rounded-lg text-white">
            Login
        </div>
    </div>
    <div class="w-full max-w-[1280px] mx-auto px-4">
        <div class="mb-4 text-right">
            <a
                class="text-sm bg-blue-500 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-600 transition duration-300"
                href="/narapidana/create"
            >
                Tambah Data
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-300 text-gray-700">
                        <th class="border px-4 py-2">Nama</th>
                        <th class="border px-4 py-2">Usia</th>
                        <th class="border px-4 py-2">Kelamin</th>
                        <th class="border px-4 py-2">Pelanggaran</th>
                        <th class="border px-4 py-2">Lama Pidana</th>
                        <th class="border px-4 py-2" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($narapidanas as $item)
                        <tr class="text-gray-700 hover:bg-gray-100 transition duration-300">
                            <td class="border px-4 py-2">{{ $item->name }}</td>
                            <td class="border px-4 py-2">{{ $item->age }}</td>
                            <td class="border px-4 py-2">{{ $item->gender }}</td>
                            <td class="border px-4 py-2">{{ $item->violation->name }}</td>
                            <td class="border px-4 py-2">{{ $item->sentence }} tahun</td>
                            <td class="border py-2 flex justify-center items-center gap-4">
                                <a href="{{ route('narapidana.edit', $item->id) }}" class="bg-blue-500 hover:bg-blue-600 duration-300 text-white px-4 py-1 rounded-lg">Edit</a>
                                <form
                                    action="{{ route('narapidana.destroy', $item->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this item?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-blue-600 duration-300 text-white px-4 py-1 rounded-lg">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

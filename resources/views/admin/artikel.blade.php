<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>

    <x-sidebar></x-sidebar>


    <div class="p-4 sm:ml-64">
        <div class="  border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center  h-48  rounded  dark:bg-gray-800">
                    <p class="text-4xl text-gray-900 dark:text-white">Halaman Artikel</p>
                </div>
            </div>

        </div>
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-5">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex justify-end mb-2 p-4  md:w-auto md:flex-row md:items-start">
                    <button type="button"
                        class="flex items-center justify-center text-white bg-primary-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 bg-blue-500">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        <a href="{{ route('admin.tambahArtikel') }}">Tambah</a>
                    </button>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Id Artikel
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul Artikel
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($artikel as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4"><?= $i++ ?></th>
                                <td class="px-6 py-4">{{ $data->id_artikel }}</td>
                                <td class="px-6 py-4">{{ $data->judul_artikel }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.editArtikel', $data->id_artikel) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('admin.deleteArtikel', $data->id_artikel) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="hover:underline text-blue-600 dark:text-blue-500"
                                            onclick="return confirm('Apakah kamu ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>

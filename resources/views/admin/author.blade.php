<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>

    <x-sidebar></x-sidebar>


    <div class="p-4 sm:ml-64">
        <div class="  border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center  h-48  rounded  dark:bg-gray-800">
                    <p class="text-4xl text-gray-900 dark:text-white">Halaman Author</p>
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
                        <a href="{{ route('admin.tambahAuthor') }}">Tambah</a>
                    </button>
                </div>
                @if (session('pesan'))
                    <div id="alert-border-3"
                        class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800"
                        role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            {{ session('pesan') }}
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-border-3" aria-label="Close">
                            <span class="sr-only">Dismiss</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                @endif
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Id Author
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Author
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Prodi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Afiliasi
                            </th>
                            <th scope="col" class=" py-1">
                                Email
                            </th>
                            <th scope="col" class=" py-1">
                                Wa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($author as $data)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4"><?= $i++ ?></th>
                                <td class="px-6 py-4">{{ $data->id_author }}</td>
                                <td class="px-6 py-4">{{ $data->nama_author }}</td>
                                <td class="px-6 py-4">{{ $data->prodi }}</td>
                                <td class="px-6 py-4">{{ $data->afiliasi }}</td>
                                <td class=" py-2">{{ $data->email }}</td>
                                <td class=" py-2">{{ $data->wa }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('admin.editAuthor', $data->id_author) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('admin.deleteAuthor', $data->id_author) }}" method="post">
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

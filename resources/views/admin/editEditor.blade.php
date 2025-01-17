<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Editor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <x-navbar></x-navbar>

    <x-sidebar></x-sidebar>



    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 bg-gray-50 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <div class="flex items-center  h-24 rounded bg-gray-50 dark:bg-gray-800">
                <h1 class="dark:text-gray-500fs">
                    Halaman Edit Editor
                </h1>
            </div>
            <form action="{{ route('admin.updateEditor', $data->id_editor) }}" class="max-w-md ml-2" method="post">
                @csrf
                <div class="mb-5">
                    <label for="id_editor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id
                        Editor</label>
                    <input type="text" id="id_editor" name="id_editor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $data->id_editor }}" required />
                </div>
                <div class="mb-5">
                    <label for="nama_editor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                        Editor</label>
                    <input type="text" id="nama_editor" name="nama_editor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $data->nama_editor }}" required />
                </div>
                <button type="submit"
                    class="text-white bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800 mt-2"><a
                        href="{{ route('admin.editor') }}">Kembali</a></button>
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">Edit</button>
            </form>




        </div>
    </div>

</body>

</html>

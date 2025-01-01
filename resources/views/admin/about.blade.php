<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>

    <x-sidebar></x-sidebar>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg bg-gray-50 dark:border-gray-700 mt-14">
            <div class="flex items-center h-24 rounded dark:bg-gray-800">
                <p class="text-2xl text-gray-800 dark:text-gray-500">
                    Halaman About
                </p>

            </div>
            <div class="mt-2  rounded  dark:bg-gray-800">
                {{-- <p class="text-2xl text-gray-800 dark:text-gray-500">
                    
                </p> --}}

                <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Nama Kelompok</h2>
                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        Teddy Edwar (2022610004)
                    </li>
                    <li>
                        Kiffatul Najmi (2022610005)
                    </li>
                    <li>
                        Muhammad Hafiz (2022610033)
                    </li>
                </ul>

            </div>
        </div>
    </div>

</body>

</html>

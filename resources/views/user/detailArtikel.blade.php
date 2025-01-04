<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Detail Artikel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-user-navbar></x-user-navbar>

    <div class="max-w-screen-md mt-10  mx-auto lg:mb-16 text-center">
        <h2 class="text-3xl tracking-tight font-bold text-gray-900 dark:text-white"
            style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Halaman Detail Artikel</h2>
    </div>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="m mb-8 lg:mb-16 mx-auto">
                <div class="w-1/3 mx-auto relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Id Artikel
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Id Author
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Penulis Ke
                                </th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($detail as $data)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4"><?= $i++ ?></th>
                                    <td class="px-6 py-4">{{ $data->id_artikel }}</td>
                                    <td class="px-6 py-4">{{ $data->id_author }}</td>
                                    <td class="px-6 py-4">{{ $data->penulis_ke }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>



    <x-footer></x-footer>
</body>

</html>

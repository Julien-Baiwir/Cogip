<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
    .font-roboto {
        font-family: 'Roboto', sans-serif;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>

<body>
    <main class ="mt-40 font-roboto" >
    <div class="relative ">
            <h1 class="text-6xl font-extrabold z-10 relative ml-32" >All invoices</h1>
            <div class="w-80 h-7 absolute inset-0 bg-yellow-300 z-0" style="top:40px; left: 275px;"></div> <!-- Ajout de left: 50px; -->
        </div>
        <div class="search flex justify-end mr-32">
            <input type="text" class="border-2 border-yellow-300 w-1/4 h-10 m-5 rounded-lg" placeholder="Search company name">
        </div>
        <section class=" flex flex-col items-center mt-16 mb-40">

            <div class="array w-5/6 flex content-center">
            <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-yellow-300">
                            <th class="px-4 py-2 ">Colonne 1</th>
                            <th class="px-4 py-2">Colonne 2</th>
                            <th class="px-4 py-2">Colonne 3</th>
                            <th class="px-4 py-2">Colonne 4</th>
                            <th class="px-4 py-2"></th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                            <td class="border px-4 py-2 font-semibold w-1/6">Ligne 1, Colonne 1</td>
                            <td class="border px-4 py-2 font-semibold w-1/6">Ligne 1, Colonne 2</td>
                            <td class="border px-4 py-2 font-semibold w-1/6">Ligne 1, Colonne 3</td>
                            <td class="border px-4 py-2 font-semibold w-1/6">Ligne 1, Colonne 4</td>
                            <td class="border px-4 py-2 font-semibold w-1/6">Ligne 1, Colonne 5</td>
                            <td class="border px-4 py-2 font-semibold w-1/6"></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-semibold">Ligne 2, Colonne 1</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 2, Colonne 2</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 2, Colonne 3</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 4</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 5</td>
                            <td class="border px-4 py-2 font-semibold w-1/6"></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-semibold">Ligne 3, Colonne 1</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 3, Colonne 2</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 3, Colonne 3</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 4</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 5</td>
                            <td class="border px-4 py-2 font-semibold w-1/6"></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-semibold">Ligne 4, Colonne 1</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 4, Colonne 2</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 4, Colonne 3</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 4</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 5</td>
                            <td class="border px-4 py-2 font-semibold w-1/6"></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 font-semibold">Ligne 5, Colonne 1</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 5, Colonne 2</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 5, Colonne 3</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 4</td>
                            <td class="border px-4 py-2 font-semibold">Ligne 1, Colonne 5</td>
                            <td class="border px-4 py-2 font-semibold w-1/6"></td>
                        </tr>
                        <!-- Répétez cette structure pour les autres lignes -->
                    </tbody>
                </table>
            </div>

        </section>
    </main>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Compagnies</title>

    <style>
      #menu-toggle:checked + #navbar {
        display: block;
        position: fixed;
        top: 5rem;
        left: 0;
        padding-left: 1rem;
        padding-right: 1rem;
        z-index: 9999;
        background-color: white;
      }
      
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
  </style>
</head>
<body>
    <main class ="mt-40 font-display">
        <?php 
        if(isset($contacts) && is_array($contacts) && count($contacts) > 0): ?>
            <div class="relative ">
                <h1 class="text-6xl font-extrabold z-10 relative ml-32">All Contacts</h1>
                <div class="w-80 h-7 absolute inset-0 bg-yellow-300 z-0" style="top:40px; left: 275px;"></div> <!-- Ajout de left: 50px; -->
            </div>
            <div class="search flex justify-end mr-32">
                <input type="text" class="border-2 border-yellow-300 w-1/4 h-10 m-5 rounded-lg" placeholder="Search company name">
            </div>
            <section class=" flex flex-col items-center mt-16 mb-40">
                <div class="array w-5/6 flex content-center">
                    <table class="w-full table-auto border-collapse">
                        <tr class="bg-yellow-300">
                            <th class="px-4 py-2 ">Name</th>
                            <th class="px-4 py-2 ">Phone</th>
                            <th class="px-4 py-2 ">Email</th>
                            <th class="px-4 py-2 ">Company</th>
                            <th class="px-4 py-2 ">Created at</th>
                        </tr>
                        <?php foreach($contacts as $contact): ?>
                            <tr>
                                <td class="border px-4 py-2 font-semibold"><?= $contact->getName() ?></a></td>
                                <td class="border px-4 py-2 font-semibold"><?= $contact->getPhone() ?></td>
                                <td class="border px-4 py-2 font-semibold"><?= $contact->getEmail() ?></td>
                                <td class="border px-4 py-2 font-semibold"><?= $contact->getCompanyName() ?></td>
                                <td class="border px-4 py-2 font-semibold"><?= $contact->getCreatedAt() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </section>
        <?php else: ?>
            <p>No contacts available</p>
        <?php endif; ?>         
    </main>
</body>
</html>



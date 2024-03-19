<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/src/output.css">
    <title>Cogip Contacts</title>

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
  </style>
</head>      
<body>
    <main>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ?>
        <section class="p-2">
            <?php foreach ($detailsCompanies  as $detailsCompany): ?>
            <div class="flex flex-col pl-10 border-b-2 border-black">
                <h2 class="text-4xl font-black uppercase font-inter"><?php echo $detailsCompany->getCompanyName(); ?></h2>
                <div class="font-display">
                    <p class="ml-1"><span class="font-bold">Name:</span><?php echo $detailsCompany->getCompanyName(); ?></p>
                    <p class="ml-1"><span class="font-bold">TVA: </span><?php echo $detailsCompany->getTva(); ?></p>
                    <p class="ml-1"><span class="font-bold">Country: </span><?php echo $detailsCompany->getCountry(); ?></p>
                    <p class="ml-1"><span class="font-bold">Type: </span><?php echo $detailsCompany->getTypeName(); ?></p>  
                </div>   
            </div>
            <?php endforeach; ?>

            <div class="px-10">
                <h2 class="text-4xl font-black mb-16 font-inter">Contact people</h2>
                <div class="w-full flex">
                    <?php foreach ($detailsContacts as $detailsContact): ?>
                    <div class="w-1/3 flex rounded-xl max-w-sm bg-slate-100 mr-14 p-8 justify-between items-center flex-wrap">
                        <img class="rounded-full w-32 h-32" src="assets/images/pp.jpg" />
                        <a href="index.php?url=profile/<?php echo $detailsContact->getId(); ?>" class="text-2xl max-w-40 font-black"><?php echo $detailsContact->getName(); ?></a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="px-10">
                <h2 class="text-4xl font-black mb-16">Last invoices</h2>
                <div>
                    <table class="w-full relative overflow-hidden z-10 bg-white p-8">
                        <tr class="bg-yellow-300 text-[12px]  justify-between h-fit p-2" >
                            <th class=" text-center">Invoice number</th>
                            <th class=" text-center">Dates due</th>
                            <th class=" text-center">Company</th>
                            <th class=" text-center">Created at</th>
                        </tr>
                        <?php foreach ($detailsInvoices as $detailsInvoice): ?>
                        <tr class="py-8 border-collapse">
                            <td class="pl-2 pb-2 text-center"><?php echo $detailsInvoice->getRef(); ?></td>
                            <td class="pb-2 text-center"><?php echo $detailsInvoice->getUpdatedAt(); ?></td>
                            <td class="pb-2 text-center">
                                <?php
                                    foreach ($detailsCompanies as $detailsCompany) {
                                            $companyName = $detailsCompany->getCompanyName(); }
                                    echo $companyName;
                                ?>
                            </td>
                            <td class="pb-2 text-center"><?php echo $detailsInvoice->getCreatedAt(); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
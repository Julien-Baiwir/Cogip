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
<svg
  width="1399"
  height="112"
  viewBox="0 0 1299 112"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  class="relative -top-16 w-screen mx-8"
>
<path
    class="w-full"
    d="M0 39.3514H649.5L1046 0L1299 112H0V39.3514Z"
    fill="white"
></path>
</svg>
<?php foreach ($detailsCompanies  as $detailsCompany): ?>
<body class="bg-white w-screen">
    <main>
        <div class="p-12">
            <div class="w-1/2 flex flex-col min-w-64 px-10">
            <div class="mb-20 mt-14">
                <h1 class="text-6xl font-black uppercase relative z-10"><?php echo $detailsCompany->getCompanyName(); ?></h1>
                <svg
                width="496"
                height="35"
                viewBox="0 0 496 35"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="pl-8 w-full relative -top-4 z-0"
                >
                <rect width="496" height="35" fill="#fde047" />
                </svg>
            </div>
            <div class="flex text-2xl">
                <p class="font-bold">Name:</p>
                <p class="ml-1"><?php echo $detailsCompany->getCompanyName(); ?></p>
            </div>
            <div class="flex text-2xl">
                <p class="font-bold">TVA:</p>
                <p class="ml-1"> <?php echo $detailsCompany->getTva(); ?></p>
            </div>
            <div class="flex text-2xl">
                <p class="font-bold">Country:</p>
                <p class="ml-1"><?php echo $detailsCompany->getCountry(); ?></p>
            </div>
            <div class="flex text-2xl">
                <p class="font-bold">Type:</p>
                <p class="ml-1"><?php echo $detailsCompany->getTypeName(); ?></p>
            </div>
            </div>
            <?php endforeach; ?>
            
            <div
            class="h-px w-full border-t-2 mt-20 mb-20 px-10"
            style="color: rgba(115, 115, 115, 1)"
            ></div>

            <div class="px-10">
        <div class="text-6xl font-black mb-16">Contact people</div>
        <div class="w-full flex">
            <?php foreach ($detailsContacts as $detailsContact): ?>
            <div class="w-1/3 flex rounded-xl max-w-sm bg-slate-100 mr-14 p-8 justify-between items-center flex-wrap">
                <img class="rounded-full w-32 h-32" src="../src/img/geek.webp" />
                <p class="text-2xl max-w-40 font-black"><?php echo $detailsContact->getName(); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        </div>



            <div class="px-10">
            <div class="text-6xl font-black mb-16">Last invoices</div>
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
        </div>
    </main>
</body>
</html>






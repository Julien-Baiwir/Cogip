<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>Cogip</title>

    <style>
      #menu-toggle:checked + #navbar {
        display: block;
      }
  </style>
</head>
<body>
    <header class="bg-yellow-300 text-xl p-10 font-display flex flex-wrap items-center lg:p-12">
        <span class="text-5xl font-black">COGIP</span>

        <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div id="navbar" class="hidden lg:flex lg:items-center lg:w-auto w-full">
            <nav>
                <ul class="lg:flex items-center justify-between text-base font-semibold">
                    <li class="block hover:border-black hover:border-2 p-3"><a href="#">Home</a></li>
                    <li class="block hover:border-black hover:border-2 p-3"><a href="#">Invoices</a></li>
                    <li class="block hover:border-black hover:border-2 p-3"><a href="#">Compagnies</a></li>
                    <li class="block hover:border-black hover:border-2 p-3"><a href="#">Contacts</a></li>
                </ul>
            </nav>
            <div class="lg:ml-20 flex items-center">
                <a href="#" class="p-3 font-semibold bg-white rounded-lg">Sign up</a>
                <a href="#" class="p-3 font-semibold">Login</a>
            </div>
        </div>
    </header>


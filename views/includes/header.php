<header class="bg-yellow-300 ">
    <section class="text-xl p-8 font-display flex flex-wrap items-center lg:p-18">
        <div class="flex-1 flex justify-between items-center"><span class="text-5xl font-bold">COGIP</span></div>

        <label for="menu-toggle" class="cursor-pointer lg:hidden block justify-self-end"><svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div id="navbar" class="hidden lg:flex lg:flex-row lg:items-center lg:gap-10 lg:w-auto w-full">
            <nav>
                <ul class="flex items-end flex-col lg:flex-row lg:items-center lg:justify-center font-semibold">
                    <li class="block hover:border-black hover:border-2 p-2"><a href="#" class="cursor-pointer">Home</a></li>
                    <li class="block hover:border-black hover:border-2 p-2"><a href="#" class="cursor-pointer">Invoices</a></li>
                    <li class="block hover:border-black hover:border-2 p-2"><a href="#" class="cursor-pointer">Compagnies</a></li>
                    <li class="block hover:border-black hover:border-2 p-2"><a href="#" class="cursor-pointer">Contacts</a></li>
                </ul>
            </nav>
            <div class="flex items-end justify-end gap-2">
                <a href="#" class="p-2 font-semibold bg-white rounded-lg cursor-pointer">Sign up</a>
                <a href="#" class="p-2 font-semibold cursor-pointer">Login</a>
            </div>
        </div>
    </section>
    <!-- home page header -->
    <?php if ($isHomePage): ?>
    <section class="flex flex-col items-center font-black lg:flex-row lg:p-14" id="homepage">
        <h1 class="uppercase font-inter text-4xl text-center lg:text-6xl lg:text-left ">Manage your customers and invoices easly</h1>
        <img src="assets/images/header.png" alt="" class="overflow-hidden">
    </section>
    <?php endif; ?>
    <!-- <div class="absolute"><img src="assets/images/rectangle.svg" alt="" class="h-20 relative bottom-10 left-14 lg:bottom-24"></div> -->
</header>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="overflow-x-hidden">
    <main class="bg-gray-200  w-screen flex lg:pr-10 ">
        <div class="board w-1/3 h-screen bg-white flex flex-col h-svh lg:w-1/6 sticky top-0  ">
            <img src="./assets/images/noe.jpg" alt="photo id" class="w-16 lg:w-32 rounded-full  self-center mt-10">
            <h1 class="text-center text-xs lg:text-xl font-bold mt-5">Noé</h1>
            <h1 class="text-center text-xs lg:text-xl font-bold p-4">Andernack</h1>
            <div class="line border-t-2"></div>
            <div class="dashboard flex items-center mt-5 ">
                <svg class="ml-2  w-[15px] h-[15px] lg:w-[30px] lg:h-[30px]" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.0968 6.03223V21.2903" stroke="#9698D6" />
                    <rect x="0.5" y="0.5" width="21" height="21" rx="2.5" stroke="#9698D6" />
                    <path d="M0.354858 6.03223H21.2903" stroke="#9698D6" />
                </svg>
                <a class=" ml-1 text-xs lg:text-xl hover:font-bold" href="index.php?url=dashboard">Dashboard</a>
            </div>
            <div class="invoices flex items-center mt-3 lg:mt-6">
                <svg class=" ml-2 w-[15px] h-[15px] lg:w-[30px] lg:h-[30px]" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.88232 11H17.4706" stroke="#9698D6" />
                    <path d="M3.88232 16.8235H17.4706" stroke="#9698D6" />
                    <path d="M3.88232 7.11768H7.76468" stroke="#9698D6" />
                    <rect x="0.5" y="0.5" width="21" height="21" rx="2.5" stroke="#9698D6" />
                </svg>
                <a class=" ml-1 text-xs lg:text-xl hover:font-bold" href="index.php?url=dashboardinvoices">Invoices</a>

            </div>
            <div class="companies flex items-center mt-3 lg:mt-6">
                <svg class=" ml-2 w-[15px] h-[15px] lg:w-[30px] lg:h-[30px]" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.82355 10.353H7.76472M5.82355 14.2354H7.76472M12.2941 8.41187H15.5294M12.2941 11.6472H15.5294M12.2941 14.2354H15.5294" stroke="#9698D6" />
                    <path d="M1.29407 16.8236H20.7058M3.8823 16.8236V7.11768H7.1176H10.3529V16.8236H3.8823Z" stroke="#9698D6" />
                    <path d="M10.353 7.62853V5.17651H18.1177V16.8236" stroke="#9698D6" />
                    <rect x="0.5" y="0.5" width="21" height="21" rx="2.5" stroke="#9698D6" />
                </svg>
                <a class=" ml-1 text-xs lg:text-xl hover:font-bold" href="index.php?url=dashboardcompanies">Companies</a>

            </div>
            <div class="contacts flex items-center mt-3 lg:mt-6">
                <svg class=" ml-2 w-[15px] h-[15px] lg:w-[30px] lg:h-[30px]" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="21" height="21" rx="2.5" stroke="#9698D6" />
                    <path d="M16.8235 18.1176H5.17645V11.647L11 12.9411L16.8235 11.647V18.1176Z" stroke="#9698D6" />
                    <circle cx="11" cy="8.41174" r="4.02941" stroke="#9698D6" />
                </svg>
                <a class=" ml-1 text-xs lg:text-xl hover:font-bold" href="index.php?url=dashboardcontacts">Contacts</a>

            </div>
            <div class="logout flex items-center justify-between mt-12 mr-12 self-end">
                <img src="./assets/images/noe.jpg" alt="photo id" class="w-4 lg:w-8 rounded-full m-5 ">
                <a href="index.php?url=home" class="text-xs lg:text-xl text-blue-500 hover:text-violet-600 ">Logout</a>
            </div>
        </div>

        <div class="content flex-grow h-[1340px] lg:grid lg:grid-cols-4 lg:grid-rows-8 lg:gap-x-10 lg:gap-y-10">
            <div class=" h-[180px] flex lg:col-span-4 lg:row-span-2 lg:h-auto lg:h-[300px]">
                <div class="content__dashboard ">
                    <h1 class=" font-bold mt-3 ml-2 lg:text-4xl ">Dashboard</h1>
                    <p class="ml-2 text-xs">dashboard/</p>
                </div>
                <div class="content__rectangle ml-10 rounded-lg w-full bg-indigo-300 h-[120px] absolute top-[60px] lg:mt-32 lg:h-[200px]">
                    <h1 class="ml-5 mt-2 text-white w-[110px] lg:text-6xl lg:w-[900px]">Welcome back Noé!</h1>
                    <p class="ml-5 text-xs font-light text-white w-[120px] lg:text-2xl  lg:w-[500px] lg:mt-10">You can
                        here add an invoice, a company and some contacts</p>
                </div>
                <svg class="absolute  left-[330px] sm:left-[600px] h-[120px] lg:h-[320px] lg:left-[900px]" viewBox="0 0 417 333" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M185.938 274.782C205.456 274.782 221.279 271.286 221.279 266.973C221.279 262.661 205.456 259.165 185.938 259.165C166.42 259.165 150.597 262.661 150.597 266.973C150.597 271.286 166.42 274.782 185.938 274.782Z" fill="black" />
                    <path d="M185.938 266.973L166.087 329.076" stroke="black" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M185.938 266.973L205.79 329.076" stroke="black" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M172.605 308.685L194.736 294.501" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M177.051 294.501L199.187 308.685" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M220.719 199.749C220.629 202.502 220.669 212.147 220.215 216.272" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M107.025 77.7814C107.025 75.8246 105.438 74.2383 103.48 74.2383C101.522 74.2383 99.9353 75.8246 99.9353 77.7814V90.0117C99.9353 91.9686 101.522 93.5549 103.48 93.5549C105.438 93.5549 107.025 91.9686 107.025 90.0117V77.7814Z" fill="black" />
                    <path d="M103.48 114.114C107.408 114.114 110.592 110.931 110.592 107.005C110.592 103.079 107.408 99.8967 103.48 99.8967C99.5522 99.8967 96.3682 103.079 96.3682 107.005C96.3682 110.931 99.5522 114.114 103.48 114.114Z" fill="#FBDC8E" />
                    <path d="M341.239 191.431H344.599C344.952 191.43 345.29 191.289 345.54 191.039C345.79 190.79 345.931 190.452 345.932 190.099V169.456C345.933 169.281 345.898 169.107 345.831 168.946C345.764 168.785 345.665 168.638 345.54 168.515L341.295 164.272C341.172 164.148 341.026 164.05 340.864 163.983C340.703 163.915 340.529 163.881 340.355 163.881H327.816C327.463 163.882 327.125 164.023 326.876 164.272C326.626 164.522 326.485 164.86 326.484 165.213V167.205" fill="#FBDC8E" />
                    <path d="M49.3125 240.688C59.9522 242.703 58.0539 306.177 37.6311 302.337C18.3452 298.677 36.332 238.219 49.3125 240.688Z" fill="black" />
                    <path d="M2.59834 248.524C11.0653 243.733 46.5069 288.31 30.2953 297.479C14.9797 306.177 -7.71102 254.368 2.59834 248.524Z" fill="#FBDC8E" />
                    <path d="M45.7453 333H24.365C23.5039 333 22.673 332.682 22.0315 332.108C21.3899 331.534 20.9826 330.743 20.8875 329.888L18.1884 305.662C18.1299 305.171 18.1761 304.673 18.3241 304.201C18.4721 303.728 18.7185 303.293 19.047 302.923C19.3755 302.553 19.7787 302.256 20.2301 302.053C20.6815 301.85 21.1709 301.745 21.6659 301.744H48.3325C48.8236 301.744 49.3091 301.848 49.7575 302.048C50.2059 302.248 50.6071 302.541 50.9351 302.906C51.2631 303.271 51.5105 303.702 51.6612 304.169C51.812 304.636 51.8627 305.129 51.81 305.618L49.2285 329.843C49.1424 330.707 48.7385 331.508 48.0949 332.092C47.4514 332.675 46.6141 332.999 45.7453 333Z" fill="#969696" />
                    <path d="M55.3211 215.97C63.4241 218.321 57.2139 267.315 41.6966 262.803C27.0474 258.549 45.4598 213.104 55.3211 215.97Z" fill="#AB8DE5" />
                    <path d="M68.6824 254.95C74.2823 259.775 51.502 296.684 40.7391 287.415C30.5753 278.7 61.845 249.084 68.6824 254.95Z" fill="#FBDC8E" />
                    <path d="M35.1112 221.063C47.2405 221.063 58.3451 298.475 35.1112 298.475C13.1709 298.475 20.3443 221.063 35.1112 221.063Z" fill="#78E5E1" />
                    <path d="M56.3963 296.505H13.7253C12.4727 296.505 11.4573 297.52 11.4573 298.772V302.903C11.4573 304.155 12.4727 305.17 13.7253 305.17H56.3963C57.6489 305.17 58.6643 304.155 58.6643 302.903V298.772C58.6643 297.52 57.6489 296.505 56.3963 296.505Z" fill="#D8D8D8" />
                    <path d="M335.595 167.205H323.275C323.077 167.205 322.882 167.244 322.699 167.32C322.517 167.396 322.351 167.507 322.212 167.647C322.072 167.787 321.962 167.953 321.887 168.135C321.812 168.318 321.774 168.514 321.774 168.711V193.228C321.774 193.626 321.932 194.008 322.213 194.29C322.495 194.573 322.876 194.732 323.275 194.733H339.733C340.132 194.732 340.513 194.573 340.795 194.29C341.076 194.008 341.234 193.626 341.234 193.228V172.853C341.235 172.656 341.196 172.46 341.121 172.278C341.046 172.095 340.936 171.929 340.797 171.79L336.653 167.648C336.373 167.366 335.992 167.207 335.595 167.205Z" fill="#D8D8D8" />
                    <path d="M341.239 172.265H337.056C336.834 172.265 336.62 172.177 336.462 172.019C336.305 171.862 336.216 171.648 336.216 171.426V167.205" fill="#969696" />
                    <path d="M345.949 168.946H341.766C341.542 168.945 341.328 168.855 341.169 168.697C341.011 168.539 340.922 168.325 340.92 168.101V163.881" fill="#64CCC4" />
                    <path d="M321.791 139.179H292.918C291.981 139.179 291.221 139.939 291.221 140.875V150.301C291.221 151.238 291.981 151.997 292.918 151.997H321.791C322.728 151.997 323.488 151.238 323.488 150.301V140.875C323.488 139.939 322.728 139.179 321.791 139.179Z" fill="#78E5E1" />
                    <path d="M307.349 160.785L311.235 149.02H303.463L307.349 160.785Z" fill="#78E5E1" />
                    <path d="M299.649 142.594L296.39 148.23H302.903L299.649 142.594Z" fill="white" />
                    <path d="M315.054 148.23L318.313 142.594H311.795L315.054 148.23Z" fill="white" />
                    <path d="M307.349 147.861C308.7 147.861 309.796 146.766 309.796 145.415C309.796 144.064 308.7 142.969 307.349 142.969C305.997 142.969 304.902 144.064 304.902 145.415C304.902 146.766 305.997 147.861 307.349 147.861Z" fill="white" />
                    <path d="M304.835 112.015H285.885C285.065 112.015 284.401 112.679 284.401 113.498V124.951C284.401 125.77 285.065 126.434 285.885 126.434H304.835C305.654 126.434 306.319 125.77 306.319 124.951V113.498C306.319 112.679 305.654 112.015 304.835 112.015Z" fill="#D8D8D8" />
                    <path d="M285.089 112.469L295.36 119.225" stroke="#969696" stroke-width="0.82" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M306.319 112.015L295.36 119.225" stroke="#969696" stroke-width="0.82" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M306.319 115.15C308.05 115.15 309.454 113.746 309.454 112.015C309.454 110.284 308.05 108.881 306.319 108.881C304.587 108.881 303.183 110.284 303.183 112.015C303.183 113.746 304.587 115.15 306.319 115.15Z" fill="#FBDC8E" />
                    <path d="M307.827 110.829V116.138H307.185V111.503H307.153L305.857 112.364V111.71L307.185 110.829H307.827Z" fill="white" />
                    <path d="M416.311 120.809H334.553C334.173 120.809 333.864 121.117 333.864 121.497V121.922C333.864 122.303 334.173 122.611 334.553 122.611H416.311C416.692 122.611 417 122.303 417 121.922V121.497C417 121.117 416.692 120.809 416.311 120.809Z" fill="#D8D8D8" />
                    <path d="M369.088 85.0188H364.12C363.329 85.0188 362.687 85.6603 362.687 86.4517V119.376C362.687 120.167 363.329 120.809 364.12 120.809H369.088C369.879 120.809 370.521 120.167 370.521 119.376V86.4517C370.521 85.6603 369.879 85.0188 369.088 85.0188Z" fill="#969696" />
                    <path d="M373.248 93.4094H371.714C371.055 93.4094 370.521 93.9432 370.521 94.6017V119.616C370.521 120.275 371.055 120.809 371.714 120.809H373.248C373.907 120.809 374.441 120.275 374.441 119.616V94.6017C374.441 93.9432 373.907 93.4094 373.248 93.4094Z" fill="#D8D8D8" />
                    <path d="M377.207 93.4094H375.595C374.957 93.4094 374.441 93.9257 374.441 94.5625V119.656C374.441 120.292 374.957 120.809 375.595 120.809H377.207C377.844 120.809 378.361 120.292 378.361 119.656V94.5625C378.361 93.9257 377.844 93.4094 377.207 93.4094Z" fill="#969696" />
                    <path d="M380.05 95.3702L378.727 95.9774C378.108 96.2612 377.837 96.9923 378.121 97.6103L388.53 120.273C388.814 120.891 389.545 121.162 390.164 120.878L391.487 120.271C392.105 119.987 392.376 119.256 392.092 118.638L381.683 95.9755C381.4 95.3575 380.668 95.0865 380.05 95.3702Z" fill="#D8D8D8" />
                    <path d="M366.601 111.752C367.81 111.752 368.791 110.772 368.791 109.563C368.791 108.355 367.81 107.375 366.601 107.375C365.392 107.375 364.412 108.355 364.412 109.563C364.412 110.772 365.392 111.752 366.601 111.752Z" fill="#D8D8D8" />
                    <path d="M368.584 113.062H364.619C364.328 113.062 364.092 113.297 364.092 113.588C364.092 113.879 364.328 114.114 364.619 114.114H368.584C368.874 114.114 369.11 113.879 369.11 113.588C369.11 113.297 368.874 113.062 368.584 113.062Z" fill="#D8D8D8" />
                    <path d="M368.584 115.754H364.619C364.328 115.754 364.092 115.99 364.092 116.28C364.092 116.571 364.328 116.806 364.619 116.806H368.584C368.874 116.806 369.11 116.571 369.11 116.28C369.11 115.99 368.874 115.754 368.584 115.754Z" fill="#D8D8D8" />
                    <path d="M328.466 169.735H324.501C324.211 169.735 323.975 169.971 323.975 170.262C323.975 170.552 324.211 170.788 324.501 170.788H328.466C328.757 170.788 328.992 170.552 328.992 170.262C328.992 169.971 328.757 169.735 328.466 169.735Z" fill="#969696" />
                    <path d="M328.466 172.265H324.501C324.211 172.265 323.975 172.501 323.975 172.792C323.975 173.082 324.211 173.318 324.501 173.318H328.466C328.757 173.318 328.992 173.082 328.992 172.792C328.992 172.501 328.757 172.265 328.466 172.265Z" fill="#969696" />
                    <path d="M338.747 176.592H324.272C323.981 176.592 323.745 176.828 323.745 177.118C323.745 177.409 323.981 177.645 324.272 177.645H338.747C339.038 177.645 339.274 177.409 339.274 177.118C339.274 176.828 339.038 176.592 338.747 176.592Z" fill="#969696" />
                    <path d="M338.747 179.077H324.272C323.981 179.077 323.745 179.313 323.745 179.604C323.745 179.894 323.981 180.13 324.272 180.13H338.747C339.038 180.13 339.274 179.894 339.274 179.604C339.274 179.313 339.038 179.077 338.747 179.077Z" fill="#969696" />
                    <path d="M338.747 181.563H324.272C323.981 181.563 323.745 181.798 323.745 182.089C323.745 182.379 323.981 182.615 324.272 182.615H338.747C339.038 182.615 339.274 182.379 339.274 182.089C339.274 181.798 339.038 181.563 338.747 181.563Z" fill="#969696" />
                    <path d="M372.89 97.5458C372.89 97.3202 372.707 97.1372 372.481 97.1372C372.255 97.1372 372.072 97.3202 372.072 97.5458V116.667C372.072 116.892 372.255 117.075 372.481 117.075C372.707 117.075 372.89 116.892 372.89 116.667V97.5458Z" fill="#969696" />
                    <path d="M355.693 121.71H352.187C351.417 121.71 350.793 122.334 350.793 123.103C350.793 123.873 351.417 124.497 352.187 124.497H355.693C356.463 124.497 357.087 123.873 357.087 123.103C357.087 122.334 356.463 121.71 355.693 121.71Z" fill="#D8D8D8" />
                    <path d="M398.677 121.71H395.172C394.402 121.71 393.777 122.334 393.777 123.103C393.777 123.873 394.402 124.497 395.172 124.497H398.677C399.447 124.497 400.072 123.873 400.072 123.103C400.072 122.334 399.447 121.71 398.677 121.71Z" fill="#D8D8D8" />
                    <path d="M266.358 124.436H245.913C242.202 124.436 239.193 127.443 239.193 131.153V141.122C239.193 144.831 242.202 147.838 245.913 147.838H266.358C270.069 147.838 273.078 144.831 273.078 141.122V131.153C273.078 127.443 270.069 124.436 266.358 124.436Z" fill="#D8D8D8" />
                    <path d="M251.3 128.203H246.204V144.071H251.3V128.203Z" fill="#AB8DE5" />
                    <path d="M258.686 138.759H253.59V144.077H258.686V138.759Z" fill="#AB8DE5" />
                    <path d="M266.067 134.281H260.971V144.071H266.067V134.281Z" fill="#AB8DE5" />
                    <path d="M103.48 85.573C100.664 85.5723 97.8749 86.1261 95.2728 87.2028C92.6707 88.2796 90.3063 89.8582 88.3147 91.8484C86.323 93.8387 84.7431 96.2016 83.6652 98.8023C82.5873 101.403 82.0325 104.19 82.0325 107.005H124.928C124.928 104.19 124.373 101.403 123.295 98.8023C122.217 96.2016 120.637 93.8387 118.645 91.8484C116.654 89.8582 114.289 88.2796 111.687 87.2028C109.085 86.1261 106.296 85.5723 103.48 85.573Z" fill="#AB8DE5" />
                    <path d="M103.48 78.3188V0.559814" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M220.719 212.281L230.317 208.839C229.903 191.336 225.809 152.227 219.997 146.411C218.63 145.051 191.605 142.677 186.784 142.677C158.012 142.677 149.477 145.958 147.31 148.129C140.59 154.846 138.496 185.968 138.496 196.866C138.496 207.764 169.295 213.417 169.295 213.417L205.398 215.897C205.398 215.897 213.316 216.714 220.165 217.117C220.316 215.018 220.719 212.281 220.719 212.281Z" fill="#78E5E1" />
                    <path d="M249.317 222.429C251.944 221.651 278.062 217.392 283.751 222.989C289.441 228.586 307.349 308.836 307.349 310.683H292.929L273.464 268.809" fill="#1F161E" />
                    <path d="M154.226 215.293C153.571 218.567 149.634 222.082 149.634 239.921C149.634 264.589 169.85 265.109 177.107 265.109C199.719 265.109 236.303 258.392 238.773 257.161C240.414 259.904 270.614 321.531 270.754 322.908H284.658C284.658 322.908 276.04 230.708 260.489 220.252C255.438 216.893 165.823 213.3 154.226 215.293Z" fill="#55B79D" />
                    <path d="M235.648 197.258C231.997 197.258 228.984 198.125 220.719 199.749L220.288 215.556C228.128 212.399 229.947 208.01 232.221 208.01C237.899 208.01 240.867 210.938 244.222 210.938C246.562 210.938 250.773 209.102 250.773 206.605C250.773 201.377 240.173 197.258 235.648 197.258Z" fill="#F8CDBA" />
                    <path d="M293.747 309.575C293.747 310.907 292.968 319.27 294.52 320.048C296.071 320.826 313.122 321.285 313.895 320.512C314.668 319.74 315.133 318.111 314.455 317.646C313.778 317.182 307.175 315.861 306.279 315.24C305.383 314.618 304.146 311.321 304.599 309.575" fill="#1F161E" />
                    <path d="M191.874 146.4C191.874 148.51 179.616 148.572 179.616 146.4V129.238H191.874V146.4Z" fill="#F8CDBA" />
                    <path d="M187.881 134.897C186.761 134.897 179.616 138.054 179.616 139.817V130.503C181.397 130.503 187.881 134.897 187.881 134.897Z" fill="#1F161E" />
                    <path d="M190.25 135.625C198.446 135.625 205.09 128.984 205.09 120.792C205.09 112.6 198.446 105.959 190.25 105.959C182.054 105.959 175.41 112.6 175.41 120.792C175.41 128.984 182.054 135.625 190.25 135.625Z" fill="#F8CDBA" />
                    <path d="M205.566 109.149C203.729 112.065 199.887 113.403 195.727 113.403C192.182 113.403 187.019 112.373 183.345 114.467C181.357 115.586 179.078 118.133 178.619 123.232C178.619 124.105 177.628 127.492 177.628 128.583C177.628 129.328 176.788 129.815 175.388 129.815C174.666 129.815 173.238 128.645 173.238 126.859C173.238 124.794 174.061 124.061 174.061 122.309C174.061 120.557 171.916 118.872 171.916 114.002C171.916 106.988 176.396 102.667 179.565 102.667C182.455 102.667 183.362 103.339 183.726 103.624C183.726 97.249 192.126 94.3384 195.458 94.3384C199.266 94.3384 201.058 95.9001 201.058 97.8871C201.058 101.055 199.546 103.748 198.779 104.352C200.515 102.791 202.771 101.931 205.106 101.94C209.469 101.94 210.936 104.806 210.936 106.765C210.936 111.024 205.823 114.97 203.919 114.97C203.44 113.957 202.878 112.986 202.239 112.065" fill="#1F161E" />
                    <path d="M179.078 125.913C180.826 125.913 182.242 124.498 182.242 122.751C182.242 121.004 180.826 119.588 179.078 119.588C177.331 119.588 175.914 121.004 175.914 122.751C175.914 124.498 177.331 125.913 179.078 125.913Z" fill="#F8CDBA" />
                    <path d="M205.235 123.512C206.59 123.512 207.688 122.941 207.688 122.236C207.688 121.531 206.59 120.96 205.235 120.96C203.881 120.96 202.783 121.531 202.783 122.236C202.783 122.941 203.881 123.512 205.235 123.512Z" fill="#FA9E9F" />
                    <path d="M189.808 123.512C191.162 123.512 192.26 122.941 192.26 122.236C192.26 121.531 191.162 120.96 189.808 120.96C188.453 120.96 187.355 121.531 187.355 122.236C187.355 122.941 188.453 123.512 189.808 123.512Z" fill="#FA9E9F" />
                    <path d="M199.243 119.588C199.703 120.243 202.043 122.992 199.574 124.105" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M194.629 127.313C193.89 127.313 192.753 126.395 192.154 125.572" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M214.195 167.149C215.315 169.528 220.719 192.478 220.719 199.749" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M138.496 195.019C138.496 220.817 138.737 228.301 149.097 228.301C172.974 228.301 209.071 208.71 215.505 208.71C221.189 208.71 224.157 211.643 227.512 211.643C229.847 211.643 234.058 209.802 234.058 207.311C234.058 202.077 223.457 197.957 218.938 197.957C208.763 197.957 168.159 207.764 167.167 207.764C166.176 207.764 164.507 207.333 164.507 205.665C164.507 202.637 166.49 195.64 166.747 195.03L138.496 195.019Z" fill="#F8CDBA" />
                    <path d="M172.711 172.517C172.028 174.482 166.703 194.784 166.087 197.258" stroke="#1F161E" stroke-miterlimit="10" stroke-linecap="round" />
                    <path d="M374.888 329.545C375.291 331.075 376.858 331.99 378.39 331.588C379.921 331.185 380.836 329.618 380.434 328.087L351.763 219.082C351.361 217.552 349.793 216.637 348.261 217.039C346.73 217.442 345.815 219.009 346.217 220.54L374.888 329.545Z" fill="#969696" />
                    <path d="M345.933 220.544C346.335 219.014 345.42 217.447 343.889 217.044C342.357 216.642 340.789 217.556 340.387 219.087L311.716 328.092C311.313 329.623 312.229 331.19 313.76 331.592C315.291 331.995 316.859 331.08 317.262 329.549L345.933 220.544Z" fill="#969696" />
                    <path d="M306.37 220.544C306.773 219.013 305.858 217.446 304.326 217.043C302.795 216.641 301.227 217.556 300.825 219.086L272.154 328.091C271.751 329.622 272.666 331.189 274.198 331.592C275.729 331.994 277.297 331.079 277.7 329.549L306.37 220.544Z" fill="#D8D8D8" />
                    <path d="M334.827 327.533C335.223 329.068 336.789 329.992 338.325 329.596C339.861 329.2 340.785 327.635 340.389 326.1L312.2 216.772C311.804 215.237 310.238 214.313 308.702 214.709C307.166 215.104 306.242 216.67 306.637 218.205L334.827 327.533Z" fill="#D8D8D8" />
                    <path d="M144.858 220.547C145.261 219.016 144.346 217.449 142.814 217.046C141.283 216.644 139.715 217.559 139.312 219.089L110.642 328.094C110.239 329.625 111.154 331.192 112.686 331.595C114.217 331.997 115.785 331.082 116.188 329.552L144.858 220.547Z" fill="#969696" />
                    <path d="M173.327 329.552C173.729 331.082 175.297 331.997 176.829 331.595C178.36 331.192 179.275 329.625 178.872 328.094L150.202 219.089C149.799 217.559 148.231 216.644 146.7 217.046C145.168 217.449 144.253 219.016 144.656 220.547L173.327 329.552Z" fill="#969696" />
                    <path d="M363.583 211.66H86.294C84.893 211.66 83.7573 212.795 83.7573 214.196V217.604C83.7573 219.005 84.893 220.14 86.294 220.14H363.583C364.984 220.14 366.12 219.005 366.12 217.604V214.196C366.12 212.795 364.984 211.66 363.583 211.66Z" fill="#D8D8D8" />
                    <path d="M103.881 220.548C104.284 219.017 103.369 217.45 101.837 217.048C100.306 216.645 98.7381 217.56 98.3354 219.091L69.6648 328.096C69.2622 329.626 70.1773 331.194 71.7087 331.596C73.2402 331.998 74.808 331.084 75.2107 329.553L103.881 220.548Z" fill="#D8D8D8" />
                    <path d="M132.349 329.552C132.752 331.083 134.32 331.997 135.851 331.595C137.383 331.192 138.298 329.625 137.895 328.095L109.225 219.09C108.822 217.559 107.254 216.644 105.723 217.047C104.191 217.449 103.276 219.016 103.679 220.547L132.349 329.552Z" fill="#D8D8D8" />
                    <path d="M291.35 211.66H239.546L248.931 179.396C249.166 178.618 249.646 177.936 250.3 177.453C250.954 176.97 251.747 176.711 252.56 176.715H296.519C297.096 176.706 297.668 176.832 298.188 177.082C298.708 177.333 299.163 177.701 299.515 178.159C299.868 178.616 300.108 179.149 300.218 179.716C300.328 180.283 300.304 180.867 300.147 181.423L291.35 211.66Z" fill="black" />
                    <path d="M271.807 197.353C273.557 197.353 274.976 195.934 274.976 194.185C274.976 192.435 273.557 191.017 271.807 191.017C270.056 191.017 268.637 192.435 268.637 194.185C268.637 195.934 270.056 197.353 271.807 197.353Z" fill="white" />
                    <path d="M245.7 209.393H209.351V211.66H245.7V209.393Z" fill="black" />
                </svg>



            </div>
        </div>
        <div class=" w-full flex flex-col items-center justify-center h-screen lg:mt-96">
            <div class="bg-white p-8 rounded-lg shadow-lg  w-full ml-8">
                <h2 class="text-2xl font-bold text-center mb-2">New company</h2>
                <form>
                    <div class="mb-4">
                        <input type="text" id="name" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="Name">
                    </div>
                    <div class="mb-4">
                        <input type="text" id="tva" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="TVA">
                    </div>
                    <div class="mb-6">
                        <input type="text" id="country name" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="Country">
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Save</button>
                </form>
            </div>



            <div class="h-[200px] w-full  lg:col-span-2 lg:row-span-3 lg:h-auto lg:ml-10 ">
                <div class="fond bg-white p-4 rounded-lg mt-8 shadow-lg ">
                    <h1 class="m-5 text-lg font-bold text-gray-800 lg:text-xl">Last Companies</h1>
                    <table class="border-0 ml-5 text-xs w-full">
                        <tr>
                            <td class="lg:py-1  font-bold lg:text-lg">Name </th>
                            <td class="lg:py-1 font-bold lg:text-lg w-[200px]">TVA</th>
                            <td class="lg:py-1  font-bold lg:text-lg">Country</th>
                        </tr>
                        <?php foreach ($fiveCompanies as $fivecomp) : ?>
                            <tr>
                                <td class="lg:py-1 lg:text-base"><?= $fivecomp->getName() ?></td>
                                <td class="lg:py-1 lg:text-base"><?= $fivecomp->getTva() ?></td>
                                <td class="lg:py-1 lg:text-base pr-4" style="word-wrap: break-word;"><?= $fivecomp->getCountry() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
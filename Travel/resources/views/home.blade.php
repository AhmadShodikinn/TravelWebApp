<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <!-- End Font -->

    <title>NUFI TRAVEL</title>
</head>
<body class="font-poppins w-full lg:h-screen">
    <div class="mx-auto">
        <div class="bg-[#F7F7F7]">
            <!-- Hero -->
        <header class="absolute inset-x-[2px] lg:inset-x-[100px] top-0 z-50">
        <nav class="flex items-center justify-between p-6" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Nufi Travel</span>
                    <img class="h-12 w-auto lg:h-[80px] lg:w-auto md:h-20 md:w-auto mx-auto" src="{{ asset('img/Logo-png.png') }}" alt="">
                </a>
            </div>
            <!-- Menu for screens wider than lg -->
            <div class="hidden lg:flex lg:gap-x-5">
                <a href="#" class="text-xl text-white">Rumah</a>
                <a href="#" class="text-xl text-white">Layanan</a>
                <a href="#" class="text-xl text-white">Tujuan</a>
                <a href="#" class="text-xl text-white">Armada</a>
                <a href="#" class="text-xl text-white">Ulasan</a>
                <a href="#" class="text-xl text-white">Galeri</a>
            </div>

            <!-- Dropdown language for screens wider than lg -->
            <div class="hidden items-center pl-5 pt-2 lg:flex relative text-left">
    <div>
        <button type="button" id="menu-button" aria-expanded="true" aria-haspopup="true" class="inline-flex w-full justify-center gap-x-1.5">
            <img id="current-flag" src="{{ asset('img/lang-id.svg') }}" alt="Indonesian Flag" class="h-7 w-7">
            <img src="/img/icon-dropdown.svg" alt="Dropdown Icon" class="h-[5px] w-[10px] self-center">
        </button>
    </div>

    <div id="dropdown-menu" class=" absolute right-0 mt-5 w-auto origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div class="py-1" role="none">
            <a href="#" id="change-language"role="menuitem" tabindex="-1">
                <img src="{{ asset('img/lang-eng.png') }}" alt="English Flag" class="h-[5px] w-[10px] self-center">
            </a>
        </div>
    </div>
</div>


            <!-- Hamburger menu for screens smaller than lg -->
            <!-- <div class="lg:hidden">
                <button id="open-mobile-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <img src="{{ asset('img/icon-hamburger.svg')}}" alt="Dropdown Icon" class="h-6 w-6">
                </button>
            </div> -->

            <!-- Dropdown language for screens smaller than lg -->
            <div class="lg:hidden relative inline-block text-left">
                <div>
                    <button type="button" id="menu-button" aria-expanded="true" aria-haspopup="true" class="inline-flex w-full justify-center gap-x-1.5">
                        <img id="current-flag" src="{{ asset('img/lang-id.svg') }}" alt="Indonesian Flag" class="h-7 w-7">
                        <img src="/img/icon-dropdown.svg" alt="Dropdown Icon" class="h-[5px] w-[10px] self-center">
                    </button>
                </div>

                <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="#" id="change-language" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">
                            <img src="{{ asset('img/lang-eng.png') }}" alt="English Flag" class="h-5 w-5 inline"> English
                        </a>
                    </div>
                </div>
            </div>
        </nav>

            <!-- Mobile menu, show/hide based on menu open state. -->
            <!-- <div class="lg:hidden" role="dialog" aria-modal="true"> -->
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <!-- <div id="mobile-menu" class="fixed inset-y-0 right-0 z-80 w-full overflow-y-auto bg-transparent px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex inset-y-0 right-0">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">NUFI TRAVEL</span>
                    <img class="h-8 w-auto" src="{{ asset('img/Logo-png.png') }}" alt="">
                </a>
                <button type="button" id="close-mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
                <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                    <a href="#" class="-mx-3 block  px-3 py-2 text-base font-semibold leading-7 text-[#24565C] hover:bg-[#24565C] hover:text-[#F7F7F7]">Rumah</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Layanan</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Tujuan</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Armada</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Ulasan</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Galeri</a>
                </div>
                </div>
                </div>
            </div> -->
        </header>
            

    <!-- Image -->
    <div class="relative isolate px-6 lg:pt-14 lg:px-8">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/60 to-transparent"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/img/bg-bromo.jpg');"></div>
    </div>
    <!-- Content Container -->
    <div class="relative z-10 mx-auto max-w-2xl py-32 sm:py-4 lg:py-56 text-center text-gray-900">
    <!-- Main Content -->
        <div>
            <h1 class="font-ibarra relative inline-block text-3xl lg:text-6xl font-bold tracking-tight text-white">
                Menjelajahi destinasi,<br class="block lg:hidden"> menciptakan kenangan
                <span class="absolute inset-0 text-transparent -z-10" style="text-shadow: 3px 0 0 #24565C, -3px 0 0 #24565C, 0 3px 0 #24565C, 0 -3px 0 #24565C, 2px 2px #24565C, -2px -2px 0 #24565C, 2px -2px 0 #24565C, -2px 2px 0 #24565C;">Menjelajahi destinasi, menciptakan kenangan</span>
            </h1>
            <div class="mt-[33px] lg:mt-[66px] lg:pb-[30px] flex items-center justify-center lg:gap-x-6">
                <a href="https://wa.me/6282232122240" class="relative rounded-md lg:rounded-[10px] lg:h-[40px] lg:w-auto bg-[#24565C] px-5 py-2.5 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden group">
                    <span class="group-hover:bg-[#24565C]" aria-hidden="true" style="transition: background-color 0.3s ease;"></span>
                    <span class="relative z-10">Jelajahi Sekarang</span>
                    <img src="{{ asset('img/icon-arrow.svg') }}" alt="Arrow Icon" class="ml-4 h-3 w-3 lg:h-4 lg:w-4 opacity-2">
                </a>
            </div>
        </div>
    </div>

    </div>

    <!-- End Image -->
    <!-- End Hero -->
    <!-- stats -->
    <div class="bg-[#CCD6D4] py-10 lg:py-14 pt-8 lg:pt-30 lg:px-6">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">LAYANAN KAMI</h2>
    <div class="mt-4 lg:mt-8 grid grid-cols-1 gap-x-7 gap-y-7 lg:text-center lg:grid-cols-3 lg:mx-[100px]">
        <div class="mx-auto max-w-xs lg:max-w-full flex items-center gap-x-4">
            <img src="{{ asset('img/icon-tour.svg') }}" alt="Vector Image" class="h-16 w-16 lg:h-[80px] lg:w-[80px]">
            <div>
                <h2 class="text-left text-sm lg:text-xl font-bold tracking-tight text-[#24565C]">Tur Pribadi</h2>
                <p class="text-left text-sm lg:text-base text-gray-900">Melayani perjalanan khusus untuk membawa anda kemana saja.</p>
            </div>
        </div>
        <div class="mx-auto max-w-xs lg:max-w-full flex items-center gap-x-4">
            <img src="{{ asset('img/icon-briefcase.svg') }}" alt="Vector Image" class="h-16 w-16 lg:h-[80px] lg:w-[80px]">
            <div>
                <h2 class="text-left text-sm lg:text-xl font-bold tracking-tight text-[#24565C]">Tur Antar Kota</h2>
                <p class="text-left text-sm lg:text-base text-gray-900">Menyediakan tur Antar kota Malang-Juanda / Jawa-Bali.</p>
            </div>
        </div>
        <div class="mx-auto max-w-xs lg:max-w-full flex items-center gap-x-4">
            <img src="{{ asset('img/icon-car.svg') }}" alt="Vector Image" class="h-16 w-16 lg:h-[80px] lg:w-[80px]">
            <div>
                <h2 class="text-left text-sm lg:text-xl font-bold tracking-tight text-[#24565C]">Sewa Kendaraan</h2>
                <p class="text-left text-sm lg:text-base text-gray-900">Menyediakan kendaraan beserta Supir untuk keperluan transportasi.</p>
            </div>
        </div>
    </div>
    </div>

    <!-- end stats -->

    <!-- Destination -->
    <div class="py-10 lg:py-14 px-6 lg:px-8">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">DESTINASI POPULER</h2>
    <p class="px-4 py-1 lg:py-3 text-center text-sm lg:text-lg font-medium text-gray-900">Berikut adalah beberapa destinasi populer yang sering dipesan di NUFI TRAVEL</p>
    <div class="mt-2 grid grid-cols-2 gap-x-6 gap-y-6 text-center lg:grid-cols-4 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('img/bg-bromo.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Bromo</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('img/bg-kawah-ijen.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Kawah Ijen</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('img/bg-tumpak-sewu.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Tumpak Sewu</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('img/bg-airport.jfif') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Juanda</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
    </div>
    <p class="px-4 py-2 lg:py-3 text-center text-sm lg:text-lg font-medium text-gray-900">Kami juga melayani destinasi antar kota / antar provinsi, seperti</p>
    <!-- column 2 -->
    <div class="mt-2 grid gap-x-6 gap-y-6 text-center grid-cols-1 lg:grid-cols-2 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('img/bg-malang.jfif') }}" alt="Popular Destination" class="absolute left-0 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <img src="{{ asset('img/bg-batu.jpg') }}" alt="Popular Destination" class="absolute left-2/4 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Malang - Batu</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('img/bg-jawa.jpg') }}" alt="Popular Destination" class="absolute left-0 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <img src="{{ asset('img/bg-bali.jpg') }}" alt="Popular Destination" class="absolute left-2/4 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Jawa - Bali</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
    </div>
    <!-- end column 2 -->
    </div>
    <!-- end Destination -->

    <!-- Fleet -->
    <div class="py-10 lg:py-16 bg-center" style="background-image: url('/img/bg-vector.svg');">
        <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">ARMADA KAMI</h2>
        <div class="lg:px-44">

            <div class="carousel rounded-lg py-8">
            <div class="carousel-item h-[180px] lg:h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-1.svg') }}"/>
            </div>
            <div class="carousel-item h-[180px] lg:h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-2.svg') }}"/>
            </div>
            <div class="carousel-item h-[180px] lg:h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-3.svg') }}"/>
            </div>
            <div class="carousel-item h-[180px] lg:h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-4.svg') }}"/>
            </div>
            </div>

        </div>
        </div>
    <!-- end Fleet -->

    <!-- Testimonial -->
    <div class="bg-[#CCD6D4] py-10 lg:py-16  px-6 lg:px-8">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">APA KATA MEREKA?</h2>
    <div class="mt-8 lg:px-64">
        <p class="text-[#24565C] text-sm lg:text-lg text-center">
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, eligendi quidem commodi perferendis voluptatum eum nobis nemo libero molestias inventore quod ad, maiores magni ullam praesentium sapiente dolore facilis atque."
        </p>
    </div>
    <div class="mt-8 lg:px-64 text-center">
    <div class="flex justify-center items-center space-x-2">
        <p class="text-[#24565C] text-sm lg:text-lg">
        Ahmad Subagyo -
        </p>
        <p class="text-[#6B9499] text-sm lg:text-lg">
        Traveler
        </p>
    </div>
    </div>
    </div>
    <!-- end testimonial -->

    <!-- another destination -->
    <div class="py-10 lg:py-14 px-6 lg:px-8 bg-[#F7F7F7]">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">DESTINASI LAINNYA</h2>
    <p class="px-4 py-2 lg:py-3 text-center text-sm lg:text-lg font-medium text-gray-900">Kami juga melayani beberapa destinasi lainnya, seperti :</p>
    <!-- column 2 -->
    <div class="mt-2 grid gap-x-6 gap-y-6 text-center grid-cols-1 lg:grid-cols-2 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Pantai Balekambang</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('img/bg-watuleter.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Pantai Watuleter</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
    </div>
    <!-- end column 2 -->
    </div>
    <!-- end another destination -->

    <!-- Galeri Kami -->
    <div class="px-2 lg:px-8">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">GALERI KAMI</h2>
    <div class=" py-5 lg:py-10 grid gap-x-3 lg:gap-x-6 gap-y-3 grid-cols-2 lg:grid-cols-5 lg:mx-[35px]">
        <!-- card -->
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        
    </div>
    <!-- end column 2 -->
    </div>
    </div>
    
     <!-- end Galeri Kami -->

     <!-- Footer -->
     <footer class="bg-[#111F21] relative py-4 lg:py-8">
    <div class="flex flex-col items-center lg:flex-row lg:justify-between lg:px-12 py-10">
        
        <!-- Logo Section -->
        <div class="mb-6 lg:mb-0">
            <img class="h-16 lg:h-24 w-auto" src="{{ asset('img/Logo-png.png') }}" alt="Logo">
        </div>

        <!-- Social Media and Contact Section -->
        <div class="flex flex-col lg:flex-row lg:gap-28 lg:text-left w-full lg:w-auto">

            <!-- Social Media Section -->
            <div class="text-center lg:text-left mb-6 lg:mb-0 lg:pr-8">
                <h4 class="py-3 text-lg font-medium text-[#FFFFFF]">Kunjungi media sosial kami</h4>
                <ul class="list-none flex justify-center lg:justify-start space-x-4">
                    <li>
                        <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.facebook.com/yourpage">
                            <h4 class="text-base text-[#FFFFFF]">Facebook</h4>
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.instagram.com/yourpage">
                            <h4 class="text-base text-[#FFFFFF]">Instagram</h4>
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.tiktok.com/@yourpage">
                            <h4 class="text-base text-[#FFFFFF]">Tiktok</h4>
                        </a>
                    </li>
                    <li>
                        <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://twitter.com/yourpage">
                            <h4 class="text-base text-[#FFFFFF]">Twitter</h4>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="text-center lg:text-left">
                <h4 class="py-3 text-lg font-medium text-[#FFFFFF]">Kontak kami</h4>
                <div class="space-y-2 lg:space-y-0 lg:flex lg:space-x-4">
                    <h4 class="font-normal text-[#FFFFFF]">nufitravelmalangcity@gmail.com</h4>
                    <h4 class="font-normal text-[#FFFFFF]">+62&nbsp;8223&nbsp;2122&nbsp;240</h4>
                </div>
            </div>

        </div>
    </div>
</footer>

     <!-- end Footer -->
    </div> 
    <!-- end color -->
 

    <!-- Script JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen-elemen yang diperlukan
            const openMobileMenuButton = document.getElementById('open-mobile-menu');
            const closeMobileMenuButton = document.getElementById('close-mobile-menu');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');

            // Tambahkan event listener untuk membuka menu mobile
            openMobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.remove('hidden');
                mobileMenuBackdrop.classList.remove('hidden');
            });

            // Tambahkan event listener untuk menutup menu mobile
            closeMobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                mobileMenuBackdrop.classList.add('hidden');
            });
        });
    </script>
</body>
</html>

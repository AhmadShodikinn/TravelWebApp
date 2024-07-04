<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <!-- end font  -->

    <title>NUFI TRAVEL</title>
</head>
<body class="font-poppins" >
<div class="container mx-auto">
    <div class="bg-[#F7F7F7]">
    <!-- Hero -->
    <header class="absolute inset-x-[100px] top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-[80px] w-auto" src="{{ asset('img/Logo-png.png') }}" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <img src="{{ asset('img/icon-dropdown.svg')}}" alt="Dropdown Icon" class="h-6 w-6">
        </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-5">
            <a href="#" class="text-xl  text-white">Rumah</a>
            <a href="#" class="text-xl  text-white">Layanan</a>
            <a href="#" class="text-xl  text-white">Tujuan</a>
            <a href="#" class="text-xl  text-white">Armada</a>
            <a href="#" class="text-xl  text-white">Ulasan</a>
            <a href="#" class="text-xl  text-white">Galeri</a>
            
            <!-- dropdown language -->
            <div class="relative inline-block text-left">
                <div>
                    <button type="button" id="menu-button" aria-expanded="true" aria-haspopup="true" class="inline-flex w-full justify-center gap-x-1.5 ">
                        <img id="current-flag" src="{{ asset('img/lang-id.svg') }}" alt="Indonesian Flag" class="h-7 w-7">
                        <img src="/img/icon-dropdown.svg" alt="Dropdown Icon" class="h-[5px] w-[10px]] self-center">
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
            <!-- end dropdown -->

            
        </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                </div>
                <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>

    <!-- Image -->
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/60 to-transparent"></div>
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('/img/bg-bromo.jpg');"></div>
        </div>
        <!-- Content Container -->
        <div class="relative z-10 mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 text-center text-gray-900">
            <!-- Main Content -->
            <div>
            <h1 class="font-ibarra relative inline-block text-8xl font-bold tracking-tight sm:text-6xl text-white">
            Menjelajahi destinasi, menciptakan kenangan
            <span class="absolute inset-0 text-transparent -z-10" style="text-shadow: 3px 0 0 #24565C, -3px 0 0 #24565C, 0 3px 0 #24565C, 0 -3px 0 #24565C, 2px 2px #24565C, -2px -2px 0 #24565C, 2px -2px 0 #24565C, -2px 2px 0 #24565C;">Menjelajahi destinasi, menciptakan kenangan</span>
            </h1>
            <div class="mt-[66px] pb-[30px] flex items-center justify-center gap-x-6">
            <a href="#" class="relative rounded-[10px] h-[40px] bg-[#24565C] px-5 py-2.5 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden group">
                <span class="group-hover:bg-[#24565C]" aria-hidden="true" style="transition: background-color 0.3s ease;"></span>
                <span class="relative z-10">Jelajahi Sekarang</span>
                <img src="{{ asset('img/icon-arrow.svg') }}" alt="Arrow Icon" class="ml-4 h-4 w-4 opacity-2">
            </a>
            </div>
            </div>
        </div>
    </div>

    <!-- End Image -->
    <!-- End Hero -->
    <!-- stats -->
    <div class="bg-[#CCD6D4] py-16 sm:py-12 pt-60 px-6 lg:px-8">
    <h2 class="text-center text-3xl font-bold tracking-tight text-[#24565C] sm:text-3xl">LAYANAN KAMI</h2>
    <div class="mt-8 grid grid-cols-1 gap-x-7 gap-y-7 text-center lg:grid-cols-3  lg:mx-[100px]">
        <div class="mx-auto max-w-xs lg:max-w-full lg:flex lg:items-center lg:gap-x-4">
        <img src="{{ asset('img/icon-tour.svg') }}" alt="Vector Image" class="h-[80px] w-[80px] lg:w-auto">
            <div class="mt-4 lg:mt-0 ">
                <h2 class="text-left text-xl font-bold tracking-tight text-[#24565C]">Tur Pribadi</h2>
                <p class="text-left text-base text-gray-900">Melayani perjalanan khusus untuk membawa anda kemana saja.</p>
            </div>
        </div>
        <div class="mx-auto max-w-xs lg:max-w-full lg:flex lg:items-center lg:gap-x-4">
        <img src="{{ asset('img/icon-briefcase.svg') }}" alt="Vector Image" class="h-[80px] w-[80px] lg:w-auto">
            <div class="mt-4 lg:mt-0 ">
                <h2 class="text-left text-xl font-bold tracking-tight text-[#24565C]">Tur Antar Kota</h2>
                <p class="text-left text-base text-gray-900">Menyediakan tur Antar kota Malang-Juanda / Jawa-Bali.</p>
            </div>
        </div>  
        <div class="mx-auto max-w-xs lg:max-w-full lg:flex lg:items-center lg:gap-x-4">
        <img src="{{ asset('img/icon-car.svg') }}" alt="Vector Image" class="h-[80px] w-[80px] lg:w-auto">
            <div class="mt-4 lg:mt-0 ">
                <h2 class="text-left text-xl font-bold tracking-tight text-[#24565C]">Sewa Kendaraan</h2>
                <p class="text-left text-base text-gray-900">Menyediakan kendaraan beserta Supir untuk keperluan transportasi.</p>
            </div>
        </div>
    </div>
    </div>
    <!-- end stats -->

    <!-- Destination -->
    <div class="py-16 sm:py-16 pt-60 px-6 lg:px-8">
    <h2 class="text-center text-3xl font-bold tracking-tight text-[#24565C] sm:text-3xl">DESTINASI POPULER</h2>
    <p class="py-3 text-center text-lg font-medium text-gray-900">Berikut adalah beberapa destinasi populer yang sering dipesan di NUFI TRAVEL</p>
    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-6 text-center lg:grid-cols-4 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[400px] group">
            <img src="{{ asset('img/bg-bromo.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Bromo</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="#" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[170px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[400px] group">
            <img src="{{ asset('img/bg-kawah-ijen.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Kawah Ijen</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="#" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[170px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[400px] group">
            <img src="{{ asset('img/bg-tumpak-sewu.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Tumpak Sewu</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="#" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[170px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[400px] group">
            <img src="{{ asset('img/bg-airport.jfif') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Juanda</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="#" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[170px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
    </div>
    <p class="py-3 text-center text-lg font-medium text-gray-900">Kami juga melayani destinasi antar kota / antar provinsi, seperti</p>
    <!-- column 2 -->
    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-6 text-center lg:grid-cols-2 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[400px] group">
            <img src="{{ asset('img/bg-malang.jfif') }}" alt="Popular Destination" class="absolute left-0 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <img src="{{ asset('img/bg-batu.jpg') }}" alt="Popular Destination" class="absolute left-2/4 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Malang - Batu</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="#" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[400px] group">
            <img src="{{ asset('img/bg-jawa.jpg') }}" alt="Popular Destination" class="absolute left-0 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <img src="{{ asset('img/bg-bali.jpg') }}" alt="Popular Destination" class="absolute left-2/4 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Jawa - Bali</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="#" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a>
            </div>
        </div>
    </div>
    <!-- end column 2 -->
    </div>
    <!-- end Destination -->

    <!-- Fleet -->
    <div class="py-16 sm:py-16 pt-60 bg-center" style="background-image: url('/img/bg-vector.svg');">
        <h2 class="text-center text-3xl font-bold tracking-tight text-[#24565C] sm:text-3xl">ARMADA KAMI</h2>
        <div class="px-44">

            <div class="carousel rounded-lg py-8">
                <div class="carousel-item h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-1.svg') }}"/>
            </div>
            <div class="carousel-item h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-2.svg') }}"/>
            </div>
            <div class="carousel-item h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-3.svg') }}"/>
            </div>
            <div class="carousel-item h-[500px] max-w-none">
                <img
                src="{{ asset('img/car-image/slider-4.svg') }}"/>
            </div>
            </div>
            
        </div>
        </div>
    </div>
    <!-- end Fleet -->

    <!-- Testimonial -->
    <div class="bg-[#CCD6D4] py-16 sm:py-12 pt-60 px-6 lg:px-8">
    <h2 class="text-center text-3xl font-bold tracking-tight text-[#24565C] sm:text-3xl">APA KATA MEREKA?</h2>
    <div class="mt-8 text-center">
        
    </div>
    </div>
     
    </div>
    <!-- end header -->
</div>
</body>
</html>
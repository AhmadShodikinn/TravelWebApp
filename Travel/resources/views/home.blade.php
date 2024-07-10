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
    <link rel="shortcut icon" href="{{ asset('img/Logo-png.png') }}" type="image/x-icon">
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
            <a href="#" class="text-xl text-white">@lang('messages.Rumah')</a>
            <a href="#Layanan" class="text-xl text-white">@lang('messages.Layanan')</a>
            <a href="#Tujuan" class="text-xl text-white">@lang('messages.Tujuan')</a>
            <a href="#Armada" class="text-xl text-white">@lang('messages.Armada')</a>
            <a href="#Ulasan" class="text-xl text-white">@lang('messages.Ulasan')</a>
            <a href="#Galeri" class="text-xl text-white">@lang('messages.Galeri')</a>
        </div>

        <!-- Dropdown language for screens wider than lg -->
        <div class=" items-center pl-5 pt-2 lg:flex relative text-left">
            <div class="relative inline-block text-left">
                <button type="button" id="menu-button" aria-expanded="false" aria-haspopup="true" class="inline-flex w-full justify-center gap-x-1.5">
                    <img id="current-flag" src="{{ asset('img/lang-' . App::getLocale() . '.svg') }}" alt="Indonesian Flag" class="h-7 w-7">
                    <img id="dropdown-icon" src="/img/icon-dropdown.svg" alt="Dropdown Icon" class="h-[5px] w-[10px] self-center transition-transform">
                </button>

                <div id="dropdown-menu" class="hidden absolute origin-top-right" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class=" bg-[#24565C] rounded-sm" role="none">
                        <a href="locale/id" id="change-language" role="menuitem" tabindex="-1" class="flex items-center gap-2 p-2 hover:bg-[#F7F7F7]">
                            <img src="{{ asset('img/lang-id.svg') }}" alt="Indonesian" class="h-7 w-7">
                            <!-- <span class="text-sm"></span> -->
                        </a>
                        <a href="locale/en" id="change-language" role="menuitem" tabindex="-1" class="flex items-center gap-2 p-2 hover:bg-[#F7F7F7]">
                            <img src="{{ asset('img/lang-en.svg') }}" alt="English" class="h-7 w-7">
                            <!-- <span class="text-sm"></span> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </header>
            

    <!-- Image -->
    <div class="relative isolate px-6 lg:pt-14 lg:px-8">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/60 to-transparent"></div>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/img/background-image/bg-bromo.jpg');"></div>
    </div>
    <!-- Content Container -->
    <div class="relative z-10 mx-auto max-w-2xl py-32 md:py-36 lg:py-56 text-center text-gray-900">
    <!-- Main Content -->
        <div>
            <h1 class="font-ibarra relative inline-block text-3xl lg:text-6xl font-bold tracking-tight text-white">
            @lang('messages.Hero')<br class="block lg:hidden"> @lang('messages.Hero2')
                <span class="absolute inset-0 text-transparent -z-10" style="text-shadow: 3px 0 0 #24565C, -3px 0 0 #24565C, 0 3px 0 #24565C, 0 -3px 0 #24565C, 2px 2px #24565C, -2px -2px 0 #24565C, 2px -2px 0 #24565C, -2px 2px 0 #24565C;">@lang('messages.Hero') @lang('messages.Hero2')</span>
            </h1>
            <div class="mt-[33px] lg:mt-[66px] lg:pb-[30px] flex items-center justify-center lg:gap-x-6">
                <a href="https://wa.me/6282232122240" class="relative rounded-md lg:rounded-[10px] lg:h-[40px] lg:w-auto bg-[#24565C] px-5 py-2.5 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden group">
                    <span class="group-hover:bg-[#24565C]" aria-hidden="true" style="transition: background-color 0.3s ease;"></span>
                    <span class="relative z-10">@lang('messages.btn-hero')</span>
                    <img src="{{ asset('img/icon-arrow.svg') }}" alt="Arrow Icon" class="ml-4 h-3 w-3 lg:h-4 lg:w-4 opacity-2">
                </a>
            </div>
        </div>
    </div>

    </div>

    <!-- End Image -->
    <!-- End Hero -->
    <!-- stats -->
    <div id="Layanan" class="bg-[#CCD6D4] py-10 lg:py-14 pt-8 lg:pt-30 lg:px-6">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">@lang('messages.Header-Layanan')</h2>
    <div class="mt-4 lg:mt-8 grid grid-cols-1 md:grid-cols-3 md:gap-x-2 gap-x-7 gap-y-7 lg:text-center lg:grid-cols-3 md:mx-[80px] lg:mx-[100px]">
        <div class="mx-auto max-w-xs lg:max-w-full flex items-center gap-x-4">
            <img src="{{ asset('img/icon-tour.svg') }}" alt="Vector Image" class="h-16 w-16 lg:h-[80px] lg:w-[80px]">
            <div>
                <h2 class="text-left text-sm lg:text-xl font-bold tracking-tight text-[#24565C]">@lang('messages.Tur-Pribadi')</h2>
                <p class="text-left text-sm lg:text-base text-gray-900">@lang('messages.Subtitle-Tur-Pribadi')</p>
            </div>
        </div>
        <div class="mx-auto max-w-xs lg:max-w-full flex items-center gap-x-4">
            <img src="{{ asset('img/icon-briefcase.svg') }}" alt="Vector Image" class="h-16 w-16 lg:h-[80px] lg:w-[80px]">
            <div>
                <h2 class="text-left text-sm lg:text-xl font-bold tracking-tight text-[#24565C]">@lang('messages.Tur-AntarKota')</h2>
                <p class="text-left text-sm lg:text-base text-gray-900">@lang('messages.Subtitle-Tur-AntarKota')</p>
            </div>
        </div>
        <div class="mx-auto max-w-xs lg:max-w-full flex items-center gap-x-4">
            <img src="{{ asset('img/icon-car.svg') }}" alt="Vector Image" class="h-16 w-16 lg:h-[80px] lg:w-[80px]">
            <div>
                <h2 class="text-left text-sm lg:text-xl font-bold tracking-tight text-[#24565C]">@lang('messages.Sewa-Kendaraan')</h2>
                <p class="text-left text-sm lg:text-base text-gray-900">@lang('messages.Subtitle-Sewa-Kendaraan')</p>
            </div>
        </div>
    </div>
    </div>

    <!-- end stats -->

    <!-- Destination -->
    <div id="Tujuan" class="py-10 lg:py-14 px-6 lg:px-8">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">@lang('messages.Header-Destinasi')</h2>
    <p class="px-4 py-1 lg:py-3 text-center text-sm lg:text-lg font-medium text-gray-900">@lang('messages.Subtitle-Destinasi')</p>
    <div class="mt-2 grid grid-cols-2 gap-x-6 gap-y-6 text-center items-center lg:grid-cols-4 lg:mx-[100px]">
        <!-- card -->
        <div class="relative lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-bromo.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Bromo</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
        <div class="relative lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-kawah-ijen.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Kawah Ijen</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
        <div class="relative lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-tumpak-sewu.jpg') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Tumpak Sewu</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
        <div class="relative lg:max-w-full bg-white rounded-md lg:rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-72 lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-airport.jfif') }}" alt="Popular Destination" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-25"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Juanda</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[30px] w-[140px] lg:h-[35px] lg:w-[170px]  px-3 text-xs lg:text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] lg:group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
    </div>
    <p class="px-4 py-2 lg:py-3 text-center text-sm lg:text-lg font-medium text-gray-900">@lang('messages.Sub-Subtitle-Destinasi')</p>
    <!-- column 2 -->
    <div class="mt-2 grid gap-x-6 gap-y-6 text-center grid-cols-1 lg:grid-cols-2 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-malang.jfif') }}" alt="Popular Destination" class="absolute left-0 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <img src="{{ asset('/img/background-image/bg-batu.jpg') }}" alt="Popular Destination" class="absolute left-2/4 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Malang - Batu</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-jawa.jpg') }}" alt="Popular Destination" class="absolute left-0 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <img src="{{ asset('/img/background-image/bg-bali.jpg') }}" alt="Popular Destination" class="absolute left-2/4 inset-0 w-1/2 h-full object-cover"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Jawa - Bali</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
    </div>
    <!-- end column 2 -->
    </div>
    <!-- end Destination -->

    <!-- Fleet -->
    <div id="Armada" class="py-10 lg:py-16 bg-center" style="background-image: url('/img/bg-vector.svg');">
        <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">@lang('messages.Header-Armada')</h2>
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
    <div id="Ulasan" class="bg-[#CCD6D4] py-10 lg:py-16  px-6 lg:px-8">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">@lang('messages.Header-Ulasan')</h2>
    <div class="mt-8 lg:px-64">
        <p class="text-[#24565C] text-sm lg:text-lg text-center">
            "Saya sangat terkesan dengan Nufi Travel. Mereka menyediakan paket perjalanan yang terorganisir dengan baik dan layanan pelanggan yang luar biasa. Saya merasa aman dan puas dengan setiap detail perjalanan. Sangat direkomendasikan!"
        </p>
    </div>
    <div class="mt-8 lg:px-64 text-center">
    <div class="flex justify-center items-center space-x-2">
        <p class="text-[#24565C] text-sm lg:text-lg">
        Bagus Fitrah -
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
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">@lang('messages.Header-Destinasi2')</h2>
    <p class="px-4 py-2 lg:py-3 text-center text-sm lg:text-lg font-medium text-gray-900">@lang('messages.Subtitle-Destinasi2')</p>
    <!-- column 2 -->
    <div class="mt-2 grid gap-x-6 gap-y-6 text-center grid-cols-1 lg:grid-cols-2 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Pantai Balekambang</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
        <div class="relative max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[250px] lg:h-[400px] group">
            <img src="{{ asset('/img/background-image/bg-watuleter.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out lg:group-hover:translate-y-[-30px]">
                <h3 class="text-xl pb-[30px] lg:pb-0 lg:text-2xl font-bold text-white mb-4">Pantai Watuleter</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#24565C] lg:group-hover:bg-[#24565C] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Whatsapp</span>
                </a>
                <!-- <a href="#" class="relative rounded-lg h-[35px] w-[300px] px-3 text-sm font-medium text-[#24565C] shadow-sm flex items-center justify-center overflow-hidden">
                    <span class="absolute inset-0 bg-[#f7f7f7] group-hover:bg-[#f7f7f7] transition-colors duration-300 ease-in-out"></span>
                    <span class="relative z-10">Wechat</span>
                </a> -->
            </div>
        </div>
    </div>
    <!-- end column 2 -->
    </div>
    <!-- end another destination -->

    <!-- Galeri Kami -->
    <div id="Galeri" class="px-2 lg:px-8">
    <h2 class="text-center text-lg lg:text-3xl font-bold tracking-tight text-[#24565C]">@lang('messages.Header-Galeri')</h2>
    <div class=" py-5 lg:py-10 grid gap-x-3 lg:gap-x-6 gap-y-3 grid-cols-2 md:grid-cols-5 lg:grid-cols-5 lg:mx-[35px]">
        <!-- card -->
        <div>
            <img src="{{ asset('img/gallery-image/img-1.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-2.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-3.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-4.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-5.png') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-6.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-7.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-8.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-9.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        <div>
            <img src="{{ asset('img/gallery-image/img-10.jpeg') }}" class="w-full h-full object-cover" alt="Popular Destination">
        </div>
        
        
    </div>
    <!-- end column 2 -->
    </div>
    </div>
    
     <!-- end Galeri Kami -->

     <!-- Footer -->
     <footer class="bg-[#111F21] relative pt-4 lg:pt-8">
        <div class="flex flex-col items-center justify-center lg:flex-row lg:justify-between lg:px-16 py-10">
            
            <!-- Logo Section -->
            <div class="mb-6 lg:mb-0">
                <img class="h-20 lg:h-24 w-auto" src="{{ asset('img/Logo-png.png') }}" alt="Logo">
            </div>

            <!-- Social Media and Contact Section -->
            <div class="flex flex-col md:flex-row md:justify-center md:items-center  md:gap-24 lg:flex-row lg:gap-28 lg:text-left w-full lg:w-auto">

                <!-- Social Media Section -->
                <div class="pl-10 lg:pl-0 text-left mb-6 lg:mb-0 ">
                    <h4 class="py-3 text-lg font-medium text-[#FFFFFF]">@lang('messages.Footer')</h4>
                    <ul class="list-none flex justify-start space-x-4">
                        <li>
                            <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.facebook.com/profile.php?id=61562185383522" target="_blank">
                                <h4 class="text-base text-[#FFFFFF]">Facebook</h4>
                            </a>
                        </li>
                        <li>
                            <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.instagram.com/nufitravelmalangcity" target="_blank">
                                <h4 class="text-base text-[#FFFFFF]">Instagram</h4>
                            </a>
                        </li>
                        <li>
                            <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.tiktok.com/@nufitravel" target="_blank">
                                <h4 class="text-base text-[#FFFFFF]">Tiktok</h4>
                            </a>
                        </li>
                        <li>
                            <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://x.com/NufiTravel" target="_blank">
                                <h4 class="text-base text-[#FFFFFF]">Twitter</h4>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="pl-10 lg:pl-0 text-left">
                    <h4 class="py-3 text-lg font-medium text-[#FFFFFF]">@lang('messages.Footer2')</h4>
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
     <script src="{{ asset('custom/custom.js') }}"></script>

</body>
</html>

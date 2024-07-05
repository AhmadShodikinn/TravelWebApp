

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
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[170px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
    <div class="mt-8 px-64">
        <p class="text-[#24565C] text-lg text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, eligendi quidem commodi perferendis voluptatum eum nobis nemo libero molestias inventore quod ad, maiores magni ullam praesentium sapiente dolore facilis atque.
        </p>
    </div>
    <div class="mt-8 px-64 text-center">
    <div class="flex justify-center items-center space-x-2">
        <p class="text-[#24565C] text-lg">
        Ahmad Subagyo -
        </p>
        <p class="text-[#6B9499] text-lg">
        Traveler
        </p>
    </div>
    </div>
    </div>
    <!-- end testimonial -->

    <!-- another destination -->
    <div class="py-16 sm:py-16 pt-60 px-6 lg:px-8 bg-[#F7F7F7]">
    <h2 class="text-center text-3xl font-bold tracking-tight text-[#24565C] sm:text-3xl">DESTINASI LAINNYA</h2>
    <p class="py-3 text-center text-lg font-medium text-gray-900">Kami juga melayani beberapa destinasi lainnya, seperti :</p>
    <!-- column 2 -->
    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-6 text-center lg:grid-cols-2 lg:mx-[100px]">
        <!-- card -->
        <div class="relative max-w-xs lg:max-w-full bg-white rounded-lg shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4 h-[400px] group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Pantai Balekambang</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
            <img src="{{ asset('img/bg-watuleter.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center transition-transform duration-300 ease-in-out group-hover:translate-y-[-30px]">
                <h3 class="text-2xl font-bold text-white mb-4">Pantai Watuleter</h3>
            </div>
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-y-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://wa.me/6282232122240" class="relative rounded-lg h-[35px] w-[300px]  px-3 text-sm font-medium text-white shadow-sm flex items-center justify-center overflow-hidden">
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
    <!-- end another destination -->

    <!-- Galeri Kami -->
    <div class="px-6 lg:px-8 bg-[#F7F7F7]">
    <h2 class="text-center text-3xl font-bold tracking-tight text-[#24565C] sm:text-3xl">GALERI KAMI</h2>
    <div class="py-10 grid gap-x-6 gap-y-6 lg:grid-cols-5 lg:mx-[35px]">
        <!-- card -->
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
        <div class="relative w-60 h-60 bg-white shadow-lg overflow-hidden lg:flex lg:items-center lg:gap-x-4  group">
            <img src="{{ asset('img/bg-balekambang.jpg') }}" class="w-full h-full object-cover" alt="Popular Destination"><div class="absolute inset-0 bg-black opacity-10"></div>
        </div>
    </div>
    <!-- end column 2 -->
    </div>
     <!-- end Galeri Kami -->

     <!-- Footer -->
    <footer class="bg-[#111F21] relative pt-8 pb-6">
    <div class="container px-12 py-10">
        <div class="flex text-left gap-40 lg:text-left">
        
        <!-- Logo Section -->
        <div class="px-3">
            <img class="h-[80px] w-auto" src="{{ asset('img/Logo-png.png') }}" alt="Logo">
        </div>
        
        <!-- Social Media Section -->
        <div class="text-left">
            <h4 class="py-3 text-lg font-medium text-[#FFFFFF]">Kunjungi media sosial kami</h4>
            <ul class="list-none flex justify-start space-x-4">
            <li>
                <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile"><h4 class="text-base text-[#FFFFFF]">Facebook</h4></a>
            </li>
            <li>
                <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.instagram.com/nufitravelmalangcity/"><h4 class="text-base text-[#FFFFFF]">Instagram</h4></a>
            </li>
            <li>
                <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile"><h4 class="text-base text-[#FFFFFF]">Tiktok</h4></a>
            </li>
            <li>
                <a class="hover:text-blueGray-800 font-normal block text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile"><h4 class="text-base text-[#FFFFFF]">Twitter</h4></a>
            </li>
            </ul>
        </div>
        
        <!-- Contact Section -->
        <div class="text-left">
            <h4 class="py-3 text-lg font-medium text-[#FFFFFF]">Kontak kami</h4>
            <div class="flex flex-wrap space-x-4">
            <h4 class="font-normal text-[#FFFFFF]">nufitravelmalangcity@gmail.com</h4>
            <h4 class="font-normal text-[#FFFFFF]">+62&nbsp;8223&nbsp;2122&nbsp;240</h4>
            </div>
        </div>

        </div>
    </div>
    </footer>

     <!-- end Footer -->
    </div>
    <!-- end header -->
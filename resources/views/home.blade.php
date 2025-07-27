@extends('layouts.app')

@section('content')    <style>
        /* Hide scrollbars for hero section only */
        .hero-section {
            overflow-x: hidden !important;
        }
    </style>
    <div class="w-full relative">
        <!-- Hero Section -->
        <div class="hero-section bg-[#004A87] relative overflow-hidden w-full max-w-full" style="min-height: 740px;">
            <!-- Background Image Full Hero Section -->
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('assets/mercu.jpg') }}" alt="Kampus Mercubuana"
                    class="w-full h-full object-cover opacity-40">
            </div>            <!-- Left Side Fog/Cloud Effect dengan peningkatan -->
            <div class="absolute inset-y-0 left-0 w-2/3 bg-gradient-to-r from-white via-white to-transparent opacity-70 z-5">
            </div>
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gradient-to-r from-white to-transparent opacity-50 z-6 blur-sm">
            </div>
            <div
                class="container mx-auto px-4 sm:px-6 py-16 md:py-20 lg:py-24 relative z-20 h-full flex items-center">
                <div class="flex flex-col lg:flex-row items-center w-full">                    <div class="lg:w-1/2 mb-8 lg:mb-0">                        <h1 class="text-4xl lg:text-5xl font-bold mb-6">
                            <span class="text-black drop-shadow-lg">Clinic </span><span class="text-[#7AC943] drop-shadow-lg" style="text-shadow: -2px -2px 0 #004A87, 2px -2px 0 #004A87, -2px 2px 0 #004A87, 2px 2px 0 #004A87, -3px 0 0 #004A87, 3px 0 0 #004A87, 0 -3px 0 #004A87, 0 3px 0 #004A87;">Mercubuana</span> <br><span class="text-white drop-shadow-lg" style="text-shadow: -1px -1px 0 #7AC943, 1px -1px 0 #7AC943, -1px 1px 0 #7AC943, 1px 1px 0 #7AC943;">Kesehatan adalah prioritas kami</span>
                        </h1>                        <p class="text-lg text-gray-700 mb-8 font-light leading-relaxed tracking-wide">
                            <span class="font-medium text-gray-800">Dapatkan layanan kesehatan terbaik</span> dari tim dokter profesional dan apotek dengan <span class="text-[#7AC943] font-semibold">obat lengkap dan berkualitas</span>.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/kontak"
                                class="px-6 py-3 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 text-center">
                                Buat Janji
                            </a>
                            <a href="/obat"
                                class="px-6 py-3 border border-blue-600 text-blue-600 font-medium rounded-md hover:bg-blue-50 text-center">
                                Lihat Produk Obat
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-1/2 relative min-h-[350px] md:min-h-[420px]">
                        <!-- Gallery of images with overlapping layout -->
                        <div class="absolute -top-4 -right-2 lg:right-0 w-4/5 md:w-full lg:w-[95%] z-10">
                            <!-- Main photo container -->
                            <div class="relative z-10 h-80 md:h-96"><!-- First image - positioned top-left -->
                                <div class="absolute top-0 left-0 w-3/5 h-auto z-10 transform rotate-[-8deg]">
                                    <div class="bg-white p-2 rounded-lg shadow-lg">
                                        <div class="relative overflow-hidden rounded-md group">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300">
                                            </div>
                                            <img src="{{ asset('assets/mahasiswa.jpeg') }}" alt="Mahasiswa Mercubuana 1"
                                                class="w-full h-56 md:h-64 object-cover">
                                            <div
                                                class="absolute bottom-0 left-0 p-2 text-white text-xs md:text-sm font-medium">
                                                Mahasiswa Mercubuana</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second image - positioned top-right, overlapping -->
                                <div class="absolute top-4 right-0 w-3/5 h-auto z-20 transform rotate-[6deg]">
                                    <div class="bg-white p-2 rounded-lg shadow-lg">
                                        <div class="relative overflow-hidden rounded-md group">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300">
                                            </div>
                                            <img src="https://agv-api.mercubuana.ac.id//uploads/media/file-1740464569480-992092342.jpeg"
                                                alt="Mahasiswa Mercubuana 2" class="w-full h-56 md:h-64 object-cover">
                                            <div
                                                class="absolute bottom-0 left-0 p-2 text-white text-xs md:text-sm font-medium">
                                                Klinik Kesehatan</div>
                                        </div>
                                    </div>                                </div> <!-- Third image - positioned lower center-bottom -->
                                <div
                                    class="absolute bottom-[-60px] left-1/2 transform -translate-x-1/2 w-3/5 h-auto z-30 rotate-[-2deg]">
                                    <div class="bg-white p-2 rounded-lg shadow-lg">
                                        <div class="relative overflow-hidden rounded-md group">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300">
                                            </div>
                                            <img src="https://bluetecmne.com/wp-content/uploads/2022/09/shutterstock_1922435363.jpg"
                                                alt="Mahasiswa Mercubuana 3" class="w-full h-60 md:h-72 object-cover">
                                            <div
                                                class="absolute bottom-0 left-0 p-2 text-white text-xs md:text-sm font-medium">
                                                Layanan Profesional</div>
                                        </div>
                                    </div>
                                </div><!-- Trophy overlay -->
                                <div
                                    class="absolute left-0 sm:left-[-5%] top-1/3 w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 z-40 animate-pulse">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-yellow-300 to-yellow-500 rounded-full opacity-95 shadow-lg">
                                    </div>
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/693/364/non_2x/isolated-trophy-free-png.png"
                                        alt="Trophy"
                                        class="relative z-10 w-full h-full object-contain p-1 drop-shadow-xl">
                                </div><!-- Rocket overlay -->
                                <div
                                    class="absolute right-[5%] -bottom-6 w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 z-40 animate-bounce-slow">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-red-300 to-red-500 rounded-full opacity-90 shadow-lg">
                                    </div>
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Cartoon_space_rocket.png"
                                        alt="Rocket"
                                        class="relative z-10 w-full h-full object-contain p-1 transform rotate-45 drop-shadow-xl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Smoke/Cloud Effect di bagian bawah kanan dengan peningkatan -->
        <div
            class="absolute bottom-0 right-[5%] w-1/6 sm:w-1/5 h-1/3 bg-gradient-to-tl from-blue-200 to-transparent opacity-25 z-5 rounded-full blur-xl">
        </div>
        <div
            class="absolute bottom-0 right-[3%] w-1/8 sm:w-1/6 h-1/4 bg-gradient-to-tl from-blue-300 to-transparent opacity-15 z-5 rounded-full blur-xl">
        </div>        <!-- Medical Logo overlay - placed outside but positioned relatively -->
        <div class="absolute right-[5%] top-[120px] w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 z-40 animate-pulse">
            <div class="absolute inset-0 bg-gradient-to-br from-[#42B0C5] to-[#004A87] rounded-full opacity-90 shadow-lg">
            </div>
            <img src="https://cdn-icons-png.flaticon.com/512/883/883352.png" alt="Medical Logo"
                class="relative z-10 w-full h-full object-contain p-0 drop-shadow-xl">
        </div>        <!-- Modern Window Pane Pattern with diagonal orientation -->
        <div class="absolute -top-32 left-0 w-1/3 h-[900px] z-4 pointer-events-none">
            <!-- Full Diagonal Pattern for left side - more compact version -->
            <div class="absolute inset-0 w-full h-full">
                <div class="relative w-full h-full overflow-hidden">
                    <!-- Smaller Grid Pattern with diagonal orientation -->
                    <div class="absolute left-0 top-0 w-full h-full transform rotate-12 origin-top-left">
                        <div class="grid grid-cols-6 grid-rows-15 h-full w-full">                            <!-- Generate 90 grid cells (6 columns x 15 rows) - seamless connected pattern -->
                            @for ($i = 0; $i < 90; $i++)
                                <div
                                    class="border-r border-b border-black/10 transform transition-colors duration-500 hover:bg-[#42B0C5]/5">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="absolute top-1/3 right-[8%] w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 lg:w-28 lg:h-28 bg-blue-100 opacity-12 rounded-full blur-xl z-0">
        </div>
    </div>

    <!-- Featured Obat Section -->
    <div class="relative bg-[#004A87] py-20">
        <div class="container mx-auto px-4">            <div class="flex flex-col items-center mb-12">
                <div class="inline-block px-6 py-2 bg-[#7AC943] rounded-full text-white text-sm font-medium mb-4">Obat
                    Favorit</div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#7AC943] mb-4 text-center">Obat yang Lagi Hits</h2>
                <div class="w-20 h-1.5 bg-[#7AC943] rounded-full mb-6"></div>
                <p class="text-[#7AC943] max-w-2xl mx-auto text-center text-lg">
                    Obat-obatan yang sering dibeli sama yang lain, harga juga oke kok.
                </p>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $obats = \App\Models\Obat::take(3)->get();
                @endphp
                @foreach ($obats as $obat)
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="relative h-56 bg-gray-200 overflow-hidden">
                            @if ($obat->image)
                                <img src="{{ asset($obat->image) }}" alt="{{ $obat->nama }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-300" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute top-3 right-3">
                                <span
                                    class="px-3 py-1 bg-[#004A87] text-white text-xs font-bold uppercase rounded-full shadow-lg">Populer</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">                                <h3
                                    class="text-xl font-semibold text-[#004A87] group-hover:text-[#7AC943] transition-colors">
                                    {{ $obat->nama }}</h3>
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="text-sm text-gray-500 ml-1">5.0</span>
                                </div>
                            </div>
                            <p class="text-[#7AC943] mb-4 line-clamp-2">{{ $obat->deskripsi }}</p>
                            <div class="flex items-center justify-between">                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm bg-[#E8F6FA] text-[#004A87]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    {{ $obat->jenis }}
                                </span>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium {{ $obat->stok > 10 ? 'bg-green-50 text-green-700' : 'bg-amber-50 text-amber-700' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                    </svg>
                                    Stok: {{ $obat->stok }}
                                </span>                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-12">                <a href="/obat"
                    class="inline-flex items-center px-8 py-4 bg-white text-[#004A87] border-2 border-[#004A87] hover:bg-[#7AC943] hover:text-white hover:border-[#7AC943] font-semibold rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    Lihat Semua Obat
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>    <!-- Services Section -->
    <div class="relative bg-[#004A87] py-20">
        <div class="container mx-auto px-4">            <div class="flex flex-col items-center mb-12">
                <div class="inline-block px-6 py-2 bg-[#7AC943] rounded-full text-white text-sm font-medium mb-4">Yang Bisa
                    Kita Bantu</div>
                <h2 class="text-4xl md:text-5xl font-bold text-[#7AC943] mb-4 text-center">Layanan Kita</h2>
                <div class="w-20 h-1.5 bg-[#7AC943] rounded-full mb-6"></div>
                <p class="text-[#7AC943] max-w-2xl mx-auto text-center text-lg">
                    Apa aja sih yang bisa kita bantu? Ini dia layanan yang ada di klinik kita.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 flex flex-col items-center text-center group">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-[#E8F6FA] rounded-full text-[#004A87] mb-6 group-hover:bg-[#004A87] group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-2 group-hover:text-[#7AC943] transition-colors">Apotek</h3>
                    <p class="text-[#7AC943] mb-2">Nyediain berbagai obat dengan harga yang masuk akal.</p>
                    <span class="inline-block mt-2 px-3 py-1 bg-[#7AC943] text-white text-xs rounded-full">Resep & Bebas</span>
                </div>                <div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 flex flex-col items-center text-center group">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-[#E8F6FA] rounded-full text-[#004A87] mb-6 group-hover:bg-[#004A87] group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-2 group-hover:text-[#7AC943] transition-colors">Konsul Dokter</h3>
                    <p class="text-[#7AC943] mb-2">Tanya-tanya sama dokter kalau ada keluhan.</p>
                    <span class="inline-block mt-2 px-3 py-1 bg-[#7AC943] text-white text-xs rounded-full">Umum & Khusus</span>
                </div><div
                    class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-8 flex flex-col items-center text-center group">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-[#E8F6FA] rounded-full text-[#004A87] mb-6 group-hover:bg-[#004A87] group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-2 group-hover:text-[#7AC943] transition-colors">Resep Online</h3>
                    <p class="text-[#7AC943] mb-2">Bisa kirim resep online, gak perlu antri lama.</p>
                    <span class="inline-block mt-2 px-3 py-1 bg-[#7AC943] text-white text-xs rounded-full">Gampang & Cepet</span>
                </div>
            </div>        </div>    </div>
    <!-- End Services Section -->

    <!-- Statistics Section with Charts -->
    <div class="relative bg-[#004A87] py-20">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block px-6 py-2 bg-[#7AC943] rounded-full text-white text-sm font-medium mb-4">
                    Angka Fakta
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-[#7AC943] mb-4">
                    Seberapa Oke Klinik Kita?
                </h2>
                <div class="w-20 h-1.5 bg-[#7AC943] rounded-full mx-auto"></div>
            </div>

            <!-- Statistics Layout: Cards on Left, Charts on Right -->
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Left Side: Statistics Cards -->
                <div class="grid grid-cols-2 gap-6">
                    <!-- Produk Obat -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 text-center group border-t-4 border-[#004A87]">
                        <div class="w-12 h-12 mx-auto bg-[#004A87] rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform group-hover:bg-[#7AC943]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <div class="text-2xl md:text-3xl font-bold text-[#004A87] mb-2 group-hover:text-[#7AC943] transition-colors">
                            {{ \App\Models\Obat::count() }}+
                        </div>
                        <div class="text-gray-600 font-medium text-sm">Jenis Obat</div>
                        <div class="text-xs text-[#7AC943] mt-1">Lengkap Banget</div>
                    </div>

                    <!-- Pasien Terdaftar -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 text-center group border-t-4 border-[#7AC943]">
                        <div class="w-12 h-12 mx-auto bg-[#7AC943] rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform group-hover:bg-[#004A87]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="text-2xl md:text-3xl font-bold text-[#004A87] mb-2 group-hover:text-[#7AC943] transition-colors">
                            {{ \App\Models\Pasien::count() }}+
                        </div>
                        <div class="text-gray-600 font-medium text-sm">Pasien Terdaftar</div>
                        <div class="text-xs text-[#7AC943] mt-1">Yang Udah Percaya</div>
                    </div>

                    <!-- Kategori Obat -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 text-center group border-t-4 border-[#004A87]">
                        <div class="w-12 h-12 mx-auto bg-[#004A87] rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform group-hover:bg-[#7AC943]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <div class="text-2xl md:text-3xl font-bold text-[#004A87] mb-2 group-hover:text-[#7AC943] transition-colors">
                            {{ \App\Models\JenisObat::count() }}+
                        </div>
                        <div class="text-gray-600 font-medium text-sm">Kategori Obat</div>
                        <div class="text-xs text-[#7AC943] mt-1">Macem-macem Ada</div>
                    </div>

                    <!-- Transaksi -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 text-center group border-t-4 border-[#7AC943]">
                        <div class="w-12 h-12 mx-auto bg-[#7AC943] rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform group-hover:bg-[#004A87]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                            </svg>
                        </div>
                        <div class="text-2xl md:text-3xl font-bold text-[#004A87] mb-2 group-hover:text-[#7AC943] transition-colors">
                            {{ \App\Models\PembelianObat::count() }}+
                        </div>
                        <div class="text-gray-600 font-medium text-sm">Transaksi</div>
                        <div class="text-xs text-[#7AC943] mt-1">Udah Berapa Kali</div>
                    </div>
                </div>                <!-- Right Side: Chart -->
                <div class="flex items-center justify-center">
                    <!-- Bar Chart -->
                    <div class="bg-white rounded-2xl shadow-lg p-8 w-full">
                        <h3 class="text-2xl font-semibold text-[#004A87] mb-6 text-center">Data Statistik Klinik</h3>
                        <div class="relative h-80">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Decorations -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-[#7AC943]/10 rounded-full blur-xl"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-[#004A87]/10 rounded-full blur-xl"></div>
    </div>    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get data from Laravel
            const obatCount = {{ \App\Models\Obat::count() }};
            const pasienCount = {{ \App\Models\Pasien::count() }};
            const jenisObatCount = {{ \App\Models\JenisObat::count() }};
            const transaksiCount = {{ \App\Models\PembelianObat::count() }};

            // Brand colors
            const colors = {
                primary: '#004A87',
                secondary: '#7AC943',
                primaryLight: '#E8F6FA',
                secondaryLight: '#F0F9FF'
            };

            // Bar Chart
            const barCtx = document.getElementById('barChart').getContext('2d');
            new Chart(barCtx, {
                type: 'bar',
                data: {
                    labels: ['Jenis Obat', 'Pasien Terdaftar', 'Kategori Obat', 'Total Transaksi'],
                    datasets: [{
                        label: 'Jumlah Data',
                        data: [obatCount, pasienCount, jenisObatCount, transaksiCount],
                        backgroundColor: [
                            colors.primary,
                            colors.secondary,
                            colors.primary + '80',
                            colors.secondary + '80'
                        ],
                        borderColor: [
                            colors.primary,
                            colors.secondary,
                            colors.primary,
                            colors.secondary
                        ],
                        borderWidth: 2,
                        borderRadius: 12,
                        borderSkipped: false,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: colors.primary,
                            titleColor: '#ffffff',
                            bodyColor: '#ffffff',
                            cornerRadius: 12,
                            displayColors: false,
                            padding: 12,
                            titleFont: {
                                size: 14,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 13
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f1f5f9',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#64748b',
                                font: {
                                    size: 12,
                                    family: 'Inter'
                                },
                                padding: 8
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: '#374151',
                                font: {
                                    size: 12,
                                    family: 'Inter',
                                    weight: '500'
                                },
                                padding: 8
                            }
                        }
                    },
                    elements: {
                        bar: {
                            borderRadius: 12
                        }
                    },
                    animation: {
                        duration: 1500,
                        easing: 'easeOutQuart'
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });
        });
    </script><!-- Enhanced CTA Section -->
    <div class="relative bg-[#004A87] py-20 overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#7AC943]/10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Header -->
                <div class="mb-8">                    <div class="inline-block px-6 py-2 bg-[#7AC943] rounded-full text-white text-sm font-medium mb-4">
                        Kontak
                    </div><h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                        Ada yang Bisa Dibantu?
                    </h2>                    <div class="w-20 h-1.5 bg-[#7AC943] rounded-full mx-auto mb-6"></div>
                    <p class="text-[#7AC943] text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                        Kalau mau tanya-tanya atau langsung dateng aja ke klinik, tim kita siap kok!
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="grid md:grid-cols-3 gap-6 mb-10">
                    <!-- Phone -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>                        <h3 class="text-white font-semibold mb-2">Telepon</h3>
                        <p class="text-[#7AC943] text-sm">021-12345678</p>
                    </div>

                    <!-- Email -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>                        <h3 class="text-white font-semibold mb-2">Email</h3>
                        <p class="text-[#7AC943] text-sm">info@clinic-mercubuana.ac.id</p>
                    </div>

                    <!-- Location -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20 hover:bg-white/20 transition-all duration-300">
                        <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>                        <h3 class="text-white font-semibold mb-2">Lokasi</h3>
                        <p class="text-[#7AC943] text-sm">Jl. Meruya Selatan No. 1, Jakarta Barat</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="/kontak"
                        class="inline-flex items-center px-8 py-4 bg-[#7AC943] text-white font-semibold rounded-xl hover:bg-[#6BB832] transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />                        </svg>
                        Chat Yuk
                    </a>
                    <a href="https://maps.google.com" target="_blank"
                        class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-xl border-2 border-white/30 hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />                        </svg>
                        Maps Aja
                    </a>
                </div>                <!-- Additional Info -->
                <div class="mt-8 pt-8 border-t border-white/20">
                    <p class="text-[#7AC943] text-sm">
                        <strong class="text-white">Buka:</strong> Senin-Jumat (08:00-17:00) | Sabtu (08:00-14:00)
                    </p>
                </div>
            </div>
        </div>
    </div></div>
@endsection

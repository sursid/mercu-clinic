@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#004A87] via-[#003D6B] to-[#7AC943] flex items-center justify-center px-4 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#7AC943]/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/4 w-48 h-48 bg-white/3 rounded-full blur-2xl animate-pulse" style="animation-delay: 4s;"></div>
        
        <!-- Floating Icons -->
        <div class="absolute top-32 right-20 animate-bounce" style="animation-duration: 3s;">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
            </svg>
        </div>
        <div class="absolute bottom-40 left-16 animate-bounce" style="animation-duration: 4s; animation-delay: 1s;">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white/15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </div>
    </div>

    <div class="max-w-2xl w-full text-center relative z-10">
        <!-- Large 404 with Modern Design -->
        <div class="relative mb-12">
            <!-- Big 404 Background -->
            <div class="relative">
                <h1 class="text-[12rem] md:text-[16rem] font-black text-white/10 select-none leading-none tracking-tight">404</h1>
                
                <!-- Central Circle with Icon -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="relative">
                        <!-- Outer Ring -->
                        <div class="w-40 h-40 md:w-48 md:h-48 bg-gradient-to-br from-white/20 to-white/5 rounded-full flex items-center justify-center backdrop-blur-md border border-white/30 shadow-2xl">
                            <!-- Inner Ring -->
                            <div class="w-28 h-28 md:w-32 md:h-32 bg-gradient-to-br from-[#7AC943] to-[#6BB832] rounded-full flex items-center justify-center shadow-xl">
                                <!-- Search Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 md:h-16 md:w-16 text-white drop-shadow-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Decorative Elements -->
                        <div class="absolute -top-3 -right-3 w-6 h-6 bg-[#7AC943] rounded-full animate-ping"></div>
                        <div class="absolute -bottom-3 -left-3 w-4 h-4 bg-white/50 rounded-full animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>        <!-- Modern Error Message -->
        <div class="mb-12">
            <div class="mb-6">
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-4 tracking-tight">
                    Halaman Tidak Ditemukan
                </h2>
                <div class="w-24 h-1 bg-[#7AC943] rounded-full mx-auto mb-6"></div>
            </div>
            
            <p class="text-xl md:text-2xl text-white/90 mb-6 leading-relaxed font-light">
                Waduh, sepertinya halaman yang kamu cari <span class="text-[#7AC943] font-semibold">nggak ada</span> nih! 😅
            </p>
            
            <p class="text-lg text-white/70 mb-8 leading-relaxed max-w-xl mx-auto">
                Mungkin link-nya salah ketik, atau halaman ini sudah dipindah ke tempat lain. Tenang aja, kita bantu cariin yang kamu butuhin!
            </p>
            
            <!-- Info Card -->
            <div class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/20 shadow-xl max-w-md mx-auto mb-8">
                <div class="flex items-center justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#7AC943] mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-white font-semibold">Tips Buat Kamu</h3>
                </div>
                <p class="text-white/80 text-sm leading-relaxed">
                    Coba cek lagi URL-nya, atau langsung aja ke halaman utama. Kita ada banyak info kesehatan yang menarik kok! 🏥
                </p>
            </div>
        </div>        <!-- Modern Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="/" 
               class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#7AC943] to-[#6BB832] text-white font-bold rounded-xl hover:from-[#6BB832] hover:to-[#5AA328] transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 group-hover:animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Kembali ke Home
            </a>
            <button onclick="history.back()" 
                    class="group inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-lg text-white font-semibold rounded-xl border-2 border-white/30 hover:bg-white/30 hover:border-white/50 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 group-hover:animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Halaman Sebelumnya
            </button>
        </div>

        <!-- Quick Navigation Cards -->
        <div class="mb-8">
            <p class="text-white/70 text-lg mb-6 font-medium">Atau mungkin kamu lagi nyari ini:</p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-2xl mx-auto">
                <a href="/obat" class="group bg-white/10 backdrop-blur-lg hover:bg-white/20 rounded-xl p-6 transition-all duration-300 border border-white/20 hover:border-white/40 transform hover:scale-105">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold mb-1">Daftar Obat</h3>
                        <p class="text-white/70 text-sm text-center">Lihat obat yang tersedia</p>
                    </div>
                </a>
                
                <a href="/layanan" class="group bg-white/10 backdrop-blur-lg hover:bg-white/20 rounded-xl p-6 transition-all duration-300 border border-white/20 hover:border-white/40 transform hover:scale-105">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold mb-1">Layanan</h3>
                        <p class="text-white/70 text-sm text-center">Konsultasi & perawatan</p>
                    </div>
                </a>
                
                <a href="/kontak" class="group bg-white/10 backdrop-blur-lg hover:bg-white/20 rounded-xl p-6 transition-all duration-300 border border-white/20 hover:border-white/40 transform hover:scale-105">
                    <div class="flex flex-col items-center">
                        <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h3 class="text-white font-semibold mb-1">Kontak</h3>
                        <p class="text-white/70 text-sm text-center">Hubungi kami</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="pt-8 border-t border-white/20">
            <p class="text-white/60 text-sm mb-4">Masih butuh bantuan?</p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="tel:021-12345678" class="inline-flex items-center px-4 py-2 bg-white/10 text-white/90 rounded-full text-sm hover:bg-white/20 transition-colors border border-white/20 hover:border-white/40">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    021-12345678
                </a>
                <a href="mailto:info@clinic-mercubuana.ac.id" class="inline-flex items-center px-4 py-2 bg-white/10 text-white/90 rounded-full text-sm hover:bg-white/20 transition-colors border border-white/20 hover:border-white/40">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email Kami
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

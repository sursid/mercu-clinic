@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-orange-600 via-orange-700 to-red-600 flex items-center justify-center px-4">
    <div class="max-w-lg w-full text-center">
        <!-- Error Code -->
        <div class="relative mb-8">
            <h1 class="text-8xl md:text-9xl font-bold text-white/20 select-none">403</h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-32 h-32 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Error Message -->
        <div class="mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Akses Ditolak
            </h2>
            <p class="text-white/80 text-lg leading-relaxed mb-6">
                Maaf, kamu nggak punya izin untuk mengakses halaman ini. Mungkin perlu login dulu atau minta akses ke admin.
            </p>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <p class="text-white/70 text-sm">
                    <strong class="text-white">Info:</strong> Kalau kamu yakin seharusnya bisa akses, coba login atau hubungi admin.
                </p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/" 
               class="inline-flex items-center px-6 py-3 bg-[#7AC943] text-white font-semibold rounded-lg hover:bg-[#6BB832] transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Kembali ke Home
            </a>
            <a href="/admin" 
               class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-lg border border-white/30 hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                Login Admin
            </a>
        </div>

        <!-- Additional Info -->
        <div class="mt-12 pt-8 border-t border-white/20">
            <p class="text-white/60 text-sm mb-4">Butuh bantuan akses?</p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="/kontak" class="px-4 py-2 bg-white/10 text-white/80 rounded-full text-sm hover:bg-white/20 transition-colors">
                    Hubungi Admin
                </a>
                <a href="/" class="px-4 py-2 bg-white/10 text-white/80 rounded-full text-sm hover:bg-white/20 transition-colors">
                    Halaman Utama
                </a>
            </div>
        </div>
    </div>

    <!-- Background Decorations -->
    <div class="fixed top-10 left-10 w-32 h-32 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed bottom-10 right-10 w-40 h-40 bg-orange-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed top-1/2 left-1/4 w-24 h-24 bg-white/5 rounded-full blur-2xl pointer-events-none"></div>
</div>
@endsection

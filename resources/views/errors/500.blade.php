@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-red-600 via-red-700 to-red-800 flex items-center justify-center px-4">
    <div class="max-w-lg w-full text-center">
        <!-- Error Code -->
        <div class="relative mb-8">
            <h1 class="text-8xl md:text-9xl font-bold text-white/20 select-none">500</h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-32 h-32 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Error Message -->
        <div class="mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Server Error
            </h2>
            <p class="text-white/80 text-lg leading-relaxed mb-6">
                Maaf, ada masalah teknis di server kami. Tim IT sedang bekerja keras untuk memperbaikinya.
            </p>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <p class="text-white/70 text-sm">
                    <strong class="text-white">Info:</strong> Kalau masalah ini terus berlanjut, hubungi tim support kami ya.
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
            <button onclick="location.reload()" 
                    class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-lg border border-white/30 hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Coba Lagi
            </button>
        </div>

        <!-- Contact Support -->
        <div class="mt-12 pt-8 border-t border-white/20">
            <p class="text-white/60 text-sm mb-4">Butuh bantuan segera?</p>
            <div class="flex flex-col sm:flex-row justify-center gap-3">
                <a href="/kontak" class="inline-flex items-center px-4 py-2 bg-white/10 text-white/80 rounded-full text-sm hover:bg-white/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Hubungi Support
                </a>
                <a href="mailto:info@clinic-mercubuana.ac.id" class="inline-flex items-center px-4 py-2 bg-white/10 text-white/80 rounded-full text-sm hover:bg-white/20 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email
                </a>
            </div>
        </div>

        <!-- Error Code for Developer -->
        <div class="mt-8">
            <details class="bg-white/5 rounded-lg p-4 text-left">
                <summary class="text-white/60 text-sm cursor-pointer hover:text-white/80 transition-colors">
                    Technical Details (untuk developer)
                </summary>
                <div class="mt-3 pt-3 border-t border-white/10">
                    <p class="text-white/50 text-xs font-mono">
                        Error Code: 500 - Internal Server Error<br>
                        Time: {{ date('Y-m-d H:i:s') }}<br>
                        Server: {{ request()->getHost() }}
                    </p>
                </div>
            </details>
        </div>
    </div>

    <!-- Background Decorations -->
    <div class="fixed top-10 left-10 w-32 h-32 bg-white/5 rounded-full blur-3xl pointer-events-none animate-pulse"></div>
    <div class="fixed bottom-10 right-10 w-40 h-40 bg-red-500/10 rounded-full blur-3xl pointer-events-none animate-pulse"></div>
    <div class="fixed top-1/2 right-1/4 w-24 h-24 bg-white/5 rounded-full blur-2xl pointer-events-none animate-pulse"></div>
</div>
@endsection

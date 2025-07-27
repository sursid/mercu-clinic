@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-600 via-gray-700 to-gray-800 flex items-center justify-center px-4">
    <div class="max-w-lg w-full text-center">
        <!-- Error Code -->
        <div class="relative mb-8">
            <h1 class="text-8xl md:text-9xl font-bold text-white/20 select-none">{{ $__exception->getStatusCode() ?? 'Error' }}</h1>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-32 h-32 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Error Message -->
        <div class="mb-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Oops! Ada Masalah
            </h2>
            <p class="text-white/80 text-lg leading-relaxed mb-6">
                Sepertinya ada yang nggak beres nih. Tapi tenang aja, kita udah tau dan sedang berusaha perbaiki.
            </p>
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                <p class="text-white/70 text-sm">
                    <strong class="text-white">Pesan:</strong> {{ $exception->getMessage() ?? 'Terjadi kesalahan yang tidak terduga' }}
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
            <button onclick="history.back()" 
                    class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-lg border border-white/30 hover:bg-white/30 transform hover:scale-105 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </button>
        </div>

        <!-- Contact Info -->
        <div class="mt-12 pt-8 border-t border-white/20">
            <p class="text-white/60 text-sm mb-4">Masih bermasalah?</p>
            <div class="flex flex-wrap justify-center gap-3">
                <a href="/kontak" class="px-4 py-2 bg-white/10 text-white/80 rounded-full text-sm hover:bg-white/20 transition-colors">
                    Hubungi Kami
                </a>
                <a href="mailto:info@clinic-mercubuana.ac.id" class="px-4 py-2 bg-white/10 text-white/80 rounded-full text-sm hover:bg-white/20 transition-colors">
                    Email Support
                </a>
            </div>
        </div>
    </div>

    <!-- Background Decorations -->
    <div class="fixed top-10 left-10 w-32 h-32 bg-white/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed bottom-10 right-10 w-40 h-40 bg-gray-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="fixed top-1/2 left-1/4 w-24 h-24 bg-white/5 rounded-full blur-2xl pointer-events-none"></div>
</div>
@endsection

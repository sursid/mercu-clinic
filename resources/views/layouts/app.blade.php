<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Clinic Mercubuana') }}</title>
      <!-- Favicon -->
    <link rel="icon" type="image/webp" href="{{ asset('assets/mercu-buana-logo.webp') }}">
    <link rel="shortcut icon" type="image/webp" href="{{ asset('assets/mercu-buana-logo.webp') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/mercu-buana-logo.webp') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/mercu-buana-logo.webp') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/mercu-buana-logo.webp') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/mercu-buana-logo.webp') }}">
    
    <!-- Meta tags for better SEO and social sharing -->
    <meta name="description" content="Clinic Mercubuana - Pelayanan kesehatan terpercaya dengan apotek lengkap dan konsultasi dokter profesional">
    <meta name="keywords" content="clinic, mercubuana, apotek, obat, konsultasi dokter, kesehatan">
    <meta name="author" content="Clinic Mercubuana">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ config('app.name', 'Clinic Mercubuana') }}">
    <meta property="og:description" content="Pelayanan kesehatan terpercaya dengan apotek lengkap dan konsultasi dokter profesional">
    <meta property="og:image" content="{{ asset('assets/mercu-buana-logo.webp') }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="{{ config('app.name', 'Clinic Mercubuana') }}">
    <meta property="twitter:description" content="Pelayanan kesehatan terpercaya dengan apotek lengkap dan konsultasi dokter profesional">
    <meta property="twitter:image" content="{{ asset('assets/mercu-buana-logo.webp') }}">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        /* Custom animations */
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(45deg); }
            50% { transform: translateY(-10px) rotate(45deg); }
        }
        
        @keyframes pulse-soft {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .animate-bounce-slow {
            animation: float 4s ease-in-out infinite;
        }
        
        .hover\:scale-\[1\.02\]:hover {
            transform: scale(1.02);
            transition: transform 0.3s ease;
        }
        
        /* Image hover effects */
        .group:hover .group-hover\:opacity-40 {
            opacity: 0.4;
            transition: opacity 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50">    <!-- Navbar -->
    <nav class="bg-[#004A87] shadow-sm relative z-[100]">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-6">
                    <div class="flex items-center">
                        <img src="{{ asset('assets/mercu-buana-logo.webp') }}" alt="Mercubuana Logo" class="h-10 mr-3">
                        <a href="/" class="text-xl font-bold text-white">
                            Clinic Mercubuana
                        </a>
                    </div>                    <div class="hidden md:flex space-x-2 ml-6">
                        <a href="/" class="px-4 py-2 rounded-lg transition-colors duration-200 {{ request()->routeIs('home') || request()->is('/') ? 'bg-[#7AC943] text-[#004A87] font-semibold' : 'text-white hover:bg-[#7AC943] hover:text-[#004A87]' }}">
                            Home
                        </a>
                        <a href="/obat" class="px-4 py-2 rounded-lg transition-colors duration-200 {{ request()->is('obat*') ? 'bg-[#7AC943] text-[#004A87] font-semibold' : 'text-white hover:bg-[#7AC943] hover:text-[#004A87]' }}">
                            Obat
                        </a>
                        <a href="/layanan" class="px-4 py-2 rounded-lg transition-colors duration-200 {{ request()->is('layanan*') ? 'bg-[#7AC943] text-[#004A87] font-semibold' : 'text-white hover:bg-[#7AC943] hover:text-[#004A87]' }}">
                            Layanan
                        </a>
                        <a href="/kontak" class="px-4 py-2 rounded-lg transition-colors duration-200 {{ request()->is('kontak*') ? 'bg-[#7AC943] text-[#004A87] font-semibold' : 'text-white hover:bg-[#7AC943] hover:text-[#004A87]' }}">
                            Kontak
                        </a>
                    </div>
                </div>
                <div>
                    <a href="/admin" class="bg-[#7AC943] text-[#004A87] px-4 py-2 rounded hover:bg-green-500 hover:text-white transition-colors duration-200">
                        Admin Panel
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')    <!-- Footer -->
    <footer class="bg-[#004A87] py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-lg font-semibold mb-2 text-white">Clinic Mercubuana</h3>
                    <p class="text-[#7AC943]">Melayani dengan sepenuh hati</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                    <div>
                        <h4 class="text-sm font-semibold mb-3 uppercase text-[#7AC943]">Links</h4>                        <ul class="space-y-2">
                            <li><a href="/" class="transition-colors duration-200 {{ request()->routeIs('home') || request()->is('/') ? 'text-[#7AC943] font-semibold' : 'text-white hover:text-[#7AC943]' }}">Home</a></li>
                            <li><a href="/obat" class="transition-colors duration-200 {{ request()->is('obat*') ? 'text-[#7AC943] font-semibold' : 'text-white hover:text-[#7AC943]' }}">Obat</a></li>
                            <li><a href="/layanan" class="transition-colors duration-200 {{ request()->is('layanan*') ? 'text-[#7AC943] font-semibold' : 'text-white hover:text-[#7AC943]' }}">Layanan</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold mb-3 uppercase text-[#7AC943]">Kontak</h4>
                        <ul class="space-y-2">
                            <li class="text-white">021-12345678</li>
                            <li class="text-white">info@clinic-mercubuana.ac.id</li>
                            <li class="text-white">Jl. Meruya Selatan No. 1, Jakarta Barat</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-[#7AC943]/30">
                <p class="text-white/80 text-center">&copy; {{ date('Y') }} Clinic Mercubuana. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>

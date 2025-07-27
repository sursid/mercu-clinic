@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-[#004A87] text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 rounded-full bg-white/10 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute top-1/2 right-0 w-72 h-72 rounded-full bg-[#7AC943]/20 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-1/3 w-64 h-64 rounded-full bg-white/5"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                Layanan Kesehatan
                <span class="text-[#7AC943]">Terpercaya</span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-8 leading-relaxed">
                Memberikan pelayanan kesehatan berkualitas tinggi dengan teknologi modern dan tim medis profesional
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#layanan" class="inline-flex items-center px-8 py-4 bg-[#7AC943] text-white font-semibold rounded-xl hover:bg-[#6BB139] transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                    Jelajahi Layanan
                </a>
                <a href="/kontak" class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-xl hover:bg-white hover:text-[#004A87] transition-all duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto bg-[#7AC943]/10 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-[#7AC943]/20 transition-colors duration-300">
                    <svg class="w-8 h-8 text-[#7AC943]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-1a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div class="text-3xl font-bold text-[#004A87] mb-2">1000+</div>
                <div class="text-gray-600 font-medium">Pasien Terlayani</div>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto bg-[#7AC943]/10 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-[#7AC943]/20 transition-colors duration-300">
                    <svg class="w-8 h-8 text-[#7AC943]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div class="text-3xl font-bold text-[#004A87] mb-2">5+</div>
                <div class="text-gray-600 font-medium">Tahun Pengalaman</div>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto bg-[#7AC943]/10 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-[#7AC943]/20 transition-colors duration-300">
                    <svg class="w-8 h-8 text-[#7AC943]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-3xl font-bold text-[#004A87] mb-2">24/7</div>
                <div class="text-gray-600 font-medium">Layanan Darurat</div>
            </div>
            
            <div class="text-center group">
                <div class="w-16 h-16 mx-auto bg-[#7AC943]/10 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-[#7AC943]/20 transition-colors duration-300">
                    <svg class="w-8 h-8 text-[#7AC943]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="text-3xl font-bold text-[#004A87] mb-2">500+</div>
                <div class="text-gray-600 font-medium">Jenis Obat</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="layanan" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-[#004A87] mb-6">Layanan Unggulan Kami</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Kami menyediakan berbagai layanan kesehatan yang komprehensif dengan standar pelayanan terbaik
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Apotek Service -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100 overflow-hidden">
                <div class="p-8">
                    <div class="w-20 h-20 flex items-center justify-center bg-[#7AC943]/10 rounded-2xl text-[#7AC943] mb-6 group-hover:bg-[#7AC943] group-hover:text-white transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#004A87] mb-4">Apotek</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Apotek Clinic Mercubuana menyediakan berbagai jenis obat berkualitas dengan harga yang terjangkau. Staf apotek kami siap membantu memberikan informasi terkait obat yang Anda butuhkan.
                    </p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Obat resep dan non-resep</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Vitamin dan suplemen</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Alat kesehatan</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Konsultasi kefarmasian</span>
                        </div>
                    </div>
                    <a href="/obat" class="inline-flex items-center text-[#004A87] font-semibold hover:text-[#7AC943] transition-colors duration-300 group">
                        Lihat produk obat
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Consultation Service -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100 overflow-hidden">
                <div class="p-8">
                    <div class="w-20 h-20 flex items-center justify-center bg-[#7AC943]/10 rounded-2xl text-[#7AC943] mb-6 group-hover:bg-[#7AC943] group-hover:text-white transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#004A87] mb-4">Konsultasi Dokter</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Dapatkan konsultasi dengan dokter berpengalaman untuk berbagai masalah kesehatan. Dokter kami akan memberikan diagnosis, saran pengobatan, dan rujukan jika diperlukan.
                    </p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Konsultasi umum</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Konsultasi spesialis</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pemeriksaan fisik</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pemeriksaan laboratorium</span>
                        </div>
                    </div>
                    <a href="/kontak" class="inline-flex items-center text-[#004A87] font-semibold hover:text-[#7AC943] transition-colors duration-300 group">
                        Buat janji konsultasi
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Online Prescription Service -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 group border border-gray-100 overflow-hidden">
                <div class="p-8">
                    <div class="w-20 h-20 flex items-center justify-center bg-[#7AC943]/10 rounded-2xl text-[#7AC943] mb-6 group-hover:bg-[#7AC943] group-hover:text-white transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#004A87] mb-4">Resep Online</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan resep online memudahkan Anda untuk mendapatkan obat sesuai resep dokter tanpa harus mengantri. Cukup unggah resep dokter Anda, dan kami akan menyiapkannya.
                    </p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Unggah resep dokter</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Konsultasi obat</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pengiriman obat</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg class="w-5 h-5 text-[#7AC943] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pengingat dosis obat</span>
                        </div>
                    </div>
                    <a href="/kontak" class="inline-flex items-center text-[#004A87] font-semibold hover:text-[#7AC943] transition-colors duration-300 group">
                        Kirim resep
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- Why Choose Us Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-[#004A87] mb-6">Mengapa Memilih Kami?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Komitmen kami adalah memberikan pelayanan kesehatan terbaik dengan standar internasional
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-24 h-24 mx-auto flex items-center justify-center bg-[#7AC943]/10 rounded-3xl text-[#7AC943] mb-6 group-hover:bg-[#7AC943] group-hover:text-white transition-all duration-500 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#004A87] mb-3">Kualitas Terjamin</h3>
                <p class="text-gray-600 leading-relaxed">Obat-obatan dan layanan berkualitas tinggi dengan sertifikasi resmi untuk kesehatan Anda</p>
            </div>
            
            <div class="text-center group">
                <div class="w-24 h-24 mx-auto flex items-center justify-center bg-[#7AC943]/10 rounded-3xl text-[#7AC943] mb-6 group-hover:bg-[#7AC943] group-hover:text-white transition-all duration-500 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#004A87] mb-3">Pelayanan Cepat</h3>
                <p class="text-gray-600 leading-relaxed">Sistem antrian modern dan efisien untuk meminimalkan waktu tunggu pasien</p>
            </div>
            
            <div class="text-center group">
                <div class="w-24 h-24 mx-auto flex items-center justify-center bg-[#7AC943]/10 rounded-3xl text-[#7AC943] mb-6 group-hover:bg-[#7AC943] group-hover:text-white transition-all duration-500 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#004A87] mb-3">Tim Profesional</h3>
                <p class="text-gray-600 leading-relaxed">Dokter dan staf medis berpengalaman dengan sertifikasi dan kompetensi terkini</p>
            </div>
            
            <div class="text-center group">
                <div class="w-24 h-24 mx-auto flex items-center justify-center bg-[#7AC943]/10 rounded-3xl text-[#7AC943] mb-6 group-hover:bg-[#7AC943] group-hover:text-white transition-all duration-500 group-hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-[#004A87] mb-3">Harga Terjangkau</h3>
                <p class="text-gray-600 leading-relaxed">Layanan kesehatan berkualitas dengan tarif yang kompetitif dan terjangkau</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-[#004A87] mb-6">Testimoni Pasien</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Dengarkan pengalaman pasien kami yang telah merasakan pelayanan terbaik
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-lg">AM</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-[#004A87]">Andi Maulana</h4>
                        <p class="text-gray-500 text-sm">Mahasiswa</p>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    "Pelayanan di Clinic Mercubuana sangat memuaskan. Dokternya ramah dan profesional, obat-obatan lengkap, dan harganya terjangkau untuk mahasiswa seperti saya."
                </p>
                <div class="flex text-[#7AC943]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-lg">SR</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-[#004A87]">Siti Rahayu</h4>
                        <p class="text-gray-500 text-sm">Dosen</p>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    "Clinic ini sangat membantu kebutuhan kesehatan civitas akademika. Lokasinya strategis di kampus, layanan resep online sangat praktis, dan staff yang profesional."
                </p>
                <div class="flex text-[#7AC943]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-[#7AC943] rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-lg">BP</span>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold text-[#004A87]">Budi Pratama</h4>
                        <p class="text-gray-500 text-sm">Staff Administrasi</p>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    "Konsultasi dengan dokter di sini sangat informatif dan detail. Diagnosa yang tepat dan pengobatan yang efektif membuat saya cepat pulih. Highly recommended!"
                </p>
                <div class="flex text-[#7AC943]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#004A87] text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-[#7AC943] -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full bg-white -translate-x-1/2 translate-y-1/2"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Untuk Konsultasi?</h2>
            <p class="text-xl md:text-2xl text-blue-100 mb-12 leading-relaxed">
                Tim medis profesional kami siap membantu kebutuhan kesehatan Anda dengan pelayanan terbaik
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-[#7AC943]/20 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-[#7AC943]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Hubungi Kami</h3>
                    <p class="text-blue-100 text-sm">021-12345678</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-[#7AC943]/20 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-[#7AC943]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Kunjungi Kami</h3>
                    <p class="text-blue-100 text-sm">Kampus Mercubuana</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto bg-[#7AC943]/20 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-[#7AC943]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Jam Operasional</h3>
                    <p class="text-blue-100 text-sm">Senin - Jumat: 08:00 - 17:00</p>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="/kontak" class="inline-flex items-center px-10 py-4 bg-[#7AC943] text-white font-bold rounded-2xl hover:bg-[#6BB139] transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Mulai Konsultasi
                </a>
                <a href="tel:02112345678" class="inline-flex items-center px-10 py-4 bg-transparent border-2 border-white text-white font-bold rounded-2xl hover:bg-white hover:text-[#004A87] transition-all duration-300">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Telepon Sekarang
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

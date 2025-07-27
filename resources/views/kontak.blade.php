@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-[#004A87] py-16">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Kontak Kami
            </h1>
            <div class="w-16 h-1 bg-[#7AC943] rounded-full mx-auto mb-6"></div>
            <p class="text-lg text-white/90 leading-relaxed">
                Hubungi kami untuk konsultasi kesehatan, informasi obat, atau pertanyaan lainnya. Tim kami siap membantu Anda.
            </p>
        </div>
    </div>
</div>

<!-- Contact Content -->
<div class="container mx-auto px-4 py-16">
    <!-- Contact Information & Form -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <!-- Contact Information -->
        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-200">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-[#004A87] rounded-lg flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-[#004A87]">Informasi Kontak</h2>
            </div>
            
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 text-[#7AC943] mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-[#004A87] font-semibold mb-1">Telepon</p>
                        <p class="text-gray-600">021-12345678</p>
                        <p class="text-sm text-gray-500">Layanan 24/7 untuk konsultasi darurat</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 text-[#7AC943] mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-[#004A87] font-semibold mb-1">Email</p>
                        <p class="text-gray-600">info@clinic-mercubuana.ac.id</p>
                        <p class="text-sm text-gray-500">Respon dalam 24 jam kerja</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 text-[#7AC943] mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-[#004A87] font-semibold mb-1">Alamat</p>
                        <p class="text-gray-600">Jl. Meruya Selatan No. 1, Jakarta Barat</p>
                        <p class="text-sm text-gray-500">Kampus Universitas Mercu Buana</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="flex-shrink-0 h-6 w-6 text-[#7AC943] mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-[#004A87] font-semibold mb-1">Jam Operasional</p>
                        <div class="text-gray-600 space-y-1">
                            <p>Senin - Jumat: 08:00 - 20:00</p>
                            <p>Sabtu: 08:00 - 17:00</p>
                            <p>Minggu: 09:00 - 14:00</p>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Layanan darurat tersedia 24/7</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-md p-8 border border-gray-200">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-[#7AC943] rounded-lg flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-[#004A87]">Kirim Pesan</h2>
            </div>
            
            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-semibold text-[#004A87] mb-2">Nama Lengkap</label>
                    <input type="text" 
                           name="name" 
                           id="name" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#7AC943] focus:ring-1 focus:ring-[#7AC943] transition-colors duration-200"
                           placeholder="Masukkan nama lengkap Anda">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-semibold text-[#004A87] mb-2">Email</label>
                    <input type="email" 
                           name="email" 
                           id="email" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#7AC943] focus:ring-1 focus:ring-[#7AC943] transition-colors duration-200"
                           placeholder="Masukkan email Anda">
                </div>
                
                <div>
                    <label for="phone" class="block text-sm font-semibold text-[#004A87] mb-2">Nomor Telepon</label>
                    <input type="tel" 
                           name="phone" 
                           id="phone" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#7AC943] focus:ring-1 focus:ring-[#7AC943] transition-colors duration-200"
                           placeholder="Masukkan nomor telepon Anda">
                </div>
                
                <div>
                    <label for="subject" class="block text-sm font-semibold text-[#004A87] mb-2">Subjek</label>
                    <select name="subject" 
                            id="subject" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#7AC943] focus:ring-1 focus:ring-[#7AC943] transition-colors duration-200">
                        <option value="">Pilih subjek pesan</option>
                        <option value="konsultasi">Konsultasi Kesehatan</option>
                        <option value="obat">Informasi Obat</option>
                        <option value="resep">Resep Online</option>
                        <option value="jadwal">Jadwal Konsultasi</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-semibold text-[#004A87] mb-2">Pesan</label>
                    <textarea name="message" 
                              id="message" 
                              rows="4" 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#7AC943] focus:ring-1 focus:ring-[#7AC943] transition-colors duration-200 resize-none"
                              placeholder="Tuliskan pesan atau pertanyaan Anda di sini..."></textarea>
                </div>
                
                <div>
                    <button type="submit" 
                            class="w-full bg-[#004A87] text-white py-3 px-6 rounded-lg font-semibold hover:bg-[#7AC943] transition-colors duration-200 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Map Section -->
    <div class="bg-white rounded-lg shadow-md p-8 border border-gray-200">
        <div class="flex items-center mb-6">
            <div class="w-10 h-10 bg-[#7AC943] rounded-lg flex items-center justify-center mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-[#004A87]">Lokasi Kami</h2>
        </div>
        
        <div class="bg-gray-100 rounded-lg h-80 border border-gray-200">
            <!-- Replace with actual Google Maps embed -->
            <div class="w-full h-full flex flex-col items-center justify-center text-center p-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <p class="text-gray-500 text-lg font-medium mb-2">Peta Lokasi</p>
                <p class="text-gray-400 text-sm">Google Maps akan ditampilkan di sini</p>
                <p class="text-gray-400 text-sm">Jl. Meruya Selatan No. 1, Jakarta Barat</p>
            </div>
        </div>
    </div>
    
    <!-- Quick Actions -->
    <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="tel:02112345678" class="bg-[#7AC943] text-white p-6 rounded-lg text-center hover:bg-[#6BB832] transition-colors duration-200 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <h3 class="font-semibold text-lg mb-2">Telepon Langsung</h3>
            <p class="text-sm opacity-90">Hubungi untuk konsultasi cepat</p>
        </a>
        
        <a href="mailto:info@clinic-mercubuana.ac.id" class="bg-[#004A87] text-white p-6 rounded-lg text-center hover:bg-[#003A67] transition-colors duration-200 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <h3 class="font-semibold text-lg mb-2">Email Kami</h3>
            <p class="text-sm opacity-90">Kirim email untuk pertanyaan detail</p>
        </a>
        
        <a href="/layanan" class="bg-gray-600 text-white p-6 rounded-lg text-center hover:bg-gray-700 transition-colors duration-200 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mx-auto mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <h3 class="font-semibold text-lg mb-2">Lihat Layanan</h3>
            <p class="text-sm opacity-90">Jelajahi semua layanan kami</p>
        </a>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="bg-[#004A87] py-16">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-block px-4 py-2 bg-[#7AC943] rounded-lg text-white text-sm font-medium mb-6">
                Apotek Digital
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Daftar Obat Lengkap
            </h1>
            <div class="w-16 h-1 bg-[#7AC943] rounded-full mx-auto mb-6"></div>
            <p class="text-lg text-white/90 leading-relaxed max-w-2xl mx-auto">
                Temukan berbagai obat berkualitas dengan harga terjangkau. Semua obat sudah tersertifikasi dan aman untuk dikonsumsi.
            </p>
        </div>
    </div>
</div>

<!-- Filter Section -->
<div class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200">
            <div class="flex items-center mb-6">
                <div class="w-10 h-10 bg-[#004A87] rounded-lg flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-[#004A87]">Filter & Pencarian</h2>
            </div>
            
            <form action="/obat" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Jenis Obat Filter -->
                <div>
                    <label class="block text-sm font-semibold text-[#004A87] mb-2">Kategori Obat</label>
                    <div class="relative">
                        <select name="jenis" class="w-full appearance-none bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 pr-10 text-gray-700 focus:outline-none focus:border-[#7AC943] focus:bg-white transition-colors duration-200">
                            <option value="">Semua Kategori</option>
                            @foreach(\App\Models\JenisObat::all() as $jenisObat)
                                <option value="{{ $jenisObat->nama }}" {{ request('jenis') == $jenisObat->nama ? 'selected' : '' }}>
                                    {{ $jenisObat->nama }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Search Input -->
                <div>
                    <label class="block text-sm font-semibold text-[#004A87] mb-2">Cari Obat</label>
                    <div class="relative">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Ketik nama obat..." 
                               class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 pl-10 text-gray-700 focus:outline-none focus:border-[#7AC943] focus:bg-white transition-colors duration-200">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Filter Button -->
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-[#004A87] text-white font-semibold py-3 px-6 rounded-lg hover:bg-[#7AC943] transition-colors duration-200">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Cari Obat
                        </div>
                    </button>
                </div>
            </form>
            
            <!-- Quick Reset -->
            @if(request('jenis') || request('search'))
            <div class="mt-4 pt-4 border-t border-gray-200">
                <a href="/obat" class="inline-flex items-center text-sm text-gray-600 hover:text-[#7AC943] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    Reset Filter
                </a>
            </div>
            @endif
        </div>
    </div>
</div><!-- Products Grid Section -->
<div class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        @php
            $obats = \App\Models\Obat::when(request('jenis'), function($query) {
                return $query->where('jenis', request('jenis'));
            })
            ->when(request('search'), function($query) {
                return $query->where('nama', 'like', '%'.request('search').'%')
                            ->orWhere('deskripsi', 'like', '%'.request('search').'%');
            })
            ->get();
        @endphp
        
        <!-- Results Info -->
        <div class="mb-8 text-center">
            <p class="text-lg text-gray-600">
                @if(request('jenis') || request('search'))
                    Ditemukan <span class="font-bold text-[#004A87]">{{ $obats->count() }}</span> obat
                    @if(request('search'))
                        untuk "<span class="text-[#7AC943] font-semibold">{{ request('search') }}</span>"
                    @endif
                    @if(request('jenis'))
                        kategori "<span class="text-[#7AC943] font-semibold">{{ request('jenis') }}</span>"
                    @endif
                @else
                    Menampilkan <span class="font-bold text-[#004A87]">{{ $obats->count() }}</span> obat tersedia
                @endif
            </p>
        </div>
        
        @forelse($obats as $obat)
            @if($loop->first)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @endif
              <!-- Medicine Card -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-200">
                <!-- Image Section -->
                <div class="relative h-48 bg-gray-100 overflow-hidden">
                    @if($obat->image)
                        <img src="{{ asset($obat->image) }}" alt="{{ $obat->nama }}" 
                             class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full flex flex-col items-center justify-center bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-300 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                            <span class="text-gray-400 text-sm">Gambar Obat</span>
                        </div>
                    @endif
                    
                    <!-- Category Badge -->
                    <div class="absolute top-3 left-3">
                        <span class="inline-flex items-center px-2 py-1 bg-[#004A87] text-white text-xs font-medium rounded">
                            {{ $obat->jenis }}
                        </span>
                    </div>
                    
                    <!-- Stock Status -->
                    <div class="absolute top-3 right-3">
                        <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium {{ $obat->stok > 10 ? 'bg-green-100 text-green-800' : ($obat->stok > 0 ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                            @if($obat->stok > 10)
                                Tersedia
                            @elseif($obat->stok > 0)
                                Terbatas
                            @else
                                Habis
                            @endif
                        </span>
                    </div>
                </div>
                
                <!-- Content Section -->
                <div class="p-4">
                    <!-- Drug Name -->
                    <h3 class="text-lg font-bold text-[#004A87] mb-2">
                        {{ $obat->nama }}
                    </h3>
                    
                    <!-- Description -->
                    <p class="text-gray-600 mb-3 text-sm line-clamp-2">
                        {{ $obat->deskripsi ?: 'Obat berkualitas tinggi dengan efektivitas terpercaya untuk membantu proses penyembuhan Anda.' }}
                    </p>
                    
                    <!-- Stock Info -->
                    <div class="flex items-center justify-between pt-3 border-t border-gray-100">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#7AC943] mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                            <span class="text-sm text-gray-700">Stok: {{ $obat->stok }}</span>
                        </div>
                        
                        <!-- Quality Badge -->
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-xs text-gray-500">Berkualitas</span>
                        </div>
                    </div>
                </div>
            </div>
            
            @if($loop->last)
                </div>
            @endif        @empty
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="max-w-md mx-auto">
                    <div class="w-20 h-20 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Obat Tidak Ditemukan</h3>
                    <p class="text-gray-600 mb-6">
                        Maaf, obat yang Anda cari tidak tersedia. Coba ubah filter atau kata kunci pencarian Anda.
                    </p>
                    <div class="space-y-3">
                        <a href="/obat" class="inline-flex items-center px-6 py-3 bg-[#7AC943] text-white font-semibold rounded-lg hover:bg-[#6BB832] transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                            Lihat Semua Obat
                        </a>
                        <div class="text-sm text-gray-500">
                            atau <a href="/kontak" class="text-[#7AC943] hover:text-[#6BB832] font-medium">hubungi kami</a> untuk konsultasi
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection

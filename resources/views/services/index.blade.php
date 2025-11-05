<x-app-layout>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-gradient-to-r from-emerald-600 to-teal-600 rounded-xl shadow-lg mb-8 overflow-hidden relative">
                <div class="absolute inset-0 bg-white/5"></div>
                <div class="relative px-6 py-8 sm:p-12">
                    <div class="flex items-center mb-4">
                        <span class="bg-white/20 text-white/90 px-3 py-1 rounded-full text-sm font-medium mr-3">Layanan Profesional</span>
                        <span class="text-white/80 text-sm">Digital Marketing Solutions</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Layanan GrowIn</h1>
                    <p class="text-lg text-white/90 max-w-2xl">
                        Solusi digital marketing terintegrasi untuk mendukung percepatan pertumbuhan bisnis Anda di era digital.
                    </p>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- Service 1: SEO Optimization -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">SEO Optimization</h3>
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">Populer</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Tingkatkan visibilitas website Anda di mesin pencari dengan strategi SEO yang terukur dan berkelanjutan.
                        </p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-semibold text-emerald-700">Rp 2.500.000</span>
                            <span class="text-xs text-gray-500 ml-2">/bulan</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('services.show', 'seo-optimization') }}" class="text-sm text-gray-500 hover:text-emerald-600 font-medium transition-colors">
                                Detail Layanan →
                            </a>
                            <a href="{{ route('order.create', 'seo-optimization') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Social Media Marketing -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-purple-50 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Social Media Marketing</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Bangun brand awareness dan engagement melalui strategi konten yang menarik di platform media sosial.
                        </p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-semibold text-emerald-700">Rp 1.800.000</span>
                            <span class="text-xs text-gray-500 ml-2">/bulan</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('services.show', 'social-media-marketing') }}" class="text-sm text-gray-500 hover:text-emerald-600 font-medium transition-colors">
                                Detail Layanan →
                            </a>
                            <a href="{{ route('order.create', 'social-media-marketing') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Content Marketing -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-pink-50 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Content Marketing</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Kembangkan konten berkualitas yang menarik audiens dan membangun otoritas brand di industri Anda.
                        </p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-semibold text-emerald-700">Rp 3.200.000</span>
                            <span class="text-xs text-gray-500 ml-2">/paket</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('services.show', 'content-marketing') }}" class="text-sm text-gray-500 hover:text-emerald-600 font-medium transition-colors">
                                Detail Layanan →
                            </a>
                            <a href="{{ route('order.create', 'content-marketing') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 4: PPC Advertising -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">PPC Advertising</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Dapatkan traffic berkualitas secara instan dengan kampanye iklan berbayar yang teroptimasi.
                        </p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-semibold text-emerald-700">Rp 1.500.000</span>
                            <span class="text-xs text-gray-500 ml-2">+ budget iklan</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('services.show', 'ppc-advertising') }}" class="text-sm text-gray-500 hover:text-emerald-600 font-medium transition-colors">
                                Detail Layanan →
                            </a>
                            <a href="{{ route('order.create', 'ppc-advertising') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Email Marketing -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-yellow-50 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Email Marketing</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Jaga hubungan dengan pelanggan melalui kampanye email yang personal dan konversi tinggi.
                        </p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-semibold text-emerald-700">Rp 2.000.000</span>
                            <span class="text-xs text-gray-500 ml-2">/bulan</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('services.show', 'email-marketing') }}" class="text-sm text-gray-500 hover:text-emerald-600 font-medium transition-colors">
                                Detail Layanan →
                            </a>
                            <a href="{{ route('order.create', 'email-marketing') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 6: Branding Strategy -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100 hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="w-12 h-12 bg-indigo-50 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                            </svg>
                        </div>
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-semibold text-gray-900">Branding Strategy</h3>
                            <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded-full text-xs font-medium">Premium</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">
                            Bangun identitas brand yang kuat dan konsisten untuk membedakan bisnis Anda dari kompetitor.
                        </p>
                        <div class="flex items-center mb-4">
                            <span class="text-lg font-semibold text-emerald-700">Rp 5.000.000</span>
                            <span class="text-xs text-gray-500 ml-2">/proyek</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('services.show', 'branding-strategy') }}" class="text-sm text-gray-500 hover:text-emerald-600 font-medium transition-colors">
                                Detail Layanan →
                            </a>
                            <a href="{{ route('order.create', 'branding-strategy') }}" class="bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:shadow-lg">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .service-card {
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .btn-primary {
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(5, 150, 105, 0.3);
        }
    </style>
</x-app-layout>
<x-app-layout>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Hero Section --}}
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Tentang GrowIn</h1>
                <div class="w-24 h-1 bg-emerald-500 mx-auto mb-6 rounded-full"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    GrowIn adalah usaha jasa digital marketing terintegrasi yang berfokus membantu 
                    UMKM, startup, dan pelaku bisnis kecil menengah untuk berkembang di era digital.
                </p>
            </div>

            {{-- Section 1: Latar Belakang --}}
            <div class="section-card p-8 mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-900">Latar Belakang</h2>
                </div>
                <div class="accent-border pl-6 ml-3">
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Perkembangan teknologi digital yang pesat telah mengubah cara bisnis berinteraksi 
                        dengan pelanggan. Banyak pelaku UMKM memiliki produk berkualitas, tetapi belum mampu 
                        memanfaatkan pemasaran digital secara optimal karena keterbatasan waktu, sumber daya, 
                        dan pengetahuan. 
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Melihat kondisi tersebut, tiga mahasiswa Informatika Universitas Jenderal Soedirman 
                        mendirikan GrowIn pada <span class="font-semibold text-emerald-700">10 September 2025</span>. 
                        GrowIn hadir sebagai solusi cerdas yang membantu pelaku usaha membangun strategi digital 
                        yang efektif dan berkelanjutan.
                    </p>
                </div>
            </div>

            {{-- Section 2: Tujuan & Filosofi --}}
            <div class="section-card p-8 mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-900">Tujuan & Filosofi</h2>
                </div>
                <div class="accent-border pl-6 ml-3">
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Filosofi nama <span class="font-semibold text-emerald-700">"GrowIn"</span> yang berarti 
                        "tumbuh di dalam (digital)" mencerminkan visi kami untuk mendorong pertumbuhan bisnis 
                        melalui strategi pemasaran cerdas dan berkelanjutan. GrowIn tidak hanya berorientasi 
                        pada hasil, tetapi juga memiliki misi sosial berupa peningkatan literasi digital bagi 
                        pelaku UMKM dan mahasiswa di Indonesia.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Dengan semangat kolaboratif, kami percaya bahwa setiap bisnis, sekecil apapun, dapat tumbuh 
                        besar jika memiliki strategi digital yang tepat. GrowIn berkomitmen menjadi mitra strategis 
                        yang membantu klien menciptakan citra digital yang kuat, menarik, dan berdampak nyata.
                    </p>
                </div>
            </div>

            {{-- Section 3: Tim --}}
            <div class="mb-12">
                <div class="text-center mb-10">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-2">Tim Kami</h2>
                    <div class="w-16 h-1 bg-emerald-500 mx-auto rounded-full"></div>
                    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                        Tim profesional GrowIn terdiri dari ahli di bidangnya masing-masing, 
                        siap membantu bisnis Anda berkembang di dunia digital.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    @foreach ([
                        ['name' => 'Annida Aiska Humairoh', 'role' => 'Founder & Digital Strategist', 'desc' => 'Bertanggung jawab dalam penyusunan strategi digital marketing dan menjalin komunikasi dengan klien.'],
                        ['name' => 'Farah Tsani Maulida', 'role' => 'Creative Director & Designer', 'desc' => 'Mengatur konsep visual, desain branding, dan memastikan konsistensi estetika konten GrowIn.'],
                        ['name' => 'Raia Digna Amanda', 'role' => 'Marketing Analyst & Content Manager', 'desc' => 'Menyusun strategi konten, mengelola copywriting, dan menganalisis performa kampanye digital.'],
                    ] as $member)
                        <div class="team-card section-card p-6 text-center">
                            <div class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">{{ $member['name'] }}</h3>
                            <p class="text-sm text-emerald-600 font-medium mb-3">{{ $member['role'] }}</p>
                            <p class="text-gray-700 text-sm leading-relaxed">{{ $member['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Section 4: Nilai & Komitmen --}}
            <div class="section-card p-8 mb-12">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-semibold text-gray-900">Nilai & Komitmen</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="value-item"><h3 class="font-semibold text-gray-900 mb-2">Inovatif</h3><p class="text-gray-700 text-sm">Menggunakan teknologi terbaru untuk menciptakan strategi pemasaran digital yang relevan.</p></div>
                    <div class="value-item"><h3 class="font-semibold text-gray-900 mb-2">Kolaboratif</h3><p class="text-gray-700 text-sm">Bekerja sama dengan klien sebagai mitra menuju tujuan bersama.</p></div>
                    <div class="value-item"><h3 class="font-semibold text-gray-900 mb-2">Profesional</h3><p class="text-gray-700 text-sm">Mengedepankan kualitas dan hasil terukur dalam setiap layanan.</p></div>
                    <div class="value-item"><h3 class="font-semibold text-gray-900 mb-2">Empowering</h3><p class="text-gray-700 text-sm">Meningkatkan literasi digital bagi UMKM dan mahasiswa di Indonesia.</p></div>
                </div>
            </div>
        </div>

    {{-- Custom Style --}}
    <style>
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); }
        .section-card { background: white; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03); border: 1px solid #f1f5f9; }
        .accent-border { border-left: 4px solid #10b981; }
        .team-card { transition: transform .3s ease, box-shadow .3s ease; }
        .team-card:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0,0,0,.08), 0 10px 10px -5px rgba(0,0,0,.02); }
        .value-item { position: relative; padding-left: 1.5rem; }
        .value-item::before { content: ""; position: absolute; left: 0; top: 0.75rem; width: 8px; height: 8px; border-radius: 50%; background-color: #10b981; }
    </style>
</x-app-layout>

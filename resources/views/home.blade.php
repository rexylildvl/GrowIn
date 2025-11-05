<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GrowIn - Digital Marketing Partner untuk UMKM & Startup</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #7209b7;
            --accent: #f72585;
            --success: #10b981;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --gradient: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            --gradient-light: linear-gradient(135deg, rgba(67, 97, 238, 0.1) 0%, rgba(114, 9, 183, 0.1) 100%);
        }
        
        body {
            font-family: 'Inter', 'Figtree', sans-serif;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .hero-section {
            background: var(--gradient-light);
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234361ee' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.1;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--gray);
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        .btn-primary {
            background: var(--gradient);
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(67, 97, 238, 0.4);
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 10px;
            border: 2px solid var(--primary);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-secondary:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }
        
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .service-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .service-card:hover::after {
            transform: scaleX(1);
        }
        
        .price-tag {
            background: var(--gradient);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.875rem;
            display: inline-block;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .section-subtitle {
            font-size: 1.125rem;
            color: var(--gray);
            text-align: center;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .benefit-list {
            list-style: none;
            padding: 0;
        }
        
        .benefit-list li {
            padding: 0.5rem 0;
            display: flex;
            align-items: flex-start;
        }
        
        .benefit-list li::before {
            content: '✓';
            color: var(--success);
            font-weight: bold;
            margin-right: 0.75rem;
            flex-shrink: 0;
        }
        
        .stats-section {
            background: var(--gradient);
            color: white;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        .stat-item {
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .cta-section {
            background: var(--gradient-light);
            padding: 5rem 0;
            text-align: center;
        }
        
        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--dark);
        }
        
        .cta-subtitle {
            font-size: 1.125rem;
            color: var(--gray);
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .cta-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Hero Section -->
        <section class="hero-section py-16 md:py-24">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="hero-content grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 class="hero-title">
                            GrowIn — Digital Marketing Partner untuk UMKM & Startup
                        </h1>
                        <p class="hero-subtitle">
                            GrowIn membantu UMKM, toko online, dan bisnis baru untuk tumbuh melalui strategi digital marketing berbasis data, desain kreatif, dan teknologi modern.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('order.create') }}" class="btn-primary">
                                Konsultasi & Pesan Layanan
                            </a>
                            <a href="{{ route('services.index') }}" class="btn-secondary">
                                Lihat Layanan
                            </a>
                        </div>
                    </div>
                    <div class="feature-card">
                        <h2 class="font-bold text-xl text-gray-800 mb-4">Mengapa Memilih GrowIn?</h2>
                        <ul class="benefit-list text-gray-600">
                            <li>Fokus pada UMKM dan bisnis lokal</li>
                            <li>Pendekatan berbasis data & analisis performa</li>
                            <li>Manajemen media sosial, iklan berbayar, SEO/SEM</li>
                            <li>Konsultasi & course pelatihan digital marketing</li>
                            <li>Tim ahli dengan pengalaman 5+ tahun</li>
                            <li>Laporan transparan dan terukur</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Klien Puas</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">85%</div>
                        <div class="stat-label">Peningkatan Traffic</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">3x</div>
                        <div class="stat-label">ROI Rata-rata</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Dukungan Klien</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Services -->
        <section class="py-16">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="section-title">Layanan Unggulan</h2>
                <p class="section-subtitle">
                    Solusi digital marketing komprehensif untuk membantu bisnis Anda tumbuh dan berkembang
                </p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    @forelse($featuredServices as $service)
                        <div class="service-card">
                            <h3 class="font-bold text-xl text-gray-900 mb-3">{{ $service->name }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ $service->short_description }}
                            </p>
                            @if($service->price_start)
                                <div class="price-tag mb-4">
                                    Mulai dari Rp {{ number_format($service->price_start, 0, ',', '.') }}
                                </div>
                            @endif
                            <a href="{{ route('services.show', $service->slug) }}" 
                               class="inline-flex items-center font-medium text-primary hover:text-primary-dark transition-colors">
                                Lihat detail 
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-8">
                            <p class="text-gray-500">Belum ada layanan yang ditandai sebagai unggulan.</p>
                        </div>
                    @endforelse
                </div>
                
                <div class="text-center mt-12">
                    <a href="{{ route('services.index') }}" class="btn-secondary">
                        Lihat Semua Layanan
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="cta-title">Siap Meningkatkan Bisnis Anda?</h2>
                <p class="cta-subtitle">
                    Mulai perjalanan digital marketing Anda bersama GrowIn dan rasakan pertumbuhan bisnis yang signifikan
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('order.create') }}" class="btn-primary">
                        Mulai Konsultasi Gratis
                    </a>
                    <a href="https://wa.me/6281234567890" target="_blank" class="btn-secondary">
                        Chat WhatsApp
                    </a>
                </div>
            </div>
        </section>

        @include('layouts.footer')
    </div>

    <script>
        // Simple animation for stats counter (optional)
        document.addEventListener('DOMContentLoaded', function() {
            const statNumbers = document.querySelectorAll('.stat-number');
            
            statNumbers.forEach(stat => {
                const target = parseInt(stat.textContent);
                let current = 0;
                const increment = target / 50;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    stat.textContent = Math.floor(current) + (stat.textContent.includes('%') ? '%' : 
                                      stat.textContent.includes('x') ? 'x' : '+');
                }, 50);
            });
        });
    </script>
</body>
</html>
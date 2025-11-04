<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            {{-- Hero Section --}}
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">
                        GrowIn — Digital Marketing Partner untuk UMKM & Startup
                    </h1>
                    <p class="text-gray-600 mb-6">
                        GrowIn membantu UMKM, toko online, dan bisnis baru untuk tumbuh
                        melalui strategi digital marketing berbasis data, desain kreatif,
                        dan teknologi modern.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('order.create') }}"
                           class="inline-flex items-center px-5 py-3 bg-emerald-600 text-white rounded-md text-sm font-medium hover:bg-emerald-700">
                            Konsultasi & Pesan Layanan
                        </a>
                        <a href="{{ route('services.index') }}"
                           class="inline-flex items-center px-5 py-3 border border-gray-300 text-gray-700 rounded-md text-sm font-medium hover:bg-gray-50">
                            Lihat Layanan
                        </a>
                    </div>
                </div>
                <div class="bg-emerald-50 rounded-xl p-6">
                    <h2 class="font-semibold text-gray-800 mb-4">Mengapa GrowIn?</h2>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Fokus pada UMKM dan bisnis lokal</li>
                        <li>• Pendekatan berbasis data & analisis performa</li>
                        <li>• Manajemen media sosial, iklan berbayar, SEO/SEM</li>
                        <li>• Konsultasi & course pelatihan digital marketing</li>
                    </ul>
                </div>
            </div>

            {{-- Featured Services --}}
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Layanan Unggulan</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    @forelse($featuredServices as $service)
                        <div class="border rounded-lg p-5 bg-white shadow-sm">
                            <h3 class="font-semibold text-gray-900 mb-2">{{ $service->name }}</h3>
                            <p class="text-sm text-gray-600 mb-3">
                                {{ $service->short_description }}
                            </p>
                            @if($service->price_start)
                                <p class="text-sm font-semibold text-emerald-700 mb-3">
                                    Mulai dari Rp {{ number_format($service->price_start, 0, ',', '.') }}
                                </p>
                            @endif
                            <a href="{{ route('services.show', $service->slug) }}"
                               class="text-sm text-emerald-600 hover:underline">
                                Lihat detail →
                            </a>
                        </div>
                    @empty
                        <p class="text-sm text-gray-500">Belum ada layanan yang ditandai sebagai unggulan.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-3xl font-bold mb-4 text-gray-900">Layanan GrowIn</h1>
            <p class="text-gray-600 mb-8">
                Pilih layanan digital marketing terbaik untuk mendukung pertumbuhan bisnismu.
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                @forelse($services as $service)
                    <div class="bg-white border rounded-lg shadow-sm p-6 hover:shadow-md transition">
                        <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $service->name }}</h2>
                        <p class="text-sm text-gray-600 mb-3">{{ $service->short_description }}</p>
                        @if($service->price_start)
                            <p class="text-sm font-medium text-emerald-700 mb-4">
                                Mulai dari Rp {{ number_format($service->price_start, 0, ',', '.') }}
                            </p>
                        @endif
                        <div class="flex justify-between items-center">
                            <a href="{{ route('services.show', $service->slug) }}"
                               class="text-sm text-gray-700 hover:text-emerald-700">Detail</a>
                            <a href="{{ route('order.create', $service->slug) }}"
                               class="text-sm bg-emerald-600 text-white px-3 py-1.5 rounded hover:bg-emerald-700">
                                Pesan
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-gray-500">Belum ada layanan yang tersedia.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

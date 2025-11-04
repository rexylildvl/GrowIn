<x-app-layout>
    <div class="py-10">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $service->name }}</h1>

            <p class="text-gray-600 mb-6">{{ $service->description ?? $service->short_description }}</p>

            @if($service->price_start)
                <p class="text-lg font-semibold text-emerald-700 mb-6">
                    Harga mulai dari Rp {{ number_format($service->price_start, 0, ',', '.') }}
                </p>
            @endif

            <a href="{{ route('order.create', $service->slug) }}"
               class="inline-flex items-center px-5 py-3 bg-emerald-600 text-white text-sm rounded-md hover:bg-emerald-700">
                Pesan Layanan Ini
            </a>

            <div class="mt-10">
                <a href="{{ route('services.index') }}" class="text-sm text-gray-600 hover:underline">← Kembali ke Layanan</a>
            </div>
        </div>
    </div>
</x-app-layout>

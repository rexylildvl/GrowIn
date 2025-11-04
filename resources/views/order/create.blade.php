<x-app-layout>
    <div class="py-10">
        <div class="max-w-3xl mx-auto px-4">
            <h1 class="text-2xl font-bold mb-4">Form Pemesanan Layanan GrowIn</h1>
            <p class="text-sm text-gray-600 mb-6">
                Isi form berikut untuk konsultasi dan pemesanan layanan digital marketing.
                Tim GrowIn akan menghubungi kamu maksimal H+1 hari kerja.
            </p>

            <form action="{{ route('order.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow">
                @csrf

                {{-- Layanan --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Layanan yang dibutuhkan</label>
                    <select name="service_id" class="w-full border-gray-300 rounded-md text-sm">
                        <option value="">-- Pilih Layanan --</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}"
                                @selected(old('service_id', optional($serviceSelected)->id) == $service->id)>
                                {{ $service->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('service_id')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Data Klien --}}
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" name="client_name" value="{{ old('client_name') }}"
                               class="w-full border-gray-300 rounded-md text-sm">
                        @error('client_name')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email', auth()->user()->email ?? '') }}"
                               class="w-full border-gray-300 rounded-md text-sm">
                        @error('email')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                               class="w-full border-gray-300 rounded-md text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Bisnis / Brand</label>
                        <input type="text" name="business_name" value="{{ old('business_name') }}"
                               class="w-full border-gray-300 rounded-md text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Usaha</label>
                    <input type="text" name="business_type" value="{{ old('business_type') }}"
                           placeholder="UMKM F&B, fashion, edukasi, dsb."
                           class="w-full border-gray-300 rounded-md text-sm">
                </div>

                {{-- Budget & Platform --}}
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Perkiraan Budget</label>
                        <input type="text" name="budget_range" value="{{ old('budget_range') }}"
                               placeholder="Misal: 1–3 juta / bulan"
                               class="w-full border-gray-300 rounded-md text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Platform Utama</label>
                        <input type="text" name="platform" value="{{ old('platform') }}"
                               placeholder="Instagram, TikTok, Website, dll"
                               class="w-full border-gray-300 rounded-md text-sm">
                    </div>
                </div>

                {{-- Goal --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tujuan Kampanye</label>
                    <textarea name="goal" rows="3"
                              class="w-full border-gray-300 rounded-md text-sm"
                              placeholder="Contoh: meningkatkan awareness brand, menambah leads, menaikkan penjualan, dll.">{{ old('goal') }}</textarea>
                    @error('goal')
                        <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Notes --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan (opsional)</label>
                    <textarea name="notes" rows="3"
                              class="w-full border-gray-300 rounded-md text-sm"
                              placeholder="Tulis link sosial media, contoh konten, atau kebutuhan khusus.">{{ old('notes') }}</textarea>
                </div>

                <div class="pt-4">
                    <button type="submit"
                            class="inline-flex items-center px-5 py-2 bg-emerald-600 text-white text-sm font-medium rounded-md hover:bg-emerald-700">
                        Kirim Permintaan Layanan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

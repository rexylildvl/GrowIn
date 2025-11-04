<x-app-layout>
    <div class="py-10">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-2xl font-bold mb-6">Daftar Pemesanan Layanan</h1>

            <div class="bg-white rounded-lg shadow overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left">Tanggal</th>
                            <th class="px-4 py-2 text-left">Klien</th>
                            <th class="px-4 py-2 text-left">Layanan</th>
                            <th class="px-4 py-2 text-left">Budget</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="border-t">
                                <td class="px-4 py-2">{{ $order->created_at->format('d M Y') }}</td>
                                <td class="px-4 py-2">
                                    <div class="font-medium">{{ $order->client_name }}</div>
                                    <div class="text-xs text-gray-500">{{ $order->email }}</div>
                                </td>
                                <td class="px-4 py-2">{{ $order->service->name }}</td>
                                <td class="px-4 py-2">{{ $order->budget_range }}</td>
                                <td class="px-4 py-2">
                                    <span class="inline-flex px-2 py-1 rounded text-xs
                                        @if($order->status === 'pending') bg-yellow-100 text-yellow-700
                                        @elseif($order->status === 'approved') bg-emerald-100 text-emerald-700
                                        @elseif($order->status === 'completed') bg-blue-100 text-blue-700
                                        @elseif($order->status === 'rejected') bg-red-100 text-red-700
                                        @else bg-gray-100 text-gray-700 @endif">
                                        {{ ucfirst(str_replace('_', ' ', $order->status)) }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 text-right">
                                    <a href="{{ route('admin.orders.show', $order) }}"
                                       class="text-xs text-emerald-600 hover:underline">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

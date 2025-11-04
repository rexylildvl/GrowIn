<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderAdminController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya admin yang bisa akses (opsional, bisa pakai Gate/policy juga)
        $this->middleware(function ($request, $next) {
            if (! Auth::user()->is_admin) {
                abort(403);
            }
            return $next($request);
        });
    }

    public function index()
    {
        $orders = Order::with('service')
            ->latest()
            ->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $order->load('service', 'user');
        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,in_review,approved,rejected,completed',
            'notes'  => 'nullable|string',
        ]);

        $order->update($request->only('status', 'notes'));

        return redirect()
            ->route('admin.orders.show', $order)
            ->with('status', 'Status pesanan berhasil diperbarui.');
    }
}


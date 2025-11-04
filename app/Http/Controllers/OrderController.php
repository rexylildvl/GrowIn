<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function create(?Service $service = null)
    {
        $services = Service::all();
        return view('order.create', [
            'serviceSelected' => $service,
            'services' => $services,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'service_id'     => 'required|exists:services,id',
            'client_name'    => 'required|string|max:255',
            'email'          => 'required|email',
            'phone'          => 'nullable|string|max:50',
            'business_name'  => 'nullable|string|max:255',
            'business_type'  => 'nullable|string|max:255',
            'budget_range'   => 'nullable|string|max:255',
            'platform'       => 'nullable|string|max:255',
            'goal'           => 'required|string',
            'notes'          => 'nullable|string',
        ]);

        if (Auth::check()) {
            $data['user_id'] = Auth::id();
        }

        Order::create($data);

        return redirect()
            ->route('home')
            ->with('status', 'Terima kasih! Permintaan layanan kamu sudah kami terima. Tim GrowIn akan segera menghubungi.');
    }
}


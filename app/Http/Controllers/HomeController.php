<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data layanan unggulan
        $featuredServices = Service::where('is_featured', true)->take(4)->get();

        // Kirim ke view
        return view('home', compact('featuredServices'));
    }

    public function services()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function serviceShow(Service $service)
    {
        return view('services.show', compact('service'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}


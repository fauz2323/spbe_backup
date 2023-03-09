<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kebijakan;
use App\Models\Layanan;
use App\Models\Manajemen;
use App\Models\Tatakelola;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function kebijakanView()
    {
        $data_kebijakan = Kebijakan::all();
        return view('layout.kebijakan', compact('data_kebijakan'));
    }

    public function tataKelolaView()
    {
        $tata_kelola = Tatakelola::all();
        return view('layout.tatakelola', compact('tata_kelola'));
    }

    public function managementView()
    {
        $data_management = Manajemen::all();
        return view('layout.manajemen', compact('data_management'));
    }

    public function visiMisiView()
    {
        $visiMisi = VisiMisi::first();
        return view('profil.visi', compact('visiMisi'));
    }

    public function homeView()
    {
        $layanan = Layanan::with('link')->get();
        return view('layout.index', compact('layanan'));
    }

    public function beritaView()
    {
        $berita = Berita::where('status', 'publish')->orderBy('created_at', 'desc')->get();
        return view('layout.berita', compact('berita'));
    }

    public function detailBeritaView($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        $recent = Berita::orderBy('created_at', 'desc')->take(5)->get();
        return view('detail.Dberita1', compact('berita', 'recent'));
    }
}

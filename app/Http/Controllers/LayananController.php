<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ramsey\Uuid\Uuid;

class LayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();

        return view('admin.layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'layanan' => 'required',
            'type' => 'required',
        ]);

        Layanan::create([
            'layanan' => $request->layanan,
            'type' => $request->type,
        ]);

        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = Layanan::find($id);

        return view('admin.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'layanan' => 'required',
            'type' => 'required',
        ]);

        $layanan = Layanan::find($id);
        $layanan->layanan = $request->layanan;
        $layanan->type = $request->type;
        $layanan->save();

        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();

        return redirect()->route('layanans.index')->with('success', 'Layanan berhasil dihapus');
    }
}

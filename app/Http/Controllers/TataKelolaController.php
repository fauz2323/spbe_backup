<?php

namespace App\Http\Controllers;

use App\Models\Tatakelola;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ramsey\Uuid\Uuid;


class TatakelolaController extends Controller
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
        $ar_tata = Tatakelola::all();

        return view('admin.tatakelola.index', compact('ar_tata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tatakelola.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'file' => 'required'
        ]);


        Tatakelola::create([
            'nama' => $request->nama,
            'file' => $request->file
        ]);

        return redirect()->route('tatakelolas.index')
            ->with('success', 'Data Tata Kelola Berhasil Disimpan');
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
        $data = Tatakelola::find($id);
        return view('admin.tatakelola.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'file' => 'required'
        ]);

        $ar_tata = Tatakelola::find($id);
        $ar_tata->nama = $request->nama;
        $ar_tata->file = $request->file;
        $ar_tata->save();

        return redirect()->route('tatakelolas.index')
            ->with('success', 'Data Tata Kelola Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ar_tata = Tatakelola::find($id);
        $ar_tata->delete();
        return redirect()->route('tatakelolas.index');
    }
}

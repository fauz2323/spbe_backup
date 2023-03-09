<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\LayananLink;
use Illuminate\Http\Request;

class LinkLayananController extends Controller
{
    //construct auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    //index
    public function index()
    {
        $link_layanan = LayananLink::with('layanan')->get();
        return view('admin.link_layanan.index', compact('link_layanan'));
    }

    //create
    public function create()
    {
        $layanans = Layanan::all();
        return view('admin.link_layanan.create', compact('layanans'));
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'link' => 'required',
            'layanan_id' => 'required',
        ]);

        $layanan = Layanan::find($request->layanan_id);

        LayananLink::create([
            'layanan_id' => $layanan->id,
            'name' => $request->nama,
            'link' => $request->link,
        ]);

        return redirect()->route('link-layanan.index')->with('success', 'Link Layanan berhasil ditambahkan');
    }

    //edit
    public function edit($id)
    {
        $link = LayananLink::find($id);
        $layanans = Layanan::all();
        return view('admin.link_layanan.edit', compact('link', 'layanans'));
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'link' => 'required',
            'layanan_id' => 'required',
        ]);

        $layanan = Layanan::find($request->layanan_id);

        LayananLink::where('id', $id)->update([
            'layanan_id' => $layanan->id,
            'name' => $request->nama,
            'link' => $request->link,
        ]);

        return redirect()->route('link-layanan.index')->with('success', 'Link Layanan berhasil diubah');
    }

    //destroy
    public function destroy($id)
    {
        LayananLink::destroy($id);
        return redirect()->route('link-layanan.index')->with('success', 'Link Layanan berhasil dihapus');
    }
}

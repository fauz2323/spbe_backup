<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class BeritaController extends Controller
{
    //constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    //index
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', compact('berita'));
    }

    //create
    public function create()
    {
        return view('admin.berita.create');
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'file' => 'required',
            'penulis' => 'required',
        ]);

        $fileName = Uuid::uuid4() . '.' . $request->file('file')->extension();
        $request->file('file')->move(public_path('storage/layanan'), $fileName);

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->slug = Str::slug($request->judul, '-');
        $berita->isi = $request->isi;
        $berita->gambar = $fileName;
        $berita->penulis = $request->penulis;
        $berita->date = date('Y-m-d H:i:s');
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    //edit
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
        ]);

        $berita = Berita::find($id);
        $berita->judul = $request->judul;
        $berita->slug = Str::slug($request->judul, '-');
        $berita->isi = $request->isi;
        $berita->penulis = $request->penulis;
        $berita->date = date('Y-m-d H:i:s');
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diubah');
    }

    //destroy
    public function destroy($id)
    {
        //destroy berita
        $berita = Berita::find($id);
        $berita->delete();

        return redirect()->back();
    }

    public function publish($id)
    {
        $berita = Berita::find($id);
        if ($berita->status == 'publish') {
            $berita->status = 'non-publish';
            $berita->save();
        } else {
            $berita->status = 'publish';
            $berita->save();
        }

        return redirect()->back();
    }
}

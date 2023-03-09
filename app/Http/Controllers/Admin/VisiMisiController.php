<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $visimisi = VisiMisi::first();
        return view('admin.visimisi.index', compact('visimisi'));
    }

    public function editView()
    {
        $data = VisiMisi::first();
        return view('admin.visimisi.edit', compact('data'));
    }

    public function edit(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $data = VisiMisi::first();
        $data->update($request->all());

        return redirect()->route('visimisis.index')->with('success', 'Data Visi Misi Berhasil Diubah');
    }
}

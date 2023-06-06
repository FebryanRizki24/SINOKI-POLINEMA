<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\programkerja;

class ProgramkerjaController extends Controller
{
    // ...

    public function store(Request $request)
    {
        $request->validate([
            'namaproker' => 'required',
            'bidang' => 'required',
            'tempat' => 'required',
            'tanggalproker' => 'required',
        ]);

        ProgramKerja::create($request->all());

        return redirect()->route('home_admin')->withStatus(__('Data program kerja berhasil ditambahkan.'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namaproker' => 'required',
            'bidang' => 'required',
            'tempat' => 'required',
            'tanggalproker' => 'required',
        ]);

        $programkerja = ProgramKerja::findOrFail($id);
        $programkerja->namaproker = $request->namaproker;
        $programkerja->bidang = $request->bidang;
        $programkerja->tempat = $request->tempat;
        $programkerja->tanggalproker = $request->tanggalproker;
        $programkerja->save();

        return back()->withStatus(__('Data program kerja berhasil diubah.'));
    }

    public function index()
    {
        $programkerjas = ProgramKerja::all();

        return view('programkerja.index', compact('programkerjas'));
    }

    public function destroy(ProgramKerja $programkerja)
    {
        $programkerja->delete();

        return back()->withStatus(__('Data program kerja berhasil dihapus.'));
    }

    // ...
}
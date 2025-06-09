<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelians = Pembelian::all();

        return view('petugas.pembelian.index', compact('pembelians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.pembelian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_hewan' => "required",
            'spesies' => "required",
            'habitat' => "required",
            'tanggal_lahir' => "required",
        ]);

        $pembelian = new Pembelian();
        $pembelian->nama_hewan = $validated['nama_hewan'];
        $pembelian->spesies = $validated['spesies'];
        $pembelian->habitat = $validated['habitat'];
        $pembelian->tanggal_lahir = $validated['tanggal_lahir'];
        $pembelian->save();

        Alert::success("Berhasil membuat data pembelian!");

        return redirect()->route('petugas.pembelian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembelian = Pembelian::where('order_id', $id)->first();

        return view('petugas.pembelian.show', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembelian = Pembelian::find($id);

        return view('petugas.pembelian.edit', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_hewan' => "required",
            'spesies' => "required",
            'habitat' => "required",
            'tanggal_lahir' => "required",
        ]);

        $pembelian = Pembelian::find($id);
        $pembelian->nama_hewan = $validated['nama_hewan'];
        $pembelian->spesies = $validated['spesies'];
        $pembelian->habitat = $validated['habitat'];
        $pembelian->tanggal_lahir = $validated['tanggal_lahir'];
        $pembelian->save();

        Alert::success("Berhasil merubah data pembelian!");

        return redirect()->route('petugas.pembelian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pembelian::find($id)->delete();

        Alert::success('Berhasil menghapus pembelian!');

        return redirect()->route('petugas.pembelian.index');
    }
}

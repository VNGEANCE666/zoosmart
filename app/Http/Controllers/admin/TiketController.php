<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tiket;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tikets = Tiket::all();

        return view('petugas.tiket.index', compact('tikets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.tiket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'harga' => "required",
            'tanggal_kunjungan' => "required",
            'jumlah_orang' => "required",
        ]);

        $tiket = new Tiket();
        $tiket->harga = intval($validated['harga']);
        $tiket->tanggal_kunjungan = $validated['tanggal_kunjungan'];
        $tiket->jumlah_orang = intval($validated['jumlah_orang']);
        $tiket->save();

        Alert::success("Berhasil membuat data tiket!");

        return redirect()->route('petugas.tiket.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tiket = Tiket::find($id);

        return view('petugas.tiket.show', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tiket = Tiket::find($id);

        return view('petugas.tiket.edit', compact('tiket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'harga' => "required",
            'tanggal_kunjungan' => "required",
            'jumlah_orang' => "required",
        ]);

        $tiket = Tiket::find($id);
        $tiket->harga = intval($validated['harga']);
        $tiket->tanggal_kunjungan = $validated['tanggal_kunjungan'];
        $tiket->jumlah_orang = intval($validated['jumlah_orang']);
        $tiket->save();

        Alert::success("Berhasil merubah data tiket!");

        return redirect()->route('petugas.tiket.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tiket::find($id)->delete();

        Alert::success('Berhasil menghapus tiket!');

        return redirect()->route('petugas.tiket.index');
    }
}

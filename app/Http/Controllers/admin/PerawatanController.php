<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Hewan;
use App\Models\Perawatan;
use App\Models\Petugas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PerawatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perawatans = Perawatan::all();

        return view('petugas.perawatan.index', compact('perawatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hewans = Hewan::all();
        $petugas = Petugas::all();

        return view('petugas.perawatan.create', compact('hewans', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_petugas' => "required",
            'id_hewan' => "required",
            'jenis_perawatan' => "required",
            'jadwal_perawatan' => "required",
        ]);

        $perawatan = new Perawatan();
        $perawatan->id_petugas = $validated['id_petugas'];
        $perawatan->id_hewan = $validated['id_hewan'];
        $perawatan->jenis_perawatan = $validated['jenis_perawatan'];
        $perawatan->jadwal_perawatan = $validated['jadwal_perawatan'];
        $perawatan->save();

        Alert::success("Berhasil membuat data perawatan!");

        return redirect()->route('petugas.perawatan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $perawatan = Perawatan::find($id);

        $hewans = Hewan::all();
        $petugas = Petugas::all();

        return view('petugas.perawatan.show', compact('perawatan', 'hewans', 'petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perawatan = Perawatan::find($id);

        $hewans = Hewan::all();
        $petugas = Petugas::all();

        return view('petugas.perawatan.edit', compact('perawatan', 'hewans', 'petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'id_petugas' => "required",
            'id_hewan' => "required",
            'jenis_perawatan' => "required",
            'jadwal_perawatan' => "required",
        ]);

        $perawatan = Perawatan::find($id);
        $perawatan->id_petugas = $validated['id_petugas'];
        $perawatan->id_hewan = $validated['id_hewan'];
        $perawatan->jenis_perawatan = $validated['jenis_perawatan'];
        $perawatan->jadwal_perawatan = $validated['jadwal_perawatan'];
        $perawatan->save();

        Alert::success("Berhasil merubah data perawatan!");

        return redirect()->route('petugas.perawatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Perawatan::find($id)->delete();

        Alert::success('Berhasil menghapus perawatan!');

        return redirect()->route('petugas.perawatan.index');
    }
}

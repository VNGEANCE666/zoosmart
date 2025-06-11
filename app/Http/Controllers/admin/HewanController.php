<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Hewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hewans = Hewan::all();

        return view('petugas.hewan.index', compact('hewans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.hewan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambar_hewan' => "required",
            'nama_hewan' => "required",
            'spesies' => "required",
            'habitat' => "required",
            'tanggal_lahir' => "required",
        ]);

        $file = $request->file('gambar_hewan');
        $uuidName = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads', $uuidName, 'public');
        $path = '/uploads/' . $uuidName;

        $hewan = new Hewan();
        $hewan->gambar_hewan = $path;
        $hewan->nama_hewan = $validated['nama_hewan'];
        $hewan->spesies = $validated['spesies'];
        $hewan->habitat = $validated['habitat'];
        $hewan->tanggal_lahir = $validated['tanggal_lahir'];
        $hewan->save();

        Alert::success("Berhasil membuat data hewan!");

        return redirect()->route('petugas.hewan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hewan = Hewan::find($id);

        return view('petugas.hewan.show', compact('hewan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hewan = Hewan::find($id);

        return view('petugas.hewan.edit', compact('hewan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'gambar_hewan' => 'nullable',
            'nama_hewan' => "required",
            'spesies' => "required",
            'habitat' => "required",
            'tanggal_lahir' => "required",
        ]);
        $hewan = Hewan::find($id);

         if ($request->hasFile('gambar_hewan')) {
            $file = $request->file('gambar_hewan');
            $uuidName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads', $uuidName, 'public');
            $path = '/uploads/' . $uuidName;

            $hewan->gambar_hewan = $path;
        }

        $hewan->nama_hewan = $validated['nama_hewan'];
        $hewan->spesies = $validated['spesies'];
        $hewan->habitat = $validated['habitat'];
        $hewan->tanggal_lahir = $validated['tanggal_lahir'];
        $hewan->save();

        Alert::success("Berhasil merubah data hewan!");

        return redirect()->route('petugas.hewan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hewan::find($id)->delete();

        Alert::success('Berhasil menghapus hewan!');

        return redirect()->route('petugas.hewan.index');
    }
}

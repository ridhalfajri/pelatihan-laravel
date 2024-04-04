<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliah = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi',
        ]);

        //Save data to db
        $mata_kuliah = new MataKuliah();
        $mata_kuliah->nama = $request->nama;
        $mata_kuliah->jurusan = $request->jurusan;
        try {
            $mata_kuliah->save();
            return redirect()->route('mata-kuliah.index')->with('sukses', 'Data berhasil disimpan');
        } catch (\Throwable $th) {
            Log::error('Terjadi kesalahan pada koneksi database');
            return redirect()->route('mata-kuliah.index')->with('gagal', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MataKuliah $mata_kuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $mata_kuliah)
    {
        return view('matakuliah.edit', compact('mata_kuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataKuliah $mata_kuliah)
    {
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi',
        ]);

        //Save data to db
        $mata_kuliah->nama = $request->nama;
        $mata_kuliah->jurusan = $request->jurusan;
        try {
            $mata_kuliah->save();
            return redirect()->route('mata-kuliah.index')->with('sukses', 'Data berhasil diubah');
        } catch (\Throwable $th) {
            Log::error('Terjadi kesalahan pada koneksi database');
            return redirect()->route('mata-kuliah.index')->with('gagal', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MataKuliah $mata_kuliah)
    {
        try {
            $mata_kuliah->delete();
            return redirect()->route('mata-kuliah.index')->with('sukses', 'Data berhasil dihapus');
        } catch (\Throwable $th) {
            Log::error('Terjadi kesalahan pada koneksi database');
            return redirect()->route('mata-kuliah.index')->with('gagal', 'Data gagal dihapus');
        }
    }
}

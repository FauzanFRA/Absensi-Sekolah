<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.data-kelas');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crud_data_kelas.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $validated_data = $request->validate([
            'id' => 'required|unique:kelass,nip',
            'nama_kelas' => 'required',
            'nama_walikelas' => 'required',

        ], [

            'nama_kelas.required' => 'Nama kelas Tidak Boleh Kosong!',
            'nama_wali kelas.required' => 'nama wali kelas Tidak Boleh Kosong!',
        ]);

        Kelas::create($validated_data);
        return redirect()->route('data-kelas.index')->with(['berhasil' => 'Tambah Data Kelas Berhasil']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        // Cari satu instance Guru berdasarkan id
    $kelas = Kelas::findOrFail('$id');

    // Validasi data yang diterima dari request
    $validated_data = $request->validate([
        'id' => 'required',
        'nama_Kelas' => 'required',
        'nama Wali Kelas' => 'required',
    ], [
        'nama_kelas.required' => 'Nama Kelas Tidak Boleh Kosong!',
        'Nama_WaliKelas.required' => 'Nama Walikelas Tidak Boleh Kosong!',
        'jenis_kelamin.in' => 'Jenis Kelamin Tidak Valid!',
        'telepon.required' => 'Nomor Telepon Tidak Boleh Kosong!',
    ]);

    // Update data guru dengan data yang telah divalidasi
    $kelas->update($validated_data);

    return redirect()->route('data-kelas.index')->with(['berhasil' => 'Edit Data kelas Berhasil!']);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}

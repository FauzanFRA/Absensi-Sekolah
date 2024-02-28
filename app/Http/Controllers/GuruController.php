<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.data-guru', [
            'guru' => Guru::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crud_data_guru.tambah');
    }

    /**zz
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated_data = $request->validate([
            'nip' => 'required|unique:gurus,nip',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'telepon' => 'required',
        ], [
            'nip.required' => 'NIP Tidak Boleh Kosong!',
            // 'nip.unique' => 'NIP yang Anda Masukkan Telah Ada!',
            'nama_lengkap.required' => 'Nama Lengkap Tidak Boleh Kosong!',
            'jenis_kelamin.required' => 'Jenis Kelamin Tidak Boleh Kosong!',
            'telepon.required' => 'Nomor Telepon Tidak Boleh Kosong!'
        ]);

        Guru::create($validated_data);
        return redirect()->route('data-guru.index')->with(['berhasil' => 'Tambah Data Guru Berhasil']);
    }
    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.crud_data_guru.edit',[
            'guru' => Guru::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    // Cari satu instance Guru berdasarkan id
    $guru = Guru::findOrFail($id);

    // Validasi data yang diterima dari request
    $validated_data = $request->validate([
        'nip' => 'required',
        'nama_lengkap' => 'required',
        'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        'telepon' => 'required',
    ], [
        'nip.required' => 'NIP Tidak Boleh Kosong!',
        'nip.unique' => 'NIP yang Anda Masukkan Telah Ada!',
        'nama_lengkap.required' => 'Nama Lengkap Tidak Boleh Kosong!',
        'jenis_kelamin.required' => 'Jenis Kelamin Tidak Boleh Kosong!',
        'jenis_kelamin.in' => 'Jenis Kelamin Tidak Valid!',
        'telepon.required' => 'Nomor Telepon Tidak Boleh Kosong!',
    ]);

    // Update data guru dengan data yang telah divalidasi
    $guru->update($validated_data);

    return redirect()->route('data-guru.index')->with(['berhasil' => 'Edit Data Guru Berhasil!']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guru = Guru::findOrfail($id);

        $guru->delete();

        return redirect()->route('data-guru.index')->with(['berhasil'=> 'Hapus Data Guru Berhasil:']);
    }
}

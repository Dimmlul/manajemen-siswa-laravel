<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|unique:siswa,nisn',
            'kelas' => 'required|string|max:20',
            'jurusan' => 'required|string|max:50',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:siswa,email',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|unique:siswa,nisn,' . $siswa->id,
            'kelas' => 'required|string|max:20',
            'jurusan' => 'required|string|max:50',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:siswa,email,' . $siswa->id,
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus');
    }
}

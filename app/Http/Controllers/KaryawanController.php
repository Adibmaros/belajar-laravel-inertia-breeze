<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $karyawans = Karyawan::query()
        // Logika Pencarian
        ->when($request->search, function ($query, $search) {
            $query->where('nama', 'like', "%{$search}%")
                  ->orWhere('nip', 'like', "%{$search}%")
                  ->orWhere('jabatan', 'like', "%{$search}%");
        })
        ->when($request->status, function ($query, $status) {
            $query->where('status', $status);
        })
        ->latest()
        ->paginate(10)
        ->withQueryString(); // Penting: Agar parameter 'search' tetap ada saat pindah halaman (pagination)

    return Inertia::render('Karyawan/Index', [
        'karyawans' => $karyawans,
        'filters' => $request->only(['search', 'status']) // Kirim balik kata kunci ke Vue
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Karyawan/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:karyawans,nip',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email',
            'no_hp' => 'nullable|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'jabatan' => 'required|string|max:100',
            'gaji' => 'required|numeric|min:0',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|in:Aktif,Cuti,Resign',
        ]);

        Karyawan::create($validated);

        return redirect()->route('karyawans.index')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return Inertia::render('Karyawan/Show', [
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        return Inertia::render('Karyawan/Edit',[
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:karyawans,nip,' . $karyawan->id,
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,' . $karyawan->id,
            'no_hp' => 'nullable|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable|string',
            'jabatan' => 'required|string',
            'gaji' => 'required|numeric',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|in:Aktif,Cuti,Resign'
        ]);

        $karyawan->update($validated);

        return redirect()->route('karyawans.index')
            ->with('success', 'Karyawan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawans.index')
            ->with('success', 'Karyawan berhasil dihapus!');
    }
}

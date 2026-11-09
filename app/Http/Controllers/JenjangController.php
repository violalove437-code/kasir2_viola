<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenjang;

class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         $jenjangs = Jenjang::query()
            ->when($request->search, function ($query, $search) {
                $query->where('nama_jenjang', 'like', "%{$search}%")
                      ->orWhere('keterangan', 'like', "%{$search}%");
            })
            ->paginate(10);
        return view('jenjang.index', compact('jenjangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenjang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'nama_jenjang'  => 'required|string|max:10',
            'keterangan'    => 'nullable|string|max:100',
         ]);
           // Simpan data langsung (tanpa perlu definisikan satu-satu)
        Jenjang::create($data);

        return redirect()->route('jenjang.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

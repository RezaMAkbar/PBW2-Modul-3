<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Collection;
use Illuminate\View\View;

class CollectionsController extends Controller
{
    /**
     * <!-- Reza M. Akbar 6706223125 4604 -->
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $collections = Collection::all();
        return view('koleksi.daftarKoleksi', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('koleksi.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     * @return \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'namaKoleksi' => ['required', 'string', 'max:100'],
            'jenisKoleksi' => ['required', 'integer'],
            'jumlahKoleksi' => ['required', 'integer'],
        ]);

        $koleksi = new Collection();
        $koleksi->namaKoleksi = $validated['namaKoleksi'];
        $koleksi->jenisKoleksi = $validated['jenisKoleksi'];
        $koleksi->jumlahKoleksi = $validated['jumlahKoleksi'];

        $koleksi->save();
        return redirect('/koleksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        //
        return view('koleksi.infoKoleksi', compact('collection'));
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

<?php
namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = pengguna::all();
        return view('pengguna.index', compact('pengguna'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengguna       = new pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('pengguna.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $pengguna = pengguna::findOrFail($id);
        return view('pengguna.show', compact('pengguna'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = pengguna::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pengguna       =   pengguna::findOrFail($id);
        $pengguna->nama = $request->nama;
        $pengguna->save();

        session()->flash('success', 'Data berhasil diUbah');

        return redirect()->route('pengguna.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $pengguna = pengguna::findOrFail($id);

        $pengguna->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('pengguna.index');

    }
}

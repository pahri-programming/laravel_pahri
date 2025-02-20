<?php
namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\Telepon;
use Illuminate\Http\Request;

class TeleponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telepon = Telepon::all();
        return view('telepon.index', compact('telepon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengguna = pengguna::all();
        return view('telepon.create', compact('pengguna'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $telepon              = new telepon;
        $telepon->nomor       = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;

        $telepon->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('telepon.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $telepon = Telepon::findOrFail($id);
        return view('telepon.show', compact('telepon'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $telepon  = Telepon::findOrfail($id);
        $pengguna = pengguna::all();
        return view('telepon.edit', compact('telepon', 'pengguna'));
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
        $telepon              = Telepon::findOrfail($id);
        $telepon->nomor       = $request->nomor;
        $telepon->id_pengguna = $request->id_pengguna;
        $telepon->save();

        session()->flash('success', 'Data berhasil di Edit');

        return redirect()->route('telepon.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $telepon = telepon::findOrFail($id);

        $telepon->delete();
        session()->flash('success', 'Data berhasil dihapus');
        return redirect()->route('telepon.index');

    }
}

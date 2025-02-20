<?php
namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data berdasarkan tanggal yang paling akhir
        //melalui model Pendaftaran
        $pendaftaran = Pendaftaran::latest()->get();
        return view('pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran                = new Pendaftaran();
        $pendaftaran->nik           = $request->nik;
        $pendaftaran->nama_lengkap  = $request->nama_lengkap;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->agama         = $request->agama;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->asal_sekolah  = $request->asal_sekolah;
        $pendaftaran->alamat        = $request->alamat;
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.show', compact('pendaftaran'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('pendaftaran'));
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
        $pendaftaran                = Pendaftaran::findOrFail();
        $pendaftaran->nik           = $request->nik;
        $pendaftaran->nama_lengkap  = $request->nama_lengkap;
        $pendaftaran->tanggal_lahir = $request->tanggal_lahir;
        $pendaftaran->agama         = $request->agama;
        $pendaftaran->jenis_kelamin = $request->jenis_kelamin;
        $pendaftaran->asal_sekolah  = $request->asal_sekolah;
        $pendaftaran->alamat        = $request->alamat;
        $pendaftaran->save();
        return redirect()->route('pendaftaran.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $pendaftaran = Pendaftaran::findOrFall($id);
        $pendaftaran->delete();
        return redirect()->route('pendaftaran.index');
    }
}

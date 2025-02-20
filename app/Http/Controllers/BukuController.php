<?php
namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.index', compact('buku'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nama_buku'      => 'required|unique:bukus',
        //     'genre'          => 'required',
        //     'harga'          => 'required|numeric',
        //     'stok'           => 'required|numeric',
        //     'penerbit'       => 'required',
        //     'tanggal_terbit' => 'required',
        //     'photo'          => 'required|mimes:jpg,png|max:1024',
        // ]);

        $buku                 = new Buku();
        $buku->nama_buku      = $request->nama_buku;
        $buku->genre          = $request->genre;
        $buku->harga          = $request->harga;
        $buku->stok           = $request->stok;
        $buku->penerbit       = $request->penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->photo          = $request->photo;

        if ($request->hasFile('photo')) {
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/buku', $name);
            $buku->photo = $name;
        }

        $buku->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('buku.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));

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
        // $validated = $request->validate([
        //     'nama_buku'      => 'required',
        //     'genre'          => 'required',
        //     'harga'          => 'required|numeric',
        //     'stok'           => 'required|numeric',
        //     'penerbit'       => 'required',
        //     'tanggal_terbit' => 'required',
        //     'photo'          => 'nullable|mimes:jpg,png|max:1024',
        // ]);

        $buku                 = Buku::findOrFail($id);
        $buku->nama_buku      = $request->nama_buku;
        $buku->genre          = $request->genre;
        $buku->harga          = $request->harga;
        $buku->stok           = $request->stok;
        $buku->penerbit       = $request->penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;

        if ($request->hasFile('photo')) {
            $buku->deleteImage();
            $img  = $request->file('photo');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/buku', $name);
            $buku->photo = $name;
        }

        $buku->save();

        session()->flash('success', 'Data berhasil ditambahkan');

        return redirect()->route('buku.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

      
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'data berhasil dihapus');
    }
}

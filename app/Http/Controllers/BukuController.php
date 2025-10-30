<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pelanggan;
class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 public function index(){
		$data['dataBuku'] = Buku::all();
		return view('admin.buku.index',$data);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       	return view('admin.buku.create'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

		//dd($request->all());

		 $data['judul_buku'] = $request->judul_buku;
		 $data['penulis'] = $request->penulis;
		 $data['penerbit'] = $request->penerbit;
		 $data['tahun_terbit'] = $request->tahun_terbit;
		 $data['jumlah_eksemplar'] = $request->jumlah_eksemplar;



        buku::create($data);

		 return redirect()->route('buku.index')->with('success','Penambahan Data Berhasil!');
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
$dataBuku = Buku::findOrFail($id);
 return view('admin.buku.edit', compact('dataBuku'));}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $buku_id = $id;
    $buku = buku::findOrFail($buku_id);

    $buku->judul_buku = $request->judul_buku;
    $buku->penulis = $request->penulis;
    $buku->penerbit = $request->penerbit;
    $buku->tahun_terbit = $request->tahun_terbit;
    $buku->jumlah_eksemplar = $request->jumlah_eksemplar;


     $buku = buku::findOrFail($id);
    $buku->update($request->all());
    return redirect()->route('buku.index')->with('success', 'Perubahan Data Berhasil!');
}



    public function destroy(string $id)
    {
        $buku= buku:: findOrFail($id);
        $buku-> delete();
         return redirect()->route('buku.index')->with('success', 'Penghapusan Data Berhasil!');

    }
}

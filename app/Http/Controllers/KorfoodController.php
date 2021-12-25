<?php

namespace App\Http\Controllers;

use App\Models\Korfood;
use Illuminate\Http\Request;

class KorfoodController extends Controller
{
    /**
     * fungsi index untuk menampilkan semua data korfood
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Korfood::all();
    }

    /**
     * fungsi create untuk menambahkan korfood baru 
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $korfood = new Korfood();
        $korfood->nama = $request->nama;
        $korfood->harga = $request->harga;
        $korfood->save();

        return "Data Korfood berhasil ditambahkan";
    }

    /**
     * Fungsi update untuk merubah data korfood
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Korfood  $korfood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $harga = $request->harga;

        $korfood = Korfood::find($id);
        $korfood->nama = $nama;
        $korfood->harga = $harga;
        $korfood->save();

        return "Data korfood berhasil diubah";
    }

    /**
     * Fungsi untuk menghapus data korfood
     *
     * @param  \App\Models\Korfood  $korfood
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $korfood = Korfood::find($id);
        $korfood->delete();

        return "Data korfood berhasil dihapus";
    }
}

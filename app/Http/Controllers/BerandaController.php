<?php

namespace App\Http\Controllers;

use App\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Beranda';
        $beranda=Beranda::paginate(3);
        return view('admin.beranda', compact('title','beranda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $title='Input Penjualan';
        return view('admin.inputpenjual',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=[
            'required'  => 'Kolom:atribute harus lengkap',
            'date'      => 'Kolom:atribute harus Lengkap',
            'numeric'   => 'Kolom:atribute harus Lengkap',
        ];
        $validasi=$request->validate([
            'id_penjual'        => 'required',
            'nama_penjual'      => '',
            'alamat_penjual'    => '',
            'no_hp'             => '',
        ],$messages);
        $komoditas=
        Beranda::create($validasi);
        return redirect('beranda')->with('succses','Data berhasil diupdate');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='Input penjual';
        Beranda::find($id);
        return view('admin.inputpenjual', compact('title'),('beranda'));
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
        $messages=[
            'required'  => 'Kolom:atribute harus lengkap',
            'date'      => 'Kolom:atribute harus Lengkap',
            'numeric'   => 'Kolom:atribute harus Lengkap',
        ];
        $validasi=$request->validate([
            'id_penjual'        => 'required',
            'nama_penjual'      => '',
            'alamat_penjual'    => '',
            'no_hp'             => '',
        ],$messages);
        $komoditas=
        Beranda::whereid_penjual($id)->update($validasi);
        return redirect('beranda')->with('succses','Data berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Beranda::whereid_penjual($id)->delete();
        return redirect('beranda')->with('succses','Data berhasil dihapus');
    }
}

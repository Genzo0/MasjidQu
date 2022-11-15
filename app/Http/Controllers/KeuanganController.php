<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;
use Auth;


class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listKeuangan = Keuangan::get();
        return view('keuangan.daftar_keuangan', ['listKeuangan' => $listKeuangan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keuangan.form_buat_keuangan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pemasukkan' => ['required','numeric','min:0'],
            'pengeluaran' => ['required','numeric','min:0'],
            'keterangan' => 'required',
            'tanggal' => 'required'
        ]);

        $keuangan = new Keuangan;

        $keuangan->pengeluaran = intval($request->pengeluaran);
        $keuangan->pemasukkan = intval($request->pemasukkan);

        $saldo = intval($request->pemasukkan)-intval($request->pengeluaran);

        $keuangan->saldo = $saldo        ;
        $keuangan->keterangan = $request->keterangan;
        $keuangan->tanggal = $request->tanggal;
        $keuangan->id_masjid= Auth::user()->id;

        $keuangan->save();

        return redirect('/keuangan');

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
        $keuangan = Keuangan::find($id);
        return view('keuangan.form_edit_keuangan', ['keuangan' => $keuangan]);
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
        $request->validate([
            'pemasukkan' => ['required','numeric','min:0'],
            'pengeluaran' => ['required','numeric','min:0'],
            'keterangan' => 'required',
            'tanggal' => 'required'
        ]);

        $keuangan = Keuangan::find($id);

        $keuangan->pemasukkan = $request->pemasukkan;
        $keuangan->pengeluaran = $request->pengeluaran;
        $keuangan->keterangan= $request->keterangan;
        $keuangan->tanggal = $request->tanggal;

        $saldo = intval($request->pemasukkan)-intval($request->pengeluaran);

        $keuangan->saldo = $saldo  ;

        $keuangan->save();

        return redirect('/keuangan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();

        return redirect('/keuangan');
    }
}

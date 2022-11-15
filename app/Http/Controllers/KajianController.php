<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kajian;
use App\Models\Masjid;
use Auth;
use Illuminate\Support\Facades\DB;

class KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        
        if ($request->has('search')){
            $kataKunci;
            $kataKunci = strtolower($request->search);
            $first = Kajian::whereHas('masjid', function($q) use($kataKunci) {
                $q->where('nama', 'like', '%' . $kataKunci . '%');
            })->get();
            $second = Kajian::where('judul_kajian', 'like',  '%' . $kataKunci . '%')->get();
            $merge = $first->merge($second);
            $third = Kajian::where('nama_ustaz', 'like', '%' . $kataKunci . '%')->get();
            $listKajian = $merge->merge($third);
        } else {
            $listKajian = Kajian::get();
        }

        return view('kajian.daftar_kajian', ['listKajian' => $listKajian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kajian.form_buat_kajian');
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
            'judul_kajian' => 'required',
            'nama_ustaz' => 'required',
            'tanggal' => 'required',
        ]);

        $kajian = new Kajian;

        $kajian->judul_kajian = $request->judul_kajian;
        $kajian->nama_ustaz = $request->nama_ustaz;

        $datetime = $request->tanggal;
        $format = explode("T", $datetime);
    
        setlocale(LC_ALL, 'id_ID.utf8'); 
        $hari = strftime('%A',strtotime($format[0]));
        $tanggal = $format[0];
        $waktu = $format[1];

        $kajian->hari = $hari;
        $kajian->tanggal =$tanggal;
        $kajian->waktu = $waktu;
        $kajian->id_masjid = Auth::user()->id;

        $kajian->save();

        return redirect('masjid/'.Auth::user()->id);
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
        $kajian = Kajian::find($id);
        return view('kajian.form_edit_kajian', ['kajian'=>$kajian]);
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
            'judul_kajian' => 'required',
            'nama_ustaz' => 'required',
            'tanggal' => 'required',
        ]);

        $kajian = Kajian::find($id);

        $kajian->judul_kajian = $request->judul_kajian;
        $kajian->nama_ustaz = $request->nama_ustaz;

        $datetime = $request->tanggal;
        $format = explode("T", $datetime);
        setlocale(LC_ALL, 'id_ID.utf8'); 
        $hari = strftime('%A',strtotime($format[0]));
        $tanggal = $format[0];
        $waktu = $format[1];

        $kajian->hari = $hari;
        $kajian->tanggal = $tanggal;
        $kajian->waktu = $waktu;

        $kajian->save();

        return redirect('masjid/'.Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kajian = Kajian::find($id);
        $kajian->delete();

        return redirect('masjid/'.Auth::user()->id);
    }
}

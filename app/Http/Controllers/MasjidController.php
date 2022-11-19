<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masjid;
use App\Models\Kajian;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class MasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Request $request)
    {
        $listMasjid;
        
        if ($request->has('search')){
            $kataKunci = strtolower($request->search);
            $listMasjid = Masjid::where('nama', 'like', '%'.$kataKunci.'%')->get();
        } else {
            $listMasjid = Masjid::get();
        }

        return view('masjid.daftar_masjid', ['listMasjid' => $listMasjid]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     //   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masjid = Masjid::find($id);
        $listKajian = Kajian::where('id_masjid', '=', $masjid->id)->get();
        return view('masjid.detail', ['masjid' => $masjid, 'listKajian' => $listKajian]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masjid = Masjid::find($id);
        if (! Gate::allows('isMyAccount', $masjid)) {
            abort(403);
        }

        return view('masjid.form_edit_masjid', ['masjid' => $masjid]);
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
            'nama_masjid' => 'required',
            'alamat_masjid' => 'required',
            'deskripsi_masjid' => 'required',
            'foto_masjid' => ['image', 'file', 'max:5000']
        ]);

        $masjid = Masjid::find($id);

        $masjid->nama = $request['nama_masjid'];
        $masjid->alamat = $request['alamat_masjid'];
        $masjid->deskripsi = $request['deskripsi_masjid'];

        if($request->file('foto_masjid')){
            if($request->foto_lama && $request->foto_lama!="foto_masjid/fallback.png"){
                Storage::delete($request->foto_lama);
            }
            $masjid->foto = $request->file('foto_masjid')->store('foto_masjid');
        }

        $masjid->save();

        return redirect('masjid/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

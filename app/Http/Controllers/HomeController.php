<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masjid;
use App\Models\PengurusMasjid;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', ['masjid'=>Masjid::find(Auth::user()->id)]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\PengurusMasjid;
use App\Models\Masjid;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:pengurus_masjid'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nama_masjid' => 'required',
            'alamat_masjid' => 'required',
            'deskripsi_masjid' => 'required',
            'foto_masjid' => ['image', 'file', 'max:5000']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $request = app('request');
        
        $user = PengurusMasjid::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);

        $image;
        if($request->file('foto_masjid')){
            $image = $request->file('foto_masjid')->store('foto_masjid');
        } else {
            $image = "foto_masjid/fallback.png";
        }

        Masjid::create([
            'nama' => $data['nama_masjid'],
            'alamat' => $data['alamat_masjid'],
            'deskripsi' => $data['deskripsi_masjid'],
            'foto' => $image,
            'id_pengurus' => $user->id
        ]);

        return $user;
    }
}

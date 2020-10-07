<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    private $model;
    public $user;

    function __construct()
    {
        $this->model = new Model;
        $this->user = $this->model->User;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
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
        try {
            //code...
            $n = $request->all();
            $d['username'] = $n['username'];
            $d['password'] = $n['katasandi'];
            if (!$this->user->where(['username' => $d['username']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'akun tidak terdaftar');
            }
            $u = $this->user->where(['username' => $d['username']])->first();
            $m = Hash::check($d['password'], $u->password);
            if ($m == false) {
                # code...
                return redirect()->back()->with('pesan_error', 'password salah');
            }
            $a = Auth::attempt(['username' => $u->username, 'password' => $d['password']]);
            if ($a == false) {
                # code...
                return redirect()->back()->with('pesan_error', 'tidak dapat login');
            }
            return redirect('/admin/user/home')->with('pesan_sukses', 'Welcome ' . $u->username);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('pesan_error', $th->getMessage());
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/admin/login')->with('pesan_sukses', 'Sampai Jumpa Lagi...');
    }
}

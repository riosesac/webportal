<?php

namespace App\Http\Controllers\User\Home;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Index extends Controller
{
    private $model;
    public $user;

    function __construct()
    {
        $this->model = new Model;
        $this->user = $this->model->User;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.akun.homes.index');
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
        $n = $request->all();
        $d['password'] = $n['password'];
        $data = $this->user->where(['username' => Auth::user()->username])->first();
        if ($data) {
            $password = Hash::make($d['password']);
            $this->user->where('id', $data->id)->update(['password' => $password]);
            return redirect()->back()->with('pesan_sukses', 'Password Sukses Terganti');
        } else {
            return redirect()->back()->with('pesan_error', 'Password Gagal Terganti');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.akun.temp.changepassword');
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
    public function destroy($id)
    {
        //
    }
}

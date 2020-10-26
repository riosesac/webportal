<?php

namespace App\Http\Controllers\User\Account;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUser extends Controller
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
        $users = $this->user->where(['role' => 'user'])->get();
        return view('admin.akun.register.user')->with(compact('users'));
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
            $d['email'] = $n['email'];
            $d['password'] = Hash::make($n['password']);
            $d['role'] = "user";
            $d['akses'] = "active";
            // dd($d);
            if ($this->user->where(['username' => $d['username']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'User sudah ada !!!');
            }
            if (!$d['username']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi Username anda');
            }
            if (!$d['email']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi Email anda');
            }
            if (!$d['password']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi Password anda');
            }
            if (!$d['role']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi role user');
            }
            $this->user->create($d);
            return redirect('/admin/admin/register')->with('pesan_sukses', 'User bertambah');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/admin/admin/home')->with('pesan_error', $th->getMessage());
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
        try {
            //code...
            $n = $request->all();
            $d['username'] = $n['username'];
            $d['email'] = $n['email'];
            $d['password'] = Hash::make($n['password']);
            $d['role'] = "user";
            $d['akses'] = "active";
            // dd($d);
            if ($this->user->where(['username' => $d['username']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'User sudah ada !!!');
            }
            if (!$d['username']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi Username anda');
            }
            if (!$d['email']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi Email anda');
            }
            if (!$d['password']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi Password anda');
            }
            if (!$d['role']) {
                # code...
                return redirect()->back()->with('pesan_error', 'Isi role user');
            }
            $this->user->where(['id' => $id])->update($d);
            return redirect('/admin/admin/register')->with('pesan_sukses', 'User bertambah');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/admin/admin/home')->with('pesan_error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->user->where(['id' => $id])->delete();
            return redirect('/admin/admin/register')->with('pesan_sukses', 'User dihapus');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/admin/admin/home')->with('pesan_error', $th->getMessage());
        }
    }
}

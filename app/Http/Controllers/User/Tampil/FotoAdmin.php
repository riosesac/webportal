<?php

namespace App\Http\Controllers\User\Tampil;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FotoAdmin extends Controller
{
    private $model;
    public $foto;
    public $kategori;

    function __construct()
    {
        $this->model = new Model;
        $this->foto = $this->model->Foto;
        $this->kategori = $this->model->Kategori;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = $this->foto
            ->join('kategoris', 'kategoris.id', '=', 'fotos.kategori')
            ->select('kategoris.kategori as kat', 'fotos.*')->orderBy('fotos.created_at', 'desc')->get();
        $kategori = $this->kategori->orderBy('created_at', 'desc')->get();
        return view('admin.akun.tampil.fotoadmin')->with(compact('foto', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            //code...
            $n = $request->all();
            $d['kategori'] = $n['kategori'];
            if ($this->kategori->where(['kategori' => $d])->first()) {
                # code...
                return redirect('/admin/admin/fotoku')->with('pesan_error', 'Kategori sudah ada');
            }
            $this->kategori->create($n);
            return redirect('/admin/admin/fotoku')->with('pesan_sukses', 'Kategori bertambah');
        } catch (\Throwable $th) {
            return redirect('/admin/admin/fotoku')->with('pesan_error', $th->getMessage());
        }
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
            $d['judul'] = $n['title'];
            if ($n['foto']->isValid()) {
                $ekstensi = time() . "." . $n['foto']->getClientOriginalExtension();
                $nama_file = rand(111, 99999) . '_' . $ekstensi;
                $file = public_path() . '/foto';
                $n['foto']->move($file, $nama_file);
            } else {
                $nama_file = null;
            }
            $d['foto'] = $nama_file;
            $d['slug'] = Str::slug($d['judul'] . '-' . Str::random());
            $d['status'] = "active";
            $kat = $this->kategori->where(['kategori' => $n['kategori']])->first();
            $d['kategori'] = $kat->id;
            if ($this->foto->where(['slug' => $d['slug']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'Foto sudah ada');
            }
            $this->foto->create($d);
            return redirect('/admin/admin/fotoku')->with('pesan_sukses', 'Foto bertambah');
        } catch (\Throwable $th) {
            return redirect('/admin/admin/fotoku')->with('pesan_error', $th->getMessage());
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
            $d['judul'] = $n['title'];
            if ($n['foto']->isValid()) {
                $ekstensi = time() . "." . $n['foto']->getClientOriginalExtension();
                $nama_file = rand(111, 99999) . '_' . $ekstensi;
                $file = public_path() . '/foto';
                $n['foto']->move($file, $nama_file);
            } else {
                $nama_file = $n['foto'];
            }
            $d['foto'] = $nama_file;
            $d['slug'] = Str::slug($d['judul'] . '-' . Str::random());
            $d['status'] = "active";
            $kat = $this->kategori->where(['kategori' => $n['kategori']])->first();
            $d['kategori'] = $kat->id;
            if ($this->foto->where(['slug' => $d['slug']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'Foto sudah ada');
            }
            $this->foto->where(['id' => $id])->update($d);
            return redirect('/admin/admin/fotoku')->with('pesan_sukses', 'Foto diganti');
        } catch (\Throwable $th) {
            return redirect('/admin/admin/fotoku')->with('pesan_error', $th->getMessage());
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
        $this->foto->where(['id' => $id])->delete();
        return redirect()->back()->with('pesan_sukses', 'Foto dihapus');
    }
}

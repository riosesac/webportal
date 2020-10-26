<?php

namespace App\Http\Controllers\User\Tampil;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Artikel extends Controller
{
    private $model;
    public $artikel;
    public $kategori;

    function __construct()
    {
        $this->model = new Model;
        $this->artikel = $this->model->Artikel;
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
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(6);
        $kategori = $this->kategori->orderBy('created_at', 'desc')->get();
        return view('admin.akun.tampil.artikel')->with(compact('artikel', 'kategori'));
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
                return redirect('/admin/develop/artikelku')->with('pesan_error', 'Kategori sudah ada');
            }
            $this->kategori->create($n);
            return redirect('/admin/develop/artikelku')->with('pesan_sukses', 'Kategori bertambah');
        } catch (\Throwable $th) {
            return redirect('/admin/develop/artikelku')->with('pesan_error', $th->getMessage());
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
            $d['artikel'] = $n['artikel'];
            $d['slug'] = Str::slug($d['judul'] . '-' . Str::random());
            $d['status'] = "active";
            $kat = $this->kategori->where(['kategori' => $n['kategori']])->first();
            $d['kategori'] = $kat->id;
            if ($this->artikel->where(['slug' => $d['slug']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'Artikel sudah ada');
            }
            // dd($d);
            $this->artikel->create($d);
            return redirect('/admin/develop/artikelku')->with('pesan_sukses', 'Artikel bertambah');
        } catch (\Throwable $th) {
            return redirect('/admin/develop/artikelku')->with('pesan_error', $th->getMessage());
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
            dd($request->all());
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
            $d['artikel'] = $n['artikel'];
            $d['slug'] = Str::slug($d['judul'] . '-' . Str::random());
            $d['status'] = "active";
            $kat = $this->kategori->where(['kategori' => $n['kategori']])->first();
            $d['kategori'] = $kat->id;
            if ($this->artikel->where(['slug' => $d['slug']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'Artikel sudah ada');
            }
            // dd($d);
            $this->artikel->where(['id' => $id])->update($d);
            return redirect()->back()->with('pesan_sukses', 'Artikel diperbaharui');
        } catch (\Throwable $th) {
            return redirect('/admin/develop/artikelku')->with('pesan_error', $th->getMessage());
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
        $this->artikel->where(['id' => $id])->delete();
        return redirect()->back()->with('pesan_sukses', 'Artikel dihapus');
    }
}

<?php

namespace App\Http\Controllers\User\Tampil;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Service\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoAdmin extends Controller
{
    private $model;
    public $video;
    public $kategori;

    function __construct()
    {
        $this->model = new Model;
        $this->video = $this->model->Video;
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
        $video = $this->video
            ->join('kategoris', 'kategoris.id', '=', 'videos.kategori')
            ->select('kategoris.kategori as kat', 'videos.*')->orderBy('videos.created_at', 'desc')->get();
        $kategori = $this->kategori->orderBy('created_at', 'desc')->get();
        return view('admin.akun.tampil.videoadmin')->with(compact('video', 'kategori'));
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
                return redirect('/admin/admin/videoku')->with('pesan_error', 'Kategori sudah ada');
            }
            $this->kategori->create($n);
            return redirect('/admin/admin/videoku')->with('pesan_sukses', 'Kategori bertambah');
        } catch (\Throwable $th) {
            return redirect('/admin/admin/videoku')->with('pesan_error', $th->getMessage());
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
            if ($n['video']->isValid()) {
                $ekstensi = time() . "." . $n['video']->getClientOriginalExtension();
                $nama_file = rand(111, 99999) . '_' . $ekstensi;
                $file = public_path() . '/video';
                $n['video']->move($file, $nama_file);
            } else {
                $nama_file = null;
            }
            $d['video'] = $nama_file;
            $d['slug'] = Str::slug($d['judul'] . '-' . Str::random());
            $d['status'] = "active";
            $kat = $this->kategori->where(['kategori' => $n['kategori']])->first();
            $d['kategori'] = $kat->id;
            if ($this->video->where(['slug' => $d['slug']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'Video sudah ada');
            }
            $this->video->create($d);
            return redirect('/admin/admin/videoku')->with('pesan_sukses', 'Video bertambah');
        } catch (\Throwable $th) {
            return redirect('/admin/admin/videoku')->with('pesan_error', $th->getMessage());
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
            if ($n['video']->isValid()) {
                $ekstensi = time() . "." . $n['video']->getClientOriginalExtension();
                $nama_file = rand(111, 99999) . '_' . $ekstensi;
                $file = public_path() . '/video';
                $n['video']->move($file, $nama_file);
            } else {
                $nama_file = $n['video'];
            }
            $d['video'] = $nama_file;
            $d['slug'] = Str::slug($d['judul'] . '-' . Str::random());
            $d['status'] = "active";
            $kat = $this->kategori->where(['kategori' => $n['kategori']])->first();
            $d['kategori'] = $kat->id;
            if ($this->video->where(['slug' => $d['slug']])->first()) {
                # code...
                return redirect()->back()->with('pesan_error', 'Video sudah ada');
            }
            $this->video->where(['id' => $id])->update($d);
            return redirect('/admin/admin/videoku')->with('pesan_sukses', 'Video diganti');
        } catch (\Throwable $th) {
            return redirect('/admin/admin/videoku')->with('pesan_error', $th->getMessage());
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
        $this->video->where(['id' => $id])->delete();
        return redirect()->back()->with('pesan_sukses', 'Video dihapus');
    }
}

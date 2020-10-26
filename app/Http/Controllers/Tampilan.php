<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\Model;
use Illuminate\Support\Str;

class Tampilan extends Controller
{
    private $model;
    public $artikel;
    public $foto;
    public $video;

    function __construct()
    {
        $this->model = new Model;
        $this->artikel = $this->model->Artikel;
        $this->foto = $this->model->Foto;
        $this->video = $this->model->Video;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->limit(3)->get();
        $foto = $this->foto
            ->join('kategoris', 'kategoris.id', '=', 'fotos.kategori')
            ->select('kategoris.kategori as kat', 'fotos.*')->orderBy('fotos.created_at', 'desc')->paginate(6);
        $video = $this->video
            ->join('kategoris', 'kategoris.id', '=', 'videos.kategori')
            ->select('kategoris.kategori as kat', 'videos.*')->orderBy('videos.created_at', 'desc')->paginate(6);
        return view('front.page.welcome')->with(compact('artikels', 'foto', 'video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profil()
    {
        return view('front.page.profil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function visimisi()
    {
        return view('front.page.visimisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sejarah()
    {
        return view('front.page.sejarah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function struktur()
    {
        return view('front.page.struktur');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function masa()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.masakemasa')->with(compact('artikel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mna()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.mna')->with(compact('artikel'));
    }

    public function spr()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.spr')->with(compact('artikel'));
    }

    public function dma()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.dma')->with(compact('artikel'));
    }

    public function lwn()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.lwn')->with(compact('artikel'));
    }

    public function ptm()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.ptm')->with(compact('artikel'));
    }

    public function eli()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.eli')->with(compact('artikel'));
    }

    public function dmn()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.dmn')->with(compact('artikel'));
    }

    public function yku()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.yku')->with(compact('artikel'));
    }

    public function binpotdirga()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.binpotdirga')->with(compact('artikel'));
    }

    public function piaardhya()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.piaardhya')->with(compact('artikel'));
    }

    public function makoopsau()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.makoopsau')->with(compact('artikel'));
    }

    public function jajaran()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.jajaran')->with(compact('artikel'));
    }

    public function foto()
    {
        $foto = $this->foto
            ->join('kategoris', 'kategoris.id', '=', 'fotos.kategori')
            ->select('kategoris.kategori as kat', 'fotos.*')->orderBy('fotos.created_at', 'desc')->paginate(6);
        return view('front.page.foto')->with(compact('foto'));
    }

    public function video()
    {
        $video = $this->video
            ->join('kategoris', 'kategoris.id', '=', 'videos.kategori')
            ->select('kategoris.kategori as kat', 'videos.*')->orderBy('videos.created_at', 'desc')->paginate(6);
        return view('front.page.video')->with(compact('video'));
    }

    public function kliping()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.kliping')->with(compact('artikel'));
    }

    public function monitoring()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.monitoring')->with(compact('artikel'));
    }

    public function artikel()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.artikel')->with(compact('artikel'));
    }

    public function buletin()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.buletin')->with(compact('artikel'));
    }

    public function kajian()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.kajian')->with(compact('artikel'));
    }

    public function covid()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.covid')->with(compact('artikel'));
    }

    public function publik()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.publik')->with(compact('artikel'));
    }

    public function link()
    {

        return view('front.page.link');
    }

    public function download()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.download')->with(compact('artikel'));
    }

    public function tanyajawab()
    {
        return view('front.page.tanyajawab');
    }

    public function alamat()
    {
        return view('front.page.alamat');
    }

    public function penerangan()
    {
        $artikel = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->orderBy('created_at', 'desc')->paginate(4);
        return view('front.page.penerangan')->with(compact('artikel'));
    }

    public function detail($slug)
    {
        $details = $this->artikel
            ->join('kategoris', 'kategoris.id', '=', 'artikels.kategori')
            ->select('kategoris.kategori as kat', 'artikels.*')->where(['artikels.slug' => $slug])->first();
        return view('front.page.detail')->with(compact('details'));
    }
}

<nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logov3.png')}}" alt="Koopsau III" style="height: 120%; float: left;">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="custom-collapse">
      <ul class="nav navbar-nav navbar-right">
      <li><a  href="{{ url('/')}}" >Beranda</a></li>
        <li class="dropdown"><a class="dropdown-toggle" href="profil" data-toggle="dropdown">Tentang Kami</a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('profil')}}">Profil</a></li>
            <li><a href="{{ url('visimisi')}}">Visi Misi</a></li>
            <li><a href="{{ url('sejarah')}}">Sejarah</a></li>
            <li><a href="{{ url('struktur')}}">Struktur Organisasi</a></li>
            <li><a href="{{ url('masa')}}">PANGKOOPSAU III Dari Masa ke Masa</a></li>
            <li class="dropdown"><a class="dropdown-toggle binded" href="#" data-toggle="dropdown">Profil Satuan Jajaran</a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('mna')}}">Lanud  Manuhua (MNA)</a></li>
                <li><a href="{{ url('spr')}}">Lanud Silas Papare (SPR)</a></li>
                <li><a href="{{ url('dma')}}">Lanud J.A. Dimara (DMA)</a></li> 
                <li><a href="{{ url('lwn')}}">Lanud Leo Watimena (LWN)</a></li>
                <li><a href="{{ url('ptm')}}">Lanud Pattimura (PTM)</a></li>
                <li><a href="{{ url('eli')}}">Lanud Eltari (ELI)</a></li>
                <li><a href="{{ url('dmn')}}">Lanud Duma Tubun (DMN)</a></li>
                <li><a href="{{ url('yku')}}">Lanud Yohanis Kapiyau (YKU)</a></li>
              </ul>
            </li>
            <li><a href="{{ url('binpotdirga')}}">Profil Binpotdirga KOOPSAU III</a></li>
            <li><a href="{{ url('piaardhya')}}">Profil PIA Ardhya Garini D.III KOOPSAU III</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" href="{{ url('artikelse')}}" data-toggle="dropdown">Berita</a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('makoopsau')}}">Berita MAKOOPSAU III</a></li>
            <li><a href="{{ url('jajaran')}}">Berita Satuan Jajaran</a></li>
            <li><a href="{{ url('binpotdirga')}}">Berita Binpotdirga</a></li>
            <li><a href="{{ url('piaardhya')}}">Berita PIA Ardhya Garini</a></li>
            <li><a href="{{ url('fotos')}}">Foto</a></li>
            <li><a href="{{ url('videos')}}">Video</a></li>
            <li><a href="{{ url('kliping')}}">Kliping</a></li>
            <li><a href="{{ url('monitoring')}}">Media Monitoring</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" href="{{ url('sejarah')}}" data-toggle="dropdown">Pustaka</a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('artikelse')}}">Buku Dan Artikel</a></li>
            <li><a href="{{ url('buletin')}}">Buletin KOOPSAU III</a></li>
            <li><a href="{{ url('kajian')}}">Kajian Staf Ahli KOOPSAU III</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Informasi</a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('covid')}}">Info COVID-19</a></li>
            <li><a href="{{ url('publik')}}">Info Publik</a></li>
            <li><a href="{{ url('link')}}">Link KOOPSAU III</a></li>
            <li><a href="{{ url('download')}}">Download</a></li>
            <li><a href="{{ url('tanyajawab')}}">Tanya Jawab</a></li>
          </ul>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Kontak</a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('alamat')}}">Alamat KOOPSAU III</a></li>
            <li><a href="https://tni-au.mil.id/">Nama Website</a></li>
            <li><a href="{{ url('penerangan')}}">Penerangan KOOPSAU III</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
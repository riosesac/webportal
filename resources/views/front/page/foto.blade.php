@extends('welcome')
@section('content')
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="assets/images/cn235v5.jpg" id="home">
        <div class="titan-caption" style="position:absolute; top:0; left:0; z-index:1;">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1"><img src="assets/images/logo.png" alt="Koopsau3" style="height: 250px; padding-top:50px;"></div>
            <div class="font-alt mb-40 titan-title-size-3">KOOPSAU III</div>
            <div class="font-alt mb-40 titan-title-size-2">Komando Operasi Angkatan Udara III</div>
            <hr style="width: 50%">
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module  bg-dark-60 pt-0 pb-0 parallax-bg " data-background="assets/images/publikasifotobg.jpg" id="team">
            <div class="container" style="padding-bottom: 50px;">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt" style="padding-top:50px;">FOTO KOOPSAU III</h2>
                        <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III
                        </div>
                    </div>
                </div>
                <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
                    @foreach ($foto as $fot)
                    <li class="work-item illustration webdesign">
                      @if ($fot->foto)
                      <a href="{{ url('foto/'.$fot->foto) }}">
                        <div class="work-image">
                          <img src="{{ url('foto/'.$fot->foto) }}" alt="Portfolio Item"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">{{ $fot->judul }}</h3>
                            <div class="work-descr">{{ $fot->kat }}</div>
                        </div>
                      </a>  
                      @else
                      <a href="{{ asset('image/default.png') }}">
                        <div class="work-image">
                          <img src="{{ asset('image/default.png') }}" alt="Portfolio Item"/>
                        </div>
                        <div class="work-caption font-alt">
                            <h3 class="work-title">{{ $fot->judul }}</h3>
                            <div class="work-descr">{{ $fot->kat }}</div>
                        </div>
                      </a>
                      @endif
                      </li>
                    @endforeach
                </ul>
          </div>
          <div class="pagination font-alt">
            {{$foto->links()}}
          </div>
        
          </section>
      </div>
    </main>
</body>
@endsection
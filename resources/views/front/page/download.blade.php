@extends('welcome')
@section('content')
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="assets/images/loreng.jpg" id="home">
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
        <section class="module  bg-dark-60 pt-0 pb-0 parallax-bg " data-background="assets/images/artikel.jpg" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <h2 class="module-title font-alt" style="padding-top:50px;">DOWNLOAD</h2>
                      <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
                    </div>
                  </div>
                <div class="row post-masonry post-columns">
                  @foreach ($artikel as $download)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="post">
                            <div class="post-thumbnail">
                              <a href="#">
                                @if ($download->foto)
                                <a href="#"><img src="{{ asset('foto/'.$download->foto) }}" alt="Blog-post Thumbnail"/></a>    
                                @else
                                <a href="#"><img src="{{ asset('image/default.png') }}" alt="Blog-post Thumbnail"/></a>
                                @endif
                            </a>
                          </div>
                            <div class="post-header font-alt">
                              <h2 class="post-title"><a href="#">{{ $download->judul }}</a></h2>
                              <div class="post-meta">&nbsp;| {{ date('dMY',strtotime($download->created_at)) }}| {{ $download->kat }}
                              </div>
                            </div>
                            <div class="post-entry">
                              {!! Str::limit($download->artikel, $limit = 100) !!}
                            </div>
                            <div class="post-more"><a class="more-link" href="{{url("/data/".$download->slug)}}">Read more</a></div>
                          </div>
                        </div>
                        @endforeach
                </div>
                <div class="pagination font-alt">
                  {{$artikel->links()}}
                </div>
              </div>
            </div>
          </section>
      </div>
    </main>
</body>
@endsection
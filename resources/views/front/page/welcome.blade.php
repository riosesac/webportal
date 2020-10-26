@extends('welcome')
@section('content')
<style>
  .loreng{
    background-image: url('assets/images/loreng.jpg');
    background-size: cover;
    width: 100%;
    height: auto;
    background-repeat: repeat;
  }
  .nama{
    color: white;
  }
  .gelar{
    color: whitesmoke;
  }
  .logo{
    padding-bottom: 20px;
  }
  .img-fluid{
        padding-top: 20px;
        padding-bottom: 20px;
    }
</style>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader"><img src="assets/images/favicons/icon.png" alt=""></div>
      </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="assets/images/background.jpeg" id="home" style="padding-top: 50px;">
        <div class="titan-caption" style="position:absolute; top:0; left:0; z-index:1;">
          <div class="caption-content">
            <div class="font-alt mb-20 titan-title-size-1"><img src="assets/images/logo.png" alt="Koopsau3" style="height: 250px;padding-top:50px;"></div>
            <div class="font-alt mb-20 titan-title-size-3">KOOPSAU III</div>
            {{-- <div class="font-alt mb-20 titan-title-size-3">Komando Operasi TNI AU III</div> --}}
            <hr style="width: 75%">
            <div class="font-alt mb-30 titan-title-size-2">"abhibhuti antarikshe"</div>
            <div class="font-alt mb-30 titan-title-size-2">"keunggulan udara tujuan utama"</div>
          </div>
        </div>
      </section>
      <div>
        <section class="module  bg-dark-60 pt-0 pb-0 " data-background="assets/images/loreng.jpg" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt" style="padding-top:50px;">
                  {{-- PIMPINAN KOOPSAU III --}}
                  PROFIL
                </h2>
                <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
              </div>
            </div>
            <div class="row" style="padding-bottom:50px;">
              <div class="col-md-1"></div>
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp" >
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/Panglima.png" alt="Panglima KOOPSAU 3" >
                    <div class="team-detail">
                      {{-- <h5 class="font-alt">Hi all</h5> --}}
                      {{-- <p class="font-serif">Sayap Pelindung Tanah Airku</p> --}}
                      <div class="team-social">
                        <a href="#"><i class="fa fa-facebook fa-3x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-3x"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-3x"></i></a>
                        <a href="#"><i class="fa fa-skype fa-3x"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name nama">Marsda TNI Ir. Novyan Samyoga, M.M</div>
                    <div class="team-role gelar">PANGLIMA KOOPSAU III</div>
                  </div>
                </div>
              </div>
              <div class="col-md-2"></div>
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/kepalav2.png" alt="Kepala Staff KOOPSAU 3"/>
                    <div class="team-detail">
                      {{-- <h5 class="font-alt">Yes, it's me</h5> --}}
                      {{-- <p class="font-serif">Swa Bhuwana Paksa</p> --}}
                      <div class="team-social">
                        <a href="#"><i class="fa fa-facebook fa-3x"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-3x"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-3x"></i></a>
                        <a href="#"><i class="fa fa-skype fa-3x"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name nama">Marsma TNI Marsma TNI Hesly Paat.</div>
                    <div class="team-role gelar">KEPALA STAFF KOOPSAU III</div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
          </div>
        </section>
        <section class="module  bg-dark-60 pt-0 pb-0 parallax-bg " data-background="assets/images/news.jpg" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt" style="padding-top:50px;">Berita TNI AU</h2>
                <div class="module-subtitle font-serif">Berita Harian TNI Angkaan Udara dan PIA Ardhya Garini</div>
              </div>
            </div>
            <div class="row">
              <hr style=" color: white;">
              <div class="container">
                <div class="row multi-columns-row post-columns">

                   @foreach($artikels as $beritakoopsau)
                   <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                      <div class="post-thumbnail">
                        <a href="#">
                          @if ($beritakoopsau->foto)
                          <a href="#"><img src="{{ asset('foto/'.$beritakoopsau->foto) }}" alt="Blog-post Thumbnail"/></a>    
                          @else
                          <a href="#"><img src="{{ asset('image/default.png') }}" alt="Blog-post Thumbnail"/></a>
                          @endif
                      </a>
                    </div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">{{ $beritakoopsau->judul }}</a></h2>
                        <div class="post-meta">&nbsp;| {{ date('dMY',strtotime($beritakoopsau->created_at)) }}| {{ $beritakoopsau->kat }}
                        </div>
                      </div>
                      <div class="post-entry">
                        {!! Str::limit($beritakoopsau->artikel, $limit = 100) !!}
                      </div>
                      <div class="post-more"><a class="more-link" href="{{url("/data/".$beritakoopsau->slug)}}">Read more</a></div>
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt" >Berita KOOPSAU III</h2>
                <div class="module-subtitle font-serif">Berita Harian TNI Angkaan Udara dan PIA Ardhya Garini</div>
              </div>
            </div>
            <div class="row">
              <hr style=" color: white;">
              <div class="container">
                <div class="row multi-columns-row post-columns">
                  @foreach($artikels as $beritakoopsau)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                      <div class="post-thumbnail">
                        <a href="#">
                          @if ($beritakoopsau->foto)
                          <a href="#"><img src="{{ asset('foto/'.$beritakoopsau->foto) }}" alt="Blog-post Thumbnail"/></a>    
                          @else
                          <a href="#"><img src="{{ asset('image/default.png') }}" alt="Blog-post Thumbnail"/></a>
                          @endif
                      </a>
                    </div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">{{ $beritakoopsau->judul }}</a></h2>
                        <div class="post-meta">&nbsp;| {{ date('dMY',strtotime($beritakoopsau->created_at)) }}| {{ $beritakoopsau->kat }}
                        </div>
                      </div>
                      <div class="post-entry">
                        {!! Str::limit($beritakoopsau->artikel, $limit = 100) !!}
                      </div>
                      <div class="post-more"><a class="more-link" href="{{url("/data/".$beritakoopsau->slug)}}">Read more</a></div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module  bg-dark-60 pt-0 pb-0 " data-background="assets/images/loreng.jpg" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">FOTO KOOPSAU III TERBARU</h2>
                <div class="module-subtitle font-serif">Galleri Foto KOOPSAU III Terbaru.</div>
              </div>
            </div>
            <div class="row portfolio-container">
              <div class="col-lg-3 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="https://www.wallpapermaiden.com/image/2020/02/13/matou-sakura-fate-stay-night-purple-hair-ribbon-anime-37956.jpeg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <div class="portfolio-links">
                      <a href="https://www.wallpapermaiden.com/image/2020/02/13/matou-sakura-fate-stay-night-purple-hair-ribbon-anime-37956.jpeg" data-gall="portfolioGallery" class="venobox" title="Wedding Couple"><i class="bx bx-show-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row client" style="padding-bottom: 50px;">
              <div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false">
                @foreach ($foto as $image)
                <div class="owl-item">
                  <a>
                    <img class="img-fluid z-depth-1 video-pop-up" 
                    src="{{ url('foto/'.$image->foto) }}" 
                    alt="1"
                    href="{{ url('foto/'.$image->foto) }}">
                  </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">VIDEO KOOPSAU III TERBARU</h2>
                <div class="module-subtitle font-serif">Galleri Video KOOPSAU III Terbaru.</div>
              </div>
            </div>
            <div class="row client" style="padding-bottom: 50px;">
              <div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false">
                @foreach ($video as $video)
                <div class="owl-item vid">
                  <a>
                    <img style="width: 50%;" class="img-fluid z-depth-1 video-pop-up" 
                  src="{{asset('logo.png')}}" 
                    alt="2"
                  href="{!! url('video/'.$video->video) !!}">
                  </a>
                </div>
                @endforeach
              </div>

            </div>
          </div>
        </section>
        <section class="module-small free-trial" data-background="assets/images/satuan.jpg">
          <div class="container text-center">
            <div class="row">
              <div class="col-sm-12">
                <div class="video-box">
                  <div class="video-box-icon"><a class="video-pop-up" href="https://www.youtube.com/watch?v=-4VbnTx0z10"><span class="icon-video"></span></a></div>
                  <div class="video-title font-alt">Mars Swa Bhuwana Paksa</div>
                </div>
              </div>
          </div>
        </section>
        <section class="module  bg-dark-60 pt-0 pb-0  " data-background="assets/images/map.jpeg" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt" style="padding-top:50px;">Institusi Terkait</h2>
                <hr style="color: whitesmoke">
              </div>
            </div>
            <div class="row" style="padding-bottom:50px; padding-top:20px;">
              <div class=" col-md-2 col-sm-6 col-xs-6 logo" >
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/kemenhan.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
              <div class=" col-md-2 col-sm-6 col-xs-6 logo" >
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/tni.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
              <div class=" col-md-2 col-sm-6 col-xs-6 logo" >
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/tniad.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
              <div class=" col-md-2 col-sm-5 col-xs-6 logo" >
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/tnial.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
              <div class=" col-md-2 col-sm-6 col-xs-6 logo" >
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/polhukam.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
              <div class=" col-md-2 col-sm-6 col-xs-6 logo" >
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px;"><img src="assets/images/tniau.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    
  </body>
@endsection
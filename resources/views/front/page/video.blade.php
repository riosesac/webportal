@extends('welcome')
@section('content')
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="assets/images/cn235v3.jpg" id="home">
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
        <section class="module  bg-dark-60 pt-0 pb-0 parallax-bg " data-background="assets/images/publikasivideobg.jpg" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <h2 class="module-title font-alt" style="padding-top:50px;">VIDEO KOOPSAU III</h2>
                      <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
                    </div>
                  </div>
                <div class="row post-masonry post-columns">
                  @foreach ($video as $videos)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post">
                      <div class="post-thumbnail owl-item vid">
                        <div>
                          {{-- <video width="400" controls>
                            <source src="{!! url('video/'.$videos->video) !!}" type="video/mp4">
                            <source src="{!! url('video/'.$videos->video) !!}" type="video/webm">
                            <source src="{!! url('video/'.$videos->video) !!}" type="video/ogg">
                            <source src="{!! url('video/'.$videos->video) !!}" type="video/avi">
                          </video> --}}
                          <a>
                            <img style="width: 50%;" class="img-fluid z-depth-1 video-pop-up" 
                          src="{{asset('logo.png')}}" 
                            alt="2"
                          href="{!! url('video/'.$videos->video) !!}">
                          </a>
                        </div>
                      </div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">{{$videos->judul}}</a></h2>
                        <div class="post-meta">&nbsp;<a href="#">{{$videos->kat}}</a>&nbsp;| {{date('dMY',strtotime($videos->created_at))}}
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
                <div class="pagination font-alt">
                  {{$video->links()}}
                </div>
              </div>
            </div>
          </section>
      </div>
    </main>
</body>
@endsection
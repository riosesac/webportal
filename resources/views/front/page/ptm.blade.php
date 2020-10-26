@extends('welcome')
@section('content')
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="assets/images/koopsau3.jpg" id="home">
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
                        <h2 class="module-title font-alt" style="padding-top:50px;">LANUD PATTIMURA</h2>
                        <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                      <div class="row multi-columns-row post-columns">
                        @foreach ($artikel as $ptm)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                          <div class="post">
                            <div class="post-thumbnail">
                              <a href="#">
                                @if ($ptm->foto)
                                <a href="#"><img src="{{ asset('foto/'.$ptm->foto) }}" alt="Blog-post Thumbnail"/></a>    
                                @else
                                <a href="#"><img src="{{ asset('image/default.png') }}" alt="Blog-post Thumbnail"/></a>
                                @endif
                            </a>
                          </div>
                            <div class="post-header font-alt">
                              <h2 class="post-title"><a href="#">{{ $ptm->judul }}</a></h2>
                              <div class="post-meta">&nbsp;| {{ date('dMY',strtotime($ptm->created_at)) }}| {{ $ptm->kat }}
                              </div>
                            </div>
                            <div class="post-entry">
                              {!! Str::limit($ptm->artikel, $limit = 100) !!}
                            </div>
                            <div class="post-more"><a class="more-link" href="{{url("/data/".$ptm->slug)}}">Read more</a></div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                      <div class="pagination font-alt">
                        {{$artikel->links()}}
                      </div>
                    </div>
                    <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
                      <div class="widget">
                        <form role="form">
                          <div class="search-box">
                            <input class="form-control" type="text" placeholder="Search..."/>
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                          </div>
                        </form>
                      </div>
                      <div class="widget">
                        <h5 class="widget-title font-alt" style="color: white">Popular Posts</h5>
                        <ul class="widget-posts">
                          <li class="clearfix">
                            <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-3.jpg" alt="Post Thumbnail"/></a></div>
                            <div class="widget-posts-body">
                              <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                              <div class="widget-posts-meta">23 january</div>
                            </div>
                          </li>
                          <li class="clearfix">
                            <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-4.jpg" alt="Post Thumbnail"/></a></div>
                            <div class="widget-posts-body">
                              <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                              <div class="widget-posts-meta">15 February</div>
                            </div>
                          </li>
                          <li class="clearfix">
                            <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-4.jpg" alt="Post Thumbnail"/></a></div>
                            <div class="widget-posts-body">
                              <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                              <div class="widget-posts-meta">15 February</div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="widget">
                        <h5 class="widget-title font-alt" style="color: white">Tag</h5>
                        <div class="tags font-serif"><a href="#" rel="tag">Blog</a><a href="#" rel="tag">Photo</a><a href="#" rel="tag">Video</a><a href="#" rel="tag">Image</a><a href="#" rel="tag">Minimal</a><a href="#" rel="tag">Post</a><a href="#" rel="tag">Theme</a><a href="#" rel="tag">Ideas</a><a href="#" rel="tag">Tags</a><a href="#" rel="tag">Bootstrap</a><a href="#" rel="tag">Popular</a><a href="#" rel="tag">English</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
      </div>
    </main>
</body>
@endsection
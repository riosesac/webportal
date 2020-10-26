@extends('welcome')
@section('content')
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        <div class="page-loader">
        <div class="loader"><img src="{{ asset('assets/images/favicons/icon.png')}}" alt=""></div>
          </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="{{ asset('assets/images/koopsau3.jpg')}}" id="home">
        <div class="titan-caption" style="position:absolute; top:0; left:0; z-index:1;">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1"><img src="{{ asset('assets/images/logo.png')}}" alt="Koopsau3" style="height: 250px; padding-top:50px;"></div>
            <div class="font-alt mb-40 titan-title-size-3">KOOPSAU III</div>
            <div class="font-alt mb-40 titan-title-size-2">Komando Operasi Angkatan Udara III</div>
            <hr style="width: 50%">
          </div>
        </div>
      </section>
      <div class="main">
        <section class="module  bg-dark-60 pt-0 pb-0 parallax-bg " data-background="{{ asset('assets/images/publikasifotobg.jpg')}}" id="team">
            <div class="container" style="padding-bottom: 50px;">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt" style="padding-top:50px;">{{ $details->judul }}</h2>
                        <div class="module-subtitle font-serif">{{ $details->nama }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="post">
                        <div class="post-thumbnail">
                            @if ($details->foto)
                            <img src="{{ asset('foto/'.$details->foto) }}" alt="Blog Featured Image"/>
                            @else
                            <img src="{{ asset('image/default.png') }}" alt="Blog Featured Image"/>
                            @endif
                        </div>
                        <div class="post-header font-alt">
                            {{-- <h1 class="post-title" style="color:white">Our trip to the Alps</h1> --}}
                            <div class="post-meta"><a>{{ date('dMY',strtotime($details->created_at)) }}</a> &nbsp;| |<a href="#">{{ $details->kat }} </a>
                            </div>
                        </div>
                        <div class="post-entry">
                         {!! $details->artikel !!}
                        </div>
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
                            {{-- @foreach ($artikel1 as $post)
                            <li class="clearfix">
                                <div class="widget-posts-image"><a href="#"><img src="{{ asset('media/'.$post->media) }}" alt="Post Thumbnail"/></a></div>
                                <div class="widget-posts-body">
                                    <div class="widget-posts-title"><a href="#">{{ $post->judul }}</a></div>
                                    <div class="widget-posts-meta">{{ $post->created_at }}</div>
                                </div>
                                </li>
                            @endforeach --}}
                        </ul>
                        </div>
                </div>
                </div>
    </main>
</body>
@endsection


<style>
  .beritabot{
    position: relative;
    width: 100%;
  }
  .gambarberitabot{
    display:block;
    width: 100%;
    height: 140px;
    border-radius: 10px;
  }
  .pergantian{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: #008CBA;
    border-radius: 10px;
  }
  .beritabot:hover .pergantian{
    opacity: 0.8;
  }
  .berita{
    color: white;
    font-size: 15px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align:center;
  }
</style>

<div class="module-small bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget">
            <h5 class="widget-title font-alt">Terkini</h5>
            <ul class="icon-list">
              <li>
                <div class="beritabot">
                  <img src="https://tni-au.mil.id/konten/unggahan/2019/02/L1360566.jpg" alt="Avatar" class="gambarberitabot">
                  <div class="pergantian">
                    <div class="berita">Passing in dan Passing Out Komandan Lanud Adi Soemarmo</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="widget">
            <h5 class="widget-title font-alt" style="color:whitesmoke;">Populer</h5>
            <ul class="widget-posts">
              <li class="clearfix">
                <div class="widget-posts-image"><a href="#"><img src="{{ asset('assets/images/rp-2.jpg')}}" alt="Post Thumbnail"/></a></div>
                <div class="widget-posts-body">
                  <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                  <div class="widget-posts-meta">15 February</div>
                </div>
              </li>
              <li class="clearfix">
                <div class="widget-posts-image"><a href="#"><img src="{{ asset('assets/images/rp-1.jpg')}}" alt="Post Thumbnail"/></a></div>
                <div class="widget-posts-body">
                  <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                  <div class="widget-posts-meta">23 january</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="widget">
            <h5 class="widget-title font-alt" style="color:whitesmoke;">Aplikasi Standar Yang Digunakan </h5>
            <div class="row" style="margin-content:10px;">
              <div class="col-md-3 col-xs-6">
                <div class="widget-posts-image"><a href="#"><img src="{{ asset('assets/images/html5.png')}}" alt="Post Thumbnail"/></a></div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="widget-posts-image"><a href="#"><img src="{{ asset('assets/images/laravel.png')}}" alt="Post Thumbnail"/></a></div>
              </div>
              <div class="col-md-3 col-xs-6">
                <div class="widget-posts-image"><a href="#"><img src="{{ asset('assets/images/bootsrap4.png')}}" alt="Post Thumbnail"/></a></div>
              </div>
              <div class="col-md-3 col-xs-6">
              <div class="widget-posts-image"><a href="#"><img src="{{ asset('assets/images/react.png')}}" alt="Post Thumbnail"/></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
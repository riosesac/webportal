@extends('welcome')
@section('content')
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="assets/images/cn235v4.jpg" id="home">
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
            <div class="container" style="padding-bottom: 50px;">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                      <h2 class="module-title font-alt" style="padding-top:50px;">TANYA JAWAB KOOPSAU III</h2>
                      <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
                    </div>
                  </div>
                  <div class="row mb-60">
                    <div class="col-sm-8 col-sm-offset-2">
                      <form role="form">
                        <div class="search-box">
                          <input class="form-control" type="text" placeholder="Search..."/>
                          <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <div role="tabpanel">
                        <div class="tab-content">
                          <div class="tab-pane active" id="support">
                            <div class="panel-group" id="accordion">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Support Question 1</a></h4>
                                </div>
                                <div class="panel-collapse collapse in" id="support1">
                                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Support Question 2</a></h4>
                                </div>
                                <div class="panel-collapse collapse" id="support2">
                                  <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
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
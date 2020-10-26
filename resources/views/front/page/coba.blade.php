@extends('welcome')
@section('content')
<style>
    .img-fluid{
        padding-top: 20px;
        padding-bottom: 20px;
    }
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
</style>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" data-background="assets/images/background.jpeg" id="home" style="padding-top: 50px;">
        <div class="titan-caption" style="position:absolute; top:0; left:0; z-index:1;">
          <div class="caption-content">
            <div class="font-alt mb-20 titan-title-size-1"><img src="assets/images/logo.png" alt="Koopsau3" style="height: 250px;padding-top:50px;"></div>
            <div class="font-alt mb-20 titan-title-size-3">TNI ANGKATAN UDARA</div>
            {{-- <div class="font-alt mb-20 titan-title-size-3">Komando Operasi TNI AU III</div> --}}
            <hr style="width: 75%">
            <div class="font-alt mb-30 titan-title-size-2">"abhibhuti antarikshe"</div>
            <div class="font-alt mb-30 titan-title-size-2">"keunggulan udara tujuan utama"</div>
          </div>
        </div>
      </section>
      <!-- Grid row -->
      <div>
        <section class="module  bg-dark-60 pt-0 pb-0 " data-background="assets/images/loreng.jpg" id="team">
            <div class="container">
                <div class="row" style="padding-top: 50px; padding-bottom:50px;">
    
                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-12 mb-4">
                
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                
                        <!--Content-->
                        <div class="modal-content">
                
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">
                
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                allowfullscreen></iframe>
                            </div>
                
                            </div>
                
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                            <span class="mr-4">Spread the word!</span>
                            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                            <!--Linkedin-->
                            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
                
                            <button type="button" class="btn btn-danger btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                
                            </div>
                
                        </div>
                        <!--/.Content-->
                
                        </div>
                    </div>
                    <!--Modal: Name-->
                
                    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
                        data-toggle="modal" data-target="#modal1"></a>
                
                    </div>
                    <!-- Grid column -->
                
                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-4">
                
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                
                        <!--Content-->
                        <div class="modal-content">
                
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">
                
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                allowfullscreen></iframe>
                            </div>
                
                            </div>
                
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                            <span class="mr-4">Spread the word!</span>
                            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                            <!--Linkedin-->
                            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
                
                            <button type="button" class="btn btn-danger btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                
                            </div>
                
                        </div>
                        <!--/.Content-->
                
                        </div>
                    </div>
                    <!--Modal: Name-->
                
                    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video"
                        data-toggle="modal" data-target="#modal6"></a>
                
                    </div>
                    <!-- Grid column -->
                
                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 mb-4">
                
                    <!--Modal: Name-->
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                
                        <!--Content-->
                        <div class="modal-content">
                
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">
                
                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tThk-DoOG0o"
                                allowfullscreen></iframe>
                            </div>
                
                            </div>
                
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                            <span class="mr-4">Spread the word!</span>
                            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                            <!--Linkedin-->
                            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
                
                            <button type="button" class="btn btn-danger btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                
                            </div>
                
                        </div>
                        <!--/.Content-->
                
                        </div>
                    </div>
                    <!--Modal: Name-->
                
                    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
                        data-toggle="modal" data-target="#modal4"></a>
                
                    </div>
                    <!-- Grid column -->
                
                </div>
                <!-- Grid row -->
            </div>
          </section>
      </div>
    </div>
    </main>
</body>
@endsection
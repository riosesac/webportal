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
                      <h2 class="module-title font-alt" style="padding-top:50px;">ALAMAT KOOPSAU III</h2>
                      <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
                    </div>
                  </div>
                  <div class="row" style="padding-bottom: 50px;">
                    <div class="map-responsive">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.099373269388!2d136.07735601475378!3d-1.1685578991476346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x68038f396312edcf%3A0xc37ab5fe85164581!2sMakoopsau%20III!5e1!3m2!1sid!2sid!4v1603605819115!5m2!1sid!2sid" width="1000px" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                  </div>
                  <div class="row">
                    <h2 class="module-title font-alt" style="padding-top:70px;">FORMULIR KONTAK</h2>
                    <div class="col-sm-8">
                      <form id="contactForm" role="form" method="post" action="php/contact.php">
                        <div class="form-group">
                          <label class="sr-only" for="name">Name</label>
                          <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                          <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="email">Email</label>
                          <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                          <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                          <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                          <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                        </div>
                      </form>
                      <div class="ajax-response font-alt" id="contactFormResponse"></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="alt-features-item mt-0">
                        <div class="alt-features-icon"><span class="icon-map"></span></div>
                        <h3 class="alt-features-title font-alt">TEMUI KAMI</h3>Jl. Condronegoro No.4, Samfoa<br/>Kabupaten Biak Numfor, Papua<br/>98111, Indonesia
                      </div>
                      <div class="alt-features-item mt-xs-60">
                        <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                        <h3 class="alt-features-title font-alt">HUBUNGI</h3>Email: email@example.com<br/>Phone: +62 0000 1111 2222
                      </div>
                    </div>
                  </div>
              </div>
          </section>
      </div>
    </main>
</body>
@endsection
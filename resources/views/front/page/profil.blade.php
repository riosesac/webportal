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
            <div class="font-alt mb-30 titan-title-size-1"><img src="assets/images/logo.png" alt="Koopsau3" style="height: 250px;padding-top:50px;"></div>
            <div class="font-alt mb-40 titan-title-size-3">KOOPSAU III</div>
            <div class="font-alt mb-40 titan-title-size-2">Komando Operasi Angkatan Udara III</div>
            <hr style="width: 50%">
          </div>
        </div>
      </section>
      <div class="main">
        <section class=" module  bg-dark-60 pt-0 pb-0 " data-background="assets/images/loreng.jpg" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt" style="padding-top:50px;">Profil KOOPSAU III</h2>
                <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
              </div>
            </div>
            <div class="row" style="padding-bottom:50px;">
              <div class="col-md-4"></div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px; padding-bottom:50px;"><img src="assets/images/logo.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
              <div class="col-md-4"></div>
            </div>
            <div class="team-item">
              <div class="team-descr font-alt">
                <div class="module-subtitle font-serif">Komando Operasi Angkatan Udara III atau disingkat Koops AU III adalah salah satu Komando Operasi TNI Angkatan Udara yang mencakup wilayah Indonesia bagian timur yang meliputi seluruh Nusa Tenggara Timur, Maluku dan Papua pembentukan satuan Koopsau III merupakan bagian dari rencana TNI yang telah tertuang dalam Peraturan Presiden Nomer 10 Tahun 2010 dan Peraturan Presiden Nomer 62 Tahun 2016 serta Program 100 hari kerja Panglima TNI.</div>
                <div class="module-subtitle font-serif">KOOPSAU III merupakan Komando Utama Operasional dan Pembinaan TNI AU yang berkedudukan dibawah Panglima TNI untuk mengatasi penyelenggaraan operasi-operasi di udara dan Kasau yang merupakan pembinaan komando dan satuannya.</div>
                <div class="module-subtitle font-serif">Komando III mempunyai tugas yaitu pembinaan kemampuan dan kesiapsiagaan operasional satuan-satuan TNI AU dalam jajarannya, dan melaksanakan operasi-operasi udara dalam rangka penegakan kedaulatan negara di udara, mendukung penegakan kedaulatan negara di darat dan di laut sesuai dengan kebijakan Panglima TNI.</div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
</body>
@endsection
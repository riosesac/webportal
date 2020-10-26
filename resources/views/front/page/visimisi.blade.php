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
                <h2 class="module-title font-alt" style="padding-top:50px;">VISI DAN MISI KOOPSAU III</h2>
                <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
              </div>
            </div>
            <div class="row" >
              <div class="col-md-4"></div>
              <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="team-item" >
                  <div class="team-image" style="border-radius:20px; padding-bottom:50px;"><img src="assets/images/logo.png" alt="Panglima KOOPSAU 3" >
                  </div>
                </div>
              </div>
              <div class="col-md-4"></div>
            </div>
            <div class="row" style="padding-bottom:50px;">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="alt-features-item">
                      <div class="alt-features-icon"><span class="icon-lightbulb"></span></div>
                      <h3 class="visimisi font-alt">Visi</h3>
                      <p style="text-align: justify">Terwujudnya postur TNI AU yang professional, efektif, efisien, modern, dinamis dan handal dalam rangka menegakkan serta mempertahankan kedaulatan dan keutuhan Negara Kesatuan Republik Indonesia.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="alt-features-item">
                      <div class="alt-features-icon"><span class="icon-scope"></span></div>
                      <h3 class="visimisi font-alt">Misi</h3>
                      <ol style="text-align: justify;">
                        <li>Mewujudkan kemampuan dan kekuatan sistem, personel, material alutsista dan fasilitas untuk memenuhi postur TNI AU yang berkualitas agar siap untuk melaksanakan tugas dan fungsi.</li>
                        <li>Meningkatkan kemampuan penyelenggaraan fungsi-fungsi intelijen dan pengamanan dalam rangka melaksanakan tugas dan fungsi TNI AU.</li>
                        <li>Melaksanakan pembinaan kekuatan dan kemampuan dalam rangka pelaksanaan tugas TNI AU baik dalam Operasi Militer untuk Perang (OMP) maupun Operasi Militer Selain Perang (OMSP).</li>
                        <li>Melaksanakan kegiatan bantuan kemanusiaan dan bakti sosial dalam rangka membantu otoritas sipil untuk menciptakan suasana yang kondusif bagi terwujudnya keamanan dalam negeri dan peningkatan kesejahteraan masyarakat.</li>
                        <li>Meningkatkan kerjasama militer dengan negara-negara sahabat dalam rangka menciptakan kondisi kemanan nasional, regional dan internasional serta untuk meningkatkan hubungan antar negara.</li>
                        <li>Melaksanakan penelitian dan pengembangan terhadap strategi dan sistem pertahanan, sumber daya manusia, serta kemampuan dan pendayagunaan industri strategis nasional untuk kepentingan pertahanan matra udara.</li>
                        <li>Meningkatkan pemberdayaan fungsi perencanaan, pengendalian dan pengawasan dilingkungan TNI AU melalui penerapan Sistem Akuntabilitas Kinerja Instansi Pernerintah.</li>
                      </ol>
                    </div>
                </div>
            </div>
          </div>
        </section>
      </div>
    </main>
</body>
@endsection
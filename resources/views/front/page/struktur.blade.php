@extends('welcome')
@section('content')
<style>
  .huruf {
  list-style-type: Upper-alpha;
}
</style>
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
        <section class=" module  bg-dark-60 pt-0 pb-0 " data-background="assets/images/loreng.jpg" id="alt-features">
            <div class="container">
              <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                  <h2 class="module-title font-alt" style="padding-top:50px;">Struktur Organisasi KOOPSAU III</h2>
                  <div class="module-subtitle font-serif">Komando Operasi TNI Angkatan Udara III</div>
                </div>
              </div>
              <div class="row" style="padding-bottom: 50px;">
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="alt-features-item">
                    <div class="alt-features-icon"><span class="icon-ribbon"></span></div>
                    <h3 class="alt-features-title font-alt">Eselon Pemimpin</h3>
                    Panglima Komando Operasi TNI AU III, disebut PANGKOOPSAU III
                  </div>
                  <div class="alt-features-item">
                    <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                    <h3 class="alt-features-title font-alt">Eselon Pembantu Pimpinan / Staf</h3>
                    <ol>
                      <li>Kepala Staf, disebut KAS.</li>
                      <li>Inspektorat, disebut IT.</li>
                      <li>Staf Perencanaan, disebut SREN.</li>
                      <li>Staf Intelejen, disebut SINTEL.</li>
                      <li>Staf Operasi, disebut SOPS.</li>
                      <li>Staf Personel, disebut SPERS.</li>
                      <li>Staf Logistik, disebut SLOG.</li>
                      <li>Staf Komunikasi dan Elektronika, disebut SKOMLEK.</li>
                      <li>Staf Potensi Dirgantara, disebut SPOTDIRGA.</li>
                      <li>Staf Staf Administrasi, disebut SMIN.</li>
                    </ol>
                  </div>
                  <div class="alt-features-item">
                    <div class="alt-features-icon"><span class="icon-scope"></span></div>
                    <h3 class="alt-features-title font-alt">Eselon Pelaksana Staf / Pelayanan</h3>
                    <ol>
                      <li>Satuan Komunikasi dan Elektronika, disebut SATKOMLEK.</li>
                      <li>Pusat Komando Pengendalian, disebut PUSKODAL.</li>
                      <li>Sekretariat, disebut SET.</li>
                      <li>Detasemen Markas, disebut DENMA.</li>
                    </ol>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                  <div class="alt-services-image align-center"><img src="assets/images/struktur.png" alt="Feature Image"></div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="alt-features-item">
                    <div class="alt-features-icon"><span class="icon-target"></span></div>
                    <h3 class="alt-features-title font-alt">Eselon Pelaksana</h3>
                    <ol>
                      <li>Hukum, disebut KUM.</li>
                      <li>Keuangan, disebut KU.</li>
                      <li>Keselamatan Terbang dan Kerja, disebut LAMBANGJA.</li>
                      <li>Kesehatan, disebut KES.</li>
                      <li>Polisi Militer, disebut POM.</li>
                      <li>Penerangan, disebut PEN.</li>
                      <li>Informasi dan Pengolahan Data, disebut INFOLAHTA.</li>
                      <li>Detasemen Intelejen, disebut DENINTEL.</li>
                      <li>Satuan Musik, disebut SATSIK.</li>
                    </ol>
                  </div>
                  <div class="alt-features-item">
                    <div class="alt-features-icon"><span class="icon-gears"></span></div>
                    <h3 class="alt-features-title font-alt">Tingkat Pelaksana</h3>
                    <ol>
                      <li>Pangkalan TNI AU Tipe A, disebut LANUD Tipe A</li>
                      <ol class="huruf">
                        <li>Pangkalan Udara Manuhua, disingkat LANUD MNA.</li>
                        <li>Pangkalan Udara Silas Papare, disingkat SPR.</li>
                      </ol>
                      <li>Pangkalan TNI AU Tipe B, disebut LANUD Tipe B</li>
                      <ol class="huruf">
                        <li>Pangkalan Udara Johannes Abraham Dimara, disingkat DMA.</li>
                        <li>Pangkalan Udara Pattimura, disingkat PTM.</li>
                        <li>Pangkalan Udara LWM.</li>
                        <li>Pangkalan Udara ELI.</li>
                      </ol>
                      <li>Pangkalan TNI AU Tipe C, disebut LANUD Tipe C</li>
                      <ol class="huruf">
                        <li>Pangkalan Udara Dumatubun, disingkat DMN.</li>
                        <li>Pangkalan Udara Yohanis Kapiyau, disingkat YKU.</li>
                      </ol>
                      <li>Detasemen / Perwakilan</li>
                      <ol class="huruf">
                        <li>Detasemen Wamena, disingkat WMA.</li>
                        <li>Detasemen Sorong, disingkat SRO.</li>
                        <li>Detasemen Saumlaki, disingkat SLI.</li>
                        <li>Detasemen Maumere, disingkat MME.</li>
                      </ol>
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
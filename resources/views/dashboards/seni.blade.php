@include('layout.header', ['title' => 'Karya Seni Terbaik'])
<div class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Ini Adalah<em> Karya</em> Terbaik<span> Tahun Ini</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Hidden Life</h4>
                <p>"Kehidupan yang tersembunyi di alam, menggambarkan keindahan dan misteri di balik tanaman yang tampak biasa."</p>
              </div>
              <div>
              <img class="showed-content" src="{{ asset('assets/images/T1.jpg')}}" alt="Terbaik 1">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Alam Merawat Rumahnya</h4>
                <p>"Keseimbangan dan keberagaman penuh perhatian."</p>
              </div>
              <div>
                <img class="showed-content" src="{{ asset('assets/images/T2.jpg')}}" alt="Terbaik 2">
                </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Icon Kota Palembang</h4>
                <p>"Jembatan Ampera, ikon megah dan bersejarah kota Palembang."</p>
              </div>
              <div>
                <img class="showed-content" src="{{ asset('assets/images/T3.jpg')}}" alt="Terbaik 3">
                </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4> Keseimbangan dalam Perjalanan Kehidupan</h4>
                <p>Hidup seperti mengayuh sepeda, teruslah bergerak agar kamu tidak terjatuh.</p>
              </div>
              <div>
                <img class="showed-content" src="{{ asset('assets/images/T4.jpg')}}" alt="Terbaik 4">
                </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  
  @include('layout.footer')
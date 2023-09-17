@include('layout.header', ['title' => 'Home'])

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-7 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Selamat Datang di Pameran Karya Seni Mahasiswa</h6>
                <h2>Inspiring <em>Student</em><span> Creativity</span> & Innovation</h2>
                   
                <p style="text-align: justify;">Selamat datang di Pameran Mahasiswa! Kami adalah sebuah platform yang menyediakan wadah bagi mahasiswa dari berbagai perguruan tinggi dan disiplin ilmu untuk mengekspresikan kreativitas, pengetahuan, dan inovasi mereka. Pameran Mahasiswa didirikan dengan tujuan untuk menginspirasi, mempromosikan kolaborasi lintas kampus, dan memperluas wawasan melalui pameran-pameran yang inovatif dan informatif.</p>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('assets/images/banner-right-image.png')}}" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layout.footer')
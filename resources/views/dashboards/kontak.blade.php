@include('layout.header', ['title' => 'Message Us'])
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            @include('flash-message')
            <h2>Hubungi Kami untuk Mengetahui Lebih Banyak tentang Seni dan Temukan Inspirasi Kreatif.</h2>
            <p style="text-align: justify;">Kami sangat antusias untuk berkomunikasi dengan Anda dan berbagi lebih banyak tentang karya seni yang menginspirasi. Jika Anda memiliki pertanyaan tentang karya seni yang kami tampilkan di blog kami, ingin berdiskusi lebih lanjut tentang seni, atau memiliki permintaan khusus terkait seni, jangan ragu untuk menghubungi kami melalui formulir di bawah ini atau melalui kontak yang tertera. Kami siap mendengarkan dan memberikan tanggapan untuk memenuhi keinginan kreatif Anda. </p>
            <div class="phone-info">
              <h4>Call Us: <span><i class="fa fa-phone"></i> <a href="#">xxx-xxxx-xxx</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form action="{{ route('dashboards.store') }}" method="POST" id="contact" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="username" id="username" placeholder="Username" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="pesan" type="text" class="form-control" id="pesan" placeholder="Pesan" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="{{ asset('assets/images/contact-decoration.png')}}" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('layout.footer')
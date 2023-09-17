@include('layout.header', ['title' => 'About Us'])

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="{{ asset('assets/images/about-left-image.png') }}" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-9">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="text-justify">
                    <h4>About Us</h4>
                    <p style="text-align: justify;">Pameran Mahasiswa adalah platform kreatif bagi mahasiswa untuk memamerkan inovasi dan pengetahuan mereka melalui berbagai pameran. Bergabunglah dengan kami dan temukan inspirasi dari karya-karya hebat mahasiswa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layout.footer')

  
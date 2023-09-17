@include('layout.header', ['title' => 'Blog'])

<div class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2>Ayo Lihat<em> Apa Yang Terbaru</em> dan Menarik<span> Hari Ini!</span></h2>
                </div>
            </div>
        </div>
          
        <div class="row">
            @foreach ($admins as $admin)
                <div class="col-md-3"> <!-- Ubah grid menjadi col-md-3 untuk 4 kolom dalam 1 baris -->
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('storage/'.$admin->image) }}" class="card-img-top" alt="{{ $admin->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $admin->title }}</h5>
                            <p class="card-text" style="text-align: justify;">
                                {{ Str::words($admin->body, 20) }}
                                @if (strlen($admin->body) > 20)
                                    <a href="{{ route('blogs.show', $admin->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@include('layout.footer')

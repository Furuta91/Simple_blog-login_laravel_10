@include('layout.header', ['title' => $post->title])
<br>
<br>
<br>

<div class="container pt-4 bg-white">
    <h2>{{ $post->title }}</h2>
    <br>
    <div class="row">
        <div class="mb-3">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded-3 mb-3">
        </div>
        <div class="mb-3">
            <p style="text-align: justify;">{{ $post->body }}</p>
        </div>
    </div>
</div>

@include('layout.footer')


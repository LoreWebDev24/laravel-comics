<section class="app-main">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <img src="{{ $comic['thumb'] }}" alt="cover-fumetto">
                    <span><strong>{{ $comic['title'] }}</strong></span>
                </div>
            @endforeach
            <div class="pseudo-button">
                <span><strong><a href="#">LOAD MORE</a></strong></span>
            </div>
        </div>
</section>

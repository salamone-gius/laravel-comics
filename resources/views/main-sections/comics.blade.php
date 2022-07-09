<section class="comics-section">
    <div class="container">
        <div class="current-series">current series</div>
        <div class="comics-box">
            <ul class="comics-list">
                @foreach ($comics as $index => $comic)
                    <li>
                        <a href="{{route('comic-info', ['id' => $index])}}">
                            <div class="card">
                                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                                <h5>{{$comic['title']}}</h5>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="btn-box">
            <button class="load-more">load more</button>
        </div>
    </div>
</section>

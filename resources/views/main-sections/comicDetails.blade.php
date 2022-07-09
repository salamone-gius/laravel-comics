<section class="comic-details-section">
    <div class="section-top container">
        <div class="left-col">
            <h2>Talent</h2>
            <div class="details">
                <div class="detail-name">
                    <h3>Art by:</h3>
                </div>
                <div class="detail-value">
                    <ul>
                        <li>
                            @foreach ($singleComic['artists'] as $artist)
                                <a href="#">{{$artist}}, </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
            <div class="details">
                <div class="detail-name">
                    <h3>Written by:</h3>
                </div>
                <div class="detail-value">
                    <ul>
                        <li>
                            @foreach ($singleComic['writers'] as $writer)
                                <a href="#">{{$writer}}, </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-col">
            <h2>Specs</h2>
            <div class="details">
                <div class="detail-name">
                    <h3>Series:</h3>
                </div>
                <div class="detail-value">
                    <ul>
                        <li>
                            <a href="#">{{$singleComic['series']}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="details">
                <div class="detail-name">
                    <h3>U.S. Price:</h3>
                </div>
                <div class="detail-value">
                    <ul>
                        <li>
                            <p>{{$singleComic['price']}}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="details">
                <div class="detail-name">
                    <h3>On Sale Date:</h3>
                </div>
                <div class="detail-value">
                    <ul>
                        <li>
                            <p>{{date('M d Y', strtotime($singleComic['sale_date']))}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section-bottom">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            <span>digital comics</span>
                            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="Digital Comics">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>shop dc</span>
                            <img class="bigger" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="shop dc">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>comic shop locator</span>
                            <img class="other" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Comic Shop Locator">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>subscription</span>
                            <img class="bigger" src="{{asset('img/buy-comics-merchandise.png')}}" alt="Subscription">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<section class="comic-details-section">
    <div class="container">
        <div class="section-top">
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
                                <p>{{$singleComic['sale_date']}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-bottom"></div>
    </div>
</section>
<section class="comic-information-section">
    <div class="container">
        <div class="col-left">
            <h1>{{$singleComic['title']}}</h1>
            <div class="info-box">
                <div class="price-box">
                    <div class="price">
                        <span class="text-opacity">U.S. Price:</span>
                        <span>{{$singleComic['price']}}</span>
                    </div>
                    <div class="available">
                        <span class="text-opacity">AVAILABLE</span>
                    </div>
                </div>
                <div class="availability-box">
                    <span>Check Availability</span>
                    <i class="fa-solid fa-caret-down caret"></i>
                </div>
            </div>
            <p class="plot">{{$singleComic['description']}}</p>
        </div>
        <div class="col-right">
            <div class="ad">Advertisement</div>
            <img src="{{asset('img/adv.jpg')}}" alt="advertisement">
        </div>
    </div>
</section>
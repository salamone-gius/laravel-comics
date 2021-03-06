<header>
    <div class="header-top">
        <div class="container">
            <ul>
                <li>
                    <a href="#">dc power visa</a>
                    <i class="fa-regular fa-registered reg"></i>
                </li>
                <li>
                    <a href="#">additional dc sites</a>
                    <i class="fa-solid fa-caret-down caret"></i>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-bottom container">
        <div class="header-logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC-Logo">
        </div>
        <nav class="header-nav">
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="{{$link['url']}}">{{$link['text']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="header-searchbar">
            <input class="searchbar" placeholder="Search" type="search" name="header-searchbar" id="header-searchbar">
            <button class="search-button" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>
</header>

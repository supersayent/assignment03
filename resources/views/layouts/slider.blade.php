<!--Slider-->
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/slider-with-lightbox1.jpg') }}" alt="Los Angeles" width="1000" height="700">
            <div class="carousel-caption">
                <h3 class="sliderh3">Los Angeles</h3>
                <p>We had such a great time in LA!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider-with-lightbox2.jpg') }}" alt="Chicago" width="1000" height="700">
            <div class="carousel-caption">
                <h3 class="sliderh3">Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider-with-lightbox3.jpg') }}" alt="New York" width="1000" height="700">
            <div class="carousel-caption">
                <h3 class="sliderh3">New York</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slider-with-lightbox4.jpg') }}" alt="Kolla" width="1000" height="700">
            <div class="carousel-caption">
                <h3 class="sliderh3">New York</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

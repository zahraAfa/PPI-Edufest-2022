@extends('layouts.main')

@section('body')

<header>
    <!-- <div class="header-parallax-container"> -->
        <h1 class="big-title translate" data-speed="0.1">PPI Edufest 2022</h1>

        <img src="assets/img/header/header-layer2.png" class="header-layer2 translate" data-speed="-0.2" alt="">
        <img src="assets/img/header/header-layer1.png" class="header-layer1 translate" data-speed="-0.09" alt="">
        <div class="carousel-slider" data-speed="0.3">
            <div class="carousel-slide" style="background-color: var(--Purple);"></div>
            <div class="carousel-slide" style="background-color: var(--SkyBlue);"></div>
        </div>
        <img src="assets/img/header/cloud.png" class="header-back-layer translate" data-speed="-0.09" alt="">
    <!-- </div> -->
</header>
<section>
    <div class="shadow"></div>
    <div class="desc-container">
        <div class="desc-section">
            <div class="youtube-cont" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                <iframe src="https://www.youtube.com/embed/73CQ4pkrauA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="desc-cont" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                <h1>PPI Edufest 2022</h1>
                <p>PPI Edufest 2021: Journey of The World’s Education across Indonesia adalah program yang mempertemukan pelajar Indonesia di luar negeri dan pelajar Indonesia dalam negeri yang ingin melanjutkan pendidikan ke luar negeri melalui pameran pendidikan yang diinisiasi oleh Festival Luar Negeri (FELARI) Perhimpunan Pelajar Indonesia Dunia (PPI Dunia) dan didukung oleh Duta Felari PPI Dunia di 34 provinsi di seluruh Indonesia</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="agenda-container">
        <div class="agenda-wrapper">
            <div class="h1-title-wrapper">
                <h1 class="h1-section-title h1-section-agenda">Agenda</h1>
            </div>
            <div class="agenda-section responsive-slider">
                <div class="card agenda-card" style="border-radius: 20px; width: 100px!important; padding: 20px; margin-right: 5px; margin-left: 5px;" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                    <img class="card-img-top" src="assets/img/header/sky.png" alt="Card image cap" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card agenda-card" style="border-radius: 20px; width: 100px!important; padding: 20px; margin-right: 5px; margin-left: 5px;" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                    <img class="card-img-top" src="assets/img/header/sky.png" alt="Card image cap" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card agenda-card" style="border-radius: 20px; width: 100px!important; padding: 20px; margin-right: 5px; margin-left: 5px;" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                    <img class="card-img-top" src="assets/img/header/sky.png" alt="Card image cap" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card agenda-card" style="border-radius: 20px; width: 100px!important; padding: 20px; margin-right: 5px; margin-left: 5px;" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                    <img class="card-img-top" src="assets/img/header/sky.png" alt="Card image cap" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card agenda-card" style="border-radius: 20px; width: 100px!important; padding: 20px; margin-right: 5px; margin-left: 5px;" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                    <img class="card-img-top" src="assets/img/header/sky.png" alt="Card image cap" style="border-radius: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@extends('layouts.main')

@section('body')

<header>
    <!-- <div class="header-parallax-container"> -->
        <h1 class="big-title translate" data-speed="0.1">PPI Edufest 2022</h1>

        <img src="assets/img/header/person.png" class="person translate" data-speed="-0.25" alt="">
        <img src="assets/img/header/mountain1.png" class="mountain1 translate" data-speed="-0.2" alt="">
        <div class="carousel-slider" data-speed="0.3">
            <div class="carousel-slide"><img src="assets/img/header/carousel1.jpeg" alt="Header"></div>
            <div class="carousel-slide"><img src="assets/img/header/carousel1.jpeg" alt="Header"></div>
            <div class="carousel-slide"><img src="assets/img/header/carousel1.jpeg" alt="Header"></div>
            <div class="carousel-slide"><img src="assets/img/header/carousel1.jpeg" alt="Header"></div>
            <div class="carousel-slide"><img src="assets/img/header/carousel1.jpeg" alt="Header"></div>
        </div>
    <!-- </div> -->
</header>
<section>
    <div class="shadow"></div>
    <div class="desc-container">
        <div class="desc-section">
            <div class="youtube-cont">
                <iframe src="https://www.youtube.com/embed/73CQ4pkrauA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="desc-cont">
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
                <h1 class="h1-section-title">Agenda</h1>
            </div>
            <div class="agenda-section">
                <div class="card agenda-card" style="border-radius: 20px; width: 18rem; padding: 20px;" data-aos="fade-up">
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
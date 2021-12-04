@extends('layouts.main')

@section('Home')

<header>
    <!-- <div class="header-parallax-container"> -->
        <h1 class="big-title translate" data-speed="0.1">PPI Edufest<br/>2022</h1>
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
    <div class="carousel-container">
        <img src="assets/img/header/header-frame-front2.svg" alt="" class="carousel-container-frame">
        <div class="carousel-section carousel-slider" data-aos="zoom-in-up" data-aos-delay="0" data-aos-duration="1000" style="overflow: hidden; border-radius: 0px 0px 20px 20px!important;">
            <div class="carousel-slide"><img src="assets/img/header/carousel1.jpg" alt=""></div>
            <div class="carousel-slide"><img src="assets/img/header/carousel1.jpg" alt=""></div>
        </div>
        <img src="assets/img/header/header-frame-back2.svg" alt="" class="carousel-container-frame2">
    </div>
</section>
<section>
    <div class="shadow"></div>
    <div class="desc-container">
        <div class="desc-section">
            <div class="youtube-cont">
                <iframe data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000" src="https://www.youtube.com/embed/73CQ4pkrauA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="desc-cont">
                <div class="edufest-desc-h1" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                    <h1 class="effect-pop-slide-r">PPI Edufest</h1>
                    <h1 class="effect-pop-slide-r">2022</h1>
                </div>
                <p data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">PPI Edufest 2021: Journey of The World’s Education across Indonesia adalah program yang mempertemukan pelajar Indonesia di luar negeri dan pelajar Indonesia dalam negeri yang ingin melanjutkan pendidikan ke luar negeri melalui pameran pendidikan yang diinisiasi oleh Festival Luar Negeri (FELARI) Perhimpunan Pelajar Indonesia Dunia (PPI Dunia) dan didukung oleh Duta Felari PPI Dunia di 34 provinsi di seluruh Indonesia</p>
                <button class="button-56" role="button">merchandise</button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="agenda-container">
        <div class="agenda-wrapper">
            <h1 class="agenda-sec-h1 effect-pop-up">AGENDA</h1>
            <div class="agenda-section">
                <ul id="lightSlider-agenda-section" class="responsive-slider">
                    <li>
                        <a href="" class="custom-card">
                            <div class="img__card-container">
                                <img src="assets/img/header/carousel1.jpg" class="card__image" alt="" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title">Event Title Event Title</h3>
                                  <span class="card__status">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="custom-card">
                            <div class="img__card-container">
                                <img src="assets/img/header/carousel1.jpg" class="card__image" alt="" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title">Event Title Event Title</h3>
                                  <span class="card__status">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="custom-card">
                            <div class="img__card-container">
                                <img src="assets/img/header/carousel1.jpg" class="card__image" alt="" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title">Event Title Event Title</h3>
                                  <span class="card__status">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="custom-card">
                            <div class="img__card-container">
                                <img src="assets/img/header/carousel1.jpg" class="card__image" alt="" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title">Event Title Event Title</h3>
                                  <span class="card__status">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="custom-card">
                            <div class="img__card-container">
                                <img src="assets/img/header/carousel1.jpg" class="card__image" alt="" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title">Event Title Event Title</h3>
                                  <span class="card__status">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <p class="swipe-for-more">Swipe for more >></p>
        </div>
    </div>
</section>

@endsection

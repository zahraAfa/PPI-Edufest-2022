@extends('layouts.main')

@section('Home')

    <header>
        <img src="assets/img/header/main-header-text.png" class="header-layer1-text translate" data-speed="0.6" alt="Header">
        <img src="assets/img/header/main-header-layer1-left.png" class="header-layer1-left translateX" data-speed="-0.6"
            alt="Header">
        <img src="assets/img/header/main-header-layer1-right.png" class="header-layer1-right translateX" data-speed="0.6"
            alt="Header">
        <img src="assets/img/header/main-header-layer2-left.png" class="header-layer2-left translate" data-speed="1"
            alt="Header">
        <img src="assets/img/header/main-header-layer2-right.png" class="header-layer2-right translate" data-speed="1"
            alt="Header">
        <img src="assets/img/header/main-header-layer3-left.png" class="header-layer3-left translate" data-speed="0.1"
            alt="Header">
        <img src="assets/img/header/main-header-layer3-right.png" class="header-layer3-right translate" data-speed="0.1"
            alt="Header">
        <img src="assets/img/header/main-header-map.png" class="header-back-layer translate" data-speed="-0.9" alt="Header">
    </header>
    <div class="flags-container">
        <img src="assets/img/header/main-header-flags.svg" class="flags-flowing" alt="flag">
    </div>
    <section>
        <div class="carousel-container">
            <img src="assets/img/header/header-frame-front-white.svg" alt="" class="carousel-container-frame">
            <div class="carousel-section carousel-slider"
                style="overflow: hidden; border-radius: 0px 0px 15px 15px!important;">
                <div class="carousel-slide"><img src="assets/img/header/carousel1.jpg" alt=""></div>
                <div class="carousel-slide"><img src="assets/img/header/carousel2.jpeg" alt=""></div>
            </div>
            <img src="assets/img/header/header-frame-back-white.svg" alt="" class="carousel-container-frame2">
        </div>
    </section>
    <section>
        <div class="shadow"></div>
        <div class="desc-container">
            <div class="desc-section">
                <div class="youtube-cont">
                    <iframe data-aos="fade-right" data-aos-delay="20" data-aos-duration="1000"
                        src="https://www.youtube.com/embed/73CQ4pkrauA" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="desc-cont" data-aos="fade-left" data-aos-delay="20" data-aos-duration="1000">
                    <div class="edufest-desc-h1">
                        <h1 class="effect-pop-slide-r">PPI Edufest</h1>
                        <h1 class="effect-pop-slide-r">2022</h1>
                    </div>
                    <p>PPI Edufest 2022: Journey of The World’s Education across Indonesia adalah program yang mempertemukan
                        pelajar Indonesia di luar negeri dan pelajar Indonesia dalam negeri yang ingin melanjutkan
                        pendidikan ke luar negeri melalui pameran pendidikan yang diinisiasi oleh Festival Luar Negeri
                        (FELARI) Perhimpunan Pelajar Indonesia Dunia (PPI Dunia) dan didukung oleh Duta Felari PPI Dunia di
                        34 provinsi di seluruh Indonesia</p>
                    <button class="button-56" role="button">merchandise</button>
                </div>
            </div>
        </div>
    </section>
    <div class="home-blank-transition"></div>
    <section>
        <div class="home-timeline-container">
            <div class="home-timeline-wrapper">
                <img class="home-timeline-map" src="" alt="">
            </div>
        </div>
    </section>
    <div class="home-blank-transition"></div>
    <section>
        <div class="home-articles-container">
            <div class="home-articles-wrapper">
                <button class="home-articles-button button-56" role="button">Lihat Artikel</button>
            </div>
        </div>
    </section>
    <div class="home-blank-transition"></div>
    <section>
        <div class="agenda-container">

            <div class="agenda-wrapper">
                <h1 class="agenda-sec-h1 effect-pop-up">- AGENDA -</h1>
                <div
                    class="agenda-modal-body-wrapper d-lg-flex align-self-center justify-content-lg-evenly justify-content-sm-center text-white">
                    <div class="agenda-modal-row me-5">
                        <div class="agenda-modal-col agenda-modal-grey"></div>
                        <p class="agenda-modal-desc">Coming Soon</p>
                    </div>
                    <div class="agenda-modal-row me-5">
                        <div class="agenda-modal-col agenda-modal-green"></div>
                        <p class="agenda-modal-desc">Open Registration</p>
                    </div>
                    <div class="agenda-modal-row me-5">
                        <div class="agenda-modal-col agenda-modal-orange"></div>
                        <p class="agenda-modal-desc">Acara Sudah Dekat</p>
                    </div>
                </div>
                <div class="agenda-section">
                    <ul id="lightSlider-agenda-section" class="responsive-slider">
                    </ul>
                </div>
                <p class="swipe-for-more ">Swipe for more >></p>
                <a href="/agenda" class="text-decoration-none"><button class="home-agenda-button button-56 mt-sm-2 mt-lg-5 "
                        role="button">Lihat Semua Agenda</button></a>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "../../../api/events/read",
                success: function(result) {
                    var listEvent = '';
                    var eventItems = '';
                    var ToDate = new Date();
                    var date2days = new Date();
                    var date2weeks = new Date();
                    ToDate = ToDate.setDate(ToDate.getDate() - 1);
                    date2days = date2days.setDate(date2days.getDate() + 2);
                    date2weeks = date2weeks.setDate(date2weeks.getDate() + 14);
                    if (result.length === 0) {
                        $(".agenda-container").hide();
                    } else {
                        $.each(result, function(key, event) {
                            if (new Date(event["date"]).getTime() < ToDate) {
                                listEvent += `<li>
                                <a href="/acara/${event["id"]}" class="custom-card">
                                        <div class="img__card-container">
                                            <img src="../../storage/img/events/${event["id"]}/${event["picture"]}" class="card__image" alt="" />
                                        </div>
                                        <div class="card__overlay">
                                            <div class="card__header">
                                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                                    <path />
                                                </svg>
                                                <div class="card__header-text">
                                                    <h3 class="card__title">${event["title"]}</h3>
                                                    <span class="card__status"><i
                                                            class="material-icons-round">event</i>${event["date"]}</span>
                                                </div>
                                            </div>
                                            <p class="card__description">${event["detail"]}</p>
                                        </div>
                                    </a>
                                </li>`;
                            } else if (new Date(event["date"]).getTime() >
                                date2weeks) {
                                listEvent += `<li>
                                    <a href="/acara/${event["id"]}" class="custom-card">
                                            <div class="img__card-container">
                                                <img src="../../storage/img/events/${event["id"]}/${event["picture"]}" class="card__image" alt="" />
                                            </div>
                                            <div class="card__overlay path_grey">
                                                <div class="card__header path_grey">
                                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="path_grey" />
                                                    </svg>
                                                    <div class="card__header-text">
                                                        <h3 class="card__title">${event["title"]}</h3>
                                                        <span class="card__status"><i
                                                                class="material-icons-round">event</i>${event["date"]}</span>
                                                    </div>
                                                </div>
                                                <p class="card__description">${event["detail"]}</p>
                                            </div>
                                        </a>
                                    </li>`;
                            } else {
                                listEvent += `<li>
                                    <a href="/acara/${event["id"]}" class="custom-card">
                                            <div class="img__card-container">
                                                <img src="../../storage/img/events/${event["id"]}/${event["picture"]}" class="card__image" alt="" />
                                            </div>
                                            <div class="card__overlay path_green">
                                                <div class="card__header path_green">
                                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="path_green" />
                                                    </svg>
                                                    <div class="card__header-text">
                                                        <h3 class="card__title">${event["title"]}</h3>
                                                        <span class="card__status"><i
                                                                class="material-icons-round">event</i>${event["date"]}</span>
                                                    </div>
                                                </div>
                                                <p class="card__description">${event["detail"]}</p>
                                            </div>
                                        </a>
                                    </li>`;
                            }
                        });
                        $('#lightSlider-agenda-section').append(listEvent);
                    }
                    agendaSlider();
                }
            });
        });
    </script>
    <div class="home-blank-transition"></div>

@endsection

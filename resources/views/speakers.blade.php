@extends('layouts.main')

@section('Pembicara')

    <section>
        <div class="sp-speakers-container">
            <div class="sp-speaker-col">
                <h1>BINTANG TAMU<br />SPECIAL</h1>
                <div class="sp-speaker-img-cont">
                    <img src="assets/img/header/bintang-tamu-special-test.png" alt="Bintang Tamu Spesial">
                </div>
            </div>
            <header class="sp-speaker-header-deco">
                <img class="translateX" data-speed="0.6" src="assets/img/header/header-deco-right.png" alt="">
                <img class="translateX" data-speed="-0.6" src="assets/img/header/header-deco-left.png" alt="">
            </header>
            <div class="sp-scroll-down">
                <p>Scroll Down</p>
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </div>
            <div class="sp-edufest-rounded"><img src="../assets/img/logos/edufest-round-text.svg" alt="edufest 2022"></div>
        </div>
        <div class="speakers-container">
            <div class="speakers-wrapper">
                <div class="speakers-h1 effect-pop-up">
                    <h1 class="speakers-title" data-aos="fade-down" data-aos-delay="30" data-aos-duration="2000">PEMBICARA
                    </h1>
                </div>
                <div class="speakers-content">
                    <div class="filters-div">
                        <input class="form-control search-bar speakers-search-bar" id="search-input" type="text"
                            placeholder="Search..">
                        <div class="filter-separator"></div>
                        <select name="Kawasan" id="kawasan-filter" class="filter-bar">
                            <option value="all">Show all</option>
                            <option value="timtengka">Timur Tengah dan Afrika</option>
                            <option value="aseo">Asia dan Oseania</option>
                            <option value="aerop">Eropa dan Amerika</option>
                        </select>
                    </div>
                    <div class="speakers-grid">
                    </div>
                </div>
            </div>
            <div class="speaker-blank-transition"></div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "../../../api/speakers/read",
                success: function(result) {
                    var listSpeaker = '';
                    $.each(result, function(key, speaker) {
                        listSpeaker +=
                            `
                              <div class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                              <div class="img__card-container">
                                <img src="../../storage/img/speakers/${speaker["id"]}/${speaker["picture"]}" class="card__image" alt="Speaker" />
                              </div>
                              <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                        <path />
                                    </svg>
                                    <div class="card__header-text">
                                        <h3 class="card__title speaker__name">${speaker['name']}</h3>
                                        <span class="card__status speaker__ppi"><i
                                                class="material-icons-round">public</i>${speaker['ppi']}</span>
                                    </div>
                                </div>
                                <p class="card__description speaker__desc">${speaker['detail']}</p>
                              </div>
                              </div>
                            `
                    });
                    $('.speakers-grid').append(listSpeaker);
                }
            });
        });
    </script>
@endsection

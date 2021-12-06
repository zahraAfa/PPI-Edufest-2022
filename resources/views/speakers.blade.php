@extends('layouts.main')

@section('Pembicara')

<section>
    <div class="sp-speakers-container">
        <div class="sp-header-row">
            <div class="sp-speaker-headerbox">
                <h1>Bintang</h1>
                <h1>Tamu</h1>
                <div class="sp-speaker-row">
                    <h1>Spesial / </h1><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="13.5" cy="13.5" r="13.5" fill="#DEEC90"/></svg>
                </div>
            </div>
            <div class="scroll-sp-x-cont">
                <div class="sp-speakers-items">
                    <div class="sp-speakers-img-container">
                        <img src="assets/img/bg/bg2.jpg" alt="Speakers">
                    </div>
                    <div class="sp-speakers-img-container">
                        <img src="assets/img/bg/bg2.jpg" alt="Speakers">
                    </div>
                    <div class="sp-speakers-img-container">
                        <img src="assets/img/bg/bg2.jpg" alt="Speakers">
                    </div>
                    <div class="sp-speakers-img-container">
                        <img src="assets/img/bg/bg2.jpg" alt="Speakers">
                    </div>
                    <div class="sp-speakers-img-container">
                        <img src="assets/img/bg/bg2.jpg" alt="Speakers">
                    </div>
                </div>
            </div>
            {{-- <p>Swipe for more >></p> --}}
        </div>
        <div class="docs-scroll-down">
            <p>Scroll Down</p>
            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </div>
        <div class="docs-edufest-rounded"><img src="../assets/img/logos/edufest-round-text.svg" alt="edufest 2022"></div>
    </div>
    <div class="speakers-container">
        <div class="speakers-wrapper">
            <div class="speakers-h1">
                <h1 class="speakers-title" data-aos="fade-down" data-aos-delay="30" data-aos-duration="2000">Pembicara</h1>
            </div>
            <div class="speakers-content">
                <div class="filters-div">
                    <input class="form-control search-bar speakers-search-bar" id="search-input" type="text" placeholder="Search..">
                    <div class="filter-separator"></div>
                    <select name="Kawasan" id="kawasan-filter" class="filter-bar">
                        <option value="all">Show all</option>
                        <option value="timtengka">Timur Tengah dan Afrika</option>
                        <option value="aseo">Asia dan Oseania</option>
                        <option value="aerop">Eropa dan Amerika</option>
                    </select>
                </div>
                {{-- Both grid and the card has not designed yet --}}
                <div class="speakers-grid">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                        <div class="speaker-img-cont">
                            <img src="assets/img/header/carousel1.jpeg" alt="Speaker">
                        </div>
                        <div class="speaker-text-cont"></div>
                    </div>
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                        <div class="speaker-img-cont">
                            <img src="assets/img/header/carousel1.jpeg" alt="Speaker">
                        </div>
                        <div class="speaker-text-cont"></div>
                    </div>
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                        <div class="speaker-img-cont">
                            <img src="assets/img/header/carousel1.jpeg" alt="Speaker">
                        </div>
                        <div class="speaker-text-cont"></div>
                    </div>
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                        <div class="speaker-img-cont">
                            <img src="assets/img/header/carousel1.jpeg" alt="Speaker">
                        </div>
                        <div class="speaker-text-cont"></div>
                    </div>
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                        <div class="speaker-img-cont">
                            <img src="assets/img/header/carousel1.jpeg" alt="Speaker">
                        </div>
                        <div class="speaker-text-cont"></div>
                    </div>
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                        <div class="speaker-img-cont">
                            <img src="assets/img/header/carousel1.jpeg" alt="Speaker">
                        </div>
                        <div class="speaker-text-cont"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

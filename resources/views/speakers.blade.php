@extends('layouts.main')

@section('Pembicara')

<section>
    <div class="sp-speakers-container">
        <div class="sp-speakers-wrapper">
            <h1 class="sp-speakers-title" data-aos="fade-down" data-aos-delay="30" data-aos-duration="2000">Bintang Tamu Spesial</h1>
            <div class="sp-speakers-items">
                <div class="sp-speakers-img-container">
                    {{-- Layout for bintang tamu? --}}
                    <img src="" alt="Speakers">
                </div>
            </div>
        </div>
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

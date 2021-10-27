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
                    <div class="filter-bar speakers-filter-bar dropdown show">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Show All
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Timur Tengah dan Afrika</a>
                            <a class="dropdown-item" href="#">Asia dan Oseania</a>
                            <a class="dropdown-item" href="#">Eropa dan Amerika</a>
                        </div>
                    </div> 
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
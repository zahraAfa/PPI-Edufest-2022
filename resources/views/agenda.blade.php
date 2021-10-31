@extends('layouts.main')

@section('Agenda')

<section>
    <div class="agenda-container">
        <div class="agenda-wrapper">
            <div class="agenda-header">
                <h1 class="agenda-h1">Agenda</h1>
            </div>
            <div class="calendar-agenda-wrapper">
                <div class="agenda-calendar">
                    @include('layouts.calendar')
                </div>
                <div class="agenda-body-container">
                    <div class="filters-div agenda-filters">
                        <input class="form-control search-bar agenda-search-bar" id="search-input" type="text" placeholder="Search..">
                        <div class="filter-separator"></div>
                        <div class="filter-bar agenda-filter-bar dropdown show">
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
                    <div class="agenda-grid">
                        <div class="agenda-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                            <div class="agenda-img-cont">
                                <img src="assets/img/header/carousel1.jpeg" alt="agenda">
                            </div>
                            <div class="agenda-text-cont"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

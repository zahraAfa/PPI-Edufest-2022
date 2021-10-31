@extends('layouts.main')

@section('Agenda')

<section>
    <div class="agenda-page-container">
        <div class="agenda-page-wrapper">
            <div class="agenda-page-header">
                <h1 class="agenda-page-h1">Agenda</h1>
            </div>
            <div class="calendar-agenda-page-wrapper">
                <div class="agenda-page-calendar">
                    @include('layouts.calendar')
                </div>
                <div class="agenda-page-body-container">
                    <div class="filters-div agenda-page-filters">
                        <input class="form-control search-bar agenda-page-search-bar" id="search-input" type="text" placeholder="Search..">
                        <div class="filter-separator"></div>
                        {{-- <form action="" class="filter-bar"> --}}
                            <select name="Kawasan" id="kawasan-filter" class="filter-bar">
                                <option value="all">Show all</option>
                                <option value="timtengka">Timur Tengah dan Afrika</option>
                                <option value="aseo">Asia dan Oseania</option>
                                <option value="aerop">Eropa dan Amerika</option>
                            </select>
                          {{-- </form> --}}
                        {{-- <div class="filter-bar agenda-page-filter-bar dropdown show">
                            <a class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Show All
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Timur Tengah dan Afrika</a>
                                <a class="dropdown-item" href="#">Asia dan Oseania</a>
                                <a class="dropdown-item" href="#">Eropa dan Amerika</a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="agenda-page-grid" href="/">
                        <a class="agenda-page-card" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1000">
                            <div class="agenda-page-img-cont">
                                <img src="assets/img/header/carousel1.jpeg" alt="agenda">
                            </div>
                            <div class="agenda-page-text-cont">
                                <h3 class="agenda-page-name-card">Event Name</h3>
                                <p class="agenda-page-date-card">2021-01-01</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

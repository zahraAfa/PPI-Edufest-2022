@extends('layouts.main')

@section('Agenda')

<section>
    <div class="agenda-page-container">
        <div class="agenda-page-wrapper">
            <header class="agenda-page-header">
                <h1 class="agenda-page-h1 translate" data-speed="0.6">AGENDA</h1>
                <div class="agenda-scroll-down">
                    <p>Scroll Down</p>
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </div>
            </header>
            <div class="calendar-agenda-page-wrapper">
                <div class="agenda-page-calendar">
                    @include('layouts.calendar')
                </div>
                <div class="agenda-page-body-container">
                    <div class="filters-div agenda-page-filters">
                        <input class="form-control search-bar agenda-page-search-bar" id="search-input" type="text" placeholder="Search..">
                        <div class="filter-separator"></div>
                            <select name="Kawasan" id="kawasan-filter" class="filter-bar">
                                <option value="all">Show all</option>
                                <option value="timtengka">Timur Tengah dan Afrika</option>
                                <option value="aseo">Asia dan Oseania</option>
                                <option value="aerop">Eropa dan Amerika</option>
                            </select>
                    </div>
                    <div class="agenda-page-grid">
                        <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                            <div class="img__card-container">
                                <img src="assets/img/bg/event-img-test.png" class="card__image" alt="Speaker" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title speaker__name">Event Name</h3>
                                  <span class="card__status speaker__ppi">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                        <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                            <div class="img__card-container">
                                <img src="assets/img/bg/event-img-test.png" class="card__image" alt="Speaker" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title speaker__name">Event Name</h3>
                                  <span class="card__status speaker__ppi">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                        <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                            <div class="img__card-container">
                                <img src="assets/img/bg/event-img-test.png" class="card__image" alt="Speaker" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title speaker__name">Event Name</h3>
                                  <span class="card__status speaker__ppi">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                        <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                            <div class="img__card-container">
                                <img src="assets/img/bg/event-img-test.png" class="card__image" alt="Speaker" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title speaker__name">Event Name</h3>
                                  <span class="card__status speaker__ppi">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                        <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                            <div class="img__card-container">
                                <img src="assets/img/bg/event-img-test.png" class="card__image" alt="Speaker" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title speaker__name">Event Name</h3>
                                  <span class="card__status speaker__ppi">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                        <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                            <div class="img__card-container">
                                <img src="assets/img/bg/event-img-test.png" class="card__image" alt="Speaker" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title speaker__name">Event Name</h3>
                                  <span class="card__status speaker__ppi">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                        <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                            <div class="img__card-container">
                                <img src="assets/img/bg/event-img-test.png" class="card__image" alt="Speaker" />
                            </div>
                            <div class="card__overlay">
                              <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                <div class="card__header-text">
                                  <h3 class="card__title speaker__name">Event Name</h3>
                                  <span class="card__status speaker__ppi">2022-01-01</span>
                                </div>
                              </div>
                              <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

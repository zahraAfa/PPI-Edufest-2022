@extends('layouts.main')

@section('Acara')

<section>
    <div class="event-container">
        <div class="event-header">
            <div class="event-header-row">
                <img class="effect-pop-up" src="../assets/img/bg/event-img-test.png" alt="event">
                <h1 class="effect-pop-slide-r">Event Title Event Title Event Title Event Title </h1>
            </div>
            <div class="event-img-blur-cover">
                <img src="../assets/img/bg/event-img-test.png" alt="">
            </div>
        </div>
        <div class="event-wrapper">
            <div class="event-detail-section">
                <div class="event-time-info effect-pop-slide-r">
                    <h3><span class="fa fa-calendar" style="margin-right: 10px"></span>Waktu Pelaksanaan: <span class="effect-pop-up">2022-01-01</span></h3>
                </div>
                <div class="event-deadline-info effect-pop-slide-r">
                    <h4>Penutupan Pendaftaran: <span class="effect-pop-up">2022-01-02</span>, 1 jam sebelum acara dimulai</h4>
                </div>
                <div class="events-speakers-grid">
                    <div class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                        <div class="img__card-container">
                            <img src="assets/img/bg/speaker2.png" class="card__image" alt="Speaker" />
                        </div>
                        <div class="card__overlay">
                          <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <div class="card__header-text">
                              <h3 class="card__title speaker__name">Anisa Fatimah Azzahra</h3>
                              <span class="card__status speaker__ppi">PPI Malaysia</span>
                            </div>
                          </div>
                          <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </div>
                    <div class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                        <div class="img__card-container">
                            <img src="assets/img/bg/speaker2.png" class="card__image" alt="Speaker" />
                        </div>
                        <div class="card__overlay">
                          <div class="card__header">
                            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                            <div class="card__header-text">
                              <h3 class="card__title speaker__name">Anisa Fatimah Azzahra</h3>
                              <span class="card__status speaker__ppi">PPI Malaysia</span>
                            </div>
                          </div>
                          <p class="card__description speaker__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
                        </div>
                    </div>
                </div>
                <div class="event-description effect-pop-slide-r">
                    <h4>- Description -</h4>
                    <p>Aute ullamco minim id est irure qui mollit dolor cupidatat do do adipisicing. Velit adipisicing ad aliquip commodo ipsum. Et ut dolore occaecat deserunt sint do aliquip laborum occaecat irure tempor occaecat Lorem consequat.</p>
                </div>
            </div>
            <div class="event-form-section"></div>
        </div>
    </div>
</section>

@endsection

@extends('layouts.main')

@section('Acara')
    <section>
        <div class="event-container">
            <div class="event-header">
                <div class="event-header-row">
                    <img class="effect-pop-up" src="/assets/img/bg/event-img-test.png" alt="event">
                    <h1 class="effect-pop-slide-r">{{ $event->title }}</h1>
                </div>
                <div class="event-img-blur-cover">
                    <img src="../../storage/img/events/{{ $event->id . '/' . $event->picture }}" alt="">
                </div>
            </div>
            <div class="event-wrapper">
                <div class="event-detail-section">
                    <div class="event-time-info effect-pop-slide-r">
                        <h3><span class="fa fa-calendar" style="margin-right: 10px"></span>Waktu Pelaksanaan: <span
                                class="effect-pop-up">{{ $event->date }}</span></h3>
                    </div>
                    <div class="event-deadline-info effect-pop-slide-r">
                        <h4>Penutupan Pendaftaran: <span class="effect-pop-up">{{ $event->date }}</span>, 1 jam sebelum
                            acara dimulai</h4>
                    </div>
                    <div class="events-speakers-grid">
                        @foreach ($speakers as $speaker)
                            <div class="custom-card" data-aos="fade-up" data-aos-delay="30" data-aos-duration="2000">
                                <div class="img__card-container">
                                    <img src="../../storage/img/speakers/{{  $speaker->id . '/' . $speaker->picture}}" class="card__image" alt="Speaker" />
                                </div>
                                <div class="card__overlay">
                                    <div class="card__header">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path />
                                        </svg>
                                        <div class="card__header-text">
                                            <h3 class="card__title speaker__name">{{ $speaker->name }}</h3>
                                            <span class="card__status speaker__ppi"><i
                                                    class="material-icons-round">public</i>{{ $speaker->ppi }}</span>
                                        </div>
                                    </div>
                                    <p class="card__description speaker__desc">{{ $speaker->detail }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="event-description effect-pop-slide-r">
                        <h4>- Description -</h4>
                        <p>{{ $event->detail }}</p>
                    </div>
                </div>
                <div class="event-form-section"></div>
            </div>
        </div>
    </section>
@endsection

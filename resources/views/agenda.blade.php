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
                            <input class="form-control search-bar agenda-page-search-bar" id="search-input" type="text"
                                placeholder="Search..">
                            <div class="filter-separator"></div>
                            <select name="Kawasan" id="kawasan-filter" class="filter-bar">
                                <option value="all">Show all</option>
                                <option value="timtengka">Timur Tengah dan Afrika</option>
                                <option value="aseo">Asia dan Oseania</option>
                                <option value="aerop">Eropa dan Amerika</option>
                            </select>
                        </div>
                        <div class="agenda-page-grid">
                        </div>
                    </div>
                </div>
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
                    $.each(result, function(key, event) {
                        if (new Date(event["date"]).getTime() <= ToDate.getTime()) {
                            listEvent += `
                            <a href="{{ route('usr-event') }}" class="custom-card" data-aos="fade-up"
                                data-aos-delay="30" data-aos-duration="2000">
                                <div class="img__card-container">
                                    <img src="../../storage/img/events/${event["id"]}/${event["picture"]}" class="card__image" alt="" />
                                </div>
                                <div class="card__overlay path_red">
                                    <div class="card__header path_red">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path class="path_red" ><path />
                                        </svg>
                                        <div class="card__header-text">
                                            <h3 class="card__title speaker__name">${event["title"]}</h3>
                                            <span class="card__status speaker__ppi"><i
                                                    class="material-icons-round">event</i>${event["date"]}</span>
                                        </div>
                                    </div>
                                    <p class="card__description speaker__desc path_red">${event["detail"]}</p>
                                </div>
                            </a>`;
                        } else {
                            listEvent += `
                            <a href="/acara/${ event['id'] }" class="custom-card" data-aos="fade-up"
                                data-aos-delay="30" data-aos-duration="2000">
                                <div class="img__card-container">
                                    <img src="../../storage/img/events/${event["id"]}/${event["picture"]}" class="card__image" alt="" />
                                </div>
                                <div class="card__overlay path_green">
                                    <div class="card__header path_green">
                                        <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                            <path class="path_green"><path />
                                        </svg>
                                        <div class="card__header-text">
                                            <h3 class="card__title speaker__name">${event["title"]}</h3>
                                            <span class="card__status speaker__ppi"><i
                                                    class="material-icons-round">event</i>${event["date"]}</span>
                                        </div>
                                    </div>
                                    <p class="card__description speaker__desc">${event["detail"]}</p>
                                </div>
                            </a>`;
                        }
                    });
                    $('.agenda-page-grid').append(listEvent);

                }
            });
        });
    </script>

@endsection

@extends('layouts.main')

@section('Agenda')

<section>
    <div class="agenda-container">
        <div class="agenda-wrapper">
            <div class="agenda-header">
                <h1 class="agenda-h1">Agenda</h1>
            </div>
            <div class="agenda-calendar">
                @include('layouts.calendar')
            </div>
            <div class="agenda-body-container">
                <div class="agenda-filters"></div>
                <div class="agenda-grid">
                    <div class="agenda-card"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

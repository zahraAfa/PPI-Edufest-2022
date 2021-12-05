@extends('layouts.main')

@section('Docs')

<section>
    <div class="docs-container">
        <div class="docs-header">
            {{-- <h1  data-aos="fade-down" data-aos-delay="20" data-aos-duration="2000">Dokumentasi</h1> --}}
            <div class="docs-headerbox">
                <h1>Dokumen-</h1>
                <div class="doc-row">
                    <h1>tasi / </h1><svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="13.5" cy="13.5" r="13.5" fill="#DEEC90"/></svg>
                </div>
            </div>
            <div class="docs-scroll-down">
                <p>Scroll Down</p>
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </div>
            <div class="docs-edufest-rounded"><img src="../assets/img/logos/edufest-round-text.svg" alt="edufest 2022"></div>
        </div>
        {{-- <img src="assets/img/bg/paper-transition-purple.svg" alt="" class="docs-paper-texture-trans"> --}}
        <div class="docs-box-container">
            <div class="docs-box"></div>
        </div>
    </div>
</section>

@endsection

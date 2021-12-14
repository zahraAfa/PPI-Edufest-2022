@extends('layouts.main')

@section('Writing Contest')

<section>
    <header class="wc-index-header">
        <h1 class="wc-index-title translate" data-speed="0.6">WRITING CONTEST</h1>
        <div class="wc-index-header-img">
            <img src="../../assets/img/header/pencil.png" class="wc-index-pencil" alt="">
            <div class="wc-halfcircle translate" data-speed="0.6"></div>
        </div>
        <img class="wc-curve-r translateX" data-speed="0.6" src="../../assets/img/header/header-curve-right.png" alt="">
        <img class="wc-curve-l translateX" data-speed="-0.6" src="../../assets/img/header/header-curve-left.png" alt="">
    </header>
    <div class="wc-index-body">
        <div class="wc-index-body-cont">
            <a class="wc-index-list1 effect-pop-up">
                <div class="wc-folder-tag1">ketentuan umum >></div>
                <div class="wc-folder-outerbox1">
                    <div class="wc-folder-outerbox1-box"></div>
                </div>
            </a>
            <a class="wc-index-list2 effect-pop-up">
                <div class="wc-folder-tag2">pendaftaran >></div>
                <div class="wc-folder-outerbox2">
                    <div class="wc-folder-outerbox2-box"></div>

                </div>
            </a>
            <a class="wc-index-list3 effect-pop-up">
                <div class="wc-folder-tag3">arsip >></div>
                <div class="wc-folder-outerbox3">
                    <div class="wc-folder-outerbox3-box"></div>

                </div>
            </a>
        </div>
    </div>
</section>

@endsection

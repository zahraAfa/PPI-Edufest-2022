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
            <a class="wc-index-list1 effect-pop-up" style="text-decoration: none!important">
                <div class="wc-folder-outerbox1"></div>
                <div class="wc-folder-box1">
                   <div class="wc-folder-box1-tag" style="text-decoration: none!important;">Pendaftaran</div>
                   <div class="wc-folder-box1-arrow"><i class="fa fa-arrow-right"></i></div>
                </div>
            </a>
            <a class="wc-index-list2 effect-pop-up" style="text-decoration: none!important">
                <div class="wc-folder-outerbox2"></div>
                <div class="wc-folder-box2">
                    <div class="wc-folder-box2-tag" style="text-decoration: none!important;">Arsip<br>Writing Contest<br>2021</div>
                    <div class="wc-folder-box2-arrow"><i class="fa fa-arrow-right"></i></div>
                </div>
            </a>
        </div>
        <div class="wc-index-body-cont2">
            <h1>Keterangan Umum</h1>
        </div>
    </div>
</section>

@endsection

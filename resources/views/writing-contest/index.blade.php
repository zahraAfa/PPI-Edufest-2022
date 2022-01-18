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
            <div class="wc-ku-title">
                <h1>Ketentuan Umum</h1>
            </div>
        </div>
        <div class="wc-ku-body-row ku-row-1">
            <div class="ku-row-1-wrapper">
                <h2 class="wc-ku-row1-sec1">Tema</h2>
                <h1 class="wc-ku-row1-sec2">"Sepenggal kisah dari penjuru dunia, sejuta inspirasi untuk Indonesia"</h1>
            </div>
        </div>
        <div class="wc-ku-body-row ku-row-2">
            <div class="ku-row-2-wrapper">
                <div class="wc-ku-row2-sec1">
                    <h1>Subtema</h1>
                </div>
                <div class="wc-ku-row2-sec2">
                    <div class="wc-ku-row2-sec2-box">
                        <p>"Suka duka  mahasiswa Indonesia di luar negeri."</p>
                    </div>
                    <div class="wc-ku-row2-sec2-box">
                        <p>"Kontribusi mahasiswa di luar negeri untuk bangsa Indonesia."</p>
                    </div>
                    <div class="wc-ku-row2-sec2-box">
                        <p>"Perjuangan pelajar meraih beasiswa di luar negeri."</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wc-ku-body-row ku-row-3">
            <div class="wc-ku-row-3-wrapper">
                <div class="wc-ku-row3-sec1">
                    <h1 class="wc-ku-row3-sec1-tema">Syarat Peserta</h1>
                    <div class="wc-ku-row3-sec1-lists">
                        <p>1. Pelajar Indonesia yang aktif menempuh pendidikan di luar negeri.</p>
                        <p>2. Follow akun PPI Edufest.</p>
                    </div>
                </div>
                <div class="wc-ku-row3-sec2">
                    <h1 class="wc-ku-row3-sec2-tema">Ketentuan Penulisan</h1>
                    <div class="wc-ku-row3-sec2-lists">
                        <p>1. Naskah merupakan cerita pendek, memiliki tokoh dan berdialog.</p>
                        <p>2. Premis bebas selama masih berkaitan dengan tema dan subtema.</p>
                        <p>3. Terdiri dari 1000 - 1500 kata.</p>
                        <p>4. A4, Times New Roman, ukuran 12, spasi 1.5 dan margin normal.</p>
                        <p>5. Belum pernah dipublikasikan di manapun sebelumnya.</p>
                        <p>6. Tidak mengandung unsur SARA, pornografi dan plagiarisme.</p>
                        <p>7. Melampirkan gambar-gambar pendukung (opsional).</p>
                        <p>8. Peserta hanya bisa mengirimkan 1 naskah.</p>
                        <p>9. Halaman terakhir berisi profil pendaftar (mak.100 kata) dilengkapi foto diri.</p>
                        <p>10. Semua tulisan yang didaftarkan akan menjadi milik PPI Edufest.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wc-ku-body-row ku-row-4">
            <div class="wc-ku-row-4-wrapper">
                <h1 class="wc-ku-row4-sec1">Penilaian</h1>
                <div class="wc-ku-row4-sec2">
                    <div class="wc-ku-row4-sec2-box">
                        <p>1. Orisinalitas dan kreativitas.</p>
                    </div>
                    <div class="wc-ku-row4-sec2-box">
                        <p>2. Premis yang disuguhkan.</p>
                    </div>
                    <div class="wc-ku-row4-sec2-box">
                        <p>3. Kesesuaian dengan tema.</p>
                    </div>
                    <div class="wc-ku-row4-sec2-box">
                        <p>4. Gaya bahasa dan teknik kepenulisan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wc-ku-body-row ku-row-5">
            <div class="wc-ku-row-5-wrapper">
                <h1 class="wc-ku-row5-sec1">Hadiah</h1>
            </div>
        </div>
        <div class="wc-ku-body-row ku-row-6">
            <div class="wc-ku-row-6-wrapper">
                <div class="wc-ku-row6-sec1">
                    <div class="wc-ku-row6-sec1-box">
                        <h2 class="wc-ku-row6-sec1-tema">Juara 1</h2>
                        <p class="wc-ku-row6-sec1-text">Rp. 2.000.000</p>
                        <p class="wc-ku-row6-sec1-text">Piagam</p>
                        <p class="wc-ku-row6-sec1-text">Merchandise Edufest</p>
                    </div>
                </div>
                <div class="wc-ku-row6-sec1">
                    <div class="wc-ku-row6-sec1-box">
                        <h2 class="wc-ku-row6-sec1-tema">Juara 2</h2>
                        <p class="wc-ku-row6-sec1-text">Rp. 1.500.000,</p>
                        <p class="wc-ku-row6-sec1-text">Piagam</p>
                        <p class="wc-ku-row6-sec1-text">Merchandise Edufest</p>
                    </div>
                    <div class="wc-ku-row6-sec1-box">
                        <h2 class="wc-ku-row6-sec1-tema">Juara 3</h2>
                        <p class="wc-ku-row6-sec1-text">Rp. 1.000.000,</p>
                        <p class="wc-ku-row6-sec1-text">Piagam</p>
                        <p class="wc-ku-row6-sec1-text">Merchandise Edufest</p>
                    </div>
                </div>
                <div class="wc-ku-row6-sec2">
                    <p class="wc-ku-row6-sec2-text">10 naskah terbaik akan diterbitkan dalam bentuk buku, dan 10 penulis akan mendapatkan buku antologinya secara gratis.</p>
                </div>
            </div>
        </div>
        <div class="wc-ku-body-row ku-row-7"></div>
    </div>
</section>

@endsection

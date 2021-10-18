<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edufest</title>
    <!-- Script start -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Script end -->
    <!-- Style start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="stylesheet" href="assets/styles/nav.css" />
    <link rel="stylesheet" href="assets/styles/header.css" />
    <link rel="stylesheet" href="assets/styles/description.css" />
    <link rel="stylesheet" href="assets/styles/box.css" />
    <link rel="stylesheet" href="assets/styles/agenda.css" />
    <!-- Style end -->

    <!-- Favicon start -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/edufest-icon.png">

    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logos/edufest-logo.png"> -->
    <!-- <link rel="manifest" href="assets/favicon/site.webmanifest"> -->
    <!-- Favicon end -->
</head>

<body>
    <div class="page-loader">
        <img class="loading-image" src="assets/img/gif/page-loader-white.gif" alt="Loading..." />
    </div>
    <nav id="navbar">
        <div class="nav-container nav-transparent">
            <div class="nav-body">
                <div class="nav-sections">
                    <ul class="nav-items">
                        <li><a href="#" class="nav-beranda">Beranda</a></li>
                        <li><a href="#" class="nav-pembicara">Pembicara</a></li>
                        <li><a href="#" class="nav-agenda">Agenda</a></li>
                        <li><a href="#" class="nav-writingcont">Writing Contest</a></li>
                        <li><a href="#" class="nav-dokumentasi">Dokumentasi</a></li>
                    </ul>
                    <div class="title-logo">
                        <img src="assets/img/logos/edufest-logo.png" alt="Edufest Logo">
                    </div>
                    <div class="nav-wrap">
                        <div class="menu-toggle">
                            <input type="checkbox">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    @yield('body')

    <script src="assets/scripts/nav.js"></script>
    <script src="assets/scripts/header.js"></script>
    <script src="assets/scripts/page-loader.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
        AOS.init();
    </script>
</body>

</html>
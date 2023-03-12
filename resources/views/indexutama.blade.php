<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Personal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body data-bs-spy="scroll" data-bs-target="navbar-main">

    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- Akhir Navbar --}}

    {{-- Hero Section --}}
    <section class="hero" id="home">
        <link rel="stylesheet" href="css/style.css">
        <div class="px-4 py-5 my-5 text-center" style="color:rgb(255, 255, 255);">
            <h1 class="display-5 fw-bold">Let's Get You On The Road</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Ready to start driving? You're in safe hands. Find out more and book online.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-warning btn-lg href="home">Contact Us</button>
                </div>
            </div>
        </div>
    </section>
    {{-- Akhir Hero --}}

    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}

    {{-- Section CEO --}}
    <section class="row" data-container="container" id="ceotalk">
        <div class="=moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
            style="" data-widget="row.column" data-container="container" data-spacing="saaa"
            data-bg-position="left top">

            <div data-widget-id="wid_1516784890_3ciam9hpp"
                class="moto-widget moto-widget-image moto-widget_with-deferred-content moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  "
                data-widget="image">
                <span class="moto-widget-image-link">
                    <img data-src="/img/ceo.png" src="/img/ceo.png"
                        class="moto-widget-image-picture moto-widget-deferred-content lazyloaded" data-id="180"
                        title="" alt="">
                </span>
            </div>
        </div>
        <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto"
            style="" data-widget="row.column" data-container="container" data-spacing="maaa"
            data-bg-position="left top">
            <div class="moto-widget-text-content moto-widget-text-editable">
                <p class="moto-text_system_8">CEO</p>
                <h2 class="moto-text_system_5">HARIS RAHMAN NASUTION</h2>
                <p class="moto-text_normal">We offers Professional Driving Lessons,
                <p></p> CDL instruction,
                certification, refresher courses and re-certification for commercial drivers, Court ordered traffic
                safety programs developed by professional instructors to help you learn to drive safe.
                We're committed to teaching new drivers to drive safely. <p></p> If you have no experience - come and
                gain
                it with us. </p>
            </div>
            <div data-widget-id="wid_1516785059_wb0mhl7pl"
                class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_desktop"
                data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="desktop">
                <div class="moto-widget-spacer-block" style="height:0px"></div>
            </div>
        </div>
    </section>
    {{-- Akhir Section CEO  --}}

    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}


    {{-- Section Instrukture --}}
    <section class="container marketing" id="instrukture">
        <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <img src="/img/adam.png" alt="adam">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <h2 class="fw-normal">Adam Nolan</h2>
                <p>Supervisor, Сertified in car instructor</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <img src="/img/mary.png" alt="mary">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <h2 class="fw-normal">Mary Jones</h2>
                <p>Сertified in car instructor</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <img src="/img/mike.png" alt="mike">
                    <rect width="100%" height="100%" fill="#777" />
                </svg>
                <h2 class="fw-normal">Mike William</h2>
                <p>Сertified in class instructor</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </section>
    {{-- Akhir Section Instrukture --}}


    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}


    {{-- css schedule --}}
    <link rel="stylesheet" href="css\schedule.css">
    {{--  --}}

    {{--  --}}
    @include('partials.schedule')
    {{--  --}}

    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}


    {{-- Section Harga  --}}
    @include('partials.pricing')
    {{-- Akhir Section Harga  --}}

    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}

    {{-- css --}}
    <link rel="stylesheet" href="css\contact.css">
    {{--  --}}
    @include('partials.footer')
    {{--  --}}



</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Personal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<script src="js/bootstrap.bundle.min.js"></script>
<!-- Navbar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/smothscroll.js"></script>
{{--  --}}

{{-- css schedule --}}
<link rel="stylesheet" href="css\schedule.css">
{{--  --}}

{{-- css --}}
<link rel="stylesheet" href="css\contact.css">
{{--  --}}


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
            </div>
        </div>
    </section>
    {{-- Akhir Hero --}}

    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}

    {{-- Ceo Section --}}
    @include('partials.ceo')
    {{--  --}}

    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}

    {{-- Instr --}}
    @include('partials.instrukture')
    {{--  --}}


    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}

    {{--  --}}
    @include('partials.Schedule')
    {{--  --}}

    {{-- Gelombang --}}
    @include('partials.gelombang')
    {{--  --}}

    {{-- Cars --}}
    @include('partials.cars')
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

    @include('partials.contact')
    {{--  --}}



</body>

</html>

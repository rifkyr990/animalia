@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-dark">
    <div class="container">
        <section class="about-page mt-5">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/image/amfibi.png') }}" class="card-img-top w-75">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="fw-bold">
                            <h2 class="fw-bold text-light">Animalia</h2>
                            <p class="text-light">
                                Animalia merupakan aplikasi pengenalan hewan, aplikasi ini ditujukan untuk anak-anak
                                maupun dewasa yang memiliki keinginnan untuk mengenali suara hewan,aplikasi ini di
                                kembangkan oleh <strong>Rifky Ramadhan</strong> seorang <strong>Web Developer</strong>.
                                dan aplikasi ini dikembangkan sejak tanggal 24 November 2022 kemarin.
                            </p>
                            <button class="css-button-rounded--green position-absolute" style="bottom: 100px;"><a
                                    href="{{ url('/animal') }}" class="text-decoration-none text-light">Discover
                                    Now</a></button>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="team-project">
            <div class="row">
                <h2 class="text-center fw-bold text-light">Team Project</h2>
                <div class="row mt-5">
                    <div class="col-sm-3">
                        <div class="card bg-dark shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/image/aing.jpg') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title text-light text-center fw-bold">Rifky Ramadhan</h5>
                                <p class="card-text text-light text-center" style="font-size: 14px;">Fullstack Developer
                                </p>
                                <div class="pb-3">
                                    <button class="btn btn-danger rounded-circle" type="button">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button>
                                    <button class="btn btn-success rounded-circle" type="button">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                    <button class="btn btn-dark rounded-circle" type="button">
                                        <i class="fa-brands fa-github"></i>
                                    </button>
                                </div>
                                <audio controls style="width: 200px;">
                                    <source src="/assets/audio/rifky.mp3" type="audio/ogg">
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-dark shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/image/dapit.jpg') }}" alt="Card image cap"
                                height="285px">
                            <div class="card-body text-center">
                                <h5 class="card-title text-light text-center fw-bold">David Suka Laksana</h5>
                                <p class="card-text text-light text-center" style="font-size: 13px;">Project Manager
                                </p>
                                <div class="pb-3">
                                    <button class="btn btn-danger rounded-circle" type="button">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button>
                                    <button class="btn btn-success rounded-circle" type="button">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                    <button class="btn btn-dark rounded-circle" type="button">
                                        <i class="fa-brands fa-github"></i>
                                    </button>
                                </div>
                                <audio controls style="width: 200px;">
                                    <source src="/assets/audio/david.mp3" type="audio/ogg">
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-dark shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/image/zaydan.jpg') }}" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title text-light text-center fw-bold">Zaydan Aymar Lutfi</h5>
                                <p class="card-text text-light text-center" style="font-size: 13px;">UI UX Designer
                                </p>
                                <div class="pb-3">
                                    <button class="btn btn-danger rounded-circle" type="button">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button>
                                    <button class="btn btn-success rounded-circle" type="button">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                    <button class="btn btn-dark rounded-circle" type="button">
                                        <i class="fa-brands fa-github"></i>
                                    </button>
                                    <audio controls style="width: 200px;">
                                        <source src="/assets/audio/zaydan.mp3" type="audio/ogg">
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card bg-dark shadow-lg" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('assets/image/fiandra.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title text-light text-center fw-bold">Muh Fiandra badia</h5>
                                <p class="card-text text-light text-center" style="font-size: 13px;">Analisis
                                </p>
                                <div class="pb-3">
                                    <button class="btn btn-danger rounded-circle" type="button">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button>
                                    <button class="btn btn-success rounded-circle" type="button">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                    <button class="btn btn-dark rounded-circle" type="button">
                                        <i class="fa-brands fa-github"></i>
                                    </button>
                                </div>
                                <audio controls style="width: 200px; ">
                                    <source src="/assets/audio/fiandra.mp3" type="audio/ogg">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
@endsection

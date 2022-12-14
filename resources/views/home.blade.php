@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <section class="landing">
        <div class="container">
            <div class="text-center d-flex justify-content-center w-100 flex-column " style="height: 100vh;">
                <div class="main">
                    <h2 class="text-light">Animalia Apps</h2>
                    <p class="d-block mx-auto w-50 text-light my-4">Animalia merupakan aplikasi pengenalan hewan, aplikasi ini ditujukan untuk anak-anak maupun dewasa yang memiliki keinginnan untuk mengenali suara hewan.</p>
                    <a href="{{ url('/animal') }}" class="css-button-rounded--green my-3 text-decoration-none">Discover Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="category-item py-5 bg-dark">
        <main>
            <div class="container">
                <h2 class="text-center fw-bold text-light">Animal Category</h2>
                <div class="d-flex justify-content-center align-content-center py-4">
                    <div class="card mx-2 col-md-4 category" data-aos="fade-right" data-aos-duration="1500">
                        <img src="{{ asset('assets/image/mamalia.png') }}" class="card-img-top w-100" width="25rem">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Mamalia</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card mx-2 col-md-4 category" data-aos="fade-up" data-aos-duration="1500">
                        <img src="{{ asset('assets/image/reptil.png') }}" class="card-img-top h-100 w-100 py-3" width="25rem">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold" >Reptil</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card mx-2 col-md-4 category" data-aos="fade-left" data-aos-duration="1500">
                        <img src="{{ asset('assets/image/amfibi.png') }}" class="card-img-top" width="25rem">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Amphibi</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section class="features-apps py-5 bg-dark">
        <main>
            <div class="container">
                <h2 class="text-center fw-bold text-green">Features Apps</h2>
                <div class="row my-5" data-aos="fade-down-right" data-aos-duration="1000">
                    <div class="image-content col-sm-6 text-center">
                        <img src="{{ asset('assets/image/1.svg') }}" alt="">
                    </div>
                    <div class="descripsi-content col-sm-6">
                        <h5 class="fw-bold text-green">Education</h5>
                        <h2 class="text-light">Learning with audio</h2>
                        <p class="text-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deserunt alias corporis, dolorem, reprehenderit, error unde sunt magnam accusantium minus repudiandae illo repellendus quasi? Necessitatibus repellendus aut nisi perspiciatis soluta.
                        </p>
                    </div>
                </div>
                <div class="row my-5" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="image-content col-sm-6 show text-center">
                        <img src="{{ asset('assets/image/2.svg') }}" alt="">
                    </div>
                    <div class="descripsi-content col-sm-6">
                        <h5 class="fw-bold text-green">Flexible</h5>
                        <h2 class="text-light">Bisa diakses kapanpun</h2>
                        <p class="text-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deserunt alias corporis, dolorem, reprehenderit, error unde sunt magnam accusantium minus repudiandae illo repellendus quasi? Necessitatibus repellendus aut nisi perspiciatis soluta.
                        </p>
                    </div>
                    <div class="image-content col-sm-6 hide text-center">
                        <img src="{{ asset('assets/image/2.svg') }}" alt="">
                    </div>
                </div>
                <div class="row my-5" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="image-content col-sm-6 text-center">
                        <img src="{{ asset('assets/image/3.svg') }}" alt="">
                    </div>
                    <div class="descripsi-content col-sm-6">
                        <h5 class="fw-bold text-green">High Quality Audio</h5>
                        <h2 class="text-light">Nikmati dengan kualitas audio tinggi</h2>
                        <p class="text-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deserunt alias corporis, dolorem, reprehenderit, error unde sunt magnam accusantium minus repudiandae illo repellendus quasi? Necessitatibus repellendus aut nisi perspiciatis soluta.
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>
@endsection

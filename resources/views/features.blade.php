@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
</head>

<body class="bg-dark">
    <img src="{{ asset('assets/image/blob.svg') }}" class="position-absolute left-0" width="80%">
    <div class="container">
        <div class="text-center d-flex justify-content-center w-100 flex-column" style="height: 100vh;">
            <div class="d-block mx-auto mt-5 " data-aos="flip-up" data-aos-duration="1500">
                <img src="{{ asset('assets/image/ph.svg') }}" alt="" width="250px" >
            </div>
            <img src="{{ asset('assets/image/logo.png') }}" alt="" width="200px" class="d-block mx-auto mt-2">
            <div class="img-btn">
                <img src="{{ asset('assets/image/as.png') }}" alt="" width="180px" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/image/ps.png') }}" alt="" width="180px" data-aos="fade-left" data-aos-duration="1000">
            </div>
        </div>
    </div>

    <img src="{{ asset('assets/image/blob2.svg') }}" class="position-absolute" style="bottom: 0; right: 0;" width="90%">
    <div class="container">
        <section class="features">
            <div class="row py-4 mt-5">
                <div class="image-content col-sm-6 text-center" data-aos="zoom-in-right" data-aos-duration="1000">
                    <img src="{{ asset('assets/image/animal.svg') }}" width="300px">
                </div>
                <div class="descripsi-content col-sm-6" data-aos="zoom-in-left" data-aos-duration="1000">
                    <h5 class="fw-bold text-green">Education</h5>
                    <h2 class="text-light">Learning with audio</h2>
                    <p class="text-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deserunt alias corporis,
                        dolorem, reprehenderit, error unde sunt magnam accusantium minus repudiandae illo repellendus
                        quasi? Necessitatibus repellendus aut nisi perspiciatis soluta.
                    </p>
                </div>
            </div>
            <div class="row py-4 mt-5">
                <div class="descripsi-content col-sm-6" data-aos="zoom-in-right" data-aos-duration="1000">
                    <h5 class="fw-bold text-green">Education</h5>
                    <h2 class="text-light">Learning with audio</h2>
                    <p class="text-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deserunt alias corporis,
                        dolorem, reprehenderit, error unde sunt magnam accusantium minus repudiandae illo repellendus
                        quasi? Necessitatibus repellendus aut nisi perspiciatis soluta.
                    </p>
                </div>
                <div class="image-content col-sm-6 text-center" data-aos="zoom-in-left" data-aos-duration="1000">
                    <img src="{{ asset('assets/image/edu.svg') }}" width="300px">
                </div>
            </div>
            <div class="row py-4 mt-5">
                <div class="image-content col-sm-6 text-center" data-aos="zoom-in-right" data-aos-duration="1000">
                    <img src="{{ asset('assets/image/left.svg') }}" width="300px">
                </div>
                <div class="descripsi-content col-sm-6" data-aos="zoom-in-left" data-aos-duration="1000">
                    <h5 class="fw-bold text-green">Education</h5>
                    <h2 class="text-light">Learning with audio</h2>
                    <p class="text-light">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam deserunt alias corporis,
                        dolorem, reprehenderit, error unde sunt magnam accusantium minus repudiandae illo repellendus
                        quasi? Necessitatibus repellendus aut nisi perspiciatis soluta.
                    </p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </section>
    </div>
</body>

</html>
@endsection

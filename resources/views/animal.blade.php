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
    <div class="bg-animal">
        <section class="text-center h-100" style="padding: 8rem 0rem;">
            <h2 class="fw-bold text-light">All Animal's</h2>
            <h5 class="text-light fw-light w-50 d-block mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Enim maxime iste corrupti corporis illo iusto.
                Labore debitis repellendus odio accusamus! Eum, ab. A molestias voluptatum illum, tempore ipsam magnam
                ab.
            </h5>
            
        </section>
    </div>
    <div class="container mt-5 mb-3 ">
        <form action="{{ url('search') }}" method="get" class="d-flex justify-content-center align-items-center">
            <input type="search" name="search" id="search" placeholder="Search Animal" class="form-control w-100 my-5">
            <button type="submit" class="css-button-rounded--green text-decoration-none mx-1">Search</button>
        </form>
        <div class="row">
            @foreach ($animals as $animal)
            <div class="col-sm-4">
                <div class="card mb-3 shadow-lg bg-dark" style="max-width: 550px; opacity: 4; ">
                    <div class="row g-0">
                        <div class="col-md-5 p-0">
                            <img src="/assets/image/{{ $animal->image }}" class="card-img-top h-100">
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('show', $animal->id) }}" class="text-green text-decoration-none fw-bold">{{ $animal ->name }}</a></h5>
                                <p class="card-text text-light">{{ $animal ->description }}</p>
                                <audio controls class="w-100">
                                    <source src="/assets/audio/{{ $animal->audio }}" type="audio/mpeg">
                                </audio>
                                <!-- <form action="{{ route('destroy', $animal->id) }}" method="post">
                                    <a href="{{ route('show', $animal->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                </form> -->
                            </div>
                            <div class="card-footer">
                                <p class="card-text"><small class="text-muted" style="bottom:10px;">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
{!! $animals->links() !!}
@endsection

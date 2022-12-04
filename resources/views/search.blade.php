@extends('layouts.app')

@section('content')
<body>
    <div class="bg-animal">
        <section class="text-center h-100" style="padding: 8rem 0rem;">
            <h2 class="fw-bold text-light">All Animal's</h2>
            <h5 class="text-light fw-light w-50 d-block mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Enim maxime iste corrupti corporis illo iusto.
                Labore debitis repellendus odio accusamus! Eum, ab. A molestias voluptatum illum, tempore ipsam magnam
                ab.
            </h5>
            <a href="{{ url('create') }}" class="btn btn-primary btn-sm my-3">Tambah</a>
        </section>
    </div>
    <div class="container mt-5 mb-3 ">
        <form action="{{ url('/search') }}" method="get" class="d-flex justify-content-center align-items-center">
            <input type="search" name="search" id="search" placeholder="Search Animal" class="form-control w-100 my-5">
            <button type="submit" class="btn btn-primary mx-1">Search</button>
        </form>
        <div class="row">
            @foreach ($animals as $animal)
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/assets/image/{{ $animal->image }}" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-header pt-3">
                                <h5 class="card-title mw-75">{{ $animal ->name }}</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $animal ->description }}</p>
                                <audio controls class="w-100">
                                    <source src="/assets/audio/{{ $animal->audio }}" type="audio/mpeg">
                                </audio>
                                <form action="{{ route('destroy', $animal->id) }}" method="post">
                                    <a href="{{ route('show', $animal->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                    
                                </form>
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
@endsection
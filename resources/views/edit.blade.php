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
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center py-5 mt-5 fw-bold text-green">Edit Animal</h2>

                <form action="{{ route('update', $animal->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="row text-light">
                        <div class="col-xs-12 my-sm-2">
                            <div class="form-group">
                                <p><strong>Name</strong></p>
                                <input type="text" name="name" id="" class="form-control" placeholder="Nama hewan"
                                    value="{{ $animal->name }}">
                            </div>
                        </div>
                        <div class="col-xs-12 my-sm-2">
                            <div class="form-group">
                                <p><strong>Jenis hewan</strong></p>
                                <input type="text" name="jenis" id="" class="form-control" placeholder="Jenis hewan"
                                    value="{{ $animal->jenis }}">
                            </div>
                        </div>
                        <div class="col-xs-12 my-sm-2">
                            <div class="form-group">
                                <p><strong>Deskripsi</strong></p>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"
                                    placeholder="deskripsi hewan">{{ $animal->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 my-sm-2">
                            <p><strong>Audio</strong></p>
                            <input type="file" name="audio" id="" class="form-control" placeholder="audio hewan"
                                accept="audio/mp3">
                            <!-- <audio controls class="w-100">
                                <source src="/assets/audio/{{ $animal->audio }}" type="audio/mpeg">
                            </audio> -->
                        </div>
                        <div class="col-xs-12 my-sm-2">
                            <p><strong>Image</strong></p>
                            <input type="file" name="image" id="" class="form-control" placeholder="image hewan"
                                accept="image/*">
                            <!-- <img src="/assets/image/{{ $animal->image }}" class="img-fluid rounded-start w-25" > -->
                        </div>
                        <div class="col-xs-12 my-sm-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            @if (Auth::user()->user_type == 'admin')
                            <a href="{{ route('admin')}}" class="btn btn-danger mx-2">Back</a>
                            @else
                            <a href="{{ route('index')}}" class="btn btn-danger mx-2">Back</a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
@endsection

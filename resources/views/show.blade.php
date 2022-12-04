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
                <div class="text-center py-5 text-green fw-bold mt-5">
                    <h2>{{ $animal->name }}</h2>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                    <img src="/assets/image/{{ $animal->image }}" class="d-block mx-auto mb-5" width="500px">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="d-flex justify-content-center align-items-center">
                <div class="form-group text-light">
                    <p class="d-block mx-auto w-75 text-center">
                    {{ $animal->description }}
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                    <audio controls class="w-50 d-block mx-auto my-4">
                        <source src="/assets/audio/{{ $animal->audio }}" type="audio/mpeg">
                    </audio>
                </div>
            </div>
            <div class="col-sm-12 mt-5">
                @if (Auth::user()->user_type == 'admin')
                <a href="{{ route('admin')}}" class="btn btn-danger mx-2">Back</a>
                @else
                <a href="{{ route('index')}}" class="btn btn-danger mx-2">Back</a>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
@endsection

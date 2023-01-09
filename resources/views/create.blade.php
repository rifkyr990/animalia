@extends('layouts.app')

@section('content')

<body class="bg-dark">
    <div class="container">
        <div class="col-sm-12 my-5 text-center">
            <h2 class="fw-bold text-green">Form Animal</h2>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Gagal</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @else

        @endif
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row text-light">
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Name</strong></p>
                        <input type="text" name="name" id="" class="form-control" placeholder="Nama hewan">
                    </div>
                </div>
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Jenis hewan</strong></p>
                        <input type="text" name="jenis" id="" class="form-control" placeholder="Jenis hewan">
                    </div>
                </div>
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Deskripsi</strong></p>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"
                            placeholder="deskripsi hewan"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 my-sm-2">
                    <p><strong>Audio</strong></p>
                    <input type="file" name="audio" id="" class="form-control" placeholder="audio hewan"
                        accept="audio/mp3" multiple>
                </div>
                <div class="col-xs-12 my-sm-2">
                    <p><strong>Image</strong></p>
                    <input type="file" name="image" id="" class="form-control" placeholder="image hewan"
                        accept="image/*" multiple>
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
</body>
@endsection

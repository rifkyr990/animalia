@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>

<body class="bg-dark">
    <div class="container">
        <h2 class="fw-bold py-4 text-center mt-5 text-light">Data Admin</h2>
        <table class="table table-bordered text-center bg-transparent">
            <thead>
                <tr>
                    <th scope="col" class="text-light">No</th>
                    <th scope="col" class="text-light">Nama</th>
                    <th scope="col" class="text-light">Deskripsi</th>
                    <th scope="col" class="text-light" width="400">Image</th>
                    <th scope="col" class="text-light" width="300">Audio</th>
                    <th scope="col" class="text-light">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal)
                <tr>
                    <td class="text-light">{{ ++$i }}</td>
                    <td class="text-light">{{ $animal ->name }}</td>
                    <td class="text-light">{{ $animal ->description }}</td>
                    <td class="text-light"><img src="/assets/image/{{ $animal->image }}" class="img-fluid rounded-start w-50"></td>
                    <td class="text-light">
                        <audio controls class="w-100">
                            <source src="/assets/audio/{{ $animal->audio }}" type="audio/mpeg">
                        </audio>
                    </td>
                    <td>
                        <form action="{{ route('destroy', $animal->id) }}" method="post">
                            <a href="{{ route('show', $animal->id) }}" class="btn btn-sm btn-primary">Detail</a>
                            <a href="{{ route('edit', $animal->id) }}" class="btn btn-sm btn-info">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>
@endsection

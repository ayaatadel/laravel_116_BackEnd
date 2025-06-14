<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <x-BootstrapCss></x-BootstrapCss>
</head>

<body>
    <x-NavBar></x-NavBar>

<h1 style="margin-top: 100px;" class="text-center text-success">{{ $track->name }} Track Data</h1>
<div class="m-5">
    <table class="table w-75 m-auto border ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Picture</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $track->id}}</th>
                <td>{{ $track->name }}</td>
                <td><img style="width: 80px; height:80px" src="{{ $track->logo }}" alt="track picture"></td>
                <td class="m-2">

                    <a href="{{ route('tracks.index') }}">
                        <button class="btn btn-warning">Back</button>

                    </a>
                </td>
            </tr>


        </tbody>
    </table>
</div>



{{-- realation ===> students   ==> array --}}

{{-- @dump($track->students) --}}

@if ($track->students)
<table class="table table-bordered w-75 m-auto">
    <thead>
        <th scope="col"> Student ID</th>
        <th scope="col"> Student Name</th>
        <th scope="col"> Action</th>
    </thead>
    <tbody>

        @foreach ($track->students as $student )
<tr>
    <td>
        {{ $student->id }}
    </td>
    <td>
        {{ $student->name}}
    </td>
    <td>
       <a href="{{ route('tracks.index') }}">
    <button class="btn btn-success">Back</button>
</a>
    </td>
</tr>
        @endforeach
    </tbody>
</table>

@endif


    <x-BootstrapJs></x-BootstrapJs>
</body>

</html>

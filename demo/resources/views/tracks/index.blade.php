<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Tracks</title>

<x-BootstrapCss></x-BootstrapCss>
</head>

<body>
    <x-NavBar></x-NavBar>
    <h1 class="text-success m-5">

    </h1>
   <section class="m-5 d-flex justify-content-around">
     <div class="m-5 text-center">
        <a href="{{ route('tracks.create') }}">

            <x-button class="info" name="Create track"></x-button>

        </a>
    </div>
    <div class="m-5 text-center">
        <a href="{{ route('students.index') }}">

            <x-button class="success" name="All Students"></x-button>

        </a>
    </div>
   </section>
    <div class="m-3">
        <table class="table w-75 m-auto border ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ( $tracks as $track)
                {{-- @dd($track) --}}
                <tr>
                    <th scope="row">{{ $track->id}}</th>
                    <td>{{ $track->name }}</td>
                    <td><img style="width: 60px;heigth=60px" src="{{ $track->logo }}" alt="track Image" srcset="">
                    </td>

                    <td class="m-2 d-flex justify-content-between">

                        <div>
                            <a href="{{ route('tracks.show',$track->id) }}">

                                <x-button class="warning" name="View"></x-button>


                            </a>
                        </div>
                        <div>
                            <a href="{{ route('tracks.edit',$track->id) }}">

                                <x-button class="info" name="Update"></x-button>


                            </a>
                        </div>
                        <div>
                            <form action="{{ route('tracks.destroy',$track->id) }}" method="post">
                                @method('DELETE')
                                @csrf

                                <x-button class="danger" name="Delete"></x-button>


                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center mt-5">
            {{ $tracks->links() }}
        </div>
    </div>


    <x-BootstrapJs></x-BootstrapJs>

</body>

</html>

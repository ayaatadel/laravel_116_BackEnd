<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    --}}

    <x-BootstrapCss></x-BootstrapCss>
</head>

<body>
    <x-NavBar></x-NavBar>
    {{-- @dump($students) --}}
    <h1 class="text-success m-3">

    </h1>
    <section class="m-5 d-flex justify-content-around">
        <div class="m-5 text-center">
            <a href="{{ route('students.create') }}">
                <x-button class="info" name="Create Student"></x-button>

            </a>
        </div>

        <div class="m-5 text-center">
            <a href="{{ route('tracks.index') }}">

                <x-button class="success" name="All Tracks"></x-button>

            </a>
        </div>
    </section>
    <div class="m-3">
        <table class="table w-75 m-auto border ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $students as $student)
                {{-- @dd($student) --}}
                <tr>
                    <th scope="row">{{ $student->id}}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td><img style="width: 60px;heigth=60px" src="{{ $student->image }}" alt="student Image" srcset="">
                    </td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->gender }}</td>
                    <td class="m-2 d-flex justify-content-between">
                        {{-- <a href="{{ route('studentData',$student->id) }}">
                            <button class="btn btn-warning">View</button>

                        </a> --}}
                        <div>
                            <a href="{{ route('students.view',$student->id) }}">
                                {{-- <button class="btn btn-warning">View</button> --}}
                                <x-button class="warning" name="View"></x-button>


                            </a>
                        </div>
                        <div>
                            <a href="{{ route('students.update',$student->id) }}">
                                {{-- <button class="btn btn-info">Update </button> --}}
                                <x-button class="info" name="Update"></x-button>


                            </a>
                        </div>
                        <div>
                            <form action="{{ route('students.destroy',$student->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                {{-- generate token ==> sure has access on data --}}
                                {{-- <button class="btn btn-danger">Delete</button> --}}
                                <x-button class="danger" name="Delete"></x-button>


                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
        <div class="d-flex justify-content-center align-items-center mt-5">
            {{ $students->links() }}
        </div>
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}
    <x-BootstrapJs></x-BootstrapJs>

</body>

</html>

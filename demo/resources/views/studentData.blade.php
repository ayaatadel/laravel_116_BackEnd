<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{-- @dump($student) --}}

<table class="table w-75 m-auto border ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Picture</th>
        <th scope="col">Gender</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $student->id}}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->phone }}</td>
            <td><img  style="width: 80px; height:80px" src="{{ $student->image }}" alt="student picture"></td>
            <td>{{ $student->gender }}</td>
            <td class="m-2">
                {{-- <a href="{{ route('students') }}">
                    <button class="btn btn-warning">Back</button>

                </a> --}}
                <a href="{{ route('students.index') }}">
                    <button class="btn btn-warning">Back</button>

                </a>
            </td>
          </tr>


    </tbody>
  </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>





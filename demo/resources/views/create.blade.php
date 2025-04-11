<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Student</title>
    {{-- bootstrap css link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<h1 class="text-success m-3 ">
    Create New Student
</h1>
   <secton class="text-center m-3">
    <form  class="w-75 m-auto text-center border border-dark p-2" method="POST" action="{{ route('students.store') }}" >
        @csrf
                        {{-- student name --}}

        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Student Name</label>
            <input name='name' type="text" class="form-control" id="exampleInputName">
        </div>
                        {{-- student Email --}}

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
                {{-- student Age--}}

        <div class="mb-3">
            <label for="exampleInputAge" class="form-label">Student Age</label>
            <input name='age' type="number" class="form-control" id="exampleInputAge">
        </div>
                {{-- student Address --}}

        <div class="mb-3">
            <label for="exampleInputAddress" class="form-label">Student Address</label>
            <input name='address' type="text" class="form-control" id="exampleInputAddress">
        </div>

        {{-- student gender --}}
        <div class="form-check">
            <input value='male' class="form-check-input" type="radio" name="gender" id="gender1">
            <label class="form-check-label" for="gender1">
                male
            </label>
        </div>
        <div class="form-check">
            <input value='female' class="form-check-input" type="radio" name="gender" id="gender2" >
            <label class="form-check-label" for="gender2">
                female
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </secton>


    {{-- bootstrap js cdn link --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

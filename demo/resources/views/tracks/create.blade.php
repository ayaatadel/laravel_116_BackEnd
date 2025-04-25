<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New track</title>
    {{-- bootstrap css link --}}
    <x-BootstrapCss></x-BootstrapCss>
</head>

<body>
    <h1 class="text-success m-3 ">
        Create New Track
    </h1>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <secton class="text-center m-3">

        <form class="w-75 m-auto text-center border border-dark p-2" method="POST" action="{{ route('tracks.store') }}">
            @csrf
            {{-- track error message --}}
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            {{-- track name --}}


            <div class="mb-3">
                <label for="exampleInputName" class="form-label">track Name</label>
                <input name='name' type="text" class="form-control" id="exampleInputName">
            </div>


            {{-- track error message --}}
            @error('logo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            {{-- track logo --}}


            <div class="mb-3">
                <label for="exampleInputLogo" class="form-label">Track Logo</label>
                <input name='logo' type="text" class="form-control" id="exampleInputLogo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </secton>


    {{-- bootstrap js cdn link --}}
    <x-BootstrapJs></x-BootstrapJs>
</body>

</html>

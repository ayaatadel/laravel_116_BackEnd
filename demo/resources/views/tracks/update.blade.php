<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create New track</title>
        {{-- bootstrap css link --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
    <h1 class="text-success m-3 ">
       Update Track <Datag></Datag>
    </h1>
       <secton class="text-center m-3">
        <form  class="w-75 m-auto text-center border border-dark p-2" method="POST" action="{{ route('tracks.update',$track->id) }}" >
            @csrf
            @method('put')
                            {{-- track name --}}

            <div class="mb-3">
                <label for="exampleInputName" class="form-label">track Name</label>
                <input name='name' type="text" class="form-control" id="exampleInputName" value="{{ $track->name }}">
            </div>
              {{-- track logo --}}
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">track Logo</label>
                <input name='logo' type="text" class="form-control" id="exampleInputName" value="{{ $track->logo }}">
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

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP 116 </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- bootstrap CSS --}}
     <x-BootstrapCss></x-BootstrapCss>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1 style="text-align: center; color:blue"> MEC GROUP 116 BACK END </h1>


    <x-NavBar></x-NavBar>
<div class="m-5 text-center">
<a href="{{ route('students.index') }}">
    {{-- <button class="btn btn-info ">All Students</button> --}}
    <x-button class="info" name="All Students"></x-button>


</a>
</div>
<div class="m-5 text-center">
<a href="{{ route('tracks.index') }}">
    <x-button class="warning" name="All Tracks"></x-button>

</a>

</div>
       {{-- bootstrap JS --}}
       <x-Bootstrapjs></x-Bootstrapjs>
</body>

</html>

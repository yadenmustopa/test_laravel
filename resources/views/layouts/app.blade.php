<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script  src="https://cdn.tailwindcss.com"> --}}
        <title>@yield("title","Test We")</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@2.18.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.18.1/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    @include("layouts.navigation")
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>
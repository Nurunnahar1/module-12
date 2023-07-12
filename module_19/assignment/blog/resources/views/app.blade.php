<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page Design</title>
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css') }}">
</head>

<body>
    @include('components.header')
    <main class="flex-shrink-0">



        <div class="" id="content-div">
            @yield('content')
        </div>


    </main>
    @include('components.footer')




    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js') }}">
    </script>
</body>

</html>

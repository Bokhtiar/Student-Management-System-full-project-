<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
    <title>Student Management Systems</title>
    <style>
        body {
            font-family: 'Trebuchet MS', sans-serif;
        }

    </style>
</head>

<body>
    <section>
        <!--start here navbar-->
        @include('layouts.admin.partial._header')
        <!--end here navbar-->
        <!--after navbar wrapper start here-->
        <section>
            <div class="row">
                <!--sidebar start here-->
                @include('layouts.admin.partial._sidebar')
                <!--sidebar end here-->

                <!--main body wrapper start here-->
                <div class="col-md-10">
                    @yield('admin_content')
                    <!--main body wrapper end here-->
                </div>
        </section>
        <!--after navbar wrapper end here-->

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="/assets/vendor/chart.js/dist/Chart.extension.js"></script>

</body>

</html>

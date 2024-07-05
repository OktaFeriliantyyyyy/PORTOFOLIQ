
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminAsset/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminAsset/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('AdminAsset/images/favicon.svg" type="image/x-icon') }}">
</head>

<body>
    <div id="app">

        @include('Admin.pages.partials.komponen.sidebar')

        <div id="main" class='layout-navbar'>
            
            @include('Admin.pages.partials.komponen.header')

            <div id="main-content">
                <div class="page-heading">
                    <section class="section bg-white">
                        @yield('adminKonten')
                    </section>
                </div>
            </div>
        </div>

        <div id="main">
            @include('Admin.pages.partials.komponen.footer')
        </div>
    </div>


    <script src="{{ asset('AdminAsset/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('AdminAsset/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('AdminAsset/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('AdminAsset/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('AdminAsset/js/main.js') }}"></script>
</body>

</html>

    {{-- <div id="app">

        @include('Admin.pages.partials.komponen.sidebar')

        <div id="main">
           
            @yield('adminKonten')

            @include('Admin.pages.partials.komponen.footer')

        </div>
    </div> --}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Optional CSS -->
    @stack('styles')

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">

    <title>CoreUI</title>
</head>

<body class="c-app">
    @include('layouts.partials.sidebar')

    <div class="c-wrapper c-fixed-components">
        @include('layouts.partials.header')
                <div class="c-subheader px-3">
                @yield('breadcrumbs')
            </div>
        </header>
        
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        @yield('content')
                    </div>
                </div>
            </main>
            @include('layouts.partials.footer')
        </div>
    </div>

    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Page Script -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        })

    </script>
    @if (session('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: @json(session('success'))
        })
    </script>
    @elseif (session('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: @json(session('error'))
        })
    </script>
    @endif
    

    <!-- CoreUI JS -->
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>

    <!-- Optional Scripts -->
    @stack('scripts')
</body>

</html>
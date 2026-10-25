<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lafemme Florist - Admin</title>
    @include('layouts.admin.css')
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar d-none d-md-block">
                @include('layouts.admin.sidebar')
            </div>

            <!-- Main Content -->
            <div class="col-md-10 d-flex flex-column min-vh-100">
                @include('layouts.admin.header')

                <!-- Main Section Content -->
                <div class="p-4 flex-grow-1">
                    @yield('content')
                </div>

                <!-- Footer Included Here -->
                @include('layouts.admin.footer')
            </div>
        </div>
    </div>
    @include('layouts.admin.js')
</body>
</html>
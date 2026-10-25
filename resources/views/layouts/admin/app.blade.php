<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lafemme Florist - Admin</title>
  @include('layouts.admin.css')
</head>
<body>
  <div class="admin-shell">
    <aside class="admin-sidebar" id="adminSidebar">
      @include('layouts.admin.sidebar')
    </aside>

    <div class="admin-main">
      @include('layouts.admin.header')

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          @yield('content')
        </div>
      </main>

      @include('layouts.admin.footer')
    </div>
  </div>

  @include('layouts.admin.js')
</body>
</html>
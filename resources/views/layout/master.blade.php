    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
  </head>
  <body data-bs-theme="dark">
       @include('layout.topbar')


       <div class="container-fluid">
       <h4>@yield('title')</h4> 
       @yield('content')
       </div>

       @include('layout.footer')
  </body>
  </html>

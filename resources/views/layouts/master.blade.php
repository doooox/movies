
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

        @include('partials.header')

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-center text-white bg-dark ">
          <a class="p-2 text-white mx-5" href="/movies">Movies</a>
          <a class="p-2 text-white mx-5" href="/add">Add new movie</a>
        </nav>
      </div>

    <main role="main" class="container my-5">
      <div class="row">
        <div class="col-md-8 blog-main">
          @yield('content')
        </div><!-- /.blog-main -->
        @include('partials.sidebar')
      </div>
    </main>
    @include('partials.footer')
  </body>
</html>

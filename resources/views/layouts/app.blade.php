<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <?php echo ?> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css")  }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="index.php">Simple Crud</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="{{ url("/products") }}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light"  aria-current="page" href="{{route('create')  }}">Create Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light"  aria-current="page" href="">Create Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="">welcome
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield("basic-section")
    <footer class="text-center bg-danger text-light p-5">
        <p>copy rights to @php4 online group</p>
    </footer>
    </body>
    </html>

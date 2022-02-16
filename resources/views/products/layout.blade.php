<html>
    <head>
        <title>Product Details </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
      </head>
    <body>
    <div  class="text-center">
    </div>
    <nav class="navbar container navbar-expand-lg navbar-light " style="background-color: rgb(117, 115, 115)">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{URL::to('/')}}">E-com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{URL::to('/products')}}">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{URL::to('/categorys')}}">Category</a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link active " href="{{ URL::to('/subCategorys') }}">Sub Category</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
        <div class="container">
            <br>
            @yield('content')
        </div>

    </body>
</html>



@section('content')

    <nav class="navbar container navbar-expand-lg navbar-light " style="background-color: rgb(117, 115, 115)">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{URL::to('/')}}"><b>E-com</b></a>
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
                <a class="nav-link active ">User</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      @endsection
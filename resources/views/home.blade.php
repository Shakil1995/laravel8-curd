<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {
            display: none;
        }

    </style>

</head>

<body>
    @include('Layouts.navbar')

    @yield('content')
    <div class="row  mt-2 container d-flex justify-content-center">
        @foreach ($products as $product)
            <div class="col-md-3 mt-3  ">
                <div class="card  " style="background-color: rgb(216, 213, 213)">
                    <img style="width: auto; height:200px " src="{{ asset($product->product_img) }}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="height: 50px" class="card-title"><b>{{ $product->name }}</b></h5>
                        <h3><b>$140</b></h3>
                        <div class="row  p-2 " style="background-color: #d9d9d9">
                            <div class="col-md-6">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Detalis</a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <a class="btn btn-success" href="#"> Buy Now</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
</body>

</html>

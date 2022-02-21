<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detalis </title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="container">

    @include('Layouts.navbar')
    @yield('content')
    <div class="row mb-3">
        <div class="col-md-6 ">
            <h2>Product Detalis </h2>
           </div>
           <div class="col-md-6 d-flex justify-content-end">
               <button><a class="btn btn-success" href="#">  Back</a></button> 
           </div>
    </div>

    <div class="container">
        <div class="row" >
           <div class="col-md-6 item-photo" style=""  >
                <img  style="max-width:100%; height: 100%; " src="{{ asset($products->product_img) }}" />
            </div>
            <div class="col-md-6" style="border:0px solid gray">
                <!-- Datos del vendedor y titulo del producto -->
                <h3>{{ $products->name }}</h3>    
                <h5 style="color:#337ab7"><b>Category</b>  <a href="#">{{ $products->category->category_name }}</a> · <small style="color:#337ab7">(5054 Rating)</small></h5>
    
                <!-- Precios -->
                <h6 class="title-price"><small>Order Pirce</small></h6>
                <h3 style="margin-top:0px;">$ 399</h3>
    
                <!-- Detalles especificos del producto -->
                <div class="section">
                    <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
                    <div>
                        <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                        <div class="attr" style="width:25px;background:white;"></div>
                    </div>
                </div>
                <div class="section" style="padding-bottom:5px;">
                    <h6 class="title-attr"><small>Size</small></h6>                    
                    <div>
                        <div class="attr2">16 </div>
                        <div class="attr2">32 </div>
                        <div class="attr2">32 </div>
                        <div class="attr2">32 </div>
                    </div>
                </div>   
                <div class="section" style="padding-bottom:20px;">
                    <h6 class="title-attr"><small>Quantity</small></h6>                    
                    <div>
                        <div class="btn-minus  btn btn-primary"><span class="glyphicon glyphicon-minus"></span><b>-</b></div>
                        <input value="1" />
                        <div class="btn-plus btn btn-primary"><span class="glyphicon glyphicon-plus"></span><b>+</b> </div>
                    </div>
                </div>                
    
                <!-- Botones de compra -->
                <div class="section" style="padding-bottom:20px;">
                    <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Order Now</button>
                </div>                                        
            </div>                              
    
            <div class="col-xs-9 mb-5">
                <ul class="menu-items ">
                    <li class="active">Product Detalis</li>
                    <li>Ratings & Reviews</li>
                    <li>Questions </li>
                </ul>
                <div style="width:100%;border-top:1px solid silver mt-5">
                    {{ $products->detail }}
                </div>
            </div>		
        </div>
    </div>     
    
   
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript">

$(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
    </script>
</body>
</html>
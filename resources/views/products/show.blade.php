@extends('products.layout')
@section('content')
<div class="row mb-3">
    <div class="col-md-6">
         <h2>Product Detalis </h2>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a> 
       </div>
</div>
<div class="row mb-4">
    <div class="col-md-12 d-flex justify-content-center">
        <img src="{{ asset($products->product_img)}}" height="200" width="350">
    </div>
</div>


<div class="row mb-5">
    <div class="col-md-12 d-flex justify-content-center">
<table class="table table-bordered   " style="width: 80%">
    <thead class="thead-light ">
      <tr  class="text-center" >
        <th  style="width: 20%" scope="col">Main</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>User Name</td>
        <td> {{ $products->user->name  ?? 'None' }}</td>
      </tr>
      <tr>
        <td>User Email</td>
        <td> {{ $products->user->email  ?? 'None' }}</td>
      </tr>
      <tr>
        <td>Product Category</td>
        <td> {{ $products->category->category_name   ?? 'None'}}</td>
      </tr>
      <tr>
        <td>Product Title</td>
        <td> {{ $products->name   ?? 'None'}}</td>
      </tr>
      <tr>
        <td>Product Details</td>
        <td>  {{ $products->detail ?? 'None'}}</td>
      </tr>
    
    </tbody>
  </table>
</div>
</div>

@endsection
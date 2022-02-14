@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <img src="{{ asset($products->product_img)}}" height="200" width="300">
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User Name : </strong>
            {{ $products->user->name  ?? 'None' }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>User Email</strong>
            {{ $products->user->email  ?? 'None' }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Category</strong>
            {{ $products->category->category_name   ?? 'None'}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product  Title:</strong>
            {{ $products->name   ?? 'None'}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product description:</strong>
            {{ $products->detail }}
        </div>
    </div>
</div>

@endsection
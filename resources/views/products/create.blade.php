@extends('products.layout');


@section('content')



<div class="row">
    <div class="col-lg-12 margin-tb" >
        <div class="pull-left">
            <p>Add new Product </p>
          </div>

          <div class="pull-right">
           <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
          </div>
    </div>
</div>



@if ($errors->any())
    <div class="alert alert-danger">
        <strong>whoops ! </strong> problem in ypur input
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif






<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" class="form-control" placeholder="name" name="name">
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group">
                <strong>Details</strong>
                <textarea type="text" class="form-control" rows="4" cols="50" placeholder="Product detail" name="detail"></textarea>
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3" >
            
                <button type="submit" class="btn btn-primary"  >Submit</button>
           
        </div>



    </div>





</form>





@endsection
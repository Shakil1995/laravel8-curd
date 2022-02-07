@extends('products.layout');


@section('content')



<div class="row">
    <div class="col-lg-12 margin-tb" >
        <div class="pull-left">
            <h3>Add new Product </h3>
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
                <strong>User Name</strong>
                <select class="form-control" name="user_id" required="">
                    @foreach($user as $row)
                      <option value="{{ $row->id }}">{{ $row->name }}</option>
                    @endforeach
                </select>
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" class="form-control" placeholder="product Title" name="name">
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" >
            <div class="form-group">
                <strong>description</strong>
                <textarea type="text" class="form-control" rows="4" cols="50" placeholder="Product description" name="detail"></textarea>
              </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3" >
            
                <button type="submit" class="btn btn-primary"  >Submit</button>
           
        </div>



    </div>





</form>





@endsection
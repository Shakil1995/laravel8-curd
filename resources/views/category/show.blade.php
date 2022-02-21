@extends('category.layout')
@section('content')
<div class="row mb-3">
    <div class="col-md-6 ">
        <h2>Category Show </h2>
       </div>
       <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('categorys.index') }}"> Back </a>
       </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category Name : </strong>
            {{ $categories->category_name }}
        </div>
    </div>
  
    
   
</div>

@endsection